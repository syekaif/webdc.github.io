<?php 
include 'links.php';
?>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: #FFFFFF;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" >  </a>
   

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
        
     <li class="nav-item ">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
      <li class="nav-item ">
        <a class="nav-link" href="courses.php">Courses </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     

        <div class="input-group mb-2 mr-sm-0 mb-sm-0" >
           <input class="form-control mr-sm-0" type="text" placeholder="Search" class="search" id="search">
    <div class="input-group-addon"><i class="fa fa-search"></i></div>


  </div>
 

<?php  if (isset($_SESSION['username'])) :
?>
     <ul class="navbar-nav ml-4 mr-2">
 

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/more.gif" class="more"   alt=""></a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">HTML <img src="img/html.gif" alt=""></a>
      <a class="dropdown-item" href="#">CSS <img src="img/css.gif" alt=""></a>
      <a class="dropdown-item" href="#">JS<img src="img/js.gif" alt=""></a>
      <a class="dropdown-item" href="#"> Jquery<img src="img/jq.gif" alt=""></a>
      <a class="dropdown-item" href="#">Angular<img src="img/angular.gif" alt=""></a>
     <a class="dropdown-item" href="#">React<img src="img/react.gif" alt=""></a>
      <a class="dropdown-item" href="#">PHP<img src="img/php.gif" alt=""></a>
      <a class="dropdown-item" href="#">NodeJS<img src="img/node.gif" alt=""></a>
  
  </li>



   <li class="nav-item dropdown drop2">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?> </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="profile.php">Profile <i class="fa fa-user"></i></a>
      <a class="dropdown-item" href="#">Subscribe <i class="fa fa-youtube"></i></a>
      
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="logout.php">Logout<i class="fa fa-sign-out"></i></a>
    </div>
  </li>
</div>
<?php endif ?>
<?php  if (!isset($_SESSION['username'])) : ?>

   <button class="btn btn-warning  ml-4" id="btnwarn"><a href="login.php">Sign In</a></button>

  <button class="btn btn-warning  ml-2" id="btnwarn"> <a href="register.php" id="regisbtn">Sign Up</a></button>


</ul>
<?php endif ?>
    </form>

  </div>
</nav>
<style>
  @media (min-width: 576px) and (max-width: 767px) {
   .navbar li{
    text-align: center;
   }

   #search{
   margin-left: 60px;
   }
   .navbar .btn-warning{
    width: 300px;
    margin:10px;
   float: right;
   }


  }

</style>