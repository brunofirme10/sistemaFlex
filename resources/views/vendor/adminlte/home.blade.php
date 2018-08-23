@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						{{ trans('adminlte_lang::message.logged') }}<br>
						{{ Form::label('','',['class' => 'control-label func-nome']) }}
					</div>
				</div>
			</div>			
		</div>
		{{-- <div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Area Chart</h3>
			
						  <div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						  </div>
						</div>
						<div class="box-body chart-responsive">
						  <div class="chart" id="revenue-chart" style="height: 300px;"><svg height="300" version="1.1" width="570" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.700012px;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,261H545" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">7,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,202H545" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">15,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,143H545" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="84.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4.000000000000028">22,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,84.00000000000003H545" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="25.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4.000000000000028">30,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,25.00000000000003H545" stroke-width="0.5"></path><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="457.0911806399352" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4">2013</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="244.07295463750506" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4">2012</tspan></text><path style="fill-opacity: 1;" fill="#74a5c2" stroke="none" d="M66,219.05493333333334C79.38639125151883,219.56626666666668,106.1591737545565,222.62345,119.54556500607534,221.10026666666667C132.93195625759418,219.57708333333335,159.70473876063184,209.13609859561225,173.09113001215067,206.86946666666668C186.32595433373837,204.62849859561226,212.79560297691373,204.88132019993895,226.03042729850142,203.06986666666666C239.27737697448362,201.25675353327227,265.77127632644795,194.9135027923211,279.01822600243014,192.3712C292.40461725394897,189.80213612565444,319.17739975698663,182.51721666666668,332.56379100850546,182.6244C345.9501822600243,182.73158333333333,372.72296476306195,204.18306539133076,386.1093560145808,193.22866666666667C399.3441803361685,182.39829872466407,425.81382897934384,101.94099634745245,439.04865330093156,95.48533333333336C452.1500987241798,89.09472968078579,478.3529895706764,135.13645416189823,491.4544349939247,141.8436C504.8408262454435,148.6966208285649,531.6136087484812,147.7554,545,149.726L545,261L66,261Z" fill-opacity="1"></path><path style="" fill="none" stroke="#3c8dbc" d="M66,219.05493333333334C79.38639125151883,219.56626666666668,106.1591737545565,222.62345,119.54556500607534,221.10026666666667C132.93195625759418,219.57708333333335,159.70473876063184,209.13609859561225,173.09113001215067,206.86946666666668C186.32595433373837,204.62849859561226,212.79560297691373,204.88132019993895,226.03042729850142,203.06986666666666C239.27737697448362,201.25675353327227,265.77127632644795,194.9135027923211,279.01822600243014,192.3712C292.40461725394897,189.80213612565444,319.17739975698663,182.51721666666668,332.56379100850546,182.6244C345.9501822600243,182.73158333333333,372.72296476306195,204.18306539133076,386.1093560145808,193.22866666666667C399.3441803361685,182.39829872466407,425.81382897934384,101.94099634745245,439.04865330093156,95.48533333333336C452.1500987241798,89.09472968078579,478.3529895706764,135.13645416189823,491.4544349939247,141.8436C504.8408262454435,148.6966208285649,531.6136087484812,147.7554,545,149.726" stroke-width="3"></path><circle cx="66" cy="219.05493333333334" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="119.54556500607534" cy="221.10026666666667" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="173.09113001215067" cy="206.86946666666668" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="226.03042729850142" cy="203.06986666666666" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="279.01822600243014" cy="192.3712" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="332.56379100850546" cy="182.6244" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="386.1093560145808" cy="193.22866666666667" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="439.04865330093156" cy="95.48533333333336" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="491.4544349939247" cy="141.8436" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="545" cy="149.726" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><path style="fill-opacity: 1;" fill="#eaf3f6" stroke="none" d="M66,240.02746666666667C79.38639125151883,239.8072,106.1591737545565,241.35496666666666,119.54556500607534,239.1464C132.93195625759418,236.93783333333334,159.70473876063184,223.33698698853718,173.09113001215067,222.35893333333334C186.32595433373837,221.39195365520382,212.79560297691373,233.23177876984127,226.03042729850142,231.36626666666666C239.27737697448362,229.49904543650794,265.77127632644795,209.28948603839441,279.01822600243014,207.428C292.40461725394897,205.54691937172774,319.17739975698663,214.43916666666667,332.56379100850546,216.39600000000002C345.9501822600243,218.35283333333336,372.72296476306195,232.38159338039932,386.1093560145808,223.08266666666668C399.3441803361685,213.88902671373265,425.81382897934384,148.2241679481277,439.04865330093156,142.42573333333334C452.1500987241798,136.68573461479437,478.3529895706764,170.46886726939806,491.4544349939247,176.92893333333336C504.8408262454435,183.5295006027314,531.6136087484812,190.23343333333335,545,194.66826666666668L545,261L66,261Z" fill-opacity="1"></path><path style="" fill="none" stroke="#a0d0e0" d="M66,240.02746666666667C79.38639125151883,239.8072,106.1591737545565,241.35496666666666,119.54556500607534,239.1464C132.93195625759418,236.93783333333334,159.70473876063184,223.33698698853718,173.09113001215067,222.35893333333334C186.32595433373837,221.39195365520382,212.79560297691373,233.23177876984127,226.03042729850142,231.36626666666666C239.27737697448362,229.49904543650794,265.77127632644795,209.28948603839441,279.01822600243014,207.428C292.40461725394897,205.54691937172774,319.17739975698663,214.43916666666667,332.56379100850546,216.39600000000002C345.9501822600243,218.35283333333336,372.72296476306195,232.38159338039932,386.1093560145808,223.08266666666668C399.3441803361685,213.88902671373265,425.81382897934384,148.2241679481277,439.04865330093156,142.42573333333334C452.1500987241798,136.68573461479437,478.3529895706764,170.46886726939806,491.4544349939247,176.92893333333336C504.8408262454435,183.5295006027314,531.6136087484812,190.23343333333335,545,194.66826666666668" stroke-width="3"></path><circle cx="66" cy="240.02746666666667" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="119.54556500607534" cy="239.1464" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="173.09113001215067" cy="222.35893333333334" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="226.03042729850142" cy="231.36626666666666" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="279.01822600243014" cy="207.428" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="332.56379100850546" cy="216.39600000000002" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="386.1093560145808" cy="223.08266666666668" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="439.04865330093156" cy="142.42573333333334" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="491.4544349939247" cy="176.92893333333336" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="545" cy="194.66826666666668" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="left: 162.318px; top: 145px; display: none;"><div class="morris-hover-row-label">2011 Q4</div><div class="morris-hover-point" style="color: #a0d0e0">
			  Item 1:
			  3,767
			</div><div class="morris-hover-point" style="color: #3c8dbc">
			  Item 2:
			  3,597
			</div></div></div>
						</div> --}}
						<!-- /.box-body -->
					  </div>
		</div></div>
	</div>
 @endsection
{{--<script>
$(document).ready(function() {
	$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    $('.clique').click(function() {
        $.get('http://localhost/sistemaflex/public/manage/users/userCad', function(data) {
			console.log(data);
			$('.func-nome').html("<strong>"+data+"</strong>");
        });
    });
});
</script> --}}
