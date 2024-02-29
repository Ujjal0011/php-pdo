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

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":email", $email);

    // insert a row
    $firstname = "Amitav";
    $lastname = "Reza";
    $email = "ar@example.com";
    $stmt->execute();

    // insert another row
    $firstname = "Abul";
    $lastname = "Hussain";
    $email = "abul.huss@example.com";
    $stmt->execute();

    // insert another row
    $firstname = "Robert";
    $lastname = "Mugabey";
    $email = "robert.123@example.com";
    $stmt->execute();

    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>



