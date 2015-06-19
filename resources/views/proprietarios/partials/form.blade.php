  <div class="box-body">
     
@include('partials.alerts')
    <div class="row clearfix">
        <div class="col-md-12 column">

            <div class="tabbable" id="tabs-164966">
                
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#panel-475091" data-toggle="tab"> @if ($errors->any())<span class="label label-danger">Erro</span>@endif Dados do Proprietário</a>
                    </li>
                    <li>
                        <a href="#panel-781013" data-toggle="tab">Dados Bancários</a>
                    </li>
                    <li>
                        <a href="#panel-881013" data-toggle="tab">Outros Contatos</a>
                    </li>
                </ul>
                
                <div class="tab-content">
                    <div class="tab-pane active" id="panel-475091">
                        <p>
    
     @include('partials.pessoa')
               
    <div class="row clearfix">
        <div class="col-md-12 column">
            @include('partials.endereco')
        </div>
    </div>
                        

                        </p>
                    </div>
                    <div class="tab-pane" id="panel-781013">
                       
    <p>                      
       
             
    <h4><span class="label label-info">Pagamento por transferência bancária somente para contas do banco do brasil.</span></h4>
             


    <div class="form-group col-sm-6">
        {!!Form::label('agencia','Agência')!!}
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-university"></i></span> 
        {!!Form::text('agencia',null,['class'=>'form-control','placeholder'=>'Agência','id'=>'mobile',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('conta','Conta')!!}
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-university"></i></span> 
        {!!Form::text('conta',null,['class'=>'form-control','placeholder'=>'Conta','id'=>'mobile',$disabled])!!}
        </div>
    </div>
                              
                        
</p>
                        
                    </div>


                    <div class="tab-pane" id="panel-881013">
                       
<p>
                       
    <div class="form-group col-sm-12">
        {!!Form::label('contato','Nome')!!}
        <div class="input-group col-sm-12"> 
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::text('contato',null,['class'=>'form-control','placeholder'=>'Nome',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('telefone_contato','Telefone')!!}                                
        <div class="input-group">
         <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        {!!Form::text('telefone_contato',null,['class'=>'form-control','placeholder'=>'Telefone','id'=>'phone2',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6"> 
    {!!Form::label('celular_contato','Celular')!!}                               
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
        {!!Form::text('celular_contato',null,['class'=>'form-control','placeholder'=>'Celular','id'=>'mobile1',$disabled])!!}
        </div>
    </div>       
                        
</p>

                            </div><!--/row-->
                        </div>
                    </div> 
                        
                    </div>

                </div>
            </div>
        </div>
    </div>



   </div>


 

 