<?php
// Q1 変数と文字列

$name = '有馬';

echo '私の名前は「' . $name . '」です。' . "\n";
echo "\n";

// Q2 四則演算

$num = 5 * 4;

echo $num . "\n";
echo $num / 2 . "\n";
echo "\n";

// Q3 日付操作

$now = date('Y年m月d日 H時i分s秒');

echo '現在時刻は、' . $now . 'です。' . "\n";
echo "\n";

// Q4 条件分岐-1 if文

$device = 'windows';

if ($device === 'windows' || $device === 'mac') {
  echo '使用OSは、' . $device . 'です。' . "\n";
} else {
  echo 'どちらでもありません。' . "\n";
}

echo "\n";

// Q5 条件分岐-2 三項演算子

$age = 25;

echo ($age >= 18) ? '成人' : '未成年';
echo "\n" . "\n";

// Q6 配列

$kanto = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];

echo $kanto[3] . 'と' . $kanto[4] . 'は関東地方です。' . "\n";
echo "\n";

// Q7 連想配列-1

$kantoArea = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($kantoArea as $city) {
  echo $city . "\n";
}

echo "\n";

// Q8 連想配列-2

foreach ($kantoArea as $pref => $city) {
  if ($pref === '埼玉県') {
    echo $pref . 'の県庁所在地は、' . $city . 'です。' . "\n";
  }
  break;
}

echo "\n";

// Q9 連想配列-3

$kantoArea['愛知県'] = '名古屋市';
$kantoArea['京都府'] = '京都市';

foreach ($kantoArea as $pref => $city) {
  if (in_array($pref, $kanto)) {
    echo $pref . 'の県庁所在地は、' . $city . 'です。' . "\n";
  } else {
    echo $pref . 'は関東地方ではありません。' . "\n";
  }
}

// in_array関数の第一引数が検索値なのでキー変数に該当する$prefを入れ、第二引数に関東の配列$kantoを入れる。
//これにより$kantoの中に$prefと一致する値があるかという条件になる。$prefに格納された値が関東の都県ならtrue判定、そうでなければfalse判定。
//関東圏以外の都道府県が追加されても関東圏以外はfalseになるためif文に追記の必要がなく、こちらの方がコードがスッキリする。

echo "\n";

// Q10 関数-1

function hello ($name)
{
  return $name . 'さん、こんにちは。' . "\n";
}

echo hello('有馬');
echo hello('山田');

echo "\n";

// Q11 関数-2

$price = 2000;

function calcTaxInPrice ($taxOutPrice)
{
  return $taxOutPrice * 1.1;
}

$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。' . "\n";
echo "\n";

// Q12 関数とif文

function distinguish ($num)
{
  if ($num % 2 === 0) {
    return $num . 'は偶数です。' . "\n";
  } else {
    return $num . 'は奇数です。' . "\n";
  }
}

echo distinguish(21);
echo distinguish(30);
echo "\n";

// Q13 関数とswitch文

function evaluateGrade ($grades)
{
  switch ($grades) {
    case 'A':
    case 'B':
      return '合格です。' . "\n";
    case 'C':
      return '合格ですが追加課題があります。' . "\n";
    case 'D':
      return '不合格です。' . "\n";
    default:
      return '判定不明です。講師に問い合わせてください。' . "\n";
  }
}

echo evaluateGrade('B');
echo evaluateGrade('E');
echo "\n";


?>
