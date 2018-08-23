@extends('adminlte::layouts.app')
@section('htmlheader_title')
	Formulario
@endsection
@section('contentheader_title')
	Permissões
@endsection
@section('main-content')
<div class="container">  
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-success">
                <div class="box-header">
					<div class="box-title">                             	                   
						Informe a baixo as informações da Permissão			           	
					</div>
					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 10px;">
						  <div class="input-group-btn">
							<a href="{{url('manage/permissions')}}" class="btn btn-primary"> Listagem &nbsp;<i class="fa fa-list-alt"></i></a>
						  </div>
						</div>
					</div>
				</div>
                <div class="panel-body"> 
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
                    @endif 
                    
                    {{ Form::open(['url'=>'manage/permissions/salvar']) }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                                                     
                    {!! Form::label('display_name','Nome') !!}
                    {!! Form::input('text','display_name',null,['class'=>'form-control','autofocos','required','placeholder' => 'Nome']) !!}  
                                                     
                    {!! Form::label('name','Slug') !!}
                    {!! Form::input('text','name',null,['class'=>'form-control','autofocos','required','placeholder' => 'Slug']) !!}   
                    
					{!! Form::label('description','Descrição') !!}
                    {!! Form::input('text','description',null,['class'=>'form-control','autofocos','required','placeholder' => 'Descrição']) !!}  
                                    </br>
                    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}                                   
                     
                </div> 
            </div>
        </div>
    </div>
</div> 
@endsection
