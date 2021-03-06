@extends('adminlte::layouts.app')
@section('htmlheader_title')
	Formulario
@endsection
@section('contentheader_title')
	Usuários
@endsection
@section('main-content')
 <div class="container">
  
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-success">
                <div class="box-header">
              <div class="box-title">                             	                   
					Informe a baixo as informações do Usuário				           	
              </div>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 10px;">
                  <div class="input-group-btn">
                    <a href="{{url('manage/users')}}" class="btn btn-primary"> Listagem &nbsp;<i class="fa fa-list-alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
                <div class="panel-body"> 
                    @if(Session::has('mensagem_erro'))
                        <div class="alert alert-success">{{ Session::get('mensagem_erro')}}</div>
                    @endif 
                    {!! Form::open(['url'=>'manage/users/salvar']) !!}

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {!! Form::label('name','Nome:') !!}                
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ old('name') }}" autofocus/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                            {!! Form::label('cpf','CPF') !!}
                            <input type="text" id="cpf" name="cpf" class="form-control" placeholder="999.999.999-99" data-mask="000.000.000-00">  
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                            {!! Form::label('tipo_contato_id','Tipo Contato') !!} 
                               <select class="form-control " data-placeholder="Selecione" style="width: 100%;"name="tipo_contato_id" id="tipo_contato_id" >
                                  <option value="" >Selecione</option>         
                                  @foreach($tipo_contatos as $tipo_contato_id)  
                                      <option value="{{$tipo_contato_id->id}}" >{{$tipo_contato_id->descricao_contato}}</option>
                                  @endforeach
                               </select>                 
                    </div>                     
                    <div class="form-group has-feedback">
                            {!! Form::label('contato','Contato') !!}
                            <input type="text" id="contato" name="contato" class="form-control" placeholder="61995405798" data-mask="5500000000000">  
                            <span class="glyphicon glyphicon-cell form-control-feedback"></span>
                    </div>
                    @if (config('auth.providers.users.field','email') === 'username')      
                         <input type="text" name="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}"  value="{{ old('email')}}">  
                    @endif

                    <div class="form-group has-feedback">
                        {!! Form::label('email','E-Mail') !!}
                        <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>                                                           
                    <div class="form-group has-feedback">
                        {!! Form::label('password','Senha') !!}
                        <input type="password" id="txtName" value="" class="form-control" placeholder="******" name="password"/><br>                      
                    </div>
                    {!! Form::submit('Criar Usuário',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
</div>
@endsection 
<script>    
$(document).ready(function() {

var c = document.getElementById("chkField");
var txt = document.getElementById("txtName");

if(c !== undefined) {
   c.onclick = function(event) {
       txt.disabled = this.checked;
   }
}

});
</script>