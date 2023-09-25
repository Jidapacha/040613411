<?php include "connect.php";?>
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
    $stmt = $pdo->prepare("SELECT member.name,member.address,member.email FROM member");
    $stmt->execute();
    ?>

    <?php while($row = $stmt->fetch()):?> 
        <div style="padding: 15px; text-align: center">
            <?=row ["name"]?><br><?=$row ["address"]?><br><?=$row["email"]?><br>
            <img src='img/.jpg' width='100'><br><hr>
        </div>
    <?php endwhile;?>    
    
</body>
</html>