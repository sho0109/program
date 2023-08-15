<?php
setcookie('hello', 'world');
echo "setcookie expire set";

echo "<br>\n";
echo "<br>\n";

if( !isset($_COOKIE['times']) ) {
    //初回訪問
    echo "初めてのご訪問ありがとうございます！！";
    setcookie( 'times', 1, time() + 24 * 3600 );
    exit;
}
$times = $_COOKIE['times'] + 1;
switch( $times ) {
    default :
        //下記のケース以外はこのメッセージが表示される
        echo "{$times}回目のご訪問ありがとうございます。";
        break;

    case 3:
        echo "またのご利用ありがとうございます";
        break;
    //10回目、20回目などメッセージを変更したい回数のcaseを追加し、
    //              echoで表示したいメッセージを追加してみましょう！
}

//訪問回数の更新
setcookie('times', $times, time() + 24 * 3600 );
