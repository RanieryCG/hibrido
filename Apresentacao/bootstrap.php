<?php

require_once '../vendor/autoload.php';

// Inicializa a aplicação
$app = new Aplicacao\Core\App();
$app->start();

// Acha o domínio responsável por responder o request
$app->controller->getControllerObject();