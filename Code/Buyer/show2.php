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
<div>
<?php
if($_REQUEST)
{
    $itemName = $_REQUEST['show'];
    $itemName = $_REQUEST['show'];
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
      ?>
    <div class="m-3 p-2 bg-primary text-white" style="display:flex; align-items:center; justify-content:center; border-radius:50px">Approved</div>
    <div style="display:flex; align-items:center; justify-content:center;" >
      <?php
            if($itemName!="All")
            {
                $sql = "SELECT * FROM `items` WHERE `Institute ID` = $Iid AND `Item Name` LIKE '$itemName' AND `Approved` Like 'True'";
                $result = mysqli_query($conn,$sql);
                $r = mysqli_query($conn,$sql);
                $data = mysqli_fetch_all($r);
                if($result && count($data)!=0)
            {
              ?>
                <table class='table table-striped' style='margin:10px; max-width:80vw;text-align: center;'>
                <tr>
                <th>Id</th>
                <th>Item Name</th>
                <th>Price Per Item</th>
                <th>Quantity</th>
                <th>Approved</th>
                </tr>
            <?php    
                while($row = mysqli_fetch_array($result))
                {

                  ?>
                   <tr>
                   <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Item Name']; ?></td>
                    <td><?php echo $row['Price Per Item']; ?></td>
                    <td><?php echo $row['Quantity']; ?></td>
                    <td><img src='../Images/approve.png' width='20px'></td>
                </tr>
            <?php
            }
                
                echo "</table>";
            }
            else{
                echo "No data found";
            }
          }
            else{
                $sql = "SELECT * FROM `items` WHERE  `Institute ID` = $Iid AND `Approved` Like 'True'";
                $result = mysqli_query($conn,$sql);
                $r = mysqli_query($conn,$sql);
                $data = mysqli_fetch_all($r);
                if($result && count($data)!=0)
            {
              ?>
                <table class='table table-striped' style='margin:10px; max-width:80vw;text-align: center;'>
                <tr>
                <th>Id</th>
                <th>Item Name</th>
                <th>Price Per Item</th>
                <th>Quantity</th>
                <th>Approved</th>
                </tr>
            <?php    
                while($r = mysqli_fetch_array($result))
                {
                    $row = $r;
            ?>
                   <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Item Name']; ?></td>
                    <td><?php echo $row['Price Per Item']; ?></td>
                    <td><?php echo $row['Quantity']; ?></td>
                    <td><img src='../Images/approve.png' width='20px'></td>
                </tr>
            <?php
            }
                
                echo "</table>";
            }
            else{
                echo "No data found";
            }
            }
          ?>
          </div>
            <div class="m-3 p-2 bg-danger text-white" style="display:flex; align-items:center; justify-content:center; border-radius:50px">Rejected</div>
    <div style="display:flex; align-items:center; justify-content:center;" >
      <?php
            if($itemName!="All")
            {
                $sql = "SELECT * FROM `items` WHERE  `Institute ID` = $Iid AND `Item Name` LIKE '$itemName' AND `Approved` Like 'False'";
                $result = mysqli_query($conn,$sql);
                $r = mysqli_query($conn,$sql);
                $data = mysqli_fetch_all($r);
                if($result && count($data)!=0)
            {
              ?>
                <table class='table table-striped' style='margin:10px; max-width:80vw;text-align: center;'>
                <tr>
                <th>Id</th>
                <th>Item Name</th>
                <th>Price Per Item</th>
                <th>Quantity</th>
                <th>Approved</th>
                </tr>
            <?php    
                while($row = mysqli_fetch_array($result))
                {

                  ?>
                   <tr>
                   <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Item Name']; ?></td>
                    <td><?php echo $row['Price Per Item']; ?></td>
                    <td><?php echo $row['Quantity']; ?></td>
                    <td><img src='../Images/cancel.png' width='20px'></td>
                </tr>
            <?php
            }  
                echo "</table>";
            }
            else{
                echo "No data found";
            }
          }
            else{
                $sql = "SELECT * FROM `items` WHERE  `Institute ID` = $Iid AND `Approved` Like 'False'";
                $result = mysqli_query($conn,$sql);
                $r = mysqli_query($conn,$sql);
                $data = mysqli_fetch_all($r);
                if($result && count($data)!=0)
            {
              ?>
                <table class='table table-striped' style='margin:10px; max-width:80vw;text-align: center;'>
                <tr>
                <th>Id</th>
                <th>Item Name</th>
                <th>Price Per Item</th>
                <th>Quantity</th>
                <th>Approved</th>
                </tr>
            <?php
                while($r = mysqli_fetch_array($result))
                {
                    $row = $r;
            ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Item Name']; ?></td>
                    <td><?php echo $row['Price Per Item']; ?></td>
                    <td><?php echo $row['Quantity']; ?></td>
                    <td><img src='../Images/cancel.png' width='20px'></td>
                </tr>
                    
            <?php
            }
                
                echo "</table>";
            }
            else{
                echo "No data found";
            }
            }
        }
    } 
else{
    echo "Page not found";
}
?>
</div>
</div>
</body>
</html>