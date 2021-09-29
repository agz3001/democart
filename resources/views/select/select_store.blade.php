@extends("layouts.app")

@section("title", "店舗選択")
@section("content")
<div class="container">
  <p class="text-center stroke">目的のお店を選んでください</p>
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
  <div class="text-center"><a href="/select" class="btn btn-primary modify">選択画面に戻る</a></div>
</div>

@endsection
