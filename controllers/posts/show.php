<?php 
if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}

$sql = "SELECT posts.id, posts.content, posts.category_id, categories.category_name 
FROM posts 
LEFT JOIN categories ON posts.category_id = categories.id 
WHERE posts.id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql,$params)->fetch(); 

$sql = "SELECT comments.autors, comments.datums, comments.coment, posts.id
FROM comments 
LEFT JOIN posts ON comments.comnt_id = posts.id 
WHERE comments.comnt_id = :id";
$params = ["id" => $_GET["id"]];
$comment = $db->query($sql,$params)->fetch(); 
if(!$post){
    redirectIfNotFound();
}

require "views/posts/show.view.php";