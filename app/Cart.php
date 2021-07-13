<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Cart;

class Cart extends Model
{
    use SoftDeletes; //追加
    protected $guarded =array("id");
    protected $fillable =["user_id", "shop_id", "amount"];

    public function shop(){
      return $this->belongsTo("App\Shop");
    }

    public function user(){
      return $this->belongsTo("App\User", "user_id");
    }

    public function checkoutCart(){
      $user_id =Auth::id();
      $checkout_items =$this->where("user_id", $user_id)->get();
      $this->where("user_id", $user_id)->delete();//softdelete

      return $checkout_items;
    }

    public function checkoutCountingAmount(){
      $user_id =Auth::id();
      $checkout_items =$this->where("user_id", $user_id)->get();
      $checkout_amount =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum("amount");

      return $checkout_amount;
    }

    public function checkoutCountingFee(){
      $user_id =Auth::id();
      $checkout_items =$this->where("user_id", $user_id)->get();
      $checkout_fee =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum(DB::raw("fee * amount"));

      return $checkout_fee;
    }


}
