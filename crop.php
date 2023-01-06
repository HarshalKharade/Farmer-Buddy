<?php
	
	session_start();
	if(!isset($_SESSION['admin']))
  	{
   		session_destroy();
    	echo "<script> alert('Admin Not Logged In') </script>";
    	header("location: A_login.php");
  	}
  	

	if ($_SERVER['REQUEST_METHOD'] == "POST") 
   {
    $con=new mysqli("localhost","root","","Farmer_Buddy");
    if(!$con)
     { echo("Error to connect Database");}
		$fcode=$_POST['f_code'];
		$fname=$_POST['fname'];
		$date=$_POST['date'];
		$duration=$_POST['r1'];
		$variety=$_POST['r2'];

		// create table tbl_crop(cno int primary key,fcode int references tbl_farmer(fcode) on delete cascade 
		// on update set null,fname text,Date date,duration text,variety text);								


		$q1="select * from tbl_crop";
		$result=$con->query($q1);
		$fno=mysqli_num_rows($result);
		$cno=$fno+1;

		$sql = "INSERT INTO tbl_crop VALUES ('$cno','$fcode','$fname','$date','$duration','$variety')";
		$res=$con->query($sql);
		if($res)
		{
		 //    echo"";
			// header("location:crop.html");
			echo "<script>alert('Record added successfully')</script>";
		}
			mysqli_close($con);
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
h2{
    text-align: center;
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
        <div class="container">
           <form  method="post" class="form-horizontal" role="form" action="crop.php">
             <h2>Crop detials</h2>
             <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date*</label>
                    <div class="col-sm-9">
                        <input type="date" id="Date"  name="date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Farmer_Code</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Enter farmer Code" name="f_code" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Farmer_Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="farmer name" name="fname" class="form-control" required autofocus>
                    </div>
                </div>
                 <b>Sugarcane Durarion</b><br>
                 <input type="radio" name="r1" value="18 months(New)">18 months(New)<br> 
                 <input type="radio" name="r1" value="15 months(Old)">15 months(Old)<br>  
                <br>
                <b>Sugarcane variety</b><br>
                <input type="radio" name="r2" value="Co 0265(Phule)">Co 0265(Phule)<br> 
                <input type="radio" name="r2" value="Co 86032(Nira)">Co 86032(Nira)<br> 
                <input type="radio" name="r2" value="Co 8014(Mahalaxmi)">Co 8014(Mahalaxmi)<br>  
                <input type="radio" name="r2" value="Co 7219(Sanjeevni)">Co 7219(Sanjeevni)<br> 
                <div style="padding-left: 120px;"> 
                         <button class="btn btn-primary" value="click here" name="b1" type="Submit">Submit</button>
                         <button class="btn btn-primary" value="click here" name="b1" type="reset">Reset</button>          
              	</div>

           </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     </body>
</html>