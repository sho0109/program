<?php
//cookie情報の読み出し
var_dump($_COOKIE);//この時点では上書きされていないから前あのページのクッキーが表示される
echo "<br>\n";
echo "<br>\n";
$_COOKIE['hello'] = 'ワールド';//ブラウザ上のクッキーは変更されない
setcookie('hello', 'world_world');//ここで上書きされる（setcookie関数はブラウザ上のクッキーを変更するための関数）
var_dump($_COOKIE);
echo "<br>\n";
echo "<br>\n";
//ここでページを更新させると更新後のページにとっての前のページがこのページになるからどちらの$_COOKIEもsetcookie('hello', 'world_woeld');この配列が読み込まれる
setcookie('hello', 'world_world',time()-10);//クッキーの削除(ブラウザ上に反映されるクッキーはphp実行後の最終的なクッキーになる→$_COOKIEによる読み込みはsetcookieよりもワンアクション遅れることになる)
var_dump($_COOKIE);