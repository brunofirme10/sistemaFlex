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
                        <div class="col-md-8">
                            <h4><strong>Nome:</strong> {{$permission->display_name}}</h4>
                            <h4><strong>Slug:</strong> {{$permission->name}}</h4>
                            <h4><strong> Descriçõa: </strong>{{$permission->description}}</h4>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="col-xs-12">	
                            <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-info"><i class="fa fa-arrow-left"></i> Voltar</button>                   
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </section>
</div>         
@endsection