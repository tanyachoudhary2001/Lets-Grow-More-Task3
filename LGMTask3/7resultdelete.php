<?php

    include 'addconnection.php';

    $id = $_GET['id'];

    $deletequery = "delete from class7results where id='$id'";

    $query = mysqli_query($con,$deletequery);

    header("Location:a4class7results.php?message='Deleted Successfully!'");
?>