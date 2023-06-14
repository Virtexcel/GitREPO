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

/*
<select name="dropdown">
    <option value="">Select an option</option>
    <?php
    // Array of options
    $options = ['Option 1', 'Option 2', 'Option 3', 'Option 4'];

    // Generate options dynamically
    foreach ($options as $option) {
        echo "<option value=\"$option\">$option</option>";
    }
    ?>
</select>
*/

<select name="month">
<option value="jan">1月</option>
<option value="feb">2月</option>
<option value="mar">3月</option>
<option value="apr">4月</option>
<option value="may">5月</option>
<option value="jun">6月</option>
<option value="jul">7月</option>
<option value="aug">8月</option>
<option value="sep">9月</option>
<option value="oct">10月</option>
<option value="nov">11月</option>
<option value="dec">12月</option>
</select>













$servername = "mysql710.db.sakura.ne.jp";
$username = "virtexcel";
$password = "kota0620";
$dbname = "virtexcel_1";
// Create a connection to MySQL
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



echo '<table border="1" >';
echo '<tr bgcolor="#c0ffc0">';

$sql = "SELECT P_ID,P_NAME,CNAME,BIRTHD,COMM FROM P_T,G_M WHERE P_T.NATIONARITY = G_M.MKEY";// where A_ID=10001002";
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
        echo $row["P_NAME"];
        echo '</td>';   
        echo '<td>';
        echo $row["CNAME"];
        echo '</td>'; 
        echo '<td>';
        echo $row["BIRTHD"];
        echo '</td>';   
        echo '<td>';
        echo $row["COMM"];
        echo '</td>';
        // Process the data as needed
        echo '</tr>';
    }
    
    // Free up the result set
    $result->free();
} else {
    echo "Error executing the query: " . $conn->error;
}



echo '</tr>';
echo '</table>';
/*
$sql = "SELECT * FROM G_M where KEY1=10000001 AND KEY2=" . $PARAM1;
$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Fetch the rows from the result set
        
    while ($row = $result->fetch_assoc()) {
        // Access the data from each row
        echo '<tr>';    
        echo '<td>'; 
        echo $row["KEY1"];
        echo '</td>';   
        echo '<td>'; 
        echo $row["KEY2"];
        echo '</td>';   
        echo '<td>';
        echo $row["DDATA"];
        echo '</td>';   
        echo '<td>';        
        echo $row["COMM"];
        echo '</td>';     
        // Process the data as needed
        echo '</tr>';
    }
    
    // Free up the result set
    $result->free();
} else {
    echo "Error executing the query: " . $conn->error;
}
*/

// Close the connection
$conn->close();

echo '</td>';
echo '</tr>';
echo '</table>';

echo '</body>';
echo '</html>';














?>
