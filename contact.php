<?php
include 'auth.php';
include 'loader.php';
include 'nav.php';
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/contact.css">

<link rel="stylesheet" href="css/courses.css">
<div class="well well-lg" id="courses.php">
  <center><h1><i class="fa fa-phone">  </i>  Contact Us</h1></center>
</div>


<div class="container" id="top">
<div class="row">
<div class="col-4">

    <div>
    <h2>Get In Touch</h2>
    </div>
    <div class="container">
    <i class="fa fa-facebook-square fa-2x"></i>
        <i class="fa fa-twitter-square fa-2x"></i>
        <i class="fa fa-google-plus-square fa-2x"></i>
        <i class="fa fa-linkedin-square fa-2x"></i>
        <i class="fa fa-youtube-square fa-2x"></i><br>
        <div>
            <br>
            <hr>
        <h5>Email</h5>
            <h4>webtutoricontact@gmail.com</h4>
            <br>
           <h5>Phone</h5>   
            <h4>91+ 9731685576</h4>
            <hr>
            <br>
            
        </div>
    </div>
    </div>
    <div class="col-8">
    
   <main>
          <form method="post" action="contactform.php" class="form">
  
    <div>
  <h1>Contact Us</h1>
    </div><hr>
     <label class="sr-only" for="inlineFormInputGroup">Username</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-user fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Fullname" name="name">
  </div>
  <br>
    <label class="sr-only" for="inlineFormInputGroup">Email Address</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-envelope fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email" name="mail">
  </div>
  <br>
    <label class="sr-only" for="inlineFormInputGroup"> Phone Number</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-lock fa-2x"></i></div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Subject" name="subject" >
  </div>
  <br>
  <label class="sr-only" for="inlineFormInputGroup">Message</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-lock fa-2x"></i></div>
    <textarea  type="text" class="form-control" id="inlineFormInputGroup" placeholder=" Tell Us" name="message" ></textarea>
  </div>
  <br>

    <div class="input-group">
      <button type="submit" class="btn btn-secondary" name="submit">Send</button>
    </div>
    
  </form>
    </main>
    </div>
</div>
</div>



<?php 
include 'footer.php';
?>

<style>
  .col-8 .form{
    width: 100%;
  }
</style>