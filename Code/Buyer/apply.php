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
<section>
  <form style="display:flex; flex-direction: column; justify-content:center; font-size: 25px" method="post" action="db.php">
    <div class="m-4">
    <p>Select items :</p>
   <label for="fur"> <input type="checkbox" id="fur" onclick="myFunction(fur,tfur)" name="cat[]" value="Furniture">Furniture</input></label><br>
   <div id="tfur" style="display:none;">
   <div>
     <input type="text" id="furdisc" name="disc[]" style="margin-right:10px" class="mb-4" placeholder= "enter Discription" maxlength="10">
   </div>
   <input type="text" id="furprice" name="price[]" style="margin-right:10px" class="mb-4" pattern = "\d+" placeholder= "enter price per item">
   <input type="number" id="furquan" name="quan[]" class="mb-4" placeholder= "Quantity"><br> 
  </div>

   <label for="gym"><input type="checkbox" id="gym"  onclick="myFunction(gym,tgym)" name="cat[]"  value="Gym-Equipment">Gym Equipment</input></label><br>
   <div id="tgym" style="display:none;">
   <div>
     <input type="text" id="gymdisc" name="disc[]" style="margin-right:10px" class="mb-4" placeholder= "enter Discription">
   </div>
   <input type="text" id="gymprice" name="price[]"  style="margin-right:10px" class="mb-4" pattern = "\d+" placeholder= "enter price per item" maxlength="10"> 
   <input type="number" id="gymquan" name="quan[]" class="mb-4" placeholder= "Quantity" ><br> 
  </div>

   <label for="pc"><input type="checkbox" id="pc" onclick="myFunction(pc,tpc)" name="cat[]" value="PC">PC</input></label><br>
   <div id="tpc" style="display:none;">
   <div>
     <input type="text" id="pcdisc" name="disc[]" style="margin-right:10px" class="mb-4" placeholder= "enter Discription">
   </div>
   <input type="text" name="price[]"  style="margin-right:10px" class="mb-4" pattern = "\d+" placeholder= "enter price per item" maxlength="10"> 
   <input type="number" name="quan[]" class="mb-4" placeholder= "Quantity"><br> 
  </div>

   <label for="stat"> <input type="checkbox" id="stat" onclick="myFunction(stat,tstat)" name="cat[]" value="Stationary">Stationary</input></label><br>
   <div id="tstat" style="display:none;">
   <div>
     <input type="text" id="Statdisc" name="disc[]" style="margin-right:10px" class="mb-4" placeholder= "enter Discription">
   </div>
   <input type="text" name="price[]"  style="margin-right:10px" class="mb-4" pattern = "\d+" placeholder= "enter price per item" maxlength="10"> 
   <input type="number" name="quan[]" class="mb-4" placeholder= "Quantity" ><br> 
  </div>

   <label for="ser"> <input type="checkbox" id="ser" onclick="myFunction(ser,tser)" name="cat[]" value="Server">Server</input></label><br>
   <div id="tser" style="display:none;">
   <div>
     <input type="text" id="serdisc" name="disc[]" style="margin-right:10px" class="mb-4" placeholder= "enter Discription">
   </div>
   <input type="text"  name="price[]"  style="margin-right:10px" class="mb-4" pattern = "\d+" placeholder= "enter price per item" maxlength="10"> <input type="number"  name="quan[]" class="mb-4" placeholder= "Quantity"><br> 
  </div>
    </div>
    <div class="m-4">
      <button class="btn btn-primary" type='submit' id="apply">Apply</button>
      <input class="btn btn-primary" type="Reset"></input>
    </div>
</section>
</form>
    <script src="../Js/hiding.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html> 