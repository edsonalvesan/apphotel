@extends('layout.admin', ['modulo' => 'cadastro','selectItem' => 'proprietarios'])

@section('content')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Relação de Proprietários
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Cadastro Base</a></li>
                        <li class="active">{{Route::currentRouteName()}}</li>
                    </ol>
                </section>
                <!-- btn novo cliente -->
                <div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('proprietarios.create') }}" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Proprietário</a>
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

                                  @include('partials.alerts')
                                  @include('partials.search',['serach'=>$search])

                                  <small></small>

                                  @if(count($proprietarios) > 0)

                                  <table id="example" class="table table-bordered table-striped bootstrap-datatable datatable">
                                     
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Nome</th>
                                                <th>Rg</th>
                                                <th>CPF</th>
                                                <th>Ação</th>
                                                
                                            </tr>
                                        </thead>

                                <tbody>
                                 @foreach($proprietarios as $proprietario)
                                 <tr>
                                     <td>{{$proprietario->id}}</td>
                                     <td>{{$proprietario->nome}}</td>
                                     <td>{{$proprietario->rg}}</td>
                                     <td>{{$proprietario->cpf}}</td>
                                     <td width = '130'>
                                         {{-- 
                                         <a href="{{ route('usuarios.view',['id'=>$proprietario->id])}}" 
                                            class="btn-sm btn-success" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-search-plus "></i></a>
                                          --}}  
                                         <a href="{{ route('proprietarios.edit',['id'=>$proprietario->id])}}"
                                            class="btn-sm btn-info">
                                            <i class="fa fa-edit "></i></a>  
                                           
                                            <a  data-id="{{$proprietario->id}}" data-link="proprietarios" class="btn-sm btn-danger sa-warning"><i class="fa fa-trash-o "></i></a>
                                         
                                     </td>
                                 </tr>
                                 @endforeach
                                </tbody>     
                                    </table>

                                    {!! $proprietarios->render() !!}
                                  @else
                                      <ul class="alert alert-warning alert-dismissible">
                                          Nenhum Proprietário encontrado
        
                                      </ul>
                                  @endif 



                 


                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

            <!-- COMPOSE MESSAGE MODAL -->


                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
            <!-- END COMPOSE MESSAGE MODAL -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        
 </div><!-- ./wrapper -->
@endsection
@section('scripts')
@parent
<script src="{{ asset('/js/alert-material-admin.js') }}"></script>
@endsection