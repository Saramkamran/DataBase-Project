<?php

session_start();

if(!isset($_SESSION['cnic']))
{
header('location:login.php');

?>
<script>
    alert('You are logged out');
</script>
<?php
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://kit.fontawesome.com/da7543ec65.js" crossorigin="anonymous"></script>
   
    <?php
  include 'link.php';
  ?>

<!-- JQuery CDN -->
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

  
</head>


    

</head>
<body>
<?php
$_SESSION['cnic'];
?>
<div class="topnav">
  <a class="active" href="#home">Admin Panel</a>
  <a href="logout.php">Logout</a>
 </div>


<div class="io containe9r-fluid jumbotron text-center bg">
    <h1>FRDMS DATABASE</h1>
</div>


<div class="container justify-content-center">  


  <form  action="" method="post">

    <div class="form-row justify-content-center" >
            <div class="form-group col-md-5">
        <label for="inputtext">Phone Number</label>
        <input type="text" class="form-control" id="inputtext" placeholder="Phone Number" name="Number" required>
      </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-4">
        <label for="inputState">Police Station</label>
        <select id="inputState" class="form-control" name="Police_Station" >
          <option>Gulberg Station</option>
          <option>Satukatla Station</option>
          <option>Green Town Station</option>
          <option>Johar Town Station</option>
        </select>
      </div>

      <div class="form-group col-md-3">
            <label for="inputDate" class="control-label">Date & Time:</label>
                <div class='input-group date ' >
                <input type="datetime-local" id="date-time"
                  name="date_time" value="current" class="form-control" required>
                </div>
        </div>    

      <div class="b col-md-12">
        <button type="submit" name="post" class="btn btn btn-lg col-md-12 col-sm-12 col-xs-12 btn-success" >Submit</button>
      </div>
     
     </div>

  </form>   
 
 </div>




<!-- 
<div class="container justify-content-center">  

 <h1>Search by Date & Time</h1>
  <form  action="" method="post">

    <div class="form-row justify-content-center" >
             
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputDate" class="control-label">Date & Time:</label>
                <div class='input-group date'>
                <input type="datetime-local" id="date-time"
                  name="date_time" value="current" class="form-control">
                </div>
        </div>    

      <div class="b col-md-12">
        <button type="submit" name="post" class="btn btn btn-lg col-md-4 col-sm-12 col-xs-12 btn-success" >Search</button>
      </div>
     
     </div>

  </form>   
 
</div>

  -->



<table id="t3" class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Number</th>
        <th>City</th>
        <th>Police Station</th>
        <th>Location</th>
        <th>Incident Discription</th>
        <th>Date/Time</th>
    </tr>
  </thead>

  <tbody>

  <?php

       include 'connection.php';

       if(isset($_POST['post'])){

       $date_time = $_POST['date_time'];
       $pStation = $_POST['Police_Station'];
       $number = $_POST['Number'];


       $selectquery1 = "select * from policestation where Date_Time >='$date_time' or station='$pStation' or Number='$number' ";
      
       

       $query1 = mysqli_query($con,$selectquery1); 
       
       

      
       while($now=mysqli_fetch_assoc($query1)){
  
    ?> 

<tr>
    <td><?php echo $now['id']; ?></td>
    <td><?php echo $now['Name']; ?></td>
    <td><?php echo $now['Number']; ?></td>
    <td><?php echo $now['city']; ?></td>
    <td><?php echo $now['station']; ?></td>
    <td><?php echo $now['location']; ?></td>
    <td><?php echo $now['discription']; ?></td>
    <td><?php echo $now['Date_Time']; ?></td>
</tr>

<?php

 }

}


?>
   
</tbody>

</table>
</div>

<div class="asd col-md-12">
<button id="csv" class="btn btn-lg col-md-12 col-sm-12 col-xs-12 btn-danger">Download with CSV</button></p>
</div>

 
<!-- Script tag javascript for links of plugin -->

<script src="https://rawcdn.githack.com/FuriosoJack/TableHTMLExport/v2.0.0/src/tableHTMLExport.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
<script src="src/tableHTMLExport.js"></script>
<script>
  $('#json').on('click',function(){
    $("#t3").tableHTMLExport({type:'json',filename:'AdminDatabase.json'});
  })
  $('#csv').on('click',function(){
    $("#t3").tableHTMLExport({type:'csv',filename:'AdminDatabase.csv'});
  })
  $('#pdf').on('click',function(){
    $("#t3").tableHTMLExport({type:'pdf',filename:'AdminDatabase.pdf'});
  })
  </script>
</script>
</body>
</html>