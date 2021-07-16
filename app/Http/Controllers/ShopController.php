<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Shop;
use App\Cart;
use App\Delivery;
use Illuminate\Support\Facades\Mail;
use App\Mail\Thanks;
use App\Mail\OrderShip;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops =Shop::with("carts")->where("fee", "<=", 107)->orderBy("created_at", "desc")->get();
        return view("index", compact("shops"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id =Auth::id();
        $shop_id =$request->shop_id;
        $amount =$request->amount;

        $cart_add_info =Cart::with("shop")->firstOrCreate(["shop_id"=>$shop_id, "user_id"=>$user_id, "amount"=>$amount]);

        if($cart_add_info ->wasRecentlyCreated){
          //$message ="カートに1つの商品を追加しました。";
          $request->session()->flash("message", "カートに1つの商品を追加しました。");
        } else {
          $request->session()->flash("message", "カートに登録済みです");
          //$message ="カートに登録済みです";
        }

        //$message =$request->message;
        $my_cart =Cart::with("shop")->where("user_id", $user_id)->get();
        return redirect()->route("cart", compact("my_cart"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Cart $cart)
    {
        $user_id =Auth::id();
        $my_cart =Cart::with("shop")->where("user_id", $user_id)->get();

        $join_table_sum =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum(DB::raw("fee * amount"));
        $join_table_sum_amount =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum("amount");

        return view("carts.cart", compact("my_cart", "join_table_sum", "join_table_sum_amount"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user_id =Auth::id();
        $shop_id =$request->shop_id;
        #$amount =$request->amount;
        $deletes =Cart::with("shop")->where("shop_id", $shop_id)->forceDelete();//完全削除

        if ($deletes >0){
          $message ="カートから1つの商品を削除しました";
        } else {
          $message ="削除できませんでした";
        }

        $my_cart =Cart::with("shop")->where("user_id", $user_id)->get();
        $join_table_sum =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum(DB::raw("fee * amount"));
        $join_table_sum_amount =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum("amount");

        return view("carts.cart", compact("message", "my_cart", "join_table_sum", "join_table_sum_amount"));
    }

    public function checkout(Request $request, Cart $cart)
    {
        $user =Auth::user();
        $user_id =Auth::id();

        $checkout_items =Cart::with("shop")->where("user_id", $user_id)->get();
        $checkout_amount =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum("amount");
        $checkout_fee =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum(DB::raw("fee * amount"));

        $mail_data['user']=$user->name;
        $mail_data["checkout_amount"]=$cart->checkoutCountingAmount();
        $mail_data["checkout_fee"] =$cart->checkoutCountingFee();

        $mail_data['checkout_items']=$cart->checkoutCart();

        #購入者への通知メール
        Mail::to($user->email)->send(new Thanks($mail_data));
        #配達者への通知メール
        $delivery =Delivery::pluck("email");
        $delivery->all();
        Mail::to($delivery)->send(new OrderShip($mail_data));
        #見守り人(sub_email)への通知メール
        #Mail::to($user->sub_email)->send(new Thanks($mail_data));
        return view('carts.checkout', compact("checkout_items", "checkout_amount", "checkout_fee"));
    }

    public function orderhistory(Request $request, Cart $cart)
    {
        $user_id =Auth::id();
        $shop_id =$request->shop_id;
        $shop =Shop::all();
        $history =Cart::with("shop")->where("user_id", $user_id)->onlyTrashed()->whereNotNull('deleted_at')->get();

        return view("history", compact("history", "shop_id", "shop"));
    }

    public function search(Request $request)
    {
        $keyword =$request->input("keyword");
        #キーワード受け取り.【重要!!】inputの中は keyword!!,×name,×detail,
        $query =Shop::query(); #クエリ生成

        if(!empty($keyword)){
          $query->where('name', 'like', '%'.$keyword.'%')
                ->orWhere('detail', 'like', '%'.$keyword.'%')
                ->orWhere("category", "like", "%".$keyword."%")
                ->orWhere("store", "%".$keyword."%");
        } #queryに集約
        $shops =$query->paginate(6); #ここで受け取り
        return view('search', compact("keyword", "shops"));
    }

    public function select()
    {
        return view("select");
    }

    public function select_store()
    {
        return view("select.select_store");
    }

    public function select_store_goods(Request $request)
    {
        $store =$request->store;
        if($store =="東友"){
          $shop =Shop::with("carts")->where("store", "=", "東友")->orderBy("created_at", "desc")->get();
        } elseif($store =="プレスコ") {
          $shop =Shop::with("carts")->where("store", "=", "プレスコ")->orderBy("created_at", "desc")->get();
        } else {
          $shop =Shop::with("carts")->where("store", "=", "アズミヤ")->orderBy("created_at", "desc")->get();
        }

        return view("select.select_store_goods", compact("shop", "store"));
    }

    public function select_category()
    {
        return view("select.select_category");
    }

    public function select_category_goods(Request $request)
    {
        $category =$request->category;
        if($category =="野菜・果物"){
          $shops =Shop::with("carts")->where("category", "=", "野菜・果物")->orderBy("created_at", "desc")->paginate(6);
        } elseif($category =="魚介類・肉・肉加工品・ハム・ソーセージ") {
          $shops =Shop::with("carts")->where("category", "=", "魚介類・肉・肉加工品・ハム・ソーセージ")->orderBy("created_at", "desc")->paginate(6);
        } elseif($category =="卵・乳製品・牛乳・豆乳・豆腐・納豆") {
          $shops =Shop::with("carts")->where("category", "=", "卵・乳製品・牛乳・豆乳・豆腐・納豆")->orderBy("created_at", "desc")->paginate(6);
        } elseif($category =="お米・麺・パスタ・パン") {
          $shops =Shop::with("carts")->where("category", "=", "お米・麺・パスタ・パン")->orderBy("created_at", "desc")->paginate(6);
        } elseif($category =="食油・調味料") {
          $shops =Shop::with("carts")->where("category", "=", "食油・調味料")->orderBy("created_at", "desc")->paginate(6);
        } elseif($category =="菓子・スイーツ・アイス・飲料・お水") {
          $shops =Shop::with("carts")->where("category", "=", "菓子・スイーツ・アイス・飲料・お水")->orderBy("created_at", "desc")->paginate(6);
        } else {
          $shops =Shop::with("carts")->where("category", "=", "衣料用洗剤・柔軟剤・衣料用漂白剤")->orderBy("created_at", "desc")->paginate(6);
        }

        return view("select.select_category_goods", compact("shops", "category"));
    }

    public function select_bargain()
    {
        $shops =Shop::with("carts")->where("fee", "<=", 107)->orderBy("created_at", "desc")->paginate(6);

        return view("select.select_bargain", compact("shops"));
    }

    public function goods_detail($id)
    {
        $shop =Shop::with("carts")->findOrFail($id);
        return view("select.goods_detail", compact("shop"));

    }

    public function company()
    {
        return view("company");
    }


}
