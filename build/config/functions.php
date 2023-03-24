

<?php

function GetFilmActor($ID_film, $show_ID, $show_photo, $show_name){
if(require("connexion.php")){

// selectionne ID_actor dans film_actor là où film.ID_film = film_actor.ID_film
$ID_actor_request=$con->prepare(
    "SELECT
        ID_actor
    FROM film_actor
    WHERE ID_film = $ID_film");
$ID_actor_request->execute();
while($ID_actor=$ID_actor_request->fetch()){

    // selectionne * dans actor là où film_actor.ID_actor = actor.ID_actor
    $actor_request=$con->prepare(
        "SELECT
            *
        FROM actor
        WHERE ID_actor =  $ID_actor[0]"
        );
    $actor_request->execute();
    while($actor=$actor_request->fetch()){

        $actor_ID = $actor['ID_actor'];
        $actor_photo = $actor['actor_photo'];
        $actor_name = $actor['actor_name'];

        if($show_ID=="true"){
            echo $actor_ID, '<br>';
        }
        if($show_photo=="true"){
            echo $actor_photo, '<br>';
        }
        if($show_name=="true"){
            echo $actor_name, '<br>';
        }

    }
}
}
}


function GetFilmRealisator($ID_film, $show_ID, $show_photo, $show_name){
    if(require("connexion.php")){
    
    // selectionne ID_realisator dans film_realisator là où film.ID_film = film_realisator.ID_film
    $ID_realisator_request=$con->prepare(
        "SELECT
            ID_realisator
        FROM film_realisator
        WHERE ID_film = $ID_film");
    $ID_realisator_request->execute();
    while($ID_realisator=$ID_realisator_request->fetch()){
    
        // selectionne * dans realisator là où film_realisator.ID_realisator = realisator.ID_realisator
        $realisator_request=$con->prepare(
            "SELECT
                *
            FROM realisator
            WHERE ID_realisator =  $ID_realisator[0]"
            );
        $realisator_request->execute();
        while($realisator=$realisator_request->fetch()){
    
            $realisator_ID = $realisator['ID_realisator'];
            $realisator_photo = $realisator['realisator_photo'];
            $realisator_name = $realisator['realisator_name'];
    
            if($show_ID=="true"){
                echo $realisator_ID, '<br>';
            }
            if($show_photo=="true"){
                echo $realisator_photo, '<br>';
            }
            if($show_name=="true"){
                echo $realisator_name, '<br>';
            }
    
        }
    }
    }
    }

function GetFilmGenre($ID_film, $show_ID, $show_name){
    if(require("connexion.php")){
    
    // selectionne ID_genre dans film_genre là où film.ID_film = film_genre.ID_film
    $ID_genre_request=$con->prepare(
        "SELECT
            ID_genre
        FROM film_genre
        WHERE ID_film = $ID_film");
    $ID_genre_request->execute();
    while($ID_genre=$ID_genre_request->fetch()){
    
        // selectionne * dans genre là où film_genre.ID_genre = genre.ID_genre
        $genre_request=$con->prepare(
            "SELECT
                *
            FROM genre
            WHERE ID_genre =  $ID_genre[0]"
            );
        $genre_request->execute();
        while($genre=$genre_request->fetch()){
    
            $genre_ID = $genre['ID_genre'];
            $genre_name = $genre['genre_name'];
    
            if($show_ID=="true"){
                echo $genre_ID, '<br>';
            }
            if($show_name=="true"){
                echo $genre_name, '<br>';
            }
    
        }
    }
    }
    }

function GetFilmScenarist($ID_film, $show_ID, $show_photo, $show_name){
    if(require("connexion.php")){
    
    // selectionne ID_scenarist dans film_scenarist là où film.ID_film = film_scenarist.ID_film
    $ID_scenarist_request=$con->prepare(
        "SELECT
            ID_scenarist
        FROM film_scenarist
        WHERE ID_film = $ID_film");
    $ID_scenarist_request->execute();
    while($ID_scenarist=$ID_scenarist_request->fetch()){
    
        // selectionne * dans scenarist là où film_scenarist.ID_scenarist = scenarist.ID_scenarist
        $scenarist_request=$con->prepare(
            "SELECT
                *
            FROM scenarist
            WHERE ID_scenarist =  $ID_scenarist[0]"
            );
        $scenarist_request->execute();
        while($scenarist=$scenarist_request->fetch()){
    
            $scenarist_ID = $scenarist['ID_scenarist'];
            $scenarist_photo = $scenarist['scenarist_photo'];
            $scenarist_name = $scenarist['scenarist_name'];
    
            if($show_ID=="true"){
                echo $scenarist_ID, '<br>';
            }
            if($show_photo=="true"){
                echo $scenarist_photo, '<br>';
            }
            if($show_name=="true"){
                echo $scenarist_name, '<br>';
            }
    
        }
    }
    }
    }

?>