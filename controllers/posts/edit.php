<?php 
require "Validator.php";
$pageTitle = "Emuārs - Izveidot";
// stuff
if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}
$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"],];
$post = $db->query($sql,$params)->fetch(); 
// fix
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = [];
    if(!Validator::string($_POST["content"],max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
    if (empty($errors)){
        $sql = "UPDATE posts SET content = :content WHERE id = :id";
        $params = [
            "content" => $_POST["content"],
            "id" => $_GET["id"],];
        $db->query($sql, $params);
        header("Location: /");
        exit();
    }
}
require "./views/posts/edit.view.php";