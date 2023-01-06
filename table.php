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
            <b style="font-size: 300%;" class="title">Farmer Buddy</b>
            <nav style="float: right; font-size: 25px; " class="topnav">
                <a href="index.html">HOME</a>
				 
                <a href="about.html">ABOUT US</a>
                
           </nav>
           </header>
           <br>
           <div style="overflow-x:auto;">
      <?php
      echo("<div class=container>");
echo("<div class=row>");
echo("<div class=col-md-12>");
    echo("<div class=Div1><h4><b># Farmer Bill Report.</b></h4> <br>");
    echo("Farmer Code:<br>");
    echo("Farmer name:");
    echo(" </div> </div></div>");
   

    
// create table tbl_farmer_bill(bno int primary key,fcode int references tbl_farmer(fcode) on delete cascade on
// update set null,Date date,oname text,fname text,ton int,rate int,total_amt int);
    echo("<br>");
    echo("<h2>Bill details</h2>");
    echo("<table id=customers>");
    echo("<tr><th>Bill no.</th><th>Date</th><th>Owner name</th><th>Ton</th></tr>");
    echo("<tr><td>1</td><td>2020-22-12</td><td>Germany</td><td>40</td></tr>");
    echo("</table>");

    echo("<h2>Bill Calculation</h2>");
    echo("<table id=customers>");
    echo("<tr><th>Total Ton</th><th>Rate</th><th>Total amt</th><th>Advance</th><th>Remaining amt</th></tr>");
    echo("<tr><td>50</td><td>2000</td><td>100000</td><td>40000</td><td>60000</tr>");
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