<?php
require_once 'db/db_connection.php';
$response = '';
$username = '';
$password = '';
if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $userId = verifyCredentials($db, $username, $password);

    if ($userId != -1) {
        $authString = issueAuthenticationString($db, $userId);
        header("Location: categories.php?authId=$authString");
        exit;
    } else {
        $response = "Invalid username or password";
    }
}

require_once 'login_form.php';