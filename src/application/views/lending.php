<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Empréstimos sem burocracia e rápido</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template -->
        <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>assets/fonts.googleapis.com/csse3e5.css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='<?php echo base_url()?>assets/fonts.googleapis.com/css2275.css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url()?>assets/fonts.googleapis.com/css4391.css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url()?>assets/fonts.googleapis.com/css546d.css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url()?>assets/css/agency.css" rel="stylesheet">
        <!-- Social icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Proper styles -->
        <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url().'assets/'?>css/wizard.css">       
        
        <script type="text/javascript">
            var base_url = '<?php echo base_url();?>';
            var key = '<?php echo $key;?>';
        </script>
    </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:black">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Lending</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger " href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>            
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger " href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#who-we-are">Contate-nos</a>
                    </li>           
                </ul>
            </div>
        </div>
    </nav>
    
    <section style="padding: 0px">
        <div class="row" style="margin-top: 100px;margin-bottom: 0px">
            
            <div class="col-lg-3" style="padding:50px;padding-right:20px; background-color:white"><!--#e9ecef-->
                <h5 class="subheading">Resumo do empréstimo</h5>
                <div class="text-left">
                    <span class="text-muted">
                        <small>Valor solicitado por você:</small>
                        <h6 class="">R$ <?php echo $solicited_value;?></h6>
                    </span>
                    <span class="text-muted">
                        <small>Quantidade de parcelas:</small>
                        <h6 class=""><?php echo $amount_months;?>x</h6>
                    </span>
                    <span class="text-muted">
                        <small>Custo por parcela:</small>
                        <h6 class="">R$ <?php echo $month_value;?> <b class="fw-500"></b></h6>
                    </span>

                    <span class="text-muted">
                        <small>Taxa de juros ao mês:</small>
                        <h6 class=""><?php echo $tax;?> %</h6>
                    </span>
                    <span class="text-muted">
                        <small>Custo Efetivo Total:</small>
                        <h6 class="">R$ <?php echo $total_cust_value;?></h6>
                    </span>
                    <span class="text-muted">
                        <small>IOF:</small>
                        <h6 class="">R$ <?php echo $IOF;?></h6>
                    </span>

                    <div class="row">                            
                        <span class="col-md-6 col-sm-6 col-xs-12 text-muted">
                            <p class="" style="font-size:0.8em">CET:<br>
                                <b class="" style="font-size:1.3em"><?php echo $CET_PERC;?> %</b>
                            </p>
                        </span>
                        <span class="col-md-6 col-sm-6 col-xs-12 text-muted">
                            <p class="" style="font-size:0.8em">CET AO ANO:<br>
                                <b class="" style="font-size:1.3em"><?php echo $CET_YEAR;?> %</b>
                            </p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 bg-light" style="padding-top:50px;padding-bottom:50px;">
                <div style="margin-left:15px;margin-right:15px">                    
                    <!-- STEEP 1: Personal datas-->
                    <div class="form-sec check1" style="display:block">                        
                        <!-- Wizard-STEEP 1 -->
                        <div class="col-lg-12 stepwizard text-center">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <!-- Form-STEEP 1 -->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="form-group">
                                <p class="text-muted">DADOS PESSOAIS</p>
                                <div class="form-group">
                                    <input id="name" class="form-control" type="text" placeholder="Nome Completo *" required="required" data-validation-required-message="Nome inválido." required style="text-transform:uppercase;">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="row" >
                                    <div class="col-lg-6 form-group">
                                        <input id="email" class="form-control" type="email" placeholder="Email *" required="required" data-validation-required-message="Email inválido.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input id="cpf" class="form-control" type="text" placeholder="CPF *" required="required" data-validation-required-message="CPF inválido.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>                                
                                <div class="code_request" style="display:block">
                                    <div class="row text-center">
                                        <div class="col-lg-6 form-group">
                                            <input id="phone_number" class="form-control fone" type="tel" placeholder="Telefone *" required="required" data-validation-required-message="Telefone celular inválido.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <button id="btn_code_request" class="btn btn-primary btn-xl text-uppercase" style="padding:5px;" type="button">SOLICITAR CÓDIGO</button>
                                        </div>                                            
                                    </div>                                            
                                </div>
                                <div class="code_verify" style="display:none">
                                    <p class="text-muted">VALIDAÇÃO DO TELEFONE</p>
                                    <div class="row text-center">
                                        <div class="col-lg-6 form-group">
                                            <input id="phone_sms_code" class="form-control" type="tel" placeholder="Inserir código *" required="required" data-validation-required-message="Código inválido.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="col-lg-6 form-group text-right">
                                            <button id="btn_code_verify" class="btn btn-primary btn-xl text-uppercase" style="padding:5px;width:170px" type="button">CONFERIR</button><br>
                                            <a id="lnk_code_resend" href="#" class="text-muted">Novo código?</a>
                                        </div>                                            
                                    </div>                                            
                                </div>                       
                                <!--                                
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center cnt_btn_steep_1" style="display:none">
                                    <div id="success"></div>
                                    <button id="btn_steep_1" class="btn btn-primary btn-xl text-uppercase" style="padding:12px" type="button">Seguinte</button>
                                </div>-->
                            </div>                                   
                        </form>
                    </div>
                    
                    <!-- STEEP 2: Address datas-->
                    <div class="form-sec check2" style="display:none">                        
                        <!-- Wizard-STEEP 2 -->
                        <div class="col-lg-12 stepwizard text-center">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-primary btn-circle" disabled="disabled">2</a>                                
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <!-- Form-STEEP 2 -->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="form-group">                                                               
                                <p class="text-muted">SEU ENDEREÇO</p>
                                <div class="row">
                                    <div class="col-lg-6 form-group">                                    
                                        <div class="input-group mb-3">
                                            <input id="cep" type="text" class="form-control" placeholder="CEP *" required="required" data-validation-required-message="CEP inválido.">
                                            <div class="input-group-append">
                                                <button id="verify_cep" title="Carregar endereço" class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>                                    
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input id="state_address" class="form-control" type="text" placeholder="UF *" required="required" data-validation-required-message="Unidade Federativa ou Estado.">
                                        <p class="help-block text-danger"></p>                                        
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <input id="street_address" class="form-control" type="text" placeholder="Rua e Bairro *" required="required" data-validation-required-message="Rua inválida.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input id="number_address" class="form-control" type="text" placeholder="Número" required="required" data-validation-required-message="Número ou S/N.">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group"> 
                                        <input id="complement_number_address" class="form-control" type="text" placeholder="Complemento">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input id="city_address" class="form-control"  type="text" placeholder="Cidade *" required="required" data-validation-required-message="Por favor, informe sua cidade.">
                                        <p class="help-block text-danger"></p> 
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <!--<button id="btn_steep_2" class="btn btn-primary btn-xl text-uppercase" style="padding:15px" type="submit">Seguinte</button>-->
                                    <button id="btn_steep_2_prev" class="btn btn-primary btn-xl text-uppercase" style="padding:10px" type="submit">Anterior</button>
                                    <button id="btn_steep_2_next" class="btn btn-primary btn-xl text-uppercase" style="padding:10px" type="submit">Seguinte</button>
                                </div>
                            </div>                                   
                        </form>
                    </div>

                    <!-- STEEP 3: Credit card datas-->
                    <div class="form-sec check3" style="display:none">                        
                        <!-- Wizard-STEEP 3 -->
                        <div class="col-md-12 col-md-12 col-xs-12 stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-success btn-circle">2</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-primary btn-circle" disabled="disabled">3</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                </div>
                            </div>
                            <br>
                        </div>   
                        <!-- Form-STEEP 3 -->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="form-group">                                
                                <p class="text-muted">DADOS DO CARTÃO DE CRÉDITO</p>
                                <div class="form-group">
                                    <input id="credit_card_name" class="form-control" type="text" placeholder="Seu nome no cartão *" required="required" data-validation-required-message="Por favor, informe seu nome como aparece no cartão." required style="text-transform:uppercase;">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="row" >
                                    <div class="col-lg-6 form-group">
                                        <input id="credit_card_number" class="form-control" type="text" placeholder="Número do cartão *" required="required" data-validation-required-message="Por favor, informe o número do cartão.">
                                    <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input id="credit_card_cvv" class="form-control" type="text" placeholder="CVV" required="required" data-validation-required-message="CVV inválido.">
                                        <p class="help-block text-danger"></p>
                                    </div>                                            
                                </div>                               
                                <p class="text-muted">Data de validade</p>
                                <div class="form-group" style="margin-top:0px">
                                    <div class="row" >                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="credit_card_exp_month" class="form-control" required="">
                                                <option value="01" selected="true">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                                            </select>
                                            <p class="help-block text-danger"></p>                                        
                                        </div>                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="credit_card_exp_year" class="form-control" required="">
                                                <option value="2019" selected="true">2019</option><option value="2020">2020</option>
                                                <option value="2021">2021</option><option value="2022">2022</option>
                                                <option value="2023">2023</option><option value="2024">2024</option>
                                                <option value="2025">2025</option><option value="2026">2026</option>
                                                <option value="2027">2027</option><option value="2028">2028</option>
                                                <option value="2029">2029</option><option value="2030">2030</option>
                                                <option value="2031">2031</option><option value="2032">2032</option>
                                                <option value="2033">2033</option><option value="2034">2034</option>
                                                <option value="2035">2035</option><option value="2036">2036</option>
                                                <option value="2037">2037</option><option value="2038">2038</option>
                                                <option value="2039">2039</option><option value="2040">2040</option>
                                            </select>
                                            <p class="help-block text-danger"></p>                                        
                                        </div>                                        
                                    </div>
                                </div>                                
                                <div class="clearfix"></div>                                
                                <div class="col-lg-12 text-center">
                                    <button id="btn_steep_3_prev" class="btn btn-primary btn-xl text-uppercase" style="padding:10px" type="submit">Anterior</button>
                                    <button id="btn_steep_3_next" class="btn btn-primary btn-xl text-uppercase" style="padding:10px" type="submit">Seguinte</button>
                                </div>
                            </div>                                   
                        </form>
                    </div>

                    <!-- STEEP 4: Bank datas -->
                    <div class="form-sec check4" style="display:none"> 
                        <!-- Wizard-STEEP 4 -->
                        <div class="col-md-12 col-md-12 col-xs-12 stepwizard ">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-success btn-circle">2</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-success btn-circle">3</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-primary btn-circle" disabled="disabled">4</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                </div>
                            </div>
                            <br>
                        </div>
                        <!-- Form-STEEP 4 -->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="form-group">
                                <p class="text-muted">DADOS BANCÀRIOS</p>
                                <div class="form-group">
                                    <input id="titular_name" class="form-control" type="text" placeholder="Nome completo do titular da conta *" required="required" data-validation-required-message="Titular da conta." required style="text-transform:uppercase;">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <p class="text-muted">Selecione o banco</p>
                                <div class="form-group">
                                    <select id="bank" class="form-control" required="">
                                        <option value="341" selected="true">ITAÚ UNIBANCO BM S.A.</option> 
                                        <option value="237">BCO BRADESCO S.A.</option> <option value="033">BCO SANTANDER (BRASIL) S.A.</option> <option value="001">BCO DO BRASIL S.A.</option> <option value="104">CAIXA ECONOMICA FEDERAL</option> <option value="117">ADVANCED CC LTDA</option> <option value="748">BANCO COOPERATIVO SICREDI S.A.</option> <option value="172">ALBATROSS CCV S.A</option> <option value="188">ATIVA S.A. INVESTIMENTOS CCTVM</option> <option value="280">AVISTA S.A. CFI</option> <option value="080">B&T CC LTDA.</option> <option value="063">BANCO BRADESCARD</option> <option value="208">BANCO BTG PACTUAL S.A.</option> <option value="233">BANCO CIFRA</option> <option value="094">BANCO FINAXIS</option> <option value="012">BANCO INBURSA</option> <option value="077">BANCO INTER</option> <option value="249">BANCO INVESTCRED UNIBANCO S.A.</option> <option value="029">BANCO ITAÚ CONSIGNADO S.A.</option> <option value="217">BANCO JOHN DEERE S.A.</option> <option value="212">BANCO ORIGINAL</option> <option value="623">BANCO PAN</option> <option value="743">BANCO SEMEAR</option> <option value="754">BANCO SISTEMA</option> <option value="082">BANCO TOPÁZIO S.A.</option> <option value="756">BANCOOB</option> <option value="268">BARIGUI CH</option> <option value="081">BBN BCO BRASILEIRO DE NEGOCIOS S.A.</option> <option value="654">BCO A.J. RENNER S.A.</option> <option value="246">BCO ABC BRASIL S.A.</option> <option value="075">BCO ABN AMRO S.A.</option> <option value="121">BCO AGIBANK S.A.</option> <option value="025">BCO ALFA S.A.</option> <option value="641">BCO ALVORADA S.A.</option> <option value="065">BCO ANDBANK S.A.</option> <option value="213">BCO ARBI S.A.</option> <option value="096">BCO B3 S.A.</option> <option value="024">BCO BANDEPE S.A.</option> <option value="021">BCO BANESTES S.A.</option> <option value="036">BCO BBI S.A.</option> <option value="318">BCO BMG S.A.</option> <option value="752">BCO BNP PARIBAS BRASIL S A</option> <option value="107">BCO BOCOM BBM S.A.</option> <option value="122">BCO BRADESCO BERJ S.A.</option> <option value="204">BCO BRADESCO CARTOES S.A.</option> <option value="394">BCO BRADESCO FINANC. S.A.</option> <option value="218">BCO BS2 S.A.</option> <option value="473">BCO CAIXA GERAL BRASIL S.A.</option> <option value="412">BCO CAPITAL S.A.</option> <option value="040">BCO CARGILL S.A.</option> <option value="320">BCO CCB BRASIL S.A.</option> <option value="266">BCO CEDULA S.A.</option> <option value="739">BCO CETELEM S.A.</option> <option value="745">BCO CITIBANK S.A.</option> <option value="241">BCO CLASSICO S.A.</option> <option value="095">BCO CONFIDENCE DE CÂMBIO S.A.</option> <option value="748">BCO COOPERATIVO SICREDI S.A.</option> <option value="222">BCO CRÉDIT AGRICOLE BR S.A.</option> <option value="505">BCO CREDIT SUISSE (BRL) S.A.</option> <option value="069">BCO CREFISA S.A.</option> <option value="003">BCO DA AMAZONIA S.A.</option> <option value="083">BCO DA CHINA BRASIL S.A.</option> <option value="707">BCO DAYCOVAL S.A</option> <option value="047">BCO DO EST. DE SE S.A.</option> <option value="037">BCO DO EST. DO PA S.A.</option> <option value="041">BCO DO ESTADO DO RS S.A.</option> <option value="004">BCO DO NORDESTE DO BRASIL S.A.</option> <option value="265">BCO FATOR S.A.</option> <option value="224">BCO FIBRA S.A.</option> <option value="626">BCO FICSA S.A.</option> <option value="612">BCO GUANABARA S.A.</option> <option value="604">BCO INDUSTRIAL DO BRASIL S.A.</option> <option value="653">BCO INDUSVAL S.A.</option> <option value="630">BCO INTERCAP S.A.</option> <option value="184">BCO ITAÚ BBA S.A.</option> <option value="479">BCO ITAUBANK S.A.</option> <option value="376">BCO J.P. MORGAN S.A.</option> <option value="076">BCO KDB BRASIL S.A.</option> <option value="757">BCO KEB HANA DO BRASIL S.A.</option> <option value="300">BCO LA NACION ARGENTINA</option> <option value="495">BCO LA PROVINCIA B AIRES BCE</option> <option value="600">BCO LUSO BRASILEIRO S.A.</option> <option value="243">BCO MÁXIMA S.A.</option> <option value="389">BCO MERCANTIL DO BRASIL S.A.</option> <option value="370">BCO MIZUHO S.A.</option> <option value="746">BCO MODAL S.A.</option> <option value="066">BCO MORGAN STANLEY S.A.</option> <option value="456">BCO MUFG BRASIL S.A.</option> <option value="169">BCO OLÉ BONSUCESSO CONSIGNADO S.A.</option> <option value="079">BCO ORIGINAL DO AGRO S/A</option> <option value="712">BCO OURINVEST S.A.</option> <option value="611">BCO PAULISTA S.A.</option> <option value="643">BCO PINE S.A.</option> <option value="747">BCO RABOBANK INTL BRASIL S.A.</option> <option value="633">BCO RENDIMENTO S.A.</option> <option value="494">BCO REP ORIENTAL URUGUAY BCE</option> <option value="741">BCO RIBEIRAO PRETO S.A.</option> <option value="120">BCO RODOBENS S.A.</option> <option value="422">BCO SAFRA S.A.</option> <option value="366">BCO SOCIETE GENERALE BRASIL</option> <option value="637">BCO SOFISA S.A.</option> <option value="464">BCO SUMITOMO MITSUI BRASIL S.A.</option> <option value="634">BCO TRIANGULO S.A.</option> <option value="018">BCO TRICURY S.A.</option> <option value="655">BCO VOTORANTIM S.A.</option> <option value="610">BCO VR S.A.</option> <option value="119">BCO WESTERN UNION</option> <option value="124">BCO WOORI BANK DO BRASIL S.A.</option> <option value="074">BCO. J.SAFRA S.A.</option> <option value="250">BCV</option> <option value="144">BEXS BCO DE CAMBIO S.A.</option> <option value="253">BEXS CC S.A.</option> <option value="134">BGC LIQUIDEZ DTVM LTDA</option> <option value="007">BNDES</option> <option value="017">BNY MELLON BCO S.A.</option> <option value="755">BOFA MERRILL LYNCH BM S.A.</option> <option value="126">BR PARTNERS BI</option> <option value="125">BRASIL PLURAL S.A. BCO.</option> <option value="070">BRB - BCO DE BRASILIA S.A.</option> <option value="092">BRK S.A. CFI</option> <option value="173">BRL TRUST DTVM SA</option> <option value="142">BROKER BRASIL CC LTDA.</option> <option value="011">C.SUISSE HEDGING-GRIFFO CV S/A</option> <option value="288">CAROL DTVM LTDA.</option> <option value="130">CARUANA SCFI</option> <option value="159">CASA CREDITO S.A. SCM</option> <option value="097">CCC NOROESTE BRASILEIRO LTDA.</option> <option value="091">CCCM UNICRED CENTRAL RS</option> <option value="016">CCM DESP TRÂNS SC E RS</option> <option value="279">CCR DE PRIMAVERA DO LESTE</option> <option value="273">CCR DE SÃO MIGUEL DO OESTE</option> <option value="089">CCR REG MOGIANA</option> <option value="114">CENTRAL COOPERATIVA DE CRÉDITO NO ESTADO DO ESPÍRITO SANTO</option> <option value="477">CITIBANK N.A.</option> <option value="180">CM CAPITAL MARKETS CCTVM LTDA</option> <option value="127">CODEPE CVC S.A.</option> <option value="163">COMMERZBANK BRASIL S.A. - BCO MÚLTIPLO</option> <option value="136">CONF NAC COOP CENTRAIS UNICRED</option> <option value="060">CONFIDENCE CC S.A.</option> <option value="085">COOP CENTRAL AILOS</option> <option value="098">CREDIALIANÇA CCR</option> <option value="010">CREDICOAMO</option> <option value="133">CRESOL CONFEDERAÇÃO</option> <option value="182">DACASA FINANCEIRA S/A - SCFI</option> <option value="487">DEUTSCHE BANK S.A.BCO ALEMAO</option> <option value="140">EASYNVEST - TÍTULO CV SA</option> <option value="149">FACTA S.A. CFI</option> <option value="196">FAIR CC S.A.</option> <option value="278">GENIAL INVESTIMENTOS CVM S.A.</option> <option value="138">GET MONEY CC LTDA</option> <option value="064">GOLDMAN SACHS DO BRASIL BM S.A</option> <option value="177">GUIDE</option> <option value="146">GUITTA CC LTDA</option> <option value="078">HAITONG BI DO BRASIL S.A.</option> <option value="062">HIPERCARD BM S.A.</option> <option value="189">HS FINANCEIRA</option> <option value="269">HSBC BANCO DE INVESTIMENTO</option> <option value="271">IB CCTVM LTDA</option> <option value="157">ICAP DO BRASIL CTVM LTDA.</option> <option value="132">ICBC DO BRASIL BM S.A.</option> <option value="492">ING BANK N.V.</option> <option value="139">INTESA SANPAOLO BRASIL S.A. BM</option> <option value="652">ITAÚ UNIBANCO HOLDING BM S.A.</option> <option value="488">JPMORGAN CHASE BANK</option> <option value="399">KIRTON BANK</option> <option value="105">LECCA CFI S.A.</option> <option value="145">LEVYCAM CCV LTDA</option> <option value="113">MAGLIANO S.A. CCVM</option> <option value="128">MS BANK S.A. BCO DE CÂMBIO</option> <option value="137">MULTIMONEY CC LTDA.</option> <option value="014">NATIXIS BRASIL S.A. BM</option> <option value="191">NOVA FUTURA CTVM LTDA.</option> <option value="753">NOVO BCO CONTINENTAL S.A. - BM</option> <option value="260">NU PAGAMENTOS S.A.</option> <option value="111">OLIVEIRA TRUST DTVM S.A.</option> <option value="613">OMNI BANCO S.A.</option> <option value="254">PARANA BCO S.A.</option> <option value="194">PARMETAL DTVM LTDA</option> <option value="174">PERNAMBUCANAS FINANC S.A. CFI</option> <option value="100">PLANNER CV S.A.</option> <option value="093">PÓLOCRED SCMEPP LTDA.</option> <option value="108">PORTOCRED S.A. - CFI</option> <option value="283">RB CAPITAL INVESTIMENTOS DTVM LTDA.</option> <option value="101">RENASCENCA DTVM LTDA</option> <option value="751">SCOTIABANK BRASIL</option> <option value="276">SENFF S.A. - CFI</option> <option value="545">SENSO CCVM S.A.</option> <option value="190">SERVICOOP</option> <option value="183">SOCRED S.A. SCM</option> <option value="118">STANDARD CHARTERED BI S.A.</option> <option value="197">STONE PAGAMENTOS S.A.</option> <option value="143">TREVISO CC S.A.</option> <option value="131">TULLETT PREBON BRASIL CVC LTDA</option> <option value="129">UBS BRASIL BI S.A.</option> <option value="015">UBS BRASIL CCTVM S.A.</option> <option value="099">UNIPRIME CENTRAL CCC LTDA.</option> <option value="084">UNIPRIME NORTE DO PARANÁ - CC</option> <option value="102">XP INVESTIMENTOS CCTVM S/A</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>                                
                                <div class="form-group" style="margin-bottom:0px">
                                    <div class="row" >
                                        <div class="col-lg-6">
                                            <input id="agency" class="form-control" type="text" placeholder="Agência *" required="required" data-validation-required-message="Informe agência bancária.">
                                            <p class="help-block text-danger"></p>                                        
                                        </div>
                                        <div class="col-lg-6">
                                            <select id="account_type" class="form-control" required="">
                                                <option value="CC">CORRENTE</option>
                                                <option value="PP">POUPANÇA</option>
                                            </select>
                                        </div>                                            
                                    </div>                                    
                                </div>
                                <div class="form-group" style="margin-bottom:0px">
                                    <div class="row" >
                                        <div class="col-lg-6">
                                            <input id="account" class="form-control" type="text" placeholder="Conta *" required="required" data-validation-required-message="Informe o número da conta.">
                                            <p class="help-block text-danger"></p>        
                                        </div>   
                                        <div class="col-lg-6">
                                            <input id="dig" class="form-control" type="text" placeholder="Dígito da conta*" title="Dígito verificador da conta" required="required" data-validation-required-message="Informe o dígito verificador da conta.">
                                            <p class="help-block text-danger"></p>                                        
                                        </div>                                        
                                    </div>                                    
                                </div>

                                <div class="clearfix"></div>                                
                                <div class="col-lg-12 text-center">
                                    <div class="col-lg-12 text-center">
                                    <button id="btn_steep_4_prev" class="btn btn-primary btn-xl text-uppercase" style="padding:10px" type="submit">Anterior</button>
                                    <button id="btn_steep_4_next" class="btn btn-primary btn-xl text-uppercase" style="padding:10px" type="submit">Seguinte</button>
                                </div>
                                </div>
                            </div>                                   
                        </form>
                    </div>
                    
                    <!-- STEEP 5: Documents photos -->
                    <div class="form-sec check5" style="display:none"> 
                        <!-- Wizard-STEEP 5 -->
                        <div class="col-md-12 col-md-12 col-xs-12 stepwizard ">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-success btn-circle">2</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-success btn-circle">3</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-success btn-circle">4</a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-primary btn-circle">5</a>
                                </div>
                            </div>
                            <br>
                        </div>
                        <!-- Form-STEEP 5 -->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="form-group">
                                <p class="text-muted">COMPROVANTES DE IDENTIDADE</p>
                                
                                <div class="form-group" style="margin-bottom:0px">
                                    <p class="text-muted">Cartão de crédito</p>
                                    <div class="row" >
                                        <div class="col-lg-6">
                                            <p class="text-muted">Foto da frente do cartão</p>
                                            <input id="agency" class="form-control" type="file" placeholder="Agência *" required="required" >
                                            <p class="help-block text-danger"></p>                                        
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="text-muted">Selfie segurando o cartão</p>
                                            <input id="agency" class="form-control" type="file" placeholder="Agência *" required="required" >
                                            <p class="help-block text-danger"></p>
                                        </div>                                            
                                    </div>                                    
                                </div>
                                <div class="form-group" style="margin-bottom:0px">
                                    <p class="text-muted">Identidade</p>
                                    <div class="row" >
                                        <div class="col-lg-6">
                                            <p class="text-muted">Foto da frente da identidade</p>
                                            <input id="agency" class="form-control" type="file" placeholder="Agência *" required="required" >
                                            <p class="help-block text-danger"></p>                                        
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="text-muted">Selfie segurando a identidade</p>
                                            <input id="agency" class="form-control" type="file" placeholder="Agência *" required="required" >
                                            <p class="help-block text-danger"></p>
                                        </div>                                            
                                    </div>                                    
                                </div>
                                

                                <div class="clearfix"></div>                                
                                <div class="col-lg-12 text-center">
                                    <div class="col-lg-12 text-center">
                                    <button id="btn_steep_5" class="btn btn-primary btn-xl text-uppercase" style="padding:10px" type="submit">Contratar</button>
                                </div>
                                </div>
                            </div>                                   
                        </form>
                    </div>
                </div> 
            </div>

            <div class="col-lg-4" style="padding:50px;">
                <!-- INFORMATION STEEP 1 -->
                <div id="information-steep-1" class="col-lg-12 check1" style="display:block">
                    <div>
                        <div class="timeline-heading text-center">
                            <h4 class="subheading">Adicionar dados pessoais e endereço</h4>
                        </div>
                        <div class="timeline-image text-center">
                            <img class="my-round-circle my-round-circle-2" src="<?php echo base_url()?>assets/img/about/5.jpg" alt="">
                        </div>
                        <div class="timeline-panel">                                
                            <div class="timeline-body">
                                <p class="text-muted text-justify">Nessa etapa você nos envia seus dados. Não se preocupe, nossa plataforma usa o protocolo de envio de dados seguro SSL e os dados são critografados. A verificação do telefone com código de segurança enviado por SMS aumenta a legitimação do usuário na plataforma.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INFORMATION STEEP 2 -->
                <div id="information-steep-2" class="col-lg-12 check2" style="display:none">
                    <div>
                        <div class="timeline-heading text-center">
                            <h4 class="subheading">Adicionar dados bancários</h4>
                        </div>
                        <div class="timeline-image text-center">
                            <img class="my-round-circle my-round-circle-2" src="<?php echo base_url()?>assets/img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">

                            <div class="timeline-body">
                                <p class="text-muted text-justify">Nessa etapa você nos informa a conta, corrente ou poupança, onde deseja receber o empréstimo. O nome do titular da conta deve coincidir com seu nome. <b>Dica:</b> o número da conta está geralmente no formato O0000-X, onde o X representa o dígito verificador.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INFORMATION STEEP 3 -->
                <div id="information-steep-3" class="col-lg-12 check3" style="display:none">
                    <div>
                        <div class="timeline-heading text-center">
                            <h4 class="subheading">Adicionar dados bancários</h4>
                        </div>
                        <div class="timeline-image text-center">
                            <img class="my-round-circle my-round-circle-2" src="<?php echo base_url()?>assets/img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">

                            <div class="timeline-body">
                                <p class="text-muted text-justify">Nessa etapa você nos informa a conta, corrente ou poupança, onde deseja receber o empréstimo. O nome do titular da conta deve coincidir com seu nome. <b>Dica:</b> o número da conta está geralmente no formato O0000-X, onde o X representa o dígito verificador.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INFORMATION STEEP 4 -->
                <div id="information-steep-4" class="col-lg-12 check4" style="display:none">
                    <div>
                        <div class="timeline-heading text-center">
                            <h4 class="subheading">Adicionar dados bancários</h4>
                        </div>
                        <div class="timeline-image text-center">
                            <img class="my-round-circle my-round-circle-2" src="<?php echo base_url()?>assets/img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">

                            <div class="timeline-body">
                                <p class="text-muted text-justify">Nessa etapa você nos informa a conta, corrente ou poupança, onde deseja receber o empréstimo. O nome do titular da conta deve coincidir com seu nome. <b>Dica:</b> o número da conta está geralmente no formato O0000-X, onde o X representa o dígito verificador.</p>
                            </div>
                        </div>
                    </div>
                </div>  
                
                <!-- INFORMATION STEEP 5 -->
                <div id="information-steep-5" class="col-lg-12 check5" style="display:none">
                    <div>
                        <div class="timeline-heading text-center">
                            <h4 class="subheading">Adicionar dados bancários</h4>
                        </div>
                        <div class="timeline-image text-center">
                            <img class="my-round-circle my-round-circle-2" src="<?php echo base_url()?>assets/img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">

                            <div class="timeline-body">
                                <p class="text-muted text-justify">Nessa etapa você nos informa a conta, corrente ou poupança, onde deseja receber o empréstimo. O nome do titular da conta deve coincidir com seu nome. <b>Dica:</b> o número da conta está geralmente no formato O0000-X, onde o X representa o dígito verificador.</p>
                            </div>
                        </div>
                    </div>
                </div>                   

            </div>
        </div>
    </section>
    
    
    <!--QUENS SOMOS-->
    <section id="who-we-are" style="color: white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase" >Contate-nos</h2>
                    <div class="">
                        <a href="#lnk_home_start">
                            <img src="https://doorig.com/assets/images/resources/logo-footer-white.png" width="200px" alt="Footer Logo">
                        </a>
                    </div>
                </div>
            </div>   
            <br>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="row">                
                        <div class="col-lg-12">
                            <div class="single-footer-widget pd-top pd-left">
                                <div class="title">
                                   <h6>Deixe sua mensagem aqui. Em breve responderemos.</h6>
                               </div>
                               <form id="contactForm" name="contact-us" novalidate="novalidate">
                                   <div class="form-group">
                                       <div class="form-group">
                                            <input class="form-control" id="contact-us-name" type="text" placeholder="Nome Completo *" required="required" data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="contact-us-email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="contact-us-phone" type="tel" placeholder="Telefone *" required="required" data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="contact-us-message" placeholder="Mensagem *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12 text-center">
                                            <div id="success"></div>
                                            <button id="contact-us-btn" class="btn btn-primary btn-xl text-uppercase" type="button">Enviar</button>
                                        </div>
                                   </div>                                   
                               </form>               
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-justify">
                        <p>A Lending é uma plataforma de crédito on-line que segue as diretrizes do Banco Central do Brasil, nos termos da 
                            <a href="https://www.bcb.gov.br/pre/normativos/res/2011/pdf/res_3954_v7_L.pdf">Resolução nº. 3.954</a>, de 24 de fevereiro de 2011. </p>
                        <p>O Custo Efetivo Total (CET) praticado varia de 56,68% a 98,32% ao ano, já incluindo a taxa de juros mensal que varia de 3,99% a 9,95% e a taxa de abertura de cadastro (TAC) de 20% sobre o valor tomado.</p>
                        <p>Coronel Moreira César, 160, Icaraí, Niterói - RJ, 24230-061.</p>
                        <p>CNPJ - 999.9999.9999.99</p>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Lending <?php echo date("Y",time());?></span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">              
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">              
              <li class="list-inline-item">
                <a href="#">Termos de Uso</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    
    <!--modal_container_alert_message-->
    <div class="modal fade" style="top:30%" id="modal_alert_message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div id="modal_container_alert_message" class="modal-dialog modal-sm" role="document">                                                          
            <div class="modal-content">
                <div class="modal-header text-muted">
                    <i class="fas fa-exclamation-triangle"> Alerta</i>
                    <button id="btn_modal_close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-muted">                                            
                    <p id="message_text">;</p>                        
                </div>
                <div class="modal-footer text-center">
                    <button id="accept_modal_alert_message" type="button" class="btn btn-primary active text-center ladda-button" data-style="expand-left" data-spinner-color="#ffffff">
                        <spam class="ladda-label"><div style="color:white; font-weight:bold">ACEITAR</div></spam>
                    </button>
                </div>
            </div>
        </div>                                                        
    </div> 
    
    <!--modal_container_success_message-->
    <div class="modal fade" style="top:30%" id="modal_success_message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div id="modal_container_success_message" class="modal-dialog modal-sm" role="document">                                                          
            <div class="modal-content">
                <div class="modal-header text-muted">
                    <i class="fas fa-check-square"> Sucesso</i>
                    <button id="btn_modal_close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-muted">                                            
                    <p id="message_success_text"></p>                        
                </div>
                <div class="modal-footer text-center">
                    <button id="accept_modal_success_message" type="button" class="btn btn-primary active text-center ladda-button" data-style="expand-left" data-spinner-color="#ffffff">
                        <spam class="ladda-label"><div style="color:white; font-weight:bold">ACEITAR</div></spam>
                    </button>
                </div>
            </div>
        </div>                                                        
    </div> 
    
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="<?php echo base_url()?>assets/js/jquery.mask.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>assets/js/agency.min.js"></script>
    
    <script src="<?php echo base_url()?>assets/js/sign_in.js"></script>
    <script src="<?php echo base_url()?>assets/js/talkme_painel.js"></script>
    <script src="<?php echo base_url()?>assets/js/script.js"></script>
    
  </body>

</html>
