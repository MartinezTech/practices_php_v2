
<html>
 <head>
  <title>My Movie Site <?php echo $_GET['favmovie'];?></title>
 </head>
 <body>
<?php
echo "My favorite movie is ";
echo $_GET['favmovie'];
$movierate = 5;
echo "My movie rating for this movie is: ";
echo $movierate;
?>
 </body>
</html>

