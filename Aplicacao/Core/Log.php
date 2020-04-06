<?php

namespace Aplicacao\Core;



class Log extends ModeloBase
{
    protected $table = 'logs';

    CONST TIPO_ERRO = 'ERRO';
    CONST TIPO_INSERIDO = "INSERIDO";
    
    protected $fillable = [
        'descricao',
        'tabela',
        'objeto_id',
    ];

    // Cria e salva no banco novo cliente
    public function novo($descricao, $tabela, $objetoId = null) : void
    {
        $log = new Log();
        $log->fill([
            'descricao' => $descricao,
            'tabela' => $tabela,
            'objeto_id' => $objetoId,
        ]);
        $log->save();
        
    }
}