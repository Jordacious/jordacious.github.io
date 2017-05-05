<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="code.ico" type="image/ico"/>
<title>
Jordacious Development
</title>

<body>
<header>
<p><img class="image1" src="jordaciousdevelopment.png" alt="test" width="356" height="27">
</header>
<div id="floatbutton">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
<div align="center" id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div>
  
<button class="button button13" onclick="location.href='https://jordacious.github.io/downloads/'">Downloads</button>  
<button class="button button13" onclick="location.href='mailto:jordan.m.gresock@gmail.com'">Email</button>
<button class="button button13" onclick="myFunction2()">Facebook</button>
<button class="button button13" onclick="location.href='https://github.com/Jordacious'">Github</button>
<button class="button button13" onclick="location.href='https://www.patreon.com/singletearentertainment'">Patreon</button>
<button class="button button13" onclick="myFunction3()">YouTube</button>
</div>

<p align="center" style="font-size:14px; color: #fff; font-weight:bold; font-style:italic;">
*Not all links are set up as of now.
</br>
Site Version: 1.6 (BETA)
</p>

<button class="button button13" onclick="myFunction()">&#9881; Settings &#9881; </br>(BETA)</button>

<div align="center">
<a onClick="firstFunction(); myFunction4();" href="#"><p>Invert</p></a>
</div>

<div align="center">
<a onClick="secondFunction();" href="#"><p>Normal</p></a>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}
function myFunction4() {
    document.getElementById("myImg").src = "githubwhite.png";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
function firstFunction() {
      document.body.style.backgroundColor = "black"; 
}
function secondFunction() {
      document.body.style.backgroundColor = "white"; 
}
function myFunction() {
    alert("Not all settings work. As it says, these are in BETA.");
}
function myFunction2() {
    alert("Sorry, the Facebook link is not setup yet.");
}
function myFunction3() {
    alert("Sorry, the YouTube link is not setup yet.");
}
</script>

</body>

</div>

<body>

</br>

<b>In the Works:</b>

<ol>
	<li><p>A comments section<p></li>
	<li><p>A working login system<p></li>
	<li><p>More Settings<p></li>
</ol>

<p><b>Change Log:</b></p>
<ol>
	<li><p>Added Settings (BETA)<p></li>
</ol>

</body>


<div align="center">
<p><img id="myimg" class="image2" src="githubblack.png" align="middle" alt="test" width="100" height="100">
</p>Hosted by Github</br>Coded By Jordacious
</div>

<!--Thank you to W3Schools, Tinkernut, StackOverFlow forums and other sources for teaching me HTML 
Font used for picture: FAILED on FontMeme-->
</html>