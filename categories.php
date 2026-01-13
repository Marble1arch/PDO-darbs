<?php 
require_once "functions.php";
require_once "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);
    $sql_query = "SELECT * FROM categories";
    $params =[];
$sql_query = "SELECT * FROM categories";
if(isset($_GET["search_query"]) && trim($_GET["search_query"]) != ""){
    $sql_query .= " WHERE category_name LIKE :search";
    $params["search"] = "%".$_GET["search_query"]. "%";
}
$categories = $db->query($sql_query,$params)->fetchAll(PDO::FETCH_ASSOC);
    echo "</ul>";
    echo "<h1>"."Emuārs"."</h1>";
    echo "<form>";
    echo "<input name='search_query' />";
    echo "<button>Meklēt</button>";
    echo "</form>";

    echo "<ul>";
        foreach($categories as $categorie) {
            echo "<li>" . $categorie["category_name"] . "</li>";
        }
    echo "</ul>";