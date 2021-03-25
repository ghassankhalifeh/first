<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=temp','gus','goofy');
//see the error folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>
