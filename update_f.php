<html lang="en">
    <head>
        <title>Farmer Buddy</title>
        <link rel= "Shortout icon" type="image" href='farm1.png' />
        <link rel="stylesheet" href="style.css">
		<style>
		h3{
			padding-left: 60px;
			padding-top: 40px;
		}
		</style>
    </head>
    <body>

       <header>
       <b style="font-size: 300%;" class="title">Farmer Buddy</b>
        <nav style="float: right; font-size: 25px; " class="topnav">
            <a href="admin_edit.php">HOME</a>
		
            <a href="about.php">ABOUT US</a>
           
       </nav>
       </header>
    
<p>	
<?php
$con=new mysqli("localhost","root", "","Farmer_Buddy");
    if(!$con)
    {
        echo("Error to connect Database");    
    }
$code=$_POST['f_code'];
$name=$_POST['fname'];
$mno=$_POST['mno'];
$address=$_POST['area'];
$bankname=$_POST['bankname'];
$proof=$_POST['proof'];
$date=$_POST['date'];
$accno=$_POST['accno'];
$ifsc=$_POST['ifsc'];

//create table tbl_farmer(fcode int primary key,fname text,Date date,
//						mno bigint,email text,password text,area text,proof text,bankname text,accno bigint,ifsccode text);


$sql = "UPDATE tbl_farmer SET fname='$name',Date='$date', mno='$mno',area='$address',proof='$proof',accno='$accno',ifsccode='$ifsc',bankname='$bankname'  WHERE fcode='$code'";

if($con->query($sql) === TRUE)
	{
  echo "Record updated successfully";
}
 else
	 {
  echo "Error updating record: " . $con->error;
}

$con->close();



?>

</p>
	 </body>
	</html>