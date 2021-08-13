<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Shop;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params =[
          "name" =>"長野県産などの国内産　レタス　1玉",
          "weight" =>"600",
          "product_code" =>"420120100006",
          "detail" =>"生で食べる以外にも、煮る、炒める料理にも使えます。",
          "fee" =>"171",
          "category" =>"野菜・果物",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_vegetable1.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"宮崎県産などの国内産　きゅうり　1本",
          "weight" =>"100",
          "product_code" =>"420130040002",
          "detail" =>"ビタミンC、カリウムを含み、パリパリとした歯ざわり、独特な香りは食欲増進につながります。利尿、胸やけを防ぐなどの効果もあります。",
          "fee" =>"63",
          "category" =>"野菜・果物",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_vegetable2.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"熊本県産などの国内産　トマトM寸　1玉",
          "weight" =>"200",
          "product_code" =>"420140100000",
          "detail" =>"各種ビタミン、ミネラル、食物繊維などをよく含んだ健康野菜です。",
          "fee" =>"106",
          "category" =>"野菜・果物",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_vegetable3.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"韓国産他　パプリカ（赤）1コ",
          "weight" =>"131",
          "product_code" =>"420151560008",
          "detail" =>"",
          "fee" =>"139",
          "category" =>"野菜・果物",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_vegetable4.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"高知県産などの国内産　なす　3本",
          "weight" =>"240",
          "product_code" =>"420350080000",
          "detail" =>"油との相性吸収がよいので夏場のスタミナ補給等、油脂をとりたいときに適しています。",
          "fee" =>"214",
          "category" =>"野菜・果物",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_vegetable5.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"StyleONE　皮なしウィンナー　大袋　300g",
          "weight" =>"300",
          "product_code" =>"4901231422561",
          "detail" =>"食べやすい皮なしタイプです。",
          "fee" =>"322",
          "category" =>"魚介類・肉・肉加工品・ハム・ソーセージ",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_meat1.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"StyleONE　ハーフベーコン　100g",
          "weight" =>"100",
          "product_code" =>"4901366022063",
          "detail" =>"",
          "fee" =>"214",
          "category" =>"魚介類・肉・肉加工品・ハム・ソーセージ",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_meat2.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"宮崎産などの　ぶりお造り　6切",
          "weight" =>"240",
          "product_code" =>"2022233700000",
          "detail" =>"",
          "fee" =>"430",
          "category" =>"魚介類・肉・肉加工品・ハム・ソーセージ",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_meat3.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"井ゲタ　やわらかな味わいのもずく（三杯酢）　50ｇ×3個",
          "weight" =>"150",
          "product_code" =>"4970794873509",
          "detail" =>"",
          "fee" =>"214",
          "category" =>"魚介類・肉・肉加工品・ハム・ソーセージ",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_meat4.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"ニッポンハム　シャーロワンズ　2個束",
          "weight" =>"262",
          "product_code" =>"4902115201630",
          "detail" =>"",
          "fee" =>"279",
          "category" =>"魚介類・肉・肉加工品・ハム・ソーセージ",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_meat5.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"オーストラリア産牛肉　切り落とし（カタロース）約150g（100gあたり本体198円）",
          "weight" =>"150",
          "product_code" =>"2015109100000",
          "detail" =>"お届けする商品の重量は、表記のグラム数より多少変動する場合がございます。",
          "fee" =>"321",
          "category" =>"魚介類・肉・肉加工品・ハム・ソーセージ",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_meat6.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"匠のすこやか豚　こまぎれ（国産）約160g（100gあたり本体98円）",
          "weight" =>"160",
          "product_code" =>"2014140100000",
          "detail" =>"",
          "fee" =>"169",
          "category" =>"魚介類・肉・肉加工品・ハム・ソーセージ",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_meat7.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"匠のすこやか鶏　むね肉（国産）1枚　約300g（100gあたり本体49円）",
          "weight" =>"300",
          "product_code" =>"2013101400000",
          "detail" =>"",
          "fee" =>"159",
          "category" =>"魚介類・肉・肉加工品・ハム・ソーセージ",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_meat8.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"StyleONE　酪農牛乳　1000ml　（牛乳成分無調整）",
          "weight" =>"1050",
          "product_code" =>"4908011510814",
          "detail" =>"生乳をそのまま殺菌しパックした成分無調整牛乳です。 ",
          "fee" =>"204",
          "category" =>"卵・乳製品・牛乳・豆乳・豆腐・納豆",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_milk1.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"PrimeONE　いなかのたまご　10コ",
          "weight" =>"658",
          "product_code" =>"4908017532995",
          "detail" =>"大自然昔ながらの伝説なつかしの味です。これがこの玉子の理念です",
          "fee" =>"279",
          "category" =>"卵・乳製品・牛乳・豆乳・豆腐・納豆",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_milk2.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"雪印メグミルク　6Pチーズ",
          "weight" =>"50",
          "product_code" =>"4903050503100",
          "detail" =>"発売は昭和29年！変わらぬ人気の６Ｐチーズです。",
          "fee" =>"214",
          "category" =>"卵・乳製品・牛乳・豆乳・豆腐・納豆",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_milk3.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"男前豆腐店　枝豆風味豆腐　60g×4",
          "weight" =>"240",
          "product_code" =>"4560279104534",
          "detail" =>"",
          "fee" =>"139",
          "category" =>"卵・乳製品・牛乳・豆乳・豆腐・納豆",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_milk4.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"ミツカン　なっとういち『押すだけプシュッ！と』超小粒　3P",
          "weight" =>"150",
          "product_code" =>"4902106060116",
          "detail" =>"",
          "fee" =>"85",
          "category" =>"卵・乳製品・牛乳・豆乳・豆腐・納豆",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_milk5.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"日本酪農　低脂肪　1000ml",
          "weight" =>"1050",
          "product_code" =>"4908014015828",
          "detail" =>"ビタミンDに加え、カルシウムを添加！ひと手間加え更に美味しくなって発売!! ",
          "fee" =>"150",
          "category" =>"卵・乳製品・牛乳・豆乳・豆腐・納豆",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_milk6.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"明治　ブルガリアヨーグルト　LB81　そのままおいしい脂肪ゼロ　400g",
          "weight" =>"400",
          "product_code" =>"4902705011632",
          "detail" =>"",
          "fee" =>"171",
          "category" =>"卵・乳製品・牛乳・豆乳・豆腐・納豆",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_milk7.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"雪印メグミルク　牧場の朝ヨーグルト生乳仕立て70g×3コ入",
          "weight" =>"210",
          "product_code" =>"4908011601307",
          "detail" =>"家族みんなで楽しめるスタンダードなハードヨーグルトです。",
          "fee" =>"106",
          "category" =>"卵・乳製品・牛乳・豆乳・豆腐・納豆",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_milk8.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"雪印メグミルク　牧場の朝ヨーグルト　いちご　70g×3",
          "weight" =>"210",
          "product_code" =>"4908011601314",
          "detail" =>"家族みんなで楽しめるいちご味の「牧場の朝ヨーグルト」です。",
          "fee" =>"106",
          "category" =>"卵・乳製品・牛乳・豆乳・豆腐・納豆",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_milk9.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"神明　秋田県産　あきたこまち　2kg",
          "weight" =>"2000",
          "product_code" =>"4955969065125",
          "detail" =>"",
          "fee" =>"1167",
          "category" =>"お米・麺・パスタ・パン",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_carbs1.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"日清フーズ　マ・マー　スパゲティー　1．4mm　300g",
          "weight" =>"300",
          "product_code" =>"4902110304022",
          "detail" =>"【5月度月間割引商品】デュラムセモリナを100％使用した粘弾性のあるやや細めのスパゲティ。ゆで時間は5分。",
          "fee" =>"117",
          "category" =>"お米・麺・パスタ・パン",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_carbs2.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"パスコ　超熟　5枚切　1斤",
          "weight" =>"72",
          "product_code" =>"4901820161420",
          "detail" =>"超熟はクラスト（みみ）までやわらかく、しっとりとしてサラッとした口どけ。シンプルな味わいだからなまでも、焼いても、サンドイッチでもおいしくお召し上がり頂けます。",
          "fee" =>"193",
          "category" =>"お米・麺・パスタ・パン",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_carbs3.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"サトウ　パリッとスリット　400ｇ",
          "weight" =>"400",
          "product_code" =>"4973360233233",
          "detail" =>"【5月度月間割引商品】",
          "fee" =>"387",
          "category" =>"お米・麺・パスタ・パン",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_carbs4.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"ヤマザキ　アップルパイ　1個入",
          "weight" =>"95",
          "product_code" =>"4903110040774",
          "detail" =>"",
          "fee" =>"128",
          "category" =>"お米・麺・パスタ・パン",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_carbs5.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"キッコーマン　特選丸大豆しょうゆ　500ml",
          "weight" =>"600",
          "product_code" =>"4901515120404",
          "detail" =>"大豆のうまみを丸ごと引き出した特選しょうゆ。良質な大豆を丸ごと仕込みじっくり熟成させたので、旨みコク風味が豊かなしょうゆです。大豆の油脂分から得られるまろやかでやわらかな口当たりと深いコク、穏かな香り、鮮やかな色合いが特長です。色味香りのバランスが良いので、どんな料理も引き立てます。ＪＡＳ特級",
          "fee" =>"268",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning1.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"StyleONE　マヨネ-ズ　400g",
          "weight" =>"400",
          "product_code" =>"4901577065842",
          "detail" =>"鮮度の良い卵を使い酸味をおさえ、マイルドに仕上がっています。",
          "fee" =>"171",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning2.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"日清オイリオ　キャノーラ油　1300g",
          "weight" =>"1300",
          "product_code" =>"4902380194323",
          "detail" =>"",
          "fee" =>"322",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning3.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"スプーン印　上白糖　1kg",
          "weight" =>"1000",
          "product_code" =>"4902882030105",
          "detail" =>"赤いスプーンでおなじみ。日本で最も多く使われている砂糖です。しっとりとソフトな風味で、料理、菓子、飲み物など、何にでも合う万能醤油。",
          "fee" =>"182",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning4.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"StyleONE　味付塩こしょう　250g　1本",
          "weight" =>"250",
          "product_code" =>"4901002137557",
          "detail" =>"香り高い黒こしょうを使用しています",
          "fee" =>"205",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning5.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"大森屋　おかずのり　サクッと仕上　3袋",
          "weight" =>"150",
          "product_code" =>"4901191250433",
          "detail" =>"歯切れの良さ、口溶けを実感して下さい。１商品に８切サイズが２４枚入っています。",
          "fee" =>"171",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning6.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"丸美屋　のりたま　バラエティ20ミニパック　46g",
          "weight" =>"46",
          "product_code" =>"4902820117202",
          "detail" =>"のりたま、味道楽、さけふり、たらこ、すきやきの5種類を小袋に詰めました。",
          "fee" =>"225",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning7.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"StyleONE　だしの素　50g×3袋",
          "weight" =>"150",
          "product_code" =>"4903065064313",
          "detail" =>"かつおぶしの風味にしいたけとこんぶのうま味を合わせただしの素です。",
          "fee" =>"205",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning8.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"味の素　ほんだし　8g×20袋【顆粒】",
          "weight" =>"160",
          "product_code" =>"4901001258000",
          "detail" =>"香り、コク・味わいそれぞれに優れた３種のかつお節を使用した”香り高く一番おいしい”和風だしの素です。さっと入れるだけで、様々な和風メニューの味付けを簡単手軽においしく仕上げることが出来ます。",
          "fee" =>"366",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning9.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"味の素　ワンタッチ調理ビン　70g",
          "weight" =>"70",
          "product_code" =>"49310269",
          "detail" =>"こんぶのうま味の素であるアミノ酸（グルタミン酸）から生まれたうま味調味料です。調理の下ごしらえから仕上げまで幅広く使えて、手軽に料理をおいしくすることができます。（私たちの体をつくるタンパク質はアミノ酸からできています。）",
          "fee" =>"322",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning10.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"大森屋　大森印　味付のり　12切5枚　12束",
          "weight" =>"767",
          "product_code" =>"4901191201206",
          "detail" =>"",
          "fee" =>"214",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning11.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"丸美屋　のりたま　28g",
          "weight" =>"28",
          "product_code" =>"4902820101119",
          "detail" =>"厳選した海苔とふっくらたまごの絶妙バランス。のりたまならではの味と豊かな香りが楽しめる、50年以上にわたって愛され続けています。",
          "fee" =>"117",
          "category" =>"食油・調味料",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_seasoning12.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"カルビー　BIGBAG　うすしお味　170ｇ",
          "weight" =>"170",
          "product_code" =>"4901330502911",
          "detail" =>"【5月度月間割引商品】",
          "fee" =>"214",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack1.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"明治　きのこの山74g",
          "weight" =>"74",
          "product_code" =>"4902777008592",
          "detail" =>"",
          "fee" =>"193",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack2.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"森永乳業　森永の焼プリン　140g1コ入",
          "weight" =>"140",
          "product_code" =>"49410150",
          "detail" =>"",
          "fee" =>"117",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack3.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"伊藤園　お～いお茶　緑茶　2L",
          "weight" =>"2060",
          "product_code" =>"4901085614730",
          "detail" =>"国産茶葉を100％使用した、香り高く、まろやかで味わい深い緑茶飲料です（無香料・無調味）。",
          "fee" =>"160",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack4.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"アサヒ　カルピスウォーター　1.5L",
          "weight" =>"1530",
          "product_code" =>"4901340689312",
          "detail" =>"すっきりさわやかな味わい、おいしい水で仕上げたカルピスです。牛乳と乳酸菌から生まれたすこやかなおいしさがいつでもどこでも手軽に楽しめます。 ",
          "fee" =>"193",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack5.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"カルビー　かっぱえびせん　85g",
          "weight" =>"85",
          "product_code" =>"4901330106355",
          "detail" =>"",
          "fee" =>"106",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack6.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"ヤマザキビスケット　チップスターS　うすしお味　50ｇ",
          "weight" =>"50",
          "product_code" =>"4903015522658",
          "detail" =>"",
          "fee" =>"106",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack7.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"StyleONE　アーモンドフィッシュ　20g",
          "weight" =>"20",
          "product_code" =>"4901290151853",
          "detail" =>"",
          "fee" =>"106",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack8.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"StyleONE　ミルクチョコレート　70g",
          "weight" =>"70",
          "product_code" =>"4902155045652",
          "detail" =>"",
          "fee" =>"106",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack9.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"ロッテ　コアラのマーチ　50g",
          "weight" =>"50",
          "product_code" =>"4903333066254",
          "detail" =>"かわいいコアラが目印の　ロングセラーチョコ。",
          "fee" =>"106",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack10.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"ロッテ　パイの実チョコレートパイ　73g",
          "weight" =>"73",
          "product_code" =>"4903333066308",
          "detail" =>"サクサクパイ生地にチョコがたっぷり！",
          "fee" =>"139",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack11.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"明治　アーモンドチョコ88g",
          "weight" =>"88",
          "product_code" =>"4902777004532",
          "detail" =>"選び抜かれた豆だけをじっくりローストして香ばしく仕上げました。アーモンドをくるむチョコレートは明治ならではの高品質なミルクチョコレート。ナッツの香ばしさを引き立てるマイルドなおいしさです。",
          "fee" =>"214",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack12.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"明治　ホワイトチョコレート　40g",
          "weight" =>"40",
          "product_code" =>"4902777016832",
          "detail" =>"厳選した原材料を用いることにより、ミルク感を際立たせながら澄んだ味わいと後味のキレを実現しました。ホワイトチョコレートの新しいスタンダードです。",
          "fee" =>"106",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack13.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"明治　ミルクチョコレート　50g",
          "weight" =>"50",
          "product_code" =>"4902777015927",
          "detail" =>"厳選された材料を使ったチョコレートだけが名乗れる「ピュアチョコレート」の称号。芳醇なカカオとミルクの味と香りをお楽しみください。ガナッシュやチョコレートケーキなど手作りチョコレートの材料にも最適です！",
          "fee" =>"106",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack14.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"グリコ　ポッキー　チョコレート　2袋",
          "weight" =>"70",
          "product_code" =>"4901005510029",
          "detail" =>"独自の製法で焼き上げた、味わいのある軽快なパイ食感のプレッツェルに、チョコを練り上げる時の温度を高めることによってコクのある濃厚な風味に仕上げたミルクチョコレートをコーティングしました。",
          "fee" =>"108",
          "category" =>"菓子・スイーツ・アイス・飲料・お水",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_snack15.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"花王　アタック　抗菌EXスーパークリアジェル　詰替用　770g",
          "weight" =>"770",
          "product_code" =>"4901301335180",
          "detail" =>"",
          "fee" =>"218",
          "category" =>"衣料用洗剤・柔軟剤・衣料用漂白剤",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_washing1.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"花王　ワイドハイターEXパワー　本体　600ml",
          "weight" =>"679",
          "product_code" =>"4901301289599",
          "detail" =>"",
          "fee" =>"306",
          "category" =>"衣料用洗剤・柔軟剤・衣料用漂白剤",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_washing2.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"花王　ハミング　オリエンタルローズ　詰替　540ml",
          "weight" =>"540",
          "product_code" =>"4901301306579",
          "detail" =>"",
          "fee" =>"208",
          "category" =>"衣料用洗剤・柔軟剤・衣料用漂白剤",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_washing3.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"ウタマロ石けん　133g",
          "weight" =>"133",
          "product_code" =>"4904766110309",
          "detail" =>"通常の洗濯では落ちにくい泥汚れ、エリ・ソデ汚れ、化粧品汚れ、食べこぼし汚れなどのガンコな汚れをしっかり落とす優れ者です。ガンコな汚れ専用の部分洗い用洗剤として、多くのお客様に愛用していただいています。",
          "fee" =>"108",
          "category" =>"衣料用洗剤・柔軟剤・衣料用漂白剤",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_washing4.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

        $params =[
          "name" =>"ライオン　レインガード　大　180ml",
          "weight" =>"200",
          "product_code" =>"4903301370239",
          "detail" =>"すぐれたはっ水効果で、雨・雪・ドロをはじく衣類・布製品用はっ水スプレー",
          "fee" =>"1028",
          "category" =>"衣料用洗剤・柔軟剤・衣料用漂白剤",
          "store" =>"イズミヤ",
          "image_path" =>"storage/image/f_washing5.jpg",
          "created_at" =>date('Y-m-d H:i:s'),
          "updated_at" =>date('Y-m-d H:i:s'),
        ];
        DB::table("shops")->insert($params);

    }
}
