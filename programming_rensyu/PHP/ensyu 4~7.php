<?php
//演習４－２　print_r
$array4_2_1 = [];//空の配列
//変化させる必要があるのは加える部分のインデックス番号と加える数値
$index_num4_2_1 = 0;
for ($num4_2_1 = 1; $num4_2_1 <= 100; $num4_2_1++) {
    $array4_2_1[$index_num4_2_1] = $num4_2_1;
    $index_num4_2_1++;
}

print_r($array4_2_1);

echo '<br>';

//10個の乱数の配列を生成する
$random_number4_2_2 = [];
for ($count4_2_2 = 1; $count4_2_2 <= 10; $count4_2_2++) {
    $random_number4_2_2[] = random_int(1,100);
}
print_r($random_number4_2_2);

echo '<br>';

//もっと簡単にできる
$random_number4_2_3 = [];

for ($count4_2_3 = 1; $count4_2_3 <= 10; $count4_2_3++) {
    $random_number4_2_3[] = random_int(1,100);
}
sort($random_number4_2_3);//このコードを実行すると、$random_number4_2_3の配列が昇順に並べ替えられた結果が表示される。
print_r($random_number4_2_3);

echo '<br>';

//演習４－３　連想配列
$color_name = [
    'red' => '赤',
    'yellow' => '黄',
    'blue' => '青',
    'green' => '緑',
    'white' => '白',
    'black' => '黒',
];
$color = [
    'red' => '#FF0000',
    'yellow' => '#00FFFF',
    'blue' => '#0000FF',
    'green' => '#00FF00',
    'white' => '#FFFFFF',
    'black' => '#000000',
];
$key = "red";
echo  "<div style='color:{$color[$key]}'>{$color_name[$key]}</div>";

echo '<br>';

//関数演習問題
function myTodaySring  ($Month,$Day) {
    $week = date('w', strtotime('2023/6/19'));
    $weeks = ['日','月','火','水','木','金','土'];
    if ($Month == True) {
        echo $Month.'月'.$Day.'日('.$weeks[$week].')';
    }
    else{
        echo $Month.'月'.$Day.'日';
    }
}

//今日の日付の取得
$month = date('n', strtotime('2023/6/19'));
$day = date('j', strtotime('2023/6/19'));
//今日の日付の表示
myTodaySring  ($month,$day);

echo '<br>';


//もっと簡単にできる
function myTodaySring_2 ($flag = False) {
    echo date ('m月d日');
    if ($flag ){   //ifで引数の値が設定されていないときは引数=True という意味になる
        $weeks_2 = ['日','月','火','水','木','金','土'];
        echo '('.$weeks_2[date('w')].')';
    }
}

echo myTodaySring_2  (True);

echo '<br>';

echo myTodaySring_2 ();

echo '<br>';