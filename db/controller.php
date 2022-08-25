<?php
   include __DIR__ . '/db.php';

    header('Content-Type: application/json');



    if(isset($_GET['genre'])){
        $genre = $_GET['genre'];
        $filteredAlbums = [];
        foreach($albums as $album){
            if($album['genre'] == $genre){
                $filteredAlbums[] = $album;
            }
        }
        echo json_encode($filteredAlbums);
    }
    else{
        echo json_encode($albums);
    }
    
    
    
    
    