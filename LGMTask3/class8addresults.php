<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Results Of Class 8</title>
  <?php include 'links.php'?>
</head>
<body>

<form autocomplete="off" action="#" method="POST">
        <div class="login-box" style="margin-left:-60px;">
            <h1>Enter Details</h1>

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" style="width:500px;" name="Name" placeholder="Enter name" value="">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">FatherName</label>
                <input type="text" class="form-control" style="width:500px;"  name="FatherName" placeholder="Enter Father Name" value="">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">English Marks</label>
                <input type="text" class="form-control"  style="width:500px;" name="English" placeholder="English Marks" value="">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Hindi Marks</label>
                <input type="text" class="form-control" style="width:500px;" name="Hindi" placeholder="Hindi Marks" value="">
               
            </div>
  
            <div class="form-group">
                <label for="exampleInputEmail1">Mathematics Marks</label>
                <input type="text" class="form-control" style="width:500px;" name="Mathematics" placeholder="Mathematics Marks" value="">
               
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Science Marks</label>
                <input type="text" class="form-control" style="width:500px;" name="Science" placeholder="Science Marks" value="">
               
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Social Studies Marks</label>
                <input type="text" class="form-control" style="width:500px;" name="SocialStudies" placeholder="Social Studies Marks" value="">
               
            </div>
            
  
            <input class="button" type="submit" style="width:500px;"
                     name="add" value="Add">
        </div>
    </form>

</body>
</html>

<?php

    include 'addconnection.php';

    if(isset($_POST['add'])){
       
        $Name = $_POST['Name'];
        $FatherName = $_POST['FatherName'];
        $English = $_POST['English'];
        $Hindi = $_POST['Hindi'];
        $Mathematics = $_POST['Mathematics'];
        $Science = $_POST['Science'];
        $SocialStudies = $_POST['SocialStudies'];
        $Total = $_POST['Total'];
        $Status = $_POST['Status'];

        $insertquery = "insert into class9results(Name,FatherName,English,Hindi,Mathematics,Science,SocialStudies,Total,Status) 
        values('$Name','$FatherName','$English','$Hindi','$Mathematics','$Science','$SocialStudies','$Total','$Status')";

       $res= mysqli_query($con,$insertquery);

       if($res){
            echo "<script language='javascript'>";
            echo "alert('Inserted Successfully')";
            echo "</script>";
            header("Location:a4class8results.php");
       }
       else{
        echo "<script language='javascript'>";
        echo "alert('Not interested')";
        echo "</script>";
       }
    }
?>