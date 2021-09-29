@extends("layouts.app")

@section("title", "商品検索")
@section("content")
<div class="container">
  <p class="text-center stroke">商品の探し方を<br>下記よりお選び下さい</p>

  <div class="row d-flex justify-content-center mt-5">
    <a class="col-10 col-md-5 btn btn-orange mx-1 mb-2 d-flex align-items-center justify-content-center text-dark" href="/select/bargain" role="button" style="height: 200px; font-size: 40px"><i class="far fa-hand-paper fa-xs"></i>&nbsp;今月のおすすめ</a>
    <a class="col-10 col-md-5 btn btn-orange mx-1 mb-2 d-flex align-items-center justify-content-center text-dark" href="/history" role="button" style="height: 200px; font-size: 40px"><i class="fas fa-history fa-xs"></i>&nbsp;注文履歴から探す</a>
    <a class="col-10 col-md-5 btn btn-orange mx-1 mb-2 d-flex align-items-center justify-content-center text-dark" href="/select/category" role="button" style="height: 200px; font-size: 40px"><i class="fas fa-mouse-pointer fa-xs"></i>&nbsp;商品分類から探す</a>
    <a class="col-10 col-md-5 btn btn-orange mx-1 mb-2 d-flex align-items-center justify-content-center text-dark" href="/search" role="button" style="height: 200px; font-size: 40px"><i class="fas fa-search-plus fa-xs"></i>&nbsp;キーワードで検索</a>
  </div>
</div>
<div class="text-center mt-3">
  <a href="/" class="btn btn-primary modify">最初のページに戻る</a>
</div>

@endsection
