<?php

namespace Dominios\Errors\Controllers;

class IndexController
{
    public function index()
    {
        return 'Rota não existe';
    }

    public function erro500()
    {   
        return 'Erro ao salvar';
    }
}