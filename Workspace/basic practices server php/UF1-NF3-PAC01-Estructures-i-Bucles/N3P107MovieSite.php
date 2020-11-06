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
<body >
<?php 
include "N3P101header.php";

function listmovies_1() {
	echo "1. Life of Brian <br> ";
	echo "2. Stripes <br> ";
	echo "3. Office Space <br> ";
	echo "4. The Holy Grail <br> ";
	echo "5. Matrix <br> ";
}
function listmovies_2() {
	echo "6. Terminator 2 <br> ";
	echo "7. Star Trek IV <br> ";
	echo "8. Close Encounters of the Third Kind <br> ";
	echo "9. Sixteen Candles <br> ";
	echo "10. Caddyshack <br> ";
}
if (isset($_GET["favmovie"])) {
	echo "Welcome to our site, ";
	echo $_SESSION["username"];
	echo "! <br> ";
	echo "My favorite movie is ";
	echo $_GET["favmovie"];
	echo " <br> ";
	$movierate = 5;
	echo "My movie rating for this movie is: ";
	echo $movierate;
} else {
	echo "My top ";
	echo $_GET["movienum"];
	echo " movies are:";
	echo " <br/> ";
	listmovies_1();
	if ($_GET["movienum"] == 10) {
		listmovies_2();
	}
}
?>
</body>
</html>

