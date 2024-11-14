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
  `nome` varchar(100) NOT NULL,
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


CREATE TABLE `exame` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_especialidade` int(7) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_exame_tipo_exame` (`id_especialidade`),
  CONSTRAINT `fk_especialidade` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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
	`imagem` varchar(100) NOT NULL,
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
  `cor` varchar(30) DEFAULT NULL,
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
  `status` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `fk_agendamento_paciente` (`id_paciente`),
  KEY `fk_agendamento_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_agendamento_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`),
  CONSTRAINT `fk_agendamento_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


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
  `id` int(7) NOT NULL AUTO_INCREMENT,
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
spid_usuario int,
spid_paciente int,
spdata date,
sphora time
)
BEGIN
	insert into agendamento
    values(0,
    spid_usuario, 
    spid_paciente,
    spdata,
    sphora,
    default);
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
spemail varchar(50),
spsenha varchar(32)
)
BEGIN
	insert into cliente
    values(0,
    spnome, 
    spcpf, 
    spdata_nascimento,
    spemail,
    md5(spsenha));
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
spid_especialidade int,
spnome varchar(30),
spvalor decimal(6,2)
)
BEGIN
	insert into exame
    values(0,
    spid_especialidade,
    spnome,
    spvalor
    );
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_exame_update`(
spid int,
spid_especialidade int,
spnome varchar(30),
spvalor decimal(6,2)
)
BEGIN
	update exame
    set id_especialidade = spid_especialidade,
    nome = spnome,
    valor = spvalor where id = spid;
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
spid_raca int,
spnome varchar(40),
spcor varchar(30),
spidade int,
sppeso decimal(5,3)
)
BEGIN
	insert into paciente
    values(0,
	spid_cliente,
    spid_raca,
    spnome,
    spcor,
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
spid_cliente int
)
BEGIN
	insert into pedido
    values(0,
    spid_usuario,
    spid_cliente,
    default, 'A', 0
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
sppeso int
)
BEGIN
	update produto
	set id_categoria = spid_categoria,
    id_marca = spid_marca,
    nome = spnome,
    descricao = spdescricao,
    data_validade = spdata_validade,
    valor = spvalor,
    peso = sppeso where id = spid;
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
spid_cargo int
)
BEGIN
	update usuario
    set nome = spnome, 
    data_nascimento = spdata_nascimento,
    id_setor = spid_setor,
    id_cargo = spid_cargo 
    where id = spid;
END$$
DELIMITER ;

insert into setor(nome) values ('Administração'); 
insert into setor(nome) values ('Veterinário'); 
insert into setor(nome) values ('Vendas'); 
insert into setor(nome) values ('Serviços'); 

insert into cargo(id_setor, nome) values (1, 'Gerente'); 
insert into cargo(id_setor, nome) values (1, 'Financeiro'); 
insert into cargo(id_setor, nome) values (1, 'Recursos Humanos'); 
insert into cargo(id_setor, nome) values (1, 'Marketing'); 

