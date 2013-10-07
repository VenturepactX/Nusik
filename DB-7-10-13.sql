-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2013 at 10:28 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nusik_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `date_time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_albums_login1` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `date_time`, `status`, `login_id`) VALUES
(1, 'MyPhoto', '2013-10-05 11:46:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `art_details`
--

CREATE TABLE IF NOT EXISTS `art_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bio` text NOT NULL,
  `motivation` text,
  `achievments` text,
  `plans` text,
  `date_time` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `user_details_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_art_details_user_details1` (`user_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `art_details`
--

INSERT INTO `art_details` (`id`, `bio`, `motivation`, `achievments`, `plans`, `date_time`, `status`, `user_details_id`) VALUES
(1, 'Testing', 'Testing', 'Testing', 'Testing', '2013-10-05 12:04:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_city_country1` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=958 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `country_id`) VALUES
(1, 'Kabul', 1),
(2, 'Qandahar', 1),
(3, 'Herat', 1),
(4, 'Mazar-e-Sharif', 1),
(5, 'Amsterdam', 150),
(6, 'Rotterdam', 150),
(7, 'Haag', 150),
(8, 'Utrecht', 150),
(9, 'Eindhoven', 150),
(10, 'Tilburg', 150),
(11, 'Groningen', 150),
(12, 'Breda', 150),
(13, 'Apeldoorn', 150),
(14, 'Nijmegen', 150),
(15, 'Enschede', 150),
(16, 'Haarlem', 150),
(17, 'Almere', 150),
(18, 'Arnhem', 150),
(19, 'Zaanstad', 150),
(20, 'Â´s-Hertogenbosch', 150),
(21, 'Amersfoort', 150),
(22, 'Maastricht', 150),
(23, 'Dordrecht', 150),
(24, 'Leiden', 150),
(25, 'Haarlemmermeer', 150),
(26, 'Zoetermeer', 150),
(27, 'Emmen', 150),
(28, 'Zwolle', 150),
(29, 'Ede', 150),
(30, 'Delft', 150),
(31, 'Heerlen', 150),
(32, 'Alkmaar', 150),
(33, 'Willemstad', 151),
(34, 'Tirana', 2),
(35, 'Alger', 3),
(36, 'Oran', 3),
(37, 'Constantine', 3),
(38, 'Annaba', 3),
(39, 'Batna', 3),
(40, 'SÃ?tif', 3),
(41, 'Sidi Bel AbbÃ¨s', 3),
(42, 'Skikda', 3),
(43, 'Biskra', 3),
(44, 'Blida (el-Boulaida)', 3),
(45, 'BÃ?jaÃ¯a', 3),
(46, 'Mostaganem', 3),
(47, 'TÃ?bessa', 3),
(48, 'Tlemcen (Tilimsen)', 3),
(49, 'BÃ?char', 3),
(50, 'Tiaret', 3),
(51, 'Ech-Chleff (el-Asnam)', 3),
(52, 'GhardaÃ¯a', 3),
(53, 'Tafuna', 4),
(54, 'Fagatogo', 4),
(55, 'Andorra la Vella', 5),
(56, 'Luanda', 6),
(57, 'Huambo', 6),
(58, 'Lobito', 6),
(59, 'Benguela', 6),
(60, 'Namibe', 6),
(61, 'South Hill', 7),
(62, 'The Valley', 7),
(63, 'Saint JohnÂ´s', 9),
(64, 'Dubai', 224),
(65, 'Abu Dhabi', 224),
(66, 'Sharja', 224),
(67, 'al-Ayn', 224),
(68, 'Ajman', 224),
(69, 'Buenos Aires', 10),
(70, 'La Matanza', 10),
(71, 'CÃ?rdoba', 10),
(72, 'Rosario', 10),
(73, 'Lomas de Zamora', 10),
(74, 'Quilmes', 10),
(75, 'Almirante Brown', 10),
(76, 'La Plata', 10),
(77, 'Mar del Plata', 10),
(78, 'San Miguel de TucumÃ¡n', 10),
(79, 'LanÃºs', 10),
(80, 'Merlo', 10),
(81, 'General San MartÃ?n', 10),
(82, 'Salta', 10),
(83, 'Moreno', 10),
(84, 'Santa FÃ?', 10),
(85, 'Avellaneda', 10),
(86, 'Tres de Febrero', 10),
(87, 'MorÃ?n', 10),
(88, 'Florencio Varela', 10),
(89, 'San Isidro', 10),
(90, 'Tigre', 10),
(91, 'Malvinas Argentinas', 10),
(92, 'Vicente LÃ?pez', 10),
(93, 'Berazategui', 10),
(94, 'Corrientes', 10),
(95, 'San Miguel', 10),
(96, 'BahÃ?a Blanca', 10),
(97, 'Esteban EcheverrÃ?a', 10),
(98, 'Resistencia', 10),
(99, 'JosÃ? C. Paz', 10),
(100, 'ParanÃ¡', 10),
(101, 'Godoy Cruz', 10),
(102, 'Posadas', 10),
(103, 'GuaymallÃ?n', 10),
(104, 'Santiago del Estero', 10),
(105, 'San Salvador de Jujuy', 10),
(106, 'Hurlingham', 10),
(107, 'NeuquÃ?n', 10),
(108, 'ItuzaingÃ?', 10),
(109, 'San Fernando', 10),
(110, 'Formosa', 10),
(111, 'Las Heras', 10),
(112, 'La Rioja', 10),
(113, 'San Fernando del Valle de Cata', 10),
(114, 'RÃ?o Cuarto', 10),
(115, 'Comodoro Rivadavia', 10),
(116, 'Mendoza', 10),
(117, 'San NicolÃ¡s de los Arroyos', 10),
(118, 'San Juan', 10),
(119, 'Escobar', 10),
(120, 'Concordia', 10),
(121, 'Pilar', 10),
(122, 'San Luis', 10),
(123, 'Ezeiza', 10),
(124, 'San Rafael', 10),
(125, 'Tandil', 10),
(126, 'Yerevan', 11),
(127, 'Gjumri', 11),
(128, 'Vanadzor', 11),
(129, 'Oranjestad', 12),
(130, 'Sydney', 13),
(131, 'Melbourne', 13),
(132, 'Brisbane', 13),
(133, 'Perth', 13),
(134, 'Adelaide', 13),
(135, 'Canberra', 13),
(136, 'Gold Coast', 13),
(137, 'Newcastle', 13),
(138, 'Central Coast', 13),
(139, 'Wollongong', 13),
(140, 'Hobart', 13),
(141, 'Geelong', 13),
(142, 'Townsville', 13),
(143, 'Cairns', 13),
(144, 'Baku', 15),
(145, 'GÃ¤ncÃ¤', 15),
(146, 'Sumqayit', 15),
(147, 'MingÃ¤Ã§evir', 15),
(148, 'Nassau', 16),
(149, 'al-Manama', 17),
(150, 'Dhaka', 18),
(151, 'Chittagong', 18),
(152, 'Khulna', 18),
(153, 'Rajshahi', 18),
(154, 'Narayanganj', 18),
(155, 'Rangpur', 18),
(156, 'Mymensingh', 18),
(157, 'Barisal', 18),
(158, 'Tungi', 18),
(159, 'Jessore', 18),
(160, 'Comilla', 18),
(161, 'Nawabganj', 18),
(162, 'Dinajpur', 18),
(163, 'Bogra', 18),
(164, 'Sylhet', 18),
(165, 'Brahmanbaria', 18),
(166, 'Tangail', 18),
(167, 'Jamalpur', 18),
(168, 'Pabna', 18),
(169, 'Naogaon', 18),
(170, 'Sirajganj', 18),
(171, 'Narsinghdi', 18),
(172, 'Saidpur', 18),
(173, 'Gazipur', 18),
(174, 'Bridgetown', 19),
(175, 'Antwerpen', 21),
(176, 'Gent', 21),
(177, 'Charleroi', 21),
(178, 'LiÃ¨ge', 21),
(179, 'Bruxelles [Brussel]', 21),
(180, 'Brugge', 21),
(181, 'Schaerbeek', 21),
(182, 'Namur', 21),
(183, 'Mons', 21),
(184, 'Belize City', 22),
(185, 'Belmopan', 22),
(186, 'Cotonou', 23),
(187, 'Porto-Novo', 23),
(188, 'Djougou', 23),
(189, 'Parakou', 23),
(190, 'Saint George', 24),
(191, 'Hamilton', 24),
(192, 'Thimphu', 25),
(193, 'Santa Cruz de la Sierra', 26),
(194, 'La Paz', 26),
(195, 'El Alto', 26),
(196, 'Cochabamba', 26),
(197, 'Oruro', 26),
(198, 'Sucre', 26),
(199, 'PotosÃ?', 26),
(200, 'Tarija', 26),
(201, 'Sarajevo', 27),
(202, 'Banja Luka', 27),
(203, 'Zenica', 27),
(204, 'Gaborone', 28),
(205, 'Francistown', 28),
(206, 'SÃ£o Paulo', 30),
(207, 'Rio de Janeiro', 30),
(208, 'Salvador', 30),
(209, 'Belo Horizonte', 30),
(210, 'Fortaleza', 30),
(211, 'BrasÃ?lia', 30),
(212, 'Curitiba', 30),
(213, 'Recife', 30),
(214, 'Porto Alegre', 30),
(215, 'Manaus', 30),
(216, 'BelÃ?m', 30),
(217, 'Guarulhos', 30),
(218, 'GoiÃ¢nia', 30),
(219, 'Campinas', 30),
(220, 'SÃ£o GonÃ§alo', 30),
(221, 'Nova IguaÃ§u', 30),
(222, 'SÃ£o LuÃ?s', 30),
(223, 'MaceiÃ?', 30),
(224, 'Duque de Caxias', 30),
(225, 'SÃ£o Bernardo do Campo', 30),
(226, 'Teresina', 30),
(227, 'Natal', 30),
(228, 'Osasco', 30),
(229, 'Campo Grande', 30),
(230, 'Santo AndrÃ?', 30),
(231, 'JoÃ£o Pessoa', 30),
(232, 'JaboatÃ£o dos Guararapes', 30),
(233, 'Contagem', 30),
(234, 'SÃ£o JosÃ? dos Campos', 30),
(235, 'UberlÃ¢ndia', 30),
(236, 'Feira de Santana', 30),
(237, 'RibeirÃ£o Preto', 30),
(238, 'Sorocaba', 30),
(239, 'NiterÃ?i', 30),
(240, 'CuiabÃ¡', 30),
(241, 'Juiz de Fora', 30),
(242, 'Aracaju', 30),
(243, 'SÃ£o JoÃ£o de Meriti', 30),
(244, 'Londrina', 30),
(245, 'Joinville', 30),
(246, 'Belford Roxo', 30),
(247, 'Santos', 30),
(248, 'Ananindeua', 30),
(249, 'Campos dos Goytacazes', 30),
(250, 'MauÃ¡', 30),
(251, 'CarapicuÃ?ba', 30),
(252, 'Olinda', 30),
(253, 'Campina Grande', 30),
(254, 'SÃ£o JosÃ? do Rio Preto', 30),
(255, 'Caxias do Sul', 30),
(256, 'Moji das Cruzes', 30),
(257, 'Diadema', 30),
(258, 'Aparecida de GoiÃ¢nia', 30),
(259, 'Piracicaba', 30),
(260, 'Cariacica', 30),
(261, 'Vila Velha', 30),
(262, 'Pelotas', 30),
(263, 'Bauru', 30),
(264, 'Porto Velho', 30),
(265, 'Serra', 30),
(266, 'Betim', 30),
(267, 'JundÃ?aÃ?', 30),
(268, 'Canoas', 30),
(269, 'Franca', 30),
(270, 'SÃ£o Vicente', 30),
(271, 'MaringÃ¡', 30),
(272, 'Montes Claros', 30),
(273, 'AnÃ¡polis', 30),
(274, 'FlorianÃ?polis', 30),
(275, 'PetrÃ?polis', 30),
(276, 'Itaquaquecetuba', 30),
(277, 'VitÃ?ria', 30),
(278, 'Ponta Grossa', 30),
(279, 'Rio Branco', 30),
(280, 'Foz do IguaÃ§u', 30),
(281, 'MacapÃ¡', 30),
(282, 'IlhÃ?us', 30),
(283, 'VitÃ?ria da Conquista', 30),
(284, 'Uberaba', 30),
(285, 'Paulista', 30),
(286, 'Limeira', 30),
(287, 'Blumenau', 30),
(288, 'Caruaru', 30),
(289, 'SantarÃ?m', 30),
(290, 'Volta Redonda', 30),
(291, 'Novo Hamburgo', 30),
(292, 'Caucaia', 30),
(293, 'Santa Maria', 30),
(294, 'Cascavel', 30),
(295, 'GuarujÃ¡', 30),
(296, 'RibeirÃ£o das Neves', 30),
(297, 'Governador Valadares', 30),
(298, 'TaubatÃ?', 30),
(299, 'Imperatriz', 30),
(300, 'GravataÃ?', 30),
(301, 'Embu', 30),
(302, 'MossorÃ?', 30),
(303, 'VÃ¡rzea Grande', 30),
(304, 'Petrolina', 30),
(305, 'Barueri', 30),
(306, 'ViamÃ£o', 30),
(307, 'Ipatinga', 30),
(308, 'Juazeiro', 30),
(309, 'Juazeiro do Norte', 30),
(310, 'TaboÃ£o da Serra', 30),
(311, 'SÃ£o JosÃ? dos Pinhais', 30),
(312, 'MagÃ?', 30),
(313, 'Suzano', 30),
(314, 'SÃ£o Leopoldo', 30),
(315, 'MarÃ?lia', 30),
(316, 'SÃ£o Carlos', 30),
(317, 'SumarÃ?', 30),
(318, 'Presidente Prudente', 30),
(319, 'DivinÃ?polis', 30),
(320, 'Sete Lagoas', 30),
(321, 'Rio Grande', 30),
(322, 'Itabuna', 30),
(323, 'JequiÃ?', 30),
(324, 'Arapiraca', 30),
(325, 'Colombo', 30),
(326, 'Americana', 30),
(327, 'Alvorada', 30),
(328, 'Araraquara', 30),
(329, 'ItaboraÃ?', 30),
(330, 'Santa BÃ¡rbara dÂ´Oeste', 30),
(331, 'Nova Friburgo', 30),
(332, 'JacareÃ?', 30),
(333, 'AraÃ§atuba', 30),
(334, 'Barra Mansa', 30),
(335, 'Praia Grande', 30),
(336, 'MarabÃ¡', 30),
(337, 'CriciÃºma', 30),
(338, 'Boa Vista', 30),
(339, 'Passo Fundo', 30),
(340, 'Dourados', 30),
(341, 'Santa Luzia', 30),
(342, 'Rio Claro', 30),
(343, 'MaracanaÃº', 30),
(344, 'Guarapuava', 30),
(345, 'RondonÃ?polis', 30),
(346, 'SÃ£o JosÃ?', 30),
(347, 'Cachoeiro de Itapemirim', 30),
(348, 'NilÃ?polis', 30),
(349, 'Itapevi', 30),
(350, 'Cabo de Santo Agostinho', 30),
(351, 'CamaÃ§ari', 30),
(352, 'Sobral', 30),
(353, 'ItajaÃ?', 30),
(354, 'ChapecÃ?', 30),
(355, 'Cotia', 30),
(356, 'Lages', 30),
(357, 'Ferraz de Vasconcelos', 30),
(358, 'Indaiatuba', 30),
(359, 'HortolÃ¢ndia', 30),
(360, 'Caxias', 30),
(361, 'SÃ£o Caetano do Sul', 30),
(362, 'Itu', 30),
(363, 'Nossa Senhora do Socorro', 30),
(364, 'ParnaÃ?ba', 30),
(365, 'PoÃ§os de Caldas', 30),
(366, 'TeresÃ?polis', 30),
(367, 'Barreiras', 30),
(368, 'Castanhal', 30),
(369, 'Alagoinhas', 30),
(370, 'Itapecerica da Serra', 30),
(371, 'Uruguaiana', 30),
(372, 'ParanaguÃ¡', 30),
(373, 'IbiritÃ?', 30),
(374, 'Timon', 30),
(375, 'LuziÃ¢nia', 30),
(376, 'MacaÃ?', 30),
(377, 'TeÃ?filo Otoni', 30),
(378, 'Moji-GuaÃ§u', 30),
(379, 'Palmas', 30),
(380, 'Pindamonhangaba', 30),
(381, 'Francisco Morato', 30),
(382, 'BagÃ?', 30),
(383, 'Sapucaia do Sul', 30),
(384, 'Cabo Frio', 30),
(385, 'Itapetininga', 30),
(386, 'Patos de Minas', 30),
(387, 'Camaragibe', 30),
(388, 'BraganÃ§a Paulista', 30),
(389, 'Queimados', 30),
(390, 'AraguaÃ?na', 30),
(391, 'Garanhuns', 30),
(392, 'VitÃ?ria de Santo AntÃ£o', 30),
(393, 'Santa Rita', 30),
(394, 'Barbacena', 30),
(395, 'Abaetetuba', 30),
(396, 'JaÃº', 30),
(397, 'Lauro de Freitas', 30),
(398, 'Franco da Rocha', 30),
(399, 'Teixeira de Freitas', 30),
(400, 'Varginha', 30),
(401, 'RibeirÃ£o Pires', 30),
(402, 'SabarÃ¡', 30),
(403, 'Catanduva', 30),
(404, 'Rio Verde', 30),
(405, 'Botucatu', 30),
(406, 'Colatina', 30),
(407, 'Santa Cruz do Sul', 30),
(408, 'Linhares', 30),
(409, 'Apucarana', 30),
(410, 'Barretos', 30),
(411, 'GuaratinguetÃ¡', 30),
(412, 'Cachoeirinha', 30),
(413, 'CodÃ?', 30),
(414, 'JaraguÃ¡ do Sul', 30),
(415, 'CubatÃ£o', 30),
(416, 'Itabira', 30),
(417, 'Itaituba', 30),
(418, 'Araras', 30),
(419, 'Resende', 30),
(420, 'Atibaia', 30),
(421, 'Pouso Alegre', 30),
(422, 'Toledo', 30),
(423, 'Crato', 30),
(424, 'Passos', 30),
(425, 'Araguari', 30),
(426, 'SÃ£o JosÃ? de Ribamar', 30),
(427, 'Pinhais', 30),
(428, 'SertÃ£ozinho', 30),
(429, 'Conselheiro Lafaiete', 30),
(430, 'Paulo Afonso', 30),
(431, 'Angra dos Reis', 30),
(432, 'EunÃ¡polis', 30),
(433, 'Salto', 30),
(434, 'Ourinhos', 30),
(435, 'Parnamirim', 30),
(436, 'Jacobina', 30),
(437, 'Coronel Fabriciano', 30),
(438, 'Birigui', 30),
(439, 'TatuÃ?', 30),
(440, 'Ji-ParanÃ¡', 30),
(441, 'Bacabal', 30),
(442, 'CametÃ¡', 30),
(443, 'GuaÃ?ba', 30),
(444, 'SÃ£o LourenÃ§o da Mata', 30),
(445, 'Santana do Livramento', 30),
(446, 'Votorantim', 30),
(447, 'Campo Largo', 30),
(448, 'Patos', 30),
(449, 'Ituiutaba', 30),
(450, 'CorumbÃ¡', 30),
(451, 'PalhoÃ§a', 30),
(452, 'Barra do PiraÃ?', 30),
(453, 'Bento GonÃ§alves', 30),
(454, 'PoÃ¡', 30),
(455, 'Ãguas Lindas de GoiÃ¡s', 30),
(456, 'London', 225),
(457, 'Birmingham', 225),
(458, 'Glasgow', 225),
(459, 'Liverpool', 225),
(460, 'Edinburgh', 225),
(461, 'Sheffield', 225),
(462, 'Manchester', 225),
(463, 'Leeds', 225),
(464, 'Bristol', 225),
(465, 'Cardiff', 225),
(466, 'Coventry', 225),
(467, 'Leicester', 225),
(468, 'Bradford', 225),
(469, 'Belfast', 225),
(470, 'Nottingham', 225),
(471, 'Kingston upon Hull', 225),
(472, 'Plymouth', 225),
(473, 'Stoke-on-Trent', 225),
(474, 'Wolverhampton', 225),
(475, 'Derby', 225),
(476, 'Swansea', 225),
(477, 'Southampton', 225),
(478, 'Aberdeen', 225),
(479, 'Northampton', 225),
(480, 'Dudley', 225),
(481, 'Portsmouth', 225),
(482, 'Newcastle upon Tyne', 225),
(483, 'Sunderland', 225),
(484, 'Luton', 225),
(485, 'Swindon', 225),
(486, 'Southend-on-Sea', 225),
(487, 'Walsall', 225),
(488, 'Bournemouth', 225),
(489, 'Peterborough', 225),
(490, 'Brighton', 225),
(491, 'Blackpool', 225),
(492, 'Dundee', 225),
(493, 'West Bromwich', 225),
(494, 'Reading', 225),
(495, 'Oldbury/Smethwick (Warley)', 225),
(496, 'Middlesbrough', 225),
(497, 'Huddersfield', 225),
(498, 'Oxford', 225),
(499, 'Poole', 225),
(500, 'Bolton', 225),
(501, 'Blackburn', 225),
(502, 'Newport', 225),
(503, 'Preston', 225),
(504, 'Stockport', 225),
(505, 'Norwich', 225),
(506, 'Rotherham', 225),
(507, 'Cambridge', 225),
(508, 'Watford', 225),
(509, 'Ipswich', 225),
(510, 'Slough', 225),
(511, 'Exeter', 225),
(512, 'Cheltenham', 225),
(513, 'Gloucester', 225),
(514, 'Saint Helens', 225),
(515, 'Sutton Coldfield', 225),
(516, 'York', 225),
(517, 'Oldham', 225),
(518, 'Basildon', 225),
(519, 'Worthing', 225),
(520, 'Chelmsford', 225),
(521, 'Colchester', 225),
(522, 'Crawley', 225),
(523, 'Gillingham', 225),
(524, 'Solihull', 225),
(525, 'Rochdale', 225),
(526, 'Birkenhead', 225),
(527, 'Worcester', 225),
(528, 'Hartlepool', 225),
(529, 'Halifax', 225),
(530, 'Woking/Byfleet', 225),
(531, 'Southport', 225),
(532, 'Maidstone', 225),
(533, 'Eastbourne', 225),
(534, 'Grimsby', 225),
(535, 'Saint Helier', 225),
(536, 'Douglas', 225),
(537, 'Road Town', 233),
(538, 'Bandar Seri Begawan', 32),
(539, 'Sofija', 33),
(540, 'Plovdiv', 33),
(541, 'Varna', 33),
(542, 'Burgas', 33),
(543, 'Ruse', 33),
(544, 'Stara Zagora', 33),
(545, 'Pleven', 33),
(546, 'Sliven', 33),
(547, 'Dobric', 33),
(548, 'Å umen', 33),
(549, 'Ouagadougou', 34),
(550, 'Bobo-Dioulasso', 34),
(551, 'Koudougou', 34),
(552, 'Bujumbura', 35),
(553, 'George Town', 40),
(554, 'Santiago de Chile', 43),
(555, 'Puente Alto', 43),
(556, 'ViÃ±a del Mar', 43),
(557, 'ValparaÃ?so', 43),
(558, 'Talcahuano', 43),
(559, 'Antofagasta', 43),
(560, 'San Bernardo', 43),
(561, 'Temuco', 43),
(562, 'ConcepciÃ?n', 43),
(563, 'Rancagua', 43),
(564, 'Arica', 43),
(565, 'Talca', 43),
(566, 'ChillÃ¡n', 43),
(567, 'Iquique', 43),
(568, 'Los Angeles', 43),
(569, 'Puerto Montt', 43),
(570, 'Coquimbo', 43),
(571, 'Osorno', 43),
(572, 'La Serena', 43),
(573, 'Calama', 43),
(574, 'Valdivia', 43),
(575, 'Punta Arenas', 43),
(576, 'CopiapÃ?', 43),
(577, 'QuilpuÃ?', 43),
(578, 'CuricÃ?', 43),
(579, 'Ovalle', 43),
(580, 'Coronel', 43),
(581, 'San Pedro de la Paz', 43),
(582, 'Melipilla', 43),
(583, 'Avarua', 51),
(584, 'San JosÃ?', 52),
(585, 'Djibouti', 59),
(586, 'Roseau', 60),
(587, 'Santo Domingo de GuzmÃ¡n', 61),
(588, 'Santiago de los Caballeros', 61),
(589, 'La Romana', 61),
(590, 'San Pedro de MacorÃ?s', 61),
(591, 'San Francisco de MacorÃ?s', 61),
(592, 'San Felipe de Puerto Plata', 61),
(593, 'Guayaquil', 62),
(594, 'Quito', 62),
(595, 'Cuenca', 62),
(596, 'Machala', 62),
(597, 'Santo Domingo de los Colorados', 62),
(598, 'Portoviejo', 62),
(599, 'Ambato', 62),
(600, 'Manta', 62),
(601, 'Duran [Eloy Alfaro]', 62),
(602, 'Ibarra', 62),
(603, 'Quevedo', 62),
(604, 'Milagro', 62),
(605, 'Loja', 62),
(606, 'RÃ?obamba', 62),
(607, 'Esmeraldas', 62),
(608, 'Cairo', 63),
(609, 'Alexandria', 63),
(610, 'Giza', 63),
(611, 'Shubra al-Khayma', 63),
(612, 'Port Said', 63),
(613, 'Suez', 63),
(614, 'al-Mahallat al-Kubra', 63),
(615, 'Tanta', 63),
(616, 'al-Mansura', 63),
(617, 'Luxor', 63),
(618, 'Asyut', 63),
(619, 'Bahtim', 63),
(620, 'Zagazig', 63),
(621, 'al-Faiyum', 63),
(622, 'Ismailia', 63),
(623, 'Kafr al-Dawwar', 63),
(624, 'Assuan', 63),
(625, 'Damanhur', 63),
(626, 'al-Minya', 63),
(627, 'Bani Suwayf', 63),
(628, 'Qina', 63),
(629, 'Sawhaj', 63),
(630, 'Shibin al-Kawm', 63),
(631, 'Bulaq al-Dakrur', 63),
(632, 'Banha', 63),
(633, 'Warraq al-Arab', 63),
(634, 'Kafr al-Shaykh', 63),
(635, 'Mallawi', 63),
(636, 'Bilbays', 63),
(637, 'Mit Ghamr', 63),
(638, 'al-Arish', 63),
(639, 'Talkha', 63),
(640, 'Qalyub', 63),
(641, 'Jirja', 63),
(642, 'Idfu', 63),
(643, 'al-Hawamidiya', 63),
(644, 'Disuq', 63),
(645, 'San Salvador', 64),
(646, 'Santa Ana', 64),
(647, 'Mejicanos', 64),
(648, 'Soyapango', 64),
(649, 'San Miguel', 64),
(650, 'Nueva San Salvador', 64),
(651, 'Apopa', 64),
(652, 'Asmara', 66),
(653, 'Madrid', 199),
(654, 'Barcelona', 199),
(655, 'Valencia', 199),
(656, 'Sevilla', 199),
(657, 'Zaragoza', 199),
(658, 'MÃ¡laga', 199),
(659, 'Bilbao', 199),
(660, 'Las Palmas de Gran Canaria', 199),
(661, 'Murcia', 199),
(662, 'Palma de Mallorca', 199),
(663, 'Valladolid', 199),
(664, 'CÃ?rdoba', 199),
(665, 'Vigo', 199),
(666, 'Alicante [Alacant]', 199),
(667, 'GijÃ?n', 199),
(668, 'LÂ´Hospitalet de Llobregat', 199),
(669, 'Granada', 199),
(670, 'A CoruÃ±a (La CoruÃ±a)', 199),
(671, 'Vitoria-Gasteiz', 199),
(672, 'Santa Cruz de Tenerife', 199),
(673, 'Badalona', 199),
(674, 'Oviedo', 199),
(675, 'MÃ?stoles', 199),
(676, 'Elche [Elx]', 199),
(677, 'Sabadell', 199),
(678, 'Santander', 199),
(679, 'Jerez de la Frontera', 199),
(680, 'Pamplona [IruÃ±a]', 199),
(681, 'Donostia-San SebastiÃ¡n', 199),
(682, 'Cartagena', 199),
(683, 'LeganÃ?s', 199),
(684, 'Fuenlabrada', 199),
(685, 'AlmerÃ?a', 199),
(686, 'Terrassa', 199),
(687, 'AlcalÃ¡ de Henares', 199),
(688, 'Burgos', 199),
(689, 'Salamanca', 199),
(690, 'Albacete', 199),
(691, 'Getafe', 199),
(692, 'CÃ¡diz', 199),
(693, 'AlcorcÃ?n', 199),
(694, 'Huelva', 199),
(695, 'LeÃ?n', 199),
(696, 'CastellÃ?n de la Plana [Castell', 199),
(697, 'Badajoz', 199),
(698, '[San CristÃ?bal de] la Laguna', 199),
(699, 'LogroÃ±o', 199),
(700, 'Santa Coloma de Gramenet', 199),
(701, 'Tarragona', 199),
(702, 'Lleida (LÃ?rida)', 199),
(703, 'JaÃ?n', 199),
(704, 'Ourense (Orense)', 199),
(705, 'MatarÃ?', 199),
(706, 'Algeciras', 199),
(707, 'Marbella', 199),
(708, 'Barakaldo', 199),
(709, 'Dos Hermanas', 199),
(710, 'Santiago de Compostela', 199),
(711, 'TorrejÃ?n de Ardoz', 199),
(712, 'Cape Town', 197),
(713, 'Soweto', 197),
(714, 'Johannesburg', 197),
(715, 'Port Elizabeth', 197),
(716, 'Pretoria', 197),
(717, 'Inanda', 197),
(718, 'Durban', 197),
(719, 'Vanderbijlpark', 197),
(720, 'Kempton Park', 197),
(721, 'Alberton', 197),
(722, 'Pinetown', 197),
(723, 'Pietermaritzburg', 197),
(724, 'Benoni', 197),
(725, 'Randburg', 197),
(726, 'Umlazi', 197),
(727, 'Bloemfontein', 197),
(728, 'Vereeniging', 197),
(729, 'Wonderboom', 197),
(730, 'Roodepoort', 197),
(731, 'Boksburg', 197),
(732, 'Klerksdorp', 197),
(733, 'Soshanguve', 197),
(734, 'Newcastle', 197),
(735, 'East London', 197),
(736, 'Welkom', 197),
(737, 'Kimberley', 197),
(738, 'Uitenhage', 197),
(739, 'Chatsworth', 197),
(740, 'Mdantsane', 197),
(741, 'Krugersdorp', 197),
(742, 'Botshabelo', 197),
(743, 'Brakpan', 197),
(744, 'Witbank', 197),
(745, 'Oberholzer', 197),
(746, 'Germiston', 197),
(747, 'Springs', 197),
(748, 'Westonaria', 197),
(749, 'Randfontein', 197),
(750, 'Paarl', 197),
(751, 'Potchefstroom', 197),
(752, 'Rustenburg', 197),
(753, 'Nigel', 197),
(754, 'George', 197),
(755, 'Ladysmith', 197),
(756, 'Addis Abeba', 68),
(757, 'Dire Dawa', 68),
(758, 'Nazret', 68),
(759, 'Gonder', 68),
(760, 'Dese', 68),
(761, 'Mekele', 68),
(762, 'Bahir Dar', 68),
(763, 'Stanley', 69),
(764, 'Suva', 71),
(765, 'Quezon', 169),
(766, 'Manila', 169),
(767, 'Kalookan', 169),
(768, 'Davao', 169),
(769, 'Cebu', 169),
(770, 'Zamboanga', 169),
(771, 'Pasig', 169),
(772, 'Valenzuela', 169),
(773, 'Las PiÃ±as', 169),
(774, 'Antipolo', 169),
(775, 'Taguig', 169),
(776, 'Cagayan de Oro', 169),
(777, 'ParaÃ±aque', 169),
(778, 'Makati', 169),
(779, 'Bacolod', 169),
(780, 'General Santos', 169),
(781, 'Marikina', 169),
(782, 'DasmariÃ±as', 169),
(783, 'Muntinlupa', 169),
(784, 'Iloilo', 169),
(785, 'Pasay', 169),
(786, 'Malabon', 169),
(787, 'San JosÃ? del Monte', 169),
(788, 'Bacoor', 169),
(789, 'Iligan', 169),
(790, 'Calamba', 169),
(791, 'Mandaluyong', 169),
(792, 'Butuan', 169),
(793, 'Angeles', 169),
(794, 'Tarlac', 169),
(795, 'Mandaue', 169),
(796, 'Baguio', 169),
(797, 'Batangas', 169),
(798, 'Cainta', 169),
(799, 'San Pedro', 169),
(800, 'Navotas', 169),
(801, 'Cabanatuan', 169),
(802, 'San Fernando', 169),
(803, 'Lipa', 169),
(804, 'Lapu-Lapu', 169),
(805, 'San Pablo', 169),
(806, 'BiÃ±an', 169),
(807, 'Taytay', 169),
(808, 'Lucena', 169),
(809, 'Imus', 169),
(810, 'Olongapo', 169),
(811, 'Binangonan', 169),
(812, 'Santa Rosa', 169),
(813, 'Tagum', 169),
(814, 'Tacloban', 169),
(815, 'Malolos', 169),
(816, 'Mabalacat', 169),
(817, 'Cotabato', 169),
(818, 'Meycauayan', 169),
(819, 'Puerto Princesa', 169),
(820, 'Legazpi', 169),
(821, 'Silang', 169),
(822, 'Ormoc', 169),
(823, 'San Carlos', 169),
(824, 'Kabankalan', 169),
(825, 'Talisay', 169),
(826, 'Valencia', 169),
(827, 'Calbayog', 169),
(828, 'Santa Maria', 169),
(829, 'Pagadian', 169),
(830, 'Cadiz', 169),
(831, 'Bago', 169),
(832, 'Toledo', 169),
(833, 'Naga', 169),
(834, 'San Mateo', 169),
(835, 'Panabo', 169),
(836, 'Koronadal', 169),
(837, 'Marawi', 169),
(838, 'Dagupan', 169),
(839, 'Sagay', 169),
(840, 'Roxas', 169),
(841, 'Lubao', 169),
(842, 'Digos', 169),
(843, 'San Miguel', 169),
(844, 'Malaybalay', 169),
(845, 'Tuguegarao', 169),
(846, 'Ilagan', 169),
(847, 'Baliuag', 169),
(848, 'Surigao', 169),
(849, 'San Carlos', 169),
(850, 'San Juan del Monte', 169),
(851, 'Tanauan', 169),
(852, 'Concepcion', 169),
(853, 'Rodriguez (Montalban)', 169),
(854, 'Sariaya', 169),
(855, 'Malasiqui', 169),
(856, 'General Mariano Alvarez', 169),
(857, 'Urdaneta', 169),
(858, 'Hagonoy', 169),
(859, 'San Jose', 169),
(860, 'Polomolok', 169),
(861, 'Santiago', 169),
(862, 'Tanza', 169),
(863, 'Ozamis', 169),
(864, 'Mexico', 169),
(865, 'San Jose', 169),
(866, 'Silay', 169),
(867, 'General Trias', 169),
(868, 'Tabaco', 169),
(869, 'Cabuyao', 169),
(870, 'Calapan', 169),
(871, 'Mati', 169),
(872, 'Midsayap', 169),
(873, 'Cauayan', 169),
(874, 'Gingoog', 169),
(875, 'Dumaguete', 169),
(876, 'San Fernando', 169),
(877, 'Arayat', 169),
(878, 'Bayawan (Tulong)', 169),
(879, 'Kidapawan', 169),
(880, 'Daraga (Locsin)', 169),
(881, 'Marilao', 169),
(882, 'Malita', 169),
(883, 'Dipolog', 169),
(884, 'Cavite', 169),
(885, 'Danao', 169),
(886, 'Bislig', 169),
(887, 'Talavera', 169),
(888, 'Guagua', 169),
(889, 'Bayambang', 169),
(890, 'Nasugbu', 169),
(891, 'Baybay', 169),
(892, 'Capas', 169),
(893, 'Sultan Kudarat', 169),
(894, 'Laoag', 169),
(895, 'Bayugan', 169),
(896, 'Malungon', 169),
(897, 'Santa Cruz', 169),
(898, 'Sorsogon', 169),
(899, 'Candelaria', 169),
(900, 'Ligao', 169),
(901, 'TÃ?rshavn', 70),
(902, 'Libreville', 77),
(903, 'Serekunda', 78),
(904, 'Banjul', 78),
(905, 'Tbilisi', 79),
(906, 'Kutaisi', 79),
(907, 'Rustavi', 79),
(908, 'Batumi', 79),
(909, 'Sohumi', 79),
(910, 'Accra', 81),
(911, 'Kumasi', 81),
(912, 'Tamale', 81),
(913, 'Tema', 81),
(914, 'Sekondi-Takoradi', 81),
(915, 'Gibraltar', 82),
(916, 'Saint GeorgeÂ´s', 85),
(917, 'Nuuk', 84),
(918, 'Les Abymes', 86),
(919, 'Basse-Terre', 86),
(920, 'Tamuning', 87),
(921, 'AgaÃ±a', 87),
(922, 'Ciudad de Guatemala', 88),
(923, 'Mixco', 88),
(924, 'Villa Nueva', 88),
(925, 'Quetzaltenango', 88),
(926, 'Conakry', 89),
(927, 'Bissau', 90),
(928, 'Georgetown', 91),
(929, 'Port-au-Prince', 92),
(930, 'Carrefour', 92),
(931, 'Delmas', 92),
(932, 'Le-Cap-HaÃ¯tien', 92),
(933, 'Tegucigalpa', 95),
(934, 'San Pedro Sula', 95),
(935, 'La Ceiba', 95),
(936, 'Kowloon and New Kowloon', 96),
(937, 'Victoria', 96),
(938, 'Longyearbyen', 203),
(939, 'Jakarta', 100),
(940, 'Surabaya', 100),
(941, 'Bandung', 100),
(942, 'Medan', 100),
(943, 'Palembang', 100),
(944, 'Tangerang', 100),
(945, 'Semarang', 100),
(946, 'Ujung Pandang', 100),
(947, 'Malang', 100),
(948, 'Bandar Lampung', 100),
(949, 'Bekasi', 100),
(950, 'Padang', 100),
(951, 'Surakarta', 100),
(952, 'Banjarmasin', 100),
(953, 'Pekan Baru', 100),
(954, 'Denpasar', 100),
(955, 'Yogyakarta', 100),
(956, 'Pontianak', 100),
(957, 'Samarinda', 100);

-- --------------------------------------------------------

--
-- Table structure for table `cms_nusik`
--

CREATE TABLE IF NOT EXISTS `cms_nusik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `date_time` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `code`) VALUES
(1, 'AFGHANISTAN', 'AFG'),
(2, 'ALBANIA', 'ALB'),
(3, 'ALGERIA', 'DZA'),
(4, 'AMERICAN SAMOA', 'ASM'),
(5, 'ANDORRA', 'AND'),
(6, 'ANGOLA', 'AGO'),
(7, 'ANGUILLA', 'AIA'),
(8, 'ANTARCTICA', ''),
(9, 'ANTIGUA AND BARBUDA', 'ATG'),
(10, 'ARGENTINA', 'ARG'),
(11, 'ARMENIA', 'ARM'),
(12, 'ARUBA', 'ABW'),
(13, 'AUSTRALIA', 'AUS'),
(14, 'AUSTRIA', 'AUT'),
(15, 'AZERBAIJAN', 'AZE'),
(16, 'BAHAMAS', 'BHS'),
(17, 'BAHRAIN', 'BHR'),
(18, 'BANGLADESH', 'BGD'),
(19, 'BARBADOS', 'BRB'),
(20, 'BELARUS', 'BLR'),
(21, 'BELGIUM', 'BEL'),
(22, 'BELIZE', 'BLZ'),
(23, 'BENIN', 'BEN'),
(24, 'BERMUDA', 'BMU'),
(25, 'BHUTAN', 'BTN'),
(26, 'BOLIVIA', 'BOL'),
(27, 'BOSNIA AND HERZEGOVINA', 'BIH'),
(28, 'BOTSWANA', 'BWA'),
(29, 'BOUVET ISLAND', ''),
(30, 'BRAZIL', 'BRA'),
(31, 'BRITISH INDIAN OCEAN TERRITORY', ''),
(32, 'BRUNEI DARUSSALAM', 'BRN'),
(33, 'BULGARIA', 'BGR'),
(34, 'BURKINA FASO', 'BFA'),
(35, 'BURUNDI', 'BDI'),
(36, 'CAMBODIA', 'KHM'),
(37, 'CAMEROON', 'CMR'),
(38, 'CANADA', 'CAN'),
(39, 'CAPE VERDE', 'CPV'),
(40, 'CAYMAN ISLANDS', 'CYM'),
(41, 'CENTRAL AFRICAN REPUBLIC', 'CAF'),
(42, 'CHAD', 'TCD'),
(43, 'CHILE', 'CHL'),
(44, 'CHINA', 'CHN'),
(45, 'CHRISTMAS ISLAND', ''),
(46, 'COCOS (KEELING) ISLANDS', ''),
(47, 'COLOMBIA', 'COL'),
(48, 'COMOROS', 'COM'),
(49, 'CONGO', 'COG'),
(50, 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'COD'),
(51, 'COOK ISLANDS', 'COK'),
(52, 'COSTA RICA', 'CRI'),
(53, 'COTE D''IVOIRE', 'CIV'),
(54, 'CROATIA', 'HRV'),
(55, 'CUBA', 'CUB'),
(56, 'CYPRUS', 'CYP'),
(57, 'CZECH REPUBLIC', 'CZE'),
(58, 'DENMARK', 'DNK'),
(59, 'DJIBOUTI', 'DJI'),
(60, 'DOMINICA', 'DMA'),
(61, 'DOMINICAN REPUBLIC', 'DOM'),
(62, 'ECUADOR', 'ECU'),
(63, 'EGYPT', 'EGY'),
(64, 'EL SALVADOR', 'SLV'),
(65, 'EQUATORIAL GUINEA', 'GNQ'),
(66, 'ERITREA', 'ERI'),
(67, 'ESTONIA', 'EST'),
(68, 'ETHIOPIA', 'ETH'),
(69, 'FALKLAND ISLANDS (MALVINAS)', 'FLK'),
(70, 'FAROE ISLANDS', 'FRO'),
(71, 'FIJI', 'FJI'),
(72, 'FINLAND', 'FIN'),
(73, 'FRANCE', 'FRA'),
(74, 'FRENCH GUIANA', 'GUF'),
(75, 'FRENCH POLYNESIA', 'PYF'),
(76, 'FRENCH SOUTHERN TERRITORIES', ''),
(77, 'GABON', 'GAB'),
(78, 'GAMBIA', 'GMB'),
(79, 'GEORGIA', 'GEO'),
(80, 'GERMANY', 'DEU'),
(81, 'GHANA', 'GHA'),
(82, 'GIBRALTAR', 'GIB'),
(83, 'GREECE', 'GRC'),
(84, 'GREENLAND', 'GRL'),
(85, 'GRENADA', 'GRD'),
(86, 'GUADELOUPE', 'GLP'),
(87, 'GUAM', 'GUM'),
(88, 'GUATEMALA', 'GTM'),
(89, 'GUINEA', 'GIN'),
(90, 'GUINEA-BISSAU', 'GNB'),
(91, 'GUYANA', 'GUY'),
(92, 'HAITI', 'HTI'),
(93, 'HEARD ISLAND AND MCDONALD ISLANDS', ''),
(94, 'HOLY SEE (VATICAN CITY STATE)', 'VAT'),
(95, 'HONDURAS', 'HND'),
(96, 'HONG KONG', 'HKG'),
(97, 'HUNGARY', 'HUN'),
(98, 'ICELAND', 'ISL'),
(99, 'INDIA', 'IND'),
(100, 'INDONESIA', 'IDN'),
(101, 'IRAN, ISLAMIC REPUBLIC OF', 'IRN'),
(102, 'IRAQ', 'IRQ'),
(103, 'IRELAND', 'IRL'),
(104, 'ISRAEL', 'ISR'),
(105, 'ITALY', 'ITA'),
(106, 'JAMAICA', 'JAM'),
(107, 'JAPAN', 'JPN'),
(108, 'JORDAN', 'JOR'),
(109, 'KAZAKHSTAN', 'KAZ'),
(110, 'KENYA', 'KEN'),
(111, 'KIRIBATI', 'KIR'),
(112, 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'PRK'),
(113, 'KOREA, REPUBLIC OF', 'KOR'),
(114, 'KUWAIT', 'KWT'),
(115, 'KYRGYZSTAN', 'KGZ'),
(116, 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'LAO'),
(117, 'LATVIA', 'LVA'),
(118, 'LEBANON', 'LBN'),
(119, 'LESOTHO', 'LSO'),
(120, 'LIBERIA', 'LBR'),
(121, 'LIBYAN ARAB JAMAHIRIYA', 'LBY'),
(122, 'LIECHTENSTEIN', 'LIE'),
(123, 'LITHUANIA', 'LTU'),
(124, 'LUXEMBOURG', 'LUX'),
(125, 'MACAO', 'MAC'),
(126, 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'MKD'),
(127, 'MADAGASCAR', 'MDG'),
(128, 'MALAWI', 'MWI'),
(129, 'MALAYSIA', 'MYS'),
(130, 'MALDIVES', 'MDV'),
(131, 'MALI', 'MLI'),
(132, 'MALTA', 'MLT'),
(133, 'MARSHALL ISLANDS', 'MHL'),
(134, 'MARTINIQUE', 'MTQ'),
(135, 'MAURITANIA', 'MRT'),
(136, 'MAURITIUS', 'MUS'),
(137, 'MAYOTTE', ''),
(138, 'MEXICO', 'MEX'),
(139, 'MICRONESIA, FEDERATED STATES OF', 'FSM'),
(140, 'MOLDOVA, REPUBLIC OF', 'MDA'),
(141, 'MONACO', 'MCO'),
(142, 'MONGOLIA', 'MNG'),
(143, 'MONTSERRAT', 'MSR'),
(144, 'MOROCCO', 'MAR'),
(145, 'MOZAMBIQUE', 'MOZ'),
(146, 'MYANMAR', 'MMR'),
(147, 'NAMIBIA', 'NAM'),
(148, 'NAURU', 'NRU'),
(149, 'NEPAL', 'NPL'),
(150, 'NETHERLANDS', 'NLD'),
(151, 'NETHERLANDS ANTILLES', 'ANT'),
(152, 'NEW CALEDONIA', 'NCL'),
(153, 'NEW ZEALAND', 'NZL'),
(154, 'NICARAGUA', 'NIC'),
(155, 'NIGER', 'NER'),
(156, 'NIGERIA', 'NGA'),
(157, 'NIUE', 'NIU'),
(158, 'NORFOLK ISLAND', 'NFK'),
(159, 'NORTHERN MARIANA ISLANDS', 'MNP'),
(160, 'NORWAY', 'NOR'),
(161, 'OMAN', 'OMN'),
(162, 'PAKISTAN', 'PAK'),
(163, 'PALAU', 'PLW'),
(164, 'PALESTINIAN TERRITORY, OCCUPIED', ''),
(165, 'PANAMA', 'PAN'),
(166, 'PAPUA NEW GUINEA', 'PNG'),
(167, 'PARAGUAY', 'PRY'),
(168, 'PERU', 'PER'),
(169, 'PHILIPPINES', 'PHL'),
(170, 'PITCAIRN', 'PCN'),
(171, 'POLAND', 'POL'),
(172, 'PORTUGAL', 'PRT'),
(173, 'PUERTO RICO', 'PRI'),
(174, 'QATAR', 'QAT'),
(175, 'REUNION', 'REU'),
(176, 'ROMANIA', 'ROM'),
(177, 'RUSSIAN FEDERATION', 'RUS'),
(178, 'RWANDA', 'RWA'),
(179, 'SAINT HELENA', 'SHN'),
(180, 'SAINT KITTS AND NEVIS', 'KNA'),
(181, 'SAINT LUCIA', 'LCA'),
(182, 'SAINT PIERRE AND MIQUELON', 'SPM'),
(183, 'SAINT VINCENT AND THE GRENADINES', 'VCT'),
(184, 'SAMOA', 'WSM'),
(185, 'SAN MARINO', 'SMR'),
(186, 'SAO TOME AND PRINCIPE', 'STP'),
(187, 'SAUDI ARABIA', 'SAU'),
(188, 'SENEGAL', 'SEN'),
(189, 'SERBIA AND MONTENEGRO', ''),
(190, 'SEYCHELLES', 'SYC'),
(191, 'SIERRA LEONE', 'SLE'),
(192, 'SINGAPORE', 'SGP'),
(193, 'SLOVAKIA', 'SVK'),
(194, 'SLOVENIA', 'SVN'),
(195, 'SOLOMON ISLANDS', 'SLB'),
(196, 'SOMALIA', 'SOM'),
(197, 'SOUTH AFRICA', 'ZAF'),
(198, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', ''),
(199, 'SPAIN', 'ESP'),
(200, 'SRI LANKA', 'LKA'),
(201, 'SUDAN', 'SDN'),
(202, 'SURINAME', 'SUR'),
(203, 'SVALBARD AND JAN MAYEN', 'SJM'),
(204, 'SWAZILAND', 'SWZ'),
(205, 'SWEDEN', 'SWE'),
(206, 'SWITZERLAND', 'CHE'),
(207, 'SYRIAN ARAB REPUBLIC', 'SYR'),
(208, 'TAIWAN, PROVINCE OF CHINA', 'TWN'),
(209, 'TAJIKISTAN', 'TJK'),
(210, 'TANZANIA, UNITED REPUBLIC OF', 'TZA'),
(211, 'THAILAND', 'THA'),
(212, 'TIMOR-LESTE', ''),
(213, 'TOGO', 'TGO'),
(214, 'TOKELAU', 'TKL'),
(215, 'TONGA', 'TON'),
(216, 'TRINIDAD AND TOBAGO', 'TTO'),
(217, 'TUNISIA', 'TUN'),
(218, 'TURKEY', 'TUR'),
(219, 'TURKMENISTAN', 'TKM'),
(220, 'TURKS AND CAICOS ISLANDS', 'TCA'),
(221, 'TUVALU', 'TUV'),
(222, 'UGANDA', 'UGA'),
(223, 'UKRAINE', 'UKR'),
(224, 'UNITED ARAB EMIRATES', 'ARE'),
(225, 'UNITED KINGDOM', 'GBR'),
(226, 'UNITED STATES', 'USA'),
(227, 'UNITED STATES MINOR OUTLYING ISLANDS', ''),
(228, 'URUGUAY', 'URY'),
(229, 'UZBEKISTAN', 'UZB'),
(230, 'VANUATU', 'VUT'),
(231, 'VENEZUELA', 'VEN'),
(232, 'VIET NAM', 'VNM'),
(233, 'VIRGIN ISLANDS, BRITISH', 'VGB'),
(234, 'VIRGIN ISLANDS, U.S.', 'VIR'),
(235, 'WALLIS AND FUTUNA', 'WLF'),
(236, 'WESTERN SAHARA', 'ESH'),
(237, 'YEMEN', 'YEM'),
(238, 'ZAMBIA', 'ZMB'),
(239, 'ZIMBABWE', 'ZWE');

-- --------------------------------------------------------

--
-- Table structure for table `firstfan`
--

CREATE TABLE IF NOT EXISTS `firstfan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_of_entry` datetime NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_firstfan_login1` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`, `status`, `date_time`) VALUES
(1, 'Pop', 1, NULL),
(2, 'Rap & Hip-Hop', 1, '2013-10-05 08:09:00'),
(3, 'Rock', 1, '2013-10-05 08:09:00'),
(4, 'Country', 1, '2013-10-05 08:10:00'),
(5, 'Latin', 1, '2013-10-05 08:10:00'),
(6, 'R&B', 1, '2013-10-05 08:10:00'),
(7, 'Electronic', 1, '2013-10-05 08:11:00'),
(8, 'Indie Rock', 1, '2013-10-05 08:11:00'),
(9, 'Jazz', 1, '2013-10-05 08:11:00'),
(10, 'Folk', 1, '2013-10-05 08:11:00'),
(11, 'Classical', 1, '2013-10-05 08:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `track_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_like_track1` (`track_id`),
  KEY `fk_like_login1` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `roles_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailid_UNIQUE` (`email`),
  KEY `fk_login_roles1` (`roles_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 COMMENT='login details table' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `display_name`, `date_time`, `status`, `roles_id`) VALUES
