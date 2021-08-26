<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <!--表領域の設定。user-scalableは"yes"でズーム可能になります-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
  <!--検索結果で表示される説明文.Googleでは全角80文字程度まで表示-->
  <meta name="description" content="即日配達！最短20分でお届け！忙しくて買い物に行けない。スーパーまで買い物に行くのが大変。そんな方は是非かぼちゃのカートを利用してみてください！">
  <!--OGP設定.SNS上でシェアされると、タイトル/URL/概要/画像を伝えるタグ情報-->
  <meta property="og:title" content="かぼちゃのカート"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://pumpkin-cart5.sakura.ne.jp"/>
  <meta property="og:image" content="画像のURL" />
  <!--iOS版 WebClip. アプリストアを経由しないPWA化-->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="かぼちゃのカート">
  <link rel="apple-touch-icon" href="public/storage/image/pumpkin.webp" sizes="72x72">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--タイトル-->
  @hasSection("title")
  <title>@yield("title") | {{config("app.name")}}</title>
  @else
  <title>{{config("app.name")}}</title>
  @endif

  <!-- Scripts -->
  <!-- 末尾に移動 -->
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
  <!--FontAwesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
  <!-- Styles -->
  <!-- drawer.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
  <!-- SweetAlert2のCSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body style="background-color:#ffffff;">
    <div id="app">
      <div class="container">
        <div id="service-title" class="mb-2 px-0">
          <div id="size-button" class="text-right modify">
            文字サイズ
            <button class="size-button medium">中</button>
            <button class="size-button large"><b>大</b></button>
          </div>
          <br>
          <br>
          <ul>
            <li><img src="{{ asset('public/storage/image/pumpkin.webp') }}" class="px-0" style="height: 20px;"></li>
            <li><a href="/" style="text-decoration: none; color:#212529;"><h1 id="service-title-text" class="px-0">かぼちゃのカート</h1></a></li>
          </ul>
        </div>
        <div class="row d-flex justify-content-around">
          <a class="top-menu col-5 col-md-3 btn text-white modify-btn" href="/select" role="button">商品を探す</a>
          @guest
              <a class="top-menu col-5 col-md-3 btn text-white modify-btn" href="{{ route('login') }}">会員入口</a>
              @if (Route::has('register'))
              <a class="top-menu col-5 col-md-3 btn text-white modify-btn" href="{{ route('register') }}">新規登録</a>
              @endif
          @else
              <a class="top-menu col-5 col-md-3 btn text-white modify-btn" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  会員出口
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              <a class="top-menu col-5 col-md-3 btn text-white modify-btn" href="/cart" role="button">買い物かご</a>
          @endguest
          <a class="top-menu col-5 col-md-3 btn text-white modify-btn" href="/#today" role="button">今月の<br>おすすめ</a>
          <a class="top-menu col-5 col-md-3 btn text-white modify-btn" href="/#howtouse" role="button">使い方</a>
          <a class="top-menu col-5 col-md-3 btn text-white modify-btn" href="/#faq" role="button">よくある<br>質問</a>
        </div>
      </div>

      <main class="py-4 modify">
          @yield('content')
      </main>

      <div class="container mb-5">
        <button class="text-left btn btn-outline-secondary modify" onclick="window.scrolltop()"><i class="fas fa-arrow-alt-circle-up"></i> 1番上に戻る</button>
      </div>
      <div class="container-fluid mb-5 py-3 modify">
        <div class="weak text-center">&copy; {{ date('Y') }} {{ config('app.name') }}</div>
      </div>

      <footer class="container-fluid px-0" id="footer">
        <div class="row d-flex justify-content-between mx-0 px-0">
          <div class="col-3 mx-0">
            <a href="/select"><i class="fas fa-search-minus" style="color: #fff;"></i></a>
            <h2 class="foot modify">商品検索</h2>
          </div>
          @guest
              <div class="col-3 mx-0">
                <a href="{{ route('login') }}"><i class="fas fa-user-alt" style="color: #fff;"></i></a>
                <h2 class="foot modify">会員入口</h2>
              </div>
              @if (Route::has('register'))
              <div class="col-3 mx-0">
                <a href="{{ route('register') }}"><i class="fas fa-user-edit" style="color: #fff;"></i></a>
                <h2 class="foot modify">新規登録</h2>
              </div>
              @endif
          @else
              <div class="col-3 mx-0">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <i class="fas fa-user-lock" style="color: #fff;"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                </form>
                <h2 class="foot modify">会員出口</h2>
              </div>
              <div class="col-3 mx-0">
                <a href="/cart"><i class="fas fa-shopping-cart" style="color: #fff;"></i></a>
                <h2 class="foot modify">買物かご</h2>
              </div>
          @endguest
          <div class="col-3 mx-0">
            <a href="/#howtouse"><i class="fas fa-book-open" style="color: #fff;"></i></a>
            <h2 class="foot modify">使い方</h2>
          </div>
        </div>
      </footer>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <!--<script src="{{ mix('js/style.js') }}" type="module"></script>-->

    <!-- jquery & iScroll -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <!-- SweetAlert2の本体-->
    <!--<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
    <!-- IE11やAndroidブラウザ用のjsファイル-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="{{asset('js/drawer.js')}}" type="module"></script>
    <!-- js-cookie -->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
</body>
</html>
