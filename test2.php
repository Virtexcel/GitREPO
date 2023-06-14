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
$servername = "mysql710.db.sakura.ne.jp";
$username = "virtexcel";
$password = "kota0620";
$dbname = "virtexcel_1";
// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT A_ID FROM A_T ORDER BY A_ID DESC";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$DDATA = $row["A_ID"];
$DDATA = $DDATA + 1;
echo $DDATA;


echo '<form action="test3.php" method = "POST">';
echo '    <select name= "nation">';
echo '      <option value = "81">日本</option>';
echo '      <option value = "1">アメリカ</option>';
echo '      <option value = "82">韓国</option>';
echo '    </select>';







echo '    <input type="submit"name="submit"value="送信"/>';
echo '</form>';


// Close the connection
$conn->close();
?>

</body>
</html>














?>
