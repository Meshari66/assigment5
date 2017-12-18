<?php



$servername = "localhost";
$username = "meshari66";
$password = "";
$db='c9';
// Create connection
$conn =mysqli_connect($servername, $username, $password,$db);
$query = "SELECT * FROM `Meshari`";
$result = mysqli_query($conn,$query);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully ";

form();
$title;
$url;
$date;
$comment;
function form(){
     global $conn;
    
if(!empty($_POST)){
global $title,$url,$date,$comment;
$title=$_POST['title'];
$url=$_POST['url'];
$date=$_POST['date'];
$comment=$_POST['comment'];
$sql = "insert into Meshari (title,url,date,comment) 
values ('$title','$url', '$date', '$comment')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute";
}

// $_POST is array of all fields sent using get method.
}
else{
    
    echo 'form is empty';
}
}
?>