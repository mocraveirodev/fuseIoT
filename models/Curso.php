<?php
    include_once 'Conexao.php';
    
    class Curso extends Conexao{
        public function cadastrarCurso($curso,$sobrenome,$email){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO usuarios (nome,sobrenome,email) VALUES (?,?,?)");
            return $query->execute([$curso,$sobrenome,$email]);
        }
        
        public function recuperaUsuario($email){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM usuarios WHERE email = :email");
            $query->bindValue(":email", $email);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function listarUsuarios(){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM usuarios");
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function alteraSenha($email,$senha){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE usuarios SET senha = :senha WHERE email = :email");
            $query->bindValue(":email", $email);
            $query->bindValue(":senha", $senha);
            $resultado = $query->execute();
            return $resultado;
        }

        public function ultimoLogin($email){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE usuarios SET ultimo_login = CURRENT_TIMESTAMP WHERE email = :email");
            $query->bindValue(":email", $email);
            $resultado = $query->execute();
            return $resultado;
        }
        public function deletarUsuario($id){
            $db = parent::criarConexao();
            $query = $db->prepare("DELETE FROM usuarios WHERE id = :id");
            $query->bindValue(":id", $id);
            $resultado = $query->execute();
            return $resultado;
        }

        public function alteraUsuario($id,$nome,$sobrenome,$email){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE usuarios SET nome = :nome, sobrenome = :sobrenome, email = :email, WHERE id = :id");
            $query->bindValue(":id", $id);
            $query->bindValue(":nome", $nome);
            $query->bindValue(":sobrenome", $sobrenome);
            $query->bindValue(":email", $email);
            $resultado = $query->execute();
            return $resultado;
        }

        public function cadastrarProgresso($id){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO progresso (nome,sobrenome,email) VALUES (?,?,?)");
            return $query->execute([$nome,$sobrenome,$email]);
        }
    }
?>

<!-- create database fuseiot;

use fuseiot;

create table usuarios(
	id_usuario int primary key auto_increment,
    nome varchar(50) not null,
    sobrenome varchar(100) not null,
    email varchar(100) not null unique,
    senha varchar(100),
    cpf varchar(15),
    data_nascimento date,
    telefone varchar(20),
	profissao varchar(50),
	endereco varchar(100),
    numero smallint,
	complemento varchar(50),
	bairro varchar(50),
	cidade varchar(50),
	estado varchar(50),
	cep varchar(10),
    criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

create table login(
	id_login int primary key auto_increment,
    id_usuario int not null,
    login DATETIME not null
);

create table cursos(
	id_curso int primary key auto_increment,
    nome_curso varchar(50) not null,
    qtd_aulas smallint not null,
    duracao time
);

create table aulas(
	id_aula int primary key auto_increment,
    id_curso int not null,
    nome_aula varchar(50) not null,
    nro_aula int not null,
    id_video varchar(15) not null,
    material_apoio bool not null,
    duracao time
);

create table comentarios(
	id_comentario int primary key auto_increment,
    id_curso int not null,
    id_aula int not null,
    id_usuario int not null,
    comentario varchar(1000) not null
);

create table respostas(
	id_resposta int primary key auto_increment,
    id_comentario int not null,
    id_curso int not null,
    id_aula int not null,
    id_usuario int not null,
    resposta varchar(1000) not null
);

create table anotacoes(
	id_anotacao int primary key auto_increment,
    id_usuario int not null,
    anotacao text
);

INSERT INTO usuarios (nome,sobrenome,email) VALUES ("Monica","Craveiro de Menezes","monica.craveiro@fuseiot.io");

INSERT INTO cursos (nome_curso,qtd_aulas) VALUES ("Conceitos Básicos",4);
INSERT INTO cursos (nome_curso,qtd_aulas) VALUES ("Conceitos de Hardware",5);
INSERT INTO cursos (nome_curso,qtd_aulas) VALUES ("Conceitos de Software",6);
INSERT INTO cursos (nome_curso,qtd_aulas) VALUES ("Conectividade",3);
INSERT INTO cursos (nome_curso,qtd_aulas) VALUES ("Segurança",3);
INSERT INTO cursos (nome_curso,qtd_aulas) VALUES ("Arquitetura - Cases",3);
INSERT INTO cursos (nome_curso,qtd_aulas) VALUES ("Legislação",3);
INSERT INTO cursos (nome_curso,qtd_aulas) VALUES ("Negócios",4);

INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (1,"História do IoT",1,"TDVm_vcgOec",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (1,"Casos de uso",2,"R_zZ-I8tq4M",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (1,"Eletrônica básica - I",3,"kt-mOH4tYhc",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (1,"Telecom - Conectividade",4,"XpscPnFAQHU",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (2,"Eletrônica básica – II",1,"Dr2Uzz6Hpck",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (2,"Processadores e Controladores",2,"Vr8-BjvtRZw",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (2,"Tipos de transmissão sem fio",3,"6W0OaDsatSo",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (2,"Kits de Desenvolvimento",4,"TDVm_vcgOec",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (2,"Arquitetura",5,"R_zZ-I8tq4M",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (3,"Noções de programação",1,"kt-mOH4tYhc",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (3,"Principais linguagens utilizadas",2,"kt-mOH4tYhc",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (3,"Software Embarcado",3,"XpscPnFAQHU",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (3,"EdgeComputing",4,"Dr2Uzz6Hpck",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (3,"Cloud e Blockchain",5,"Vr8-BjvtRZw",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (3,"Plataformas",6,"6W0OaDsatSo",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (4,"Conceitos de: LoRa, SigFox, NB-IoT, 2G, 3G, 4G e 5G, Zigbee, WiFi, BLE, NFC, RFiD, Satélite, UHF, Ultrasom",1,"TDVm_vcgOec",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (4,"Protocolos",2,"R_zZ-I8tq4M",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (4,"Codecs",3,"kt-mOH4tYhc",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (5,"LGPD",1,"XpscPnFAQHU",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (5,"CiberSegurança",2,"Dr2Uzz6Hpck",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (5,"Criptografia",3,"Vr8-BjvtRZw",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (6,"Avaliação de cenários",1,"6W0OaDsatSo",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (6,"Criação de ecossistemas",2,"TDVm_vcgOec",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (6,"Infraestrutura",3,"R_zZ-I8tq4M",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (7,"Propriedade Intelectual",1,"kt-mOH4tYhc",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (7,"Homologação Anatel, Everynet, Inmetro, ONA, JCI, ANVISA e etc.",2,"XpscPnFAQHU",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (7,"Frequências Licenciadas e Não-Licenciadas",3,"Dr2Uzz6Hpck",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (8,"Modelo CAPEX e OPEX",1,"Vr8-BjvtRZw",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (8,"Modelo SaaS e PaaS",2,"6W0OaDsatSo",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (8,"CX e UX",3,"TDVm_vcgOec",true);
INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (8,"ROI",4,"R_zZ-I8tq4M",true);

SELECT * FROM fuseiot.usuarios;
SELECT * FROM fuseiot.login;
SELECT * FROM fuseiot.cursos;
SELECT * FROM fuseiot.aulas;
SELECT * FROM fuseiot.comentarios;
SELECT * FROM fuseiot.respostas;
SELECT * FROM fuseiot.anotacoes;

ALTER TABLE cursos CHANGE id id_curso int;

ALTER TABLE usuarios DROP COLUMN ultimo_login;

alter table usuarios modify column cpf varchar(15);
alter table usuarios add data_nascimento date;
alter table usuarios add telefone varchar(20);
alter table usuarios add profissao varchar(50);
alter table usuarios add endereco varchar(100);
alter table usuarios add complemento varchar(50);
alter table usuarios add bairro varchar(50);
alter table usuarios add cidade varchar(50);
alter table usuarios add estado varchar(50);
alter table usuarios add cep varchar(10);
alter table usuarios add numero smallint;

ALTER TABLE usuarios MODIFY COLUMN criado_em TIMESTAMP AFTER numero;
ALTER TABLE usuarios MODIFY COLUMN ultimo_login DATETIME AFTER criado_em;
ALTER TABLE usuarios MODIFY COLUMN numero smallint AFTER endereco;-->

