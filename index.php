<?php

    $dateInsert = ["task" => "Aprender PHP"];
    create($dateInsert);

    function connect() {

        // CREATE TABLE `todo`.`tasks` (`id_task` INT NOT NULL AUTO_INCREMENT , `task` VARCHAR(50) NOT NULL , `status` BOOLEAN NOT NULL , PRIMARY KEY (`id_task`)) ENGINE = InnoDB;

        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "todo";

        $mysqli = mysqli_connect($host, $user, $pass, $database);
        mysqli_set_charset($mysqli, "utf8mb4");

        return $mysqli;

    }

    function create(array $dateInsert) {

        $connect = connect();

        $task = $dateInsert["task"];

        $sql = "INSERT INTO tasks (task, status) VALUES ('$task', 0)";

        $return = mysqli_query($connect, $sql);

        if($return) {
            echo "Task adicionado com sucesso.";
        }

    }