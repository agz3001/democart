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

    public function checkoutWeightAmount(){
      $user_id =Auth::id();
      $checkout_items =$this->where("user_id", $user_id)->get();
      $weight_amount =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum(DB::raw("weight * amount"));
      $weight_amount *=0.001;

      return $weight_amount;
    }

    public function checkoutServiceCharge(){
      $user_id =Auth::id();
      $service_charge;
      $checkout_items =$this->where("user_id", $user_id)->get();
      $checkout_fee =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum(DB::raw("fee * amount"));
      if($checkout_fee <3000){
        $service_charge =500;
      } else {
        $service_charge =400;
      }

      return $service_charge;
    }

    public function checkoutTotalWeightCharge(){
      $user_id =Auth::id();
      $total_weight_charge;
      $checkout_items =$this->where("user_id", $user_id)->get();
      $weight_amount =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum(DB::raw("weight * amount"));
      $weight_amount *=0.001;
      if($weight_amount <5){
        $total_weight_charge =500;
      } elseif (5 <=$weight_amount && $weight_amount <10){
        $total_weight_charge =1000;
      } elseif (10 <=$weight_amount && $weight_amount <15){
        $total_weight_charge =1500;
      } elseif (15 <=$weight_amount && $weight_amount <20) {
        $total_weight_charge =2000;
      } else {
        return false;
      }

      return $total_weight_charge;
    }

    public function checkoutShoppingBag(){
      $user_id =Auth::id();
      $checkout_items =$this->where("user_id", $user_id)->get();
      $shopping_bag =10;

      return $shopping_bag;
    }

    public function checkoutTotalCharge(){
      $user_id =Auth::id();
      $service_charge;
      $total_weight_charge;

      $checkout_items =$this->where("user_id", $user_id)->get();

      $checkout_fee =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum(DB::raw("fee * amount"));
      if($checkout_fee <3000){
        $service_charge =500;
      } else {
        $service_charge =400;
      }
      $shopping_bag =10;
      $weight_amount =Cart::with("shop")->where("user_id", $user_id)->select()->join("shops", "shops.id", "=", "carts.shop_id")->sum(DB::raw("weight * amount"));
      $weight_amount *=0.001;
      if($weight_amount <5){
        $total_weight_charge =500;
      } elseif (5 <=$weight_amount && $weight_amount <10){
        $total_weight_charge =1000;
      } elseif (10 <=$weight_amount && $weight_amount <15){
        $total_weight_charge =1500;
      } elseif (15 <=$weight_amount && $weight_amount <20) {
        $total_weight_charge =2000;
      } else {
        return false;
      }
      $total_charge =$checkout_fee + $service_charge +$shopping_bag +$total_weight_charge;

      return $total_charge;
    }

}
