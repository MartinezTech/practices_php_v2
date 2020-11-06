<?php
session_start();

//Check user permission
if ($_SESSION['authuser'] != 1){
    echo "Sorry, but you don't have permission to view this page!";
    exit();     
}
?>
<html>
 <head><title>
<?php
if (isset($_GET["favmovie"])) {
	echo " - ";
	echo $_GET["favmovie"];
}
?>
</title></head>
<body>
<?php 
include "N3P101header.php";

$favmovies = array(	"Life of Brian",
					"Stripes",
					"Office Space",
					"The Holy Grail",
					"Matrix",
					"Terminator 2",
					"Star Trek IV",
					"Close Encounters of the Third Kind",
					"Sixteen Candles",	
					"Caddyshack");

if (isset($_GET["favmovie"])) {
	echo "Welcome to our site, ";
	echo $_SESSION["username"];
	echo "!<br/>";
	echo "My favorite movie is ";
	echo $_GET["favmovie"];
	echo "<br/>";
	$movierate = 5;
	echo "My movie rating for this movie is: ";
	echo $movierate;
} else {
		echo "My top ".$_POST["num"]." favorite movies";
		if (isset($_POST["sorted"])) {
			sort($favmovies);
			echo " (sorted alphabetically) ";
		}
		echo "are:<br/>";
		$numlist = 0;
		echo "<ol>";
		while ($numlist < $_POST["num"]) {
			echo "<li>";
			echo $favmovies[$numlist];
			echo "</li>";
			$numlist = $numlist + 1;
		}
		echo "</ol>";
}
?>
</body>
</html>

