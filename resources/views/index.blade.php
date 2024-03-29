@extends("layouts.app")

@section("title", "")
@section("content")
<p id="today" class="mb-4 text-center stroke">今月のおすすめ</p>
<div class="container mb-5">
  <div id="carousel-card" class="carousel slide" data-interval="4000">
    <div class="carousel-inner">
      @foreach($shops->chunk(2) as $shop)
      <div class="carousel-item px-4 @if($loop->first) {{ 'active' }} @endif">
        <div class="row">
          @foreach($shop as $shop)
          <div class="col-6 d-flex justify-content-around">
            <div class="card">
              <a href="{{url('/goods/detail', ['shop'=>$shop])}}"><img class="img-fluid" src="{{ asset($shop->image_path) }}" alt=""></a>
              <div class="card-body">
                <p class="card-subtitle h-75" style="font-size:15px;">{{$shop->name}}</p>
                <p class="card-title price" style="font-size:15px;"><strong style="color:#eb8f34;">¥{{number_format($shop->fee)}}</strong><small>(税込8%)</small></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carousel-card" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-card" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--サービスの手順-->
<div id="howtouse" class="container my-4 text-center">
  <div class="stroke">サービスの手順</div>
</div>

<!---->
<div class="container mb-5 mx-auto">
  <div class="row d-flex justify-content-center">
    <div class="col-8 col-md-3 mb-5">
      <img src="{{ asset('public/storage/image/step_search.png') }}" alt="" class="square">
      <div><u>手順 1</u></div>
      <p>アプリをダウンロード</p>
    </div>
    <div class="col-8 col-md-3 mb-5">
      <img src="{{ asset('public/storage/image/step_push.png') }}" alt="" class="square">
      <div><u>手順 2</u></div>
      <p>商品を選ぶ</p>
    </div>
    <div class="col-8 col-md-3 mb-5">
      <img src="{{ asset('public/storage/image/step_login.png') }}" alt="" class="square">
      <div><u>手順 3</u></div>
      <p>新規登録 / 会員入口より<br>入る</p>
    </div>
    <div class="col-8 col-md-3 mb-5">
      <img src="{{ asset('public/storage/image/step_cash.png') }}" alt="" class="square">
      <div><u>手順 4</u></div>
      <p>商品を確認し<br>「お会計へ」を選択する</p>
    </div>

    <div class="container mt-5 text-center">
      <div>
        <i class="far fa-hand-point-down"></i> 詳しくは下の映像をご覧ください。
      </div>
    </div>

    <div class="container mt-5">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/FD9X71Y3XxA" title="YouTube video" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<br>

<div id="faq" class="container">
  <div class="container QnA">
    <div class="text-center stroke">よくあるご質問</div>
    <div class="mb-2">
      <table>
        <tr>
          <th>問１</th>
          <th class="text-center">会員入口から<br>入れません。</th>
        </tr>
        <tr>
          <td class="align-top">答１</td>
          <td>既にご登録いただいたメールアドレスに間違いがないかご確認ください。なお、機種変更などで当該メールアドレスがご利用できなくなった場合には新しいメールアドレスでの再登録をお願いします。</td>
        </tr>
        <tr>
          <th>問２</th>
          <th class="text-center">料金について<br>教えてください。</th>
        </tr>
        <tr>
          <td class="align-top">答２</td>
          <td>アプリのダウンロードは無料です。買い物を依頼した際には、買い物の実費とサービス料を請求させていただきます。詳細は<u><a href="/service_charge">こちら</a></u>からご確認ください。</td>
        </tr>
        <tr>
          <th>問３</th>
          <th class="text-center">支払方法について<br>教えてください。</th>
        </tr>
        <tr>
          <td class="align-top">答３</td>
          <td>PayPayでのご決済になります。お支払いは一括払いのみのお取り扱いとなります。ご利用の際は<u><a href="https://paypay.ne.jp/help/c0031/" rel="noreferrer noopener" target="_blank">こちら</a></u>をご参照ください。</td>
        </tr>
      </table>
    </div>

    <div class="text-center mb-3">
      <a href="/question" class="btn btn-warning modify">もっと見る</a>
    </div>
  </div>
</div>

<div id="inquiry" class="container bg-light" style="margin-bottom: 80px;">
  <p class="text-center my-0">お問い合わせ</p>
  <p class="text-center my-0"><a href="mailto:osaka.cart108@gmail.com" style="color: #1d3994;"><i class="far fa-envelope"></i>&nbsp;osaka.cart108@gmail.com</a></p>
  <p class="text-center my-0"><a href="tel:117" style="color: #1d3994;"><i class="fas fa-phone-volume"></i>&nbsp;090-xxxx-xxxx</a></p>
</div>

<div class="d-flex justify-content-around">
  <u><a href="/company">運営会社</a></u>
  <u><a href="/terms">利用規約</a></u>
</div>
@endsection
