<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_contatos extends Model
{
    protected $fillable = [
        'id','descricao'
    ];
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
