@extends("layouts.app")

@section("title", "店舗選択")
@section("content")
<div class="container">
  <h1 style="text-align:center;">目的のお店を選んでください</h1>
  <div class="row">
    <ul>
      <li><form method="get" action="/select/store/goods">
            <input type="hidden" name="store" value="東友">
            <input type="submit" value="東友">
          </form>
      </li>
      <li><form method="get" action="/select/store/goods">
            <input type="hidden" name="store" value="プレスコ">
            <input type="submit" value="プレスコ">
          </form>
      </li>
      <li><form method="get" action="/select/store/goods">
            <input type="hidden" name="store" value="アズミヤ">
            <input type="submit" value="アズミヤ">
          </form>
      </li>
    </ul>
  </div>
  <br>
  <div style="text-align:center;"><a href="javascript:history.back()" class="btn btn-success">選択画面に戻る</a></div>
</div>

@endsection
