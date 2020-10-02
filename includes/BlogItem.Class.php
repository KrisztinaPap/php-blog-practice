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
        ?>
            <h3><?php echo $this->title; ?></h3>
        
            <p><?php echo $this->content; ?></p>
    <?php
    }
}
?>