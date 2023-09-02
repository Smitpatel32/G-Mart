<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>  
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
   
    $username = 'root';
    $servername = 'localhost';
    $password = '';
    $database = 'sd';   
    $conn = mysqli_connect($servername, $username, $password,$database);

    if(!$conn)
    {
        die("sry connection failed due to Some Technical issues");
    }
    else{
        $Iname = $_POST['Iname'];
        $Iid = $_POST['Iid'];
        $Did = $_POST['Dname'];
        $mail = $_POST['email'];
        $pass = $_POST['pass'];
        $contact = $_POST['cont'];
        $address = $_POST['add'];
            $sql="INSERT INTO `login details` (`Institute Name`,`Institute ID`,`Department Name`, `Email`, `Password`, `Contact No.`, `Address`) VALUES ('$Iname','$Iid','$Did','$mail', '$pass', '$contact', '$address')";
            $result = mysqli_query($conn,$sql);
           if($result){
                include "login.php";
           }
           else{
               ?>
                <div class="alert alert-danger" role="alert">
                Pls Enter valid and Unique Data.
                </div> 
               <?php
               if($Iname){
                   include ('signup.php');
               }
               else{
                   include('signupa.php');
               }
           }
        }
        mysqli_close($conn);
    }
    else{
        echo "Page not found";
    }
    ?>
</body>
</html>