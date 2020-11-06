<?php
    $color = $_POST['color'];
    $font_family = $_POST['font-family'];
    $font_size = $_POST['font-size'];
    $text = $_POST['text'];
    $show = $_POST['cookies'];
    echo $show;
    
    setcookie("cookie[four]", $color);
    setcookie("cookie[three]", $font_family);
    setcookie("cookie[two]", $font_size);
    setcookie("cookie[one]", $text);

        
    if (isset($_COOKIE['cookie'])) {
        foreach ($_COOKIE['cookie'] as $name => $value) {
            $name = htmlspecialchars($name);
            $value = htmlspecialchars($value);
            echo "$name : $value <br />\n";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
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
            echo "<p style='color:".$color."; font-family:".$font_family."; font-size: ".$font_size."px'>".$text."</p>" //print the line with custom css
        ?>
    </div>
</body>
</html>