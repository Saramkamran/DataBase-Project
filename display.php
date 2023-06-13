<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>

    <?php

    include 'link.php';
    
    ?>
    
    <!-- JQuery CDN -->
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    

</head>
<body>
    
<div class="a container-fluid jumbotron text-center bg">
    <h1>FRDMS DATABASE</h1>
    
</div>


<div class="container-fluid table-responsive">
<table id="t1" class="table table-striped table-hover table-bordered">
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

       $selectquery = " select * from policestation ";

       $query = mysqli_query($con,$selectquery); 

       while($now=mysqli_fetch_assoc($query))
      
     {
  
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


?>

   
  </tbody>

</table>
</div>
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
    $("#t1").tableHTMLExport({type:'json',filename:'PoliceDatabase.json'});
  })
  $('#csv').on('click',function(){
    $("#t1").tableHTMLExport({type:'csv',filename:'PoliceDatabase.csv'});
  })
  $('#pdf').on('click',function(){
    $("#t1").tableHTMLExport({type:'pdf',filename:'PoliceDatabase.pdf'});
  })
  </script>
  
</script>


</body>
</html>