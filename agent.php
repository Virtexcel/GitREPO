<?php
echo '<!doctype html>';
echo '<html lang="ja">';

echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>医叡 顧客管理</title>';

echo '<link rel="stylesheet" href="style.css">';
echo '<h1><img src="iei.png" width="50" text="医叡ロゴ"></h1>';

echo '</head>';
echo '<body>';

echo '<div>';
echo '<table border="2" >';
echo '<tr bgcolor="#c0ffc0">';
echo '<td align="center" ><a href="./index.php" class="btn3">戻る</a></td>';
echo '</tr></table>';
echo '</div></br>';











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


// Close the connection
$conn->close();

echo '</td>';
echo '</tr>';
echo '</table>';
echo '<div>';
echo '    <footer>';
$timestamp = time() ;
echo date( "Y/m/d H:i" , $timestamp ) . "  Powered by VIRTEXCEL";
echo '    </footer>';
echo '</div>';
echo '</body>';
echo '</html>';














?>
