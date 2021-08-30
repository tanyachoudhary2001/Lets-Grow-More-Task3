<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
</head>
<style>
    *{
      margin:0 auto;
      background-color: black;
    }
    #navbarNavAltMarkup{
      margin-top:40px;
    }
    .nav-link:hover{
      color:white !important;
    }
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0px;
  width: 200px;
  background-color: #fffff !important;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
  padding:20px;
  border-radius:20px;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
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
                <!-- <p style="margin-left:250px;font-size:40px;color:white;font-style:roboto;margin-top:10px;">Welcome Admin !</p> -->
                <!-- <a class="nav-link active" aria-current="page" href="#" style="margin-left:300px;font-size:30px;">Welcome Admin !</a> -->
              </li>z  
            </ul>
            <ul><button style="background-color:white;height:35px;width:80px;border-radius:20px;margin-left:1100px;margin-top:30px;"><a href="logout.php">Logout</a></button></ul>
           
          </div>
        </div>
      </nav>

      <!-- ********* -->
    <ul style="padding:20px;border-radius:25px;width:300px;height:500px;margin-top:100px;margin-left:-30px;">
    <!-- <li style="background-color:grey;margin-left:40px;border-radius:30px;margin-left:-50px;"><a style="text-align:center;" href="viewstudents.php">STUDENTS</a></li><br> -->
      <!-- <li style="background-color:grey;margin-left:40px;border-radius:30px;margin-left:-50px;""><a style="text-align:center;" href="#news">RESULTS</a></li><br>
      <li style="background-color:grey;margin-left:40px;border-radius:30px;margin-left:-50px;""><a style="text-align:center;" href="#about">ADD</a></li><br>
      <li style="background-color:grey;margin-left:40px;border-radius:30px;margin-left:-50px;""><a style="text-align:center;" href="#about">UPDATE</a></li><br>
      <li style="background-color:grey;margin-left:40px;border-radius:30px;margin-left:-50px;""><a style="text-align:center;" href="#about">DELETE</a></li> -->
    </ul>
    <!-- ********* -->
    
      <nav class="navbar navbar-expand-lg" style="margin-top:-600px;width:300px;color:white;">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
            <div class="navbar-nav">
            <div class="dropdown" >
            <button class="btn btn-secondary dropdown-toggle" style="background-color:black;color:white;border-color:black;font-size:30px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Select Class
            </button>
            <ul class="dropdown-menu" style="background-color:black;font-size:20px;padding:20px;" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="a2class6.php" style="color:white;">Class 6</a></li>
                <li><a class="dropdown-item" href="a2class7.php" style="color:white;">Class 7</a></li>
                <li><a class="dropdown-item" href="a2class8.php" style="color:white;">Class 8</a></li>
            </ul>
            </div>

            
              
            </div>
          </div>
        </div>
      </nav>

      <!-- <img style="margin-left:720px;border-radius:100%;height:420px;width:420px;margin-top:100px;" src="assets/images/admin-login-icon-26.jpg"> -->

      <?php
                            include('addconnection.php');
                            include('links.php');

    ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>