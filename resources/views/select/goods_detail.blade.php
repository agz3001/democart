@extends("layouts.app")

@section("title", "商品詳細")
@section("content")
<div class="container">
  <div class="container">
    <p class="text-center">{{$shop->name}}</p>
    <p class="text-center">(商品ID: {{$shop->product_code}})</p>
    <div class="flex">
      <div class="col3">
        <img class="imgcart" src="{{ asset($shop->image_path) }}">
      </div>
      <div class="col9">
        <p class="text-center">¥{{number_format($shop->fee)}}<small>(税込8%)</small></p>
        <form method="post" action="/cart" class="mt-5">
          @csrf
          <input type="hidden" name="shop_id" value="{{$shop->id}}">
          <label>数量:</label>
          <input type="number" name="amount" min="1" class="form_input_number" required>
          <button type="submit" class="btn btn-primary cart_btn modify" data-toggle="tooltip" data-placement="bottom" data-html="true" title="お買い物<br>かごに入れる"><i class="fas fa-shopping-cart"></i> カートへ</button>
        </form>
      </div>
    </div>
    <section class="mt-5" style="border:grey solid 2px; line-height:160%;">
      <ul style="list-style-type: square;">
        <li>写真はイメージです。</li>
        <li>{{$shop->detail}}</li>
      </ul>
    </section>
  </div>
</div>

<div class="text-center mt-5">
  <a href="javascript:history.back()" class="btn btn-success modify">戻る</a>
</div>
@endsection
