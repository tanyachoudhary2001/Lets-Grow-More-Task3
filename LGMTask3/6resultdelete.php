<?php

    include 'addconnection.php';

    $id = $_GET['id'];

    $deletequery = "delete from class6results where id='$id'";

    $query = mysqli_query($con,$deletequery);

    header("Location:a4class6results.php?message='Deleted Successfully!'");
    
?>