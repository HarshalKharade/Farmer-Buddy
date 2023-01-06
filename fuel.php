<?php

	$con=new mysqli("localhost","root","","Farmer_Buddy");
	if(!$con)
		echo("Error to connect Database");


	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$ocode=$_POST['o_code'];
		$quantity=$_POST['quantity'];
		$date=$_POST['date'];
		$rate=$_POST['rate'];


		//  create table tbl_fuel(fno int primary key,ocode int references tbl_owner(ocode)
		// 						on delete cascade on update set null,Date date,fuel_lit int,rate int,amt int); 

		$q1="select * from tbl_fuel";
		$result=$con->query($q1);
		$fno=mysqli_num_rows($result);
		$fid=$fno+1;
		$amt=($quantity * $rate);
		$sql = "INSERT INTO tbl_fuel VALUES ('$fid','$ocode','$date', '$quantity','$rate','$amt')";
		$res=$con->query($sql)or die("Query Error");
		if($res)
				// header("location:fuel.html");
			echo "<script>alert('Record Added successfully')</script>";
		mysqli_close($con);
	}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Farmer Buddy</title>
        <link rel= "Shortout icon" type="image" href='farm1.png' />
        <link rel="stylesheet" href="style.css">      <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <br>
        <br>
        <br>
        <br>
		<!-- create table tbl_fuel(fno int primary key,ocode int references tbl_owner(ocode)
						on delete cascade on update set null,Date date,fuel_lit int,rate int,amt int); -->

            <div class="container">
               <form  method="post" class="form-horizontal" role="form"  action="fuel.php">
                <h2>Fuel detials</h2>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date*</label>
                    <div class="col-sm-9">
                        <input type="date" id="Date"  name="date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Owner_Code</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Enter Your  Code" name="o_code" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Fual_Quantity</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Enter Fuel quantity" name="quantity" required class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Rate</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Enter Rate" name="rate" required class="form-control" required autofocus>
                    </div>
                </div>
			       
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