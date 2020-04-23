
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE `PersonalCalendar`;


CREATE TABLE `notas` (
  `texto` varchar(60) NOT NULL,
  `dataNota` date NOT NULL,
  `idNota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `usuario` (
  `nome_do_usuario` varchar(60) NOT NULL,
  `id` int(4) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`idNota`);


ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `notas`
  MODIFY `idNota` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `usuario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;


ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`idNota`) REFERENCES `usuario` (`id`);
COMMIT;

