<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $insert = false;
    if(isset($_POST['name'])){
        // Set connection variables
        $server = "localhost";
        $username = "root";
        $password = "Shivang15";

        // Create a database connection
        $con = mysqli_connect($server, $username, $password);

        // Check for connection success
        if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
        }
         echo "Success connecting to the db";
        // Collect post variables
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $query = $_POST['query'];
        $sql = "INSERT INTO `web_blog`.`contact` (`Name`,`Phone_No`,`Email-ID`,`Query`) VALUES ('$name', '$email', '$phone','$query');";
        // echo $sql;

        // Execute the query
        if($con->query($sql) == true){
            // echo "Successfully inserted";

            // Flag for successful insertion
            $insert = true;
            // echo "alert("Welcome ,new member");"
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }

       // Close the database connection
       mysqli_close($con);
        
       header("location:main.html");
    }
?>
</body>
</html>