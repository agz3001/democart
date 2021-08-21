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
<table>
  <tr>
    <th width="100px" style="text-align:center">料金内訳</th>
    <th width="100px" style="text-align:right;">金額</th>
  </tr>
  <tr>
    <td style="text-align:center">小計</td>
    <td style="text-align:right;">¥ {{ number_format($checkout_fee) }}</td>
  </tr>
  <tr>
    <td style="text-align:center">サービス料金</td>
    <td style="text-align:right;">¥ {{$service_charge}}</td>
  </tr>
  <tr>
    <td style="text-align:center">レジ袋</td>
    <td style="text-align:right;">¥ {{$shopping_bag}}</td>
  </tr>
  <tr>
    <td style="text-align:center">積載料金</td>
    <td style="text-align:right;">¥ {{ number_format($total_weight_charge) }}</td>
  </tr>
  <tr style="border-top: 1px dashed black;">
    <td style="font-size:1.2em; font-weight:bold; text-align:center;">合計</td>
    <td style="font-size:1.2em; font-weight:bold; text-align:right;">
      ¥ {{ number_format($total_charge) }}
    </td>
  </tr>
  <tr>
    <td style="text-align:center">総量</td>
    <td style="text-align:right;">{{$checkout_amount}} 品</td>
  </tr>
  <tr>
    <td style="text-align:center">総積載量</td>
    <td style="text-align:right;">{{$weight_amount}} kg</td>
  </tr>
</table>

<div>
下記の決済画面よりご確認願います。<br>
またのご訪問をお待ちしております。<br>
<div>

@component('mail::button', ['url' => ''])
決済画面へ
@endcomponent

@component('mail::subcopy')
    {{ config('app.name') }}<br>
    Mail: {{ env('MAIL_FROM_ADDRESS') }}<br>
    TEL: 090-xxxx-####<br>
    HP: {{ env('APP_URL') }}
@endcomponent


@endcomponent
