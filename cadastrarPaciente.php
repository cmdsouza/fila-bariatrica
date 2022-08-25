<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "conexao.php";

$imc = ($_POST['peso'] / ($_POST['altura'] * $_POST['altura']));

echo $sql2 = "INSERT INTO `tb_paciente`(`nr_cpfPaciente`, `nm_nomePaciente`, `nr_idade`, `nm_genero`, `nm_altura`, `nm_peso`, `nm_orientacao`, `nm_dieta`, `nm_psicologo`, `nm_atividade`, `nm_medicamento`, `nm_pre`, `nm_antecedentes`, `nm_cirurgia`, `nm_cronico`, `nr_cpfMedico`, `nr_imc`) VALUES ('".$_POST['cpf']."', '".$_POST['nome']."', '".$_POST['idade']."', '".$_POST['genero']."', '".$_POST['altura']."', '".$_POST['peso']."', '".$_POST['orientacao']."', '".$_POST['dieta']."', '".$_POST['psicologo']."', '".$_POST['atividade']."', '".$_POST['medicamento']."', '".$_POST['pre']."', '".$_POST['antecedentes']."', '".$_POST['cirurgias']."', '".$_POST['cronico']."', '111.111.111-11', ".round($imc).")";
$resultado2 = mysql_query($sql2) or die(mysql_error());


echo "
	<script>
		window.location = 'medico.php';
	</script>
";

?>