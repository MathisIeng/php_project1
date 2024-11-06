<?php require_once('../../view/admin/partials/_header.php'); ?>

<h1>Créer un article</h1>
<main>
    <form method="post">

        <label for="title">Titre</label>
        <input type="text" name="title" placeholder="Entrez le titre"/>

        <label for="content">Content</label>
        <input type="text" name="content" placeholder="Entre le content"/>

        <label for="image">Image</label>
        <input type="text" name="image" placeholder="Entrez l'image"/>

        <label for="option">Choisissez une option :</label>
        <select id="option" name="option">
            <option value="Dracaufeu">Dracaufeu</option>
            <option value="Les djo d'ses morts">Le djo d'ses morts</option>
            <option value="Un p'tit wraaaap">Un p'tit wrap</option>
        </select>

        <input type="submit"/>

    </form>

    <?php if ($isArticleCreated) { ?>
        <p>Article bien créé !</p>
    <?php } else { ?>
        <p>Merci de mieux remplir les données !</p>
    <?php } ?>

</main>


