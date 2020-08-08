<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Список дел</h1>
        <form action="add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Введите задачу" class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
        </form>

        <?php
        // Подключение к БД
                require("dbconnection.php");

        // Выборка данных из БД
            echo "<ul>";
                $sql = "SELECT * FROM `tasks` ORDER BY `id` DESC";
                $query = $pdo->query($sql);
                while($row = $query->fetch(PDO::FETCH_OBJ))
                {
                    echo "<li><b>" . $row->task . "</b><a href='delete.php?id=".$row->id."'><button>Удалить</button></a></li>";
                }
            echo "</ul>";
        ?>

    </div>
</body>
</html>