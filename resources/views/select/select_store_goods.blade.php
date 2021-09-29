@extends("layouts.app")

@section("title", "選択店の商品一覧")
@section("content")
<div class="row">
  <div class="col-3">
    <div class="sidebar_fixed">
      <ul>カテゴリ
        <li><a href="">お菓子・スイーツ</a></li>
        <li><a href="">お弁当・お菓子</a></li>
        <li>お米・雑穀</li>
        <li>お水・飲料水</li>
        <li>お酒・アルコール</li>
        <li>生鮮食品</li>
        <li><a href="">レトルト</a></li>
        <li><a href="">インスタント</a></li>
        <li>野菜・果物</li>
        <li>肉・肉加工品</li>
        <li>魚介類</li>
        <li><a href="">惣菜・サラダ</a></li>
        <li>卵・乳製品・牛乳</li>
        <li>豆腐・豆乳・納豆</li>
        <li>漬物</li>
        <li><a href="">冷凍食品・アイス</a></li>
        <li><a href="">麺類・パスタ</a></li>
        <li>パン・シリアル</li>
        <li>ジャム・はちみつ</li>
        <li>食油・調味料</li>
        <li><a href="">カレー・スープ</a></li>
        <li>缶詰・瓶詰</li>
        <li>粉類・乾物</li>
        <li>紙・生理用品</li>
        <li>美容・衛生</li>
        <li>日用品・雑貨<li>
        <li>ペット</li>
        <li>未分類</li>
      </ul>
    </div>
  </div>

  <div class="col">
    <div class="container">
      <p class="text-center stroke">「{{$store}}」 の商品一覧</p>
      <div class="row">
        @foreach($shop as $shop)
        <div class="col-md-4">
          <div class="container">
            <a href="{{url('/goods/detail', ['shop'=>$shop])}}"><img src="{{asset($shop->image_path)}}" style="width:290px; height:250px;"></a>
            <p style="text-align:center;">{{$shop->name}}</p>
            <p style="text-align:center;">{{$shop->fee}}円</p>
            <form method="post" action="/cart" style="text-align:center;">
              @csrf
              <input type="hidden" name="shop_id" value="{{$shop->id}}">
              <label>数量:</label>
              <input type="number" name="amount" min="1" class="form_input_number" required> 個
              <input type="submit" value="カートに入れる" class="btn btn-orange">
            </form><br>
          </div>
        </div>
        @endforeach
      </div>
      <br>
      <div class="text-center"><a href="javascript:history.back()" class="btn btn-primary modify">店舗選択に戻る</a></div>
    </div>
  </div>
</div>

@endsection
