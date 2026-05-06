<?php
// Controller/CronicasController.php

class CronicasController {
    /**
     * Carrega a lista de relatos e atualizações
     */
    public function index() {
        // Simulação de dados que seriam obtidos via CronicasModel
        $posts = [
            [
                'titulo' => 'O Despertar do Nevoeiro Volumétrico',
                'categoria' => 'Atualização',
                'data' => '24 de Outubro, 2024',
                'resumo' => 'Nossa última atualização traz um sistema de iluminação totalmente reformulado com sombras dinâmicas.'
            ],
            [
                'titulo' => 'Como construir tensão usando o Som Ambiente',
                'categoria' => 'Dicas do Mestre',
                'data' => '12 de Outubro, 2024',
                'resumo' => 'Aprenda como integrar o sistema de trilhas sonoras para elevar o batimento cardíaco da mesa.'
            ],
            [
                'titulo' => 'A Queda de Oakhaven: Um Estudo de Caso',
                'categoria' => 'Lore Comunitária',
                'data' => '05 de Outubro, 2024',
                'resumo' => 'Entrevistamos o grupo "Lâminas Quebradas" sobre como a campanha deles tomou um rumo drástico.'
            ]
        ];

        require_once 'view/cronicas.php';
    }
}