<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<form action="" method="POST">
        <h1>edit student</h1>
         <?php
         include'connection.php';
         $rollno=$_GET['rn'];
         $query="SELECT * FROM student WHERE rollno=$rollno";
         $result=mysqli_query($con,$query);
          $row=mysqli_fetch_assoc($result);

        ?>
    <table>
        <tr>
            <td>Rollno</td>
            <td><input type="text" name="rollno"  value="<?php echo $row['rollno'];?>" required></td>
        </tr><br>
        
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value="<?php echo $row['name'];?>" required></td>
        </tr><br>
        
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $row['address'];?>" required></td>
        </tr><br>
        
        <tr>
            <td>course</td>
            <td><input type="text" name="course" value="<?php echo $row['course'];?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="update" name="submit"></td>
</tr>
    </table>
<?php
if(isset($_POST['submit'])){
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $course=$_POST['course'];

$query="UPDATE student SET name='$name', address='$address', course='$course' WHERE rollno=$rollno";
$result=mysqli_query($con,$query);
if($result){
    header('location:display.php');
}
else{
    die(mysqli_erro($result));
}
}
?>
    

</form>
    
</body>
</html>
</body>
</html>