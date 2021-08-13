<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Delivery;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params =[
          "name" =>"岡村",
          "email" =>"xile17231015@yahoo.co.jp",
          "tel" =>"090-2222-2222",
          "address" =>"osaka",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("deliveries")->insert($params);

        $params =[
          "name" =>"高場",
          "email" =>"taruzu2@gmail.com",
          "tel" =>"090-3333-3333",
          "address" =>"osaka",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("deliveries")->insert($params);
    }
}
