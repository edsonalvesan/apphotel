@extends('layout.admin', ['modulo' => 'financeiro','selectItem' => 'fluxocaixa'])

@section('content')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Fluxo de Caixa
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Financeiro</a></li>
                        <li class="active"><a href="#">Fluxo de Caixa</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                          <div class="text-center">  
                            <div class="box">
                                <div class="box-body table-responsive">

                                  @include('partials.alerts')
                                  @include('financeiro.partials.search',['serach'=>$search])

                                  <small></small>

                                  @if(count($financeiros) > 0)

                                  <table id="example" class="table table-bordered table-striped bootstrap-datatable datatable">
                                     
                                        <thead>
                                            <tr>
                                                <th>Contrato</th>
                                                <th>Usuário</th>
                                                <th>Proprietario</th>
                                                <th>Vencimento</th>
                                                <th>Valor</th>
                                                <th>Ação</th>
                                                
                                            </tr>
                                        </thead>

                                <tbody>
                                 @foreach($financeiros as $financeiro)
                                 <tr>
                                     <td>{{$financeiro->contrato_id}}</td>
                                     <td>{{$financeiro->contrato->locatario->nome}}</td>
                                     <td>{{$financeiro->contrato->proprietario->nome}}</td>
                                     <td>{{$financeiro->vencimento}}</td>
                                     <td>{{$financeiro->valor}}</td>
                                     <td width = '160'>
                                         
                                         <a href="{{ route('contratos.edit',['id'=>$financeiro->contrato_id])}}" 
                                            class="btn-sm btn-warning"><i class="fa fa-search-plus "></i></a>
                                            
                                         <a href="{{ route('financeiro.pagamento',['id'=>$financeiro->id])}}"
                                            class="btn-sm btn-success">
                                            <i class="fa fa-money"></i></a> 

                                         <a href="{{ route('financeiro.edit',['id'=>$financeiro->id])}}"
                                            class="btn-sm btn-info">
                                            <i class="fa fa-edit "></i></a>  
                                           
                                            <a  data-id="{{$financeiro->id}}" data-link="financeiro" class="btn-sm btn-danger sa-warning"><i class="fa fa-trash-o "></i></a>
                                         
                                     </td>
                                 </tr>
                                 @endforeach
                                </tbody>     
                                    </table>

                                    {!! $financeiros->render() !!}
                                  @else
                                      <ul class="alert alert-warning alert-dismissible">
                                          Nenhum pagamento encontrado
        
                                      </ul>
                                  @endif 



                 


                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>




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
<script src="{{ asset('/js/financeiro/financeiro.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/datepicker/js/bootstrap-datepicker.js') }}"></script>
@endsection