@extends("layouts.app")

@section("title", "注文履歴")
@section("content")
<div class="container">
  <div class="container">
    <h3 class="text-center mb-4">{{Auth::user()->name}} さんの注文履歴</h3>
    <select name="">
      <option value="1" selected>過去1ヵ月</option>
      <option value="3">過去3ヵ月</option>
      <option value="6">過去6ヵ月</option>
      <option value="2021">2021年</option>
    </select>
    @if($history->isNotEmpty())
      @foreach($history as $history)
      <div class="container">
        <p class="text-center">{{$history->shop->name}}</p>
        <div class="flex">
          <div class="col3">
            <img class="imgcart" src="{{asset($history->shop->image_path)}}">
          </div>
          <div class="col9">
            <p class="text-center">¥{{number_format($history->shop->fee)}}<small>(税込8%)</small></p>
            <p class="text-center">{{$history->amount}} 品</p>
            <p class="text-center">購入日: {{$history->deleted_at->format("Y/m/d H:i")}}</p>
            <a href="{{url('/goods/detail/'.$history->shop->id)}}" class="btn btn-primary">再度購入</a>
            </form>
          </div>
        </div>
      </div>
      <br>
      <hr>
      <br>
      @endforeach
    @else
    <div>
      <h2 class="text-center mt-5">注文履歴はありません。</h2>
    </div>
    @endif
  </div>
</div>
<div class="text-center mt-5">
  <a href="javascript:history.back()" class="btn btn-success">戻る</a>
</div>
@endsection
