<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "utf-8">
<title>JavaScriptの練習</title>
</head>
<body>
<input type="button" id="myfunc" value="押してください">

<script>
'use strict';
const myfunc = document.getElementById("myfunc");
myfunc.addEventListener("click", function() {
alert('JavaScriptのアラート');
});
</script>
</body>
</html>