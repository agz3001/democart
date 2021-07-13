@extends("layouts.app")

@section("title", "分類選択")
@section("content")
<div class="container">
  <h1 class="text-center">商品分類を選んでください</h1>
  <div class="row">
    <ul>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="野菜・果物">
            <input type="submit" value="野菜・果物" class="btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center">
          </form>
      </li>
      <li ><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="魚介類・肉・肉加工品・ハム・ソーセージ">
            <input type="submit" value="魚介類・肉・肉加工品・ハム・ソーセージ" class="btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center">
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="卵・乳製品・牛乳・豆乳・豆腐・納豆">
            <input type="submit" value="卵・乳製品・牛乳・豆乳・豆腐・納豆" class="btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center">
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="お米・麺・パスタ・パン">
            <input type="submit" value="お米・麺・パスタ・パン" class="btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center">
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="食油・調味料">
            <input type="submit" value="食油・調味料" class="btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center">
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="菓子・スイーツ・アイス・飲料・お水">
            <input type="submit" value="菓子・スイーツ・アイス・飲料・お水" class="btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center">
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="衣料用洗剤・柔軟剤・衣料用漂白剤">
            <input type="submit" value="衣料用洗剤・柔軟剤・衣料用漂白剤" class="btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center">
          </form>
      </li>
    </ul>
  </div>
  <br>
  <div class="text-center mt-5">
    <a href="javascript:history.back()" class="btn btn-success">選択画面に戻る</a>
  </div>
</div>

@endsection
