<?php
require_once 'src/db/models/Game.php';
require_once 'src/db/Db.php';
require_once 'src/views/index.php';
require_once 'src/service/GameSrvc.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $title = $_POST['title'];
    $publisher = $_POST['publisher'];
    $rating = $_POST['rating'];
    $players = $_POST['players'];

    $game = new Game($title, $publisher, $rating, $players);
    $game->setTitle($title);
    $game->setPublisher($publisher);
    $game->setRating($rating);
    $game->setPlayers($players);

    $service = new GameSrvc;
    $service->addGame($game);
    // Example response
    $response = "Game added successfully: $title, $publisher, $rating, $players";
    echo $response;
}


?>
