<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "DELETE FROM categories WHERE id = :id";
    $params = ["id" => $_POST["id"],];
    $id = $_POST["id"];
    $countRow = $db->query("SELECT COUNT(*) AS cnt FROM posts WHERE category_id = :id", ['id' => $id])->fetch();
    if ($countRow && $countRow['cnt'] > 0) {
    // Redirect back to categories list with an error message
    header('Location: /-cat');
    exit;
    $db->query($sql,$params);
}
}
header("Location: /-cat");
exit();