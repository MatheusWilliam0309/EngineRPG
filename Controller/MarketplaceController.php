<?php
// Controller/MarketplaceController.php

class MarketplaceController {
    /**
     * Carrega a página principal do Marketplace Arcano
     */
    public function index() {
        // No futuro, estes dados virão do MarketplaceModel
        $itensLoja = [
            [
                'titulo' => 'Ruínas de Xal',
                'autor' => 'Eldritch Editorial',
                'preco' => 'Grátis',
                'categoria' => 'Mapa',
                'icone' => 'map'
            ],
            [
                'titulo' => 'Pack: Bestas Abissais',
                'autor' => 'ArtScribe',
                'preco' => 'R$ 15',
                'categoria' => 'Tokens',
                'icone' => 'pest_control'
            ],
            [
                'titulo' => 'O Sussurro do Pinheiro Negro',
                'autor' => 'Mestre Kaelen',
                'preco' => 'R$ 29',
                'categoria' => 'Módulo',
                'icone' => 'menu_book'
            ]
        ];

        // Renderiza a view passando os dados
        require_once 'view/marketplace.php';
    }
}