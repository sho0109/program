<?php
$scores = [30,50,80];
$line = 60;
foreach ($scores as $score) {
    echo '<br>';
    if ($line > $score){
        echo "赤点";
    }
    elseif ($score >= $line){
        echo "合格";
    }
}

date_default_timezone_set('Asia/Tokyo'); //日本時間の取得
$hour = date('H');
if($hour > 05 and $hour <= 10){
    echo 'おはようございます';
}
elseif ($hour >= 11 and $hour <= 15) {
    echo 'こんにちは';
}
elseif ($hour >= 16 and $hour <= 20) {
    echo 'こんばんわ';
}
elseif ($hour >= 21 and $hour <= 24) {
    echo 'お疲れ様です。';
    echo '<br>';
    echo 'お早めにお休みください。';
}
elseif ($hour >= 01 and $hour <= 05) {
    echo 'zzZ';
}

$pref = '愛媛';
switch ($pref){
    case '愛媛':
        echo $pref."の名産品はみかんです。";
        break;
    case '広島':
        echo $pref."の名産品はレモンです。";
        break;
    case '愛知':
        echo $pref."の名産品は味噌煮込みうどんです。";
        break;
}

$week = date('w'); //(0:日曜,1:月曜,2:火曜 ～ 6:土曜)
switch($week){
    case 0:
        echo '日曜日';
        break;
    case 1:
        echo '月曜日';
        break;
    case 2:
        echo '火曜日';
        break;
    case 3:
        echo '水曜日';
        break;
    case 4:
        echo '木曜日';
        break;
    case 5:
        echo '金曜日';
        break;
    case 6:
        echo '土曜日';
        break;
}

echo '<br>';
$amount = 1000; // 預金額
$year = 0; // 0年からスタート
echo $year.'年';
echo $amount.'円';
while ($amount < 2000) {
    $amount = $amount * 1.05;
    $year++;
    echo '<br>';
    echo $year.'年';
    echo $amount.'円';
}
echo '<br>';
echo $year.'年かかる。';

echo '<br>';
$nm=1;
while ($nm <= 100) {
    echo '<br>';
    echo $nm++;
}


for ($count = 1; $count <= 10; $count++ /*ここは（初期値; 条件式; 増減式）で、カウンタ変数と呼ばれる。*/){
    $point = rand(1, 100); //1～100乱数
    echo '<br>';
    echo $count.'回目';
    if ($point >= 60) {
        echo $point.'点';
        echo 'やったね！合格！';
    }
    elseif ($point < 60) {
        echo $point.'点';
        echo 'ざんねん、不合格。';
    }
}

$count = 0; //テストの回数(ここは初期値)
while ($count < 10) {
    echo '<br>';
    $count++; //ここは増減式
    $point = rand(1, 100); //1～100乱数
    if ($point >= 60) {
        echo $count.'回目';
        echo $point.'点';
        echo 'やったね！合格！';
    }
    elseif ($point < 60) {
        echo $count.'回目';
        echo $point.'点';
        echo 'ざんねん、不合格。';
    }
}

$counts = [1,2,3,4,5,6,7,8,9,10] ;/*この集合のうちから左から順に$countに代入される。*/
$line = 60;
foreach ($counts as $count /*ここで集合から代入する、カウンタ変数を指定する。*/) {
    $point = rand(1, 100); //1～100乱数
    echo '<br>';
    if ($point >= $line ) {
        echo $count.'回目';
        echo $point.'点';
        echo 'やったね！合格！';
    }
    elseif ($point < $line) {
        echo $count.'回目';
        echo $point.'点';
        echo 'ざんねん、不合格。';
    }
}

for ($num1 = 1; $num1 <= 100; $num1++){
    echo '<br>';
    echo $num1;
}

for ($num2 = 1; $num2 <= 10; $num2++){
    echo '<br>';
    if ($num2 % 2 == 0){
        echo $num2.'は2の倍数';
    }
    elseif ($num2 % 3 == 0){
        echo $num2.'は3の倍数';
    }
    elseif ($num2 % 5 == 0){
        echo $num2.'は5の倍数';
    }
    else {
        echo $num2.'は2,3,5のうちのどの倍数でもない。';
    }
}
/*elseifや、elseだと約数を持つ数字は当てはまる最も上の条件にのみ引っ掛かり、その後、その当てはまった条件より下の条件は検証されない*/
/*ifを複数用いると全てのifの条件で検証され、当てはまる全ての条件の処理が実行される。continueを追記すると当てはまったところ以下のみ(←ここ重要(ここより上のループ処理は実行される))の条件の検証や、処理の実行はスキップされて、ループ処理の親要素の｛　｝の｝に移行する（｛ではないことに注意！）。*/

