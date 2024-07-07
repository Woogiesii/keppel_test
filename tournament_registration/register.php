<?php
session_start();
include 'db_config.php';

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $teamName = $_POST['teamName'];
    $captainName = $_POST['captainName'];
    $captainPhone = $_POST['captainPhone'];
    $memberName = $_POST['memberName'];
    $memberPhone = $_POST['memberPhone'];
    $gender = $_POST['gender'];

    $sql = "SELECT * FROM teams WHERE team_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $teamName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header('Location: finish.php');
        exit();
    } else {
        $sql = "INSERT INTO teams (team_name, captain_name, captain_phone, member_name, member_phone, gender) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $teamName, $captainName, $captainPhone, $memberName, $memberPhone, $gender);
        if ($stmt->execute()) {
            header('Location: finish.php');
            exit();
        } else {
            echo 'Error: ' . $conn->error;
        }
    }
}
?>
