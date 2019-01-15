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
        <link href="<?php echo base_url()?>assets/css/agency.css<?php echo "?".$SCRIPT_VERSION;?>" rel="stylesheet">
        <!-- Social icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Proper styles -->
        <link href="<?php echo base_url()?>assets/css/style.css<?php echo "?".$SCRIPT_VERSION;?>" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url().'assets/'?>css/wizard.css<?php echo "?".$SCRIPT_VERSION;?>">       
        
        <script type="text/javascript">
            var base_url = '<?php echo base_url();?>';
            var key = '<?php echo $key;?>';
        </script>
    </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:black">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url();?>">Lendgol</a>
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
                <div class="text-left res">
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
                                            <button id="btn_code_request" class="btn btn-primary btn-xl text-uppercase" style="padding:8px;" type="button">SOLICITAR CÓDIGO</button>
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
                                        <div id="conferir" class="col-lg-6 form-group">
                                            <button id="btn_code_verify" class="btn btn-primary btn-xl text-uppercase" style="padding:8px;width:170px" type="button">CONFERIR</button><br>
                                            <a id="lnk_code_resend" href="#" class="text-muted">Novo código?</a>
                                        </div>                                            
                                    </div>                                            
                                </div>                       
                                <button id="btn_steep_1" class="btn btn-primary btn-xl text-uppercase hidden" style="padding:12px" type="button">Seguinte</button>
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
                                                <option value="01" selected="true">01</option>
                                                <option value="02">02</option><option value="03">03</option>
                                                <option value="04">04</option><option value="05">05</option>
                                                <option value="06">06</option><option value="07">07</option>
                                                <option value="08">08</option><option value="09">09</option>
                                                <option value="10">10</option><option value="11">11</option>
                                                <option value="12">12</option>
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
                                        <option value="237">BCO BRADESCO S.A.</option> 
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
                                    <div class="row" >
                                        <div class="col-lg-6 upl hvr-icon-up">
                                            <p class="text-muted">1. Foto da frente do cartão</p>
                                            <label for="cartao">
                                                <input type="file" id="cartao" class="hidden">
                                                <div id="check_selfie_credit_card" class="upload upload-green pointer h-over-success" >
                                                    <img src="<?php echo base_url().'assets/'?>img/photos/credit-card.png" alt="" style="width:200px;height:140px">
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 upl">
                                            <p class="text-muted">2. Selfie com o cartão</p>
                                            <label for="selcartao">
                                                <input type="file" id="selcartao" class="hidden">
                                                <div id="check_selfie_credit_card" class="upload upload-green pointer h-over-success">
                                                    <img src="<?php echo base_url().'assets/'?>img/photos/selfie-with-credit-card.png" alt="" style="width:200px;height:140px">
                                                </div>
                                            </label>
                                        </div>                                            
                                    </div>                                    
                                </div>
                                <div class="form-group" style="margin-bottom:0px">
                                    <div class="row" style="margin-top:20px">
                                        <div class="col-lg-6 upl">
                                            <p class="text-muted">3. Foto da identidade aberta</p>
                                            <label for="id">
                                                <input type="file" id="id" class="hidden">
                                                <div id="check_selfie_credit_card" class="upload upload-red pointer h-over-error">
                                                    <img src="<?php echo base_url().'assets/'?>img/photos/identification.png" alt="" style="width:200px;height:140px">
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 upl">
                                            <p class="text-muted">4. Selfie com a identidade</p>
                                            <label for="selid">
                                                <input type="file" id="selid" class="hidden">
                                                <div id="check_selfie_credit_card" class="upload upload-white pointer h-over">
                                                    <img  src="<?php echo base_url().'assets/'?>img/photos/selfie-with-identification.png" alt="" style="width:200px;height:140px">
                                                </div>
                                            </label>                                            
                                        </div>                                            
                                    </div>                                    
                                </div>
                                

                                <div class="clearfix"></div>                                
                                <div class="col-lg-12 text-center">
                                    <div class="col-lg-12 text-center" style="margin-top: 30px">
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
                        <p>A Lendgol é uma plataforma de crédito on-line que segue as diretrizes do Banco Central do Brasil, nos termos da 
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
            <span class="copyright">Copyright &copy; Lendgol <?php echo date("Y",time());?></span>
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
    
    <script src="<?php echo base_url()?>assets/js/sign_in.js<?php echo "?".$SCRIPT_VERSION;?>"></script>
    <script src="<?php echo base_url()?>assets/js/talkme_painel.js<?php echo "?".$SCRIPT_VERSION;?>"></script>
    <script src="<?php echo base_url()?>assets/js/script.js<?php echo "?".$SCRIPT_VERSION;?>"></script>
    
  </body>

</html>
