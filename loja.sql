-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2017 às 21:38
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `valor` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `valor`) VALUES
(1, 'Notebook - i7 3.0, 500Gb HD, 15\"', '2450.50'),
(2, 'Notebook - i5 2.5, 500Gb HD, 14\"', '1985.25'),
(3, 'Notebook - i3 2.0, 250Gb HD, 12\"', '1489.30'),
(10, 'Mouse padrao', '32.50'),
(12, 'Teclado - 102 teclas', '45.00'),
(15, 'Mouse wireless', '88.90'),
(17, 'Monitor 24\"', '850.33'),
(18, 'Filtro de linha', '12.66'),
(19, 'Nobreak 100W', '200.40'),
(22, 'Mousepad', '18.90'),
(25, 'Monitor 20\"', '700.40'),
(35, 'Fonte 50W', '100.10'),
(319, 'Teclado Gamer MultimÃ­dia Pcyes Ark USB 7 Cores de LED Abnt2', '169.00'),
(320, 'Headset VOID Stereo Preto P2 para PC e PS4 CORSAIR', '300.00'),
(321, 'Monitor Gamer LED 21,5\" AOC 75Hz 1ms Full HD G2260VWQ6', '650.00'),
(322, 'Notebook Dell Inspiron i15-5567-A30B Intel Core i5 8GB (AMD Radeon R7 M445 de 2GB) 1TB Tela LED 15,6\" Windows 10 - Branco', '2800.00'),
(323, 'CÃ¢mera De AÃ§Ã£o Sport HD, Tela De LCD 2\" 5MP + CartÃ£o 16GB Prata Mirage - MR3000', '149.00'),
(324, 'Smart TV LED 43\" AOC LE43U7970 Ultra HD 4k com Conversor Digital 3 HDMI 2 USB Wi-Fi Sleep timer 60hz Preta', '1849.00'),
(325, 'CÃ¢mera de SeguranÃ§a Infravermelho Interna e Externa Elgin Bullet AHD Branca', '209.00'),
(326, 'Smart TV LED 75\" Samsung 4K Premium com Conversor Digital', '12300.00'),
(327, 'Placa MÃ£e ASUS Intel', '489.00'),
(328, 'Notebook Dell Inspiron i14-7460-A40S 7Âª GeraÃ§Ã£o Intel Core i7 16GB 1TB+128SSD Placa vÃ­deo 4GB Win10', '4389.00'),
(329, 'Notebook Samsung Expert X22s Intel Core i5 8GB 1TB Tela LED HD 14\" Windows 10 - Cinza', '2594.00'),
(333, 'MacBook Pro Retina Apple 13,3\", 8GB, Prata, SSD 256GB, Intel Core i5 Dual Core', '12509.00'),
(337, 'Computador Intel Core i3 4GB 1TB Meu PC Ubuntu', '1498.00'),
(339, 'Computador Gamer Neologic NLI68705 Intel Core i5-7400 8GB (Gtx 1050Ti 4GB) 1TB + Monitor 21,5\"', '3549.00'),
(340, 'IMac MMQA2BZ/A com Intel Core i5 Dual Core 8GB 1TB 21.5\' Prata - Apple', '6459.00'),
(343, 'All in One Dell 7Âª GeraÃ§Ã£o Intel Core i3 4GB 1TB LED 23.8 Full HD Linux Branco', '3063.00'),
(345, 'Monitor LED 29\" Gamer LG 29UM69G Full HD', '1249.00'),
(347, 'Monitor Curvo LED 34\" Gamer LG 34UC79-G IPS Ultrawide Full HD', '3229.00'),
(350, 'Monitor LED 23,5\" AOC Full HD Widescreen M2470SWD2', '625.00'),
(355, 'Roteador Wireless Tp-Link Archer C60 Dual Band Ac1350', '229.00'),
(356, 'Roteador Wireless Tp-Link TL-WR840N 300Mbps 2.4Ghz Duas Antenas', '64.00'),
(357, 'Roteador Wireless D-Link DIR-615 N 300Mbps Duas Antenas 5dBi Modo Repetidor', '65.00'),
(358, 'Roteador TP-Link TL-WR841HP 300 Mbps', '178.00'),
(359, 'Teclado Gaming ABNT LED MecÃ¢nico USB 700K Cherry Red Cougar', '589.00'),
(360, 'Teclado - Usb - Microsoft Natural Ergonomic Keyboard 4000 - Preto - B2m-00012', '489.00'),
(361, 'Combo Mouse e Teclado Wireless Logitech MK220', '88.00'),
(366, 'Placa De VÃ­deo Asus Geforce Gtx 1060 Dual-Gtx1060-O3g, 3gb, Gddr5, 192 Bits', '1184.00'),
(367, 'Placa Mae Gigabyte Micro Atx (1151) Ddr4 - Ga-h110m-h - 6Âª Ger', '1184.00'),
(368, 'Placa de Video GTX970 4GB G1 Gaming DDR5 PCI-E Gigabyte GV-N970G1 GAMING-4GD', '2649.00'),
(369, 'Placa mÃ£e AM4 - AsRock AB350M-HDV (Micro ATX)', '409.00'),
(370, 'Prcessador Intel Core i7-7700k Kaby Lake LGA 1151 4.2GHZ 8MB cache', '1520.00'),
(371, 'MEMORIA CORSAIR VENGEANCE LPX PRETO 4GB (1X4) ', '351.00'),
(372, 'PROCESSADOR AMD FX-8300 BLACK EDITION 3.3GHZ SOCKET AM3+ OCTA-CORE', '454.00'),
(373, 'MEMORIA KINGSTON HYPERX FURY 4GB (1X4) 1600MHZ WHITE, HX316C10FW/4 - BOX', '204.00'),
(374, 'FONTE CORSAIR CX430 430W 80 PLUS BRONZE, CP-9020046-WW', '233.00'),
(375, 'WATER COOLER CORSAIR HYDRO SERIES H75, CW-9060015-WW - BOX', '407.00'),
(376, 'COOLER PARA PROCESSADOR COOLER MASTER BLIZZARD T2, RR-T2-22FP-R1', '65.00'),
(377, 'FONTE CORSAIR RM550 550W MODULAR, CERTIFICADO 80PLUS GOLD, PFC ATIVO', '726.00'),
(378, 'Home Theater Blu-ray 3D LG 1000w Lhb645n', '1849.00'),
(379, 'Home Theater Blu-Ray 3D Samsung HT-F4505 500W 5.1 Canais Full HD HDMI USB RÃ¡dio FM', '679.00'),
(380, 'Ipad 32GB Wi-Fi Tela 9,7\" CÃ¢mera 8MP Prata - Apple', '2999.00'),
(381, 'Tablet Samsung Galaxy Tab S3 32GB 4G Tela 9.7\" Quad-Core 2.15 GHz - Prata', '2499.00'),
(382, 'iPad Pro Cellular 128GB Wi-Fi 4G Tela Retina 9,7\" Dourado - Apple', '5999.00'),
(383, 'Tablet Samsung Galaxy Tab E T560 8GB Wi-Fi Tela 9.6\" Android 4.4 Quad-Core - Preto', '779.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ativo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `ativo`) VALUES
(1, 'João da Silva', 'joaosilva', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Maria Ribeiro', 'mariarib', '900150983cd24fb0d6963f7d28e17f72', 1),
(8, 'Renato Augusto', 'renato', '4954ba84a2af4a82f414bb48b0350944', 1),
(12, 'Rogério Pereira', 'rogerio', '900150983cd24fb0d6963f7d28e17f72', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
