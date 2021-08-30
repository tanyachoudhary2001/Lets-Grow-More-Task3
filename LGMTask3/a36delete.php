<?php

    include 'addconnection.php';

    $id = $_GET['id'];

    $deletequery = "delete from class6 where id='$id'";

    $query = mysqli_query($con,$deletequery);

    header("Location:a2class6.php?message='Deleted Successfully!'");
  
?>