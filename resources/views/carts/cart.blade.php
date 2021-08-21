@extends("layouts.app")

@section("title", "マイカート")
@section("content")
<div class="container">
  <div class="container">
    <h3 class="mb-4 text-center">{{Auth::user()->name}} 様の<br>カートの内訳</h3>
    <br>
    @if (session("message"))
      <p><i class="far fa-thumbs-up"></i> {{session("message")}}</p>
    @endif
    <br>
    @if($my_cart->isNotEmpty())
      @foreach($my_cart as $my_cart)
      <div class="container">
        <p class="text-center">{{$my_cart->shop->name}}</p>
        <div class="flex">
          <div class="col3">
            <img class="imgcart" src="{{ asset($my_cart->shop->image_path) }}">
          </div>
          <div class="col9">
            <p class="text-center">¥{{number_format($my_cart->shop->fee)}}<small>(税込8%)</small></p>
            <p class="text-center">{{number_format($my_cart->amount)}} 品</p>
            <form method="post" action="/destroy">
              @csrf
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="shop_id" value="{{$my_cart->shop->id}}">
              <button type="submit" class="btn btn-danger cart_btn modify" data-toggle="tooltip" data-placement="bottom" data-html="true" title="この商品を<br> 削除する"><i class="fas fa-backspace"></i> 削除</button>
            </form>
          </div>
        </div>
      </div>
      <br>
      <hr>
      <br>
      @endforeach
      <div>
        <table class="table table-hover table-sm table-borderless text-right">
          <tr>
            <td>総積載量</td>
            <td>{{$weight_amount}} kg</td>
          </tr>
          <tr>
            <td>小計</td>
            <td>¥ {{number_format($join_table_sum)}}</td>
          </tr>
          <tr>
            <td>サービス手数料</td>
            <td>¥ {{$service_charge}}</td>
          </tr>
          <tr>
            <td>レジ袋</td>
            <td>¥ {{$shopping_bag}}</td>
          </tr>
          <tr>
            <td>積載料金</td>
            <td>¥ {{$total_weight_charge}}</td>
          </tr>
          <tr style="border-top: 1px dashed black;">
            <td style="font-size:1.2em; font-weight:bold;">合計</td>
            <td style="font-size:1.2em; font-weight:bold;">
              ¥ {{ number_format($total_charge) }}
            </td>
          </tr>
          <tr>
            <td>総量</td>
            <td>{{$join_table_sum_amount}} 品</td>
          </tr>
        </table>
      </div>
      <a href="/select" class="btn btn-success">
        <i class="fas fa-reply"> 他にも探す</i>
      </a>
      <!-- モーダルを開くボタン・リンク -->
      <!--data-toggle="modal" data-target="#testModal"を書くことで、testModalというid名のモーダルウィンドウを表示することができる-->
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#testModal">
        <i class="fas fa-check"> お会計へ</i>
      </button>

      <!-- ボタン・リンククリック後に表示される画面の内容 -->
      <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">ご購入の最終確認</h4>
                  </div>
                  <div class="modal-body">
                      <label>本当に購入しますか？</label>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">戻る</button>
                      <form method="post" action="/checkout">
                        @csrf
                        <button type="submit" class="btn btn-warning">
                          購入する
                        </button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

    @else
    <h3 class="text-center">カートは空っぽです。</h3>
    <br>
    <br>
    <div class="text-center mt-5">
      <a href="/select" class="btn btn-success modify">商品検索画面へ</a>
    </div>
    @endif
  </div>
</div>

@endsection
