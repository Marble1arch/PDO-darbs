<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "DELETE FROM categories WHERE id = :id";
    $params = ["id" => $_POST["id"],];
    $id = $_POST["id"];
    $countRow = $db->query("SELECT COUNT(*) AS cnt FROM posts WHERE category_id = :id", ['id' => $id])->fetch();
    $_SESSION[]= "";
    if ($countRow && $countRow['cnt'] > 0) {
        $_SESSION["delete"] = "Nevar izdēst kategoriju, jo ir kāds posts!";
    header('Location: /-cat');
    exit;
}else if($_SERVER["REQUEST_METHOD"] == "POST"){
        $db->query($sql,$params);
        header('Location: /-cat');
        exit;
}
}