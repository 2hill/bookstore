<?php
require_once __DIR__ . '/../config/boot.php';
require_once __DIR__ . '/../layout/start.html';

// Gets data from DB
$statement = $pdo->query("SELECT * FROM authors");
?>

<ul>
  <?php while($author = $statement->fetch(PDO::FETCH_ASSOC)) { ?>
    <li><a href="/authors/<?php echo $author["id"]; ?>"><?php echo $author["name"]; ?></a></li>
  <?php } ?>
</table>

<?php
require_once __DIR__ . '/../layout/end.html';
