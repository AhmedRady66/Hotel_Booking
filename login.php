<?php
session_start();
$host = "localhost";
$user = "id20436603_root";
$password = "zp^#HW15LyhP{9|_";
$database = "id20436603_hotelpr";

// Connect to the MySQL database
$mysqli = new mysqli($host, $user, $password, $database);

// Check for errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the user has already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    session_destroy();// since there is no page or any thing just testing login
    exit;
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are valid
    $sql = "SELECT id, username, email FROM users WHERE username = ? AND password = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header("Location: welcome.php");
    } else {
        echo "Invalid username or password.";
    }
}
?>