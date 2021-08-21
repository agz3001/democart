@extends("layouts.app")

@section("title", "決済完了")
@section("content")
<div class="container">
  <div>
    <h3>{{Auth::user()->name}} 様、ご購入ありがとうございました。</h3>
    <div class="container">
      <p class="py-3">ご登録いただいたメールアドレスへ決済情報をお送りいたします。<br>
      お手続き完了次第、商品を発送致します。</p>
    </div>
    <a href="/" class="btn btn-info modify">ホームへ</a>
  </div>
</div>

@endsection
