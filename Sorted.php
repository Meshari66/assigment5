<!DOCTYPE html>
<html>
  <head>

<link href="css.css" rel="stylesheet">


  </head>
  
  <body>
      <?php
$servername = "localhost";
$username = "meshari66";
$password = "";
$result=null;



// Create connection
$conn = new mysqli($servername, $username, $password,"c9");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$conn;


$sql = "select * from Meshari order by comment;";
if($result=mysqli_query($conn, $sql)){
    
    echo "<table id='d' width='600' border='1' cellpadding='1' cellspacing='1'>
   
    <tr>
    <th>Title</th>
    <th>URL</th>
    <th>Date</th>
    <th>Comments</th>";
    while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['url']."</td>";
    echo "<td>".$row['date']."</td>";
    echo "<td>".$row['comment']."</td>";
}
    echo "</table>";
    
    
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
  </body>
</html>



