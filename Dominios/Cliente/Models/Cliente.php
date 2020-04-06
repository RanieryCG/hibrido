<?php

namespace Dominios\Cliente\Models;

use Aplicacao\Core\Log;
use Aplicacao\Core\ModeloBase;
use Illuminate\Support\Facades\DB;

class Cliente extends ModeloBase
{
    protected $table = 'clientes';

    protected $fillable = [
        'nome_completo',
        'email',
        'cpf',
        'telefone'
    ];

    // Cria e salva no banco novo cliente
    public function novo($nomeCompleto, $email, $cpf, $telefone = null) : void
    {
        try {
            
                $cliente = new Cliente();

                $cliente->fill([
                    'nome_completo' => $nomeCompleto,
                    'email' => $email,
                    'cpf' => $cpf,
                    'telefone' => $telefone,
                ]);
                $cliente->save();
                $log = new Log();

                $log->novo(
                    'Novo registro',
                    'clientes',  
                    $cliente->id,
                );
            
            header('Location: /cliente');
        } catch (\Throwable $th) {
            $log = new Log();
            $log->new(
                'Erro ao salvar registro',
                'clientes',  
            );
            header('Location: /cliente');
        }
        
    }

    // Cria e salva no banco novo cliente
    public function atualizar(Cliente $cliente, $nomeCompleto, $email, $cpf, $telefone = null) : void
    {
        try {
            
            $cliente->fill([
                'nome_completo' => $nomeCompleto,
                'email' => $email,
                'cpf' => $cpf,
                'telefone' => $telefone,
            ]);
            $cliente->save();
            $log = new Log();

            $log->novo(
                'Atualizou o registro',
                'clientes',  
                $cliente->id,
            );
        
            header('Location: /cliente');
            
        } catch (\Throwable $th) {
            $log = new Log();
            $log->new(
                'Erro ao atualizar registro',
                'clientes',  
                $cliente->id,
            );
            header('Location: /cliente');
        }
        
    }

    // Deleta o cliente
    public function remover(Cliente $cliente)
    {
        try {
            
            $cliente->delete();
            $log = new Log();

            $log->novo(
                'Excluiu o registro',
                'clientes',  
                $cliente->id,
            );
        
            header('Location: /cliente');
            
            header('Location: /cliente');
        } catch (\Throwable $th) {
            $log = new Log();
            $log->novo(
                'Erro ao deletar o registro',
                'clientes',  
                $cliente->id,
            );
            header('Location: /cliente');
        }
    }
}