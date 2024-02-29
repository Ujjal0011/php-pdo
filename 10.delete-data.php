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

    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

