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

// 問題1

$nowDate = new DateTime();
$oneMonthAgo = $nowDate->modify('-1 month');
echo $oneMonthAgo->format('Y-m-d') . "\n";

// DateTimeクラスは日付や時刻を表現するクラスで、引数無しだと今日の日付のオブジェクトを生成。
// 今日の日付を代入した変数$nowDateからDateTimeクラスのmodifyメソッドにアクセスし、引数に1か月前の日付を文字列で指定。
// 1か月前の日付を代入した$oneMonthAgoからDateTimeクラスのformatプロパティにアクセスして、引数に日付や時刻の形式を文字列で指定。

echo "\n";

// 問題2

$now = new DateTime();
$past = new DateTime('1992/04/25');

$dateInterval = $now->diff($past);
$totalDateInterval = $dateInterval->format('%a日');

echo 'あの日から' . $totalDateInterval . '経過しました。' . "\n";

// 今日の日付と過去の日付を表すDateTimeインスタンスを生成し、今日の日付は$nowに、過去の日付は$pastに代入。
// 片方のDateTimeインスタンスからDateTimeクラスのdiffプロパティにアクセスして日付の差分を出す。
// diffプロパティにより、日付の間隔を表すDateIntervalクラスのインスタンスを生成し、$dateIntervalに代入。
// DateIntervalインスタンスからDateIntervalクラスのformatプロパティにアクセスして表示形式を指定。
// DateInterval::formatの引数に、定められたformat文字を使用。日数を出す部分は「%」から書き始め、今回はそこに総日数を表す「a」を指定。
// $dateInterval::format('%a日')により$nowと$pastの差分の総日数が返り値となり、それを$totalDateIntervalに代入。
?>