<?php
    session_start();

    include_once "models/Usuario.php";

    class UsuarioController{

        // Direcionando para a pagina correta
        public function acao($rotas){
            switch($rotas){
                case "login":
                    $this->loginUsuario();
                break;
                case "alterasenha":
                    $this->alteraSenha();
                break;
                case "novasenha":
                    $this->novaSenha();
                break;
                case "logout":
                    $this->deslogarUsuario();
                break;
            }
        }

        private function loginUsuario(){
            if(isset($_SESSION['usuario'])){
                    header('Location:/?homecurso');
            }

            if($_POST['confsenha']){
                $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
                $confsenha = $_POST['confsenha'];
                if(password_verify($confsenha,$senha)){
                    $db = new Usuario();
                    $altera = $db->alteraSenha($_SESSION['altera'],$senha);
                    if($altera){
                        $_SESSION['errologin'] = "Senha alterada com sucesso! Entre para ver o curso!";
                        $_SESSION['erroemail'] = "";
                        $_SESSION['errosenha'] = "";
                        $_SESSION['alterasenha'] = "";
                        header('Location:/?academy');
                    }else{
                        $_SESSION['errologin'] = "";
                        $_SESSION['erroemail'] = "";
                        $_SESSION['alterasenha'] = "senha";
                        $_SESSION['errosenha'] = "Senha não alterada! Tente de novo.";
                        header('Location:/?academy');
                    }
                }else{
                    $_SESSION['errologin'] = "";
                    $_SESSION['erroemail'] = "";
                    $_SESSION['alterasenha'] = "senha";
                    $_SESSION['errosenha'] = "Senha digitadas não conferem!";
                    header('Location:/?academy');
                }
            }else{
                $_SESSION = [];
                $this->logarUsuario();
            }
        }

        private function logarUsuario(){
            //Pegando dados do usuario
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            if($this->validaUsuario($email,$senha)){
                $db = new Usuario(); //instancia usuario
                $db->ultimoLogin($email);
                $_SESSION['usuario'] = $db->recuperaUsuario($email); //Coloca dados do usuario na superglobal
                $_SESSION['errologin'] = "";
                header('Location:/?homecurso');
            }else{
                $_SESSION['errologin'] = "Email e/ou senha incorretos!"; //Coloca mensagem de erro na superglobal
                header('Location:/?academy'); //direciona pra pagina de login
            }
        }

        private function validaUsuario($email,$senha){
            $db = new Usuario(); //instancia usuario

            $usuario = $db->recuperaUsuario($email); //Pega dados do usuario

            return password_verify($senha,$usuario->senha) ? true : false; //Valida se a senha esta correta

        }

        private function alteraSenha(){
            $_SESSION['alterasenha'] = "email"; //Coloca mensagem de erro na superglobal
            header('Location:/?academy');
        }

        private function novaSenha(){
            //Pegando dados do usuario
            $email = $_POST['email'];
            $db = new Usuario(); //instancia usuario
            $usuario = $db->recuperaUsuario($email); //Coloca dados do usuario na superglobal
            if($usuario->email == $email){
                $_SESSION['altera'] = $email;
                $_SESSION['alterasenha'] = "senha"; //Coloca mensagem de erro na superglobal
                header('Location:/?academy');
            }else{
                $_SESSION['alterasenha'] = "email";
                $_SESSION['erroemail'] = "Email incorreto ou não cadastrado!"; //Coloca mensagem de erro na superglobal
                header('Location:/?academy');; //direciona pra pagina de login
            }
        }

        private function deslogarUsuario(){
            session_gc();
            session_destroy(); //destroi sessão
            header('Location:/?'); //direciona pra pagina de login
        }

        private function registrarUsuario(){
            //Pegando dados do usuario
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $operação = $_POST['operacao'];
            $email = $_POST['email'];
            // $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $db = new Usuario(); //instancia usuario

            $cadastro = $db->cadastrarUsuario($nome,$sobrenome,$operação,$email); //cadastra usuario no BD

            if($cadastro){
                $_SESSION['cadastrado'] = $db->recuperaUsuario($email); //Coloca dados do usuario na superglobal
                $_SESSION['invalido'] = "Usuário Cadastrado com Sucesso!";
                include "views/cadastrado.php";
            }else{
                $_SESSION['invalido'] = "Não foi possivel cadastrar o usuario! Verifique os dados e tente novamente.";
                header('Location:/?cadastrousuario');
            }
        }

        private function cadastrarUsuario(){
            include "views/cadastro.php";
        }
    }
?>