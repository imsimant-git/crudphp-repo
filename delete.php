<?php
include'connection.php';
$query="DELETE FROM student WHERE rollno='$_GET[rn]'";
$result=mysqli_query($con,$query);
if($result){
    header('location:display.php');
}
else{
    die(mysqli_erro($result));
}
?>