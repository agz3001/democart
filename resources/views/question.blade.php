@extends("layouts.app")

@section("title", "よくあるご質問")
@section("content")
<div id="faq" class="container">
  <div class="container QnA">
    <div class="text-center stroke">よくあるご質問</div>
    <div class="mb-2">
      <p class="text-center font-weight-bold"><u>「かぼちゃのカート」<br>について</u></p>
      <div>
        <table>
          <tr>
            <th>問１</th>
            <th class="text-center">会員入口から<br>入れません。</th>
          </tr>
          <tr>
            <td class="align-top">答１</td>
            <td>既にご登録いただいたメールアドレスに間違いがないかご確認ください。なお、機種変更などで当該メールアドレスがご利用できなくなった場合には新しいメールアドレスでの再登録をお願いします。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問２</th>
            <th class="text-center">料金について<br>教えてください。</th>
          </tr>
          <tr>
            <td class="align-top">答２</td>
            <td>アプリのダウンロードは無料です。買い物を依頼した際には、買い物の実費とサービス料を請求させていただきます。詳細は<u><a href="service_charge">こちら</a></u>からご確認ください。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問３</th>
            <th class="text-center">支払方法について<br>教えてください。</th>
          </tr>
          <tr>
            <td class="align-top">問３</td>
            <td>PayPayでのご決済になります。お支払いは一括払いのみのお取り扱いとなります。ご利用の際は<u><a href="https://paypay.ne.jp/help/c0031/">こちら</a></u>をご参照ください。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問４</th>
            <th class="text-center">サイトの挙動がおかしいのですが、どうすればいいでしょうか。</th>
          </tr>
          <tr>
            <td class="align-top">答４</td>
            <td>ご不便をおかけし申し訳ございません。以下の対応で症状が改善する可能性がございます。<br>
            ・アプリを再起動する<br>
            ・最新版のアプリにアップデートする<br>
            ・アプリを一度削除し、再度インストールする<br>
            </td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問５</th>
            <th class="text-center">支払方法について<br>教えてください。</th>
          </tr>
          <tr>
            <td class="align-top">答５</td>
            <td>PayPayでのお支払いとなります。お支払いは一括払いのみのお取り扱いとなります。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問６</th>
            <th class="text-center">会員情報の<br>変更はできますか。</th>
          </tr>
          <tr>
            <td class="align-top">答６</td>
            <td>メールアドレス、お名前の変更はできません。どうしても変更されたい場合には再度こちらより<a href="/register"><u>新規登録</u></a>をご案内しております。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問７</th>
            <th class="text-center">退会する方法を教えてください。</th>
          </tr>
          <tr>
            <td class="align-top">答７</td>
            <td>退会をご希望の方は<a href="/#inquiry"><u>こちら</u></a>からお問い合わせください。</td>
          </tr>
        </table>
      </div>
    </div>
    <br>
    <br>

    <div class="mb-2">
      <p class="text-center font-weight-bold"><u>当サービスについて</u></p>
      <div>
        <table>
          <tr>
            <th>問１</th>
            <th class="text-center">買い物代行サービスとは何ですか。</th>
          </tr>
          <tr>
            <td class="align-top">答１</td>
            <td>お客様の代わりに弊社がお店で商品を購入し、ご自宅までお届けするサービスです。
              大手チェーン店や街の商店といった弊社と連携するお店（連携店）であればお買い物ができます。
              食料品や日用品はもちろん、車がないと買えない商品でもすぐにお求めになれます。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問２</th>
            <th class="text-center">連携店とは何ですか。</th>
          </tr>
          <tr>
            <td class="align-top">答２</td>
            <td>実際の店舗で扱っている商品を弊社の買い物サービスに掲載いだたいているお店です。
              お店のおすすめ商品から購入したい商品を簡単に選ぶことができます。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問３</th>
            <th class="text-center">返品したいのですが。</th>
          </tr>
          <tr>
            <td class="align-top">答３</td>
            <td>サービスの性質上、当社に返品を行うことはできません。
              返品を行う場合には、お客様ご自身で購入店舗に商品と領収書を持参しご対応願います。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問４</th>
            <th class="text-center">買い物の領収書が欲しい時はどうすればよいですか。</th>
          </tr>
          <tr>
            <td class="align-top">答４</td>
            <td>・・・・・。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問５</th>
            <th class="text-center">買い物先のカードのポイントを貯めたいのですがどうしたらよいでしょうか。</th>
          </tr>
          <tr>
            <td class="align-top">答５</td>
            <td>買い物サービスの性質上、現在は店舗とポイントカードの連携は行っておりません。
            申し訳ありません。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問６</th>
            <th class="text-center">サービスに関して問い合わせたいことがあります。</th>
          </tr>
          <tr>
            <td class="align-top">答６</td>
            <td>よくあるご質問以外のお問い合わせは<a href="/#inquiry"><u>こちら</u></a>からお願いいたします。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問７</th>
            <th class="text-center">代金の建て替えを<br>したいのですが、<br>可能でしょうか。</th>
          </tr>
          <tr>
            <td class="align-top">答７</td>
            <td>ご依頼いただいた商品代金の建て替えは行っておりません。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問８</th>
            <th class="text-center">届いた商品に問題があります。（破損、汚損、商品違いなど）</th>
          </tr>
          <tr>
            <td class="align-top">答８</td>
            <td>・・・・・。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問９</th>
            <th class="text-center">再配達について<br>教えてください。</th>
          </tr>
          <tr>
            <td class="align-top">答９</td>
            <td>再配達を⾏うことはできません。必ず受け取れる時間を指定してください。
              ご不在の場合には置き配となります。</td>
          </tr>
        </table>
      </div>
    </div>
    <br>
    <br>

    <div class="mb-2">
      <p class="text-center font-weight-bold"><u>商品の受け取りについて</u></p>
      <div>
        <table>
          <tr>
            <th>問１</th>
            <th class="text-center">お届け日時を間違えてしまったのですがどのように行えばよいのでしょうか。</th>
          </tr>
          <tr>
            <td class="align-top">答１</td>
            <td>ご依頼いただいた後のお届け日時の変更はできません。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問２</th>
            <th class="text-center">依頼をキャンセルしたいのですがどのように行えばよいのでしょうか。</th>
          </tr>
          <tr>
            <td class="align-top">答２</td>
            <td>依頼後はキャンセルを行うことができません。</td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <th>問３</th>
            <th class="text-center">再配達について<br>教えてください。</th>
          </tr>
          <tr>
            <td class="align-top">答３</td>
            <td>再配達を⾏うことはできません。必ず受け取れる時間を指定してください。不在の場合には置き配となります。</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="text-center py-4">
  <a href="/" class="btn btn-primary modify">最初のページに戻る</a>
</div>
@endsection
