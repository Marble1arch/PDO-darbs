<?php
require "Validator.php";
$pageTitle = "Emuārs - Izveidot";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["autors"],max: 50)){
        $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
    if (empty($errors)){
        $sql = "INSERT INTO comments (autors,datums, coment,comnt_id)
        VALUES(:autors, :datums, :coment, :comnt_id)";
    $params = [
        "autors" => $_POST["autors"],
        "datums" => $_POST["datums"],
        "coment" => $_POST["coment"],
        "comnt_id" => $_POST["id"]
    ];
    $db->query($sql, $params);
    header("Location: /show?id=".$_POST['id']);
    exit();
    }
}
require "views/categories/create.view.php";
