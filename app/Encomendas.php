<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Encomendas extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'descricao', 'nota_fiscal', 'status_id','arquivo','tipo_id','cliente_recebedor','data_entrega',
        'status_encomenda','user_id_cadastro'
    ];  
    
    public function status()
    {
        return $this->belongsTo('App\Status');        
    }
    public function user()
    {
        return $this->belongsTo('App\User');        
    }
}
