<?php
// Model/CampanhasModel.php

class CampanhasModel {
    public function getTodas() {
        return [
            [
                'titulo' => 'Shadow Over Oakhaven',
                'status' => 'Ativa',
                'jogadores' => 4,
                'proxima' => 'Hoje 20:00',
                'gradiente' => 'linear-gradient(45deg, #1a0b0b, #2d1810)'
            ],
            [
                'titulo' => 'Lágrimas de Gelo',
                'status' => 'Pausada',
                'jogadores' => 3,
                'proxima' => 'Sem data',
                'gradiente' => 'linear-gradient(45deg, #0a1118, #101c24)'
            ]
        ];
    }
}