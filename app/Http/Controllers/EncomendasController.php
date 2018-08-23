<?php

namespace App\Http\Controllers;

use App\Status;
use App\Encomendas;
use App\Http\Requestes;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;
use App\Http\Controllers\HtmlString;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;

class EncomendasController extends Controller
{
    public function index(){
        $encomenda = new Encomendas();
        $status = DB::table('status')->select('status.*')->get();
        $encomendas = DB::table('encomendas')->select('encomendas.*','status.descricao_status')->
                      leftjoin('status','encomendas.status_id','=','status.id')->
                      get();
        
        return view('adminlte::encomendas/lista',['encomendas'=>$encomendas,'encomenda'=>$encomenda]);
    }

    public function novo(){
        $encomenda = new Encomendas();
        $status = DB::table('status')->select('id','descricao_status')->get();

        return view('adminlte::encomendas/formulario',['status'=>$status,'encomenda'=>$encomenda]);
    }

    public function salvar(Request $request){
            
        $encomenda = new Encomendas();
        $encomenda = $encomenda->create($request->all());
        \Session::flash('mensagem_sucesso','Cadastrado com sucesso!'); 

        return  Redirect::to('encomendas/novo');
    }

    public function editar($id){
        
        $encomenda = Encomendas::findOrFail($id);        
        $status    = DB::table('status')->select('id','descricao_status')->get();  
        
        return view('adminlte::encomendas/formulario',['encomenda'=>$encomenda,'status'=>$status]);
    }
    public function atualizar($id,Request $request){

        $encomenda = Encomendas::findOrFail($id);
        $encomenda->update($request->all());
     
        \Session::flash('mensagem_sucesso','Atualizado com sucesso!');

        return Redirect::to('encomendas/'.$encomenda->id.'/editar');  
       
    }

    public function deletar($id){
        
        $encomenda = Encomendas::findOrFail($id);
        $encomenda->delete();
        \Session::flash('mensagem_sucesso','Deletado com sucesso!');

        return Redirect::to('encomendas/');
    }
    public function visualizar($id){
        $encomendas = DB::table('encomendas')->
                          where('encomendas.id',$id)->
                          select('encomendas.*','status.descricao_status','users.name')->
                          leftjoin('status','encomendas.status_id','=','status.id')->
                          leftjoin('users','encomendas.user_id_cadastro','=','users.id')->
                          get();        
        return view('adminlte::encomendas/visualizar',['encomendas'=>$encomendas]);
    }
    public function apiNome($id){
        $encomenda = Encomendas::findOrFail($id);

        return $encomenda->descricao;
    }
}
