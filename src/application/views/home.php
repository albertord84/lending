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
    </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Lending</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger " href="#services">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>            
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger " href="#services">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>            
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Como funciona</a>
                    </li>           
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contate-nos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#who-we-are">Quens somos</a>
                    </li>           
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead text-left">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Solicite seu empréstimo aqui</div>
                <div class="intro-heading text-uppercase">Rápido e sem burocracia</div>
                <div class="intro-lead-in-in">Atrelado ao seu cartão de crédito</div>
                <a id="simule-now-1" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">Simule agora</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section id="services" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase" style="color: black">Simule aqui</h2>
                    <img src="<?php echo base_url()?>assets/img/down-arrow.png" width="50px">
                </div>
            </div>            
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6" style="padding-top: 40px">
                    <form id="simulationForm" name="sentMessage" novalidate="novalidate">
                        <div class="row text-center">
                            <div class="form-group col-lg-6">
                                <input class="form-control" id="solicited_value" type="tel" placeholder="Valor desejado" required="required" data-validation-required-message="Por favor, entre o valor desejado.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group col-lg-6">
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Verificar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row" style="visibility:visible;padding-top:20px;padding-bottom:40px; margin: 2px">
                <div class="col-lg-2"></div>
                <div class="col-lg-8" style="border:1px solid silver; border-radius: 5px;">
                    <div class="row">
                        <div class="col-lg-5">
                            <p>O limite disponível no seu cartão de crédito deve ser pelo menos de:</p>
                            <p><b id="cet" style="font-size:2em">R$ 1356,00</b></p>
                        </div>
                        <div class="col-lg-7">
                            <p class="text-justify">Valor solicitado: R$ 1000,00</p>
                            <p class="text-justify">Total a pagar: </p>
                            <p class="text-justify">Número de parcelas: 10</p>
                            <p class="text-justify">Valor de cada parcelas: 135,60</p>
                        </div>                        
                    </div>                    
                </div>
                <div class="col-lg-2"></div>
            </div>
            
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Fácil</h4>
                    <p class="text-muted">Transforme o limite do seu cartão de crédito em dinheiro na sua conta em até 24 horas.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Rápido</h4>
                    <p class="text-muted">Saque de R$ 300,00 a 5.000,00 em até 12x, com taxa a partir de 3,99% a.m.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Seguro</h4>
                    <p class="text-muted">Pague as prestações através da fatura do seu cartão de crédito.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Como funciona?</h2>
                    <h3 class="section-subheading text-muted">Veja o passo a passo.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <!--class="rounded-circle img-fluid"-->
                                <img class="my-round-circle" src="<?php echo base_url()?>assets/img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Passo 1</h4>
                                    <h4 class="subheading">Simule o valor desejado.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Você entra o valor que deseja tomar emprestado e o número de parcelas em que deseja pagar. Nós lhe informamos o valor de cada parcela e a quantidade total a pagar. </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="my-round-circle" src="<?php echo base_url()?>assets/img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Passo 2</h4>
                                    <h4 class="subheading">Adicione seus dados e documentos.</h4>
                                </div>
                              <div class="timeline-body">
                                    <p class="text-muted">Voce fornece digitalmente os dados pessoais, dados do cartão de crédito, dados bancários e documentos de identificação para formalizar-mos o empréstimo. Por último, você assina digitalmente o contrato.</p>
                              </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="my-round-circle" src="<?php echo base_url()?>assets/img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Passo 3</h4>
                                    <h4 class="subheading">Análise de dados e documentos.</h4>
                                </div>
                              <div class="timeline-body">
                                    <p class="text-muted">A nossa equipe analisa seus dados e documentos na hora e a resposta sobre a aprovação do seu crédito é instantânea.</p>
                              </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="my-round-circle" src="<?php echo base_url()?>assets/img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Passo 4</h4>
                                    <h4 class="subheading">Dinheiro na sua conta.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Após a aprovação do empréstimo, o dinheiro cai na sua conta em até 1 dia útil.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">                           
                            <div class="timeline-image">
                                <a id="simule-now-2" href="#" style="color:white"><h4>Simule seu<br>empréstimo <br>agora!!</h4></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
      </div>
    </section>

    <!-- Feedbaks -->
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Nossa reputação?</h2>
                    <img src="<?php echo base_url()?>assets/img/avaliation-stars.jpeg" width="100px">
                    <h3 class="section-subheading text-muted">Feedbacks de cleintes satisfeitos como o nosso seviço.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?php echo base_url()?>assets/img/team/1.jpg" alt="">
                        <h4>Margarida Monteiro</h4>
                        <b class="text-muted">Lojista</b>
                        <p class="text-muted">"Sou mãe, estava precisando muito de dinheiro em espécie, os juros de empréstimos em outros lugares são muito altos e decidi usar esse serviço. Agradeço muito essa App por ter me ajudado... <br>Obrigado!"</p>                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?php echo base_url()?>assets/img/team/2.jpg" alt="">
                        <h4>Leonam Ferreira</h4>
                        <b class="text-muted">Microempreendedor</b>
                        <p class="text-muted">"Sou MEI, precisava de dinheiro em epécie para comprar mais insumos no atacado. Solicitei um empréstimo e em menos de 24 horas já tinha o dinheiro solicitado <br> na minha conta. Graças a Lending  não fui à falhencia..."</p>
                    </div>
                </div>
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php echo base_url()?>assets/img/team/3.jpg" alt="">
                    <h4>Vanessa Pereira</h4>
                    <b class="text-muted">Professora</b>                    
                    <p class="text-muted">"Juros bem abaixo comparado com outras fontes disponíveis, envio de documentos totalmente digital e fácil, reposta de aprovação bem rápida, e recibi o dinheiro em 12 horas, esse serviço é muito bom. Voltaria a usar com certeza..."</p>
                  </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h4>Aos nossos clientes:</h4>
                  <p class="large text-muted">
                      "Obrigado por nos visitar e solicitar nosso serviço! Nós estamos contentes que você encontrou o que estava procurando. Nosso objetivo é a sua satisfação. Atentamente, Lending -:)"</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase" style="color: black">Contate-nos</h2>
                    <h3 class="section-subheading text-muted">Agradecemos seu contato desde já. Em breve responderemos.</h3>
                </div>
            </div>
            <div class="row">                
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <form id="contact-form" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Nome Completo *" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Telefone *" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Mensagem *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
    
    <!--QUENS SOMOS-->
    <section id="who-we-are" style="color: white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase" >Quem somos?</h2>
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
                <div class="col-lg-5">
                    <div class="text-justify">
                        <p>A Lending é uma plataforma de crédito on-line que segue as diretrizes do Banco Central do Brasil, nos termos da 
                            <a href="https://www.bcb.gov.br/pre/normativos/res/2011/pdf/res_3954_v7_L.pdf">Resolução nº. 3.954</a>, de 24 de fevereiro de 2011. </p>
                        <p>O Custo Efetivo Total (CET) praticado varia de 56,68% a 98,32% ao ano, já incluindo a taxa de juros mensal que varia de 3,99% a 9,95% e a taxa de abertura de cadastro (TAC) de 20% sobre o valor tomado.</p>
                        <p>Coronel Moreira César, 160, Icaraí, Niterói - RJ, 24230-061.</p>
                        <p>CNPJ - 999.9999.9999.99</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-footer-widget pd-top pd-left">
                         <div class="title">
                            <h5>Notícias e promoções?</h5>
                        </div>
                        <p>Subscreva-se e receba nossas notícias e novidades em primeira mão!</p>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Email *" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Subscrever-se</button>
                            </div>
                        </form>               
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
    
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url()?>assets/img/portfolio/01-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url()?>assets/img/portfolio/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url()?>assets/img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url()?>assets/img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url()?>assets/img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url()?>assets/img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url()?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url()?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>assets/js/agency.min.js"></script>

  </body>

</html>
