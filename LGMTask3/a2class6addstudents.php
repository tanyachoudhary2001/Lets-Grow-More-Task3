<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Students of Class 6</title>
  <?php include 'links.php'?>
</head>
<style>
    form {
      padding:40px;
      background-color: white;
      margin: auto;
      margin-top: 90px;
      width: 600px;
      font-size: 18px;
      border-radius: 10px;
      box-shadow: 0px 0px 8px 5px rgba(0, 0, 0, .4);
      min-height: 100px;
      height:700px;
    }
</style>
<body>

<form  autocomplete="off" action="#" method="POST">
        <div class="login-box" style="margin-left:-100px;margin-top:-40px;">
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
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control"  style="width:500px;" name="Email" placeholder="Enter email address" value="">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Contact Info</label>
                <input type="phone" class="form-control" style="width:500px;" name="ContactNo" placeholder="Enter Contact No" value="">
               
            </div>
            <input style="background-color:#11324D;width:500px;" class="button" type="submit"
                     name="add" value="Add">

            
    </form>

    
</body>
</html>

<?php

    include 'addconnection.php';
    
    if(isset($_POST['add'])){
        $Name = $_POST['Name'];
        $FatherName = $_POST['FatherName'];
        $Email = $_POST['Email'];
        $ContactNo = $_POST['ContactNo'];

        $insertquery = "insert into class6(Name,FatherName,Email,ContactNo) values('$Name','$FatherName','$Email','$ContactNo')";

       $res= mysqli_query($con,$insertquery);

       if($res){
            echo "<script language='javascript'>";
            echo "alert('Insrted Successfully')";
            echo "</script>";
            header("Location:a2class6.php");
       }
       else{
        echo "<script language='javascript'>";
        echo "alert('Not interested')";
        echo "</script>";
       }
    }
?>