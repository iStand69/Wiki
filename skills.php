<?php
session_start();

?>

<html>
<head>
<title> Survival wiki</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="top">
<img class="banner" src="aurorabanner.png">





</div>
<img class="logo" src="aurora.png">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" id="close" onclick="closeNav()">&times;</a>
  <a href="index.php" id="link1">Home</a>
  <a href="#" id="link">Info</a>
  <a href="#" id="link"> Custom items</a>
  <!--<a href="#" id="link">Crafting recipes</a>-->
</div>

<!-- Use any element to open the sidenav -->
<button class="openNav" onclick="openNav()"><img class="menuIcon" src="compass.png"></button>

<?php
include_once "connect.php";
?>
<div class="main" style="height: 650px;">

<div class="left">
<h1> Skills & Abilities </h1>
<h1> Acrobatics</h1>
<br>

<table class="skills">
<tr>
<td>
<img class="skillsImg" src="skillsimg/stone.png">
</td>
<td>
<p class="skilltxt">Long jump - Jumping while running and sneaking, will do a longer jump</p>
</td>
<td>
    <p class="skilltxt">Power Cost: 10</p>
</td>

</tr>

</table>
<!--
<br><br><br>
<img class="skillsImg" src="skillsimg/stone.png">
<p class="highjumptxt">High jump - Jumping while sneaking, will jump extra high</p>
<br><br><br>
<img class="skillsImg" src="skillsimg/stone.png">
<p class="doublejumptxt">Double jump - Sneaking in mid-air will jump again, shortly after an initial jump</p>
<br><br><br>
<h1>Aer</h1>
<img class="skillsImg" src="skillsimg/wind_blast.png">
<p class="windblasttxt">Wind blast - Launch a powerful blast of wind to push your opponents</p>
<br><br><br>
<img class="skillsImg" src="skillsimg/wind_rider.png">
<p class="windridertxt">Wind Rider - Launch yourself torwards your cursor, and ride the winds</p>
<br><br><br>
-->
</div>
<!--
<div class="right1">
<br><br><br>
<h1> Archery</h1>
<br>
<img class="skillsImg" src="skillsimg/frost_blast.png">
<p class="firearrowstxt">Fire Arrows - Your arrows light themselfs for the next 15 seconds</p>
<br><br><br>
<h1> Athleticism</h1>
<img class="skillsImg" src="skillsimg/dolphin_kick.png">
<p class="dolphinkicktxt">Dolphin Kick - Sneaking while swimming will perform a fast kick</p>
<br><br><br>
<h1> Earth</h1>
<img class="skillsImg" src="skillsimg/frost_blast.png">
<p class="quicksandtxt">Quicksand - Turn the ground around you into soul sand</p>
<br><br><br>
<img class="skillsImg" src="skillsimg/sand_cacoon.png">
<p class="sandcacoontxt">Sand Cacoon - Retreat into a protective shell within the ground</p>
<br><br><br>
<img class="skillsImg" src="skillsimg/scape_shift.png">
<p class="scapeshifttxt">Scape Shift - Shift yourself 25 blocks forward, trough the ground</p>

<div class="right2">
<br><br><br>
<h1> Ender</h1>
<br>
<img class="skillsImg" src="skillsimg/ender_world.png">
<p class="enderworldtxt">Ender World - Transport yourself to the ender world</p>
<br><br><br>
<h1> Endurance</h1>
<img class="skillsImg" src="skillsimg/stone.png">
<p class="txt"></p>
</div>

-->


</div>

</div>

</body>
</html>

<script>

function dropdown() {
    document.getElementById("dropdown").style.display = "block";

}



/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>
