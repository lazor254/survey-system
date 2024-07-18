<?php
session_start();
require_once 'inc/db.conn.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    if ($result->num_rows > 0) {
        $_SESSION['username'] =$user;
        header('location: ./');

    } else {
        
        header('location: ./loginpg.php?msg=Invalid username or password');
    }
    
}

?>
