<?php
require_once 'src/db/Db.php';
class GameSrvc {
    private $db;

    public function __construct() {
        $this->db = new Db('back-to-the-primitive-db-1', '5432', 'collections', 'roots', 'vidyahgames');
    }

    public function getAllGames() {
        $sql = "SELECT * FROM games";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addGame(Game $game) {
        $title = $game->getTitle();
        $publisher = $game->getPublisher();
        $rating = $game->getRating();
        $numberOfPlayers = $game->getPlayers();

        $query = "INSERT INTO games (title, publisher, rating, players) VALUES (:title, :publisher, :rating, :numberOfPlayers)";
        $params = array(
            ':title' => $title,
            ':publisher' => $publisher,
            ':rating' => $rating,
            ':numberOfPlayers' => $numberOfPlayers
        );
        $this->db->query($query, $params);
    }

    public function updateGame(Game $game) {
        $id = $game->getId();
        $title = $game->getTitle();
        $publisher = $game->getPublisher();
        $rating = $game->getRating();
        $numberOfPlayers = $game->getNumberOfPlayers();


        $query = "UPDATE games SET title = :title, publisher = :publisher, rating = :rating, players = :numberOfPlayers WHERE id = :id";
        $params = array(
            ':id' => $id,
            ':title' => $title,
            ':publisher' => $publisher,
            ':rating' => $rating,
            ':players' => $numberOfPlayers
        );
        $this->db->execute($query, $params);
    }

    public function deleteGame($id) {
        
        $query = "DELETE FROM games WHERE id = :id";
        $params = array(':id' => $id);
        $this->db->execute($query, $params);
    }
}
