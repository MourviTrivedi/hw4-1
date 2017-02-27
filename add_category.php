<?php
$name = filter_input(INPUT_POST, 'name');

if ($name == null) {
$error = "invalid input";
include('error.php');
}
else {
require_once('database.php');

$query = 'INSERT INTO categories_guitar1 (categoryName)
VALUES (:name)';

$statement = $db->prepare($query);
$statement->bindValue(':name', $name);
$statement->execute();
$statement->closeCursor();

include('index.php');

}
?>
