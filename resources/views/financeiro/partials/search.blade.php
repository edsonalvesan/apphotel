{!! Form::open(['method' => 'GET']) !!}
    <div class="well carousel-search hidden-sm">
            <div class="btn-group">
        {!! Form::text('search', $search, ['class' => 'form-control input-sm pull-left','style'=>'width: 250px', 'placeholder' => 'Pesqusiar...']) !!} 
        </div>
            <div class="btn-group">
        {!! Form::text('periodo', $periodo, ['id'=>'reservation', 'class' => 'form-control input-sm pull-right','style'=>'width: 250px']) !!}
        </div>
        <div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Situação<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Abertas</a></li>
                <li><a href="#">Pagas</a></li>
                <li><a href="#">Canceladas</a></li>
                <li><a href="#">Todas</a></li>
                <li class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span> Other</a></li>
            </ul>
        </div>      
        <div class="btn-group">
            <button type="submit" id="btnSearch" class="btn btn-default"><i class="fa fa-search"></i> Buscar</button>
        </div>
    </div>
{!! Form::close() !!}




                  