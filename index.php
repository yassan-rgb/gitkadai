<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>すきな〇〇</title>
  <link rel="stylesheet" type="text/css" href="stylekadai.css">
</head>
<body>
  


  <?php

$list = [
  ["group"=>"場所","list"=>[
                          ["name"=>"石川県","description"=>"日本情緒あふれる街並みや伝統工芸品、温泉や新鮮な海の幸など","url"=>"https://www.hot-ishikawa.jp/"],
                          ["name"=>"大阪市中央区","description"=>"御堂筋 淀屋橋から本町まで","url"=>"https://www.google.com/maps/@34.6878368,135.5008247,3a,75y,185.4h,101.85t/data=!3m6!1e1!3m4!1s_M200uv8yDtNuSVWE7sLww!2e0!7i16384!8i8192"],
                          ["name"=>"岡山市北区","description"=>"西川緑道公園筋","url"=>"https://www.google.com/maps/@34.6646653,133.9226089,3a,75y,157.35h,77.01t/data=!3m6!1e1!3m4!1sG_XlfESwc2Nl4y6H-LahMg!2e0!7i16384!8i8192"]
                        ]
  ],
  ["group"=>"アニメ","list"=>[
                          ["name"=>"ハイキュー","description"=>"バレーボールに魅せられた少年たちの激闘","url"=>"https://haikyu.jp/"],
                          ["name"=>"鬼灯の冷徹","description"=>"地獄のお話","url"=>"http://www.hozukino-reitetsu.com/"],
                          ["name"=>"夏目友人帳","description"=>"小さい頃から妖怪を見ることができた少年の心優しき友人たちとの、大切な日々。そして
                          美しく儚き、人と妖の物語。","url"=>"http://www.natsume-anime.jp/"]
                        ]
  ],
  ["group"=>"果物","list"=>[
                          ["name"=>"苺","description"=>"赤い食べている部分は、花托の発達した花の一部で、本当の果実はその周りにある胡麻の様な粒粒一つ一つがそうなんです。","url"=>"https://www.foodslink.jp/syokuzaihyakka/syun/fruit/Strawberry-page.htm"],
                          ["name"=>"温州みかん","description"=>"温州みかんは日本生まれといわれている柑橘です。","url"=>"https://www.kudamononavi.com/zukan/mikan.htm"],
                          ["name"=>"キウイフルーツ","description"=>"果肉が緑色のグリーンキウイと、果肉が黄色のゴールドキウイが大半を占めますが、果肉に赤みがさすものや、小さなベビーキウイなどもあります。","url"=>"https://www.kudamononavi.com/zukan/kiwi.htm"]
                        ]
  ],
  ["group"=>"その他","list"=>[
                          ["name"=>"和食器","description"=>"素朴な風合いや色合い","url"=>"https://uchill.jp/"],
                          ["name"=>"インテリア","description"=>"和モダン 和風デザインと、洋風に近い現代的でスタイリッシュなテイストを融合させたデザイン","url"=>"https://www.eyefulhome.jp/sodate/article/modern-japanese-style-room/"],
                          ["name"=>"卵焼き","description"=>"様々な味付けを楽しむことができる定番家庭料理。","url"=>"https://www.olive-hitomawashi.com/column/2017/09/post-466.html"]
                        ]
  ]
];

?>
 
 <?php foreach ($list as $item) { ?>
    <h2 class="food_title"><?php echo $item["group"]; ?></h2>
    <ul>
      <?php $i = 0; ?>
      <?php foreach ($item["list"] as $categoryList) { ?>
        <?php $i++; ?>
        <li>
        <h3 class="category_title type<?php echo $i; ?>">
          <a href="<?php echo $categoryList["url"]; ?>" target="_blank">
            <?php echo $categoryList["name"]; ?>
            <?php if($categoryList["name"] == "夏目友人帳"): ?>
            <p class="naku">泣く！</p>
          <?php endif; ?>
          </a>
        </h3>
        <div><?php echo $categoryList["description"]; ?></div>
      </li>
      <?php } ?>
    </ul>

  <?php } ?>

</body>
</html>


