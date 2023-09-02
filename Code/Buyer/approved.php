<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved</title>
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
<form action="show.php" method="POST">
  <div class="m-4" style="font-size: 25px;">
      <div class="m-4">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>