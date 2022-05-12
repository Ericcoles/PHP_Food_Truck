<?php
include_once './db.php';

if(isset($_POST["submit"])){
  $name= $_POST["name"]; 
  $meat= $_POST["meat"]; 
  $cheese= $_POST["cheese"]; 
  $spicy= $_POST["spicy"]; 
  $query= "INSERT INTO `tacoorder` (`name`,`meat`,`cheese`,`spicy`) VALUES ('$name','$meat','$cheese','$spicy');";
  $result = mysqli_query($conn, $query); 

  if (!$result) {
    die("Connection failed: " . mysqli_error($conn));
  }
};

// if(isset($_POST["submit"])){
//   $meat= $_POST["meat"]; 
//   $query= "INSERT INTO `tacoorder` (`meat`) VALUES ('$meat');";
//   $result = mysqli_query($conn, $query); 

//   if (!$result) {
//     die("Connection failed: " . mysqli_error($conn));
//   }
// };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./icon.svg" type="image/x-icon"/>
    <title>Taco</title>
</head>
<body>
    <header>
    <h1>Oscar and Eric's Taco Truck</h1>
    <img src ="./taco.gif" alt="running taco"/>
    </header>

<form action="index.php" method="POST">
  <label for="name"> Name </label>
  <input type="text" Name="name" >
  <label for="meat"> Meat </label>
  <input type="text" Name="meat" >
  <label for="cheese"> Cheese </label>
  <input type="text" Name="cheese" >
  <label for="spicy"> spicy </label>
  <input type="text" Name="spicy" >
<button name="submit">Place Order</button>
</form>

