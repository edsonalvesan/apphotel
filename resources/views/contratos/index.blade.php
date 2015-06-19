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
                <!-- btn novo cliente -->
                <div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('contratos.create') }}" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Contrato</a>
                    <!-- Navigation - folders-->
                    <div style="margin-top: 15px;">
                    </div>
                </div>
                <!-- end btn novo cliente -->
                
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-center">
  

                            <div class="box">
                                <div class="box-body table-responsive">

                    <div class="input-group col-sm-6 dave-busca-rapida">
                      <input type="text" class="form-control input-sm pull-right" placeholder="Pesqusiar..."/>
                      <div class="input-group-btn">
                      </div>
                    </div>

                 <h1></h1>

                                    <table id="example" class="table table-bordered table-condensed">
                                     
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Usuário</th>
                                                <th>Proprietário</th>
                                                <th>Data de Início</th>
                                                <th>Data Final</th>
                                                <th>Valor</th>
                                                <th>Ação</th>
                                                
                                            </tr>
                                        </thead>

                                <tbody>
                                 @foreach($contratos as $contrato)
                                 <tr>
                                     <td>{{$contrato->id}}</td>
                                     <td>{{$contrato->locatario->nome}}</td>
                                     <td>{{$contrato->proprietario->nome}}</td>
                                     <td>{{$contrato->data_inicio}}</td>
                                     <td>{{$contrato->data_fim}}</td>
                                     <td>{{$contrato->valor_contrato}}</td>
                                     <td width = '130'>
                                         <a href="{{ route('arquivos',['id'=>$contrato->id])}}" 
                                            class="btn-sm btn-success"><i class="fa fa-file-pdf-o"></i></a>
                                            
                                         <a href="{{ route('contratos.edit',['id'=>$contrato->id])}}"
                                            class="btn-sm btn-info">
                                            <i class="fa fa-edit "></i></a>                                             
                                            <a  data-id="{{$contrato->id}}" data-link="usuarios" class="btn-sm btn-danger sa-warning"><i class="fa fa-trash-o "></i></a>

                                     </td>
                                 </tr>
                                 @endforeach
                                </tbody>     
                                    </table>

                                    {!! $contratos->render() !!}
                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

            <!-- COMPOSE MESSAGE MODAL -->
           
            <!-- END COMPOSE MESSAGE MODAL -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        
 </div><!-- ./wrapper -->
@endsection

@section('scripts')
@parent
<script src="{{ asset('/js/alert-material-admin.js') }}"></script>
@endsection
