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
$bno=$_POST['bno'];
$ton=$_POST['ton'];
$rate=$_POST['rate'];
$oname=$_POST['o_name'];
$date=$_POST['date'];

// create table tbl_farmer_bill(bno int primary key,fcode int references tbl_farmer(fcode) on delete cascade on
// 								update set null,Date date,oname text,fname text,ton int,rate int,total_amt int);

$sql = "UPDATE tbl_farmer_bill SET ton='$ton',rate='$rate',oname='$oname', Date='$date',total_amt=('$ton' * '$rate')  WHERE fcode='$code' and bno='$bno' ";

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