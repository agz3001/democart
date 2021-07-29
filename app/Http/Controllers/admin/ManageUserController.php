<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\User;
use App\Cart;

class ManageUserController extends Controller
{
    function showUserList(){
        $user_list = User::orderBy("id", "desc")->paginate(10);
    		return view("admin.user_list", compact("user_list"));
    }

    function showUserDetail($id){
        $user = User::find($id);
    		return view("admin.user_detail", compact("user"));
    }

    public function accepted_orders(Request $request)
    {
        $keyword =$request->keyword;
        #$sample_list =Sample::search($keyword);
        #ddd($sample_list);
        $history =Cart::onlyTrashed()->get();
        
        return view("admin.accepted_orders", compact("history", "keyword"));
    }

    public function export(Request $request)
    {
        $response = new StreamedResponse (function() use ($request){
             // キーワードで検索
             $keyword = $request->keyword;
             $stream = fopen('php://output', 'w');
             //　文字化け回避
             stream_filter_prepend($stream,'convert.iconv.utf-8/cp932//TRANSLIT');
             // タイトルを追加
             fputcsv($stream, ['ID','ユーザー名','住所','店舗名','商品名/商品ID','金額', '数量','購入日']);

             Cart::onlyTrashed()->where('id', 'LIKE', '%'.$keyword.'%')->chunk( 1000, function($results) use ($stream) {
                 foreach ($results as $result) {
                     fputcsv($stream, [$result->user_id,$result->user->name,$result->user->address,$result->shop->store,$result->shop->name,$result->shop->fee,$result->amount,$result->deleted_at]);
                 }
             });
             fclose($stream);
         });
         $response->headers->set('Content-Type', 'application/octet-stream');
         $response->headers->set('Content-Disposition', 'attachment; filename="商品受注記録.csv"');

         return $response;
    }

}
