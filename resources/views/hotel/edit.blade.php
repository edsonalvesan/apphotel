@extends('layout.admin', ['modulo' => 'cadastro','selectItem' => 'hotel'])

@section('content')

<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Hotel
                        <small>Editar</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Cadastro Base</a></li>
                        <li><a href="#">Hotel</a></li>
                        <li class="activeImobiliária">Editar</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-xs-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>
                                </div><!-- /.box-header -->

     <?php $disabled = ''; ?>
                                <!-- form start -->
    {!! Form::model($proprietario,['route'=>['hotel.update',$proprietario->id],'id' => 'project-form'])!!}                            
    
    @include('hotel.partials.form')

    @include('hotel.partials.btnFooter')

    {!!Form::close()!!}
                            </div>




                 
                        </div><!--/.col (left) -->
                        <!-- right column -->
                        
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->



@endsection

@section('scripts')
@parent
<script src="{{ asset('/js/validator.js') }}"></script>
@endsection