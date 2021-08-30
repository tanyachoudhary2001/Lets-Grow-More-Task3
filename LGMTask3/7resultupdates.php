<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Results Class 7</title>
  <?php include 'links.php'?>
</head>
<body>

<form action="#" method="POST">
        <div class="login-box" style="margin-left:-100px;">
            <h1  style="width:500px;margin-bottom:10px;">Enter Details</h1>
  
            <?php

                include 'addconnection.php';

                $ids=$_GET['id'];

                $showquery = "select * from class7results where id={$ids}";

                $showdata = mysqli_query($con,$showquery);

                $arrdata = mysqli_fetch_array($showdata);

                if(isset($_POST['add'])){

                    $idupdate=$_GET['id'];


                    $Name = $_POST['Name'];
                    $FatherName = $_POST['FatherName'];
                    $English = $_POST['English'];
                    $Hindi = $_POST['Hindi'];
                    $Mathematics = $_POST['Mathematics'];
                    $Science = $_POST['Science'];
                    $SocialStudies=$_POST['SocialStudies'];


                    $query = " update class7results set id='$ids' , Name='$Name' , FatherName='$FatherName' , English='$English' ,Hindi='$Hindi',Mathematics='$Mathematics' , Science='$Science' , SocialStudies='$SocialStudies' where id='$idupdate' ";

                $res= mysqli_query($con,$query);

                if($res){
                    header("Location:a4class7results.php?message='Updated Successfully!'");
                }
                else{
                    echo "<script language='javascript'>";
                    echo "alert('Not updated')";
                    echo "</script>";
                }
                }
            ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" style="width:500px;"  name="Name" placeholder="Enter Name" value="<?php echo $arrdata['Name'];?>">
               
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Father Name</label>
                <input type="text" class="form-control" style="width:500px;" name="FatherName" placeholder="Enter Father Name" value="<?php echo $arrdata['FatherName'];?>">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">English</label>
                <input type="text" class="form-control" style="width:500px;"  name="English" placeholder="Enter email" value="<?php echo $arrdata['English'];?>">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hindi</label>
                <input type="text" class="form-control" style="width:500px;" name="Hindi" placeholder="Enter email" value="<?php echo $arrdata['Hindi'];?>">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Mathematics</label>
                <input type="text" class="form-control" style="width:500px;"  name="Mathematics" placeholder="Enter email" value="<?php echo $arrdata['Mathematics'];?>">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Science</label>
                <input type="text" class="form-control"  style="width:500px;" name="Science" placeholder="Enter email" value="<?php echo $arrdata['Science'];?>">
               
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">SocialStudies</label>
                <input type="text" class="form-control" style="width:500px;" name="SocialStudies" placeholder="Enter email" value="<?php echo $arrdata['SocialStudies'];?>">
               
            </div>
            <input style="background-color:#11324D;width:500px;" class="button" type="submit"
                     name="add" value="Update">

    </form>

</body>
</html>

