<?php include 'db.php';

$query = "SELECT * FROM `tacoorder`";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}
?>

<?php
if (isset($_POST['submit'])) {
  $name= $_POST["name"]; 
  $meat= $_POST["meat"]; 
  $cheese= $_POST["cheese"]; 
  $spicy= $_POST["spicy"]; 
  $id = $_POST['id'];

  //Delete the records in db
  $query = "DELETE FROM `tacoorder` ";
  $query .= "WHERE id = $id";
  //OR
  // $query = "DELETE FROM Users WHERE id = $id";

  $result = mysqli_query($conn, $query);
  if (!$result) {
    die("Delete query failed" . mysqli_error($conn));
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP CRUD App</title>
</head>

<body>
  <form action="delete.php" method="POST">
  <label for="name"> Name </label>
  <input type="text" Name="name" >
  <label for="meat"> Meat </label>
  <input type="text" Name="meat" >
  <label for="cheese"> Cheese </label>
  <input type="text" Name="cheese" >
  <label for="spicy"> spicy </label>
  <input type="text" Name="spicy" >

    <select name="id" id="">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>

    <input type="submit" name="submit" value="DELETE">

  </form>

</body>

</html>