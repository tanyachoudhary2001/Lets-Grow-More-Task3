<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marksheet</title>
  <?php include 'links.php'?>
</head>
<style>
    tr{
        padding:50px;
    }
</style>
<body>

<center style="margin-top:100px;">
	<table border=2 style="width:900px;height:600px;">
		<tr>
		<td>
			<table  width=100%>
			<tr>
				<td>
					<img src='assets/images/graduation-hat.png' width=60 height=60 style="margin-left:40px;">
				</td>
				<td>
					<b><font size='5' style="margin-left:180px;">CENTRAL BOARD OF HIGHER EDUCATION</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
					<font size='5' color='grey'><b style="margin-left:290px;">Student Record</b></font>&nbsp;&nbsp;<br>
                    <font size='3' color='grey'><b style="margin-left:620px;">SESSION 2020-2021</b></font>&nbsp;&nbsp;
				</td>
			</tr>
			</table>
            </td>
		</tr>
            <?php

                include 'addconnection.php';
                
                if(isset($_POST['search-by-id'])){
                   $ids=$_POST['get_id'];
                
                    
                // $ids=$_GET['id'];

                $showquery = "select * from class7results where id={$ids}";

                $arrdata = mysqli_query($con,$showquery);

                // $arrdata = mysqli_fetch_array($showdata);

                // $res = mysqli_fetch_array($query);
                 while($row = mysqli_fetch_array($arrdata)){
                     $total = ($row['English']+$row['Hindi']+$row['Mathematics']+$row['Science']+$row['SocialStudies'])/500*100;

                     echo '
                     <tr>
                     <td>
                         <table width=100% style="margin-top:10px;margin-left:30px;">
                             <tr><th>Name - '.$row['Name'].'</th><th>Father Name  - '.$row['FatherName'].'</th></th>
                             <tr><th>Roll No - '.$row['id'].'</th><th>Class - 7</th>
                         </table><hr>
         
                         <table width=100% style="margin-left:20px;font-size:20px;">
                             <tr><th>Subject</th><th>Total Marks</th><th>Marks Obtained</th></tr>
                         
                            
                             <tr><td>English</td><td>100</td><td>'.$row['English'].'</td></tr>
                             <tr><td>Hindi</td><td>100</td><td>'.$row['Hindi'].'</td><td></tr>
                             <tr><td>Maths</td><td>100</td><td>'.$row['Mathematics'].'</td></tr>
                             <tr><td>Science</td><td>100</td><td>'.$row['Science'].'</td></tr>
                             <tr><td>Social Studies</td><td>100</td><td>'.$row['SocialStudies'].'</td></tr>
         
         
                         </table><hr>
         
                         <table width=100% style="margin-left:50px;font-size:25px;">
                         <tr><th style="width:230px;">Total</th><th></th><th></th><th></th><th></th><th></th><th></th><th>500</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th>'.$total.'%</th><th></th><th></th><th></th><th style="font-size:25px;">
                         ';
                         if($total>45){
                             echo 'Passed';
                         }
                         else{
                             echo 'Failed';
                         }
                         echo '
                        </th></tr>
                         </table>
                     </td>
                     </tr>
                     </table>
                     <button onclick="window.print()" style="padding:5px;width:110px;margin-top:40px;">Print</button>
                     </center>
                     ';
                                
                }
                }
            ?>
            
            

</body>
</html>

