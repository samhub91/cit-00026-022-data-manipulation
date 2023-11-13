<?
$servername = "localhost";
$user = "root";
$password = "";
$DATABASE_NAME = "user";
$conn = new mysqli($servername,$user,$password,$DATABASE_NAME);
if($conn-> connect_error){
    die("connection failed:".$conn->connect_error);
}
else{
    echo"connection successful";
}
?>