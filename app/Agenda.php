<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
	protected $fillable = [
        'titulo', 
        'data', 
        'hora', 
        'detalhes'
    ];
}