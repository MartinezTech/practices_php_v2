<html>
 <head>
  <title>Find my Favorite Movie!</title>
 </head>
 <body>
<?php
$myfavmovie = urlencode("Life of Brian");
echo "<a href='N2P103MovieSite.php?favmovie=$myfavmovie'>";
echo "Click here to see information about my favorite movie!"; 
echo "</a>";
?>
 </body>
</html>
