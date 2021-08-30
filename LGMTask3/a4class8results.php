

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students of Class6</title>
</head>
<style>
    *{
      margin:0 auto;
      background-color: black;
    }
    #navbarNavAltMarkup{
      margin-top:10px;
    }
    .nav-link:hover{
      color:black !important;
    }
    table {
        border: 1px solid white;
        border-radius:10px 10px 10px 10px !important;
        
    }
    .table-responsive{
        border-radius:25px !important;
        /* border: 2px solid white; */
        padding:40px !important;
        /* background-color:white; */
    }
    table {
        width: 100%;
    }
    th {
        height: 60px;
        text-align:left !important;
        background-color:red;
        padding-left:30px;
    }
    td {
        text-align: left;
        height:20px;
        padding:15px;
        padding-left:30px;
    }
    
tr{
    border-radius:25px !important;
}
tr:hover{
    background-color:grey;
}

    
  </style>
<body>

<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="assets/images/graduation-hat.png" height=30px width=30px>
            <h6 style="text-align:center;margin-left:6px;color:white;">Alaska<br>High School</h6>

          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:150px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <p style="margin-left:250px;font-size:40px;color:white;font-style:roboto;">Class 8</p>
                <!-- <a class="nav-link active" aria-current="page" href="#" style="margin-left:300px;font-size:30px;">Welcome Admin !</a> -->
              </li>
            </ul>
            <ul><button style="background-color:white;height:35px;width:80px;margin-right:-50px;"><a href="logout.php">Logout</a></button></ul>
          </div>
        </div>
      </nav>
    
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <!-- <a class="nav-link active" aria-current="page" href="add.php" style="margin-left:280px;color:yellow;margin-top:30px;font-size:50px;">Class 6</a> -->
              <!-- <a class="nav-link" href="#" style="margin-left:60px;color:yellow;">Add Results</a> -->
            </div>
          </div>
          
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-bottom:-160px;">
            <div class="navbar-nav">
              <button style="margin-right:850px;width:150px;background-color:white;color:red;border-radius:10px;margin-top:-50px;"><a style="margin-left:-10px;color:red;" class="nav-link active" aria-current="page" href="class8addresults.php" style="margin-left:60px;color:yellow;">Add Result</a></button>
              <!-- <a class="nav-link" href="#" style="margin-left:60px;color:yellow;">Print Results</a> -->
            </div>
          </div>
      </nav>


    <div class="main-div" style="padding-left:120px;padding-right:120px;margin-top:-50px;">
       
            <div class="center-div" style="margin-top:120px;">
                <div class="table-responsive">
                    <table class="bordered" style="color:white;">
                        <thead style="color:pink;padding:left:40px;">
                            <tr>
                                <th>Roll No</th>
                                <th>Name</th>
                                <th>Father's Name</th>
                                <th>English</th>
                                <th>Hindi</th>
                                <th>Mathematics</th>
                                <th>Science</th>
                                <th>SocialStudies</th>
                                <th>Update</th>
                                <th>Delete</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include('addconnection.php');
                            include('links.php');
                            $selectquery = "select * from class9results";

                            $query = mysqli_query($con,$selectquery);

                            $nums = mysqli_num_rows($query);

                            $res = mysqli_fetch_array($query);



                            while($res = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $res['id'];?></td>
                                    <td><?php echo $res['Name'];?></td>
                                    <td><?php echo $res['FatherName'];?></td>
                                    <td><?php echo $res['English'];?></td>
                                    <td><?php echo $res['Hindi'];?></td>
                                    <td><?php echo $res['Mathematics'];?></td>
                                    <td><?php echo $res['Science'];?></td>
                                    <td><?php echo $res['SocialStudies'];?></td>
                                    <td><a href="8resultupdates.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="right" title="UPDATE"><i style="color:white;" class="fas fa-pen-square"></i></a></td>
                                    <td><a href="8resultdelete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="right" title="DELETE"><i style="color:red;" class="fas fa-trash"></i></a></td>
                                    
                                    <td><form action="8viewresults.php" method="POST">
                                       <input type="hidden" name="get_id" value="<?php echo $res['id'];?>"></input>
                                       <button style="color:white;border:2px solid black;margin-right:-80px;" name="search-by-id">View Marksheet</button>
                                    
                                  </form>
                                  <td>
                                  </tr>

                            <?php
                                  }$message=$_GET["message"];
                                  if($message){
                                      echo $message;
                                      echo "<script>alert($message)</script>";
                                  }

                            ?>
                          
                    

                            
                        </tbody>
                    </table>    
                </div>
            </div>
    </div>

                    

                        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>