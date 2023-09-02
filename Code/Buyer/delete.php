<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
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
if($_SERVER['REQUEST_METHOD']=="GET")
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
            $id = $_GET['id'];
            echo $id;
            $sql="DELETE FROM `items` WHERE `ID` = $id";   
            $result = mysqli_query($conn,$sql);
            header("location: show.php?show=All");     
        }
  }
else{
    echo "Page not found";
}
    
?>
</div>
</body>
</html>