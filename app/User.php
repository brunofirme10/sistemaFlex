<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Permissao;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name', 'email', 'password','cpf','created_at','tipo_contatos_id','contato'
    ];

    public function agendas()
    {
        return $this->hasMany('App\Agenda');
    }
    public function tipo_contatos()
    {
        return $this->hasMany('App\Tipo_contatos');
    }
    
    public function user_papeis()
    {
        return $this->belongsToMany('App\User_Papel');
    }

    public function papeis()
    {
        return $this->belongsToMany('App\Papel');
    }
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    // public function hasPermissao(Permissao $permissao)
    // {
    // //  dd($permissao->papeis); // recupera papeis atribuidos a permissão
    //     return $this->hasAnyPapeis($permisssao->papeis);
    // }


  
    // public function hasPermissao(Permissao $permissao)
    // {
    // //  dd($permissao->papeis); // recupera papeis atribuidos a permissão
    //     return $this->hasAnyPapeis($permisssao->papeis);
    // }

    // public function hasAnyPapeis($papeis)
    // {
    //     if(is_array($papeis) || is_object($papeis)){
    //         foreach($papeis as $papel){
    //             return  $this->papeis->contains('nome',$papel->name);
    //         }
    //     }

    //     return  $this->papeis->contains('nome',$papeis);
    // }


}