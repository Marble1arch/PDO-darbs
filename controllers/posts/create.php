<?php
$pageTitle = "Emuārs - Izveidot";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO posts (content)
        VALUES(:name)";
    $params = [
        "name" => $_POST["content"],
    ];
    $db->query($sql, $params);
    header("Location: /");
    exit();
    $errors = [];
}
require "views/posts/create.view.php";
