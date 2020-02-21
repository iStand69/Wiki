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
  <a href="#" id="link">Info</a>
  <a href="#" id="link"> Custom items</a>
  <a href="#" id="link">Crafting recipes</a>
</div>

<!-- Use any element to open the sidenav -->
<button class="openNav" onclick="openNav()"><img class="menuIcon" src="compass.png"></button>

<?php
include_once "connect.php";
$file = basename($_SERVER['PHP_SELF']);
$file1 = substr($file, 0, -4);
$sql = "SELECT * FROM itempages WHERE name LIKE '%$file1%'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$itemName = $row['name'];
$text = $row['text'];
?>
<div class="main">
<div class="left">
<h1 class="title"> <?php echo $itemName; ?> </h1>
<img class="itemPic" src="<?php $_SESSION['itemPic']?>">
<br><br>
<img class="crafting" src="crafting.png" usemap="#image-map">

<map name="image-map">
<!-- first row -->
    <area target="_blank" alt="1" title="1" href="" coords="8,25,48,70" shape="rect">
    <area target="_blank" alt="2" title="2" href="" coords="50,25,94,70" shape="rect">
    <area target="_blank" alt="3" title="3" href="" coords="98,25,140,70" shape="rect">
<!-- second row -->
    <area target="_blank" alt="4" title="4" href="" coords="8,75,48,114" shape="rect">
    <area target="_blank" alt="5" title="5" href="" coords="50,75,94,114" shape="rect">
    <area target="_blank" alt="6" title="6" href="" coords="98,75,140,114" shape="rect">
<!-- third row -->
    <area target="_blank" alt="7" title="7" href="" coords="8,120,48,158" shape="rect">
    <area target="_blank" alt="8" title="8" href="" coords="50,120,94,158" shape="rect">
    <area target="_blank" alt="9" title="9" href="" coords="98,120,140,158" shape="rect">

    <area target="_blank" alt="result" title="result" href="" coords="233,61,295,128" shape="rect">
</map>
</div>
<div class="right">

<h1 class="itemText1"> <?php echo nl2br($text)?> </h1>
<div class="rightInfo">
<p> pulls data from yaml</p>
</div>
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
