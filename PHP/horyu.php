<?php
/*演習 05-03-5 2 1年分*/
//1月から
$month_050352 = 1;
//１日から
$day_050352 = 1;
//曜日の集合　（1月1日の曜日から始まるように集合の順番を合わせた（木:0 金:1 土:2 日:3 月:4 火:5 水:6）に番号を合わせた。）
$day_of_the_weeks = ['日','月','火','水','木','金','土'];
// とりま各月31日分表示するようにループさせて、月末になったら、月を進めて、1日に戻して、曜日を進める
while ($month_050352 <=12){
    while ($day_050352 <= 31){

        // 日付の曜日の番号の取得（日:0 月:1 火:2 水:3 木:4 金:5 土:6）これは日付が変わっていくに連れて、曜日を変える必要があるからループ内に入れないといけない。
        $week_050352 = date('w',strtotime('2023'.$month_050352.$day_050352));
        //土日をスキップ（日付だけ進める）かつ月末だった場合、月も進める
        if (($week_050352 ==0) or ($week_050352 ==6)) {
            
            if (((($month_050352 == 1) or ($month_050352 == 3) or ($month_050352 == 4) or ($month_050352 == 5) or ($month_050352 == 7) or ($month_050352 == 8) or ($month_050352 == 10) or ($month_050352 == 12)) and ($day_050352 == 31)) or (($month_050352 == 2) and ($day_050352 ==28)) or ((($month_050352 == 6) or ($month_050352 == 9) or ($month_050352 == 11)) and ($day_050352 ==30))) {
                $month_050352++;
                //1日に戻す
                $day_050352 = 1;
                continue;
            }
            $day_050352++;
            continue;
        }
        
        //2,6,9,11月の31日をスキップ（月を進めて、日付は1に戻す）
        if (((($month_050352 == 2) and ($day_050352 ==29)) or (($month_050352 == 2) and ($day_050352 ==30)) or (($month_050352 == 2) and ($day_050352 ==31))) or (($month_050352 == 6) and ($day_050352 ==31)) or (($month_050352 == 9) and ($day_050352 ==31)) or (($month_050352 == 11) and ($day_050352 ==31))) {
            $day_050352 == 1;
            $month_050352++;
            continue;
        }
        
        echo '<br>';
        echo  '2023年'.$month_050352.'月'.$day_050352.'日 '.$day_of_the_weeks[$week_050352].'曜日';
        //日付を進める (ただし、月末の場合は月を進めて、日付は1に戻してスキップする。)。
        if (((($month_050352 == 1) or ($month_050352 == 3) or ($month_050352 == 4) or ($month_050352 == 5) or ($month_050352 == 7) or ($month_050352 == 8) or ($month_050352 == 10) or ($month_050352 == 12)) and ($day_050352 == 31)) or (($month_050352 == 2) and ($day_050352 ==28)) or ((($month_050352 == 6) or ($month_050352 == 9) or ($month_050352 == 11)) and ($day_050352 ==30))) {
            $month_050352++;
            //1日に戻す
            $day_050352 = 1;
            continue;
        }
        $day_050352++;
        
    }//スキップしたらここに飛んでくる。
}


/*演習 05-03-5 2 ヒントに基づいた方法*/
<?php
// 日付（1日始まり）
$day = 1;
// 日付の曜日番号（日:0 月:1 火:2 水:3 木:4 金:5 土:6）
$day_week = date("w", strtotime(date("Ym01")));
 
// 表示数カウンタ
$count = 1;
 
// 10回表示するようにループ
while ($count <= 10) {
// 曜日番号が最大値を超えていたら0に戻す
if ($day_week > 6) {
$day_week = 0;
}
 
// ヒント：曜日番号が土曜または日曜のとき（土:6 日:0）
if (○○○ || ×××) {
// ヒント：日付進める
△△△
// ヒント：日付の曜日番号進める
□□□
// 表示していないので、表示数カウンタを進めずに残りの処理をスキップ
continue;
}
 
// 日付表示
echo $day . "日";
 
// 曜日表示
// ヒント：switch文で曜日番号に対応した曜日を出力する
switch (▼▼▼) {
//日曜のとき
case 0:
echo "日曜日<br>";
break;
//ヒント：月曜のときから土曜のときまで
case 1:
◎◎◎
break;
case 2:
▽▽▽
break;
case 3:
◇◇◇
break;
case 4:
●●●
break;
case 5:
▲▲▲
break;
case 6:
■■■
break;
}
 
// 日付の曜日番号進める
□□□
// 日付進める
△△△
// 表示数カウンタ進める
$count ++;
}
?>
