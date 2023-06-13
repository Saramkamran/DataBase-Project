<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FRDMS</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">


  <script>
var dt = new Date();
document.getElementById('date-time').innerHTML=dt;
</script>
</head>


<body>

  
  <section class="Header">  

<!--header made using jumbotron-->                                          
  <div style="background-image: url(/lights.webp)" class="p jumbotron text-center">
    <h1 style="color: white;">FRDMS</h1>
    <p style="color: white;">First Responders Database Managment System</p>
  </div>
  
</section>



<div class="container justify-content-center ">  


  

  <form action="" method="post">
    <div class="form-row justify-content-center" >
      <div class="form-group col-md-3">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="name">
      </div>
      <div class="form-group col-md-3">
        <label for="inputtext">Phone Number</label>
        <input type="text" class="form-control" id="inputtext" placeholder="Phone Number" name="number">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Location</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Location Of Incident" name="location">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Incident Discription</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Discription Of Incident" name="discription">
    </div>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputCity">City</label>
        <select id="inputState" class="form-control" name="city">
          <option selected>Lahore</option>
         
          </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState">Hospital</label>
        <select id="inputState" class="form-control" name="hospital">
          <option selected>Jinnah Hospital</option>
          <option>Evercare Hospital</option>
          <option>Shukat khanum Memorial</option>
          <option>Doctor Hospital</option>
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






<div class="a container-fluid jumbotron text-center bg">
    <h1 style="color: white;">DISPLAY DATABASE</h1>
    <div class="k container justify-content-center">
        <a href="display2.php"><button class="btn btn btn-lg col-md-12 col-sm-12 col-xs-12 btn-info">Display</button></a>
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

  $name = $_POST['name'];
  $number = $_POST['number'];
  $location = $_POST['location'];
  $Discription = $_POST['discription'];
  $city = $_POST['city'];
  $hospital = $_POST['hospital'];
  $Date_time = $_POST['date_time'];


$inquery = "insert into hospital (name, number, city, hospital, location, discription, Date_Time) 
Values ('$name','$number','$city','$hospital','$location','$Discription','$Date_time') ";

mysqli_query($con,$inquery);

}


?>