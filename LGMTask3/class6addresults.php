<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Results Of Class 6</title>
  <?php include 'links.php'?>
</head>
<style>
    form {
      padding:40px;
      background-color: white;
      margin: auto;
      margin-top: 30px;
      width: 600px;
      font-size: 18px;
      border-radius: 10px;
      box-shadow: 0px 0px 8px 5px rgba(0, 0, 0, .4);
      min-height: 100px;
      height:830px;
    }
    
</style>
<body>

<form autocomplete="off" action="#" method="POST">
        <div class="login-box" style="margin-left:-120px;">
            <h1 style="margin-bottom:10px;margin-left:100px;width:500px;">Enter Marks</h1>

            <div class="form-group">
                <label for="exampleInputEmail1" >Name</label>
                <input type="text" class="form-control" style="width:500px;" name="Name"  value="">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">FatherName</label>
                <input type="text" class="form-control" style="width:500px;"  name="FatherName"  value="">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">English Marks</label>
                <input type="text" class="form-control"  style="width:500px;" name="English" value="">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Hindi Marks</label>
                <input type="text" class="form-control" style="width:500px;" name="Hindi"  value="">
               
            </div>
  
            <div class="form-group">
                <label for="exampleInputEmail1">Mathematics Marks</label>
                <input type="text" class="form-control" style="width:500px;" name="Mathematics"  value="">
               
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Science Marks</label>
                <input type="text" class="form-control" style="width:500px;" name="Science" value="">
               
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Social Studies Marks</label>
                <input type="text" class="form-control" style="width:500px;" name="SocialStudies"  value="">
               
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
        // $Total = $_POST['Total'];
        // $Status = $_POST['Status'];

        $insertquery = "insert into class6results(Name,FatherName,English,Hindi,Mathematics,Science,SocialStudies,Total,Status) 
        values('$Name','$FatherName','$English','$Hindi','$Mathematics','$Science','$SocialStudies','$Total','$Status')";

       $res= mysqli_query($con,$insertquery);

       if($res){
            echo "<script language='javascript'>";
            echo "alert('Inserted Successfully')";
            echo "</script>";
            header("Location:a4class6results.php");
       }
       else{
        echo "<script language='javascript'>";
        echo "alert('Not interested')";
        echo "</script>";
       }
    }
?>