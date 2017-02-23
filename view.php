<!DOCTYPE html>
<html>
<?php
$settings = parse_ini_file("settings.ini");

$directory = getcwd() . "/posts/";
$filename = htmlspecialchars($_GET["title"]) ;
$phpfile = $directory . $filename . ".txt";

$blogTitle = $settings["title"];
$blogWidth = $settings["width"];
$homePage = $settings["homepage"];
?>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $blogTitle;?></title>
    <style>
      body{
        width: <?php echo $blogWidth?>%;
        margin-left: <?php echo (100-$blogWidth)/2?>%;
      }
    </style>
  </head>
  <body>
<?php
echo "<h1><a href=\"".$homePage."\">".$blogTitle."</a></h1>";
echo "<hr>";
if(file_exists($phpfile)){
  echo "<h2>".$filename."</h2>";
  echo file_get_contents($phpfile);
} else {
  echo "No Post with that title exists. Please try again.";
}
?>
  </body>
</html>