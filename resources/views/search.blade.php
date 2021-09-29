@extends("layouts.app")

@section("title", "キーワード検索")
@section("content")
<div class="container">
  <p class="text-center stroke">検索フォームに<br>お探しの品を<br>入力して下さい</p>
  <form method="get" action="{{url('/search')}}">
    <div class="row">
      <div class="col-9">
        <div class="form-group">
          <input type="text" class="form-control" id="keyword" name="keyword" placeholder="例 : 野菜" value="{{$keyword}}" autocomplete="off">
        </div>
      </div>
      <div class="col-3">
        <button id="s" type="submit" class="btn btn-orange modify"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </form>
</div>
<br>
<div class="container">
  <p><i class="far fa-hand-point-right"></i> お探しの商品が <b>{{$shops->total()}}</b> 件 見つかりました。</p>
</div>
@if ($shops->isNotEmpty())
<div class="container">
  <div class="row">
    @foreach ($shops as $shop)
    <div class="col-6 col-sm-4 col-md-4">
      <div class="imageN_search">
        <a href="{{url('/goods/detail', ['shop'=>$shop])}}"><img class="img-fluid" src="{{$shop->image_path}}" alt=""></a>
      </div>
      <div class="p_name">
        <span>{{$shop->name}}</span>
      </div>
      <div class="text-center">
        <p class="text-center price">¥{{number_format($shop->fee)}}<small>(税込8%)</small></p>
        <a href="{{url('/goods/detail', ['shop'=>$shop])}}" class="btn btn-orange modify">商品詳細</a>
      </div>
    </div>
    @endforeach
  </div>
  <!--paginateメソッドでURLに反映-->
  <div class="d-flex justify-content-center mt-5" style="position:relative; z-index:0;">
    {{$shops->appends(["keyword"=>$keyword])->links()}}
  </div>
</div>
@else
<div class="container">
  <p><i class="far fa-hand-point-right"></i> お探しの商品は見つかりませんでした。</p>
</div>
@endif
<div class="text-center mt-5">
  <a href="{{url('/select')}}" class="btn btn-primary modify">商品検索に戻る</a>
</div>
</div>
@endsection
