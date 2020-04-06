<?php

use Aplicacao\Core\Database;

require_once '../vendor/autoload.php';

// Inicializa a aplicação
$app = new Aplicacao\Core\App();
$app->start();

new Database();

// Acha o domínio responsável por responder o request
$namespaceController =  $app->controller->getNamespaceController();
$method = $app->controller->getMethodController();
$modelId = $app->controller->getModelController();
$controllerObject = new $namespaceController;
if($modelId) {
    $controllerObject->$method($modelId);
} else {
    $controllerObject->$method();
}
