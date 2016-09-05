<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideia extends Model
{
    protected $fillable = [
		'nome',
		'email',
    	'telefone',
    	'endereco',
    	'ideia'
    ];
}
