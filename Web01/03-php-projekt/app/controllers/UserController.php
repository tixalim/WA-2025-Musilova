<?php
require_once '../models/Database.php';
require_once '../models/User.php';

class UserController {
    private $db;
    private $userModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->userModel = new User($this->db);
    }

    public function createUser() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password_hash = htmlspecialchars($_POST['password_hash']);
            $name = intval($_POST['name']);
            $surname = floatval($_POST['surname']);
            

            
            // Uložení knihy do DB - dočasné řešení, než budeme mít výpis knih
            if ($this->userModel->create($username, $email, $password_hash, $name, $surname)) {
                header("Location: ../controllers/register.php");
                exit();
            } else {
                echo "Chyba při ukládání knihy.";
            }
        }
    }

    
}

// Volání metody při odeslání formuláře
$controller = new UserController();
$controller->createUser();