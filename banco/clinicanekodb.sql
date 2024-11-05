CREATE DATABASE `clinicanekodb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
use clinicanekodb;

CREATE TABLE `endereco` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `cep` varchar(8) NOT NULL,
  `logradouro` varchar(80) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(25) NOT NULL,
   `complemento` varchar(60) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `tipo_endereco` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `email` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `cliente` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `categoria` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `marca` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `forma_pagamento` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `forma` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `especie` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `especialidade` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `telefone` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `numero` varchar(11) NOT NULL,
  `tipo` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `servico` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `setor` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `cargo` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_setor` int(7) NOT NULL,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cargo_setor` (`id_setor`),
  CONSTRAINT `fk_cargo_setor` FOREIGN KEY (`id_setor`) REFERENCES `setor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `raca` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_especie` int(7) NOT NULL,
  `nome` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_raca_especie` (`id_especie`),
  CONSTRAINT `fk_raca_especie` FOREIGN KEY (`id_especie`) REFERENCES `especie` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tipo_exame` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_especialidade` int(7) NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tipo_exame_especialidade` (`id_especialidade`),
  CONSTRAINT `fk_tipo_exame_especialidade` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidade` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `exame` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_tipo_exame` int(7) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_exame_tipo_exame` (`id_tipo_exame`),
  CONSTRAINT `fk_exame_tipo_exame` FOREIGN KEY (`id_tipo_exame`) REFERENCES `tipo_exame` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `usuario` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `id_setor` int(7) NOT NULL,
  `id_cargo` int(7) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `fk_func_setor` (`id_setor`),
  KEY `fk_func_cargo` (`id_cargo`),
  CONSTRAINT `fk_func_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`),
  CONSTRAINT `fk_func_setor` FOREIGN KEY (`id_setor`) REFERENCES `setor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `telefone_cliente` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_telefone` int(7) NOT NULL,
  `id_cliente` int(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_telefone_cliente_tel` (`id_telefone`),
  KEY `fk_telefone_cliente_cli` (`id_cliente`),
  CONSTRAINT `fk_telefone_cliente_cli` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `fk_telefone_cliente_tel` FOREIGN KEY (`id_telefone`) REFERENCES `telefone` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `telefone_usuario` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_telefone` int(7) NOT NULL,
  `id_usuario` int(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_telefone_usuario_tel` (`id_telefone`),
  KEY `fk_telefone_usuario_usu` (`id_usuario`),
  CONSTRAINT `fk_telefone_usuario_tel` FOREIGN KEY (`id_telefone`) REFERENCES `telefone` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_telefone_usuario_usu` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `produto` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(7) NOT NULL,
  `id_marca` int(7) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `data_validade` date NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `peso` decimal(4,2) DEFAULT NULL,
  `qtde_estoque` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produto_categoria` (`id_categoria`),
  KEY `fk_produto_marca` (`id_marca`),
  CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  CONSTRAINT `fk_produto_marca` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `estoque` (
  `id_produto` int(11) NOT NULL,
  `quantidade` decimal(10,2) NOT NULL,
  `data_ultimo_movimento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `fk_estoque_produto_idx` (`id_produto`),
  CONSTRAINT `fk_estoque_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `pedido` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(7) NOT NULL,
  `id_cliente` int(7) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `status` char(1) NOT NULL DEFAULT 'A',
  `desconto` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pedido_cliente` (`id_cliente`),
  KEY `fk_pedido_usuario` (`id_usuario`),
  CONSTRAINT `fk_pedido_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `vacina` (
  `id` int(7) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `paciente` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(7) NOT NULL,
  `id_raca` int(7) DEFAULT NULL,
  `nome` varchar(40) NOT NULL,
  `idade` int(2) DEFAULT NULL,
  `peso` decimal(5,3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_paciente_cliente` (`id_cliente`),
  KEY `fk_paciente_raca` (`id_raca`),
  CONSTRAINT `fk_paciente_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `fk_paciente_raca` FOREIGN KEY (`id_raca`) REFERENCES `raca` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `item_pedido` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(7) NOT NULL,
  `id_produto` int(7) NOT NULL,
  `valor_unit` decimal(10,2) NOT NULL,
  `quantidade` int(7) NOT NULL,
  `desconto` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_item_pedido_ped` (`id_pedido`),
  KEY `fk_item_pedido_prod` (`id_produto`),
  CONSTRAINT `fk_item_pedido_ped` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`),
  CONSTRAINT `fk_item_pedido_prod` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `agendamento` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(7) NOT NULL,
  `id_paciente` int(7) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `status` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_agendamento_paciente` (`id_paciente`),
  KEY `fk_agendamento_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_agendamento_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`),
  CONSTRAINT `fk_agendamento_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `consulta` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_especialidade` int(7) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_consulta_especialidade` (`id_especialidade`),
  CONSTRAINT `fk_consulta_especialidade` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidade` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `cirurgia` (
  `id` int(7) NOT NULL,
  `id_especialidade` int(7) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` decimal(7,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_especialidade_cirurgia_idx` (`id_especialidade`),
  CONSTRAINT `fk_especialidade_cirurgia` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `agendamento_consulta` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_agendamento` int(7) NOT NULL,
  `id_consulta` int(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_agendamento_consulta_agend` (`id_agendamento`),
  KEY `fk_agendamento_consulta_consult` (`id_consulta`),
  CONSTRAINT `fk_agendamento_consulta_agend` FOREIGN KEY (`id_agendamento`) REFERENCES `agendamento` (`id`),
  CONSTRAINT `fk_agendamento_consulta_consult` FOREIGN KEY (`id_consulta`) REFERENCES `consulta` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `agendamento_exame` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_agendamento` int(7) NOT NULL,
  `id_exame` int(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_agendamento_exame_agend` (`id_agendamento`),
  KEY `fk_agendamento_exame_exame` (`id_exame`),
  CONSTRAINT `fk_agendamento_exame_agend` FOREIGN KEY (`id_agendamento`) REFERENCES `agendamento` (`id`),
  CONSTRAINT `fk_agendamento_exame_exame` FOREIGN KEY (`id_exame`) REFERENCES `exame` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `agendamento_servico` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_agendamento` int(7) NOT NULL,
  `id_servico` int(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_agendamento_servico_agenda` (`id_agendamento`),
  KEY `fk_agendamento_servico_serv` (`id_servico`),
  CONSTRAINT `fk_agendamento_servico_agenda` FOREIGN KEY (`id_agendamento`) REFERENCES `agendamento` (`id`),
  CONSTRAINT `fk_agendamento_servico_serv` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `agendamento_cirurgia` (
  `id` int(7) NOT NULL,
  `id_agendamento` int(7) NOT NULL,
  `id_cirurgia` int(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_agendamento_cirurgia_agend_idx` (`id_agendamento`),
  KEY `fk_agendamento_cirurgia_cirurgia_idx` (`id_cirurgia`),
  CONSTRAINT `fk_agendamento_cirurgia_agend` FOREIGN KEY (`id_agendamento`) REFERENCES `agendamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendamento_cirurgia_cirurgia` FOREIGN KEY (`id_cirurgia`) REFERENCES `cirurgia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `endereco_cliente` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_endereco` int(7) NOT NULL,
  `id_cliente` int(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_endereco_cliente_end` (`id_endereco`),
  KEY `fk_endereco_cliente_cli` (`id_cliente`),
  CONSTRAINT `fk_endereco_cliente_cli` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `fk_endereco_cliente_end` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `endereco_usuario` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_endereco` int(7) NOT NULL,
  `id_usuario` int(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_endereco_usuario_end` (`id_endereco`),
  KEY `fk_endereco_usuario_usu` (`id_usuario`),
  CONSTRAINT `fk_endereco_usuario_end` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_usuario_usu` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `pagamento` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(7) NOT NULL,
  `id_formapgto` int(7) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pagamento_pedido_idx` (`id_pedido`),
  KEY `id_pagamento_formapgto_idx` (`id_formapgto`),
  CONSTRAINT `id_pagamento_formapgto` FOREIGN KEY (`id_formapgto`) REFERENCES `forma_pagamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_pagamento_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_agendamento_insert`(
spid_funcionario int,
spid_paciente int,
spdata date,
sphora time,
spstatus char(1)
)
BEGIN
	insert into agendamento
    values(0,
    spid_funcionario, 
    spid_paciente,
    spdata,
    sphora,
    spstatus);
    select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_agendamento_update`(
spid int,
spid_funcionario int,
spid_paciente int,
spdata date,
sphora time,
spstatus char(1)
)
BEGIN
	update agendamento set id_funcionario = spid_funcionario,
    id_paciente = spid_paciente,
    data = spdata,
    hora = sphora,
    status = spstatus where id = spid;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cargo_delete`(
spid int
)
BEGIN
	delete from cargo where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cargo_insert`(
spsetor_id int,
spnome varchar(20)
)
BEGIN
	insert into cargo 
    values(0,
    spsetor_id,
    spnome);
	select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cargo_update`(
spid int,
spsetor_id int,
spnome varchar(20)
)
BEGIN
	update cargo 
    set id_setor = spsetor_id,
    nome = spnome where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_categoria_delete`(
spid int
)
BEGIN
	delete from categoria where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_categoria_insert`(
spnome varchar(30)
)
BEGIN
	insert into categoria 
    values(0,
    spnome);
	select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_categoria_update`(
spid int,
spnome varchar(30)
)
BEGIN
	update categoria set nome = spnome where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cliente_insert`(
spnome varchar(40),
spcpf varchar(11),
spdata_nascimento date , 
spemail varchar(50)
)
BEGIN
	insert into cliente
    values(0,
    spnome, 
    spcpf, 
    spdata_nascimento,
    spemail);
	select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cliente_update`(
spid int,
spnome varchar(40),
spdata_nascimento date,
spemail varchar(50)
)
BEGIN
	update cliente
    set nome = spnome,
    data_nascimento = spdata_nascimento,
    email = spemail
    where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consulta_insert`(
spid_especialidade int,
spid_funcionario int,
spvalor decimal(6,2)
)
BEGIN
	insert into consulta 
    values(0,
    spid_especialidade,
    spid_funcionario,
    spvalor);
    select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consulta_update`(
spid int,
spid_especialidade int,
spid_funcionario int,
spvalor decimal(6,2)
)
BEGIN
	update consulta set id_especialidade = spid_especialidade,
    id_funcionario = spid_funcionario,
    valor = spvalor where id = spid;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_email_insert`(
spemail varchar(50)
)
BEGIN
	insert into email
    values(0,
    spemail
    );
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_email_update`(
spid int,
spemail varchar(50)
)
BEGIN
	update email
    set email = spemail where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_endereco_delete`(spid int)
begin
delete from endereco
where id = spid;
end$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_endereco_insert`(
    spcep char(8), 
    splogradouro varchar(100),
    spnumero varchar(40),
    spcomplemento varchar(60),
    spbairro varchar(60),
    spcidade varchar(60),
    spuf char(2),
    sptipo_endereco char(3)
    )
begin
		insert into enderecos 
        values 
        (0,
        spcep, 
        splogradouro, 
        spnumero, 
        spcomplemento, 
        spbairro, 
        spcidade, 
        spuf, 
        sptipo_endereco);
        select @@identity as id;
    end$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_endereco_update`(
spid int,
spcep char(8),
splogradouro varchar(100),
spnumero varchar(40),
spcomplemento varchar(60),
spbairro varchar(60),
spcidade varchar(60),
spuf char(2),
sptipo_endereco char(3)
)
BEGIN
	update enderecos set cep = spcep,
    logradouro = splogradouro,
    numero = spnumero,
    complemento = spcomplemento,
    bairro = spbairro,
    cidade = spcidade,
    uf = spuf,
    tipo_endereco = sptipo_endereco
    where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_especialidade_insert`(
spnome varchar(40)
)
BEGIN
	insert into especialidade
    values(0,
    spnome);
    select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_especialidade_update`(
spid int,
spnome varchar(40)
)
BEGIN
	update especialidade 
    set nome = spnome where id = spid;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_especie_insert`(
spnome varchar(40)
)
BEGIN
	insert into especie
    values(0,
    spnome);
	select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_especie_update`(
spid int,
spnome varchar(40)
)
BEGIN
	update especie
    set nome = spnome where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_exame_insert`(
spid_tipo_exame int,
spid_funcionario int,
spnome varchar(30),
spvalor decimal(6,2)
)
BEGIN
	insert into exame
    values(0,
    spid_tipo_exame,
    spid_funcionario,
    spnome,
    spvalor
    );
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_exame_update`(
spid int,
spid_tipo_exame int,
spid_funcionario int,
spnome varchar(30)
)
BEGIN
	update exame
    set id_tipo_exame = spid_tipo_exame,
    id_funcionario = spid_funcionario,
    nome = spnome where id = spid;
END$$
DELIMITER ;


DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_itempedido_delete`(spid int)
begin
	delete from item_pedido
    where id = spid;
end$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_itempedido_insert`(
spid_pedido int, 
spid_produto int,
spquantidade int, 
spdesconto decimal(10,2))
begin
	insert into item_pedido
    values 
    (0, 
    spid_pedido, 
    spid_produto, 
    (select valor from produto where id = spid_produto), 
    spquantidade, 
    spdesconto);
    select last_insert_id();
end$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_itempedido_update`(
spid int,
spquantidade int, 
spdesconto decimal(10,2))
begin
	update item_pedido set quantidade = spquantidade, desconto = spdesconto
    where id = spid;
end$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_marca_delete`(
spid int
)
BEGIN
	delete from marca where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_marca_insert`(
spnome varchar(30)
)
BEGIN
	insert into marca
    values(0,
    spnome);
	select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_marca_update`(
spid int,
spnome varchar(30)
)
BEGIN
	update marca
    set nome = spnome where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_paciente_insert`(
spid_cliente int,
spid_especie int,
spid_raca int,
spnome varchar(40),
spidade int,
sppeso decimal(5,3)
)
BEGIN
	insert into paciente
    values(0,
	spid_cliente,
    spid_especie,
    spid_raca,
    spnome,
    spidade,
    sppeso);
    select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_paciente_update`(
spid int,
spid_cliente int,
spid_especie int,
spid_raca int,
spnome varchar(40),
spidade int,
sppeso decimal(5,3)
)
BEGIN
	update paciente
    set id_cliente = spid_cliente,
    id_especie = spid_especie,
    id_raca = spid_raca,
    nome = spnome,
    idade = spidade,
    peso = sppeso;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagamento_insert`(
spid_pedido int, 
spid_formapgto int,
spvalor decimal(10,2)
)
begin
	insert into pagamento
    values 
    (0, 
    spid_pedido, 
    spid_formapgto, 
    spvalor);
end$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagamento_update`(
spid int,
spid_formapgto int
)
begin
	update pagamento set id_formapgto = spid_formapgto where id = spid;
end$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pedido_insert`(
spid_usuario int,
spid_cliente int,
spdata datetime
)
BEGIN
	insert into pedido
    values(0,
    spid_usuario,
    spid_cliente,
    now()
);
    select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pedido_update`(
spid int,
spid_usuario int,
spid_cliente int,
spdata datetime,
spstatus char(1),
spdesconto decimal(6,2)
)
BEGIN
	update pedido
    set id_usuario = spid_usuario,
    id_cliente = spid_cliente,
    data = spdata,
    status = spstatus,
    desconto = spdesconto where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_produto_insert`(
spid_categoria int,
spid_marca int,
spnome varchar(30),
spdescricao varchar(100),
spdata_validade date,
spvalor decimal(6,2),
sppeso int,
spqtde_estoque int
)
BEGIN
	insert into produto
	values(0,
    spid_categoria,
    spid_marca,
    spnome,
    spdescricao,
    spdata_validade,
    spvalor,
    sppeso,
    spqtde_estoque);
    select last_insert_id();    
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_produto_update`(
spid int,
spid_categoria int,
spid_marca int,
spnome varchar(30),
spdescricao varchar(100),
spdata_validade date,
spvalor decimal(6,2),
sppeso int,
spqtde_estoque int
)
BEGIN
	update produto
	set id_categoria = spid_categoria,
    id_marca = spid_marca,
    nome = spnome,
    descricao = spdescricao,
    data_validade = spdata_validade,
    valor = spvalor,
    peso = sppeso,
    qtde_estoque = spqtde_estoque where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_raca_insert`(
spid_especie int,
spnome varchar(40)
)
BEGIN
	insert into raca
    values(0,
    spid_especie,
    spnome);
	select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_raca_update`(
spid int,
spid_especie int,
spnome varchar(40)
)
BEGIN
	update raca
    set id_especie = spid_especie,
    nome = spnome where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_servico_insert`(
spnome varchar(30),
spvalor decimal(6,2)
)
BEGIN
	insert into servico
    values(0,
    spnome,
    spvalor);
    select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_servico_update`(
spid int,
spnome varchar(30),
spvalor decimal(6,2)
)
BEGIN
	update servico 
    set nome = spnome,
    valor = spvalor where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_setor_delete`(
spid int
)
BEGIN
	delete from setor where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_setor_insert`(
spnome varchar(20)
)
BEGIN
	insert into setor 
    values(0,
    spnome);
	select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_setor_update`(
spid int,
spnome varchar(20)
)
BEGIN
	update setor set nome = spnome where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_telefone_delete`(
spid int
)
BEGIN
	delete from telefone where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_telefone_insert`(
spnumero varchar(11),
sptipo varchar(3)
)
BEGIN
	insert into telefone
    values(0,
    spnumero,
    sptipo
    );
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_telefone_update`(
spid int,
spnumero varchar(11),
sptipo varchar(3)
)
BEGIN
	update telefone set numero = spnumero,
    tipo = sptipo where id = spid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuario_insert`(
spnome varchar(40),
spcpf varchar(11),
spdata_nascimento date,
spid_setor int,
spid_cargo int,
spemail varchar(50),
spsenha varchar(32)
)
BEGIN
	insert into usuario
    values(0,
    spnome, 
    spcpf,
    spdata_nascimento,
    spid_setor,
    spid_cargo,
    spemail,
    md5(spsenha),
    1);
    select last_insert_id();
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuario_update`(
spid int,
spnome varchar(40),
spdata_nascimento date,
spid_setor int,
spid_cargo int,
spsenha varchar(32)
)
BEGIN
	update usuario
    set nome = spnome, 
    data_nascimento = spdata_nascimento,
    id_setor = spid_setor,
    id_cargo = spid_cargo, 
    senha = md5(spsenha) where id = spid;
END$$
DELIMITER ;
