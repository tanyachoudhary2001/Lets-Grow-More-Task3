<?php

    include 'addconnection.php';

    $id = $_GET['id'];

    $deletequery = "delete from class7 where id='$id'";

    $query = mysqli_query($con,$deletequery);

    header("Location:a2class7.php?message='Deleted Successfully!'");
?>