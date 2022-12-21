<?php $auth = 0; ?>
<?php include 'lib/includes.php'; ?>
<?php include 'partials/header.php'; ?>

<?php
var_dump($_POST);
$_POST
?>

<form action="#">

    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-default">Se connecter</button>
</form>

<?php include 'partials/footer.php'; ?>