<?php
  session_start();
  if (!isset($_SESSION['admin'])) {

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $username = $_POST['uname'];
      $password = $_POST['psw'];

      $con =new mysqli("localhost","root","","Farmer_Buddy");
      $query = "select * from tbl_admin where username = '$username' and password = '$password'";
      $result = mysqli_query($con, $query);
      if(mysqli_num_rows($result) < 1)
      {
        $_SESSION['msg'] = "Incorrect login";
        header("location: A_login.php");    
      }
      else
      {
        $_SESSION['admin'] = true;
      }
    }
    else
    {
      header("location: A_login.php");
      $_SESSION['msg'] = "Please Login As Admin";
    }
  }
  
?>

<!doctype html>
<html lang="en">
  <head>
        <title>Farmer Buddy</title>
        <link rel= "Shortout icon" type="image" href='farm1.png' />
        <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Link to custom JS -->
    <script src="index.js"></script>
    <style>
 .Div1{
    margin-top: 20px;
    min-height: 250px;
    background-color: rgba(245, 229, 229, 0.445);
    text-align: center;
    font-size: large;
}
p{
    color:black;
}
h2{
    text-align: center;
}      
    </style>
    <style>
  a.btn
{
    margin: 10px 10px;
    width: 150px;
    padding: 10px;
    border-radius: 20px;
}

a.btn-first, a.btn-second
{
    background:red;
    border: 2px solid black;
    color: black;
    position: relative;
}

a.btn:hover
{
    background: orange;
    border: none;
    color: #fff;
    box-shadow: 5px 5px #333;
    transition: 0.3s;
}
    
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

  </head>
  <body>
    <header>

      <nav class="navbar navbar-expand-lg navbar-light text-white" >
        <a class="navbar-brand h1">FARMER BUDDY</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav"  class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item active">
              <a class="nav-link text-white" href="admin_edit.php">HOME </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="about.php">ABOUT US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="func_logout()" >LOG OUT</a>
            </li>
          </ul>
        </div>
      </nav>
      </header>
      <h2>Adminitration...</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-6">

          <div class="Div1"><h2><b> Farmer</b></h2> 
              <a type="button" style="width:400px;" href="f_reg.php" class="btn btn-primary">Farmer regitration</a>
              <a type="button" style="width:400px;" href="calcu1.php" class="btn btn-success">Sugarcane calculation</a>
              <a type="button" style="width:400px;" href="crop.php" class="btn btn-danger">Crop Details</a>
              <a type="button" style="width:400px;" href="admin_f_bill.php" class="btn btn-secondary">Bill Details</a>
              </div>  
          </div>
          <div class="col-md-6">
              <div class="Div1"><h2> <b>Vehical owner</b></h2>
              <a type="button" href="o_reg.php" style="width:400px;"  class="btn btn-primary">Owner registration</a>
              <a type="button" href="calcu2.php" style="width:400px;" class="btn btn-success">Sugarcane calculation</a>
              <a type="button" href="fuel.php" style="width:400px;"  class="btn btn-danger">Vehical Fuel Details</a>
              <a type="button" href="admin_o_bill.php" style="width:400px;" class="btn btn-secondary">Bill Details</a>  
              </div> 
          </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="Div1"><h4><b> For any other updation.</b></h4> 
              <a  href="update_f.html" type="button" style="width:400px;"  class="btn btn-primary">Update farmer records</a>
              <a href="update_f_bill.html" type="button"  style="width:400px;" class="btn btn-success">update bill records</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="Div1"><h4><b> For any other updation.</b></h4> 
            <a  href="update_t.html" type="button" style="width:400px;"  class="btn btn-primary">Update Owner records</a>
              <a href="update_t_bill.html" type="button"  style="width:400px;" class="btn btn-success">update bill records</a>
            </div>
        </div>
    </div>
   
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>