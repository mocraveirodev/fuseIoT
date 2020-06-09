<?php
    include_once 'Conexao.php';
    
    class Usuario extends Conexao{
        public function cadastrarUsuario($nome,$sobrenome,$email){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO usuarios (nome,sobrenome,email) VALUES (?,?,?)");
            return $query->execute([$nome,$sobrenome,$email]);
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

        public function alteraUsuario($id,$nome,$sobrenome,$email,$cpf,$data_nascimento,$telefone,$profissao,$endereco,$numero,$complemento,$bairro,$cidade,$estado,$cep){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE usuarios SET nome = :nome, sobrenome = :sobrenome, email = :email, cpf = :cpf, data_nascimento = :data_nascimento, telefone = :telefone, profissao = :profissao, endereco = :endereco, numero = :numero, complemento = :complemento, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep WHERE id_usuario = :id");
            $query->bindValue(":id", $id);
            $query->bindValue(":nome", $nome);
            $query->bindValue(":sobrenome", $sobrenome);
            $query->bindValue(":email", $email);
            $query->bindValue(":cpf", $cpf);
            $query->bindValue(":data_nascimento", $data_nascimento);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":profissao", $profissao);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":numero", $numero);
            $query->bindValue(":complemento", $complemento);
            $query->bindValue(":bairro", $bairro);
            $query->bindValue(":cidade", $cidade);
            $query->bindValue(":estado", $estado);
            $query->bindValue(":cep", $cep);
            $resultado = $query->execute();
            return $resultado;
        }

        public function deletarUsuario($id){
            $db = parent::criarConexao();
            $query = $db->prepare("DELETE FROM usuarios WHERE id_usuario = :id");
            $query->bindValue(":id", $id);
            $resultado = $query->execute();
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

        public function ultimoLogin($id){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO login (id_usuario, login) VALUES (:id,CURRENT_TIMESTAMP)");
            $query->bindValue(":id", $id);
            $resultado = $query->execute();
            return $resultado;
        }

        public function cadastrarProgresso($id,$progresso){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO progresso (id_usuario,progresso) VALUES (:id,:progresso)");
            $query->bindValue(":id", $id);
            $query->bindValue(":progresso", $progresso);
            $resultado = $query->execute();
            return $resultado;
        }

        public function recuperaProgresso($id_usuario){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM progresso WHERE id_usuario = :id_usuario");
            $query->bindValue(":id_usuario", $id_usuario);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function alteraProgresso($id_usuario,$progresso){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE progresso SET progresso = :progresso WHERE id_usuario = :id_usuario");
            $query->bindValue(":id_usuario", $id_usuario);
            $query->bindValue(":progresso", $progresso);
            $resultado = $query->execute();
            return $resultado;
        }

        public function cadastrarCurso($nome_curso,$qtd_aulas){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO cursos (nome_curso,qtd_aulas) VALUES (:nome_curso,:qtd_aulas)");
            $query->bindValue(":nome_curso", $nome_curso);
            $query->bindValue(":qtd_aulas", $qtd_aulas);
            $resultado = $query->execute();
            return $resultado;
        }

        public function recuperaCurso($id_curso){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM cursos WHERE id_curso = :id_curso");
            $query->bindValue(":id_curso", $id_curso);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function listarCursos(){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM cursos");
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function alteraCurso($id_curso,$nome_curso,$qtd_aulas){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE cursos SET nome_curso = :nome_curso, qtd_aulas = :qtd_aulas WHERE id_curso = :id_curso");
            $query->bindValue(":id_curso", $id_curso);
            $query->bindValue(":nome_curso", $nome_curso);
            $query->bindValue(":qtd_aulas", $qtd_aulas);
            $resultado = $query->execute();
            return $resultado;
        }

        public function deletarCurso($id_curso){
            $db = parent::criarConexao();
            $query = $db->prepare("DELETE FROM cursos WHERE id_curso = :id_curso");
            $query->bindValue(":id_curso", $id_curso);
            $resultado = $query->execute();
            return $resultado;
        }
        
        public function cadastrarAula($id_curso,$nome_aula,$nro_aula,$id_video,$material_apoio){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO aulas (id_curso,nome_aula,nro_aula,id_video,material_apoio) VALUES (:id_curso,:nome_aula,:nro_aula,:id_video,:material_apoio)");
            $query->bindValue(":id_curso", $id_curso);
            $query->bindValue(":nome_aula", $nome_aula);
            $query->bindValue(":nro_aula", $nro_aula);
            $query->bindValue(":id_video", $id_video);
            $query->bindValue(":material_apoio", $material_apoio);
            $resultado = $query->execute();
            return $resultado;
        }

        public function recuperaAula($id_aula){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM aulas WHERE id_aula = :id_aula");
            $query->bindValue(":id_aula", $id_aula);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function listarAulas(){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM aulas");
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function alteraAula($id_aula,$id_curso,$nome_aula,$nro_aula,$id_video,$material_apoio){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE aulas SET id_curso = :id_curso, nome_aula = :nome_aula, nro_aula = :nro_aula, id_video = :id_video, material_apoio = :material_apoio WHERE id_aula = :id_aula");
            $query->bindValue(":id_aula", $id_aula);
            $query->bindValue(":nome_aula", $nome_aula);
            $query->bindValue(":nro_aula", $nro_aula);
            $query->bindValue(":id_video", $id_video);
            $query->bindValue(":material_apoio", $material_apoio);
            $resultado = $query->execute();
            return $resultado;
        }

        public function deletarAula($id_aula){
            $db = parent::criarConexao();
            $query = $db->prepare("DELETE FROM aulas WHERE id_aula = :id_aula");
            $query->bindValue(":id_aula", $id_aula);
            $resultado = $query->execute();
            return $resultado;
        }

        public function cadastrarComentario($id_curso,$id_aula,$id_usuario,$comentario){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO comentarios (id_curso,id_aula,id_usuario,comentario) VALUES (:id_curso,:id_aula,:id_usuario,:comentario)");
            $query->bindValue(":id_curso", $id_curso);
            $query->bindValue(":id_aula", $id_aula);
            $query->bindValue(":id_usuario", $id_usuario);
            $query->bindValue(":comentario", $comentario);
            $resultado = $query->execute();
            return $resultado;
        }

        public function recuperaComentario($id_aula){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM comentarios WHERE id_aula = :id_aula");
            $query->bindValue(":id_aula", $id_aula);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function listarComentarios(){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM comentarios");
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function alteraComentario($id_comentario,$id_curso,$id_aula,$id_usuario,$comentario){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE comentarios SET id_curso = :id_curso, id_aula = :id_aula, id_usuario = :id_usuario, comentario = :comentario WHERE id_comentario = :id_comentario");
            $query->bindValue(":id_comentario", $id_comentario);
            $query->bindValue(":id_curso", $id_curso);
            $query->bindValue(":id_aula", $id_aula);
            $query->bindValue(":id_usuario", $id_usuario);
            $query->bindValue(":comentario", $comentario);
            $resultado = $query->execute();
            return $resultado;
        }

        public function deletarComentario($id_comentario){
            $db = parent::criarConexao();
            $query = $db->prepare("DELETE FROM respostas WHERE id_comentario = :id_comentario");
            $query->bindValue(":id_comentario", $id_comentario);
            $resultado[] = $query->execute();
            $query = $db->prepare("DELETE FROM comentarios WHERE id_comentario = :id_comentario");
            $query->bindValue(":id_comentario", $id_comentario);
            $resultado[] = $query->execute();
            return $resultado;
        }

        public function cadastrarResposta($id_comentario,$id_curso,$id_aula,$id_usuario,$resposta){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO respostas (id_comentario,id_curso,id_aula,id_usuario,resposta) VALUES (:id_comentario,:id_curso,:id_aula,:id_usuario,:resposta)");
            $query->bindValue(":id_comentario", $id_comentario);
            $query->bindValue(":id_curso", $id_curso);
            $query->bindValue(":id_aula", $id_aula);
            $query->bindValue(":id_usuario", $id_usuario);
            $query->bindValue(":resposta", $resposta);
            $resultado = $query->execute();
            return $resultado;
        }

        public function recuperaResposta($id_aula){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM respostas WHERE id_aula = :id_aula");
            $query->bindValue(":id_aula", $id_aula);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function listarRespostas(){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM respostas");
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function alteraResposta($id_resposta,$id_comentario,$id_curso,$id_aula,$id_usuario,$resposta){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE id_resposta SET id_comentario = :id_comentario, id_curso = :id_curso, id_aula = :id_aula, id_usuario = :id_usuario, resposta = :resposta WHERE id_resposta = :id_resposta");
            $query->bindValue(":id_resposta", $id_resposta);
            $query->bindValue(":id_comentario", $id_comentario);
            $query->bindValue(":id_curso", $id_curso);
            $query->bindValue(":id_aula", $id_aula);
            $query->bindValue(":id_usuario", $id_usuario);
            $query->bindValue(":resposta", $resposta);
            $resultado = $query->execute();
            return $resultado;
        }

        public function deletarResposta($id_resposta){
            $db = parent::criarConexao();
            $query = $db->prepare("DELETE FROM respostas WHERE id_resposta = :id_resposta");
            $query->bindValue(":id_resposta", $id_resposta);
            $resultado = $query->execute();
            return $resultado;
        }

        public function cadastrarAnotacao($id_usuario,$anotacao){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO anotacoes (id_usuario,anotacao) VALUES (:id_usuario,:anotacao)");
            $query->bindValue(":id_usuario", $id_usuario);
            $query->bindValue(":anotacao", $anotacao);
            $resultado = $query->execute();
            return $resultado;
        }

        public function recuperaAnotacao($id_usuario){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM anotacoes WHERE id_usuario = :id_usuario");
            $query->bindValue(":id_usuario", $id_usuario);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function alteraAnotacao($id_usuario,$anotacao){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE anotacoes SET anotacao = :anotacao WHERE id_usuario = :id_usuario");
            $query->bindValue(":id_usuario", $id_usuario);
            $query->bindValue(":anotacao", $anotacao);
            $resultado = $query->execute();
            return $resultado;
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
ALTER TABLE usuarios MODIFY COLUMN numero smallint AFTER endereco; -->

<!-- $date = date("Y-m-d", strtotime($_GET['birthdate'])); //converte para tipo date
mysqli_query($conexao, "INSERT INTO tabela (birthday) VALUES ($date)"); -->