<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    *{
        background-color:black;
    }
</style>
<img src="assets/images/results.png" style="margin-left:-150px;margin-top:100px;">   

<center style="margin-top:-400px;">
	
<form action="8viewresults.php" method="POST">
    <div>
        <center> 
            <label style="margin-left:-120px;color:white;margin-bottom:-200px;font-size:23px;">Enter Roll No :</label>
            <input type="text" name="get_id" style="height:50px;width:160px;background-color:white;color:black;font-size:20px;" class="form-control" autocomplete="off" placeholder=""><br><br><br>
                    
            <button type="submit" name="search-by-id" style="color:white;padding:10px;width:100px;border-radius:20px;margin-left:20px;">View Result</button>

                     
    </center>
    </div>
    </form>
       
</body>
</html>