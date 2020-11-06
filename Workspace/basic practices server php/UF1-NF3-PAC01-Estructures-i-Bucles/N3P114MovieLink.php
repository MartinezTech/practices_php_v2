<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

//Check username and password information
if (($_SESSION['username'] == 'Joe') and
    ($_SESSION['userpass'] == '12345')) {
    $_SESSION['authuser'] = 1;
} else {
    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();     
}
?>
<html>
 <head>
  <title>Find my Favorite Movie!</title>
 </head>
 <body>
<?php
include "N3P101header.php";
$myfavmovie = urlencode("Life of Brian");
echo "<a href='N3P115MovieSite.php?favmovie=$myfavmovie'>";
echo "Click here to see information about my favorite movie!"; 
echo "</a>";
?>
<br/>
Or choose how many movies you would like to see:
<br/>
<form method="post" action="N3P115MovieSite.php" >
<p> Enter number of movies (up to 10):
<input type="text" name="num" maxlength="2" size="2"/>
<br/>
Check to sort them alphabetically:
<input type="checkbox" name="sorted" />
</p>
<input type="submit" name="submit" value="Submit"/>
</form>
</body>
</html>







