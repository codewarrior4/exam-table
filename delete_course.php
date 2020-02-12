<?php

 $id=$_GET['id'];

include 'connect.php';

$query=mysqli_query($mycon,"DELETE FROM ttable where id ='$id' ");

echo '<script>window.location="home.php";</script>';

?>