<?php include "php/connect.php"?>
<html>
    <head><meta charset = "utf-8"></head>
    <body>
            
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();
            while($row = $stmt->fetch()){
        ?>
            Username: <?=$row["username"]?><br>
    
            <a href="no5-1.php?username=<?=$row["username"]?>"> รายละเอียดสมาชิก</a>
            <hr>
        <?php }?>
    </body>
</html>