<?php
    //Classe exclusiva para conexao com o BD
    class Conexao{
        private $host = 'mysql:host=50.62.209.154;dbname=fuseiot;port=3306'; //Caminho do BD
        private $user = 'user_fuse'; //Username
        private $pass = 'kg3It8$8'; //senha

        //Metodo para realizar a conexao
        protected function criarConexao(){
            return new PDO($this->host,$this->user,$this->pass);
        }
    }
?>