<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="login.php"><img src="../Images/favicon.png" width=40px></img></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sign up</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="signup.php">Sign up as Institute</a></li>
            <li><a class="dropdown-item" href="signupa.php">Sign up as Admin</a></li>
          </ul>
        </li>
            </ul>
          </div>
          </div>
    </nav>
    <form method="post" action="validate.php" >
        <div style="margin:25px;">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email"  name="vemail" class="form-control" id="email" aria-describedby="emailHelp" required>         
          </div>
          <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" name="vpass" class="form-control" pattern="\d+" minlength="8" id="pass" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>