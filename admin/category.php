<?php
include '../lib/includes.php';
include '../partials/admin_header.php';

$select = $db->query('SELECT id, name, slug FROM categories');
$categories = $select->fetchAll();


/**
 * SUPPRESSION
 */
if (isset($_GET['delete'])) {
    checkCsrf();
}
?>

<h1>LES CATÉGORIES</h1>


<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?= $category['id']; ?></td>
                <td><?= $category['name']; ?></td>
                <td>
                    <a href="category_edit.php?id=<?= $category['id']; ?>" class="btn btn-default">Edit</a>
                    <a href="?delete=<?= $category['id']; ?>&<?=csrf(); ?>" class="btn btn-error" onclick="return confirm('voulez-vous vraiment supprimer ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include '../partials/footer.php';
