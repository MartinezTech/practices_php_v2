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
  <title>Find my Favorite Movie!</title>;
 </head>
 <body>
<?php
include "N3P101header.php";
$myfavmovie = urlencode("Life of Brian");
echo "<a href='N3P110MovieSite.php?favmovie=$myfavmovie'>";
echo "Click here to see information about my favorite movie!"; 
echo "</a>";
?>
<br/>
<a href="N3P110moviesite.php"> Click here to see my 10 movies. </a>
<br/>
<a href="N3P110moviesite.php?sorted=true"> Click here to see my
 top 10 movies sorted alphabetically. </a>
</body>
</html>







