<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>SELECT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table
{
width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "details");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
 // Attempt insert query execution
$sql = "select * from details";
$result = $link->query($sql);
if (  mysqli_num_rows($result) > 0){
echo "<h1>DETAILS IN DATABASE</h2>";
echo "<table>";
echo "<tr>";
echo"<th>NAME</th>";
echo "<th>PHONE NO</th>";
echo "<th>EMAIL</th>";
echo "</tr>";
        while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>";
echo $row["name"];
echo "</td>";
echo "<td>";
echo $row["phone"];
echo "</td>";
echo "<td>";
echo $row["email"];
echo "</td>";
echo "</tr>";
}
echo "</table>";
}
 else{
   echo "<h2>NO RECORDS FOUND</h2>";
} 
// Close connection
mysqli_close($link);
?>
<div class="container">
  <h2 style="color:#734d26;text-align:center;"><b>ENTER DATA</b></h2>
  <form action="select1.php" method="POST">
<div class="form-group">
<div class="form-group">
  <label for="usr"> Name:</label>
  <input type="text" name="name"class="form-control"placeholder="Enter your  name" id="usr">
</div>
<button type="submit" class="btn btn-success">Submit</button>
</html>
