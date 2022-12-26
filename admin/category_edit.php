<?php
include '../lib/includes.php';

if (isset($_POST['name']) && isset($_POST['slug'])) {
    checkCsrf();
    $slug = $_POST['slug'];

    if (preg_match('%[ˆa-zA-Z0-9_-]$%', $slug)) {
        $name = $db->quote($_POST['name']);
        $slug = $db->quote($_POST['slug']);
        $db->query("INSERT INTO categories SET name=$name, slug=$slug");
        setFlash('La catégorie a bien été ajoutée');
        header('Location:category.php');
        die();
    } else {
        setFlash('Le slug n\'est pas valide', 'danger');
    }
}

include '../partials/admin_header.php';
?>

<h1>Editer une catégorie</h1>

<form action="#" method="POST">

    <div class="form-group">
        <label for="name">Nom de la catégorie</label>
        <?php echo input('name'); ?>
    </div>

    <div class="form-group">
        <label for="slug">URL de la catégorie</label>
        <?php echo input('slug'); ?>
    </div>
    <?= csrfInput(); ?>
    <button type="submit" class="btn btn-default">Enregistrer</button>
</form>

<?php
include '../partials/footer.php';
