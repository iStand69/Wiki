 <?php
 include_once "cms.php";
    if (isset($_POST['submit'])) {
        $name = $_POST['siteName'];
        $file = fopen("$name.php", "w");
        $destination = "$name.php";
        $text1 = $_POST['about'];
        $marks = '';
        $fullContent = 
        $source = "item_template.php";
        $template = copy($source, $destination);
}

?>