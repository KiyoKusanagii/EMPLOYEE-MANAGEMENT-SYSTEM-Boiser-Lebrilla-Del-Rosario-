<?php
session_start();
include 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

$id = $_GET['id'];
$query = "DELETE FROM employees WHERE id=$id";
$conn = new mysqli ("sql113.infinityfree.com', 'if0_37588923', 'emplyeesytm24', if0_37588923_employee_management");
header("Location: employees.php");
?>
