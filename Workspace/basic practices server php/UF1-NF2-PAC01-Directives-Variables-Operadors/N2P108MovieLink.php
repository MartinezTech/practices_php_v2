<?php
session_start();
setcookie("username","Joe",time()+60);
$_SESSION['authuser'] = 1;
?>
<html>
 <head>
  <title>Find my Favorite Movie!</title>
 </head>
 <body>
<?php
$myfavmovie = urlencode("Life of Brian");
echo "<a href='N2P109MovieSite.php?favmovie=$myfavmovie'>";
echo "Click here to see information about my favorite movie!"; 
echo "</a>";
?>
 </body>
</html>






