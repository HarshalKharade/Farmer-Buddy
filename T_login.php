<?php
    session_start();
    if(isset($_SESSION['msg']))
    {
        $msg = $_SESSION['msg'];
        session_destroy();
        echo "<script> alert('$msg') </script>";
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Farmer Buddy</title>
        <link rel= "Shortout icon" type="image" href='farm1.png' />
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
}
        .container
{
  width:500px;
  
}
.submit1
{
  /* margin-left:50%; */
  margin-right:50%;
  text-align:right;
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
              <a class="nav-link text-white" href="index.html">HOME </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="about.html">ABOUT US</a>
            </li>
          </ul>
        </div>
      </nav>
        </header>
        <br>
        <br>
        <br>
        <br>

      
        <div class="container">
           <form  method="post" class="form-horizontal" role="form" action="owner_view.php">
                <h2>Transporter Login...</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Owner_Code</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Enter Owner Code" name="o_code" class="form-control" required autofocus>
                    </div>
                </div>
              <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" name="password" required class="form-control">
                    </div>
                </div>
              <div class="cen" style="padding-left: 130px;">  
                <button class="btn btn-primary" value="click here" name="b1" type="Submit">Submit</button><br>
                    <a href="mail2.php">Forgot Password?</a>                
                     </div>

            </form>
        </div>
    </body>
</html>