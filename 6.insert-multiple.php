<?php
define("SERVERNAME", "localhost");
define("USERNAME", "");
define("PASSWORD", "");
define("DBNAME", "myDBPDO");

try {
    $conn = new PDO(
        "mysql:host=" . SERVERNAME . ";dbname=" . DBNAME,
        USERNAME,
        PASSWORD
    );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Haris', 'Caze', 'caze.tweek@hotmail.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Moe', 'Moe', 'moemoe@gmail.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Jun', 'Dooley', 'jun.doo@yahoo.com')");

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
} catch (PDOException $e) {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>

