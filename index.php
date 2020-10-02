<?php
    require_once './includes/BlogItem.Class.php';
    include './templates/header.php';

    $blogs = [];
?>

<h1>Welcome to Krisztina's PHP Blog Practice</h1>

<?php
    // Brings in json data
    $blogFileString = file_get_contents( './data/articles.json' );

    // If variable isn't empty, converts string to php
    if ( $blogFileString )
    {
        $blogItemArray = json_decode( $blogFileString, true );
        // If array is not empty, print out items
        if ( $blogItemArray )
        {
            foreach ( $blogItemArray as $blog )
            { 
                
                $blogs[] = new BlogItem( 
                    $blog['id'],
                    $blog['title'],
                    $blog['content']
                );
            }
        }
    }
?>

<?php if ( !empty( $blogs ) ) : ?>
    <h2>Blog Posts:</h2>
    <!-- <?php var_dump ( $blogs ); ?> -->
    <?php foreach ( $blogs as $blog ) $blog->display(); ?>
<?php else : ?>
    <p>No posts to display!</p>

<?php endif; ?>



<?php
    include './templates/footer.php';
?>