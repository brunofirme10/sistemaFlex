
@extends('adminlte::layouts.app')
@section('htmlheader_title')
	Usuário
@endsection
@section('contentheader_title')
	Usuário
@endsection
@section('main-content')
 <div class="container">
    <section id="section-principal" class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title text-center">Detalhes do Usuário</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-12">
                            <h4><strong>Nome:</strong> {{$user->name}}</h4>
                            <h4><strong>CPF:</strong> {{$user->cpf}}</h4>
                            <h4><strong> Telefone/Celular: </strong>{{$user->contato}}</h4>
                            <h4><strong> E-Mail: </strong>{{$user->email}}</h4>
                            <h4><strong> Data de Criação: </strong> {{ date('d/m/Y',strtotime($user->created_at))}}</h4>
                        </div>
                    </div>
                    <div class="box-footer">                        	
                            <a href="{{ url('manage/users/novo') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Voltar</a>                   
                    </div>            
                </div>
            </div>
        </div>
    </section>
</div>         
@endsection