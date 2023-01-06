<!DOCTYPE html>
<html>
    <head>
        <title>Farmer Buddy</title>
        <link rel= "Shortout icon" type="image" href='farm1.png' />
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
           <br>
           <br>


          
               <div class="container">
           <form  method="post" class="form-horizontal" role="form"  action="show_o_bill.php">
                    <h3>Bill Details</h3>
                    <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">From_Date*</label>
                    <div class="col-sm-9">
                        <input type="date" id="Date"  name="from_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">To_Date*</label>
                    <div class="col-sm-9">
                        <input type="date" id="Date"  name="to_date" class="form-control" required>
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