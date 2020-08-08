<?php
    require("dbconnection.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM `tasks` WHERE `id` = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header("location: index.php");
?>