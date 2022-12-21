<?php
$auth = 0; 
include 'lib/includes.php'; 



if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $db->quote($_POST['username']);
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM users WHERE username= $username AND password = '$password'";
    $select = $db->query($sql);
    if ($select->rowCount() > 0) {
        $_SESSION['Auth'] = $select->fetch();
        header('Location:' . WEBROOT . 'admin/index.php');
    }
}

?>

include 'partials/header.php'; 

<form action="#" method="POST">

    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <?php echo input('username'); ?>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-default">Se connecter</button>
</form>

<?php include 'lib/debug.php'; ?>
<?php include 'partials/footer.php'; ?>