for ($num2 = 1; $num2 <= 10; $num2++){
    echo '<br>';

    if (($num2 % 2 == 0) and ($num2 % 3 == 0) and ($num2 % 5 == 0)){
        echo $num2.':2の倍数かつ3の倍数かつ5の倍数';
    }

    elseif (($num2 % 2 == 0) and ($num2 % 3 == 0)){
        echo $num2.':2の倍数かつ3の倍数';
    }

    elseif (($num2 % 2 == 0) and ($num2 % 5 == 0)){
        echo $num2.':2の倍数かつ5の倍数';
    }

    elseif (($num2 % 3 == 0) and ($num2 % 5 == 0)){
        echo $num2.':3の倍数かつ5の倍数';
    }

    elseif ($num2 % 2 == 0){
        echo $num2.':2の倍数';
    }
    elseif ($num2 % 3 == 0){
        echo $num2.':3の倍数';
    }
    elseif ($num2 % 5 == 0){
        echo $num2.':5の倍数';
    }
    else {
        echo $num2.':2,3,5のうちのどの倍数でもない。';
    }
}

for ($num2 = 1; $num2 <= 10; $num2++){
    echo '<br>';

    if (($num2 % 2 == 0) and ($num2 % 3 == 0) and ($num2 % 5 == 0)){
        echo $num2.':2の倍数かつ3の倍数かつ5の倍数';
        continue;
    }

    if (($num2 % 2 == 0) and ($num2 % 3 == 0)){
        echo $num2.':2の倍数かつ3の倍数';
        continue;
    }

    if (($num2 % 2 == 0) and ($num2 % 5 == 0)){
        echo $num2.':2の倍数かつ5の倍数';
        continue;
    }

    if (($num2 % 3 == 0) and ($num2 % 5 == 0)){
        echo $num2.':3の倍数かつ5の倍数';
        continue;
    }

    if ($num2 % 2 == 0){
        echo $num2.':2の倍数';
        continue;
    }
    if ($num2 % 3 == 0){
        echo $num2.':3の倍数';
        continue;
    }
    if ($num2 % 5 == 0){
        echo $num2.':5の倍数';
        continue;
    }
    if (($num2 % 2 <> 0) and ($num2 % 3 <> 0) and ($num2 % 5 <> 0)){
        echo $num2.':2,3,5のうちのどの倍数でもない。';
    }
}

/*上から順に処理されることを意識するとやりやすい。　
(1) 変数を指定
(2) 変数の増減や、条件を指定
(3) 上から順に頭の中で動作を確認しながらどの動作や、どの処理が足りないかを考えながら書き足していく（このとき、ループ処理は｛　｝の中でのみ行われ、その｛　｝のループ処理が終わってから外側の処理に移行するため、for( ){ for( ){  } } みたいな、入子型のループ処理は1-1,1-2,...,1-k,2-1,2-2,...,2-k,...,n-1,n-2,...,n-kのように処理される。これを防ぐには内側のループ処理内にif文やswitch文でbreakやcontinueを書き足すことで工夫ができる。*/
/*エラー表示が出たら、真っ先に;や''、カウンタ変数の増減を書き忘れていないか確認する*/
/*=は代入、==は値が等しい*/

/*演習 05-03-5 1*/
for ($num3 = 1; $num3 <= 100; $num3++) {
    if (($num3 == 1) or ($num3 == 15) or ($num3 == 33)) {
        continue;
    }
    echo '<br>';
    echo $num3;
}

/*演習 05-03-5 2*/
//今月
$month_050352 = 06;
//日付
$day_050352 = 01;
//曜日の集合　（日付の曜日の番号（日:0 月:1 火:2 水:3 木:4 金:5 土:6）に番号を合わせた。）
$day_of_the_weeks = ['日','月','火','水','木','金','土'];
// 表示数カウンタ
$count_050352 = 1;
// 10回表示するようにループ
while ($count_050352 <= 10){
// 日付の曜日の番号（日:0 月:1 火:2 水:3 木:4 金:5 土:6）これは日付が変わっていくに連れて、曜日を変える必要があるからループ内に入れないといけない。
    $week_050352 = date('w',strtotime('202306'.$day_050352)); //(0:日曜,1:月曜,2:火曜 ～ 6:土曜)
    //土日をスキップ（日付だけ進める）
    if (($week_050352 ==0) or ($week_050352 ==6)) {
        $day_050352++;
        continue;
    }
    
    echo '<br>';
    echo  '2023年6月'.$day_050352.'日 '.$day_of_the_weeks[$week_050352].'曜日';
    //日付と表示数カウンタを進める
    $day_050352++;
    $count_050352++;
    
}
/*ここでforeachを使う場合は初めの日付の曜日に曜日の集合の順番を合わせる（foreachのメリットは集合がわかっているときに有利なのと、集合を、その要素の番号ではなく要素のまま変数に代入できること）。ここでは、自動で曜日を取得してやる。*/

