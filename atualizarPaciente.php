<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "conexao.php";

$sql2 = "UPDATE `tb_paciente` SET `nm_nomePaciente` = '".$_POST['nome']."', `nr_idade` = '".$_POST['idade']."', `nm_genero` = '".$_POST['genero']."', `nm_altura` = '".$_POST['altura']."', `nm_peso` = '".$_POST['peso']."', `nm_orientacao` = '".$_POST['orientacao']."', `nm_dieta` = '".$_POST['dieta']."', `nm_psicologo` = '".$_POST['psicologo']."', `nm_atividade` = '".$_POST['atividade']."', `nm_medicamento` = '".$_POST['medicamento']."', `nm_pre` = '".$_POST['pre']."', `nm_antecedentes` = '".$_POST['antecedentes']."', `nm_cirurgia` = '".$_POST['cirurgias']."', `nm_cronico` = '".$_POST['cronico']."' WHERE `nr_cpfPaciente` = '".$_POST['cpfPaciente']."'";
$resultado2 = mysql_query($sql2) or die(mysql_error());


echo "
	<script>
		window.location = 'medico.php';
	</script>
";


?>