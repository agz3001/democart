@component('mail::message')

平素より大変お世話になっております。<br>

<b>{{ config('app.name') }}</b> ご利用のお客様より<br>
配達のご依頼のお知らせです。<br>
<hr>
<br>
[ご依頼者氏名]: {{ Auth::user()->name }} 様<br>
[ご依頼者住所]: {{ Auth::user()->address }}<br>
[ご依頼者TEL]: <br>

ご依頼の商品は<br>

@foreach ($checkout_items as $item)
[{{ $loop->iteration }}]<br>
 <img src="{{ asset($item->shop->image_path) }}"><br>
・[店舗名]: {{ $item->shop->store }}<br>
・[商品名]: {{ $item->shop->name }}<br>
・[価格]: {{ $item->shop->fee }} 円<small>(税込8%)</small><br>
・[品数]: {{ $item->amount }} 品<br>
@endforeach

となります。<br>
<br>

<div>
  総量 :  {{ $checkout_amount }} 品
  <p style="font-size:1.2em; font-weight:bold;">小計金額 : {{ $checkout_fee }} 円</p>
</div>

@component('mail::subcopy')
    {{ config('app.name') }}<br>
    Mail: {{ config('mail.address') }}<br>
    TEL: 090-xxxx-####<br>
    HP: {{ config('app.url') }}
@endcomponent

@endcomponent
