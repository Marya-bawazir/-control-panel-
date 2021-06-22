

<!DOCTYPE html>
<html>
<h1>CONTROL PANEL OF ROPOT<h1/>
<hr>
<h3>ENGINE-1-<h3>
<style>
body {
  background-color: #f5f5f0;
}

h1 {
  color: #000066;
  text-align: center;
}

h3 {
  color: #000066;
  text-align: center;
}


p {
  font-family: verdana;
  font-size: 20px;
}

body {margin:0;}



.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}



div{margin-right:auto;
margin-left:auto;}



</style>
<body>

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-search"></i></a> 
  <a href="#"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
  <a href="#"><i class="fa fa-trash"></i></a> 
</div>



</body>
 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: #b3b3ff;
  color:#000066;
  display: block;
  padding: 12px;
  text-decoration: none;
 
}
.vertical-menu a:hover {
  background-color: #6666ff;
  
  
}


.vertical-menu a.active {
  background-color: #04AA6D;
  color: #000066;
}


</style>

</head>

<body>
 

<h1>   </h1>


<div class="vertical-menu">


  
  <a href="#"> Base </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="70" class="slider" id="myRange">
   Value: <span id="demo"></span>
   
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>






  
  <a href="#">Shoulders</a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="120" class="slider" id="thisRange">
  Value: <span id="DM"></span></p>
  
</div>
<script>
var slider = document.getElementById("thisRange");
var output = document.getElementById("DM");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  
  <a href="#"> Elbow </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="54" class="slider" id="MyR">
  Value: <span id="D"></span></p>
</div>

<script>
var slider = document.getElementById("MyR");
var output = document.getElementById("D");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  <a href="#"> Wrist </a>
  
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="170" class="slider" id="Range">
  Value: <span id="mo"></span></p>
</div>

<script>
var slider = document.getElementById("Range");
var output = document.getElementById("mo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

  <a href="#"> Gripper</a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="30" class="slider" id="Therange">
  Value: <span id="ofdemo"></span></p>
</div>

<script>
var slider = document.getElementById("Therange");
var output = document.getElementById("ofdemo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  <a href="#"> Engine </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="100" class="slider" id="rangg">
  Value: <span id="demoo"></span></p>
  
<script>
var slider = document.getElementById("rangg");
var output = document.getElementById("demoo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>



</html>

<br><br/>
 
<hr>
<h3>ENGINE-2-<h3>

<body>

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-search"></i></a> 
  <a href="#"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
  <a href="#"><i class="fa fa-trash"></i></a> 
</div>



</body>
 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
 

<h1>   </h1>


<div class="vertical-menu">


  
  <a href="#"> Base </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="70" class="slider" id="R">
   Value: <span id="d"></span>
   
</div>

<script>
var slider = document.getElementById("R");
var output = document.getElementById("d");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>






  
  <a href="#">Shoulder </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="120" class="slider" id="A">
  Value: <span id="E"></span></p>
  
</div>
<script>
var slider = document.getElementById("A");
var output = document.getElementById("E");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  
  <a href="#"> Elbow </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="54" class="slider" id="N">
  Value: <span id="M"></span></p>
</div>

<script>
var slider = document.getElementById("N");
var output = document.getElementById("M");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  <a href="#"> Wrist </a>
  
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="170" class="slider" id="G">
  Value: <span id="O"></span></p>
</div>

<script>
var slider = document.getElementById("G");
var output = document.getElementById("O");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

  <a href="#"> Gripper </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="30" class="slider" id="GRI">
  Value: <span id="PER"></span></p>
</div>

<script>
var slider = document.getElementById("GRI");
var output = document.getElementById("PER");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  <a href="#"> Engine </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="100" class="slider" id="ENG">
  Value: <span id="GINE"></span></p>
  
<script>
var slider = document.getElementById("ENG");
var output = document.getElementById("GINE");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="robot";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database";

?>




<form action =Run.php method="post">
<input type="submit"  name="btn-atc" value=" Run"
</form>
<br>

<form action=Update.php method="post">
<input type="submit"  name="update" value=" Save"
</form>



</html>






