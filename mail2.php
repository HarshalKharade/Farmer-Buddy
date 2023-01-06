<?php
 session_start();
 
$con=new mysqli("localhost","root","","Farmer_Buddy");
if(!$con)
    echo("Error to connect Database");

if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $email=$_POST['email'];


        $q="select * from tbl_owner where email='$email'";
        $res=$con->query($q) or die("Qurey Error");
        $emailcount=mysqli_num_rows($res);
        if($emailcount)
        {
            $userdata=mysqli_fetch_array($res);
            $user=$userdata['oname'];
            $code=$userdata['ocode'];
            $_SESSION['code']=$code;
            $subject="Email Activation";
            $body="hi '$user' click here to Update your password  http://localhost/My%20Project/recovery2.php Your code:'$code'";
            $sender_mail="From: surayakantdarade123@gmail.com";

            if(mail($email,$subject,$body,$sender_mail))
            {
                // $_SESSION['msg']="Check your email to Activate your password ";
                header('location: T_login.php');
            }
            else
            {
                echo"Email sending faild";
            }
        }

    }

?>
<!DOCTYPE html>
<html>
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

        <style>
        .padding{
            margin-left:400px;
            margin-right:400px;
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
    
           <div class="container">
           <form  method="post" class="form-horizontal" role="form">
            <h3 ><b>Recover Password from Email</b></h3>
            <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Enter_Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Enter your email" class="form-control" name= "email" required>
                    </div>
                </div>
            <div class="cen" style="padding-left: 130px;">  
                <button class="btn btn-primary" value="click here" name="b1" type="Submit">Submit</button><br>
                <a href="mail1.php">Forgot Password?</a>                
           </div>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>