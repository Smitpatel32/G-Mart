<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
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

  <div class="m-4" style="font-size:25px">
    <div>
      <form action="../Admin/request1.php" method = "POST">  
        <p>Select College Name :</p>
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
              ?>
                  <select style="width:100px ; border-radius:10px;" name="Ena" id="Ena">
                  <option value='All'>All</option>
                  <?php
              $sql = "SELECT DISTINCT `Institute Name` FROM items ORDER BY 'Item Name'";
                $result = mysqli_query($conn,$sql);
                while($data = mysqli_fetch_array($result))
                { 
                  echo "<option value='$data[0]'>$data[0]</option>";
            }
          }
          ?>
        </select>
        <div class="m-4">
        <button class="btn btn-primary" type="submit">Search</button>
        <input  class="btn btn-primary" type="reset" value="Reset"></input>
      </div>
      </form>
      <hr style="margin:30px">
      <form action="../Admin/date.php" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                              </div>
                           
                                <div class="col-md-4">
                                    <div class="m-3">
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                  </div>
                        </form>
      <hr style="margin:30px">
      <form action="../Admin/Price.php" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Enter Min value :</label>
                            <input type="text" pattern="\d+" name="val" placeholder="ex. 10000" class="form-control" style="width:150px" required>
                        </div>
                    </div>
                  </div>
                    <div class="col-md-4">
                        <div class="m-3">
                          <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                      </div>
                  </form>
                  <hr style="margin:30px">
<form action="show1.php" method="POST">
  <div>
      <div>
        <label for="isear"> <p>Search by Item Name :</p>
        <select name="show" id="show">
          <option value="All">All</option>
          <option value="furniture">Furniture</option>
          <option value="stationary">Stationary</option>
          <option value="pc">PC</option>
          <option value="server">Server</option>
          <option value="Gym-Equipment">Gym-Equipment</option>
        </select>
      </div>
      <div class="m-4" >
        <button class="btn btn-primary" type="submit">Search</button>
        <input  class="btn btn-primary" type="reset" value="Reset"></input>
      </div>  
    </div>
</form>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html> 