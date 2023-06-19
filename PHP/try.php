<?php
$name = "松本、";

define('GREETING',"おはようございます。");

echo $name.GREETING;
echo '<br>';

if (($month = 1)&&($day = 30)) {
    echo '<br>';
    echo '松本、今日は'.$month.'月'.$day++.'日です。';
    echo '<br>';
    echo 'おはようございます。';
    for ($month = 1; $month <= 12; $month++) {
        for ($day = 1; $day <= 30; $day++) {
            echo '<br>';
            echo '松本、今日は'.$month.'月'.$day.'日です。';
            echo '<br>';
            echo 'おはようございます。';
        }
    }
}
$A = 10;
$B = 4;
echo $A-$B;

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

$A = ['円盤５','円盤4','円盤.3','円盤.2','円盤.1'];
$B = [];
$c = []; 

hanoi (2,$A,$B,$C); //配列＄A[2]以降の全ての要素を再帰処理のあるアルゴリズムを持った関数を用いてそのままの順番で配列$Bに移動させる

//再帰処理のメリットはアルゴリズムが書きやすくなること
function hanoi ($n,$a,$b,$c){
    hanoi ($n+1,$a,$c,$b);//$A = ['円盤５(0)','円盤4(1)','円盤.3(2)'];$B = [];$c = ['円盤.2(0)','円盤.1(1)']; 
    $b = $a[$n];
    $a[$n] = ;//$a[$n]を消す
    $i = count($c);
    hanoi ($i-1,$c,$b,$a)
}
m-1
