<?php
echo '<!doctype html>';
echo '<html lang="ja">';

echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>医叡 幹細胞プロジェクト 初期画面</title>';
echo '<link rel="stylesheet" href="style.css">';
echo '<h1><img src="iei.png" width="50" text="医叡ロゴ"></h1>';

echo '</head>';
echo '<body>';

echo '<div>';
echo '<table border="2" >';
echo '<tr bgcolor="#c0ffc0">';
echo '<td align="center" ><a href="./agent.php" class="btn3">AGENT登録</a></td>';
echo '</tr></table>';
echo '</div></br>';

echo '<div>';

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

echo '<table border="2" >';
echo '<tr bgcolor="#c0ffc0">';

echo '<td align="center">ID</td>';
echo '<td align="left">エージェント名</td>';
echo '<td align="center">国籍</td>';
echo '</tr>';

$sql = "SELECT A_ID,A_NAME,CNAME FROM A_T,G_M WHERE NATIONALITY = MKEY ORDER BY A_ID";
$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Fetch the rows from the result set    
    while ($row = $result->fetch_assoc()) {
        // Access the data from each row
        echo '<td align="left" ><a href="./menu.php?a=' . $row["A_ID"] . '" class="btn">' . $row["A_ID"] . '</a></td>';
        echo '<td align="left" class="btn2">' . $row["A_NAME"] . '</td>';
        echo '<td align="left" class="btn2">' . $row["CNAME"] . '</td>';
        echo '<tr>';
/*
echo '<td align="left" ><a href="./menu.php?a=10001000" class="btn">10001000</a></td>';
echo '<td align="left" class="btn2">KOICHI TAKAHASHI</td>';
echo '<td align="left" class="btn2">JAPAN</td>';
echo '</tr>';

echo '<tr>';
echo '<td align="left" ><a href="menu.php?a=10001001" class="btn">10001001</a></td>';
echo '<td align="left"  class="btn2">KERRY FINDERMACH Jr.</td>';
echo '<td align="left"  class="btn2">USA</td>';
echo '</tr>';

echo '<tr>';
echo '<td align="left" ><a href="./menu.php?a=10001002" class="btn">10001002</a></td>';
echo '<td align="left"  class="btn2">MICHAEL MAYBACH</td>';
echo '<td align="left"  class="btn2">UAE</td>';
*/
}
    
// Free up the result set
$result->free();
} else {
echo "Error executing the query: " . $conn->error;
}
echo '</tr>';
echo '</div>';

echo '<div>';
echo '    <footer>';
$timestamp = time() ;
echo date( "Y/m/d H:i" , $timestamp ) . "  Powered by VIRTEXCEL";
echo '    </footer>';
echo '</div>';

echo '</body>';
echo '</html>';












?>
