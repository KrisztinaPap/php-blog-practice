<?php
    require_once './includes/BlogItem.Class.php';
    include './templates/header.php';
?>

<h1>Welcome to Krisztina's PHP Blog Practice</h1>

<?php
    $blogFileString = file_get_contents( './data/articles.json' );
    var_dump($blogFileString);
?>

<?php
    include './templates/footer.php';
?>