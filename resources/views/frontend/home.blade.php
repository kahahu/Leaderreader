@extends('frontend.layout')

@section('content')


<section id="showcase">
        </section>

        <section  id="boxes">

            <div class="box">
              <img src="images/premium.png" alt="premium">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut sed a! Earum voluptas, repudiandae possimus, quos tempore fugiat, veniam ipsam doloremque sed maxime libero blanditiis sint sunt pariatur reprehenderit!</p>
            </div>

            <div class="box">
              <img src="images/fresh.png" alt="fresh">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut sed a! Earum voluptas, repudiandae possimus, quos tempore fugiat, veniam ipsam doloremque sed maxime libero blanditiis sint sunt pariatur reprehenderit!</p>
            </div>

            <div class="box">
              <img src="images/heart2.png" alt="fresh">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut sed a! Earum voluptas, repudiandae possimus, quos tempore fugiat, veniam ipsam doloremque sed maxime libero blanditiis sint sunt pariatur reprehenderit!</p>
            </div>

        </section>
@endsection

<?php
session_start();

// Database connection
$servername = "leaderreader";
$username = "0";
$password = "0";
$database = "leaderreader";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// User authentication
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, username, password, full_name, role FROM users WHERE username=? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($userId, $dbUsername, $dbPassword, $fullName, $userRole);
        $stmt->fetch();

        // Verify password (you should use password_hash() and password_verify() in a real-world scenario)
        if ($password === $dbPassword) {
            $_SESSION["user_id"] = $userId;
            $_SESSION["username"] = $dbUsername;
            $_SESSION["full_name"] = $fullName;
            $_SESSION["role"] = $userRole;

            // Redirect to the dashboard or home page
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
}

$conn->close();
?>
