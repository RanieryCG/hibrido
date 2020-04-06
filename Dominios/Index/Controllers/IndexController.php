<?php

namespace Dominios\Index\Controllers;

use Aplicacao\Core\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->view('Cliente/Views/criar.php');
    }
}