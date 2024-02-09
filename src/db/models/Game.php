<?php

class Game {
    private $title;
    private $publisher;
    private $rating;
    private $players;

    public function __construct($title, $publisher, $rating, $players) {
        $this->title = $title;
        $this->publisher = $publisher;
        $this->rating = $rating;
        $this->players = $players;
    }

    // Getters and setters
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getPlayers() {
        return $this->players;
    }

    public function setPlayers($players) {
        $this->players = $players;
    }
}
