<?php
    include_once 'Conexao.php';
    
    class Curso extends Conexao{
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
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
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
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
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
    }
?>