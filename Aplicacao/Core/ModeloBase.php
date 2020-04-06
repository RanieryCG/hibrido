<?php

namespace Aplicacao\Core;

use Illuminate\Database\Eloquent\Model as Eloquent; 

class ModeloBase extends Eloquent
{
    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'modificado_em';
}