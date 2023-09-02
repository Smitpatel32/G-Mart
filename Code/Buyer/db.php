<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>  
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{  
    include('../Registration/session.php');
    $Iname = $_SESSION['name'];
    $Iid = $_SESSION['id'];
    $itemD = $_POST['disc'];
    $itemN = $_POST['cat'];
    $itemP = $_POST['price'];
    $itemQ = $_POST['quan'];
    $a = array_values(array_filter($itemP));
    $b = array_values(array_filter($itemQ));
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
        if(count($itemN)!=count($a) || count($itemN)!=count($b))
        {
            echo '<div class="alert alert-danger" role="alert">
            Pls Enter Price and Quantity.
          </div>';
            include('apply.php');
        }
        else{
            for($i=0;$i<count($itemN);$i++)
            {
                $name = $itemN[$i];
                $price = $a[$i];
                $quan = $b[$i];
                $total = $price*$quan;
                $disc = $itemD[$i];
                $sql="INSERT INTO `items` (`Institute Name`, `Institute ID`, `Item Name`,`Item Discription`, `Price Per Item`, `Quantity`,`Total`) VALUES ('$Iname', '$Iid', '$name','$disc','$price', '$quan','$total');";  
                $result = mysqli_query($conn,$sql);
            }
            mysqli_close($conn);
            // include ("Home2.html");
        }
    }
}
else{
    echo "Page not found";
}
?>
</body>
</html>