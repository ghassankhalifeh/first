<?php
require_once "pdo.php";
$stmt = $pdo->query('select name, email, password from users');
echo '<table border="1">'."\n";
echo "<tr><td>";
echo('name');
echo("</td><td>");
echo('email address');
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr><td>";
  echo($row['name']);
  echo("</td><td>");
  echo($row['email']);
  echo("</td></tr>\n");
}
echo "</table>\n";
 ?>
