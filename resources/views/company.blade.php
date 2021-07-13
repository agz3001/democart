@extends("layouts.app")

@section("title", "会社概要")
@section("content")
<!--COMPANYとGoogleMap埋め込みを横並びに-->
<div class="container mx-auto mt-3">
  <div class="pagetitle-separator2"></div>
  <p class="text-center mb-0">COMPANY</p>
  <p class="weak text-center mt-0">会社概要</p>
  <div class="row">
    <div class="col-xs-10 col-lg-6 mx-auto">
      <div class="service-box-left5">
        <ul>
          <li class="mt-2 mb-0">
            <p>
              <span class="dan">社名</span>
              <span class="dan2">まごのて<br>/Magonote, Inc.</span>
            </p>
          </li>
          <li class="service-border"></li>
          <li class="mt-2 mb-0">
            <p>
              <span class="dan">代表者</span>
              <span class="dan2">代表取締役　ぼんず ゆう</span>
            </p>
          </li>
          <li class="service-border"></li>
          <li class="mt-2 mb-0">
            <p>
              <span class="dan">事業内容</span>
              <span class="dan2">買い物代行プラットフォーム<br>「まごのて」の企画・開発・運営</span>
            </p>
          </li>
          <li class="service-border"></li>
          <li class="mt-2 mb-0">
            <p>
              <span class="dan">設立</span>
              <span class="dan2">2020年某日</span>
            </p>
          </li>
          <li class="service-border"></li>
          <li class="mt-2 mb-0">
            <p>
              <span class="dan">資本金</span>
              <span class="dan2">5000兆円</span>
            </p>
          </li>
          <li class="service-border"></li>
          <li class="mt-2 mb-0">
            <p>
              <span class="dan">所在地</span>
              <span class="dan2">〒530-0011<br>大阪府大阪市北区大深町４−１</span>
            </p>
          </li>
          <li class="service-border"></li>
          <li class="mt-2 mb-0">
            <p>
              <span class="dan">主要取引先</span>
              <span class="dan2">四井住友銀行<br>みなと銀行<br>みどり銀行<br>さくら銀行</span>
            </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-xs-10 col-lg-6 ratio ratio-1x1 mx-auto">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1840.8790480694051!2d135.49410528944247!3d34.703325463137155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68f07000001%3A0xa684e6b145ca9d5!2z44Kw44Op44Oz44OV44Ot44Oz44OIIOWkp-mYqg!5e0!3m2!1sja!2sjp!4v1621056168141!5m2!1sja!2sjp" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>

<div class="service-border my-5"></div>

<!--INVESTORS-->
<div class="container my-3 mx-auto">
  <div class="row">
    <div class="col-10 mx-auto">
      <div class="pagetitle-separator2"></div>
      <p class="text-center my-0">INVESTORS</p>
      <p class="weak text-center mt-0">株主</p>
      <div class="service-box-left5 lh-1">
        <p class="mb-1">このひと</p>
        <p class="mb-1">そのひと</p>
        <p class="mb-1">あのひと</p>
        <p class="mb-1">どのひと</p>
      </div>
    </div>
  </div>
</div>

<div class="service-border my-5"></div>

<!--MEDIA-->
<div class="container my-3 mx-auto">
  <div class="row">
    <div class="col-10 mx-auto">
      <div class="pagetitle-separator2"></div>
      <p class="text-center my-0">MEDIA</p>
      <p class="weak text-center mt-0">メディア露出</p>
      <div class="service-box-left5">
        <ul>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="service-border my-5"></div>

<!--PODIUM-->
<div class="container my-3 mx-auto">
  <div class="row">
    <div class="col-10 mx-auto">
      <div class="pagetitle-separator2"></div>
      <p class="text-center my-0">PODIUM</p>
      <p class="weak text-center mt-0">登壇実績</p>
      <div class="service-box-left5">
        <ul>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="service-border my-5"></div>

<!--ACCELERATOR-->
<div class="container my-3 mx-auto">
  <div class="row">
    <div class="col-10 mx-auto">
      <div class="pagetitle-separator2"></div>
      <p class="text-center my-0">ACCELERATOR</p>
      <p class="weak text-center mt-0">アクセラ・補助金採択実績</p>
      <div class="service-box-left5">
        <ul>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
