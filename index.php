	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Personal</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/.png" alt="" title="" />  </a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php">Página Inicial</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->


			<!-- Start services Area -->
			<section class="services-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content  col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Controle da Fila Bariátrica</h1>
		                        <p>Verifique sua posição na fila de cirurgias bariátricas.</p>
		                    </div>
		                </div>
		            </div>						
				</div>	
			</section>
			<!-- End services Area -->	

			<!-- Start fact Area -->
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">				
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fact">
							<h1> </h1>
							<p> </p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<?php
								include "conexao.php";
								$b = 0;
								$sqlFila = "SELECT * FROM tb_paciente WHERE `nr_imc` >= 35 ORDER BY nr_imc DESC";
								$resultadoFila = mysql_query($sqlFila) or die();
								while($linhaFila = mysql_fetch_array($resultadoFila)){
									if(($linhaFila['nm_orientacao']=='Não') || ($linhaFila['nm_dieta']=='Não') || ($linhaFila['nm_psicologo']=='Não') || ($linhaFila['nm_atividade']=='Não') || ($linhaFila['nm_medicamento']=='Não') || ($linhaFila['nm_pre']=='Não') || ($linhaFila['nm_antecedentes']=='Sim') || ($linhaFila['nm_cirurgia']=='Sim') || ($linhaFila['nm_cronico']=='Sim') || ($linhaFila['nr_idade']<16) || ($linhaFila['nr_idade']>65)){
									}else{
										$b = $b + 1;
									}
								}
							?>
							<h1 class="counter"><?php echo $b; ?></h1>
							<p>Pessoas na Fila</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<?php
								$sqlForaFila = "SELECT * FROM tb_pacientedesligado";
								$resultadoForaFila = mysql_query($sqlForaFila) or die();
								$numForaFila = mysql_num_rows($resultadoForaFila);
							?>
							<h1 class="counter"><?php echo $numForaFila; ?></h1>
							<p>Pessoas Atendidas</p>
						</div>	
						<div class="col-lg-3 col-md-6 single-fact">
							<h1></h1>
							<p> </p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->	

			<!-- Start testimonial Area -->
		    <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Informações Importantes</h1>
		                        <p>Essas são algumas informações de suma importância:</p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="desc">
		                            <p>
		                                Redefine as diretrizes para a organização da prevenção e do tratamento do sobrepeso e obesidade como linha de cuidado prioritária da Rede de Atenção à Saúde das Pessoas com Doenças Crônicas.	     
		                            </p>
									
									<p>
		                              <a target="_blank" href='http://bvsms.saude.gov.br/bvs/saudelegis/gm/2013/prt0424_19_03_2013.html'>Clique aqui para ler na integra.</a>
		                            </p>
									
		                            <h4>Portaria 424/2013</h4>
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="desc">
		                            <p>
		                               Estabelece regulamento técnico, normas e critérios para a Assistência de Alta Complexidade ao Indivíduo com Obesidade.
		                            </p>
									
									<p>
		                              <a target="_blank"  href='http://bvsms.saude.gov.br/bvs/saudelegis/gm/2013/prt0425_19_03_2013.html'>Clique aqui para ler na integra.</a>
		                            </p>
									
		                            <h4>Portaria 425/2013</h4>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->
            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Informações</h4>
                                <p>
                                   Equipe de Desenvolvimento: Camilla Santos (Graduando em Enfermagem) e Carlos Matheus (Graduando em Eng. Elétrica).
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Login</h4>
								<div class="" id="mc_embed_signup">
									 <form target="_blank" method="POST">
									    <input type="text" class="form-control" name="cpf" placeholder="Digite seu CPF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu CPF'" required="" type="email">
										<input type="password" class="form-control" name="senha" placeholder="Enter Email Address" required="">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit"><h5>Entrar</h5></button>
											<a href='medico.php'>Médico</a>
											<!--<a href='paciente.php'>Paciente</a>-->
									    </div>
									    	<div class="info"></div> 
									</form> 
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
            <script src="js/isotope.pkgd.min.js"></script>			
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>							
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>