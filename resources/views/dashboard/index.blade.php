@extends('layout.admin', ['modulo' => 'dashboard','selectItem' => 'dashboard'])

@section('content')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><a href="#">Dashboard</a></li>
                        
                    </ol>
                </section>
                
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      



            <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Verba do Serviço x Despesas</h3>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    

                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Período: 1 Janeiro 2015 - 31 Dezembro 2015</strong>
                      </p>
                      <div class="chart-responsive">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="280"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    

                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Pagamentos Qtde</strong>
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">Pagamentos do mês atual</span>
                        <span class="progress-number"><b>0</b>/0</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 0%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Pendentes do mês anterior</span>
                        <span class="progress-number"><b>0</b>/0</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 0%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                


              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->



                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        
 </div><!-- ./wrapper -->
@endsection

@section('scripts')
@parent
<script src="{{ asset('/js/chartjs/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/demo/demochart.js') }}"></script>
@endsection
