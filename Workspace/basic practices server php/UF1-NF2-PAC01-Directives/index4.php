
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directives</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            padding-top: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <?php   //task h. Use function date() to show date
            echo "<p class='text-right'>Today is " . date('d M Y') . "</p>";
        ?>
        <h1>Directives Variables Operadors</h1>
        <h3>Ejercicio 1</h3>
        <ul>
            <li><h5>Task A and E: 1 $_GET variable and link</h5></li>
                <ul><li><a href="secondary.php?task=a&exercise=1&name_activity=Directives Variables Operadors&author=Alex Martinez">First exercise $GET</a></li></ul>
            <li><h5>Task B and C: $_SESSION and $_POST<h5></li>
                <ul>
                    <li>
                        <form method="post" action="secondary.php">
                            <div class="form-group">
                                <label for="username">Username</label>
                                
                                <input type="text" class="form-control" id="username" name="user" aria-describedby="emailHelp" placeholder="Enter email">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="vehicle1" name="favcolor" value="Red" checked>
                                <label for="vehicle1"> Red</label><br>
                                <input type="checkbox" id="vehicle2" name="favcolor" value="Green">
                                <label for="vehicle2"> Green</label><br>
                                <input type="checkbox" id="vehicle3" name="favcolor" value="Blue">
                                <label for="vehicle3"> Blue</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </li>
                </ul>
            <li><h5>Task D: Set a $_COOKIE<h5></li>
            <?php
                $cookie_name = "user";
                $cookie_value = "Alex Martinez";
                setcookie($cookie_name, $cookie_value, time() + 86400);

                if(!isset($_COOKIE[$cookie_name])) {
                    echo "Cookie named '" . $cookie_name . "' is not set!";
                  } else {
                    echo "Cookie '" . $cookie_name . "' is set!<br>";
                    echo "Value is: " . $_COOKIE[$cookie_name];
                  }
                ?>
            <li><h5>Task F: urlencode()<h5></li>
               
                <?php 
                // PHP program to illustrate urlencode function 
                $link = urlencode("https://martinezprojects.com/");
                echo "<a href='secondary.php?myWebsite=$link&task=f'>Link to my personal web page</a>";
                ?>   
            <li><h5>Task G: NULL controls</h5></li>
            <?php
                echo "<p>Go to check NULL controls<p>
                      <a href='secondary.php?task=a&exercise=1&name_activity=Directives Variables Operadors&author=Alex Martinez'>Link here</a>"
            ?>
        </ul>
    </div>
</body>
</html>