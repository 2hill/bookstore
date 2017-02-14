<?php
require_once __DIR__ . '/../config/boot.php';
require_once __DIR__ . '/../layout/start.html';

// Gets data from DB
preg_match("/\/authors\/(.+)/", $_SERVER['REQUEST_URI'], $matches);
$id = $matches[1];
$statement = $pdo->prepare("SELECT * FROM authors WHERE id = :id LIMIT 1");
$statement->bindValue('id', $id, PDO::PARAM_INT);
$statement->execute();
$author = $statement->fetch(PDO::FETCH_ASSOC);

echo '<h1>'.$author['name'].'</h1>';
echo '<p>From '.$author['company'].' in '.$author['town'].'</p>';

require_once __DIR__ . '/../layout/end.html';
