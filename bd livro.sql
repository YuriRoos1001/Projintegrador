SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `livros` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `resumo` varchar(1000) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `lançamento` varchar(100) NOT NULL,
  `paginas` numeric(4) NOT NULL,
  `capa` varchar(1000) NOT NULL,
  `fundo` varchar(1000) NOT NULL
)

INSERT INTO `livros` (`id`, `titulo`, `resumo`,`editora`,`autor`,`lançamento`,`paginas`,`capa`,`fundo`) VALUES
(1, 'Todo esse tempo','Kyle e Kimberly sempre foram o par perfeito... até à noite do baile de finalistas. Kimberly termina tudo com Kyle, e o mundo dele desaba, literalmente. Têm um acidente de carro, Kimberly morre e Kyle, apesar de sobreviver, sofre de uma lesão cerebral. Não há mesmo ninguém que possa compreender o que é viver tudo isto. Até ao dia em que surge Marley. Marley também está a lidar com uma perda que julga ser culpa sua. E, quando os seus caminhos se cruzam, Kyle vê em Marley tudo o que sente e não consegue dizer. Kyle e Marley apoiam-se, tentam ultrapassar as suas perdas, e é então que o que sentem um pelo outro começa a mudar, a crescer e a ficar cada vez mais forte. Mas Kyle não consegue parar de pensar que, a qualquer momento, tudo pode desabar outra vez. E a verdade é que pode... e vai acontecer.','Editorial Presença','Rachael Lippincott, Mikki Daughtry','29 de setembro de 2020', 352 ,'https://m.media-amazon.com/images/I/715zhDUgi3L._AC_UF1000,1000_QL80_.jpg','https://1.bp.blogspot.com/-JAu5pKhmnAM/YAWYmsOeniI/AAAAAAAANKY/04tre6IgW9Q87iYBoy2JggnT4lrb1loBACLcBGAsYHQ/s1500/0c432839-ccfb-43c5-b038-65a0e9544eb8.jpg');

ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);
