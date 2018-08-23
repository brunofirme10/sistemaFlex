<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\HtmlString;
use App\Http\Controllers\Input;
use Redirect;
use Illuminate\Http\Request;
use Hash;


class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $permissions = Permission::all();
        
        return view('adminlte::manage/permissions/lista',['permissions'=>$permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function novo(){
        return view('adminlte::manage/permissions/novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request){
        $this->validate($request,[
          'display_name' => 'required|max:255',
          'name' => 'required|max:255|alphadash|unique:permissions,name',
          'description' => 'sometimes|max:255'
        ]);

        $permission = new Permission();
        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->save();

        if($permission->save()){            
            return view('adminlte::manage/permissions/visualizar',['permission' =>$permission]);
        }else{
          \Session::flash('danger','Erro ao cadastrar permissão!');   
          return $request;       
        }
        
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function visualizar($id){
        $permission = Permission::findOrFail($id);
        return  view('adminlte::manage/permissions/visualizar',['permission'=>$permission]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id){
        $permission = Permission::findOrFail($id);
        return  view('adminlte::manage/permissions/editar',['permission'=>$permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, $id){
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->save();

        if($permission->save()){            
            \Session::flash('mensagem_sucesso_alteracao', 'Alteração feita com sucesso!');
            return  view('adminlte::manage/permissions/editar',['permission'=>$permission]);
        }else{
          \Session::flash('danger','Erro ao cadastrar permissão!');   
          return $request;       
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id){
        $permission = Permission::findOrfail($id);
        $permission -> delete();
        \Session::flash('mensagem_sucesso','Deletado com sucesso!');

        return Redirect::to('/manage/permissions/');       
    }
    
    public function testevue() {
        return view('adminlte::manage/permissions/testevue');
    }

    public function apiNome($id){
        $permission = Permission::findOrFail($id);

        return $permission->description;
    }
}
