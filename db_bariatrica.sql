-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 10-Fev-2020 às 11:57
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_bariatrica`
--
CREATE DATABASE IF NOT EXISTS `db_bariatrica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_bariatrica`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_paciente` (
  `nr_cpfPaciente` varchar(18) NOT NULL,
  `nm_nomePaciente` varchar(80) NOT NULL,
  `nr_idade` int(3) NOT NULL,
  `nm_genero` varchar(10) NOT NULL,
  `nm_altura` varchar(5) NOT NULL,
  `nm_peso` varchar(5) NOT NULL,
  `nm_orientacao` varchar(5) NOT NULL,
  `nm_dieta` varchar(5) NOT NULL,
  `nm_psicologo` varchar(5) NOT NULL,
  `nm_atividade` varchar(5) NOT NULL,
  `nm_medicamento` varchar(5) NOT NULL,
  `nm_pre` varchar(5) NOT NULL,
  `nm_antecedentes` varchar(5) NOT NULL,
  `nm_cirurgia` varchar(5) NOT NULL,
  `nm_cronico` varchar(5) NOT NULL,
  `nr_cpfMedico` varchar(18) NOT NULL,
  `nr_imc` int(11) NOT NULL,
  PRIMARY KEY (`nr_cpfPaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_paciente`
--

INSERT INTO `tb_paciente` (`nr_cpfPaciente`, `nm_nomePaciente`, `nr_idade`, `nm_genero`, `nm_altura`, `nm_peso`, `nm_orientacao`, `nm_dieta`, `nm_psicologo`, `nm_atividade`, `nm_medicamento`, `nm_pre`, `nm_antecedentes`, `nm_cirurgia`, `nm_cronico`, `nr_cpfMedico`, `nr_imc`) VALUES
('081.099.131-48', 'Bruno Duarte', 23, 'Masculino', '1.80', '170', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', '111.111.111-11', 52),
('234.634.524-88', 'Lucia Maria', 27, 'Feminino', '1.83', '67', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '111.111.111-11', 20),
('469.743.995-37', 'Sarah Josefa Cavalcanti', 35, 'Feminino', '1.83', '130', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', '111.111.111-11', 39),
('601.005.323-49', 'Nair Olivia', 55, 'Feminino', '1.60', '160', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '111.111.111-11', 48);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pacientedesligado`
--

CREATE TABLE IF NOT EXISTS `tb_pacientedesligado` (
  `nr_cpfPaciente` varchar(18) NOT NULL,
  `dt_desligamento` varchar(12) NOT NULL,
  `nm_nomePaciente` varchar(80) NOT NULL,
  `nr_idade` int(3) NOT NULL,
  `nm_genero` varchar(10) NOT NULL,
  `nm_altura` varchar(5) NOT NULL,
  `nm_peso` varchar(5) NOT NULL,
  `nm_orientacao` varchar(5) NOT NULL,
  `nm_dieta` varchar(5) NOT NULL,
  `nm_psicologo` varchar(5) NOT NULL,
  `nm_atividade` varchar(5) NOT NULL,
  `nm_medicamento` varchar(5) NOT NULL,
  `nm_pre` varchar(5) NOT NULL,
  `nm_antecedentes` varchar(5) NOT NULL,
  `nm_cirurgia` varchar(5) NOT NULL,
  `nm_cronico` varchar(5) NOT NULL,
  `nr_cpfMedico` varchar(18) NOT NULL,
  `nr_imc` int(11) NOT NULL,
  PRIMARY KEY (`nr_cpfPaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pacientedesligado`
--

INSERT INTO `tb_pacientedesligado` (`nr_cpfPaciente`, `dt_desligamento`, `nm_nomePaciente`, `nr_idade`, `nm_genero`, `nm_altura`, `nm_peso`, `nm_orientacao`, `nm_dieta`, `nm_psicologo`, `nm_atividade`, `nm_medicamento`, `nm_pre`, `nm_antecedentes`, `nm_cirurgia`, `nm_cronico`, `nr_cpfMedico`, `nr_imc`) VALUES
('802.960.830-62', '18/01/2020', 'Gabriel dos Santos', 30, 'Masculino', '1.70', '150', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', '111.111.111-11', 52);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
