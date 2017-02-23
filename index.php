<!DOCTYPE html>
<html>
<?php
$settings = parse_ini_file("settings.ini");

$directory = getcwd() . "/posts/";
$phpfiles = glob($directory . "*.txt");

$blogTitle = $settings["title"];
$excerptLength = $settings["eLength"];
$blogWidth = $settings["width"]
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
echo "<h1>".$blogTitle."</h1>";
echo "<hr>";

foreach($phpfiles as $phpfile)
{
  echo "<h2><a href=\"view.php?title=".basename($phpfile,".txt")."\">".basename($phpfile,".txt")."</a></h2>";
  echo "...".htmlspecialchars(file_get_contents($phpfile,0,NULL,filesize($phpfile)*.2,filesize($phpfile)*.2+$excerptLength))."...<hr>";
}
?>
  </body>
</html>