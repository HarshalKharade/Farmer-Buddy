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
$code=$_POST['o_code'];
$bno=$_POST['bno'];
$ton=$_POST['ton'];
$rate=$_POST['rate'];
$fname=$_POST['fname'];
$date=$_POST['date'];

// create table tbl_owner_bill(bno int primary key,ocode int references tbl_owner(ocode) 
// 							on delete cascade on update set null,Date date,oname text,fname text,ton int,
// 							trans_rate int,labour_rate int,t_total_amt int,l_total_amt int,grand_total int);
//  								update set null,Date date,oname text,fname text,ton int,rate int,total_amt int);

$sql = "UPDATE tbl_owner_bill SET ton='$ton',rate='$rate',fname='$fname', Date='$date',total_amt=('$ton' * '$rate')  WHERE ocode='$code' and bno='$bno' ";

if($con->query($sql) === FALSE)
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