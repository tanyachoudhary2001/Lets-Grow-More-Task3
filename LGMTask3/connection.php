<!-- <?php
  
$conn = "";
   
try {
    $servername = "localhost:3306";
    $dbname = "lgmtask3";
    $username = "root";
    $password = "";
    // $usertype="";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=lgmtask3",
        $username, $password 
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?> -->