@extends('layout.admin', ['modulo' => 'contrato','selectItem' => 'contratos'])

@section('content')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Relação de Contratos
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Contratos</a></li>
                        <li class="active">{{Route::currentRouteName()}}</li>
                    </ol>
                </section>


				<div class="panel-body">
					<!-- The fileinput-button span is used to style the file input field as button -->
				    <span class="btn btn-success fileinput-button">
				        <i class="glyphicon glyphicon-plus"></i>
				        <span>Selecionar arquivos...</span>
				        <!-- The file input field used as target for the file upload widget -->
				        <input id="fileupload" type="file" name="documento"
				        data-token="{!! csrf_token() !!}"
				        data-user-id="{!! $contrato->id !!}">
				    </span>
				    <br>
				    <br>
				    <!-- The global progress bar -->
				    <div id="progress" class="progress">
				        <div class="progress-bar progress-bar-success"></div>
				    </div>

				    @if(Session::has('success'))
						<div class="alert alert-success">
							{!! Session::get('success') !!}
						</div>
				    @endif

				    <div class="alert alert-success hide" id="upload-success">
						Upload realizado com sucesso!
					</div>

					@if(count($contrato) > 0)

  				    <table class="table table-bordered table-condensed">
				    	<thead>
				    		<tr>
				    			<th>Nome do Arquivo</th>
				    			<th>Enviado em</th>
				    			<th>Usuário</th>
				    			<th>Ações</th>
				    		</tr>
				    	</thead>
				    	<tbody>
				    		@foreach($contrato->files as $file)
				    		<tr>
				    			<td>{!! $file->name !!}</td>
				    			<td>{!! $file->created_at !!}</td>
				    			<td>{!! $contrato->id !!}</td>
				    			<td width = '130'>
				    				<a href="{!! route('files.download', [$contrato->id, $file->id]) !!}" class="btn-sm btn-success"><i class="fa fa-download"></i></a>
				    				<a href="{!! route('files.destroy', [$contrato->id, $file->id]) !!}" class="btn-sm btn-danger"><i class="fa fa-trash-o "></i></a>
				    			</td>
				    		</tr>
				    		@endforeach
				    	</tbody>
				    </table>
					@else
                                      <ul class="alert alert-warning alert-dismissible">
                                          Nenhum arquivo para este contrato
        
                                      </ul>
					@endif
 <div class="box-footer">
    <div class="form-group">
   <div class="row">
  <div class="col-md-6">
      <a href="{{ url('contratos') }}" class="btn btn-default">
        <i class="fa fa-arrow-left"></i>
        Voltar
      </a>
  </div>

</div>

    </div>
</div>	

				</div>
            
            </aside><!-- /.right-side -->
 </div><!-- ./wrapper -->



@endsection
@section('scripts')
@parent
<script src="{{ asset('/js/alert-material-admin.js') }}"></script>
<script src="{{ asset('/js/contratos/file.js') }}"></script>
@endsection

