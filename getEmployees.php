<?php
     if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form 
      


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employeedb";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }

  $sql = "SELECT `id`, `name`, `email`, `contact_number` FROM  employee";
   
     $result = mysqli_query($conn, $sql);
   
     return $result;
     
    mysqli_close($conn);

}


?>
