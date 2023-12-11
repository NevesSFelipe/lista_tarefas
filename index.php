<?php


    update(1, ["task" => "FSN", "status" => 1]);

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

    function read() {

        $connect = connect();
        
        $sql = "SELECT * FROM tasks";

        $return = mysqli_query($connect, $sql);

        if($return) {
            
            print("ID - TASK - STATUS <br>");
            while ($row = mysqli_fetch_row($return)) {
                print("$row[0] - $row[1] - $row[2] . <br>");
            }
        
        }

    }

    function update(int $id_task, array $dateUpdate) {

        $connect = connect();

        $set = "";
        foreach($dateUpdate as $column => $value) {

            $set .= "$column = '$value', ";
        
        }

        $set = rtrim($set, ", ");

        $sql = "UPDATE tasks SET $set WHERE id_task = $id_task";

        $return = mysqli_query($connect, $sql);

        if($return) {
            echo "Task atualizada com sucesso.";
        }

    }