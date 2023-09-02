<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>  
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    session_start();
    $id = $_SESSION['ID'];
    $itemN = $_POST['up'];
    $itemP = $_POST['uprice'];
    $itemQ = $_POST['uquan'];
    $total = $itemP*$itemQ;
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
                $sql="UPDATE `items` SET `Item Name` = '$itemN', `Price Per Item` = '$itemP', `Quantity` = '$itemQ',`Total`=$total  WHERE `items`.`ID` = $id";
                $result = mysqli_query($conn,$sql);

            mysqli_close($conn);
            header("location: show.php?show=All");
        }
}
else{
    echo "Page not found";
}
    

?>

</body>
</html>