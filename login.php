<?php 
include 'server.php';
include 'links.php';
include 'nav.php';
?>


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sign In</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/courses.css">
<div class="well well-lg" id="">
  <center><h1><i class="fa fa-sign-in">  </i>  Sign In</h1></center>
</div>

  <div class="container">
  
  
  <div class="row justify-content-center">

    <form method="post" action="login.php" class="form">
    <?php include('errors.php'); ?>
    <div>
      <h1>Login</h1>
    </div><hr>
     <label class="sr-only" for="inlineFormInputGroup">Username</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-user fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" name="username">
  </div>
  <br>

       <label class="sr-only" for="inlineFormInputGroup">Password</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-lock fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Password" name="password">
  </div>
  <br>
   
    <div class="input-group">
      <button type="submit" class="btn btn-secondary" name="login_user">Login</button>
    </div>
    <hr>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</div>
</div>
<script src="js/ani.js"></script>
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