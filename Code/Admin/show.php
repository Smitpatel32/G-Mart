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
      <a class="navbar-brand" href="../Admin/request.php"><img src="../Images/favicon.png" width=40px></img></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../Admin/request.php">REQUESTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Admin/approved.php">APPROVED GRANTS</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../Registration/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Registration/logout.php">Log out</a>
            </li>
        </ul>
      </div>
    </div>
  </nav> 
<div>

<?php
if($_REQUEST)
{
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
      <div>
    <div class="m-3 p-2 bg-primary text-white" style="display:flex; align-items:center; justify-content:center; border-radius:50px">Approved</div>
    <div style="display:flex; align-items:center; justify-content:center;" >
      <?php
            if($itemName!="All")
            {
                $sql = "SELECT * FROM `items` WHERE `Item Name` LIKE '$itemName' AND `Approved` Like 'True'";
                $result = mysqli_query($conn,$sql);
                $r = mysqli_query($conn,$sql);
                $data = mysqli_fetch_all($r);
                if($result && count($data)!=0)
            {
              ?>
              <div>
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
            <?php
            }
            echo "</div>";
            echo "</table>";
            echo "<div style='display:flex;justify-content:right;align-items:center;'>Count: ".count($data)."</div>";
            }
            else{
                echo "No data found";
            }
          }
            else{
                $sql = "SELECT * FROM `items` WHERE `Approved` Like 'True'";
                $result = mysqli_query($conn,$sql);
                $r = mysqli_query($conn,$sql);
                $data = mysqli_fetch_all($r);
                if($result && count($data)!=0)
            {
              ?>
              <div>
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
                    
            <?php
            }
                echo "</div>";
                echo "</table>";
                echo "<div style='display:flex;justify-content:right;align-items:center;'>Count: ".count($data)."</div>";
            }
            else{
                echo "No data found";
            }
            }
          ?>
          </div>
          </div>
          <div>
            <div class="m-3 p-2 bg-danger text-white" style="display:flex; align-items:center; justify-content:center; border-radius:50px">Rejected</div>
    <div style="display:flex; align-items:center; justify-content:center;" >
      <?php
            if($itemName!="All")
            {
                $sql = "SELECT * FROM `items` WHERE `Item Name` LIKE '$itemName' AND `Approved` Like 'False'";
                $result = mysqli_query($conn,$sql);
                $r = mysqli_query($conn,$sql);
                $data = mysqli_fetch_all($r);
                if($result && count($data)!=0)
            {
              ?>
              <div>
                <table class='table table-striped' style='margin:10px; max-width:80vw;text-align: center;'>
                <tr>
                <th>Id</th>
                <th>Item Name</th>
                <th>Price Per Item</th>
                <th>Quantity</th>
                <th>Count</th>
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
                    <td><?php echo $row['Count']; ?></td>
                    <td><img src='../Images/cancel.png' width='20px'></td>
                    </tr>
            <?php
            }
            echo "</div>";
            echo "</table>";
            echo "<div style='display:flex;justify-content:right;align-items:center;'>Count: ".count($data)."</div>";
            }
            else{
                echo "No data found";
            }
          }
            else{
                $sql = "SELECT * FROM `items` WHERE `Approved` Like 'False'";
                $result = mysqli_query($conn,$sql);
                $r = mysqli_query($conn,$sql);
                $data = mysqli_fetch_all($r);
                if($result && count($data)!=0)
            {
              ?>
              <div>
                <table class='table table-striped' style='margin:10px; max-width:80vw;text-align: center;'>
                <tr>
                <th>Id</th>
                <th>Item Name</th>
                <th>Price Per Item</th>
                <th>Quantity</th>
                <th>Count</th>
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
                    <td><?php echo $row['Count']; ?></td>
                    <td><img src='../Images/cancel.png' width='20px'></td>
                  </tr>
            <?php
            }
                echo "</div>";
                echo "</table>";
                echo "<div style='display:flex;justify-content:right;align-items:center;'>Count: ".count($data)."</div>";
            }
            else{
                echo "No data found";
            }
            }
        }
        mysqli_close($conn);
    } 
else{
    echo "Page not found";
}
?>
</div>
</div>
</div>
</body>
</html>