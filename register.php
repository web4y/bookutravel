<?php
require_once 'db/db_connection.php';
$response = '';
$username = '';
$password = '';
if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = register($db, $username, $password);

    if ($result) {
        header("Location: login.php");
        exit;
    } else {
        $response = 'Error';
    }
}
require_once 'register_form.php';