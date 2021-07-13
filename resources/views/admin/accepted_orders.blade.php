@extends("layouts.app")

@section("title", "受注記録")
@section("content")
<div class="container">
  <h1 class="my-5">商品受注記録</h1>
  <form method="get" action="">
    <div class="row">
      <div class="col-9">
        <div class="form-group">
          <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search..." value="">
        </div>
      </div>
      <div class="col-3">
        <button id="s" type="submit" class="btn btn-primary btn-block font-weight-bold">絞り込み検索</button>
      </div>
    </div>
  </form>
  <div class="mb-3">
    <a href="{{ route('export.sample', ['keyword' => $keyword]) }}" class="btn btn-primary font-weight-bold"><i class="fas fa-download"></i> Export to CSV</a>
  </div>
  <div class="small">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>ユーザー名</th>
          <th>住所</th>
          <th>店舗名</th>
          <th>商品名/商品ID</th>
          <th>金額</th>
          <th>数量</th>
          <th>購入日</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $history as $history )
        <tr>
          <td>{{ $history->user_id }}</td>
          <td>{{ $history->user->name }}</a></td>
          <td>{{ $history->user->address }}</td>
          <td>{{ $history->shop->store }}</td>
          <td>{{ $history->shop->name }}</td>
          <td>{{ $history->shop->fee }}</td>
          <td>{{ $history->amount }}</td>
          <td>{{ $history->deleted_at->format("Y年m月d日 H時i分") }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div style="text-align:center;">
  <a href="javascript:history.back()" class="btn btn-success" style="font-size:16px;">戻る</a>
</div>
@endsection
