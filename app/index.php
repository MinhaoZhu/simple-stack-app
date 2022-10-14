<?php 
echo "I am a PHP page running on Docker stack";
// phpinfo();
echo "<br>";
$redis = new Redis();
var_dump($redis);
echo "<br>";
// $redis->connect('myredis', 6379);
// echo "Connection to Redis server sucessfully!"; 
// echo "<br>";
// echo "Server is running: " . $redis->ping();
// echo "<br>";
// $redis->set("Cloud Computing", "INFS3208/7208"); 
// echo "Course code of Cloud Computing is: " .$redis->get("Cloud Computing"); 

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
