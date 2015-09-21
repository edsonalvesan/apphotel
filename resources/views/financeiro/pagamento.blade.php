@extends('layout.admin', ['modulo' => 'financeiro','selectItem' => 'fluxocaixa'])

@section('content')


            <aside class="right-side">
                
                <section class="content-header">
                    <h1>
                        Pagamento
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Financeiro</a></li>
                        <li><a href="#">Fluxo de Caixa</a></li>
                        <li class="active"><a href="#">Pagamento</a></li>
                    </ol>
                </section>

                
                <!-- Main content -->
                <section class="content invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> Casa do Garoto
                                <small class="pull-right">Data: @date("d.m.y")</small>
                            </h2>
                        </div><!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            Lacatário
                            <address>
                                <strong>Admin, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (804) 123-5432<br/>
                                Email: info@almasaeedstudio.com
                            </address>
                        </div><!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Locador
                            <address>
                                <strong>John Doe</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (555) 539-1037<br/>
                                Email: john.doe@example.com
                            </address>
                        </div><!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Imovel</b><br/>
                            <br/>
                            <b>Order ID:</b> 4F3S8J<br/>
                            <b>Payment Due:</b> 2/22/2014<br/>
                            <b>Account:</b> 968-34567
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Qty</th>
                                        <th>Product</th>
                                        <th>Serial #</th>
                                        <th>Description</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Call of Duty</td>
                                        <td>455-981-221</td>
                                        <td>El snort testosterone trophy driving gloves handsome</td>
                                        <td>$64.50</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Need for Speed IV</td>
                                        <td>247-925-726</td>
                                        <td>Wes Anderson umami biodiesel</td>
                                        <td>$50.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Monsters DVD</td>
                                        <td>735-845-642</td>
                                        <td>Terry Richardson helvetica tousled street art master</td>
                                        <td>$10.70</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Grown Ups Blue Ray</td>
                                        <td>422-568-642</td>
                                        <td>Tousled lomo letterpress</td>
                                        <td>$25.99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                            <p class="lead">Forma de Pagamento:</p>
                            <img src="{{ asset('/assets/img/credit/dinheiro.png') }}"  alt="Dinheiro"/>
                            <img src="{{ asset('/assets/img/credit/cheque.png') }}" alt="Cheque"/>
                            <img src="{{ asset('/assets/img/credit/doc.png') }}" alt="Transferência"/>
                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                            </p>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <p class="lead">Amount Due 2/22/2014</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>$250.30</td>
                                    </tr>
                                    <tr>
                                        <th>Desconto</th>
                                        <td>$10.34</td>
                                    </tr>
                                    <tr>
                                        <th>Acréscimo:</th>
                                        <td>$5.80</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$265.24</td>
                                    </tr>
                                </table>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>
                            <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Confirmar Pagamento</button>
                            <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Gerar PDF</button>
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside>
        
 </div>
@endsection
@section('scripts')
@parent
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
@endsection
