<?php

namespace Aplicacao\Core;

class Url
{
    /**
     * Retorna a url acessada pelo navegador
     */
    public function getPathInfo() : string
    {
        return $_SERVER["REQUEST_URI"];
    }
}