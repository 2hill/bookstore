<?php
require_once __DIR__ . '/../config/boot.php';
require_once __DIR__ . '/../layout/start.html';

// Gets data from DB
$statement = $pdo->query("
SELECT
  b.*,
  GROUP_CONCAT(a.name SEPARATOR ', ') names
FROM
  books b
  INNER JOIN authors_books ab ON (b.id = ab.book_id)
  INNER JOIN authors a ON (a.id = ab.author_id)
GROUP BY
  b.id
ORDER BY
  b.title
;");
?>

<table class="table table-striped table-condensed">
  <tr>
    <th>ISBN</th>
    <th>Title</th>
    <th>Author(s)</th>
  </tr>
  <?php
  while($book = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>'.$book["isbn"].'</td>';
    echo '<td>'.$book["title"].'</td>';
    echo '<td>'.$book["names"].'</td>';
    echo '</tr>';
  }
  ?>
</table>

<?php
require_once __DIR__ . '/../layout/end.html';
