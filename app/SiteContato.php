<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = ['Nome', 'Telefone', 'email', 'motivo_contato', 'mensagem'];
}
