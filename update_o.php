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
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
$code=$_POST['o_code'];
$name=$_POST['oname'];
$vehi=$_POST['number'];
$mno=$_POST['mno'];
$advance=$_POST['advance'];
$address=$_POST['address'];
$bankname=$_POST['bankname'];
$proof=$_POST['proof'];
$date=$_POST['date'];
$accno=$_POST['accno'];
$ifsc=$_POST['ifsc'];


// create table tbl_owner(ocode int primary key,oname text,vehicleno text,
// 						Date date,mno bigint,area text,advance int,
// 						proof text,bank_detials text);
$sql = "UPDATE tbl_owner SET oname='$name',vehicleno='$vehi',Date='$date', mno='$mno',advance='$advance',,area='$address',proof='$proof',accno='$accno',ifsccode='$ifsc',bankname='$bankname'  WHERE ocode='$code'";

if($con->query($sql) === TRUE)
	{
    echo "<script>alert('Record update successfully')</script>";
}
 else
	 {
  echo "Error updating record: " . $con->error;
}

$con->close();
    }


?>

</p>
	 </body>
	</html>