<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Get form data
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	// Validate form data
	if (empty($name) || empty($email) || empty($password)) {
        die("
        <p>Error: All fields are required</p>
        <br>
        <a href='index.php'>Return Home</a>
        ");
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		die("
        <p>Error: Invalid email format</p>
        <br>
        <a href='index.php'>Return Home</a>
        ");
	}

	// Save profile picture to uploads directory with unique filename
    $uploadDirectory = "uploads/";
    $targetFile = $uploadDirectory . date('YmdHis') . basename($_FILES['profile_pic']['name']);
    $upload_ok = 1;

    if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $targetFile)) {
        echo "The file " . basename($_FILES['profile_pic']['name']) . " has been uploaded.";
    } else {
        die("
        <p>Sorry, there was an error uploading your file.</p>
        <br>
        <a href='index.php'>Return Home</a>
        ");
    }

    // Save user's name, email, and profile picture filename to CSV file
    $myCsvFile = fopen("users.csv", "a");
    $data = [$_POST['name'], $_POST['email'], $targetFile];
    fputcsv($myCsvFile, $data);
    fclose($myCsvFile);

    // Set cookie with user's name
    setcookie("user_name", $_POST['name'], time() + (60*60), "/");

    // Redirect to confirmation page
    header("Location: users.php");
    exit;
}