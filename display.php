<!DOCTYPE html>
<html>
  <head>
     <style type="text/css">
         
     
      @import "https://fonts.googleapis.com/css?family=Montserrat:300,400,700";
.rwd-table {
  margin: 1em 0;
  min-width: 300px;
}
.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.rwd-table th {
  display: none;
}
.rwd-table td {
  display: block;
}
.rwd-table td:first-child {
  padding-top: .5em;
}
.rwd-table td:last-child {
  padding-bottom: .5em;
}
.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 6.5em;
  display: inline-block;
}
@media (min-width: 480px) {
  .rwd-table td:before {
    display: none;
  }
}
.rwd-table th, .rwd-table td {
  text-align: left;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child, .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child, .rwd-table td:last-child {
    padding-right: 0;
  }
}

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
  background: #eee;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #34495E;
}

.rwd-table {
  background: #34495E;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
}
.rwd-table tr {
  border-color: #46637f;
}
.rwd-table th, .rwd-table td {
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    padding: 1em !important;
  }
}
.rwd-table th, .rwd-table td:before {
  color: #dd5;
}
</style>

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

$sql = "select * from Meshari;";
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
    
    echo "<input type=button value='sory by comments' id='sort'></input";
 
    
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
  </body>
</html>



