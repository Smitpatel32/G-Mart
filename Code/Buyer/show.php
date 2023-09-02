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
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../Buyer/Home2.html"><img src="../Images/favicon.png" width=40px></img></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../Buyer/Home2.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Buyer/apply.php">APPLY FOR GRANT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Buyer/approved.php">APPROVED GRANTS</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../Registration/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Registration/logout.php">Log out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Buyer/addtcart.php">Cart</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
<div style="display:flex; align-items:center; justify-content:center;">
<?php
if($_REQUEST)
{
  include('../Registration/session.php');
  $Iid = $_SESSION['id'];
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
     </div> 
     <div class="m-3 p-2 bg-secondary text-white" style="display:flex; align-items:center; justify-content:center; border-radius:50px">Pending For Result</div>
    <div style="display:flex; align-items:center; justify-content:center;" >
       <?php     
            if($itemName!="All")
            {
                $sql = "SELECT * FROM `items` WHERE  `Institute ID` = $Iid AND `Item Name` LIKE '$itemName' AND `Approved` Is null";
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
                <th>Update</th>
                <th>Delete</th>
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
                    <td><a href='update.php?id=<?php echo $row['ID'];?>'><img src='../Images/update.png' width='20px'></a></td>
                    <td><a href='delete.php?id=<?php echo $row['ID']?>'><img src='../Images/delete.png' width='20px'></a></td>
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
                $sql = "SELECT * FROM `items` WHERE  `Institute ID` = $Iid AND `Approved` is null";
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
                <th>Update</th>
                <th>Delete</th>
                <th>Date</th>
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
                    <td><a href='update.php?id=<?php echo $row['ID'];?>'><img src='../Images/update.png' width='20px'></a></td>
                    <td><a href='delete.php?id=<?php echo $row['ID']?>'><img src='../Images/delete.png' width='20px'></a></td>
                    <td><?php echo $row['created_at']; ?></td>
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
          <?php
            include("../Buyer/show2.php");
        }
        mysqli_close($conn);
    }
else{
    echo "Page not found";
}
?>
</body>
</html>