-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 19/06/2018 às 13:50
-- Versão do servidor: 5.5.51-38.2
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `picpets_123`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL,
  `email_admin` varchar(45) NOT NULL,
  `senha_admin` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `admin`
--

INSERT INTO `admin` (`idadmin`, `email_admin`, `senha_admin`) VALUES
(1, 'grupopicpets@gmail.com', 'f075163739044cf1364b70f16cd80576');

-- --------------------------------------------------------

--
-- Estrutura para tabela `bairro_fotografo`
--

CREATE TABLE IF NOT EXISTS `bairro_fotografo` (
  `idbairro_fotografo` int(11) NOT NULL,
  `bairro_fotografo` varchar(45) CHARACTER SET latin1 NOT NULL,
  `idcidade_fotografo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `bairro_fotografo`
--

INSERT INTO `bairro_fotografo` (`idbairro_fotografo`, `bairro_fotografo`, `idcidade_fotografo`) VALUES
(30, 'Vila juquey', 30),
(31, 'Nova mirim', 31),
(32, 'Campo grande', 32),
(33, 'Vila real', 33),
(35, 'Jussara', 35),
(36, 'Ocian', 36),
(37, 'Boqueirao', 37),
(38, 'Centro', 38),
(39, 'Centro', 39),
(40, 'Vila Ligya', 40),
(41, 'Areia Branca', 41),
(42, 'Vila Antartica', 42),
(43, 'Vila Tupiry', 43),
(44, 'Centro', 44),
(45, 'Solemar', 45),
(46, 'Centro', 46),
(47, 'Nova Mirim', 47),
(48, '', 48),
(49, '', 49),
(50, '', 50),
(51, '', 51),
(52, '', 52),
(53, '', 53),
(54, '', 54),
(55, '', 55),
(56, '', 56),
(57, '', 57),
(58, '', 58),
(59, '', 59),
(60, '', 60),
(61, '', 61),
(62, '', 62),
(63, '', 63),
(64, '', 64),
(65, '', 65),
(66, '', 66),
(67, '', 67),
(68, '', 68),
(69, '', 69),
(70, '', 70),
(71, '', 71),
(72, '', 72),
(73, '', 73),
(74, '', 74),
(75, '', 75),
(76, '', 76),
(77, '', 77),
(78, '', 78),
(79, '', 79),
(80, '', 80),
(81, '', 81),
(82, '', 82),
(83, '', 83),
(84, '', 84),
(85, '', 85),
(86, '', 86),
(87, '', 87),
(88, '', 88),
(89, '', 89),
(90, '', 90),
(91, '', 91),
(92, '', 92),
(93, '', 93),
(94, '', 94),
(95, '', 95),
(96, '', 96),
(97, '', 97),
(98, '', 98),
(99, '', 99),
(100, '', 100),
(101, '', 101),
(102, '', 102),
(103, '', 103),
(104, '', 104),
(105, '', 105),
(106, '', 106),
(107, '', 107),
(108, '', 108),
(109, '', 109),
(110, '', 110);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_fotografo`
--

CREATE TABLE IF NOT EXISTS `cadastro_fotografo` (
  `idcadastro_fotografo` int(11) NOT NULL,
  `nome_fotografo` varchar(45) NOT NULL,
  `data_nascimento_fotografo` date NOT NULL,
  `senha_fotografo` varchar(45) NOT NULL,
  `cpf_fotografo` varchar(11) NOT NULL,
  `descricao_fotografo` varchar(1000) DEFAULT NULL,
  `foto_perfil_fotografo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cadastro_fotografo`
--

INSERT INTO `cadastro_fotografo` (`idcadastro_fotografo`, `nome_fotografo`, `data_nascimento_fotografo`, `senha_fotografo`, `cpf_fotografo`, `descricao_fotografo`, `foto_perfil_fotografo`) VALUES
(34, 'Brigite da cunha luz', '1992-04-30', 'luz', '50630833806', 'Adoro animais e fotografia, estou nesta area a pouco tempo mais vejo o quanto Ã© agradÃ¡vel estar trabalhando com os pets e assim alegrando com seus donos. ', 'foto/fotografo/7306.jpeg'),
(35, 'Elizabeth Olsen ', '1990-12-05', 'olsen', '50330834808', 'Bom dia sou Elizabeth Olsen sou fotografa e estou na area a dois anos. Adoro animais estou comecando agora nesta area', 'foto/fotografo/12987.jpg'),
(38, 'Liliane da silva Cruz', '1985-02-04', 'dacruz13', '50634834805', 'oi', 'foto/fotografo/20542.jpeg'),
(40, 'Jessica Alves Alba', '1987-11-07', 'alba', '50130832806', 'Sou fotografa a 5 anos e a 2 anos estou nesta area de fotografia de pets. Estou amando pois trabalho com duas coisas que adoro: fotografia e pets.', 'foto/fotografo/26648.jpg'),
(42, 'Kamily Ferreira Gutyers', '1995-02-06', 'Kamily', '50340844803', 'Sou fotografa a 5 anos e desenvolvo o meu trabalho com competencia e dedicacao com o objetivo de levar o meu melhor aos meus clientes.', 'foto/fotografo/6096.jpeg'),
(43, 'Cristiano Cunha Benedito', '1988-06-07', 'benedito564@', '50320145696', 'Adoro fotografia e animais', 'foto/fotografo/21396.jpeg'),
(44, 'Bruna Augusto dos santos Ribeiro', '1990-07-05', 'survival346', '30435454303', 'Sou fotografa a 5 anos e me dedico a tirar as melhores fotos de pets, faco album, calendario, e simplesmente passou o que o meu cliente nao espera, pois faco mais que o melhor. ', 'foto/fotografo/16084.jpeg'),
(45, 'DÃ©bora do Valle Frozo', '1992-05-09', 'Debora13', '50630834808', 'Amo animais e o meu trabalho desenvolvo com paixÃ£o sendo um verdadeiro prazer trabalhar como fotografa de animais. Desenvolvo o melhor, e o meu maior objetivo Ã© levar o prazer e a satisfaÃ§Ã£o ao cliente de um bom trabalho feito!', 'foto/fotografo/11670.jpeg'),
(46, 'Roberto MagalhÃ£es Cardozo', '1989-08-13', 'Maga483', '30460854809', 'Meu objetivo como fotografo Ã© levar as recordaÃ§Ãµes dos momentos mais memoraveis para os meus cliente, fazendo com que eles atravÃ©s de uma foto, se recordem de experimente a sensaÃ§Ã£o de voltar no tempo. ', 'foto/fotografo/7802.jpeg'),
(47, 'Pedro Rosa de Oliveira', '1989-04-08', 'Pa8137@!', '30434833804', 'Sou um profissional competente e habilidoso, adoro animais, cachorro, gato, tirar fotos de pets Ã© uma verdadeira diversÃ£o, e me dedico sempre para dar o melhor resultado do meu trabalho para os meus clientes.', 'foto/fotografo/27926.jpeg'),
(48, 'Daniele dos Santos Brasil', '1988-10-06', 'dani.Santos@!', '40180884801', 'Sou fotÃ³grafa a 4 anos, e decidi trabalhar na Ã¡rea de pets porque eu amo pets, eles trazem uma diversÃ£o na sessÃ£o de fotos e adoro eles.', 'foto/fotografo/9457.jpeg'),
(49, 'Luiza Supttiz', '1993-02-21', 'sup123', '50630634606', 'Sou fotografa a 3 anos adoro essa area e principalmente trabalhar com pets, meu objetivo Ã© proporcionar boas lembranÃ§as em relaÃ§Ã£o ao momento vivido quando a foto foi tirada.', 'foto/fotografo/8219.jpeg'),
(50, 'Kaique Floriano Peixoto', '1988-03-13', 'Kaique', '50640844808', 'Eu sou o Kaique, sou competente, responsavel com os meus os trabalhas dados a mim, e desejo que atravÃ©s do meu trabalha momentos importantes se torne grandes recordaÃ§Ãµes.', 'foto/fotografo/31215.jpeg'),
(51, 'Marcus Santana de Sales', '1988-07-08', 'MARk201', '30432231204', 'Eu sou fotografo a 5 anos, minha missÃ£o Ã© levar boas lembranÃ§as de momentos raros  e importantes.', 'foto/fotografo/18148.png'),
(52, 'Vera Freitas Rodrigues', '1990-06-05', 'VeraFreits', '50630834809', 'Sou fotÃ³grafa e adoro pets, dou o meu melhor e o meu objetivo Ã© propor o comporto e satisfaÃ§Ã£o ao cliente.', 'foto/fotografo/5736.jpeg'),
(53, 'FÃ¡bio Ferreira Domingues', '1989-06-07', 'Fa45', '30034832806', 'Trabalho com profissionalismo, qualidade, simplicidade e inovaÃ§Ã£o, proponho a todos os meus clientes, diversÃ£o nas sessÃµes no meu estÃºdio.', 'foto/fotografo/3756.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade_fotografo`
--

CREATE TABLE IF NOT EXISTS `cidade_fotografo` (
  `idcidade_fotografo` int(11) NOT NULL,
  `cidade_fotografo` varchar(45) NOT NULL,
  `iduf_fotografo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cidade_fotografo`
--

INSERT INTO `cidade_fotografo` (`idcidade_fotografo`, `cidade_fotografo`, `iduf_fotografo`) VALUES
(30, 'Sao sebastiao', 30),
(31, 'Praia Grande', 31),
(32, 'Santos', 32),
(33, 'Praia Grande', 33),
(35, 'Mongagua', 35),
(36, 'Praia Grande', 36),
(37, 'Santos', 37),
(38, 'SÃ£o Vicente', 38),
(39, 'SÃ£o Vicente', 39),
(40, 'GuarujÃ¡', 40),
(41, 'Santos', 41),
(42, 'Praia Grande', 42),
(43, 'Praia Grande', 43),
(44, 'SÃ£o Vicente', 44),
(45, 'Mongagua', 45),
(46, 'Mongagua', 46),
(47, 'Praia Grande', 47),
(48, '', 47),
(49, '', 48),
(50, '', 49),
(51, '', 50),
(52, '', 51),
(53, '', 52),
(54, '', 53),
(55, '', 54),
(56, '', 55),
(57, '', 56),
(58, '', 57),
(59, '', 58),
(60, '', 59),
(61, '', 60),
(62, '', 61),
(63, '', 62),
(64, '', 63),
(65, '', 64),
(66, '', 65),
(67, '', 66),
(68, '', 67),
(69, '', 68),
(70, '', 69),
(71, '', 70),
(72, '', 71),
(73, '', 72),
(74, '', 73),
(75, '', 74),
(76, '', 75),
(77, '', 76),
(78, '', 77),
(79, '', 78),
(80, '', 79),
(81, '', 80),
(82, '', 81),
(83, '', 82),
(84, '', 83),
(85, '', 84),
(86, '', 85),
(87, '', 86),
(88, '', 87),
(89, '', 88),
(90, '', 89),
(91, '', 90),
(92, '', 91),
(93, '', 92),
(94, '', 93),
(95, '', 94),
(96, '', 95),
(97, '', 96),
(98, '', 97),
(99, '', 98),
(100, '', 99),
(101, '', 100),
(102, '', 101),
(103, '', 102),
(104, '', 103),
(105, '', 104),
(106, '', 105),
(107, '', 106),
(108, '', 107),
(109, '', 108),
(110, '', 109);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato_fotografo`
--

CREATE TABLE IF NOT EXISTS `contato_fotografo` (
  `idcontato_fotografo` int(11) NOT NULL,
  `ddd_fotografo` int(2) NOT NULL,
  `idcadastro_fotografo` int(11) DEFAULT NULL,
  `email_fotografo` varchar(30) CHARACTER SET latin1 NOT NULL,
  `celular_fotografo` varchar(12) CHARACTER SET latin1 NOT NULL,
  `telefone_fotografo` varchar(15) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `contato_fotografo`
--

INSERT INTO `contato_fotografo` (`idcontato_fotografo`, `ddd_fotografo`, `idcadastro_fotografo`, `email_fotografo`, `celular_fotografo`, `telefone_fotografo`) VALUES
(14, 12, 34, 'Brigite.Cunha@gmail.com', '991273728', '35215628'),
(15, 13, 35, 'Olsen@gmail.com', '988381274', '34621234'),
(16, 13, 38, 'lily@gmail.com', '997172353', '32123569'),
(17, 13, 40, 'Alves@hotmail', '991256473', '35647892'),
(19, 13, 42, 'Kamily.Guty@gmail.com', '991256579', '32145867'),
(20, 13, 43, 'Benedito.Cristiano@hotmail.com', '997171445', ''),
(21, 13, 44, 'Bruna_Augusto@gmail.com', '997845162', '34621789'),
(22, 13, 45, 'Debora.Valle@hotmail.com', '992136547', '32145687'),
(23, 13, 46, 'Roberto.Magalhaes@gmail.com', '982641323', '34121221'),
(24, 13, 47, 'Pedro.Rosa@hotmail.com', '991132343', ''),
(25, 13, 48, 'Daniele.BrasilOficial@gmail.co', '998381238', ''),
(26, 13, 49, 'Luiza.Supttiz@gmail.com', '988381247', '32101020'),
(27, 13, 50, 'Kaique@hotmail.com', '991213121', '1335213426'),
(28, 13, 51, 'Marcus.Santana@hotmail.com', '988381171', '32021456'),
(29, 13, 52, 'Vera.Freita@hotmail.com', '995356545', '32120564'),
(30, 13, 53, 'fabio.Ferreira@gmail.com', '995451520', '32140689'),
(31, 0, 55, '', '', ''),
(32, 0, 55, '', '', ''),
(33, 0, 55, '', '', ''),
(34, 0, 55, '', '', ''),
(35, 0, 55, '', '', ''),
(36, 0, 55, '', '', ''),
(37, 0, 55, '', '', ''),
(38, 0, 55, '', '', ''),
(39, 0, 55, '', '', ''),
(40, 0, 55, '', '', ''),
(41, 0, 55, '', '', ''),
(42, 0, 55, '', '', ''),
(43, 0, 55, '', '', ''),
(44, 0, 55, '', '', ''),
(45, 0, 55, '', '', ''),
(46, 0, 55, '', '', ''),
(47, 0, 55, '', '', ''),
(48, 0, 55, '', '', ''),
(49, 0, 55, '', '', ''),
(50, 0, 55, '', '', ''),
(51, 0, 55, '', '', ''),
(52, 0, 55, '', '', ''),
(53, 0, 55, '', '', ''),
(54, 0, 55, '', '', ''),
(55, 0, 55, '', '', ''),
(56, 0, 55, '', '', ''),
(57, 0, 55, '', '', ''),
(58, 0, 55, '', '', ''),
(59, 0, 55, '', '', ''),
(60, 0, 55, '', '', ''),
(61, 0, 55, '', '', ''),
(62, 0, 55, '', '', ''),
(63, 0, 55, '', '', ''),
(64, 0, 55, '', '', ''),
(65, 0, 55, '', '', ''),
(66, 0, 55, '', '', ''),
(67, 0, 55, '', '', ''),
(68, 0, 55, '', '', ''),
(69, 0, 55, '', '', ''),
(70, 0, 55, '', '', ''),
(71, 0, 55, '', '', ''),
(72, 0, 55, '', '', ''),
(73, 0, 55, '', '', ''),
(74, 0, 55, '', '', ''),
(75, 0, 55, '', '', ''),
(76, 0, 55, '', '', ''),
(77, 0, 55, '', '', ''),
(78, 0, 55, '', '', ''),
(79, 0, 55, '', '', ''),
(80, 0, 55, '', '', ''),
(81, 0, 55, '', '', ''),
(82, 0, 55, '', '', ''),
(83, 0, 55, '', '', ''),
(84, 0, 55, '', '', ''),
(85, 0, 55, '', '', ''),
(86, 0, 55, '', '', ''),
(87, 0, 55, '', '', ''),
(88, 0, 55, '', '', ''),
(89, 0, 55, '', '', ''),
(90, 0, 55, '', '', ''),
(91, 0, 55, '', '', ''),
(92, 0, 55, '', '', ''),
(93, 0, 55, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `diploma_certificado`
--

CREATE TABLE IF NOT EXISTS `diploma_certificado` (
  `iddiploma_certificado` int(11) NOT NULL,
  `idformacao` int(11) DEFAULT NULL,
  `diploma_certificado` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `diploma_certificado`
--

INSERT INTO `diploma_certificado` (`iddiploma_certificado`, `idformacao`, `diploma_certificado`) VALUES
(21, 21, 'diploma/21322.docx'),
(22, 22, 'diploma/27573.pdf'),
(23, 25, 'diploma/9818.pdf'),
(24, 26, 'diploma/5071.pdf'),
(26, 28, 'diploma/31719.docx'),
(27, 29, 'diploma/19451.pdf'),
(28, 30, 'diploma/26683.pdf'),
(29, 31, 'diploma/10917.pdf'),
(30, 32, 'diploma/24153.pdf'),
(31, 33, 'diploma/16421.pdf'),
(32, 34, 'diploma/5596.pdf'),
(33, 35, 'diploma/9934.pdf'),
(34, 36, 'diploma/21042.pdf'),
(35, 37, 'diploma/30091.pdf'),
(36, 38, 'diploma/21599.docx'),
(37, 39, 'diploma/15091.docx'),
(38, 40, 'diploma/30301.pdf'),
(39, 41, 'diploma/196079917'),
(40, 42, 'diploma/649691323'),
(41, 43, 'diploma/1125007920'),
(42, 44, 'diploma/225147405'),
(43, 45, 'diploma/1077926874'),
(44, 46, 'diploma/1874954023'),
(45, 47, 'diploma/1029285272'),
(46, 48, 'diploma/1851945546'),
(47, 49, 'diploma/1935588012'),
(48, 50, 'diploma/1194562268'),
(49, 51, 'diploma/1274062061'),
(50, 52, 'diploma/432458357'),
(51, 53, 'diploma/847679602'),
(52, 54, 'diploma/1577733781'),
(53, 55, 'diploma/53738866'),
(54, 56, 'diploma/752539896'),
(55, 57, 'diploma/1678447174'),
(56, 58, 'diploma/1869503042'),
(57, 59, 'diploma/661088621'),
(58, 60, 'diploma/800527716'),
(59, 61, 'diploma/1641558234'),
(60, 62, 'diploma/2086857018'),
(61, 63, 'diploma/1693856946'),
(62, 64, 'diploma/756513637'),
(63, 65, 'diploma/593028759'),
(64, 66, 'diploma/1451975083'),
(65, 67, 'diploma/587938858'),
(66, 68, 'diploma/1710997548'),
(67, 69, 'diploma/43286249'),
(68, 70, 'diploma/758799218'),
(69, 71, 'diploma/1457312641'),
(70, 72, 'diploma/1906445114'),
(71, 73, 'diploma/756273847'),
(72, 74, 'diploma/348351154'),
(73, 75, 'diploma/216094232'),
(74, 76, 'diploma/1789055118'),
(75, 77, 'diploma/550623660'),
(76, 78, 'diploma/1012249442'),
(77, 79, 'diploma/153883685'),
(78, 80, 'diploma/1770882297'),
(79, 81, 'diploma/1408506242'),
(80, 82, 'diploma/894821907'),
(81, 83, 'diploma/1858524060'),
(82, 84, 'diploma/1871066742'),
(83, 85, 'diploma/1406581231'),
(84, 86, 'diploma/163598242'),
(85, 87, 'diploma/255638612'),
(86, 88, 'diploma/2076753982'),
(87, 89, 'diploma/385164168'),
(88, 90, 'diploma/117332620'),
(89, 91, 'diploma/1105345703'),
(90, 92, 'diploma/1900390626'),
(91, 93, 'diploma/584313610'),
(92, 94, 'diploma/1302210086'),
(93, 95, 'diploma/2072286738'),
(94, 96, 'diploma/1707761391'),
(95, 97, 'diploma/1205181130'),
(96, 98, 'diploma/556974330'),
(97, 99, 'diploma/1978464361'),
(98, 100, 'diploma/1673858735'),
(99, 101, 'diploma/55962587'),
(100, 102, 'diploma/882321681'),
(101, 103, 'diploma/952445734');

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco_fotografo`
--

CREATE TABLE IF NOT EXISTS `endereco_fotografo` (
  `idendereco_fotografo` int(11) NOT NULL,
  `endereco_fotografo` varchar(45) NOT NULL,
  `cep_fotografo` varchar(8) NOT NULL,
  `complemento_fotografo` varchar(45) DEFAULT NULL,
  `idcadastro_fotografo` int(11) DEFAULT NULL,
  `idbairro_fotografo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `endereco_fotografo`
--

INSERT INTO `endereco_fotografo` (`idendereco_fotografo`, `endereco_fotografo`, `cep_fotografo`, `complemento_fotografo`, `idcadastro_fotografo`, `idbairro_fotografo`) VALUES
(30, 'Rua dos pampas', '11414044', 'numero 123', 34, 30),
(31, 'rua p 110', '11717055', 'bloco h apt 31', 35, 31),
(32, 'campo Grande', '11414022', 'numero 21', 38, 32),
(33, 'Rua Gouvei silva', '11515055', 'numero 50', 40, 33),
(35, 'Rua Frei augusto de ferandes', '11313066', 'numero 213', 42, 35),
(36, 'Rua Oceanica ', '11717466', 'numero 113', 43, 36),
(37, 'Avenida Afonso Pena', '11020000', 'NÃºmero 56', 44, 37),
(38, 'Vila Anchieta', '11310185', 'NÃºmero 86', 45, 38),
(39, 'Jardim Aralinda', '11320055', 'NÃºmero 89', 46, 39),
(40, 'Rua Anselmo Garcia', '11430320', 'NÃºmero 433', 47, 40),
(41, 'rua Almirante Barroso', '11075440', 'NÃºmero 11', 48, 41),
(42, 'Rua Arminda cruz Nonato', '11717321', 'casa 1, NÃºmero 14', 49, 42),
(43, 'Rua Angela Leal Lena ', '11717089', 'nÃºmero 13', 50, 43),
(44, 'Rua Djalma Dutra', '11310260', 'NÃºmero 17', 51, 44),
(45, 'Viela 1 ', '11730000', 'nÃºmero 10', 52, 45),
(46, 'Avenida Marina 984', '11730970', 'nÃºmero 465', 53, 46),
(47, '', '', '', 55, 48),
(48, '', '', '', 55, 49),
(49, '', '', '', 55, 50),
(50, '', '', '', 55, 51),
(51, '', '', '', 55, 52),
(52, '', '', '', 55, 53),
(53, '', '', '', 55, 54),
(54, '', '', '', 55, 55),
(55, '', '', '', 55, 56),
(56, '', '', '', 55, 57),
(57, '', '', '', 55, 58),
(58, '', '', '', 55, 59),
(59, '', '', '', 55, 60),
(60, '', '', '', 55, 61),
(61, '', '', '', 55, 62),
(62, '', '', '', 55, 63),
(63, '', '', '', 55, 64),
(64, '', '', '', 55, 65),
(65, '', '', '', 55, 66),
(66, '', '', '', 55, 67),
(67, '', '', '', 55, 68),
(68, '', '', '', 55, 69),
(69, '', '', '', 55, 70),
(70, '', '', '', 55, 71),
(71, '', '', '', 55, 72),
(72, '', '', '', 55, 73),
(73, '', '', '', 55, 74),
(74, '', '', '', 55, 75),
(75, '', '', '', 55, 76),
(76, '', '', '', 55, 77),
(77, '', '', '', 55, 78),
(78, '', '', '', 55, 79),
(79, '', '', '', 55, 80),
(80, '', '', '', 55, 81),
(81, '', '', '', 55, 82),
(82, '', '', '', 55, 83),
(83, '', '', '', 55, 84),
(84, '', '', '', 55, 85),
(85, '', '', '', 55, 86),
(86, '', '', '', 55, 87),
(87, '', '', '', 55, 88),
(88, '', '', '', 55, 89),
(89, '', '', '', 55, 90),
(90, '', '', '', 55, 91),
(91, '', '', '', 55, 92),
(92, '', '', '', 55, 93),
(93, '', '', '', 55, 94),
(94, '', '', '', 55, 95),
(95, '', '', '', 55, 96),
(96, '', '', '', 55, 97),
(97, '', '', '', 55, 98),
(98, '', '', '', 55, 99),
(99, '', '', '', 55, 100),
(100, '', '', '', 55, 101),
(101, '', '', '', 55, 102),
(102, '', '', '', 55, 103),
(103, '', '', '', 55, 104),
(104, '', '', '', 55, 105),
(105, '', '', '', 55, 106),
(106, '', '', '', 55, 107),
(107, '', '', '', 55, 108),
(108, '', '', '', 55, 109),
(109, '', '', '', 55, 110);

-- --------------------------------------------------------

--
-- Estrutura para tabela `formacao`
--

CREATE TABLE IF NOT EXISTS `formacao` (
  `idformacao` int(11) NOT NULL,
  `formacao` varchar(45) CHARACTER SET latin1 NOT NULL,
  `nivel_ensino` varchar(45) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `formacao`
--

INSERT INTO `formacao` (`idformacao`, `formacao`, `nivel_ensino`) VALUES
(21, 'Vila verde', 'Ensino superior completo'),
(22, 'Santa Cruz', 'Ensino Medio'),
(25, 'Unimonte', 'Ensino superior completo'),
(26, 'monte cruz', 'ensino superior completo'),
(28, 'mix', 'ensino medio completo'),
(29, 'unimonte', 'ensino superior completo'),
(30, 'Unimonte', 'Ensino superior completo'),
(31, 'Constantino de Freire - Curso Profissionaliza', 'Ensino medio completo'),
(32, 'unip', 'Ensino superior completo'),
(33, 'Mercan - Curso Profissionalizante', 'Ensino medio completo'),
(34, 'unip', 'Ensino superior completo'),
(35, 'Mix', 'Ensino medio completo'),
(36, 'Santa CecÃ­lia', 'ensino superior'),
(37, 'Vila verde', 'Ensino superior completo'),
(38, 'unip', 'Ensino superior completo'),
(39, 'unip', 'Ensino superior completo'),
(40, 'Mix', 'Ensino medio completo'),
(41, '', ''),
(42, '', ''),
(43, '', ''),
(44, '', ''),
(45, '', ''),
(46, '', ''),
(47, '', ''),
(48, '', ''),
(49, '', ''),
(50, '', ''),
(51, '', ''),
(52, '', ''),
(53, '', ''),
(54, '', ''),
(55, '', ''),
(56, '', ''),
(57, '', ''),
(58, '', ''),
(59, '', ''),
(60, '', ''),
(61, '', ''),
(62, '', ''),
(63, '', ''),
(64, '', ''),
(65, '', ''),
(66, '', ''),
(67, '', ''),
(68, '', ''),
(69, '', ''),
(70, '', ''),
(71, '', ''),
(72, '', ''),
(73, '', ''),
(74, '', ''),
(75, '', ''),
(76, '', ''),
(77, '', ''),
(78, '', ''),
(79, '', ''),
(80, '', ''),
(81, '', ''),
(82, '', ''),
(83, '', ''),
(84, '', ''),
(85, '', ''),
(86, '', ''),
(87, '', ''),
(88, '', ''),
(89, '', ''),
(90, '', ''),
(91, '', ''),
(92, '', ''),
(93, '', ''),
(94, '', ''),
(95, '', ''),
(96, '', ''),
(97, '', ''),
(98, '', ''),
(99, '', ''),
(100, '', ''),
(101, '', ''),
(102, '', ''),
(103, '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `formacao_fotografo`
--

CREATE TABLE IF NOT EXISTS `formacao_fotografo` (
  `idformacao_fotografo` int(11) NOT NULL,
  `idformacao` int(11) DEFAULT NULL,
  `idcadastro_fotografo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `formacao_fotografo`
--

INSERT INTO `formacao_fotografo` (`idformacao_fotografo`, `idformacao`, `idcadastro_fotografo`) VALUES
(17, 21, 34),
(18, 22, 35),
(19, 25, 38),
(20, 26, 40),
(22, 28, 42),
(23, 29, 43),
(24, 30, 44),
(25, 31, 45),
(26, 32, 46),
(27, 33, 47),
(28, 34, 48),
(29, 35, 49),
(30, 36, 50),
(31, 37, 51),
(32, 38, 52),
(33, 39, 53),
(34, 41, 55),
(35, 42, 55),
(36, 43, 55),
(37, 44, 55),
(38, 45, 55),
(39, 46, 55),
(40, 47, 55),
(41, 48, 55),
(42, 49, 55),
(43, 50, 55),
(44, 51, 55),
(45, 52, 55),
(46, 53, 55),
(47, 54, 55),
(48, 55, 55),
(49, 56, 55),
(50, 57, 55),
(51, 58, 55),
(52, 59, 55),
(53, 60, 55),
(54, 61, 55),
(55, 62, 55),
(56, 63, 55),
(57, 64, 55),
(58, 65, 55),
(59, 66, 55),
(60, 67, 55),
(61, 68, 55),
(62, 69, 55),
(63, 70, 55),
(64, 71, 55),
(65, 72, 55),
(66, 73, 55),
(67, 74, 55),
(68, 75, 55),
(69, 76, 55),
(70, 77, 55),
(71, 78, 55),
(72, 79, 55),
(73, 80, 55),
(74, 81, 55),
(75, 82, 55),
(76, 83, 55),
(77, 84, 55),
(78, 85, 55),
(79, 86, 55),
(80, 87, 55),
(81, 88, 55),
(82, 89, 55),
(83, 90, 55),
(84, 91, 55),
(85, 92, 55),
(86, 93, 55),
(87, 94, 55),
(88, 95, 55),
(89, 96, 55),
(90, 97, 55),
(91, 98, 55),
(92, 99, 55),
(93, 100, 55),
(94, 101, 55),
(95, 102, 55),
(96, 103, 55);

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `idimagens` int(11) NOT NULL,
  `idcadastro_fotografo` int(11) DEFAULT NULL,
  `imagem1` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `imagem2` varchar(100) NOT NULL,
  `imagem3` varchar(100) NOT NULL,
  `imagem4` varchar(100) NOT NULL,
  `imagem5` varchar(100) NOT NULL,
  `imagem6` varchar(100) NOT NULL,
  `imagem7` varchar(100) NOT NULL,
  `imagem8` varchar(100) NOT NULL,
  `imagem9` varchar(100) NOT NULL,
  `imagem10` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `imagens`
--

INSERT INTO `imagens` (`idimagens`, `idcadastro_fotografo`, `imagem1`, `imagem2`, `imagem3`, `imagem4`, `imagem5`, `imagem6`, `imagem7`, `imagem8`, `imagem9`, `imagem10`) VALUES
(11, 34, 'imagens/24404.jpg', 'imagens/24317.jpeg', 'imagens/14322.jpeg', 'imagens/15939.jpeg', 'imagens/7360.jpeg', 'imagens/28153.jpeg', 'imagens/24894.jpeg', 'imagens/31647.jpeg', 'imagens/17644.jpg', 'imagens/28853.jpeg'),
(12, 35, 'imagens/27423.jpeg', 'imagens/15980.jpeg', 'imagens/11317.jpeg', 'imagens/10442.jpeg', 'imagens/18104.jpeg', 'imagens/23697.jpeg', 'imagens/9659.jpeg', 'imagens/12874.jpeg', 'imagens/15064.jpeg', 'imagens/3633.jpeg'),
(13, 38, 'imagens/12493.jpeg', 'imagens/14925.jpg', 'imagens/30978.jpg', 'imagens/21011.jpg', 'imagens/5732.jpeg', 'imagens/18422.jpeg', 'imagens/9038.jpeg', 'imagens/31855.jpeg', 'imagens/32124.jpeg', 'imagens/18423.jpeg'),
(14, 40, 'imagens/21105.jpg', 'imagens/14422.jpg', 'imagens/24791.jpeg', 'imagens/28100.jpg', 'imagens/9389.jpg', 'imagens/994.jpeg', 'imagens/13171.jpeg', 'imagens/8752.jpeg', 'imagens/24233.jpeg', 'imagens/31790.jpeg'),
(16, 42, 'imagens/13257.jpeg', 'imagens/31438.jpg', 'imagens/15855.jpg', 'imagens/24828.jpg', 'imagens/17285.jpeg', 'imagens/30170.jpeg', 'imagens/18955.jpeg', 'imagens/4328.jpeg', 'imagens/4865.jpeg', 'imagens/5542.jpeg'),
(17, 43, 'imagens/24125.jpeg', 'imagens/26162.jpeg', 'imagens/28547.jpeg', 'imagens/5376.jpeg', 'imagens/8505.jpeg', 'imagens/13182.jpeg', 'imagens/223.jpeg', 'imagens/300.jpeg', 'imagens/6133.jpeg', 'imagens/2442.jpeg'),
(18, 44, 'imagens/2173.jpeg', 'imagens/25458.jpeg', 'imagens/17347.jpg', 'imagens/29760.jpeg', 'imagens/12153.jpeg', 'imagens/17598.jpeg', 'imagens/22815.jpeg', 'imagens/5228.jpeg', 'imagens/18997.jpeg', 'imagens/28362.jpeg'),
(19, 45, 'imagens/19735.jpeg', 'imagens/1284.jpeg', 'imagens/2797.jpeg', 'imagens/3362.jpeg', 'imagens/9139.jpeg', 'imagens/28016.jpeg', 'imagens/26857.jpeg', 'imagens/22894.jpeg', 'imagens/18447.jpeg', 'imagens/28828.jpeg'),
(20, 46, 'imagens/22059.jpeg', 'imagens/31368.jpeg', 'imagens/19489.jpeg', 'imagens/10310.jpeg', 'imagens/10759.jpeg', 'imagens/14132.jpeg', 'imagens/2397.jpeg', 'imagens/722.jpeg', 'imagens/24483.jpeg', 'imagens/4768.jpeg'),
(21, 47, 'imagens/22167.jpeg', 'imagens/4228.jpeg', 'imagens/28781.jpeg', 'imagens/17570.jpeg', 'imagens/17715.jpeg', 'imagens/12528.jpeg', 'imagens/9833.jpeg', 'imagens/2286.jpeg', 'imagens/399.jpeg', 'imagens/27676.jpg'),
(22, 48, 'imagens/22742.jpg', 'imagens/14167.jpg', 'imagens/16964.jpeg', 'imagens/7981.jpeg', 'imagens/11362.jpeg', 'imagens/29171.jpeg', 'imagens/16048.jpeg', 'imagens/297.jpeg', 'imagens/11438.jpeg', 'imagens/14927.jpeg'),
(23, 49, 'imagens/5560.jpeg', 'imagens/32657.jpeg', 'imagens/12022.jpeg', 'imagens/8951.jpeg', 'imagens/21860.jpeg', 'imagens/973.jpeg', 'imagens/17538.jpeg', 'imagens/30611.jpeg', 'imagens/25552.jpeg', 'imagens/4041.jpeg'),
(24, 50, 'imagens/27900.jpg', 'imagens/24453.jpeg', 'imagens/25050.jpeg', 'imagens/17931.jpeg', 'imagens/23784.jpeg', 'imagens/28417.jpeg', 'imagens/16806.jpeg', 'imagens/14311.jpeg', 'imagens/24468.jpeg', 'imagens/31293.jpeg'),
(25, 51, 'imagens/22349.jpeg', 'imagens/20994.jpg', 'imagens/14099.jpg', 'imagens/27984.jpeg', 'imagens/6985.jpeg', 'imagens/3150.jpg', 'imagens/12655.jpeg', 'imagens/3708.jpeg', 'imagens/8965.jpeg', 'imagens/8026.jpeg'),
(26, 52, 'imagens/27265.jpeg', 'imagens/22310.jpeg', 'imagens/24423.jpeg', 'imagens/12564.jpeg', 'imagens/11709.jpeg', 'imagens/16306.jpeg', 'imagens/2819.jpeg', 'imagens/19072.jpeg', 'imagens/26809.jpeg', 'imagens/9470.jpeg'),
(27, 53, 'imagens/22389.jpeg', 'imagens/4874.jpeg', 'imagens/22395.jpeg', 'imagens/27032.jpeg', 'imagens/30193.jpeg', 'imagens/21974.jpeg', 'imagens/28759.jpeg', 'imagens/1860.jpeg', 'imagens/45.jpeg', 'imagens/31074.jpeg'),
(28, 55, 'imagens/718131099', 'imagens/1881757924', 'imagens/665948676', 'imagens/408763161', 'imagens/107586647', 'imagens/2051885392', 'imagens/2055437272', 'imagens/281273746', 'imagens/90448493', 'imagens/1467552289'),
(29, 55, 'imagens/755235934', 'imagens/804736988', 'imagens/1065127390', 'imagens/985375946', 'imagens/1697044721', 'imagens/1181716257', 'imagens/1399143649', 'imagens/1171186533', 'imagens/2041864338', 'imagens/1372924051'),
(30, 55, 'imagens/1624093934', 'imagens/1371324492', 'imagens/225180199', 'imagens/2072592223', 'imagens/1863137135', 'imagens/739283991', 'imagens/1183213674', 'imagens/816152239', 'imagens/419699536', 'imagens/1367388551'),
(31, 55, 'imagens/327063691', 'imagens/197057383', 'imagens/2053816448', 'imagens/542208367', 'imagens/1083475327', 'imagens/1475901177', 'imagens/1884150452', 'imagens/2020681360', 'imagens/349294970', 'imagens/123802229'),
(32, 55, 'imagens/1360317924', 'imagens/464539218', 'imagens/467637127', 'imagens/6628873', 'imagens/1963253131', 'imagens/177161080', 'imagens/797536706', 'imagens/1254537024', 'imagens/1104271261', 'imagens/1803204586'),
(33, 55, 'imagens/999601571', 'imagens/450331104', 'imagens/1215361919', 'imagens/547456014', 'imagens/1338982847', 'imagens/755558503', 'imagens/1114045258', 'imagens/799390111', 'imagens/645755286', 'imagens/844799261'),
(34, 55, 'imagens/29664742', 'imagens/542471073', 'imagens/639201785', 'imagens/955124949', 'imagens/427955656', 'imagens/69101942', 'imagens/490099681', 'imagens/1802616409', 'imagens/1021777034', 'imagens/1676777986'),
(35, 55, 'imagens/1415943484', 'imagens/1624172930', 'imagens/74037650', 'imagens/1856843964', 'imagens/553379678', 'imagens/1272754552', 'imagens/1589521299', 'imagens/1865307302', 'imagens/1241189803', 'imagens/1309764837'),
(36, 55, 'imagens/1198645789', 'imagens/130143840', 'imagens/79568991', 'imagens/1896616442', 'imagens/709168439', 'imagens/648978338', 'imagens/1081210331', 'imagens/405064104', 'imagens/1665762945', 'imagens/222081148'),
(37, 55, 'imagens/136200342', 'imagens/1980360393', 'imagens/988060833', 'imagens/876907329', 'imagens/265603784', 'imagens/649125532', 'imagens/913087643', 'imagens/1832621855', 'imagens/158492172', 'imagens/1966812370'),
(38, 55, 'imagens/141609514', 'imagens/397219813', 'imagens/1019181647', 'imagens/190769870', 'imagens/249955885', 'imagens/787757354', 'imagens/1264639385', 'imagens/1399652836', 'imagens/223078435', 'imagens/140868209'),
(39, 55, 'imagens/2038805160', 'imagens/1901746390', 'imagens/204038661', 'imagens/1009528055', 'imagens/1650511170', 'imagens/1748699899', 'imagens/1552988781', 'imagens/1424382429', 'imagens/298438482', 'imagens/1849898863'),
(40, 55, 'imagens/1496990584', 'imagens/1279628065', 'imagens/1114089974', 'imagens/69429035', 'imagens/419063788', 'imagens/1894950247', 'imagens/1716848892', 'imagens/773666615', 'imagens/871982055', 'imagens/1490078464'),
(41, 55, 'imagens/1802711419', 'imagens/736802928', 'imagens/1705384586', 'imagens/376151416', 'imagens/1539243428', 'imagens/893137535', 'imagens/251308252', 'imagens/694920323', 'imagens/1432888438', 'imagens/438025685'),
(42, 55, 'imagens/765377742', 'imagens/468960675', 'imagens/914516562', 'imagens/2044975407', 'imagens/1519605794', 'imagens/1547969911', 'imagens/354990572', 'imagens/894479497', 'imagens/685060318', 'imagens/75941178'),
(43, 55, 'imagens/1355585813', 'imagens/442257545', 'imagens/1345083190', 'imagens/1381706168', 'imagens/1298272082', 'imagens/600545867', 'imagens/1136106582', 'imagens/1522120591', 'imagens/222918576', 'imagens/56058598'),
(44, 55, 'imagens/674317574', 'imagens/567007281', 'imagens/641125857', 'imagens/1157808940', 'imagens/1843301601', 'imagens/1548710748', 'imagens/1219249998', 'imagens/1851477186', 'imagens/914251334', 'imagens/1063005873'),
(45, 55, 'imagens/1452414538', 'imagens/1529956274', 'imagens/1544204673', 'imagens/1337141594', 'imagens/2139192737', 'imagens/552788278', 'imagens/1646130396', 'imagens/111313038', 'imagens/1791604935', 'imagens/1265056853'),
(46, 55, 'imagens/98462379', 'imagens/1362916399', 'imagens/1678939294', 'imagens/863049756', 'imagens/711162753', 'imagens/444781952', 'imagens/2141132011', 'imagens/1252334604', 'imagens/1519111624', 'imagens/407524829'),
(47, 55, 'imagens/938648375', 'imagens/804803145', 'imagens/191493345', 'imagens/140083245', 'imagens/1888266026', 'imagens/1891026925', 'imagens/661458087', 'imagens/822889144', 'imagens/1092349185', 'imagens/785043209'),
(48, 55, 'imagens/1618751724', 'imagens/1727307803', 'imagens/197546908', 'imagens/264169047', 'imagens/1398265306', 'imagens/1006954872', 'imagens/1702058379', 'imagens/108658386', 'imagens/133409747', 'imagens/1857486519'),
(49, 55, 'imagens/275573022', 'imagens/85214488', 'imagens/913784713', 'imagens/5310430', 'imagens/1121663924', 'imagens/1659903227', 'imagens/650637679', 'imagens/392097030', 'imagens/536308982', 'imagens/1294659061'),
(50, 55, 'imagens/623357557', 'imagens/808569770', 'imagens/627776009', 'imagens/2046093706', 'imagens/1240692975', 'imagens/994124090', 'imagens/1049116982', 'imagens/338169080', 'imagens/813650545', 'imagens/957758142'),
(51, 55, 'imagens/1638447999', 'imagens/208376978', 'imagens/290239601', 'imagens/1624928984', 'imagens/1490333202', 'imagens/663633566', 'imagens/181254648', 'imagens/590075629', 'imagens/1145937384', 'imagens/491014177'),
(52, 55, 'imagens/1915649619', 'imagens/1672321294', 'imagens/207230665', 'imagens/1721501466', 'imagens/5482767', 'imagens/790117408', 'imagens/479043174', 'imagens/379813157', 'imagens/649212430', 'imagens/456564351'),
(53, 55, 'imagens/1644838339', 'imagens/1106333159', 'imagens/848925138', 'imagens/452122226', 'imagens/764843611', 'imagens/1360918238', 'imagens/1344984411', 'imagens/1917469032', 'imagens/643739172', 'imagens/1515879135'),
(54, 55, 'imagens/685058864', 'imagens/1585732222', 'imagens/1191641745', 'imagens/1166420694', 'imagens/2117067142', 'imagens/940612416', 'imagens/1312959982', 'imagens/1921420122', 'imagens/1844497794', 'imagens/1454419956'),
(55, 55, 'imagens/1931983733', 'imagens/1133586351', 'imagens/1247593446', 'imagens/62833509', 'imagens/260187168', 'imagens/1313618195', 'imagens/1415038663', 'imagens/1464717746', 'imagens/196338131', 'imagens/1123356406'),
(56, 55, 'imagens/1879937460', 'imagens/1769398882', 'imagens/945762180', 'imagens/1702556527', 'imagens/1308425791', 'imagens/411596507', 'imagens/1940473326', 'imagens/363572895', 'imagens/1733608007', 'imagens/958280070'),
(57, 55, 'imagens/513599988', 'imagens/288732296', 'imagens/1725782250', 'imagens/2081221174', 'imagens/12045201', 'imagens/1821140980', 'imagens/1413305935', 'imagens/715497277', 'imagens/738995351', 'imagens/812514790'),
(58, 55, 'imagens/1462088461', 'imagens/1898092832', 'imagens/541971706', 'imagens/988102015', 'imagens/479256523', 'imagens/297471298', 'imagens/1485073993', 'imagens/1299461505', 'imagens/1713096830', 'imagens/1497248374'),
(59, 55, 'imagens/1562375331', 'imagens/157060981', 'imagens/646053911', 'imagens/505598376', 'imagens/1439998096', 'imagens/1773956866', 'imagens/887074019', 'imagens/1698109303', 'imagens/930547193', 'imagens/1619430605'),
(60, 55, 'imagens/1755405533', 'imagens/1547347438', 'imagens/755439806', 'imagens/1189136656', 'imagens/45967951', 'imagens/1965937975', 'imagens/70667646', 'imagens/1330186567', 'imagens/390284674', 'imagens/696213262'),
(61, 55, 'imagens/1622301817', 'imagens/26410910', 'imagens/11782734', 'imagens/1975112801', 'imagens/525702183', 'imagens/311995059', 'imagens/1579035355', 'imagens/291236931', 'imagens/1156221299', 'imagens/1140431406'),
(62, 55, 'imagens/1940081866', 'imagens/1394739294', 'imagens/1256260882', 'imagens/545103384', 'imagens/2017509791', 'imagens/1453172090', 'imagens/178560246', 'imagens/77623167', 'imagens/767713725', 'imagens/788234733'),
(63, 55, 'imagens/1103126922', 'imagens/405165420', 'imagens/1227080548', 'imagens/1470946363', 'imagens/367913704', 'imagens/932676772', 'imagens/1150710093', 'imagens/382756425', 'imagens/1432877972', 'imagens/2126124985'),
(64, 55, 'imagens/266303046', 'imagens/595609285', 'imagens/252808411', 'imagens/1410854669', 'imagens/886611308', 'imagens/1699562345', 'imagens/1575601816', 'imagens/887304775', 'imagens/276976332', 'imagens/2090412950'),
(65, 55, 'imagens/1966530449', 'imagens/1316542606', 'imagens/796208532', 'imagens/634228682', 'imagens/1305747088', 'imagens/705828630', 'imagens/579424219', 'imagens/150165454', 'imagens/1336457214', 'imagens/652237259'),
(66, 55, 'imagens/338682858', 'imagens/1697336175', 'imagens/2049330484', 'imagens/74050440', 'imagens/346651939', 'imagens/1155483085', 'imagens/817393115', 'imagens/662514326', 'imagens/1328533660', 'imagens/1497395367'),
(67, 55, 'imagens/33008484', 'imagens/1019724473', 'imagens/373786239', 'imagens/1116330070', 'imagens/1185697490', 'imagens/2072548737', 'imagens/1818579236', 'imagens/1917067107', 'imagens/1136548719', 'imagens/2092134930'),
(68, 55, 'imagens/1635195988', 'imagens/4853422', 'imagens/685655473', 'imagens/1379321324', 'imagens/1759288572', 'imagens/16790129', 'imagens/2143976867', 'imagens/1389900863', 'imagens/594228807', 'imagens/128304244'),
(69, 55, 'imagens/920909551', 'imagens/1417688384', 'imagens/88592238', 'imagens/323260040', 'imagens/1190306605', 'imagens/58835555', 'imagens/1531294497', 'imagens/159887552', 'imagens/1250106359', 'imagens/267049579'),
(70, 55, 'imagens/1441016581', 'imagens/825260024', 'imagens/277470325', 'imagens/1308290164', 'imagens/1731512603', 'imagens/471155809', 'imagens/476999537', 'imagens/901891150', 'imagens/1352111354', 'imagens/283522641'),
(71, 55, 'imagens/66749611', 'imagens/148045752', 'imagens/1445420973', 'imagens/688963870', 'imagens/1632889381', 'imagens/1044280320', 'imagens/1787091761', 'imagens/1967175998', 'imagens/564830562', 'imagens/1907138977'),
(72, 55, 'imagens/240152551', 'imagens/184102431', 'imagens/2005556655', 'imagens/477788986', 'imagens/1119620836', 'imagens/1285368233', 'imagens/1359394760', 'imagens/1432126666', 'imagens/876192078', 'imagens/1093774403'),
(73, 55, 'imagens/1021915228', 'imagens/184458960', 'imagens/274314547', 'imagens/1086082835', 'imagens/198576516', 'imagens/1395814523', 'imagens/1160137050', 'imagens/798256674', 'imagens/1533265336', 'imagens/834257107'),
(74, 55, 'imagens/848581970', 'imagens/335755793', 'imagens/1022221769', 'imagens/1100409394', 'imagens/2129687197', 'imagens/491587768', 'imagens/525060718', 'imagens/462546252', 'imagens/1705200191', 'imagens/1573014448'),
(75, 55, 'imagens/664765065', 'imagens/812345712', 'imagens/374090383', 'imagens/1182907612', 'imagens/400036639', 'imagens/1611378079', 'imagens/1200420991', 'imagens/1756077956', 'imagens/698071477', 'imagens/355451261'),
(76, 55, 'imagens/1147829193', 'imagens/1549819886', 'imagens/1038410082', 'imagens/96498859', 'imagens/1431779172', 'imagens/223647709', 'imagens/1282912737', 'imagens/994605141', 'imagens/294127949', 'imagens/1618189963'),
(77, 55, 'imagens/191035468', 'imagens/1511092759', 'imagens/948693633', 'imagens/748121007', 'imagens/1468385802', 'imagens/280802710', 'imagens/1406895237', 'imagens/198034653', 'imagens/34034846', 'imagens/1110163843'),
(78, 55, 'imagens/406178841', 'imagens/1302325984', 'imagens/2006870220', 'imagens/739330390', 'imagens/280683855', 'imagens/1506607032', 'imagens/1232268805', 'imagens/77600497', 'imagens/188382180', 'imagens/1039905407'),
(79, 55, 'imagens/1693849307', 'imagens/1323006620', 'imagens/259077883', 'imagens/1366581826', 'imagens/817941023', 'imagens/1477805351', 'imagens/1767208748', 'imagens/746436064', 'imagens/768596277', 'imagens/449929517'),
(80, 55, 'imagens/2105236307', 'imagens/165319753', 'imagens/1074481623', 'imagens/999389933', 'imagens/1533009899', 'imagens/917020571', 'imagens/1190421605', 'imagens/652942862', 'imagens/1724602966', 'imagens/1835139950'),
(81, 55, 'imagens/1664324180', 'imagens/745428071', 'imagens/225670981', 'imagens/1967966386', 'imagens/1062716956', 'imagens/530504371', 'imagens/1787302548', 'imagens/1302269152', 'imagens/335610752', 'imagens/471094658'),
(82, 55, 'imagens/680530985', 'imagens/1767589769', 'imagens/726571631', 'imagens/1651659398', 'imagens/3155017', 'imagens/1720235792', 'imagens/1553381970', 'imagens/756420874', 'imagens/668358074', 'imagens/991809419'),
(83, 55, 'imagens/1820420597', 'imagens/776253530', 'imagens/1748576403', 'imagens/1473283261', 'imagens/743760725', 'imagens/1124078722', 'imagens/2006504610', 'imagens/722821813', 'imagens/1574657765', 'imagens/1402351206'),
(84, 55, 'imagens/2048004771', 'imagens/1708143441', 'imagens/864406734', 'imagens/327464217', 'imagens/574398226', 'imagens/970024537', 'imagens/397270849', 'imagens/1824508566', 'imagens/1680912132', 'imagens/1775711647'),
(85, 55, 'imagens/1481911969', 'imagens/1206709539', 'imagens/301686242', 'imagens/840503847', 'imagens/399955303', 'imagens/1934550047', 'imagens/1160815759', 'imagens/899787867', 'imagens/1230228687', 'imagens/787779789'),
(86, 55, 'imagens/166242008', 'imagens/221036239', 'imagens/1009881042', 'imagens/290230093', 'imagens/827645188', 'imagens/1618407624', 'imagens/14597510', 'imagens/439955230', 'imagens/1367859944', 'imagens/1690772309'),
(87, 55, 'imagens/625224937', 'imagens/1567117284', 'imagens/394205296', 'imagens/313845046', 'imagens/1158294310', 'imagens/1829172815', 'imagens/2106745940', 'imagens/426266682', 'imagens/794468461', 'imagens/848455666'),
(88, 55, 'imagens/870232341', 'imagens/1635102229', 'imagens/1497307479', 'imagens/110883914', 'imagens/2134404968', 'imagens/63900064', 'imagens/661424883', 'imagens/1382107840', 'imagens/1445199440', 'imagens/361917826'),
(89, 55, 'imagens/384105', 'imagens/344248029', 'imagens/1118239094', 'imagens/630985258', 'imagens/329904560', 'imagens/1892686408', 'imagens/2027338785', 'imagens/1602771584', 'imagens/1505972825', 'imagens/104397562'),
(90, 55, 'imagens/1620912358', 'imagens/475850222', 'imagens/521698428', 'imagens/1925541697', 'imagens/1352695121', 'imagens/1538319466', 'imagens/562595573', 'imagens/1933734371', 'imagens/1840428968', 'imagens/1979866104');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pais_fotografo`
--

CREATE TABLE IF NOT EXISTS `pais_fotografo` (
  `idpais_fotografo` int(11) NOT NULL,
  `pais_fotografo` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `pais_fotografo`
--

INSERT INTO `pais_fotografo` (`idpais_fotografo`, `pais_fotografo`) VALUES
(72, 'Brasil'),
(73, 'Brasil'),
(76, 'Brasil'),
(78, 'Brasil'),
(80, 'Brasil'),
(81, 'Brasil'),
(82, 'Brasil'),
(83, 'Brasil'),
(84, 'Brasil'),
(85, 'Brasil'),
(86, 'Brasil'),
(87, 'Brasil'),
(88, 'Brasil'),
(89, 'Brasil'),
(90, 'Brasil'),
(91, 'Brasil'),
(93, ''),
(94, ''),
(95, ''),
(96, ''),
(97, ''),
(98, ''),
(99, ''),
(100, ''),
(101, ''),
(102, ''),
(103, ''),
(104, ''),
(105, ''),
(106, ''),
(107, ''),
(108, ''),
(109, ''),
(110, ''),
(111, ''),
(112, ''),
(113, ''),
(114, ''),
(115, ''),
(116, ''),
(117, ''),
(118, ''),
(119, ''),
(120, ''),
(121, ''),
(122, ''),
(123, ''),
(124, ''),
(125, ''),
(126, ''),
(127, ''),
(128, ''),
(129, ''),
(130, ''),
(131, ''),
(132, ''),
(133, ''),
(134, ''),
(135, ''),
(136, ''),
(137, ''),
(138, ''),
(139, ''),
(140, ''),
(141, ''),
(142, ''),
(143, ''),
(144, ''),
(145, ''),
(146, ''),
(147, ''),
(148, ''),
(149, ''),
(150, ''),
(151, ''),
(152, ''),
(153, ''),
(154, ''),
(155, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `uf_fotografo`
--

CREATE TABLE IF NOT EXISTS `uf_fotografo` (
  `iduf_fotografo` int(11) NOT NULL,
  `uf_fotografo` varchar(3) NOT NULL,
  `idpais_fotografo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `uf_fotografo`
--

INSERT INTO `uf_fotografo` (`iduf_fotografo`, `uf_fotografo`, `idpais_fotografo`) VALUES
(30, 'SP', 72),
(31, 'SP', 73),
(32, 'SP', 76),
(33, 'SP', 78),
(35, 'SP', 80),
(36, 'SP', 81),
(37, 'SP', 82),
(38, 'SP', 83),
(39, 'SP', 84),
(40, 'SP', 85),
(41, 'SP', 86),
(42, 'SP', 87),
(43, 'SP', 88),
(44, 'SP', 89),
(45, 'SP', 90),
(46, 'SP', 91),
(47, '', 93),
(48, '', 94),
(49, '', 95),
(50, '', 96),
(51, '', 97),
(52, '', 98),
(53, '', 99),
(54, '', 100),
(55, '', 101),
(56, '', 102),
(57, '', 103),
(58, '', 104),
(59, '', 105),
(60, '', 106),
(61, '', 107),
(62, '', 108),
(63, '', 109),
(64, '', 110),
(65, '', 111),
(66, '', 112),
(67, '', 113),
(68, '', 114),
(69, '', 115),
(70, '', 116),
(71, '', 117),
(72, '', 118),
(73, '', 119),
(74, '', 120),
(75, '', 121),
(76, '', 122),
(77, '', 123),
(78, '', 124),
(79, '', 125),
(80, '', 126),
(81, '', 127),
(82, '', 128),
(83, '', 129),
(84, '', 130),
(85, '', 131),
(86, '', 132),
(87, '', 133),
(88, '', 134),
(89, '', 135),
(90, '', 136),
(91, '', 137),
(92, '', 138),
(93, '', 139),
(94, '', 140),
(95, '', 141),
(96, '', 142),
(97, '', 143),
(98, '', 144),
(99, '', 145),
(100, '', 146),
(101, '', 147),
(102, '', 148),
(103, '', 149),
(104, '', 150),
(105, '', 151),
(106, '', 152),
(107, '', 153),
(108, '', 154),
(109, '', 155);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Índices de tabela `bairro_fotografo`
--
ALTER TABLE `bairro_fotografo`
  ADD PRIMARY KEY (`idbairro_fotografo`), ADD KEY `idcidade_fotografo` (`idcidade_fotografo`);

--
-- Índices de tabela `cadastro_fotografo`
--
ALTER TABLE `cadastro_fotografo`
  ADD PRIMARY KEY (`idcadastro_fotografo`), ADD UNIQUE KEY `senha_fotografo` (`senha_fotografo`), ADD UNIQUE KEY `cpf_fotografo` (`cpf_fotografo`);

--
-- Índices de tabela `cidade_fotografo`
--
ALTER TABLE `cidade_fotografo`
  ADD PRIMARY KEY (`idcidade_fotografo`), ADD KEY `iduf_fotografo` (`iduf_fotografo`);

--
-- Índices de tabela `contato_fotografo`
--
ALTER TABLE `contato_fotografo`
  ADD PRIMARY KEY (`idcontato_fotografo`), ADD KEY `idcadastro_fotografo` (`idcadastro_fotografo`);

--
-- Índices de tabela `diploma_certificado`
--
ALTER TABLE `diploma_certificado`
  ADD PRIMARY KEY (`iddiploma_certificado`), ADD KEY `idformacao` (`idformacao`);

--
-- Índices de tabela `endereco_fotografo`
--
ALTER TABLE `endereco_fotografo`
  ADD PRIMARY KEY (`idendereco_fotografo`), ADD KEY `idcadastro_fotografo` (`idcadastro_fotografo`), ADD KEY `idbairro_fotografo` (`idbairro_fotografo`);

--
-- Índices de tabela `formacao`
--
ALTER TABLE `formacao`
  ADD PRIMARY KEY (`idformacao`);

--
-- Índices de tabela `formacao_fotografo`
--
ALTER TABLE `formacao_fotografo`
  ADD PRIMARY KEY (`idformacao_fotografo`), ADD KEY `idformacao` (`idformacao`), ADD KEY `idcadastro_fotografo` (`idcadastro_fotografo`);

--
-- Índices de tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`idimagens`), ADD KEY `idcadastro_fotografo` (`idcadastro_fotografo`);

--
-- Índices de tabela `pais_fotografo`
--
ALTER TABLE `pais_fotografo`
  ADD PRIMARY KEY (`idpais_fotografo`);

--
-- Índices de tabela `uf_fotografo`
--
ALTER TABLE `uf_fotografo`
  ADD PRIMARY KEY (`iduf_fotografo`), ADD KEY `idpais_fotografo` (`idpais_fotografo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `bairro_fotografo`
--
ALTER TABLE `bairro_fotografo`
  MODIFY `idbairro_fotografo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT de tabela `cadastro_fotografo`
--
ALTER TABLE `cadastro_fotografo`
  MODIFY `idcadastro_fotografo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT de tabela `cidade_fotografo`
--
ALTER TABLE `cidade_fotografo`
  MODIFY `idcidade_fotografo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT de tabela `contato_fotografo`
--
ALTER TABLE `contato_fotografo`
  MODIFY `idcontato_fotografo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT de tabela `diploma_certificado`
--
ALTER TABLE `diploma_certificado`
  MODIFY `iddiploma_certificado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT de tabela `endereco_fotografo`
--
ALTER TABLE `endereco_fotografo`
  MODIFY `idendereco_fotografo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT de tabela `formacao`
--
ALTER TABLE `formacao`
  MODIFY `idformacao` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT de tabela `formacao_fotografo`
--
ALTER TABLE `formacao_fotografo`
  MODIFY `idformacao_fotografo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `idimagens` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT de tabela `pais_fotografo`
--
ALTER TABLE `pais_fotografo`
  MODIFY `idpais_fotografo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT de tabela `uf_fotografo`
--
ALTER TABLE `uf_fotografo`
  MODIFY `iduf_fotografo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
