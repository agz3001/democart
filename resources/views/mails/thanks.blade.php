@component('mail::message')

{{ Auth::user()->name }} 様<br>
この度は <b>{{ config('app.name') }}</b> のご利用ありがとうございました。<br>

お客様が購入した商品は<br>

@foreach ($checkout_items as $item)
[{{ $loop->iteration }}]<br>
・[商品名]: {{ $item->shop->name }}<br>
・[価格]: {{ $item->shop->fee }} 円<small>(税込8%)</small><br>
・[品数]: {{ $item->amount }} 品<br>
@endforeach

となります。<br>
<br>

<div>
  総量 :  {{ $checkout_amount }} 品
  <p style="font-size:1.2em; font-weight:bold;">合計金額 : {{ $checkout_fee }} 円</p>
</div>

<br>
<div>
下記の決済画面よりご確認願います。<br>
またのご訪問をお待ちしております。<br>
<div>

@component('mail::button', ['url' => ''])
決済画面へ
@endcomponent

<br>
{{ config('app.name') }}<br>
mail: osaka.cart108@gmail.com<br>
HP: https://pumpkin-cart5.sakura.ne.jp

@endcomponent
