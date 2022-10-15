<?php 
echo "I am a PHP page running on Docker stack";
// phpinfo();
echo "<br>";
$redis = new Redis();
var_dump($redis);
echo "<br>";

$servername = "mysql";
$username = "php";
$password = "php";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
//
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "SQL connected successfully! <br>";
echo "Server Info: ". mysqli_get_server_info($conn);
?>


<?php include ('header.php'); ?>
<?php include ('body.php'); ?>
<?php include ('footer.php'); ?> 