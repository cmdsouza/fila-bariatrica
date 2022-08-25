<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "conexao.php";

$sqlFila = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente = '".$_GET['cpf']."'";
$resultadoFila = mysql_query($sqlFila) or die();
while($linhaFila = mysql_fetch_array($resultadoFila)){
	$sql2 = "INSERT INTO `tb_pacientedesligado`(`nr_cpfPaciente`, `dt_desligamento`, `nm_nomePaciente`, `nr_idade`, `nm_genero`, `nm_altura`, `nm_peso`, `nm_orientacao`, `nm_dieta`, `nm_psicologo`, `nm_atividade`, `nm_medicamento`, `nm_pre`, `nm_antecedentes`, `nm_cirurgia`, `nm_cronico`, `nr_cpfMedico`, `nr_imc`) VALUES ('".$_GET['cpf']."', '".date('d/m/Y')."', '".$linhaFila['nm_nomePaciente']."', ".$linhaFila['nr_idade'].", '".$linhaFila['nm_genero']."', '".$linhaFila['nm_altura']."', '".$linhaFila['nm_peso']."', '".$linhaFila['nm_orientacao']."', '".$linhaFila['nm_dieta']."', '".$linhaFila['nm_psicologo']."', '".$linhaFila['nm_atividade']."', '".$linhaFila['nm_medicamento']."', '".$linhaFila['nm_pre']."', '".$linhaFila['nm_antecedentes']."', '".$linhaFila['nm_cirurgia']."', '".$linhaFila['nm_cronico']."', '".$linhaFila['nr_cpfMedico']."', ".$linhaFila['nr_imc'].")";
	$resultado2 = mysql_query($sql2) or die(mysql_error());
}

$sql2 = "DELETE FROM `tb_paciente` WHERE `nr_cpfPaciente` = '".$_GET['cpf']."'";
$resultado2 = mysql_query($sql2) or die(mysql_error());


echo "
	<script>
		window.location = 'medico.php';
	</script>
";


?>