-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Abr-2019 às 03:38
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(3) NOT NULL,
  `cat_nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nome`) VALUES
(1, 'PHP'),
(2, 'Empreendedorismo'),
(3, 'Marketing'),
(4, 'Design'),
(5, 'Inovação'),
(6, 'Gestão de projetos'),
(7, 'Games'),
(8, 'Games'),
(9, 'Games'),
(10, 'Games'),
(12, 'Games'),
(13, 'Games'),
(14, 'Games');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `post_id` int(4) NOT NULL,
  `post_cat_id` int(3) NOT NULL,
  `post_nome` varchar(100) NOT NULL,
  `post_autor` varchar(100) NOT NULL,
  `post_data` date NOT NULL,
  `post_conteudo` text NOT NULL,
  `post_imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_nome`, `post_autor`, `post_data`, `post_conteudo`, `post_imagem`) VALUES
(1, 1, 'EU AMO PHP', 'Daniela Verissimo', '2019-04-15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel justo pellentesque, tincidunt quam ut, mollis lacus. Integer scelerisque tempus ultrices. Cras eget orci fringilla, rutrum sem quis, aliquet lacus. Fusce nisl magna, fringilla ut leo id, aliquam convallis felis. Aenean ut tincidunt nibh. Nulla eget convallis lacus. Curabitur tempor sodales dolor et imperdiet. Phasellus pulvinar massa odio, id luctus erat ultricies quis. Aliquam erat volutpat. Sed ultrices tortor sed nibh gravida, id venenatis mauris viverra. Integer aliquet nulla justo, eu blandit nisi iaculis non. Mauris placerat semper libero in blandit. Duis semper velit tortor, ut cursus urna consequat eget.\r\n\r\nIn ac cursus est. Vestibulum dictum a risus at sodales. Nullam nec ullamcorper arcu. Duis ultrices, nisi sit amet iaculis sagittis, risus velit venenatis nulla, vel tristique mauris ante vitae massa. Proin a elit interdum, convallis erat quis, vestibulum nunc. Cras id faucibus nisl, id porttitor libero. Nulla facilisi. Vivamus vitae massa nec lectus gravida pellentesque ut ac augue. Vestibulum quis lectus nulla. Phasellus ornare ex vel enim blandit dapibus.\r\n\r\nAenean et arcu nisl. Duis dui velit, feugiat non placerat mollis, dapibus et augue. Aenean euismod ipsum vitae quam euismod, facilisis imperdiet sem posuere. Vivamus dignissim consequat ante sit amet gravida. Suspendisse volutpat, nunc sed placerat lobortis, risus turpis sodales sem, sed congue metus nunc ac sapien. Aliquam ligula mauris, malesuada quis feugiat vel, malesuada et arcu. Vivamus lacus sapien, convallis tempor leo in, maximus malesuada magna. Sed fringilla non purus suscipit sollicitudin. Duis vitae ligula feugiat, pretium justo vitae, pulvinar magna. Donec sapien magna, imperdiet quis ante quis, efficitur finibus nisi. Praesent efficitur turpis at elit bibendum iaculis. Phasellus non mattis lectus, sagittis bibendum dolor. Praesent vel leo eget risus ornare bibendum quis et dolor.', 'php.jpg'),
(2, 2, 'Abrindo nova empresa', 'Daniela Verissimo', '2019-04-14', 'Nam ut lectus hendrerit elit venenatis rutrum. In eget sagittis arcu, eget suscipit quam. In hac habitasse platea dictumst. Fusce elementum libero eu massa tempus volutpat. Nullam rhoncus enim quis ante scelerisque, nec eleifend ex vulputate. Cras vel turpis blandit, fringilla odio non, malesuada justo. Ut in erat lobortis, varius lorem quis, mattis quam. Donec fringilla nibh vel nisi faucibus tincidunt. Integer luctus libero purus, a rhoncus erat porta eget. Etiam facilisis velit justo, id lacinia purus semper vel. Nunc quis aliquam sem. Pellentesque ut sagittis mi. Mauris at bibendum magna, at rutrum urna. Sed eu semper sapien, id mattis nibh. Donec sit amet tempor magna.\r\n\r\nNam ut lectus hendrerit elit venenatis rutrum. In eget sagittis arcu, eget suscipit quam. In hac habitasse platea dictumst. Fusce elementum libero eu massa tempus volutpat. Nullam rhoncus enim quis ante scelerisque, nec eleifend ex vulputate. Cras vel turpis blandit, fringilla odio non, malesuada justo. Ut in erat lobortis, varius lorem quis, mattis quam. Donec fringilla nibh vel nisi faucibus tincidunt. Integer luctus libero purus, a rhoncus erat porta eget. Etiam facilisis velit justo, id lacinia purus semper vel. Nunc quis aliquam sem. Pellentesque ut sagittis mi. Mauris at bibendum magna, at rutrum urna. Sed eu semper sapien, id mattis nibh. Donec sit amet tempor magna.\r\n\r\nFusce varius, sem nec convallis condimentum, dolor justo bibendum arcu, id dapibus erat arcu quis nulla. Sed iaculis finibus pharetra. Duis eleifend odio et tortor faucibus, id ornare augue sollicitudin. In augue felis, ultricies id nisl a, congue bibendum sapien. Donec a aliquam odio. Proin et elit ullamcorper, ornare tellus quis, tempus diam. Pellentesque dictum enim vitae diam sodales dictum. Fusce interdum interdum mi vitae consectetur. Suspendisse sed egestas arcu. Curabitur interdum ultrices nisi, et suscipit dui feugiat non. Morbi aliquet bibendum felis at accumsan. Morbi quis magna nec ipsum maximus sagittis. Suspendisse vitae mauris a lacus efficitur tempor. Vivamus sed risus augue. Morbi at pretium lectus. Vestibulum et massa pretium, tincidunt leo sit amet, gravida nisi.', 'empreendedorismo.jpg'),
(3, 3, 'Marketing: tudo sobre!', 'Daniela Verissimo', '2019-04-10', 'Cras nunc eros, posuere eget pulvinar et, feugiat non massa. Praesent efficitur magna eu erat blandit rhoncus. Phasellus sit amet vulputate lacus. Nam molestie diam faucibus, eleifend velit a, fringilla neque. Etiam et egestas tortor. Praesent vehicula nibh in urna hendrerit, sed auctor massa rhoncus. Aenean sit amet mi pharetra, tincidunt augue in, ultrices augue. Maecenas velit metus, bibendum et felis quis, aliquet pretium arcu.\r\nMauris pharetra ultrices sem non faucibus. Suspendisse rhoncus luctus mauris ac ultricies. In quis velit id ante viverra molestie et ac magna. Nam tristique tellus in volutpat viverra. Nam at lacus vel nisi tincidunt consectetur nec finibus nisl. Curabitur vel ornare ipsum. Nulla malesuada orci sit amet mauris blandit imperdiet.\r\n\r\nUt fringilla volutpat magna nec gravida. Etiam tincidunt gravida ex in tempor. Ut quis mi ultricies, semper mauris eget, mollis justo. Aenean rhoncus erat sit amet lectus viverra, vel egestas quam varius. Aenean quis tristique orci. Duis iaculis lorem vitae massa convallis eleifend. Ut non diam ipsum. Maecenas at feugiat massa. Cras molestie dictum enim ac faucibus.', 'marketing.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
