<?php
$host = 'sql113.infinityfree.com';
$db = 'if0_37588923_employee_management';
$user = 'if0_37588923'; // or your db username
$pass = 'emplyeesytm24'; // or your db password

$conn = new mysqli ("sql113.infinityfree.com', 'if0_37588923', 'emplyeesytm24', if0_37588923_employee_management");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
