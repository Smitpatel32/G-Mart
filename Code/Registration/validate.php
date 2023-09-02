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
        
        $mail = $_POST['vemail'];
        $pass = $_POST['vpass'];
        $sql="SELECT * FROM `login details` WHERE `Email` LIKE '$mail' AND `Password` = '$pass'" ;
        $result = mysqli_query($conn,$sql);
        $sql1="SELECT * FROM `login admin` WHERE `Email` LIKE '$mail' AND `Password` = '$pass'" ;
        $result1 = mysqli_query($conn,$sql1);
        $data = mysqli_fetch_all($result);
        $data1 = mysqli_fetch_all($result1);
        if(count($data)==1)
        {
            session_start();
            $_SESSION['name']=$data[0][1];
            $_SESSION['id']=$data[0][2];
        }else if(count($data1)==1)
        {
            session_start();
            $_SESSION['name']=$data1[0][1];
            $_SESSION['id']=$data1[0][2];
        }

            if(count($data)!=1 && count($data1)!=1){
                echo '<div class="alert alert-danger" role="alert">
                Pls Enter valid Data.
              </div>';
                include('login.php');
            }
            else{
                if(count($data)==1)
                {
                    include('../Buyer/Home2.html');
                }
                else{
                    include('../Admin/request.php');
                }
            }
        }
mysqli_close($conn);
}
else{
    echo '<div class="alert alert-danger" role="alert">
                Page Not Found.
              </div>';
}
?>
</body>
</html>