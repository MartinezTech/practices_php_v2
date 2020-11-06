<?php
session_unset();
?>
<html>
 <head>
  <title>Please Log In</title>
 </head>
 <body>
  <?php include "N3P101header.php";?>
  <form method="post" action="N3P109MovieLink.php">
   <p>Enter your username: 
    <input type="text" name="user"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="pass"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>




