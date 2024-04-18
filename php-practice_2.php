<?php
// Q1 tic-tac問題

for ($i = 1; $i < 101; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo 'tic-tac' . "\n";
  } elseif ($i % 4 === 0) {
    echo 'tic' . "\n";
  } elseif ($i % 5 === 0) {
    echo 'tac' . "\n";
  } else {
    echo $i . "\n";
  }
}

echo "\n";

// Q2 多次元連想配列

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// 問題1

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";

// 配列のキーを指定してバリューを取得するため、
// $personalInfosの要素のキーはインデックス番号なのでまずは[]で番号を指定。
// 次に、指定したキーのバリューはまた別の配列なので、その配列要素のバリューを取り出すために中の配列のキーも指定する。
// これにより、$personalInfos配列の2番目の要素（配列）の中のnameキーとtelキーを指定してバリューを取り出している。

echo "\n";

// 問題2

foreach ($personalInfos as $num => $infos) {
  echo $num + 1 . '番目の' . $infos['name'] . 'のメールアドレスは' . $infos['mail'] . 'で、電話番号は' . $infos['tel'] . 'です。' . "\n";
}

// $personalInfos配列のインデックス番号（キー）はキーを受け取る$numに代入され、
// バリューである配列はバリューを受け取る$infosに代入される。
// $personalInfos[1]は、1という値を格納した$numと同じ。$personalInfos[1]['name']は、$numが1の時の$infos['name']（$infosという配列のnameキー）と同じ。

echo "\n";

// 問題3

$ageList = [25, 30, 18];

// foreach ($personalInfos as $num => $infos) {
//   $personalInfos[$num]['age'] = $ageList[$num];
// }

foreach ($ageList as $key => $age) {
  $personalInfos[$key]['age'] = $age;
}

var_dump($personalInfos);
echo "\n";

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId . "\n";
    }
}

$arima = new Student(27, '有馬');
echo '学籍番号' . $arima->studentId . '番の生徒は' . $arima->studentName . 'です。' . "\n";

// コンストラクタでプロパティのstudentIdとstudentNameに仮引数で受け取った$idと$nameを代入する。
// インスタンスを代用する変数である$thisで、アロー演算子（->）でプロパティにアクセスしてデータを呼び出している。

echo "\n";

// Q4 オブジェクト-2

$yamada = new Student(120, '山田');
$yamada->attend('Java');
echo "\n";

// Q5 定義済みクラス


?>