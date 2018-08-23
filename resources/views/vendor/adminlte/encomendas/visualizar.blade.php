@extends('adminlte::layouts.app')
@section('htmlheader_title')
	Encomenda
@endsection
@section('contentheader_title')
    Encomenda
@endsection
@section('main-content')

<div class="container">
    <section id="section-principal" class="content">
        <div class="row">
            <div class="col-md-9 col-md-offset-0">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title text-center">Dados da Encomenda</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                            @foreach($encomendas as $encomenda)
                        <div class="col-md-9">
                            <h4><strong>Descrição:      </strong > {{$encomenda->descricao}}</h4>
                            <h4><strong>Nº nota Fiscal: </strong>{{$encomenda->nota_fiscal}}</h4>
                            <h4><strong>Status:         </strong>{{$encomenda->descricao_status}}</h4>
                            <h4><strong>Cadastrado por: </strong>{{$encomenda->name}}</h4>                                    
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="col-xs-9">	
                            <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-info"><i class="fa fa-arrow-left"></i> Voltar</button>                   
                        </div>
                    </div>            
                </div>
            </div>
			<div class="col-md-9 col-md-offset-0">
				<div class="box box-success">
					<div class="box-header">
						<div class="box-title">                             	                   
									Datas de Alteracões			           	
						</div>              
					</div>
					<div class="box-body table-responsive no-padding">                
						<table class="table table-hover"> 
							<tbody>  
								<tr>                         
									<th>Data de Entrega: </th>
									<th>Data de Cadastro: </th>                                  
									<th>Data de Alteracao: </th> 
								</tr> 
								<tr>                                        
									<td>{{  date('d/m/Y',strtotime($encomenda->data_entrega))}}</td>
									<td>{{  date('d/m/Y',strtotime($encomenda->created_at))}}</td>                                     
									<td>{{  date('d/m/Y',strtotime($encomenda->updated_at))}}</td> 
								</tr> 
							</tbody>   
							@endforeach
						</table>      
					</div>
				</div>
			</div>
  </section>
</div>         
@endsection
