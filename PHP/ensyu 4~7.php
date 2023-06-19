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

