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
        {!!Form::label('nome','Nome')!!}
        <div class="input-group col-sm-12"> 
        <span class="input-group-addon"><i class="fa fa-user"></i></span> 
        {!!Form::text('nome',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">                           
        {!!Form::label('rg','RG')!!}
        <div class="input-group col-sm-6"> 
        <span class="input-group-addon"><i class="fa fa-file-text"></i></span> 
        {!!Form::text('rg',null,['class'=>'form-control','placeholder'=>'RG',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('cpf','CPF')!!}                                  
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
        {!!Form::text('cpf',null,['class'=>'form-control','placeholder'=>'CPF','id'=>'cpf',$disabled])!!}
        </div>
    </div>
                        

    <div class="form-group col-sm-6">
        {!!Form::label('telefone_principal','Telefone 1')!!}
        <div class="input-group col-sm-6">
         <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        {!!Form::text('telefone_principal',null,['class'=>'form-control','placeholder'=>'Telefone 1','id'=>'phone',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
         {!!Form::label('telefone_secundario','Telefone 2')!!}
         <div class="input-group col-sm-6">
         <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        {!!Form::text('telefone_secundario',null,['class'=>'form-control','placeholder'=>'Telefone 2','id'=>'phone1',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('celular','Celular')!!}
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-mobile"></i></span> 
        {!!Form::text('celular',null,['class'=>'form-control','placeholder'=>'Celular','id'=>'mobile',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('nacimento','Data de Nascimento')!!}
        <div class="input-group date col-sm-6">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        {!!Form::text('nacimento',null,['class'=>'form-control date-picker','id'=>'date01','data-date-format'=>'dd/mm/yyyy','placeholder'=>'dd/mm/yyyy',$disabled])!!}
        </div>
    </div>

    


        </div>
    </div>
</div>      

         
         <div class="panel panel-default">
         <div class="panel-heading">
            <small>Outro Contato</small>  
             </div>
            <div class="panel-body">
                            
                            <div class="row">

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
                              
                        


                            </div><!--/row-->
                        </div>
                    </div>      





   </div>