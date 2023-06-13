<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FRDMS</title>
  
  <?php
  include 'link.php';
  ?>


  <script>
var dt = new Date();
document.getElementById('date-time').innerHTML=dt;
</script>
</head>


<body>

  <section class="Header">  

<!--header made using jumbotron-->                                          
  <div class="p jumbotron text-center">
    <h1>FRDMS</h1>
    <p>First Responders Database Managment System</p>
  </div>
  
</section>




<div class="container justify-content-center">  


  <form  action="" method="post">

    <div class="form-row justify-content-center" >
      <div class="form-group col-md-3">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="Name">
      </div>
      <div class="form-group col-md-3">
        <label for="inputtext">Phone Number</label>
        <input type="text" class="form-control" id="inputtext" placeholder="Phone Number" name="Number">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Location</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Location Of Incident" name="location">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Incident Discription</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Discription Of Incident" name="Discription">
    </div>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputCity">City</label>
        <select id="inputState" class="form-control" name="City">
          <option selected>Lahore</option>
         
          </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState">Police Station</label>
        <select id="inputState" class="form-control" name="Police_Station">
          <option selected>Gulberg Station</option>
          <option>Satukatla Station</option>
          <option>Green Town Station</option>
          <option>Johar Town Station</option>
        </select>
      </div>

       <div class="form-group col-md-3">
            <label for="inputDate" class="control-label">Date & Time:</label>
                <div class='input-group date ' >
                <input type="datetime-local" id="date-time"
                  name="date_time" value="current" class="form-control">
                </div>
        </div>    

      <div class="b col-md-12">
        <button type="submit" name="post" class="btn btn btn-lg col-md-12 col-sm-12 col-xs-12 btn-success" >Submit</button>
      </div>
     
     </div>

  </form>   
 
 </div>

 

 
 <div class="p container-fluid jumbotron text-center">
    <h1>DISPLAY DATABASE</h1>
    <div class="k container justify-content-center">
        <a href="display.php"><button class="btn btn btn-lg col-md-12 col-sm-12 col-xs-12 btn-info">Display</button></a>
      </div>
  </div>
 


 


  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php

include 'connection.php';

if(isset($_POST['post']))
{

  $name = $_POST['Name'];
  $number = $_POST['Number'];
  $location = $_POST['location'];
  $Discription = $_POST['Discription'];
  $city = $_POST['City'];
  $pStation = $_POST['Police_Station'];
  $Date_time = $_POST['date_time'];

$insertquery = "insert into PoliceStation (Name, Number, city, station, location, discription, Date_Time) 
Values ('$name','$number','$city','$pStation','$location','$Discription','$Date_time') ";

mysqli_query($con,$insertquery);

}


?>

