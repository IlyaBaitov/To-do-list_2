<?php
// Проверка на наличие задачи
    $task = $_POST["task"];
    if($task == "")
    {
        echo "Введите задачу";
        exit();
    }

// Подключение к бд
    require("dbconnection.php");

// Вставка в sql
    $sql = "INSERT INTO tasks(task) VALUES(:task)"; // $sql, дядя, прими этот sql запрос и держи его
    $query = $pdo->prepare($sql);                   // $pdo, братан, подготовь этот $sql запрос и отдай его в руки $query
    $query->execute(["task" => $task]);             // $query, сестричка, выполни этот $sql запрос но вместо заглушки :task поставь нормальное значение из $task

    header("Location: index.php");
?>