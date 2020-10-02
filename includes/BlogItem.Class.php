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

    public function display()
    {
        echo $this->title;
        echo $this->content;
    }
}
?>