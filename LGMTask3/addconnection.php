<?php

    $username="root";
    $password="";
    $server="localhost";
    $db="lgmtask3";

    $con = mysqli_connect($server,$username,$password,$db);


    if($con){
        
        echo "<script language='javascript'>";
            
        echo "</script>";

    }
    else{
        echo "Not connected";
        die("no connection".mysqli_connect_error());
    }
?>