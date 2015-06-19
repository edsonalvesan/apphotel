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