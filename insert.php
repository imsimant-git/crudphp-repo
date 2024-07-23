<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
    
    <form action="" method="POST">
        <h1>new student</h1>
    <table>
        <tr>
            <td>Rollno</td>
            <td><input type="text" name="rollno" required></td>
        </tr><br>
        
        <tr>
            <td>name</td>
            <td><input type="text" name="name" required></td>
        </tr><br>
        
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" required></td>
        </tr><br>
        
        <tr>
            <td>course</td>
            <td><input type="text" name="course" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit"></td>
</tr>
    </table>
    <?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $rollno=$_POST['rollno'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $course=$_POST['course'];
        
        $query="insert into student value($rollno,'$name','$address','course')";
        $result=mysqli_query($con,$query);
        if($result){
            header('location:display.php');

            
        }
        else{
            die(mysqli_error($result));
        }
        }
        
           



    ?>

</form>
    
</body>
</html>