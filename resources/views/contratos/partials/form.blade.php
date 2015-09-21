<div class="box-body">
    <!-- Nome Form Input  -->

                 
    <div class="panel panel-default">
    <div class="panel-heading">
    <small></small>  
    </div>
    <div class="panel-body">
    @include('partials.alerts')   
    <div class="row">

     <div class="form-group col-sm-12">
        {!!Form::label('nome','Usuário')!!}
        <div class="input-group col-sm-12"> 
        {!! Form::select('usuario_id', [''=>''] + $usuariosForSelect, null, ['id' => 'locador', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group col-sm-12">
        {!!Form::label('nome','Proprietário')!!}
        <div class="input-group col-sm-12"> 
        
        {!! Form::select('proprietario_id', [''=>''] + $proprietariosForSelect, null, ['id' => 'locatario','class' => 'form-control', 'id' => 'locatario', 'placeholder' => 'Selecionar um líder para o projeto']) !!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('data_inicio','Data de Início')!!}
        <div class="input-group date col-sm-6">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        {!!Form::text('data_inicio',null,['class'=>'form-control date-picker','id'=>'data_inicio','data-date-format'=>'dd/mm/yyyy','placeholder'=>'dd/mm/yyyy',$disabled])!!}
        </div>
    </div>



    <div class="form-group col-sm-6">
        {!!Form::label('data_fim','Data Final')!!}
        <div class="input-group date col-sm-6">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        {!!Form::text('data_fim',null,['class'=>'form-control date-picker','id'=>'data_fim','data-date-format'=>'dd/mm/yyyy','placeholder'=>'dd/mm/yyyy',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">                           
        {!!Form::label('prazo_contrato','Prazo do Contrato')!!}
        <div class="input-group col-sm-6"> 
        <span class="input-group-addon"><i class="fa fa-file-text"></i></span> 
        {!!Form::text('prazo_contrato',null,['class'=>'form-control','placeholder'=>'','id'=>'prazo_contrato',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">                           
        {!!Form::label('qtd_parcelas_servico','Qtde. Meses Pago pelo Serviço')!!}
        <div class="input-group col-sm-6"> 
        <span class="input-group-addon"><i class="fa fa-file-text"></i></span> 
        {!!Form::text('qtd_parcelas_servico',null,['class'=>'form-control','placeholder'=>'','id'=>'qtd_parcelas_servico',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">                           
        {!!Form::label('vencimento_p_parcela','Dia Venc. 1ª Parcela')!!}
        <div class="input-group col-sm-6"> 
        <span class="input-group-addon"><i class="fa fa-file-text"></i></span> 
        {!!Form::text('vencimento_p_parcela',null,['class'=>'form-control','placeholder'=>'','id'=>'vencimento_p_parcela',$disabled])!!}
        </div>
    </div>


    <div class="form-group col-sm-6">
        {!!Form::label('valor_contrato','Valor do Contrato')!!}                                  
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-money"></i></span>
        {!!Form::text('valor_contrato',null,['class'=>'form-control','placeholder'=>'','id'=>'valor_contrato',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('valor_pago_servico','Valor Custeado pelo Serviço')!!}                                  
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-money"></i></span>
        {!!Form::text('valor_pago_servico',null,['class'=>'form-control','placeholder'=>'','id'=>'valor_pago_servico',$disabled])!!}
        </div>
    </div>


    <div class="form-group col-sm-6">
        {!!Form::label('valor_caucao','Valor do Caução')!!}                                  
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-money"></i></span>
        {!!Form::text('valor_caucao',null,['class'=>'form-control','placeholder'=>'','id'=>'valor_caucao',$disabled])!!}
        </div>
    </div>

        </div> {{-- Paginação End --}}
    </div>
</div> 

  

  <div class="panel panel-default">
         <div class="panel-heading">
            <small>Objeto do Contrato</small>  
             </div>
            <div class="panel-body">
                            
                            <div class="row">


                  @include('partials.endereco')             
                        


                            </div>
                        </div>
                    </div>   

   </div>