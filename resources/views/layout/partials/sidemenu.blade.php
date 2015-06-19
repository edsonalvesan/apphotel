

{{-- 
<li>
    <a href="inicio">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
    </a>
</li> 
--}}

                    
     
     @if($modulo == 'cadastro') 
     <li class="treeview active"> 
     @else
     <li class="treeview">
     @endif       
     
        <a href="#"><i class="glyphicon glyphicon-book"></i>
                <span>Cadastro Base</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                @if($selectItem == 'usuarios') 
                <li class="active">
                @else
                <li> 
                @endif
                 <a href="{{ url('usuarios') }}">
                    <i class="fa fa-angle-double-right"></i> Usuários</a>
                </li>
                    
                @if($selectItem == 'proprietarios') 
                <li class="active">
                @else
                <li> 
                @endif
                        <a href="{{ route('proprietarios') }}">       
                            <i class="fa fa-angle-double-right"></i>  Proprietários</a>

                @if($selectItem == 'imobiliarias') 
                <li class="active">
                @else
                <li> 
                @endif
                            <a href="{{ url('imobiliarias') }}">
                                <i class="fa fa-angle-double-right"></i>  Imobiliárias</a>
                        </li>
                        
                       
                @if($selectItem == 'hotel') 
                <li class="active">
                @else
                <li> 
                @endif
                            <a href="{{ url('hotel') }}">
                                <i class="fa fa-angle-double-right"></i>  Hotel</a>
                        </li>               
                        
                        </ul>
                    </li>

     @if($modulo == 'contrato') 
     <li class="treeview active"> 
     @else
     <li class="treeview">
     @endif
            <a href="#"><i class="glyphicon glyphicon-folder-open"></i>
                <span>Contratos</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                @if($selectItem == 'contratos') 
                <li class="active">
                @else
                <li> 
                @endif
                    <a href="{{ url('contratos') }}">
                        <i class="fa fa-angle-double-right"></i> Contratos de Locação</a>
                    </li>
                    <li>
                        <a href="{{ url('usuarios') }}">
                            <i class="fa fa-angle-double-right"></i>  Hotel</a>
                        </li>

                        </ul>
                    </li> 


     @if($modulo == 'financeiro') 
     <li class="treeview active"> 
     @else
     <li class="treeview">
     @endif
            <a href="#"><i class="glyphicon glyphicon-usd"></i>
                <span>Financeiro</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ url('usuario') }}">
                        <i class="fa fa-angle-double-right"></i> Fluxo de Caixa</a>
                    </li>

                        </ul>
                    </li> 