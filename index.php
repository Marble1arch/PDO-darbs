<?php 
require_once "functions.php";
require_once "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);
echo "<h1>"."Emuārs"."</h1>";
echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>";
echo "</form>";
$posts = $db->query("SELECT * FROM posts");
echo "<ul>";
    foreach($posts as $post) {
        echo "<li>" . $post["content"] . "</li>";
    }
echo "</ul>";
