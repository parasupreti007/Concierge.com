<?php
session_start();
$a =$_GET['id'];
$_SESSION['hname']=$a;
?>

<!DOCTYPE html>
<html>
<head>
<title>hotellist</title>
<script type="text/javascript">

function OnButton1()
{window.location='try.html';
}
function OnButton2()
{window.location='try2.html';
}
function OnButton3()
{window.location='try3.html';
}
function OnButton4()
{window.location='try.html';
}
</script>
<style> 
.buttonsel {
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}

.buttonsel:hover {
    background-color: #999999;
    color: white;
}
.buttonsel:active:after {
    padding: 0;
    margin: 0;
    opacity: 0.6;
    transition: 0s
}
.buttonsel:after {
    content: "";
    background: #0d0d0d;
    display: block;
    position: absolute;
    padding-top: 24%;
    padding-left: 111%;
    margin-left: -15px!important;
    margin-top: -16.5%;
    opacity: 0;
    transition: all 0.4s
}

.buttonsel {
  display: inline-block;
  border-radius: 8px;
  background-color: #f2f2f2;
  opacity:0.75;
  border: none;
  position:relative;
  color: #0d0d0d;
  text-align: center;
  font-size: 30px;
  padding: 15px;
  width: 15.38%;  
  left:19%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
}

.buttonsel span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonsel span:after {
  content: '�';
  position: absolute;
  opacity: 0;
  top: 0;
  right: 20px;
  transition: 0.5s;
}

.buttonsel:hover span {
  padding-right: 25px;
}

.buttonsel:hover span:after {
  opacity: 1;
  right: 0;
}



.button {
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}

.button:hover {
    background-color: #999999;
    color: white;
}
.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 0.6;
    transition: 0s
}
.button:after {
    content: "";
    background: #0d0d0d;
    display: block;
    position: absolute;
    padding-top: 24%;
    padding-left: 111%;
    margin-left: -15px!important;
    margin-top: -16.5%;
    opacity: 0;
    transition: all 0.4s
}

.button {
  display: inline-block;
  border-radius: 8px;
  background-color: #0d0d0d;
  opacity:0.75;
  border: none;
  position:relative;
  color: #FFFFFF;
  text-align: center;
  font-size: 30px;
  padding: 15px;
  width: 15.38%;  
  left:19%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '�';
  position: absolute;
  opacity: 0;
  top: 0;
  right: 20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
div.transbox
{
  position:absolute;
  left:16.5%;
  width:60%;
  height:90%;
  margin: 60px;
  background-color: #0d0d0d;
  opacity:0.6;
  filter:alpha(opacity=60); /* For IE8 and earlier */
}
div.transbox p
{
  position:fixed;
  margin: 50%;
  font-weight: bold;
  color: #000000;
}
#navigation {
width: 500px;
height: 100px;
padding-top: 52px;
position: fixed;    // CHANGE FROM RELATIVE TO FIXED
left: 770px;        // ADD THIS BIT OF POSITIONING (ADJUST AS NECESSARY)
float: right;       //REMOVE THIS FLOAT
text-align: center;
vertical-align: middle;

}
body {

    background: url("b3.jpg");
    background-size: 1366px 768px;
    background-repeat: no-repeat;
    padding-top: 40px;
}

</style>
</head>
<body link="white" vlink="white">
<div class="transbox">

<?php
echo "</br>";
	 echo "<font face='WildWest' size='5' color='white'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	 echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotel name is ". $_SESSION["hname"];


?>

</div>
<button class="button" style="vertical-align:middle" onclick="OnButton1();"><span>Home</span></button>
<button class="buttonsel" style="vertical-align:middle" onclick="OnButton2();"><span>Hotels</span></button>
<button class="button" style="vertical-align:middle" onclick="OnButton3();"><span>Car Rental</span></button>
<button class="button" style="vertical-align:middle" onclick="OnButton4();"><span>Contact Us</span></button>
</body>

</html>

