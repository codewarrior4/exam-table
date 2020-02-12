<?php

 echo $id=$_GET['id'];
 echo $title=$_GET['title'];
include 'connect.php';

$query=mysqli_query($mycon,"DELETE FROM exam_table where id ='$id' ");
$query_delete=mysqli_query($mycon,"DELETE FROM ttable where titleid='$id' and title = '$title' ");
echo '<script>window.location="home.php";</script>';

?>