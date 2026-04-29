<?php
/**
 * EngineRPG - Front Controller
 * Este arquivo centraliza todas as requisições e as direciona para os Controllers.
 */

// 1. Autoload de Classes
// Procura automaticamente por arquivos nas pastas Controllers e Models
spl_autoload_register(function ($class_name) {
    $dirs = ['Controller', 'Model'];
    foreach ($dirs as $dir) {
        $file = __DIR__ . '/' . $dir . '/' . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// 2. Captura da Rota
// Usamos o parâmetro 'page' da URL (ex: index.php?page=campanhas)
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// 3. Sistema de Roteamento
switch ($page) {
    case 'home':
        require_once 'View/Home.php';
        break;
    case 'campanhas':
        $controller = new CampanhasController();
        $controller->index();
        break;
    case 'marketplace':
        $controller = new MarketplaceController();
        $controller->index();
        break;
    case 'cronicas':
        $controller = new CronicasController();
        $controller->index();
        break;
    default:
        require_once 'View/Home.php';
        break;
}