<?php

namespace Aplicacao\Core;

class Controller
{
    private $name = "IndexController";

    protected $pathController = "../../Dominios/Index/Controllers/";

    protected $method = "index";

    protected $params = [];

    protected $url = null;

    protected $explodeUrl = [];
    

    public function __construct(Url $url)
    {
        $this->url = $url->getPathInfo();
        $this->explodeUrl();
        $this->setControllerFromUrl();
        $this->setMethodFromUrl();
    }


    protected function explodeUrl() : void
    {
        if($this->url != '/')
        {
            $this->explodeUrl = array_slice(explode('/', $this->url), 1);
        }
    }

    /**
     * Acha o controller atual vindo da URL.
     */
    protected function setControllerFromUrl() : void
    {
        if(array_key_exists(0, $this->explodeUrl)) 
        {
            $ucf = ucfirst($this->explodeUrl[0]);
            $this->name = str_replace('Index', $ucf, $this->name);
            $this->pathController = str_replace('Index', $ucf, $this->pathController);
        }
    }

    /**
     * Acha o método atual vindo da URL.
     */
    protected function setMethodFromUrl() : void
    {
        if(array_key_exists(1, $this->explodeUrl)) 
        {
            $this->method = $this->explodeUrl[1];
        }
    }

    /**
     * Retorna o objeto do controller
     */
    public function getControllerObject() : void
    {
        var_dump(file_exists($this->pathController.$this->name));
    }

    /**
     * Retorna o nome do método do controller
     */
    public function getMethod() : string
    {
        return $this->method;
    }
}