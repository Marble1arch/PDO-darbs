<?php 
require "Validator.php";
$pageTitle = "Emuārs - Izveidot";
// stuff
if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}
$sql = "SELECT * FROM comments WHERE comnt_id = :id";
$params = ["id" => $_GET["id"],];
$post = $db->query($sql,$params)->fetch(); 
// fix
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = [];
    if(!Validator::string($_POST["coment"],max: 5200)){
        $errors["coment"] = "Saturam jābūt ievadītam";
    }
    if (empty($errors)){
        $sql = "UPDATE comments SET coment = :coment WHERE comnt_id = :id";
        $params = [
            "coment" => $_POST["coment"],
            "id" => $_GET["id"],];
        $db->query($sql, $params);
        header("Location: /show?id=".$_POST['id']);
        exit();
    }
}
require "./views/categories/edit.view.php";