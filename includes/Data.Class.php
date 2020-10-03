<?php
class getData {
    public static function fetchData() {
        $blogFileString = file_get_contents( './data/articles.json' );
        
        if ( $blogFileString )
        {
            $blogItemArray = json_decode( $blogFileString, true );
        }
        return $blogItemArray;
    }
}
?>