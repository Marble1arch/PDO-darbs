<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "DELETE FROM comments WHERE comnt_id = :id";
    $params = ["id" => $_POST["id"],];
    $db->query($sql,$params);
}
header("Location: /show?id=".$_POST['id']);
exit();