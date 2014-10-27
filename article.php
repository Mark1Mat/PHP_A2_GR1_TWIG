<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';

if (!empty($_GET['id'])) {
    $id = (int) $_GET['id'];
    $article = getArticle($link, $id);
    echo $twig->render('article.html.twig', [
        'article' => $article,
    ]);
    if (!$article) {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}

require __DIR__.'/_footer.php';