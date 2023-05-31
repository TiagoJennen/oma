<?php
session_start();
include_once("conn.php");

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)) {
    header("Location: register.php?error=User Name is required");
    exit();
} else if (empty($password)) {
    header("Location: register.php?error=Password is required");
    exit();
}

// Check if a file was uploaded
if (isset($_FILES['profilePhoto']) && $_FILES['profilePhoto']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['profilePhoto'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];

    // Get the file extension
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    // Generate a unique name for the uploaded file
    $newFileName = uniqid() . '.' . $fileExtension;

    // Set the destination path for the uploaded file
    $destination = 'profile_photos/' . $newFileName;

    // Move the uploaded file to the desired location
    if (move_uploaded_file($fileTmpName, $destination)) {
        // File upload success
        $stmt = $con->prepare("INSERT INTO users (username, password, profile_photo) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $newFileName);
        $execval = $stmt->execute();
        echo $execval;
        $stmt->close();
        $con->close();
        header("Location: login.php");
        exit();
    } else {
        // File upload failed
        header("Location: register.php?error=Failed to upload the profile photo");
        exit();
    }
} else {
    // No file was uploaded
    header("Location: register.php?error=Profile photo is required");
    exit();
}
?>