(1, 'mantri.govind@hotmail.com', '123', 'Mantrig', '2013-10-05 11:40:00', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `myplaylist`
--

CREATE TABLE IF NOT EXISTS `myplaylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `date_time` datetime NOT NULL,
  `comment` longtext,
  `user_details_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_myplaylist_user_details1` (`user_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `myplaylist_has_track`
--

CREATE TABLE IF NOT EXISTS `myplaylist_has_track` (
  `myplaylist_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  PRIMARY KEY (`myplaylist_id`,`track_id`),
  KEY `fk_myplaylist_has_track_track1` (`track_id`),
  KEY `fk_myplaylist_has_track_myplaylist1` (`myplaylist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` longtext NOT NULL,
  `date_time` datetime NOT NULL,
  `event_on` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_news_login1` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `date_time`, `event_on`, `status`, `login_id`) VALUES
(1, 'This section is for event information.', '2013-10-05 12:04:00', '2013-10-17 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(150) NOT NULL,
  `photo_path` varchar(150) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `add_date` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `albums_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_photos_albums1` (`albums_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo_name`, `photo_path`, `active`, `add_date`, `status`, `albums_id`) VALUES
(1, 'MyPic', '1380966523.jpg', 1, '2013-10-05 11:48:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile_comments`
--

CREATE TABLE IF NOT EXISTS `profile_comments` (
  `id` int(11) NOT NULL,
  `commnet` longtext,
  `date_time` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `profile_comments_has_login`
--

CREATE TABLE IF NOT EXISTS `profile_comments_has_login` (
  `profile_comments_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `user_details_id` int(11) NOT NULL,
  KEY `fk_profile_comments_has_login_profile_comments1` (`profile_comments_id`),
  KEY `fk_profile_comments_has_login_login2` (`login_id`),
  KEY `fk_profile_comments_has_login_user_details1` (`user_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `p_album_comments`
--

CREATE TABLE IF NOT EXISTS `p_album_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `albums_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_p_album_comments_albums1` (`albums_id`),
  KEY `fk_p_album_comments_login1` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `rating_has_track`
--

CREATE TABLE IF NOT EXISTS `rating_has_track` (
  `rating_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`rating_id`,`track_id`,`login_id`),
  KEY `fk_rating_has_track_track1` (`track_id`),
  KEY `fk_rating_has_track_rating1` (`rating_id`),
  KEY `fk_rating_has_track_login1` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `type`, `status`, `visible`, `date_time`) VALUES
(1, 'Artist', 1, 1, '2013-10-05 11:38:00'),
(2, 'Fan', 1, 1, '2013-10-05 11:39:00'),
(3, 'Admin', 1, 1, '2013-10-05 11:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `date_time` datetime NOT NULL,
  `search` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`date_time`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE IF NOT EXISTS `track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) NOT NULL,
  `length` smallint(6) NOT NULL,
  `count` bigint(20) NOT NULL,
  `likes` bigint(20) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `track_album_id` bigint(20) NOT NULL,
  `login_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_track_track_album1` (`track_album_id`),
  KEY `fk_track_login1` (`login_id`),
  KEY `fk_track_genre1` (`genre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `url`, `length`, `count`, `likes`, `date_time`, `status`, `track_album_id`, `login_id`, `genre_id`, `name`) VALUES
(1, 'No Hay Alma.mp3', 2, 0, 0, '2013-10-05 12:02:00', 1, 1, 1, 1, 'No Hay Alma');

-- --------------------------------------------------------

--
-- Table structure for table `track_album`
--

CREATE TABLE IF NOT EXISTS `track_album` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `album_info` longtext,
  `album_art` varchar(150) DEFAULT NULL,
  `release_date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_track_album_login1` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `track_album`
--

INSERT INTO `track_album` (`id`, `name`, `album_info`, `album_art`, `release_date`, `status`, `login_id`) VALUES
(1, 'MyHits', 'This is an testing album.`', 'Can be used for anything.', '2013-10-10 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `track_comments`
--

CREATE TABLE IF NOT EXISTS `track_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commnet` longtext,
  `d_time` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_track_comments_login1` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `track_has_track_comments`
--

CREATE TABLE IF NOT EXISTS `track_has_track_comments` (
  `track_id` int(11) NOT NULL,
  `track_comments_id` int(11) NOT NULL,
  KEY `fk_track_has_track_comments_track_comments1` (`track_comments_id`),
  KEY `fk_track_has_track_comments_track1` (`track_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `t_deactivate`
--

CREATE TABLE IF NOT EXISTS `t_deactivate` (
  `entry_id` bigint(20) NOT NULL,
  `t_table_block` varchar(45) NOT NULL,
  `id_block` bigint(20) NOT NULL,
  `reason` longtext,
  `d_time` datetime NOT NULL,
  `till_date` datetime DEFAULT NULL,
  `fk_blockby` bigint(20) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `t_permision`
--

CREATE TABLE IF NOT EXISTS `t_permision` (
  `block_id` int(11) NOT NULL,
  `block_level` smallint(6) NOT NULL,
  `reason` longtext NOT NULL,
  `fk_type_id` smallint(6) NOT NULL,
  `d_time` datetime NOT NULL,
  `fk_blockby` bigint(20) NOT NULL,
  PRIMARY KEY (`block_id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` datetime NOT NULL,
  `browser_type` varchar(40) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userlog_login1` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `date_time`, `browser_type`, `ip_address`, `login_id`) VALUES
(1, '2013-10-06 05:58:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1),
(2, '2013-10-06 10:44:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1),
(3, '2013-10-06 13:34:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1),
(4, '2013-10-06 18:14:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1),
(5, '2013-10-06 18:55:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1),
(6, '2013-10-06 19:10:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1),
(7, '2013-10-06 19:29:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1),
(8, '2013-10-06 19:31:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1),
(9, '2013-10-07 06:21:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1),
(10, '2013-10-07 10:25:00', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_date` datetime NOT NULL,
  `mod_date` datetime DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `mobile` varchar(45) NOT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `gender` varchar(3) NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `passcode` varchar(45) DEFAULT NULL,
  `pass_question` varchar(150) NOT NULL,
  `pass_answer` varchar(100) NOT NULL,
  `pass_mod_date` datetime DEFAULT NULL,
  `login_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_details_login1` (`login_id`),
  KEY `fk_user_details_city1` (`city_id`),
  KEY `fk_user_details_country1` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 COMMENT='fan details table ' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `reg_date`, `mod_date`, `first_name`, `last_name`, `date_of_birth`, `mobile`, `zip`, `gender`, `image`, `status`, `passcode`, `pass_question`, `pass_answer`, `pass_mod_date`, `login_id`, `city_id`, `country_id`) VALUES
(1, '2013-10-05 11:45:00', '2013-10-06 13:36:00', 'Govind', 'Mantri', '1992-09-21 00:00:00', '919501335973', '331507', '1', '1381059383.jpg', 1, NULL, '', '', NULL, 1, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `fk_albums_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `art_details`
--
ALTER TABLE `art_details`
  ADD CONSTRAINT `fk_art_details_user_details1` FOREIGN KEY (`user_details_id`) REFERENCES `user_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_city_country1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `firstfan`
--
ALTER TABLE `firstfan`
  ADD CONSTRAINT `fk_firstfan_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `fk_like_track1` FOREIGN KEY (`track_id`) REFERENCES `track` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_like_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `myplaylist`
--
ALTER TABLE `myplaylist`
  ADD CONSTRAINT `fk_myplaylist_user_details1` FOREIGN KEY (`user_details_id`) REFERENCES `user_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `myplaylist_has_track`
--
ALTER TABLE `myplaylist_has_track`
  ADD CONSTRAINT `fk_myplaylist_has_track_myplaylist1` FOREIGN KEY (`myplaylist_id`) REFERENCES `myplaylist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_myplaylist_has_track_track1` FOREIGN KEY (`track_id`) REFERENCES `track` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `fk_photos_albums1` FOREIGN KEY (`albums_id`) REFERENCES `albums` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile_comments_has_login`
--
ALTER TABLE `profile_comments_has_login`
  ADD CONSTRAINT `fk_profile_comments_has_login_profile_comments1` FOREIGN KEY (`profile_comments_id`) REFERENCES `profile_comments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_comments_has_login_login2` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_comments_has_login_user_details1` FOREIGN KEY (`user_details_id`) REFERENCES `user_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `p_album_comments`
--
ALTER TABLE `p_album_comments`
  ADD CONSTRAINT `fk_p_album_comments_albums1` FOREIGN KEY (`albums_id`) REFERENCES `albums` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_p_album_comments_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rating_has_track`
--
ALTER TABLE `rating_has_track`
  ADD CONSTRAINT `fk_rating_has_track_rating1` FOREIGN KEY (`rating_id`) REFERENCES `rating` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rating_has_track_track1` FOREIGN KEY (`track_id`) REFERENCES `track` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rating_has_track_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `fk_track_genre1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_track_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_track_track_album1` FOREIGN KEY (`track_album_id`) REFERENCES `track_album` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `track_album`
--
ALTER TABLE `track_album`
  ADD CONSTRAINT `fk_track_album_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `track_comments`
--
ALTER TABLE `track_comments`
  ADD CONSTRAINT `fk_track_comments_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `track_has_track_comments`
--
ALTER TABLE `track_has_track_comments`
  ADD CONSTRAINT `fk_track_has_track_comments_track1` FOREIGN KEY (`track_id`) REFERENCES `track` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_track_has_track_comments_track_comments1` FOREIGN KEY (`track_comments_id`) REFERENCES `track_comments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `userlog`
--
ALTER TABLE `userlog`
  ADD CONSTRAINT `fk_userlog_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `fk_user_details_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_details_city1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_details_country1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
