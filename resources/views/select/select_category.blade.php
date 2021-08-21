@extends("layouts.app")

@section("title", "分類選択")
@section("content")
<div class="container">
  <h1 class="text-center">商品分類を選んでください</h1>
  <div class="row">
    <ul>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="野菜・果物">
            <button type="submit" class="col-12 col-md-12 btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center modify">
              野菜・<br>果物・ほか
            </button>
          </form>
      </li>
      <li ><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="魚介類・肉・肉加工品・ハム・ソーセージ">
            <button type="submit" class="col-12 col-md-12 btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center modify">
              魚介類・肉・肉加工品・<br>ハム・ソーセージ
            </button>
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="卵・乳製品・牛乳・豆乳・豆腐・納豆">
            <button type="submit" class="col-12 col-md-12 btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center modify">
              卵・乳製品・牛乳・<br>豆乳・豆腐・納豆
            </button>
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="お米・麺・パスタ・パン">
            <button type="submit" class="col-12 col-md-12 btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center modify">
              お米・麺・<br>パスタ・パン
            </button>
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="食油・調味料">
            <button type="submit" class="col-12 col-md-12 btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center modify">
              食油・<br>調味料
            </button>
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="菓子・スイーツ・アイス・飲料・お水">
            <button type="submit" class="col-12 col-md-12 btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center modify">
              菓子・スイーツ・アイス・<br>飲料・お水
            </button>
          </form>
      </li>
      <li><form method="get" action="/select/category/goods">
            <input type="hidden" name="category" value="衣料用洗剤・柔軟剤・衣料用漂白剤">
            <button type="submit" class="col-12 col-md-12 btn btn-outline-dark mx-1 mb-2 d-flex align-items-center justify-content-center modify">
              衣料用洗剤・柔軟剤・<br>衣料用漂白剤
            </button>
          </form>
      </li>
    </ul>
  </div>
  <br>
  <div class="text-center mt-5">
    <a href="/select" class="btn btn-success modify">選択画面に戻る</a>
  </div>
</div>

@endsection
