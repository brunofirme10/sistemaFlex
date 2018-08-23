<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\Tipo_contatos;
use App\Http\Requestes;
use App\Http\Controllers\HtmlString;
use App\Http\Controllers\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $usercad = DB::table('users')->count();
        return view('adminlte::manage/users/lista',['users'=>$users,'usercad'=>$usercad]);
    }

    public function novo(){
        $tipo_contatos  = new User();
        $tipo_contatos =  Tipo_contatos::all();

        return view('adminlte::manage/users/novo',['tipo_contatos'=>$tipo_contatos]);
    }
    public function salvar(Request $request){

         $this->validate($request,[
             'name'=>'required|max:255',
             'email'=>'required|email|unique:users'
         ]);

         if (!empty($request->password)) {
             $password = trim($request->password);
         } else {
          # set the manual password
          $length = 10;
          $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
          $str = '';
          $max = mb_strlen($keyspace, '8bit') - 1;
          for ($i = 0; $i < $length; ++$i) {
              $str .= $keyspace[random_int(0, $max)];
          }
          $password = $str;
         }
       
         $user = new User();
         $user->name = $request->name;
         $user->cpf = $request->cpf;
         $user->email= $request->email;
         $user->tipo_contato_id=$request->tipo_contato_id;
         $user->contato= $request->contato;
         $user->password= hash::make($password);
         $user->save();

           if ($user->save()) {
             \Session::flash('mensagem_sucesso_alteracao', 'Salvo com sucesso!');
             return  view('adminlte::manage/users/visualizar',['user'=>$user]);
           } else {
             \Session::flash('mensagem_erro', 'Erro ao Salvar');
             return  view('adminlte::manage/users/novo',['user'=>$user]);
           }
    //   return $user->password;

    }

    public function visualizar(){
        return  view('adminlte::manage/users/visualizar',['user'=>$user]);
    }

    public function editar($id){
        $user = User::findOrFail($id);
        $tipo_contatos =  Tipo_contatos::all();
        return  view('adminlte::manage/users/editar',['user'=>$user,'tipo_contatos'=>$tipo_contatos]);
    }

    public function atualizar($id,Request $request){
        $tipo_contatos =  Tipo_contatos::all();
        $this->validate($request,[
            'name'=>'required|max:255',
        ]);
        
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->cpf = $request->cpf;
        $user->tipo_contato_id=$request->tipo_contato_id;
        $user->contato= $request->contato;
        $user->email= $request->email;
        if ($request->password_options == 'auto') {
            $length = 10;
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $str = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i = 0; $i < $length; ++$i) {
                $str .= $keyspace[random_int(0, $max)];
            }
            $user->password = Hash::make($str);
          } elseif ($request->password_options == 'manual') {
            $user->password = Hash::make($request->password);
          }

          if ($user->save()) {
            \Session::flash('mensagem_sucesso_alteracao', 'Alteração feita com sucesso!');
            return  view('adminlte::manage/users/editar',['user'=>$user,'tipo_contatos'=>$tipo_contatos]);
          } else{
            \Session::flash('mensagem_erro', 'Erro ao Salvar');
            return  view('adminlte::manage/users/editar',['user'=>$user,'tipo_contatos'=>$tipo_contatos]);
          }
    }

    public function deletar($id){
        $user = User::findOrFail($id);
        $user->delete();
        \Session::flash('mensagem_sucesso','Deletado com sucesso!');

        return Redirect::to('/manage/users');
    }

    public function userCad(){                
        $usercad = DB::table('users')->count();
        return json_encode($usercad);

    }
    public function apiNome($id){        
        $user = User::findOrFail($id);        
        return $user->name;
    }   
}

