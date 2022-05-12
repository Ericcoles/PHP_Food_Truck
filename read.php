<?php

if(isset($_POST["submit"])){
  $name= $_POST["name"]; 
  $meat= $_POST["meat"]; 
  $cheese= $_POST["cheese"]; 
  $spicy= $_POST["spicy"]; 
  $query= "INSERT INTO `tacoorder` (`name`,`meat`,`cheese`,`spicy`) VALUES ('$name','$meat','$cheese','$spicy');";
  $result = mysqli_query($conn, $query); }

  $dbServername = "db";
  $dbUsername = "root";
  $dbPassword = "lionPass";
  $dbName = "taco";

// check the MySQL connection status
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die ("DB not connected");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// else {
//   echo "Connected to MySQL server successfully!";
// }

//Read the records from db
$query = "SELECT * FROM `tacoorder`";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Reading db records failed');
}
?>
<?php

while ($row = mysqli_fetch_assoc($result)) {
?>
<pre>
    <?php
    print_r($row);
    ?>
    </pre>
<?php
}
?>