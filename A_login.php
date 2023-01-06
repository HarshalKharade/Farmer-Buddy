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
        <!-- <link rel= "Shortout icon" type="image" href='farm1.png' /> -->
        <link rel="stylesheet" href="style.css">
        
       <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<style>
        * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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
            <form  method="post" action="admin_edit.php">
                    <h2>Admin Login...</h2>
                    <b>Username</b>
                    <input type="text" placeholder="Enter Username" name="uname" required id="user"><br>
                    <br>
                    <b>Password</b>
                    <input type="password" placeholder="Enter Password" name="psw" required id="pass"><br>
                   <br>
                        <div style="padding-left: 130px;"> 
                         <button class="btn btn-primary" value="click here" name="b1" type="Submit">Submit</button><br>             
                				</div>

            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>