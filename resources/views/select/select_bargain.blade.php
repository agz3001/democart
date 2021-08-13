@extends("layouts.app1")

@section("title", "今月のおすすめ")
@section("content")
<!--スマホ専用部分で、drawer.jsによるtoggleバー-->
<div class="drawer drawer--left">
  <header role="banner">
     <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
     </button>
     <nav class="drawer-nav" role="navigation">
        <ul class="drawer-menu">
          <!--javascript message-->
          <div id="drawer_message_down"></div>
          <!--javascript message-->
           <li><a class="drawer-brand" href="">商品の分類</a></li>
           <li><a class="drawer-menu-item text-white" href="{{url('/select/bargain')}}">今月のおすすめ</a></li>
           <li><a class="drawer-menu-item text-white" href="{{url('/select/category/goods?category=野菜・果物')}}">野菜・果物</a></li>
           <li><a class="drawer-menu-item text-white" href="{{url('/select/category/goods?category=魚介類・肉・肉加工品・ハム・ソーセージ')}}">魚介類・肉・肉加工品<br>ハム・ソーセージ</a></li>
           <li><a class="drawer-menu-item text-white" href="{{url('/select/category/goods?category=卵・乳製品・牛乳・豆乳・豆腐・納豆')}}">卵・乳製品・牛乳<br>豆乳・豆腐・納豆</a></li>
           <li><a class="drawer-menu-item text-white" href="{{url('/select/category/goods?category=お米・麺・パスタ・パン')}}">お米・麺・パスタ・パン</a></li>
           <li><a class="drawer-menu-item text-white" href="{{url('/select/category/goods?category=食油・調味料')}}">食油・調味料</a></li>
           <li><a class="drawer-menu-item text-white" href="{{url('/select/category/goods?category=菓子・スイーツ・アイス・飲料・お水')}}">菓子・スイーツ・アイス<br>飲料・お水</a></li>
           <li><a class="drawer-menu-item text-white" href="{{url('/select/category/goods?category=衣料用洗剤・柔軟剤・衣料用漂白剤')}}">衣料用洗剤・柔軟剤<br>衣料用漂白剤</a></li>
        </ul>
     </nav>
  </header>
</div>
<!--drawer.jsによるtoggleバー end-->

<!--PC・タブレット専用の左サイドバー-->
<div class="row">
  <div class="col-4" id="sidebar">
    <div class="sidebar_fixed">
      <ul><strong>商品の分類</strong>
        <li><a href="{{url('/select/bargain')}}" class="font-weight-bold">今月のおすすめ</a></li>
        <li><a href="{{url('/select/category/goods?category=野菜・果物')}}">野菜・果物</a></li>
        <li><a href="{{url('/select/category/goods?category=魚介類・肉・肉加工品・ハム・ソーセージ')}}">魚介類・肉・肉加工品<br>ハム・ソーセージ</a></li>
        <li><a href="{{url('/select/category/goods?category=卵・乳製品・牛乳・豆乳・豆腐・納豆')}}">卵・乳製品・牛乳<br>豆乳・豆腐・納豆</a></li>
        <li><a href="{{url('/select/category/goods?category=お米・麺・パスタ・パン')}}">お米・麺・パスタ・パン</a></li>
        <li><a href="{{url('/select/category/goods?category=食油・調味料')}}">食油・調味料</a></li>
        <li><a href="{{url('/select/category/goods?category=菓子・スイーツ・アイス・飲料・お水')}}">菓子・スイーツ・アイス<br>飲料・お水</a></li>
        <li><a href="{{url('/select/category/goods?category=衣料用洗剤・柔軟剤・衣料用漂白剤')}}">衣料用洗剤・柔軟剤<br>衣料用漂白剤</a></li>
      </ul>
    </div>
  </div>
  <!--PC・タブレット専用の左サイドバー end-->
  <!--以下の部分がページ右側です。-->
  <div class="col">
    <div class="container">
      <h3 class="mb-4 text-center">今月のおすすめ</h3>
      <!--javascript message-->
      <p id="drawer_message"></p>
      <!--javascript message end-->
      <div class="container">
        <div class="row">
          @foreach ($shops as $shop)
          <div class="col-6 col-sm-4 col-md-4">
            <div class="imageNname">
              <a href="{{url('/goods/detail', ['shop'=>$shop])}}"><img class="img-fluid" src="{{ asset($shop->image_path) }}" alt=""></a>
              <span>{{$shop->name}}</span>
            </div>
            <div>
              <p class="text-center price">¥{{number_format($shop->fee)}}<small>(税込8%)</small></p>
              <form method="post" action="/cart" style="text-align:center;">
                @csrf
                <input type="hidden" name="shop_id" value="{{$shop->id}}">
                <label>数量 : </label>
                <input type="number" name="amount" min="1" class="form_input_number" required>
                <button type="submit" class="btn btn-primary cart_btn" data-toggle="tooltip" data-placement="bottom" data-html="true" title="お買い物かごに入れる"><i class="fas fa-shopping-cart"></i> カートへ</button>
              </form>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-5" style="position:relative; z-index:0;">
      {{$shops->links()}}
    </div>
    <div class="text-center mt-5">
      <a href="javascript:history.back()" class="btn btn-success">選択画面に戻る</a>
    </div>
  </div>
</div>
@endsection
