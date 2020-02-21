<html>
<head>
<title> Cms </title>

</head>
<body>
<?php
session_start();
?>

<form action="cms.php" method="POST">
<br>
<br>
Site name: <input type="text" name="siteName">
<br>
<br>
About the item: <br><textarea name="about" cols="90" rows="30"></textarea>
<br>
<br>
item image: <input type="file" name="itemImg">
<br>
<br>
<input type="submit" name="submit">
</form>

<?php
include_once "connect.php";
if (isset($_POST['submit'])) {
   $text = $_POST['about'];
   $itemName = $_POST['siteName'];
   $sql = "INSERT INTO itempages (name, text) VALUES ('$itemName', '$text')";
   mysqli_query($conn, $sql);



   
 $newfile = fopen ($itemName.".php", "w");
 $source = 'item_template.php';
 copy($source, $itemName.".php");
 }

 if(isset($_FILES['itemImg'])){
  $errors= array();
  $file_name = $_FILES['itemImg']['name'];
  $file_size =$_FILES['itemImg']['size'];
  $file_tmp =$_FILES['itemImg']['tmp_name'];
  $file_type=$_FILES['itemImg']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['itemImg']['name'])));
  
  $extensions= array("jpeg","jpg","png");
  
  if(in_array($file_ext,$extensions)=== false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
  }
  
  if($file_size > 2097152){
     $errors[]='File size must be excately 2 MB';
  }
  
  if(empty($errors)==true){
     move_uploaded_file($file_tmp,"uploads/".$file_name);
     echo "Success";
  }else{
     print_r($errors);
  }
}

?>
</body>
</html>