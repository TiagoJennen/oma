<?php
// Retrieve form values from the POST request
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

// Create a PDO database connection
$databaseHost = 'localhost';
$databaseUser = 'root';
$databasePassword = '';
$databaseName = 'challenge11';

try {
    $conn = new PDO("mysql:host=$databaseHost;root=$databaseUser", $databasePassword, $databaseName);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the SQL statement to insert the form data
    $stmt = $conn->prepare("INSERT INTO form_submissions (name, email, age) VALUES (:name, :email, :age)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':age', $age);
    $stmt->execute();

    echo "Form data submitted successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
