 
 <style>
 	#load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("img/30.gif") no-repeat center center rgba(255, 255, 255, 0.99999);
}
 </style>
<body>
    <div id="load"></div>
 
</body>

<script>
	
	document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('contents').style.visibility="hidden";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('contents').style.visibility="visible";
      },2000);
  }
}
</script>
