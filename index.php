<?php
    require_once './includes/BlogItem.Class.php';
    require_once './includes/Data.Class.php';
    include './templates/header.php';

    $blogs = [];
?>

<h1>Welcome to Krisztina's PHP Blog Practice</h1>

<?php
    // Brings in json data from Data.Class.php
    $myData = getData::fetchData();

    if ( $myData )
    {
        foreach ( $myData as $blog )
        { 
            
            $blogs[] = new BlogItem( 
                $blog['id'],
                $blog['title'],
                $blog['content']
            );
        }
    }
?>

<?php if ( !empty( $blogs ) ) : ?>
    <h2>Blog Posts:</h2>
    <form action="index.php" method="get">
        <label for="search">
            <input type="text" id="search" name="search">
        </label>
        <input type="submit" value="Search">
    </form>
    <!-- <?php var_dump ( $blogs ); ?> -->
    <?php foreach ( $blogs as $blog ) $blog->display(); ?>
<?php else : ?>
    <p>No posts to display!</p>

<?php endif; ?>



<?php
    include './templates/footer.php';
?>