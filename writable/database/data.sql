SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `courses`;
DROP TABLE IF EXISTS `student`;

CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  `name` text NOT NULL,
  primary key (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `courses` (`id`, `code`, `name`) VALUES
(1, 'comp1111', 'Computers and You'),
(2, 'comp1112', 'Computers and Me'),
(3, 'comp1113', 'Computers and Him'),
(4, 'comp1114', 'Computers and Her'),
(5, 'comp1115', 'Computers and It'),
(6, 'comp1116', 'Computers and Dog');

CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first` text NOT NULL,
  `last` text NOT NULL,
  primary key (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `student` (`id`, `first`, `last`) VALUES
(1, 'John', 'Smith'),
(2, 'Jack', 'Smith'),
(3, 'James', 'Smith'),
(4, 'Jess', 'Smith'),
(5, 'Smith', 'Smith');

COMMIT;