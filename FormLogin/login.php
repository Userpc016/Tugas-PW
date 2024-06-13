<?php

session_start();

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = [
        "admin" => "123456",
        "user1" => "password1",
        "user2" => "password2"
    ];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION["username"] = $username;
        header("Location: masuk.php");
        exit();
    } else {
        echo "Login gagal. Username atau password salah.";
    }
//}

?>
