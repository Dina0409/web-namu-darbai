<?php



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
            background: <?=isset($_GET['color'])&& $_GET['color'] == 1 ?'black':'crimson' ?>;
        }
        a {
            color: skyblue;
            font-size: 4em;
            padding: 40px;
        }
        </body>
    </style>
</head>
<body>
    <a href="http://localhost/web%20namu%20darbai/">Linkas Vienas</a>
    <a href="http://localhost/web%20namu%20darbai/color=1">Linkas Du</a>

</body>

</html>