<?php

    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_USER', 'root' );
    define( 'MYSQL_PASSWORD', '' );
    define( 'MYSQL_DB_NAME', 'usuarios' );

    try {
        $conexao = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );


    } catch ( PDOExeption $event) {

        echo 'Erro: ' . $event->getMessage();
    }   
    

?>