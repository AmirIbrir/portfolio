<?php include 'lib/db.php'; ?>
<?php include 'lib/auth.php'; ?>
<?php include 'partials/header.php'; ?>


<h1>Mon portfolio en PHP</h1>

<?php
$select = $db->query('SELECT * FROM users');
var_dump($select->fetch());
?>

<?php include 'partials/footer.php' ?>