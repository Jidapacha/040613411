<?php
    $keyword = $_GET["user"];
    $con = mysqli_connect('localhost', 'root', '' ,'blueshop');
    $sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
    $result = mysqli_query($con,$sql);
?>

<table border="1">
    <?php while($row = mysqli_fetch_array($result)): ?>
    <tr>
        <td><?php echo $row["username"]?></td>
        <td><?php echo $row["name"]?></td>
        <td><?php echo $row["address"]?></td>
        <td><?php echo $row["mobile"] ?></td>
        <td><?php echo $row["email"]?></td>
    </tr>
    <?php endwhile;?>
</table>