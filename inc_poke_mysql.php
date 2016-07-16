 <?php
//$servername = 'localhost';
//$username   = 'gotgDB';
//$password   = 'fuckinbullshit';
//$dbname     = 'portalsSlim';
$servername = 'pogo.rocks';
$username   = 'root';
$password   = 'fuckazure';
$dbname     = 'portalsSlim';
// Create connection
$conn       = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "bad connection";
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, 'utf8');

date_default_timezone_set('America/Chicago');