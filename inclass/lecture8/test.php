<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $country = $_GET["country"];
    $language = $_GET["lang"];
    echo "You are from " . $country . ".<br>";
    echo "You preferred " . $language . " language.";
    ?>
</body>
</html>