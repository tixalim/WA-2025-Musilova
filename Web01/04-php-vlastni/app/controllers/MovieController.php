<?php
require_once '../models/Database.php';
require_once '../models/Movie.php';

class MovieController {
    private $db;
    private $movieModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->movieModel = new Movie($this->db);
    }

    public function createMovie() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = htmlspecialchars($_POST['title']);
            $genre = htmlspecialchars($_POST['genre']);
            $release_year = intval($_POST['release_year']);
            $rating = floatval($_POST['rating']);
            $duration = intval($_POST['duration']);
            $director = htmlspecialchars($_POST['director']);
            $summary = htmlspecialchars($_POST['summary']);

            // Uložení filmu do DB 
        if ($this->movieModel->create($title, $genre, $release_year, $rating, $duration, $director, $summary)) {
            header("Location: ../controllers/movie_list.php");
            exit();
        } else {
            echo "Chyba při ukládání filmu.";
        }
        }
    }

    public function listMovies(){
        $movies = $this->movieModel->getAll();
        include '../views/movies/movie_list.php';
    }
}

// Volání metody při odeslání formuláře
$controller = new MovieController();
$controller->createMovie();