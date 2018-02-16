<?php
include 'auth.php';
include 'loader.php';
include 'nav.php';
?>
<title>Profile WDC</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/courses.css">
<div class="well well-lg" id="">
  <center><h1><i class="fa fa-gear">  </i>  Profile Setting</h1></center>
</div>


    <?php  if (isset($_SESSION['username'])) : ?>
<div class="row">
<div class="col-3">

	<center>
	<img src="img/proimg.gif" class="imgpro" alt="">
	<div class="line"></div>
	<button class="btn btn-primary"><i class="fa fa-upload ">  </i>  Upload</button>
</center>

</div>
<div class="col-8">
	 <form method="post" action=".php" class="form">
   
    <div>
  <h1><i class="fa fa-setting fa-2x"></i>Profile Setting</h1>
    </div><hr>
     <label class="sr-only" for="inlineFormInputGroup"> New Username</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-user fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Change Username" name="username">
  </div>
  <br>
  	<label class="sr-only" for="inlineFormInputGroup"> Change Email Address</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-envelope fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Change Email" name="email" >
  </div>
  <br>
  	<label class="sr-only" for="inlineFormInputGroup">New Password</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-lock fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="New Password" name="password_1" >
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
<?php  endif ?>
<?php 
include 'footer.php';
?>
<style>
.col-3{
	box-shadow: 0px 1px 50px 0px gray;
}
	.imgpro{
		width: 100%;
		background-color: white;
		border: ;
		margin: px;
		 font-family: 'Quicksand', sans-serif;
		 box-shadow: 
	}
	.line{
		background-color:  red;
		color: red;
	}
	.btn {
  background-color: ;
  padding: 15px;
  margin-right: 0px;
  color: white;
  border-radius: 0px;
  border: 0px solid;
  font-size: 24px;
}
.btn:hover{
	background-color: red;
}
.btn a{
  color: white;
  text-decoration: none;
}
.btn a:hover{
  text-decoration: none;
  color: white;
}
	.col-3{
		
		
	background: 
    /* top, transparent red */ 
     white;
	opacity:;
	background-repeat: no-repeat;
	color: white;
	margin: 30px;
	background-size: cover;
  border-radius: 20px

	}
	.col-8{
		background-color: white;
	}
	.form{
		width: 100%;
	}
</style>