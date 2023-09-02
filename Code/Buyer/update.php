<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  <?php 
    
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
            $ids = $_GET['id'];
            session_start();
            $_SESSION['ID'] = $ids;      
            $sql="SELECT * FROM `items` WHERE `ID` = $ids";  
            $result = mysqli_query($conn,$sql);
            $data = mysqli_fetch_assoc($result);
            $arr = ["Furniture","Stationary","PC","Server","Gym-Equipment"];
            $sel = ["","","","",""];
            for($i=0;$i<count($arr);$i++)
            {
              if($arr[$i]==$data['Item Name'])
              {
                $sel[$i] = "selected";
              }
            }
    mysqli_close($conn);
}
  ?>
<section>
  <form action="update2.php" method="post">
  <div class="m-4">
  <div style="font-size: 25px ;">
<h2 style="margin-bottom:20px;">Select items :</h2>
        <select name="up" id="upd ">
          <option value="Furniture" <?php echo $sel[0]; ?>>Furniture</option>
          <option value="Stationary" <?php echo $sel[1]; ?>>Stationary</option>
          <option value="PC" <?php echo $sel[2]; ?>>PC</option>
          <option value="Server" <?php echo $sel[3]; ?>>Server</option>
          <option value="Gym-Equipment" <?php echo $sel[4]; ?>>Gym-Equipment</option>
        </select>
  <br>
   </div>
   <hr style="margin: 40px 0px">
   <div>
    <p style="margin-top:10px; margin-bottom: 0px;"><h2>Update the Value</h2></p>
    <div>
      <input type="text" name="uprice" style="margin: 0px 4px 4px 0px; height:50px; width:300px " value="<?php echo $data['Price Per Item']; ?>"  pattern = "\d+" placeholder= "enter price per item" maxlength="10" >
    </div>
    <div>
      <input type="number" style="margin: 20px 4px 4px 0px; height:50px; width:300px"  name="uquan" value="<?php echo $data['Quantity']; ?>" placeholder= "Quantity"><br> 
    </div> 
    <div class="m-4" >
        <button class="btn btn-primary" type="submit">Update</button>
        <input  class="btn btn-primary" type="reset" value="Reset"></input>
      </div> 
</div>
</div>
</form>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html> 