<?php

if(empty($_POST)){
    //DO NOTHING 
}else{
    session_start();
    $_SESSION['username'] = $_POST['user'];
    $_SESSION['userpass'] = $_POST['pass'];
    $_SESSION['favcolor'] = $_POST['favcolor'];   
}

?>
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
        
        <?php   

            if (empty($_GET)) {
                //Do nothing 
            }else{

                if($_GET['task'] == "a"){   //Exercise a and g
                    $college_name = $_GET['college_name'] ?? $_POST["college_name"] ?? 'FP Llefia'; //null controls
                    echo "<h3>This is the exercise '" . $_GET['exercise'] . " of ". $_GET['name_activity'] . "' by " . $_GET['author'] . " | " . $college_name ."<h3>" ; 
                }else{
                    if($_GET['task'] == "f"){   //exercise f
                        $link = $_GET['myWebsite'];
                        echo "<a href='$link'>$link</a>"; 
                    }
                }
                
            }

        ?>
        
        <?php   //Exercise b and c
            if(empty($_SESSION)){
                //Do nothing
            }else{
                if($_SESSION['username'] == 'alex' and $_SESSION['userpass'] == 'alex'){    //check 2 SESSION VARIABLES FOR AUTHENTICATION
                    echo "You have access as admin";
                }else{  //MESSAGE FOR DEFAULT ACCESS
                    echo "<p>You have access with username " . $_SESSION['username'] . " and your favourite color is " . $_SESSION['favcolor'];
                }
             }
        ?>
    </div>
</body>
</html>