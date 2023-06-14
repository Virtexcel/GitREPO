
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>医叡 顧客管理</title>

<link rel="stylesheet" href="style.css">
<h1><img src="iei.png" width="50" text="医叡ロゴ"></h1>

</head>
<body>



<?php
if(isset($_POST["nation"])) {
  // セレクトボックスで選択された値を受け取る
  $fruit = $_POST["nation"];

  // 受け取った値を画面に出力
  echo $fruit;
}
?>

</body>
</html>














?>
