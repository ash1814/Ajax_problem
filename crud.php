<?php
    //   if (isset($_SERVER['HTTP_ORIGIN'])) {
    //     header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    //     header('Access-Control-Allow-Credentials: true');
    //     header('Access-Control-Max-Age: 86400');    // cache for 1 day
    // }
       if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $name = $_POST['name'];
      $email = $_POST['email']; 
      $contact = $_POST['contact'];
      var_dump($name);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employeedb";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO employee (name,email,contact_number)
      VALUES ('$name','$email','$contact')";

      if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    mysqli_close($conn);

    }


?>