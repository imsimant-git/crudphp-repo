<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
</head>
<body>
    <h1>list of student<h1>
       <a href="insert.php"> <button>add</button></a><br><br>
<table border="1">
<tr>
    <th>rollno</th>
     <th>name</th>
     <th>address</th >
     <th>course</th>
     <th>action</th>
</tr>
<?php

include 'connection.php';
$query="SELECT * FROM student";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
    $rollno=$row['rollno'];
    $name=$row['name'];
    $address=$row['address'];
    $course=$row['course'];


   echo" <tr>
    <td>".$rollno."</td>
     <td>".$name."</td>
     <td>".$address."</td >
     <td>".$course."</td>
     <td>
        <a href='update.php? rn=$rollno'><button>update</button></a>
       <a href='delete.php? rn=$rollno'> <button>delete</button></a>
        </td>
</tr";

}

?>>
</table>


</body>
</html>