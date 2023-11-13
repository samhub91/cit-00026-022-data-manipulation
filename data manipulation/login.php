<?php
session_start();
include "dbconncect.php";
$uname = $_REQUEST['uname'];
$pwd = $_REQUEST['pwd'];
if(empty($uname)){
    header("Location:index.php?error = User Name is required");
    exit();
}
else if(empty($pwd)){
    header("Location:index.php?error = Fill in your passowrd.");
    exit();
}
$sql = "insert into users values('$uname','$pwd')";
if($conn -> query($sql) === true){
    echo"new records inserted";
}else {
    echo "Error";
}
$conn->close();
?>