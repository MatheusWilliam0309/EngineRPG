<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'enginerpg';
    private $username = 'root'; // Altere se o seu usuário MySQL for diferente
    private $password = '';     // Altere se o seu MySQL tiver senha (no XAMPP costuma ser vazio)
    private $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4", $this->username, $this->password);
            // Configura o PDO para lançar exceções em caso de erro
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Erro na conexão com o Vácuo (Banco de Dados): " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>