//foreachを使う場合
//今月
$month_050352 = 06;
//日付
$day_050352 = 01;
//曜日の集合　（６月1日の曜日から始まるように集合の順番を合わせた（木:0 金:1 土:2 日:3 月:4 火:5 水:6）に番号を合わせた。）
$day_of_the_weeks = ['木','金','土','日','月','火','水'];
// 表示数カウンタ
$count_050352 = 1;
// 10回表示するようにループ
while ($count_050352 <= 10){
    //曜日を順番に代入
    foreach ($day_of_the_weeks as $week_050352) {
    //土日をスキップ（日付だけ進める）
    if (($week_050352 == '土') or ($week_050352 == '日')) {
        $day_050352++;
        continue;
    }
    
    echo '<br>';
    echo  '2023年6月'.$day_050352.'日 '.$week_050352.'曜日';
    //日付と表示数カウンタを進める
    $day_050352++;
    $count_050352++;
    }
}

//1年分
//1月から
$month_050353 = 1;
//１日から
$day_050353 = 1;
//曜日の集合　（1月1日の曜日から始まるように集合の順番を合わせた（木:0 金:1 土:2 日:3 月:4 火:5 水:6）に番号を合わせた。）
$day_of_the_weeks_050353 = ['日','月','火','水','木','金','土'];
//各月の日数の取得
$month_day_050353 = date('t',strtotime('2023'.$month_050353));
// 各月の日数分だけループさせて、月末になったら、月を進めて、1日に戻して、曜日を進める
while ($month_050353 <=12){
    while ($day_050353 <= $month_day_050353){

        // 日付の曜日の番号の取得（日:0 月:1 火:2 水:3 木:4 金:5 土:6）これは日付が変わっていくに連れて、曜日を変える必要があるからループ内に入れないといけない。
        $week_050353 = date('w',strtotime('2023'.$month_050353.$day_050353));
        //土日をスキップ（日付だけ進める）かつ月末だった場合、月も進める
        if (($week_050353 ==0) or ($week_050353 ==6)) {
            
            if (((($month_050353 == 1) or ($month_050353 == 3) or ($month_050353 == 4) or ($month_050353 == 5) or ($month_050353 == 7) or ($month_050353 == 8) or ($month_050353 == 10) or ($month_050353 == 12)) and ($day_050353 == 31)) or (($month_050353 == 2) and ($day_050353 ==28)) or ((($month_050353 == 6) or ($month_050353 == 9) or ($month_050353 == 11)) and ($day_050353 ==30))) {
                $month_050353++;
                //1日に戻す
                $day_050353 = 1;
                continue;
            }
            $day_050353++;
            continue;
        }
        
        //2,6,9,11月の31日をスキップ（月を進めて、日付は1に戻す）(正常)
        if (((($month_050353 == 2) and ($day_050353 ==29)) or (($month_050353 == 2) and ($day_050353 ==30)) or (($month_050353 == 2) and ($day_050353 ==31))) or (($month_050353 == 6) and ($day_050353 ==31)) or (($month_050353 == 9) and ($day_050353 ==31)) or (($month_050353 == 11) and ($day_050353 ==31))) {
            $day_050353 == 1;
            $month_050353++;
            continue;
        }
        
        echo '<br>';
        echo  '2023年'.$month_050353.'月'.$day_050353.'日 '.$day_of_the_weeks_050353[$week_050353].'曜日';
        //日付を進める (ただし、月末の場合は月を進めて、日付は1に戻してスキップする。)。（正常）
        if (((($month_050353 == 1) or ($month_050353 == 3) or ($month_050353 == 4) or ($month_050353 == 5) or ($month_050353 == 7) or ($month_050353 == 8) or ($month_050353 == 10) or ($month_050353 == 12)) and ($day_050353 == 31)) or (($month_050353 == 2) and ($day_050353 ==28)) or ((($month_050353 == 6) or ($month_050353 == 9) or ($month_050353 == 11)) and ($day_050353 ==30))) {
            $month_050353++;
            //1日に戻す
            $day_050353 = 1;
            continue;
        }
        $day_050353++;
        
    }//スキップしたらここに飛んでくる。
}



?>