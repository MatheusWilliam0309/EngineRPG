<?php
// Controller/CampanhasController.php

class CampanhasController {
    public function index() {
        $model = new CampanhasModel();
        $listaCampanhas = $model->getTodas();
        
        // Caminho para a View (Pasta singular, arquivo plural)
        require_once 'View/campanhas.php';
    }

    public function detalhes() {
        // Para a página individual da campanha (dashboard)
        require_once 'View/campanhas.php';
    }
}