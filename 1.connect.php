<?php
define("SERVERNAME", "localhost");
define("USERNAME", "");
define("PASSWORD", "");
define("DBNAME", "");

try {
    $conn = new PDO(
        "mysql:host=" . SERVERNAME . ";dbname=" . DBNAME,
        USERNAME,
        PASSWORD
    );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?> 
