@extends("layouts.app")

@section("title", "キーワード検索")
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
          <div id="drawer_message_down"></div>
           <li><a class="drawer-brand" href="">商品の分類</a></li>
           <li><a class="drawer-menu-item" href="{{url('/select/bargain')}}">今日のおすすめ</a></li>
           <li><a class="drawer-menu-item" href="{{url('/select/category/goods?category=野菜・果物')}}">野菜・果物</a></li>
           <li><a class="drawer-menu-item" href="{{url('/select/category/goods?category=魚介類・肉・肉加工品・ハム・ソーセージ')}}">魚介類・肉・肉加工品<br>ハム・ソーセージ</a></li>
           <li><a class="drawer-menu-item" href="{{url('/select/category/goods?category=卵・乳製品・牛乳・豆乳・豆腐・納豆')}}">卵・乳製品・牛乳<br>豆乳・豆腐・納豆</a></li>
           <li><a class="drawer-menu-item" href="{{url('/select/category/goods?category=お米・麺・パスタ・パン')}}">お米・麺・パスタ・パン</a></li>
           <li><a class="drawer-menu-item" href="{{url('/select/category/goods?category=食油・調味料')}}">食油・調味料</a></li>
           <li><a class="drawer-menu-item" href="{{url('/select/category/goods?category=菓子・スイーツ・アイス飲料・お水')}}">菓子・スイーツ・アイス<br>飲料・お水</a></li>
           <li><a class="drawer-menu-item" href="{{url('/select/category/goods?category=衣料用洗剤・柔軟剤・衣料用漂白剤')}}">衣料用洗剤・柔軟剤<br>衣料用漂白剤</a></li>
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
          <li><a href="{{url('/select/bargain')}}">今日のおすすめ</a></li>
          <li><a href="{{url('/select/category/goods?category=野菜・果物')}}">野菜・果物</a></li>
          <li><a href="{{url('/select/category/goods?category=魚介類・肉・肉加工品・ハム・ソーセージ')}}">魚介類・肉・肉加工品<br>ハム・ソーセージ</a></li>
          <li><a href="{{url('/select/category/goods?category=卵・乳製品・牛乳・豆乳・豆腐・納豆')}}">卵・乳製品・牛乳・豆乳・豆腐・納豆</a></li>
          <li><a href="{{url('/select/category/goods?category=お米・麺・パスタ・パン')}}">お米・麺・パスタ・パン</a></li>
          <li><a href="{{url('/select/category/goods?category=食油・調味料')}}">食油・調味料</a></li>
          <li><a href="{{url('/select/category/goods?category=菓子・スイーツ・アイス飲料・お水')}}">菓子・スイーツ・アイス<br>飲料・お水</a></li>
          <li><a href="{{url('/select/category/goods?category=衣料用洗剤・柔軟剤・衣料用漂白剤')}}">衣料用洗剤・柔軟剤<br>衣料用漂白剤</a></li>
        </ul>
      </div>
    </div>
    <!--PC・タブレット専用の左サイドバー end-->

<div class="container">
  <h3 class="text-center">検索フォームに<br>お探しの品を<br>入力して下さい</h3>
  <form method="get" action="{{url('/search')}}">
    <div class="row">
      <div class="col-9">
        <div class="form-group">
          <input type="text" class="form-control" id="keyword" name="keyword" placeholder="例 : 野菜" value="{{$keyword}}" autocomplete="off">
        </div>
      </div>
      <div class="col-3">
        <button id="s" type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </form>
</div>
<br>
<div class="container">
  <p><i class="far fa-hand-point-right"></i> お探しの商品が <b>{{$shops->total()}}</b> 件 見つかりました。</p>
</div>
@if ($shops->isNotEmpty())
<div class="container">
  <div class="row">
    @foreach ($shops as $shop)
    <div class="col-6 col-sm-4 col-md-4 search">
      <div class="imageNname">
        <a href="{{url('/goods/detail', ['shop'=>$shop])}}"><img class="img-fluid" src="{{$shop->image_path}}" alt=""></a>
        <span class="box">{{$shop->name}}</span>
      </div>
      <div>
        <p class="text-center price">¥{{number_format($shop->fee)}}<small>(税込8%)</small></p>
        <a href="{{url('/goods/detail', ['shop'=>$shop])}}" class="btn btn-primary">商品詳細</a>
      </div>
    </div>
    @endforeach
  </div>
  <!--paginateメソッドでURLに反映-->
  <div class="d-flex justify-content-center mt-5">
    {{$shops->appends(["keyword"=>$keyword])->links()}}
  </div>
</div>
@else
<div class="container">
  <p><i class="far fa-hand-point-right"></i> お探しの商品は見つかりませんでした。</p>
</div>
@endif
<div class="text-center mt-5">
  <a href="{{url('/select')}}" class="btn btn-success">商品検索に戻る</a>
</div>
</div>
@endsection
