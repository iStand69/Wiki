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
  <a href="asd.php" id="link1">Info</a>
  <a href="dsa.php" id="link"> Custom items</a>
  <!--<a href="#" id="link">Crafting recipes</a>-->
  <a href="skills.php" id="link">Skills/abilites</a>
</div>

<!-- Use any element to open the sidenav -->
<button class="openNav" onclick="openNav()"><img class="menuIcon" src="compass.png"></button>

<?php
include_once "connect.php";
?>
<div class="main" style="height: 650px;">

<div class="left">

</div>

<div class="right">

</div>

</div>

</body>
</html>

<script>



/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>
