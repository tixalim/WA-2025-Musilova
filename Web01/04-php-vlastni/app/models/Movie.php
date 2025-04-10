<?php

class Movie {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($title, $genre, $release_year, $rating, $duration, $director, $summary) {
        $sql = "INSERT INTO movies (title, genre, release_year, rating, duration, director, summary) 
                VALUES (:title, :genre, :release_year, :rating, :duration, :director, :summary)";
        
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':title' => $title,
            ':genre' => $genre,
            ':release_year' => $release_year,
            ':rating' => $rating,
            ':duration' => $duration,
            ':director' => $director,
            ':summary' => $summary
        ]);
    }

    public function getAll() {
        $sql = "SELECT * FROM movies ORDER BY id DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