insert into cargo(id_setor, nome) values (2, 'Veterinário Geral'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Odontologista'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Oncologista'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Ortopedista'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Dermatologista'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Oftalmologista'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Cardiologista'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Urologista'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Neurologista'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Infectologista'); 
insert into cargo(id_setor, nome) values (2, 'Veterinário Diagnóstico'); 
insert into cargo(id_setor, nome) values (2, 'Cirurgião Veterinário'); 
insert into cargo(id_setor, nome) values (2, 'Auxiliar Veterinário'); 
insert into cargo(id_setor, nome) values (3, 'Recepcionista'); 
insert into cargo(id_setor, nome) values (3, 'Caixa - Atendente '); 
insert into cargo(id_setor, nome) values (4, 'Adestrador'); 
insert into cargo(id_setor, nome) values (4, 'Banho e Tosa'); 
insert into cargo(id_setor, nome) values (4, 'Cuidador'); 

INSERT INTO usuario (nome, cpf, data_nascimento, id_setor, id_cargo, email, senha, ativo) VALUES  
('Kenji Kimura','12345678900', '1980-01-15', 1, 1, 'kimura.kenji@gmail.com', md5('123456'), 1),  
('Kida Kimura','23456789011', '1985-03-22', 1, 2, 'kimura.kida@gmail.com', md5('123456'), 1),  
('Sheila Neves','34567890122', '1990-06-10', 1, 3, 'sheilanev@gmail.com', md5('123456'), 1),  
('Luana Marques','45678901233', '1992-08-30', 1, 4, 'luana1986@ gmail.com', md5('123456'), 1),  
('Poliana Padilha','56789012344', '1987-11-07', 2, 5, 'ppadilha@gmail.com', md5('123456'), 1),  
('Luísa Kimura','56779012341', '1987-11-25', 2, 5, 'kimura.luisa@gmail.com', md5('123456'), 1),  
('Rebecca Macedo','67890123455', '1991-02-19', 2, 5, 'rebeccamac@gmail.com', md5('123456'), 1),  
('Beatriz Costa','89012345677', '1993-04-13', 2, 17, 'biacosta1998@gmail.com', md5('123456'), 1),  
('Fabiana Almeida','90123456788', '1994-09-17', 2, 17, 'almeidafabi79@gmail.com', md5('123456'), 1),  
('Victor Hugo','01234567899', '1995-12-28', 2, 17, 'vichugo@gmail.com', md5('123456'), 1),  
('Felipe Carvalho','12345678001', '1984-05-09', 2, 17, 'lipecarvalho@gmail.com', md5('123456'), 1),  
('Daniel Santos','23456789112', '1988-10-14', 2, 6, 'danielsantos@gmail.com', md5('123456'), 1),  
('Tatiane Souza','34567890223', '1996-01-20', 2, 7, 'tatisouza@gmail.com', md5('123456'), 1),  
('Roberta Martins','45678901334', '1981-03-29', 2, 8, 'robertama@gmail.com', md5('123456'), 1),  
('Marcia Ferreira','56789012445', '1997-07-02', 2, 9, 'ffmarcia8@gmail.com', md5('123456'), 1),  
('Isaque Nobrega','67890123556', '1998-09-21', 2, 10, 'inobrega@gmail.com', md5('123456'), 1),  
('Emily Gonzaga','78901234667', '1986-11-30', 2, 11, 'gonzagaemily2010@gmail.com', md5('123456'), 1),  
('Wesley Silva','89012345778', '1992-06-06', 2, 12, 'wesley.sil.va@gmail.com', md5('123456'), 1),  
('Luana Cardoso','90123456889', '1989-12-12', 2, 13, 'cardoso.luana@gmail.com', md5('123456'), 1),  
('Alicia Correia','01234567990', '1993-04-01', 2, 14, 'aliciacorreia12@gmail.com', md5('123456'), 1),  
('Gregório Casa','12345678111', '1985-08-19', 2, 15, 'drcasa@gmail.com', md5('123456'), 1),  
('Carlos Almeida','23456789222', '1991-03-15', 2, 16, 'carlos.a.almeida@gmail.com', md5('123456'), 1),  
('Marcela Costa','34567890333', '1982-11-23', 2, 16, 'marcosta@gmail.com', md5('123456'),1),  
('Leandro Ribeiro','45678901444', '1997-10-09', 2, 16, 'ribleandrinho@gmail.com', md5('123456'), 1),  
('Priscilla Carvalho','56789012555', '1990-05-27', 2, 17, 'pricarv@gmail.com', md5('123456'), 1 ),  
('Vinicius Correia','26489012555', '1990-05-27', 2, 17, 'vinicor12@gmail.com', md5('123456'), 1 ),  
('Pedro Oliveira','63889012555', '1990-05-27', 2, 17, 'peoliveira@gmail.com', md5('123456'), 1 ),  
('Lilian Souza','46489012555', '1990-05-27', 2, 17, 'pricarv@gmail.com', md5('123456'), 1 ); 

INSERT INTO marca (nome) VALUES 
('PetCare Plus'), 
('VetBest Solutions'), 
('FurEver Friends'), 
('Paws & Claws'), 
('HealthyPets'), 
('PawPrints Veterinary'), 
('TopPet Supplies'), 
('Animal Wellness'), 
('HappyTails Veterinary'), 
('FourLegged Friends'); 

INSERT INTO categoria (nome) VALUES 
('Remédios'), 
('Saúde'), 
('Higiene e Limpeza'), 
('Rações e Petiscos'), 
('Brinquedos'), 
('Acessórios'), 
('Roupas e Camas'), 
('Casinhas e Transporte'); 

INSERT INTO produto (id_categoria, id_marca, nome, descricao, data_validade, valor, peso, qtde_estoque) VALUES  
(1, 1, 'Antipulgas', 'Produto para controle de pulgas em cães e gatos.', '2025-12-31', 49.99, 0.15, 100),  
(1, 1, 'AntiCarrapatos', 'Produto para eliminação de carrapatos em pets.', '2025-11-30', 39.99, 0.20, 150),  
(1, 6, 'Vermífugo', 'Medicamento para controle de vermes em cães e gatos.', '2025-10-15', 29.99, 0.10, 200),  
(1, 6, 'Anti-Inflamatório', 'Medicamento anti-inflamatório para pets.', '2025-09-30', 59.99, 0.25, 80),  
(1, 6, 'AntiParasitas', 'Tratamento para controle de parasitas em geral.', '2025-08-31', 45.99, 0.18, 120),  
(1, 6, 'Antibiótico', 'Antibiótico para infecções em pets.', '2025-07-20', 69.99, 0.30, 90),  
(2, 5, 'Vitaminas', 'Suplemento vitamínico para pets.', '2025-06-30', 25.99, 0.12, 250),  
(2, 5, 'Suplementos', 'Suplementos diversos para saúde dos animais.', '2025-05-15', 34.99, 0.20, 110),  
(2, 5, 'Tratamento para Pele', 'Produto para tratamento de problemas de pele em pets.', '2025-04-30', 54.99, 0.22, 130),  
(3, 7, 'Tapete Higiênico', 'Tapete higiênico para cães.', '2025-12-31', 19.99, 0.50, 300),  
(3, 9, 'Aromatizante', 'Produto aromatizante para ambientes com pets.', '2025-11-30', 14.99, 0.10, 200),  
(3, 9, 'Eliminador de Odor', 'Eliminador de odor para ambientes com pets.', '2025-10-15', 21.99, 0.15, 180),  
(3, 8, 'Escova para Pelos', 'Escova para remoção de pelos em cães e gatos.', '2025-09-30', 9.99, 0.30, 150),  
(2, 8, 'Repelentes', 'Repelente de insetos para pets.', '2025-08-31', 27.99, 0.20, 140),  
(3, 7, 'Areia Higiênica', 'Areia higiênica para gatos.', '2025-12-31', 12.99, 1.00, 250),  
(3, 7, 'Caixa de Areia', 'Caixa de areia para gatos.', '2025-11-30', 29.99, 2.00, 100),  
(3, 10, 'Shampoo', 'Shampoo especial para pets.', '2025-12-31', 24.99, 0.50, 140),  
(3, 10, 'Condicionador', 'Condicionador para pelos de pets.', '2025-11-30', 27.99, 0.60, 130),  
(3, 8, 'Hidratante', 'Hidratante para pele de pets.', '2025-10-15', 22.99, 0.40, 160),  
(3, 8, 'Sabonete', 'Sabonete para higiene de pets.', '2025-09-30', 15.99, 0.20, 170),  
(4, 4, 'Ração Seca para Cães', 'Ração seca para alimentação de cães.', '2025-12-31', 89.99, 5.00, 200),  
(4, 4, 'Ração Úmida para Cães', 'Ração úmida para alimentação de cães.', '2025-11-30', 99.99, 3.00, 180),  
(4, 4, 'Ração Seca para Gatos', 'Ração seca para alimentação de gatos.', '2025-10-15', 79.99, 4.50, 190),  
(4, 4, 'Ração Úmida para Gatos', 'Ração úmida para alimentação de gatos.', '2025-09-30', 89.99, 2.50, 170),  
(4, 4, 'Biscoitos para Cães', 'Biscoitos saborosos para cães.', '2025-08-31', 14.99, 0.25, 300),  
(4, 4, 'Ossinhos para Cães', 'Ossinhos crocantes para cães.', '2025-07-20', 19.99, 0.30, 280),  
(4, 4, 'Bifinhos para Gatos', 'Bifinhos saborosos para gatos.', '2025-06-30', 17.99, 0.15, 320),  
(5, 10, 'Pato de Pelucia', 'Brinquedo de pelúcia em formato de pato.', '2025-12-31', 29.99, 0.35, 150),  
(5, 10, 'Bola', 'Bola para diversão de cães e gatos.', '2025-11-30', 12.99, 0.20, 200),  
(5, 10, 'Fresbee', 'Fresbee para brincar com cães.', '2025-10-15', 19.99, 0.25, 180),  
(5, 10, 'Mordedor', 'Mordedor para cães.', '2025-09-30', 15.99, 0.30, 170),  
(5, 10, 'Peixinho de Pelucia', 'Brinquedo de pelúcia em formato de peixinho.', '2025-08-31', 25.99, 0.30, 160),  
(5, 10, 'Ratinho de Borracha', 'Brinquedo de borracha em formato de ratinho.', '2025-07-20', 14.99, 0.20, 190),  
(6, 7, 'Bebedouro', 'Bebedouro para cães e gatos.', '2025-06-30', 22.99, 1.00, 130),  
(6, 7, 'Comedouro', 'Comedouro para cães e gatos.', '2025-05-15', 19.99, 0.80, 140),  
(6, 7, 'Coleira', 'Coleira para cães e gatos.', '2025-12-31', 18.99, 0.15, 200),  
(6, 7, 'Guia', 'Guia para passeios com cães.', '2025-11-30', 15.99, 0.20, 180),  
(6, 7, 'Peitoral', 'Peitoral para cães.', '2025-10-15', 24.99, 0.25, 170),  
(7, 3, 'Roupas de Inverno', 'Roupas para pets em dias frios.', '2025-09-30', 29.99, 0.50, 160),  
(7, 8, 'Almofadas', 'Almofadas confortáveis para pets.', '2025-12-31', 34.99, 0.70, 140),  
(7, 8, 'Caminhas', 'Caminhas macias para pets.', '2025-11-30', 49.99, 1.20, 130),  
(6, 8, 'Cobertores', 'Cobertores quentes para pets.', '2025-10-15', 39.99, 1.00, 120),  
(8, 9, 'Caixa de Transporte Plástico Médio', 'Caixa de transporte plástico de tamanho médio.', '2025-09-30', 79.99, 2.50, 90),  
(8, 9, 'Caixa de Transporte Plástico Pequena', 'Caixa de transporte plástico de tamanho pequeno.', '2025-08-31', 59.99, 1.80, 100),  
(8, 9, 'Bolsa de Transporte Pano Médio', 'Bolsa de transporte de pano de tamanho médio.', '2025-07-20', 69.99, 1.50, 85),  
(8, 9, 'Bolsa de Transporte Pano Pequeno', 'Bolsa de transporte de pano de tamanho pequeno.', '2025-06-30', 49.99, 1.00, 95),  
(8, 9, 'Casinha de Madeira Grande', 'Casinha de madeira grande para pets.', '2025-12-31', 149.99, 5.00, 40),  
(8, 9, 'Casinha de Plástico Grande', 'Casinha de plástico grande para pets.', '2025-10-15', 129.99, 4.50, 45); 

INSERT INTO servico (nome, valor) VALUES 
('Banho e Tosa', 60.00), 
('Hospedagem', 70.00), 
('Adestramento', 80.00), 
 ('Vacinação', 100.00), 
('Microchipagem', 250.00); 

INSERT INTO especialidade (nome) VALUES 
('Odontologia'), 
('Oncologia'), 
('Ortopedia'),
('Dermatologia'), 
('Oftalmologia'), 
('Cardiologia'), 
('Urologia'), 
('Neurologia'), 
('Infectologia'), 
('Diagnóstico'), 
('Clinica Geral'); 

INSERT INTO especie (nome) VALUES 
('Cão'), 
('Gato'); 
  
INSERT INTO raca (id_especie, nome) VALUES 
(1, 'Labrador Retriever'), 
(1, 'Poodle'), 
(1, 'Shih Tzu'), 
(1, 'Bulldog Francês'), 
(1, 'Golden Retriever'), 
(1, 'Beagle'), 
(1, 'Schnauzer'), 
(1, 'Dachshund'), 
(1, 'Yorkshire Terrier'), 
(1, 'Pug'), 
(1, 'Boxer'), 
(1, 'Chihuahua'), 
(1, 'Pomeranian'), 
(1, 'Dálmata'), 
(1, 'Border Collie'), 
(1, 'Buldogue'), 
(1, 'Pastor Alemão'), 
(1, 'Pit Bull'), 
(1, 'Rottweiler'), 
(1, 'Cavalier King Charles Spaniel'), 
(1, 'São Bernardo'), 
(1, 'Husky Siberiano'), 
(1, 'Pastor Australiano'), 
(1, 'Maltês'), 
(1, 'Jack Russell Terrier'), 
(1, 'Basset Hound'), 
(1, 'Shiba Inu'), 
(1, 'Akita'), 
(1, 'Lhasa Apso'), 
(1, 'Pequinês'), 
(1, 'Bichon Frise'), 
(1, 'Schnauzer Miniatura'), 
(1, 'West Highland White Terrier'), 
(1, 'Cocker Spaniel Inglês'), 
(1, 'Cocker Spaniel Americano'), 
(1, ' Spaniel Anão Continental'), 
(1, 'Boston Terrier'), 
(1, 'Saluki'), 
(1, 'Greyhound'), 
(1, 'Cães de Água Português'), 
(2, 'Siamês'), 
(2, 'Persa'), 
(2, 'Maine Coon'), 
(2, 'Bengal'), 
(2, 'Sphynx'), 
(2, 'British Shorthair'), 
(2, 'Abissínio'), 
(2, 'Ragdoll'), 
(1, 'SRD'),  
(2, 'SRD'), 
(2, 'Exótico de Pelo Curto'); 

INSERT INTO exame(id_especialidade, nome, valor) 
VALUES 
(1, 'Radiografia Arcada Superior', 120.00), 
(1, 'Radiografia Arcada Inferior', 120.00), 
(3, 'Radiografia Caudal', 130.00), 
(3, 'Radiografia Ventral', 130.00), 
(3, 'Radiografia Palmar/Plantar', 130.00), 
(3, 'Radiografia Frontal', 130.00), 
(4, 'Citologia Aspirativa', 90.00), 
(4, 'Cultura de fungos', 100.00), 
(4, 'Cultura bacteriana', 100.00), 
(4, 'Ectoparasitas', 130.00),
(4, 'Teste Alérgico', 180.00), 
(6, 'Eletrocardiograma', 200.00), 
(6, 'Ecocardiograma', 200.00), 
(7, 'Urina Tipo 1', 80.00), 
(7, 'Ureia e Creatinina', 80.00), 
(7, 'Urocultura com Antibiograma', 90.00), 
(8, 'Tomografia Computadorizada', 450.00), 
(8, 'Ressonância Magnética', 400.00), 
(8, 'Eletroencefalograma', 500.00), 
(8, 'Ultrassonografia Craniana', 280.00), 
(8, 'Radiografia Craniana', 150.00), 
(9, 'Sorológico para Leishmaniose', 180.00), 
(9, 'Sorológico para FIV e FELV', 180.00), 
(9, 'Sorológico para Parvovirose', 180.00), 
(9, 'Sorológico para Cinomose', 180.00), 
(9, 'Sorológico para Hepatite', 180.00), 
(10, 'Histopatológico', 200.00), 
(10, 'Biópsia', 230.00), 
(11, 'Hemograma Completo', 150.00), 
(11, 'Ultrassonografia Abdominal', 230.00), 
(11, 'Glicemia', 130.00), 
(11, 'Colesterol Total', 130.00), 
(11, 'Ácido Fólico', 150.00); 

INSERT INTO consulta (id_especialidade, nome,  valor)VALUES 
(1, 'Consulta Odontológica', 120.00), 
(2, 'Consulta Oncológica', 120.00), 
(3, 'Consulta Ortopédica', 120.00), 
(4, 'Consulta Dermatológica', 120.00), 
(5, 'Consulta Oftalmológica', 120.00), 
(6, 'Consulta Cardiológica', 120.00), 
(7, 'Consulta de Urologia', 120.00), 
(8, 'Consulta Neurológica', 120.00), 
(9, 'Consulta de Infectologia', 120.00), 
(10, 'Consulta de Diagnóstico', 120.00), 
(11, 'Consulta Clinica Geral', 80.00);

INSERT INTO cliente (nome, cpf, data_nascimento, email, senha) VALUES 
('Ana Souza', '12345678901', '1985-02-20', 'aninhasouza@gmail.com', md5('12345')),
('Carlos Oliveira', '23456789012', '1992-07-11', 'carlosoliveira@gmail.com', md5('12345')),
('Maria Santos', '34567890123', '1980-12-05', 'mariasantos@gmail.com', md5('12345')),
('Pedro Lima', '45678901234', '1995-03-30', 'pedrolima@gmail.com', md5('12345')),
('Juliana Costa', '56789012345', '1993-08-15', 'julianacosta@gmail.com', md5('12345')),
('Roberto Almeida', '67890123456', '1987-06-25', 'robertoalmeida@gmail.com', md5('12345')),
('Fernanda Martins', '78901234567', '1991-11-10', 'fernandamartins@gmail.com', md5('12345')),
('Lucas Pereira', '89012345678', '1989-04-17', 'lucaspereira@gmail.com', md5('12345')),
('Mariana Silva', '9013456789', '1994-09-22', 'marianasilva@gmail.com', md5('12345')),
('Gabriel Fernandes', '01234567890', '1990-01-05', 'gabrielfernandes@gmail.com', md5('12345')),
('Patrícia Rocha', '12345678012', '1983-10-12', 'patriciarocha@gmail.com', md5('12345')),
('Felipe Gomes', '23456789123', '1996-02-28', 'felipegomes@gmail.com', md5('12345')),
('Claudia Lima', '34567890234', '1982-07-19', 'claudialima@gmail.com', md5('12345')),
('Eduardo Oliveira', '45678901345', '1988-05-09', 'eduardooliveira@gmail.com', md5('12345')),
('Isabela Martins', '56789012456', '1997-12-30', 'isabelamartins@gmail.com', md5('12345'));
