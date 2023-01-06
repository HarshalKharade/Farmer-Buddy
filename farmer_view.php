<?php
  session_start();

  if (!isset($_SESSION['farmer_code']))
  {
    if (isset($_POST['f_code']) && isset($_POST['password'])) 
    {
      $fcode = $_POST['f_code'];
      $pass = $_POST['password'];

      $con =new mysqli("localhost","root","","Farmer_Buddy");
      $query = "select * from tbl_farmer where fcode = '$fcode' and password='$pass'";
      $result = mysqli_query($con, $query);
      
      if(mysqli_num_rows($result) < 1)
      {     
        $_SESSION['msg'] = "Incorrect login";
        header("location: F_login.php");    
      }
      else
      {
        $_SESSION['farmer_code'] = $fcode;
        
      }
    }
    else
    {
      header("location: F_login.php");
      $_SESSION['msg'] = "Please Login As Farmer";
    }
  }

  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Farmer Buddy</title>
        <link rel= "Shortout icon" type="image" href='farm1.png' />
        <link rel="stylesheet" href="style.css">
        <script src="index.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

        <style>
        body {
     /* background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed; */
    background-size: cover;
}
    *[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}</style>
<!-- hover for button -->
<style>
  a.btn
{
    margin: 30px 10px;
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
                    <a class="nav-link text-white" href="farmer_view.php">HOME </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="about1.php">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="func_logout()" >LOG OUT</a>
                  </li>
                </ul>
              </div>
            </nav>
           </header>
           <br>
           <br>
           <br>
           <div class="container">     
              <form class="form-horizontal" role="form" method="post" style="text-align:center;">
                  <a style="width:300px;"  type="button" href="show_crop.php" class="btn btn-primary">Crop details</a>
                  <a style="width:300px;"  type="button" href="farmer_ton1.php" class="btn btn-success btn-rounded">Tonnage details</a>
                  <a style="width:300px;"  type="button" href="farmer_bill1.php" class="btn btn-danger btn-rounded">Bill details</a>
                         
                </form>
          </div>
<!--     
        <ul id="list">
			 <a href="show_crop.php" style="text-decoration: none;"><li>Crop details</li></a>
            <a href="farmer_ton1.php" style="text-decoration: none;"><li>Tonnage details</li></a>
            <a href="farmer_bill1.php" style="text-decoration: none;"><li>Bill details</li></a>
        </ul> -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>