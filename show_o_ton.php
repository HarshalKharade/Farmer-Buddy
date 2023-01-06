<?php
  session_start();
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

    <!-- Bootstrap CSS -->
    <script src="index.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <style>
      
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-left: 320px;
  align:center;

  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
h2{
    margin-left:320px;
    color:black;
}
.Div1{
    margin-top: 20px;
    min-height: 120px;
    background-color: rgba(245, 229, 229, 0.445);
    padding-left:20px;
    font-size: large;
}
.div h4{
    align: center;
    }
</style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <a class="nav-link text-white" href="owner_view.php">HOME </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="about2.php">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="func_logout()" >LOG OUT</a>
                  </li>
                </ul>
              </div>
            </nav>
           </header>
           <br>
           <div style="overflow-x:auto;">
      <?php

      $con=new mysqli("localhost","root","","Farmer_Buddy");
      //$con= mysqli_connect("localhost","root","","Farmer_Buddy");
      if(!$con)
          echo("Error to connect Database");
     // $code=$_POST['f_code'];
     // $name=$_POST['fname'];
      $from=$_POST['from_date'];
      $to=$_POST['to_date'];    
      
      $code=$_SESSION['owner_code'];
      $result = mysqli_query($con, "select oname from tbl_owner where ocode ='$code'");
      $row = mysqli_fetch_assoc($result);
      $name = $row['oname'];
      
      echo("<div class=container>");
echo("<div class=row>");
echo("<div class=col-md-12>");
    echo("<div class=Div1><h4><b># Owner Sugarcane Details.</b></h4> <br>");
    echo("Owner Code: $code<br>");
    echo("Owner name: $name");
    echo(" </div> </div></div>");
   
    // create table tbl_owner_sucal(ono int primary key,ocode int references tbl_owner(ocode) 
    // on delete cascade on update set null,Date date,fname text,Vehi_no text,ton int,
    // trans_rate int,labour_rate int,t_total_amt int,l_total_amt int);

$q1="select * from tbl_owner_sucal where ocode='$code'  and Date between '$from' and '$to'";

$res=$con->query($q1);

    $a=0;
    $b=0;
    $r=0;
    $t=0;
    $l=0;
   echo("<br>");
    echo("<h2>Tonage details</h2>");
       if($res)
        {
          echo("<table id=customers>");
          echo("<tr><th>Sr no.</th><th>Date</th><th>Farmer name</th><th>Ton</th></tr>");
            while ($row=$res->fetch_assoc()) 
	              {
                    
                    $b=$b+$row['ton'];
                   
                     echo("<tr><td>$row[ono]</td><td>$row[Date]</td><td>$row[fname]</td><td>$row[ton]</td></tr>");
                }
                // create table tbl_owner_sucal(ono int primary key,ocode int references tbl_owner(ocode) 
								// on delete cascade on update set null,Date date,fname text,Vehi_no text,ton int);

              
    echo("</table>");
    
  }
  
  
  $t=250;
  $l=300;
  $a=$b * $t;
  $r=$b * $l;
    echo("<h2> Calculation</h2>");
    echo("<table id=customers>");
    echo("<tr><th>Total ton </th><th>Trans_Rate</th><th>Labour_Rate</th><th>Total Trans_amt</th><th>Total Labour_amt</th></tr>");
    echo("<tr><td>".$b."</td><td>".$t."</td><td>".$l."</td><td>".$a."</td><td>".$r."</td></tr>");
    echo("</table>");
    echo("</div>");
      ?>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>