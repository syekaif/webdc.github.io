<?php 
include 'server.php';
include 'links.php';
include 'nav.php';
?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Sign Up</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/courses.css">
<div class="well well-lg" id="">
  <center><h1><i class="fa fa-address-card">  </i>  Sign Up</h1></center>
</div>
<body>
   <div class="container">
  
  
  <div class="row justify-content-center">

    <form method="post" action="register.php" class="form">
    <?php include('errors.php'); ?>
    <div>
  <h1>Register</h1>
    </div><hr>
     <label class="sr-only" for="inlineFormInputGroup">Username</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-user fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" name="username" value="<?php echo $username; ?>">
  </div>
  <br>
  	<label class="sr-only" for="inlineFormInputGroup">Email Address</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-envelope fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email" name="email" value="<?php echo $email; ?>">
  </div>
  <br>
  	<label class="sr-only" for="inlineFormInputGroup"> Password</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-lock fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Password" name="password_1" >
  </div>
  <br>
  <label class="sr-only" for="inlineFormInputGroup">Confirm Password</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-lock fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Confirm Password" name="password_2" >
  </div>
  <br>

  	<div class="input-group">
  	  <button type="submit" class="btn btn-secondary" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</div>
 <br>

 <hr>

<?php 
include 'footer.php';
?>


<style>
  @media (min-width: 320px) and  (max-width: 575px) {
   .form{
    width: 100%;
   }
   

  }

</style>
