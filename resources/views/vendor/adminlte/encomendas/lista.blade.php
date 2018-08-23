@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Encomendas
@endsection
@section('contentheader_title')
	Encomendas
@endsection
@section('main-content')
 <div class="container">   
    <div class="row">
        <div class="col-md-11 col-md-offset-0">
            <div class="box box-success">
                <div class="box-header">
                    <div class="box-title">                             	                   
                        Encomendas					           	
                    </div>
					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 10px;">
							<div class="input-group-btn">
								<a href="{{url('encomendas/novo')}}"class="btn btn-primary">Novo&nbsp;<i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
                </div> 			
				<div class="box-body table-responsive no-padding"> 
					@if(Session::has('mensagem_sucesso'))
					<div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
					  @endif   
					<table class="table table-hover"> 
						<tbody>
							<tr>
								<th>Descrição</th>
								<th>Nº nota Fiscal</th>
								<th>Status</th>
								<th>Data da Entrega</th>   
								<th>Recebido por</th>                            
								<th>
									<i class="fa fa-eye" aria-hidden="true"></i>
								</th> 
								<th>
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</th>
								<th>
									<i class="fa fa-trash" aria-hidden="true"></i>
								</th>
							</tr>
							@foreach($encomendas as $encomenda)
						<tr id="encon_{{$encomenda->id}}">
								<td>{{$encomenda->descricao}}</td>
								<td>{{$encomenda->nota_fiscal}}</td>
								<td>{{$encomenda->descricao_status}}</td>
								<td>{{ date('d/m/Y',strtotime($encomenda->data_entrega))}}</td>
								<td>{{$encomenda->cliente_recebedor}}</td>
								<td>
									<a href="{{ url('encomendas/'.$encomenda->id.'/visualizar') }}" data-toggle="tooltip" title="" data-original-title="Visualizar"><i class="fa fa-eye" aria-hidden="true"></i></a>
								</td> 
								<td>
									<a href="{{ url('encomendas/'.$encomenda->id.'/editar') }}" data-toggle="tooltip" title="" data-original-title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								</td>  
								{{-- <td>
									<a href="{{ url('encomendas/'.$encomenda->id.'/deletar') }}" data-toggle="tooltip" title="" data-original-title="Excluir"><i class="fa fa-trash" aria-hidden="true"></i></a>
								</td>  --}}
								<td> <!--Trigger the modal with a button -->
									<a data-toggle="modal" class="clique"   data-id='{{$encomenda->id}}' data-original-title="Excluir?" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i></a>                              
									<!-- Modal -->
									<div class="modal fade" id="myModal" role="dialog">
									  <div class="modal-dialog">                                  
										<!-- Modal content-->
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button"  class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Excluir Recesso </h4>
										  </div>
										  <div class="modal-body">
											<p>  
											 Deseja realmente excluir {{ Form::label('','',['class' => 'control-label encomenda']) }}?  
											</p>
										  </div>
										  <div class="modal-footer">
											<button type="button" class="btn btn-default"  data-dismiss="modal">Não</button>
											<a type="button" class="deletar btn btn-primary" data-dismiss="modal" >Sim</a>                                        
										  </div>
										</div>                                    
									  </div>
									</div> 
								</td>                          
							</tr> 
							@endforeach
						</tbody>   
					</table>      
                </div>
            </div>
        </div>    
    </div>
</div>         
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

    $('.clique').click(function() {	

		id = $(this).attr('data-id');
		
		$('.encomenda-id').html(id);        
		console.log(id);
				
		$.get('encomendas/'+id+'/apiNome',function(data){
			$('.encomenda').html("<strong>"+data+"</strong>"); 
		}); 

		$('.deletar').click(function(){
					$.ajax({
						type:"POST",
						url: 'encomendas/'+id+'/deletar',
						_token: $('meta[name="csrf-token"]').attr('content'),
						success: function(data){
							var $tr = $("#encon_"+id);
							$tr.animate({
							    backgroundColor: "#aa0000",
								color: "#fff"
							}, 1000);
							$tr.animate({ height:"hide"}, 2000).delay(800);
						},
						refresh: true
					})
		});
	});
});
</script>
