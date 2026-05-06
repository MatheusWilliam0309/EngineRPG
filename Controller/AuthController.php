<?php

class AuthController {
    public function login() {
        require_once 'view/login.php';
    }

    public function cadastro() {
        require_once 'view/cadastro.php';
    }

    public function autenticar() {
        // Lógica para validar login e criar sessão
        header('Location: index.php?page=home');
    }

    public function registrar() {
        // Lógica para salvar usuário e redirecionar
        header('Location: index.php?page=login');
    }
}
?>