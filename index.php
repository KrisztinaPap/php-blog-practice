<?php
    require_once './includes/BlogItem.Class.php';
    include './templates/header.php';
?>

<h1>Welcome to Krisztina's PHP Blog Practice</h1>

<?php
    // Brings in json data
    $blogFileString = file_get_contents( './data/articles.json' );

    // If variable isn't empty, converts string to php
    if ( $blogFileString )
    {
        $blogItemArray = json_decode( $blogFileString );
    }
     var_dump($blogItemArray);
?>

<?php
    include './templates/footer.php';
?>