<?php

session_start();
include "conexao.php";

?>

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

		  <style>
		  /*
			P.S: if you like my content maybe you will become a donator and donate some money? That helps me to create new awesome materials. https://www.paypal.me/melnik909
			*/

			.timeline{
			  --uiTimelineMainColor: var(--timelineMainColor, #222);
			  --uiTimelineSecondaryColor: var(--timelineSecondaryColor, #fff);

			  position: relative;
			  padding-top: 3rem;
			  padding-bottom: 3rem;
			}

			.timeline:before{
			  content: "";
			  width: 4px;
			  height: 100%;
			  background-color: var(--uiTimelineMainColor);

			  position: absolute;
			  top: 0;
			}

			.timeline__group{
			  position: relative;
			}

			.timeline__group:not(:first-of-type){
			  margin-top: 4rem;
			}

			.timeline__year{
			  padding: .5rem 1.5rem;
			  color: var(--uiTimelineSecondaryColor);
			  background-color: var(--uiTimelineMainColor);

			  position: absolute;
			  left: 0;
			  top: 0;
			}

			.timeline__box{
			  position: relative;
			}

			.timeline__box:not(:last-of-type){
			  margin-bottom: 30px;
			}

			.timeline__box:before{
			  content: "";
			  width: 100%;
			  height: 2px;
			  background-color: var(--uiTimelineMainColor);

			  position: absolute;
			  left: 0;
			  z-index: -1;
			}

			.timeline__date{
			  min-width: 65px;
			  position: absolute;
			  left: 0;

			  box-sizing: border-box;
			  padding: .5rem 1.5rem;
			  text-align: center;

			  background-color: var(--uiTimelineMainColor);
			  color: var(--uiTimelineSecondaryColor);
			}

			.timeline__day{
			  font-size: 2rem;
			  font-weight: 700;
			  display: block;
			}

			.timeline__month{
			  display: block;
			  font-size: .8em;
			  text-transform: uppercase;
			}

			.timeline__post{
			  padding: 1.5rem 2rem;
			  border-radius: 2px;
			  border-left: 3px solid var(--uiTimelineMainColor);
			  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24);
			  background-color: var(--uiTimelineSecondaryColor);
			}

			@media screen and (min-width: 641px){

			  .timeline:before{
				left: 30px;
			  }

			  .timeline__group{
				padding-top: 55px;
			  }

			  .timeline__box{
				padding-left: 80px;
			  }

			  .timeline__box:before{
				top: 50%;
				-webkit-transform: translateY(-50%);
						transform: translateY(-50%);  
			  }  

			  .timeline__date{
				top: 50%;
				margin-top: -27px;
			  }
			}

			@media screen and (max-width: 640px){

			  .timeline:before{
				left: 0;
			  }

			  .timeline__group{
				padding-top: 40px;
			  }

			  .timeline__box{
				padding-left: 20px;
				padding-top: 70px;
			  }

			  .timeline__box:before{
				top: 90px;
			  }    

			  .timeline__date{
				top: 0;
			  }
			}

			.timeline{
			  --timelineMainColor: rgb(130,147,255);
			  font-size: 16px;
			}

			@media screen and (min-width: 768px){

			  html{
				font-size: 62.5%;
			  }
			}

			@media screen and (max-width: 767px){

			  html{
				font-size: 55%;
			  }
			}

			/*
			* demo page
			*/

			body{
			  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
			  font-size: 1.6rem;
			  color: #222;

			  background-color: #f0f0f0;
			  margin: 0;
			  -webkit-overflow-scrolling: touch;   
			  overflow-y: scroll;
			}

			p{
			  margin-top: 0;
			  margin-bottom: 1.5rem;
			  line-height: 1.5;
			}

			p:last-child{
			  margin-bottom: 0;
			}

			.page{
			  min-height: 100vh;
			  display: flex;
			  flex-direction: column;
			  justify-content: space-around;
			}

			.page__demo{
			  flex-grow: 1;
			}

			.main-container{
			  max-width: 960px;
			  padding-left: 2rem;
			  padding-right: 2rem;

			  margin-left: auto;
			  margin-right: auto;
			}

			.page__container{
			  padding-top: 30px;
			  padding-bottom: 30px;
			  max-width: 800px;
			}

			.footer{
			  padding-top: 1rem;
			  padding-bottom: 1rem;
			  text-align: center;  
			  font-size: 1.4rem;
			}

			.footer__link{
			  text-decoration: none;
			  color: inherit;
			}

			@media screen and (min-width: 361px){

			  .footer__container{
				display: flex;
				justify-content: space-between;
			  }
			}

			@media screen and (max-width: 360px){

			  .melnik909{
				display: none;
			  } 
			}
		  </style>

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
			          <li><a href="#facts-area">Cadastrar Paciente</a></li>
			          <li><a href="#gerenciarPacientes">Gerenciar Pacientes</a></li>
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
		                        <h1 class="mb-10">Bem Vindo, Camilla</h1>
		                        <p>Atualize ou cadastre o prontuário dos pacientes que necessitam da cirurgia bariátrica.</p>
		                    </div>
		                </div>
		            </div>						
				</div>	
			</section>

	
			 <div class="page" style='margin-top:-80px;'>
			  <div class="page__demo">
				<div class="main-container page__container">
				  <div class="timeline">
					<div class="timeline__group">
					
								<!-- jQuery library -->
								<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
								<!-- Bootstrap JS -->
								<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

								<script>
									$(document).ready(function(){
										$('[data-toggle="popover"]').popover();   
									});
								</script>
					
					<?php
												
						//SELECT * FROM `tb_paciente` WHERE `nr_imc` >= 50
						//SELECT * FROM `tb_paciente` WHERE `nr_imc` >= 40
						//SELECT * FROM `tb_paciente` WHERE `nr_imc` >= 35 ORDER BY `nm_cronico` DESC
						
						$b = 1;
						$sqlFila = "SELECT * FROM tb_paciente WHERE `nr_imc` >= 35 ORDER BY nr_imc DESC";
						$resultadoFila = mysql_query($sqlFila) or die();
						while($linhaFila = mysql_fetch_array($resultadoFila)){
							if(($linhaFila['nm_orientacao']=='Não') || ($linhaFila['nm_dieta']=='Não') || ($linhaFila['nm_psicologo']=='Não') || ($linhaFila['nm_atividade']=='Não') || ($linhaFila['nm_medicamento']=='Não') || ($linhaFila['nm_pre']=='Não') || ($linhaFila['nm_antecedentes']=='Sim') || ($linhaFila['nm_cirurgia']=='Sim') || ($linhaFila['nm_cronico']=='Sim') || ($linhaFila['nr_idade']<16) || ($linhaFila['nr_idade']>65)){
							}else{
								echo "
									<div class='timeline__box'>
										<div class='timeline__date' style='margin-top:-16px;'>
											<span class='timeline__day'>".$b."º</span>
										</div>
										<div class='timeline__post' style='margin-top:-10px;'>
											<div class='timeline__content'>
												<p><a href='tirarFila.php?cpf=".$linhaFila['nr_cpfPaciente']."'><b>".$linhaFila['nm_nomePaciente']."</b> | IMC: ".$linhaFila['nr_imc']." <img src='correct.png' style='margin-top:-6px; margin-left:5px;'  data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Indique que a cirurgia foi realizada!'></a></p>
											</div>
										</div>
									</div>
								";
						
								$b = $b + 1;
							}
						}
						
						
					?>
					</div>
				  </div>
				</div>
			  </div>
			</div>
  
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">
					<div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10" style='color:white;'>Novo Paciente</h1>
		                        <p style='color: white;'>Cadastre Novos Prontuários para inclusão dos pacientes na fila!</p>
		                    </div>
		                </div>
		            </div>
					<div class="row">
						<div class="col-lg-12 col-md-8">
							<form method='POST' action='cadastrarPaciente.php'>
							<table width='100%'>
								<tr>
									<td width='50%'><input type="text" name="nome" placeholder="Nome do Paciente" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome do Paciente'" required class="single-input"></td>
									<td width='50%'><input type="text" name="cpf" placeholder="CPF do Paciente" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CPF do Paciente'" required class="single-input"></td>
								</tr>
								<tr>
									<td width='50%'><input type="number" name="idade" min='0' placeholder="Idade do Paciente" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Idade do Paciente'" required class="single-input"></td>
									<td width='50%'>
										<div class="input-group-icon mt-8">
										<div class="icon"><i class="fa fa-transgender" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name='genero'>
												<option value="Feminino">Gênero</option>
												<option value="Feminino">Feminino</option>
												<option value="Masculino">Masculino</option>
											</select>
										</div>
									</div>
									</td>
								</tr>
								<tr>
									<td width='50%'><input type="text" name="altura" placeholder="Altura do Paciente [m]" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Altura do Paciente [m]'" required class="single-input"></td>
									<td width='50%'><input type="number" name="peso" min='0' placeholder="Peso do Paciente [kg]" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Peso do Paciente [kg]'" required class="single-input"></td>
								</tr>
								<tr><td></td><td><br></td></tr>
							</table>
							<table>
								<tr>
									<td width='90%' style='text-align:center; color: white; border: 1px solid white;' >Houve orientação e apoio para mudança de hábitos?</td>
									<td width='10%'>
										<div class="default-select" id="default-select">
											
												<select name='orientacao'>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												</select>
											
										</div>
									</td>
								</tr>
								<tr>
									<td width='50%' style='text-align:center; color: white; border: 1px solid white;'>Utilizou-se Dietas?</td>
									<td width='50%'>
										<div class="default-select" id="default-select">
											<select name='dieta'>
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td width='50%' style='text-align:center; color: white; border: 1px solid white;'>Foi prestado atenção psicológica?</td>
									<td width='50%'>
										<div class="default-select" id="default-select">
											<select name='psicologo'>
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td width='50%' style='text-align:center; color: white; border: 1px solid white;'>A Atividade física foi incentivada?</td>
									<td width='50%'>
										<div class="default-select" id="default-select">
											<select name='atividade'>
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td width='50%' style='text-align:center; color: white; border: 1px solid white;'>Optou-se pelo uso de medicamentos por, no mínimo, dois anos?</td>
									<td width='50%'>
										<div class="default-select" id="default-select">
											<select name='medicamento'>
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td width='50%' style='text-align:center; color: white; border: 1px solid white;'>Realizou-se avaliação pré-operatória especial? (Apenas idosos)</td>
									<td width='50%'>
										<div class="default-select" id="default-select">
											<select name='pre'>
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td width='50%' style='text-align:center; color: white; border: 1px solid white;'>O Paciente possui antecedentes de doença psiquiátrica, alcoolismo ou uso de drogas?</td>
									<td width='50%'>
										<div class="default-select" id="default-select">
											<select name='antecedentes'>
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td width='50%' style='text-align:center; color: white; border: 1px solid white;'>O Paciente possui cirurgias abdominais prévias?</td>
									<td width='50%'>
										<div class="default-select" id="default-select">
											<select name='cirurgias'>
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td width='50%' style='text-align:center; color: white; border: 1px solid white;'>O Paciente é Portador de doenças crônicas (anemia, insuficiência renal, doenças do fígado, doenças endócrinas entre outras)?</td>
									<td width='50%'>
										<div class="default-select" id="default-select">
											<select name='cronico'>
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
							</table>
							<br><center> <input type='submit' class="genric-btn success" value='Cadastrar Paciente'> </center>	
						</form>
						</div> 												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->	

			<!-- Start testimonial Area -->
		    <section class="testimonial-area section-gap" id="gerenciarPacientes">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Gerenciar Pacientes</h1>
		                        <p>Gerencie os Prontuários Cadastrados!</p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
						<div id="accordion">
							<?php
								$sql = "SELECT * FROM tb_paciente";
								$resultado = mysql_query($sql) or die();
								//echo $numImg = mysql_num_rows($resultadoImg);
								$a = 0;
								$c = 1;
								while($linha = mysql_fetch_array($resultado)){
									echo "
										<div class='card' style='width:110%'>
											<div class='card-header' id='headingTwo".$a."'>
											  <h5 class='mb-0'>
												<button class='btn btn-link collapsed' data-toggle='collapse' data-target='#collapseTwo".$a."' aria-expanded='false' aria-controls='collapseTwo".$a."'>
												  <p style='font-size:14px;'>".$linha['nm_nomePaciente']."</p>
												</button>
											  </h5>
											</div>
											<div id='collapseTwo".$a."' class='collapse' aria-labelledby='headingTwo".$a."' data-parent='#accordion'>
											  <div class='card-body' style='background-color: rgb(247,247,247); width:100%'>";
							?>
							
							
							  <?php
								
										if($linha['nr_imc'] >= 35){
											if(($linha['nm_orientacao']=='Não') || ($linha['nm_dieta']=='Não') || ($linha['nm_psicologo']=='Não') || ($linha['nm_atividade']=='Não') || ($linha['nm_medicamento']=='Não') || ($linha['nm_pre']=='Não') || ($linha['nm_antecedentes']=='Sim') || ($linha['nm_cirurgia']=='Sim') || ($linha['nm_cronico']=='Sim') || ($linha['nr_idade']<16) || ($linha['nr_idade']>65)){
												
												if($linha['nm_orientacao']=='Não'){
													$orientacao = "- Houve orientação e apoio para mudança de hábitos? <b style='color:red;'>".$linha['nm_orientacao']."</b><br>";
												}else{
													$orientacao = "- Houve orientação e apoio para mudança de hábitos? <b>".$linha['nm_orientacao']."</b><br>";
												}
												
												if($linha['nm_dieta']=='Não'){
													$dieta = "- Utilizou-se Dietas? <b style='color:red;'>".$linha['nm_dieta']."</b><br>";
												}else{
													$dieta = "- Utilizou-se Dietas? <b>".$linha['nm_dieta']."</b><br>";
												}
												
												if($linha['nm_psicologo']=='Não'){
													$psi = "- Foi prestado atenção psicológica? <b style='color:red;'>".$linha['nm_psicologo']."</b><br>";
												}else{
													$psi = "- Foi prestado atenção psicológica? <b>".$linha['nm_psicologo']."</b><br>";
												}
												
												if($linha['nm_atividade']=='Não'){
													$atv = "- A Atividade física foi incentivada? <b style='color:red;'>".$linha['nm_atividade']."</b><br>";
												}else{
													$atv = "- A Atividade física foi incentivada? <b>".$linha['nm_atividade']."</b><br>";
												}
												
												if($linha['nm_medicamento']=='Não'){
													$med = "- Optou-se pelo uso de medicamentos por, no mínimo, dois anos? <b style='color:red;'>".$linha['nm_medicamento']."</b><br>";
												}else{
													$med = "- Optou-se pelo uso de medicamentos por, no mínimo, dois anos? <b>".$linha['nm_medicamento']."</b><br>";
												}
												
												if($linha['nm_pre']=='Não'){
													$idoso = "- Para os idosos apenas: Realizou-se avaliação pré-operatória especial? <b style='color:red;'>".$linha['nm_pre']."</b><br>";
												}else{
													$idoso = "- Para os idosos apenas: Realizou-se avaliação pré-operatória especial? <b>".$linha['nm_pre']."</b><br>";
												}
												
												if($linha['nm_antecedentes']=='Sim'){
													$dorgas = "- O Paciente possui antecedentes de doença psiquiátrica, alcoolismo ou uso de drogas? <b style='color:red;'>".$linha['nm_antecedentes']."</b><br>";
												}else{
													$dorgas = "- O Paciente possui antecedentes de doença psiquiátrica, alcoolismo ou uso de drogas? <b>".$linha['nm_antecedentes']."</b><br>";
												}
												
												if($linha['nm_cirurgia']=='Sim'){
													$cirur = "- O Paciente possui cirurgias abdominais prévias? <b style='color:red;'>".$linha['nm_cirurgia']."</b><br>";
												}else{
													$cirur = "- O Paciente possui cirurgias abdominais prévias? <b>".$linha['nm_cirurgia']."</b><br>";
												}
												
												if($linha['nm_cronico']=='Sim'){
													$cronic = "- O Paciente é Portador de doenças crônicas (anemia, insuficiência renal, doenças do fígado, doenças endócrinas entre outras)? <b style='color:red;'>".$linha['nm_cronico']."</b><br>";
												}else{
													$cronic = "- O Paciente é Portador de doenças crônicas (anemia, insuficiência renal, doenças do fígado, doenças endócrinas entre outras)? <b>".$linha['nm_cronico']."</b><br>";
												}
												
												if((16<$linha['nr_idade']) || ($linha['nr_idade']<65)){
													$age = "- É maior de 16 anos e menor do que 65 anos? <b>Sim</b><br>";
												}else{
													$age = "- É maior de 16 anos e menor do que 65 anos? <b style='color:red;'>Não</b><br>";
												}
												
												echo "
													<div class='alert alert-warning alert-dismissible fade show' role='alert'>
													  <strong>O paciente não entrou na pois não atingiu um dos critérios!</strong> Abaixo temos um resumo:<br>
													  
													  ".$orientacao."
													  ".$dieta."
													  ".$psi."
													  ".$atv."
													  ".$med."
													  ".$idoso."
													  ".$dorgas."
													  ".$cirur."
													  ".$cronic."
													  ".$age."
													  
													  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
														<span aria-hidden='true'>&times;</span>
													  </button>
													</div>  
												";
											}else{
												echo "
												<div class='alert alert-success alert-dismissible fade show' role='alert'>
												  <strong>Posição na fila: ".$c."º</strong>
												  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
													<span aria-hidden='true'>&times;</span>
												  </button>
												</div>  
											";
												$c = $c + 1;
											}
										}else{
											echo "
												<div class='alert alert-warning alert-dismissible fade show' role='alert'>
												  <strong>O paciente não entrou na fila de cirurgia!</strong> O IMC calculado foi menor do que 35 (IMC atual: ".$linha['nr_imc'].").
												  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
													<span aria-hidden='true'>&times;</span>
												  </button>
												</div>  
											";
										}
										
								?>
							  
							
							
							
								<form method='POST' action='atualizarPaciente.php'>
								<input type='hidden' value='<?php echo $linha['nr_cpfPaciente']; ?>' name="cpfPaciente">
								<table width='100%'>
									<tr>
										<td width='50%'><input type="text" name="nome" value='<?php echo $linha['nm_nomePaciente']; ?>' required class="single-input"></td>
										<td width='50%'><input type="text"  value='<?php echo $linha['nr_cpfPaciente']; ?>' required class="single-input" disabled></td>
									</tr>
									<tr>
										<td width='50%'><input type="number" name="idade" min='0' value='<?php echo $linha['nr_idade']; ?>' required class="single-input"></td>
										<td width='50%'>
											<div class="input-group-icon mt-8">
											<div class="icon"><i class="fa fa-transgender" aria-hidden="true"></i></div>
											<div class="form-select" id="default-select">
												<select name='genero'>
													<option value="<?php echo $linha['nm_genero']; ?>"><?php echo $linha['nm_genero']; ?></option>
													<option value="Feminino">Feminino</option>
													<option value="Masculino">Masculino</option>
												</select>
											</div>
										</div>
										</td>
									</tr>
									<tr>
										<td width='50%'><input type="text" name="altura" value='<?php echo $linha['nm_altura']; ?>' required class="single-input"></td>
										<td width='50%'><input type="number" name="peso" min='0' value='<?php echo $linha['nm_peso']; ?>' required class="single-input"></td>
									</tr>
									<tr><td></td><td><br></td></tr>
								</table>
								<table>
									<tr>
										<td width='90%' style='text-align:center; color: black; border: 1px solid black;' >Houve orientação e apoio para mudança de hábitos?</td>
										<td width='10%'>
											<div class="default-select" id="default-select">
												
													<select name='orientacao'>
														<option value="<?php echo $linha['nm_orientacao']; ?>"><?php echo $linha['nm_orientacao']; ?></option>
														<option value="Sim">Sim</option>
														<option value="Não">Não</option>
													</select>
												
											</div>
										</td>
									</tr>
									<tr>
										<td width='50%' style='text-align:center; color: black; border: 1px solid black;'>Utilizou-se Dietas?</td>
										<td width='50%'>
											<div class="default-select" id="default-select">
												<select name='dieta'>
													<option value="<?php echo $linha['nm_dieta']; ?>"><?php echo $linha['nm_dieta']; ?></option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
										<td width='50%' style='text-align:center; color: black; border: 1px solid black;'>Foi prestado atenção psicológica?</td>
										<td width='50%'>
											<div class="default-select" id="default-select">
												<select name='psicologo'>
													<option value="<?php echo $linha['nm_psicologo']; ?>"><?php echo $linha['nm_psicologo']; ?></option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
										<td width='50%' style='text-align:center; color: black; border: 1px solid black;'>A Atividade física foi incentivada?</td>
										<td width='50%'>
											<div class="default-select" id="default-select">
												<select name='atividade'>
													<option value="<?php echo $linha['nm_atividade']; ?>"><?php echo $linha['nm_atividade']; ?></option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
										<td width='50%' style='text-align:center; color: black; border: 1px solid black;'>Optou-se pelo uso de medicamentos por, no mínimo, dois anos?</td>
										<td width='50%'>
											<div class="default-select" id="default-select">
												<select name='medicamento'>
													<option value="<?php echo $linha['nm_medicamento']; ?>"><?php echo $linha['nm_medicamento']; ?></option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
										<td width='50%' style='text-align:center; color: black; border: 1px solid black;'>Realizou-se avaliação pré-operatória especial? (Apenas idosos)</td>
										<td width='50%'>
											<div class="default-select" id="default-select">
												<select name='pre'>
													<option value="<?php echo $linha['nm_pre']; ?>"><?php echo $linha['nm_pre']; ?></option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
										<td width='50%' style='text-align:center; color: black; border: 1px solid black;'>O Paciente possui antecedentes de doença psiquiátrica, alcoolismo ou uso de drogas?</td>
										<td width='50%'>
											<div class="default-select" id="default-select">
												<select name='antecedentes'>
													<option value="<?php echo $linha['nm_antecedentes']; ?>"><?php echo $linha['nm_antecedentes']; ?></option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
										<td width='50%' style='text-align:center; color: black; border: 1px solid black;'>O Paciente possui cirurgias abdominais prévias?</td>
										<td width='50%'>
											<div class="default-select" id="default-select">
												<select name='cirurgias'>
													<option value="<?php echo $linha['nm_cirurgia']; ?>"><?php echo $linha['nm_cirurgia']; ?></option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
										<td width='50%' style='text-align:center; color: black; border: 1px solid black;'>O Paciente é Portador de doenças crônicas (anemia, insuficiência renal, doenças do fígado, doenças endócrinas entre outras)?</td>
										<td width='50%'>
											<div class="default-select" id="default-select">
												<select name='cronico'>
													<option value="<?php echo $linha['nm_cronico']; ?>"><?php echo $linha['nm_cronico']; ?></option>
													<option value="Sim">Sim</option>
													<option value="Não">Não</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
								</table>
								<br><center> <input type='submit' class="genric-btn success" value='Atualizar Paciente'> </center>	
							</form>
							
							<?php
							
									echo "
											  </div>
											</div>
										</div><br>
									";
									
									
									$a = $a + 1;
								}
							?>
						
						  
						  
						  
						</div>
					</div>
		        </div>
		    </section>

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