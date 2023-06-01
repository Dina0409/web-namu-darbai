<?php
$color =$_GET['color']?? '000000';
if(preg_match('/^[0-9a-f]{6}$/', $color)){
$color = '#'. $color;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <style>
        body {
            background-color: <?= $color ?>;
        }
a {
    color: skyblue;
}
        </body>
    </style>
</head>
<body>
    
</body>

</html>