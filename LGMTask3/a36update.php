<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Class 6 Students</title>
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

<form action="#" method="POST" style="margin-left:600px;margin-top:60px;">
        <div class="login-box" style="width:500px;">
            <h1 style="margin-top:-120px !important;">Update Details</h1>
  
            <?php

                include 'addconnection.php';

                $ids=$_GET['id'];

                $showquery = "select * from class6 where id={$ids}";

                $showdata = mysqli_query($con,$showquery);

                $arrdata = mysqli_fetch_array($showdata);

                if(isset($_POST['add'])){

                    $idupdate=$_GET['id'];


                    $Name = $_POST['Name'];
                    $FatherName = $_POST['FatherName'];
                    $Email = $_POST['Email'];
                    $ContactNo =$_POST['ContactNo'];

                    $query = " update class6 set id='$ids' , Name='$Name',FatherName='$FatherName',Email='$Email',ContactNo='$ContactNo'  where id='$idupdate' ";

                    
                $res= mysqli_query($con,$query);
                

                if($res){

                        header("Location:a2class6.php?message='Updated Successfully!'");
                       

                }
                else{
                    echo "<script language='javascript'>";
                    echo "alert('Not updated')";
                    echo "</script>";
                }
                
                }
            ?>
            
            <div class="form-group">
                <label for="exampleInputEmail1" style="margin-left:-290px;">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Name" placeholder="Enter Name" value="<?php echo $arrdata['Name'];?>">
               
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Father Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="FatherName" placeholder="Enter Father Name" value="<?php echo $arrdata['FatherName'];?>">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" placeholder="Enter email" value="<?php echo $arrdata['Email'];?>">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contact No.</label>
                <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ContactNo" placeholder="Enter email" value="<?php echo $arrdata['ContactNo'];?>">
               
            </div>

            
            <input style="background-color:#11324D;width:500px;" class="button" type="submit"
                     name="add" value="Update">
            
    </form>
   

</body>
</html>

