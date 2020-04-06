<?php

namespace Aplicacao\Core;

/**
 * Classe que inicializa toda a aplicação
 */
class App 
{
    public $controller = null;
    /**
     * Método que inicializa a aplicação com suas regras de negócios
     */
    public function start() : void
    {
        $this->controller = new Controller();
        $this->controller->setUrl(new Url());
    }

}