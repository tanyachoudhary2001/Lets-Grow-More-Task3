<?php

    include 'addconnection.php';

    $id = $_GET['id'];

    $deletequery = "delete from class9results where id='$id'";

    $query = mysqli_query($con,$deletequery);

    header("Location:a4class8results.php?message='Deleted Successfully!'");
?>