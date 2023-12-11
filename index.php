<?php

    connect();

    function connect() {

        // CREATE TABLE `todo`.`tasks` (`id_task` INT NOT NULL AUTO_INCREMENT , `task` VARCHAR(50) NOT NULL , `status` BOOLEAN NOT NULL , PRIMARY KEY (`id_task`)) ENGINE = InnoDB;

        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "todo";

        $mysqli = mysqli_connect($host, $user, $pass, $database);
        mysqli_set_charset($mysqli, "utf8mb4");

    }