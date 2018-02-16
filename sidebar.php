<?php  
include 'auth.php';
include 'nav.php';
?>
<link rel="stylesheet" href="css/style.css">
<div class="row">
	<div class="col-2">
     <ul>
     	<center>
 	    <img src="img/html.gif" width="100px" alt="">
 	</center>
 		<li class="nav-item"><a href="nav-link">HMTL</a></li>
 		<li class="nav-item"><a href="nav-link">CSS</a></li>
 		<li class="nav-item"><a href="nav-link">JS</a></li>
 		<li class="nav-item"><a href="nav-link">JQUERY</a></li>
 		<li class="nav-item"><a href="nav-link">REACT JS</a></li>
 		<li class="nav-item"><a href="nav-link">ANGULAR JS</a></li>
 		<li class="nav-item"><a href="nav-link">PHP</a></li>
 		<li class="nav-item"><a href="nav-link">NODE JS</a></li>
 	<br>
 	<br>

 		
 	</ul>
		</div>
		
<div class="col-6">
		<div class="card-column">
			
			<img src="img/video.gif" class="video" alt="">


			<div class="card">
				
<ul class="list-group">
  <li class="list-group-item justify-content-between">
    Cras justo odio
    <span class="badge badge-default badge-pill">14</span>
  </li>
  <li class="list-group-item justify-content-between">
    Dapibus ac facilisis in
    <span class="badge badge-default badge-pill">2</span>
  </li>
  <li class="list-group-item justify-content-between">
    Morbi leo risus
    <span class="badge badge-default badge-pill">1</span>
  </li>
</ul>
</div>
<br>
<hr><br>
		</div>
		</div>

		<div class="col-4">
		<div class="card-column">
			
			<div class="card">
				<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small>Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div>
			</div>


			<div class="card">
				
<ul class="list-group">
  <li class="list-group-item justify-content-between">
    Cras justo odio
    <span class="badge badge-default badge-pill">14</span>
  </li>
  <li class="list-group-item justify-content-between">
    Dapibus ac facilisis in
    <span class="badge badge-default badge-pill">2</span>
  </li>
  <li class="list-group-item justify-content-between">
    Morbi leo risus
    <span class="badge badge-default badge-pill">1</span>
  </li>
</ul>

			</div>
		</div>
		</div>


</div>


<style>
	.col-2{
			background: 
    /* top, transparent red */ 
    linear-gradient(
      rgba(237, 28, 56, .7), 
      rgba(237, 30, 101, .7)
    ), url("img/112.jpg");
	}
	.col-2 a{
		font-size: 20px;
		color: white;


	}
	.col-2 li{
		padding: 10px;
		
		border-bottom: 0.5px solid white;
		opacity: 0.9;
		width: 100%;
		padding-left: 30px;
	}
  .col-2 li:hover{
    background-color: #2a2a2a;
    color: ;
    
    transition: all 0.3s ease;
    padding-left: 40px;
    border-left: 10px solid white;
  }
	.col-2 ul{
		list-style: none;
		width: 100%;
	}
	.col-2 img{
		padding: 10px;
	}
	.card-column img{
		width: 100%;
		margin:30px;
	}
	.card-column .card{
		margin: 30px;
		width: ;
	}
}
</style>

<?php 
include 'footer.php';
 ?>

