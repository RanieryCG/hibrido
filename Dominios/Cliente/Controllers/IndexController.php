<?php

namespace Dominios\Cliente\Controllers;

use Aplicacao\Core\Controller;
use Dominios\Cliente\Models\Cliente;

class IndexController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        $this->view('Cliente/Views/lista.php', ['clientes' => $clientes]);
    }

    public function criar()
    {
        $this->view('Cliente/Views/criar.php');
    }

    public function salvar()
    {
        if(isset($_POST['nome_completo']) && isset($_POST['email']) && isset($_POST['cpf'])) {
            $cliente = new Cliente();
            $cliente->novo(
                $_POST['nome_completo'],
                $_POST['email'],
                $_POST['cpf'],
                isset($_POST['telefone']) && !empty($_POST['telefone']) ? $_POST['telefone'] : null
            );
        }
    }

    public function edicao($cliente)
    {
        $cliente = Cliente::find($cliente);
        
        $this->view('Cliente/Views/editar.php', ['cliente' => $cliente]);
    }

    public function editar($cliente)
    {
        $cliente = Cliente::find($cliente);
        
        if(isset($_POST['nome_completo']) && isset($_POST['email']) && isset($_POST['cpf'])) {
            $cliente->atualizar(
                $cliente,
                $_POST['nome_completo'],
                $_POST['email'],
                $_POST['cpf'],
                isset($_POST['telefone']) && !empty($_POST['telefone']) ? $_POST['telefone'] : null
            );
        }
    }

    public function excluir($cliente)
    {
        $cliente = Cliente::find($cliente);
        
       $cliente->remover($cliente);
    }
}