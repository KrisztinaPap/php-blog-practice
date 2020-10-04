<?php
    require_once './includes/BlogItem.Class.php';
    require_once './includes/Data.Class.php';
    include './templates/header.php';

    $blogs = [];
    $searchTerm = '';
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

    if (isset($_POST['search'])) {
        $filteredArray = [];
        // Converts the array value to a string
        $searchTerm =  strtolower(implode($_POST));
        if ( $searchTerm !== '' ) {
            foreach ( $blogs as $blog ) {
                $blogContent =  strtolower($blog->content);
                if ( strpos( $blogContent, $searchTerm ) !== false )
                {
                    array_push( $filteredArray, $blog );
                }
            }
        }
    }
?>

<?php if ( !empty( $blogs ) ) : ?>
    <h2>Blog Posts:</h2>
    <form action="index.php" method="POST">
        <input type="text" id="search" name="search">
        <button type="btn" value="Search">Search</button>
    </form>
    <?php if ( !empty( $filteredArray ) ) : ?>
        <?php foreach ( $filteredArray as $blog ) $blog->display(); ?>
    <?php else : ?>
        <?php foreach ( $blogs as $blog ) $blog->display(); ?>
    <?php endif; ?>
<?php else : ?>
    <p>No posts to display!</p>

<?php endif; ?>



<?php
    include './templates/footer.php';
?>