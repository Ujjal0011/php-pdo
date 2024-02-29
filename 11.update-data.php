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

    $sql = "UPDATE MyGuests SET lastname='NewMan' WHERE id=2";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

