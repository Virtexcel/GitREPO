<?php
echo '<!doctype html>';
echo '<html lang="ja">';

echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>医叡 顧客管理</title>';

echo '<link rel="stylesheet" href="style.css">';
//echo $_GET['a'];
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

echo '<table border="1" >';
echo '<tr bgcolor="#c0ffc0">';
echo '<td align="center" >ID</td>';
echo '<td align="center" >エージェント</td>';
echo '<td align="center" >患者名</td>';
echo '<td align="center" >国籍</td>';
echo '<td align="center" >生年月日</td>';
echo '</tr>';
echo '<tr>';

// Perform a query




$sql = "SELECT * FROM P_T where A_ID=" . $_GET['a'];
$result = $conn->query($sql);
//$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Fetch the rows from the result set
        
    while ($row = $result->fetch_assoc()) {
        // Access the data from each row
        echo '<tr>';    
        echo '<td>'; 
        echo $row["P_ID"];
        echo '</td>';   
        echo '<td>'; 
        echo $row["A_ID"];
        echo '</td>';   
        echo '<td>';
        echo $row["P_NAME"];
        echo '</td>';   
        echo '<td>';

        //$sql = "SELECT * FROM G_M where KEY1=10000001 and KEY2=" . $row["NATIONARITY"];
        //$result2 = $conn2->query($sql);
        //$row2 = $result2->fetch_assoc()
        //echo $row2["DDATA"];
        //$conn2->close()
        
        echo $row["NATIONARITY"];
        echo '</td>';   
        echo '<td>';
        echo $row["BIRTHD"];
        echo '</td>';   
        // Process the data as needed
        echo '</tr>';
    }
    
    // Free up the result set
    $result->free();
} else {
    echo "Error executing the query: " . $conn->error;
}

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
