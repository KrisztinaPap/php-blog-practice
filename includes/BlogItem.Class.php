<?php 
class BlogItem
{
    // Properties
    public $id = 0;
    public $title = '';
    public $content = '';
    
    // Constructor 
    function __construct( $id = 0, $title = '', $content = '' )
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }
}
$newBlogItem = new BlogItem ( 3, 'welcome home', 'This is a made-up article title');
var_dump( $newBlogItem );
?>