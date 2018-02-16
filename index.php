<?php
include 'auth.php';
include 'loader.php';
include 'nav.php';
?>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>WDC Welcomes U</title>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/style.css">


    <!-- notification message -->



	<div class="jumbotron text-center" style="background-color: #ED1C38;" >
  <h1 class="display-1">Welcome TO WDC</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-secondary btn-lg" href="#" role="button">Learn more</a>
  </p>

</div>

  <div class="row">
    <div class="col-4">
    <div class="media">
  <i class="fa fa-facebook fa-4x align-self-center mr-3"></i>
  <div class="media-body">
    <h5 class="mt-0">Center-aligned media</h5>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce </p>
  </div>
</div>
</div>
    <div class="col-4">
    <div class="media">
  <i class="fa fa-twitter fa-4x align-self-center mr-3"></i>
  <div class="media-body">
    <h5 class="mt-0">Center-aligned media</h5>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce </p>
  </div>
</div>
</div>
   <div class="col-4">
    <div class="media">
  <i class="fa fa-instagram fa-4x align-self-center mr-3"></i>
  <div class="media-body">
    <h5 class="mt-0">Center-aligned media</h5>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce </p>
  </div>
</div>
</div>
</div>
<br>
<br>
<hr>
<br>
<link rel="stylesheet" href="css/courses.css">
<div class="well well-lg" id="indexc">
  <center><h1><i class="fa fa-mortar-board">  </i>  Courses On</h1></center>
</div>


<div class="container">
  <div class="row" id="co">
    <div class="col" id="fe">
      <br>
      <h5>Front End</h5>
      <br>
    </div>
    <div class="col" id="be">
      <br>
       <h5>Back End</h5>
       <br>
    </div>
  </div>
</div>
<br><hr><br>

<?php 
include 'footer2.php';
include 'footer.php';
?>


<style>
  @media (min-width: 320px) and  (max-width: 575px) {
  

  .jumbotron .btn{
    width: 45%;
    font-size: 20px;

  }
  .jumbotron h1{
    font-size: 40px;
    padding: 10px;
  }
  .row{
    width: 100%;
    font-size: 10px;
    float: right;
  }
  .row i{
    font-size: 25px;
    margin-left: -20px;
  }
  #co{
    margin: 0px;
    margin-top: 100px;
    margin-left: -20px;
  }
  .well-lg{
   
  }
  #fe{
     padding: 5px;
     font-size: 20px;
     margin: 5px;
  }
  #be{
     padding: 5px;
     font-size: 20px;
     margin: 5px;
  }
  #indexc{
    margin-top: 50px;
  }


  }

</style>
  

