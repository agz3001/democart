<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded =array("id");
    //protected $fillable =["name", "detail", "image_path", "fee", "category", "store"];

    public function carts(){
      return $this->hasMany("App\Cart", "shop_id");
    }

}
