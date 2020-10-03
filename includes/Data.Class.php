<?php
class getData {
    public static function fetchData() {
        $blogFileString = file_get_contents( './data/articles.json' );
        return $blogFileString;
    }
}

?>