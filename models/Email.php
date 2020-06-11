<?php
    include_once 'Conexao.php';
    
    class Email extends Conexao{
        public function logEnvio($nome,$email,$telefone,$empresa,$mensagem,$enviado,$msg_log){
            $db = parent::criarConexao();

            $query = $db->prepare("INSERT INTO logemail (nome,email,telefone,empresa,mensagem,enviado,msg_log) VALUES (:nome,:email,:telefone,:empresa,:mensagem,:enviado,:msg_log)");
            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":empresa", $empresa);
            $query->bindValue(":mensagem", $mensagem);
            $query->bindValue(":enviado", $enviado);
            $query->bindValue(":msg_log", $msg_log);
            $resultado = $query->execute();

            return $resultado;
        }
    }
?>