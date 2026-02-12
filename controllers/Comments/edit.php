<?php 
require "Validator.php";
$pageTitle = "Emuārs - Izveidot";

if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}
$sql = "SELECT * FROM comments WHERE comnt_id = :id";
$params = ["id" => $_GET["id"],];
$comment = $db->query($sql,$params)->fetch(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = [];
    if(!Validator::string($_POST["coment"],max: 255)){
        $errors["coment"] = "Saturam jābūt ievadītam un ne vairāk par 255";
    }
    if (empty($errors)){
        $sql = "UPDATE comments SET coment = :coment WHERE comnt_id = :id";
        $params = [
            "coment" => $_POST["coment"],
            "id" => $_POST["id"],];
        $db->query($sql, $params);
        header("Location: /show?id=".$_POST['id']);
        exit();
    }
}
require "./views/comments/edit.view.php";