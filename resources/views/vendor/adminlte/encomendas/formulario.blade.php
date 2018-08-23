@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Encomendas
@endsection
@section('contentheader_title')
    Encomendas
@endsection
@section('main-content')
  <div class="container">  
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-success">
                <div class="box-header">
              <div class="box-title">                             	                   
					Informe a baixo as informações da encomenda		           	
              </div>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 10px;">
                  <div class="input-group-btn">
                    <a href="{{url('encomendas')}}" class="btn btn-primary"> Listagem &nbsp;<i class="fa fa-list-alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
                <div class="panel-body"> 
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
                    @endif     
                    @if(Request::is('*/editar'))
                        {{ Form::model($encomenda,['method'=>'PATCH','url'=>'encomendas/'.$encomenda->id]) }}
                    @else                            
                    {!! Form::open(['url'=>'encomendas/salvar']) !!}                 
                    @endif        
                    
                    {!! Form::label('descricao','Descrição') !!}
                    {!! Form::input('text','descricao',null,['class'=>'form-control','autofocos','required','placeholder' => 'Descrição']) !!}   
                    <br>
                    {!! Form::label('nota_fiscal','Nº nota Fiscal') !!}
                    {!! Form::input('text','nota_fiscal',null,['class'=>'form-control','autofocos','required']) !!}
                    <br>
                    <div class="col-md-6">
                    {!! Form::label('status_id','Status') !!} 
                       <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecione" style="width: 100%;"name="status_id" id="nome" >
                              <option value="" >Selecione</option>         
                          @foreach($status as $status_id)  
                              <option value="{{$status_id->id}}" 
                                              @if($encomenda->status_id == $status_id->id && Request::is('*/editar'))
                                                  {{'selected'}}
                                              @endif>                                                                            
                                              {{$status_id->descricao_status}}
                              </option>
                          @endforeach
                       </select>                 
                    </div>
                    <div class="col-md-6" >
                    {!! Form::label('data_entrega','Data da Entrega') !!} 
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>              
                    {!! Form::input('date','data_entrega',null,['class'=>'form-control','autofocos','required' ]) !!}                   
                        </div>
                    </div>
                    <br>
                    {!! Form::label('cliente_recebedor','Recebido por') !!}
                    {!! Form::input('text','cliente_recebedor',null,['class'=>'form-control','autofocos']) !!}   
                    <br>
                    {!! Form::label('arquivo','Arquivo') !!}
                    {!! Form::input('text','arquivo',null,['class'=>'form-control','autofocos','required']) !!}   
                    <br> 
                    {!! Form::hidden('user_id_cadastro', Auth::id()) !!} 
                    {!! Form::hidden('status_encomenda', '1') !!}
                    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                                     
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
</div>                
@endsection 

