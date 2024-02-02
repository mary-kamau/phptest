<?php
    //Using PDO
    $dataSourceName = 'mysql:host=your_host;dbname=database_name';
    $username = 'your_username';
    
    //Test code with wrong $dataSourceName and wrong $username

    // $dataSourceName = 'mysql:host=127.0.0.1;dbname=php';
    // $username = 'superuser';

    try {
        $db = new PDO($dataSourceName, $username);
    } catch (PDOException $e) {
        $error = "Database Error:";
        $error .= $e->getMessage();
        
        //Using Logs
        // $errorLog = 'logs.txt';
        // $error = "Database Error: " . $e->getMessage() . PHP_EOL;
        // file_put_contents($errorLog, $error, FILE_APPEND);
        // header("HTTP/1.1 500 Internal Server Error");
        // echo "Internal Server Error";

        //Using error view
        include('view/error.php');
        exit();
    }

    //Usig MySQLi
    // $username = 'root';
    // $password = '';
    // $host = 'localhost';
    // $dbName = 'phptest';

    // try {
    //     $db = new mysqli($host, $username, $password, $dbName);
    //     if ($db->connect_error) {
    //         throw new Exception("Database Error: " . $db->connect_error);
    //     }
    // } catch (Exception $e) {
    //     $error = $e->getMessage();
        
    //     //Using Logs
    //     // $errorLog = 'logs.txt';
    //     // $error = "Database Error: " . $e->getMessage() . PHP_EOL;
    //     // file_put_contents($errorLog, $error, FILE_APPEND);
    //     // header("HTTP/1.1 500 Internal Server Error");
    //     // echo "Internal Server Error";

    //     //Using error view
    //     include('view/error.php');
    //     exit();
    // }
            
