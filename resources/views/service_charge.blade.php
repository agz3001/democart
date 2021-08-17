@extends("layouts.app")

@section("title", "ご利用料金のご案内")
@section("content")
<div class="container">
  <div>
    <div class="text-center"><u>料金について</u></div>
    <p class="text-center">お買い物や受取りのご依頼をする際に料金がかかるシステムです。具体的には、<b class="service_charge">ご購入料金</b>、<b class="service_charge">ご利用料金(代行手数料)</b>、<b class="service_charge">レジ袋料金</b>、<b class="service_charge">従量料金</b>を合算した金額を請求致します。</p>
  </div>
  <br>
  <div class="charge_system">
    <div class="text-center"><u>料金システム表</u></div>
    <table border=1>
      <tr>
        <th class="text-center">料金名</th>
        <th class="text-center">詳細</th>
      </tr>
      <tr>
        <td>ご購入<br>料金</td>
        <td>お買い上げ頂いた品の<br>税込み総額です。</td>
      </tr>
      <tr>
        <td>ご利用料金<sup><a href="/service_charge#charge_1">1</a></sup></td>
        <td>・ご購入料金が3,000円未満の場合：500円<br>
          ・ご購入料金が3,000円以上の場合：400円<br>
        </td>
      </tr>
      <tr>
        <td>レジ袋<br>料金</td>
        <td>ご購入量に関わらず、定額 <b>¥10</b> を頂いております。</td>
      </tr>
      <tr>
        <td>従量<br>料金</td>
        <td>総量 <b>20kg</b> 以上は<br>ご購入できません。<sup><a href="/service_charge#charge_2">2</a></sup></td>
      </tr>
    </table>
    <div>
      <sup id="charge_1">1.  最低1,000円以上からの購入になります。</sup>
    </div>
    <div>
      <sup id="charge_2">2. 【重さ制限について】最初の購入：1カゴ/5キロ
      ・カゴ追加：500円・１カゴ追加毎（※最大4かごまで）</sup>
    </div>
  </div>
  <br>
  <div>
    <div class="text-center"><u>ご利用するメリット</u></div>
    <p class="text-center">弊サービスをご利用頂ければ、ご移動やお買い物にお時間はかからないため、お客様のお時間をさらに有効に活用して頂くことが期待できます。</p>
  </div>

</div>

<div class="text-center">
  <a href="/" class="btn btn-success modify">最初のページに戻る</a>
</div>

@endsection
