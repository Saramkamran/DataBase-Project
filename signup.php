<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    



<section class="g vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
              <form action="" method="post">
              <div class="form-outline form-white mb-4">
                <input name="cnic" type="text" id="typeEmailX" class="form-control form-control-lg" required >
                <label class="form-label" for="typeEmailX">Cnic Number</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input name="password1" type="password" id="typePasswordX" class="form-control form-control-lg" required >
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input name="password2" type="password" id="typePasswordX" class="form-control form-control-lg" required >
                <label class="form-label" for="typePasswordX">Confirm Password</label>
              </div>
              
              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="post">Login</button>

              </form>

              

              
            

            </div>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['post']))
{

  $cnic = $_POST['cnic'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  



$pass = password_hash($password1, PASSWORD_BCRYPT);
$cpass = password_hash($password2, PASSWORD_BCRYPT);


$cnicquery = "select * from signup where cnic='$cnic'";
$query = mysqli_query($con, $cnicquery);

$cnic_count = mysqli_num_rows($query);


if($cnic_count>0)
{
    ?>
    <script>
        alert('Cnic already exits');
</script>
    <?php   
}else{
    if($password1 === $password2)
    {
        $insertquery = "insert into signup (cnic, passwords,passwords2) 
        Values ('$cnic','$pass','$cpass') ";
         mysqli_query($con,$insertquery);

         header('location:login.php');
    }
    else{
        ?>
        <script>
            alert('Confirm Password not correct');
    </script>
        <?php   
    }
}

}

?>




