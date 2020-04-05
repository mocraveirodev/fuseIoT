<?php
    session_start();

    include_once "models/Usuario.php";

    class UsuarioController{

        // Direcionando para a pagina correta
        public function acao($rotas){
            switch($rotas){
                case "cadastrar-usuario":
                    $this->cadastrarUsuario();
                break;
                case "registrar-usuario":
                    $this->registrarUsuario();
                break;
                case "login":
                    $this->loginUsuario();
                break;
                case "logar":
                    $this->logarUsuario();
                break;
                case "depoislogar":
                    $this->depoislogar();
                break;
                case "logout":
                    $this->deslogarUsuario();
                break;
            }
        }

        // Metodo que direciona para pagina de cadastro novo usuario
        private function cadastrarUsuario(){
            include "views/cadastro.php";
        }

        // Metodo que direciona para pagina de login de usuario
        private function loginUsuario(){
            if(isset($_SESSION['usuario'])){
                switch($_SESSION['usuario']->operacao){
                    case "Mex":
                        header('Location:/MexConsulting/stefanini');
                    break;
                    case "Nubank":
                        header('Location:/MexConsulting/nubank');
                    break;
                    case "Stefanini":
                        header('Location:/MexConsulting/stefanini');
                    break;
                }
            }
            include "views/login.php";
        }
        private function depoislogar(){
            include "views/afterLogin.php";
        }

        //Metodo para cadastrar usuario
        private function registrarUsuario(){
            //Pegando dados do usuario
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $db = new Usuario(); //instancia usuario

            $cadastro = $db->cadastrarUsuario($nome,$sobrenome,$email,$senha); //cadastra usuario no BD

            if($cadastro){
                $_SESSION['usuario'] = $db->recuperaUsuario($email); //Coloca dados do usuario na superglobal
                header('Location:/MexConsulting/login'); //direciona pra pagina de posts
            }else{
                echo "não foi possivel cadastrar o usuario! Verifique os dados e tente novamente."; //Mensagem de erro de cadastro
            }
        }

        private function logarUsuario(){
            //Pegando dados do usuario
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            if($this->validaUsuario($email,$senha)){
                $db = new Usuario(); //instancia usuario
                $_SESSION['usuario'] = $db->recuperaUsuario($email); //Coloca dados do usuario na superglobal
                $_SESSION['invalido'] = "";
                header('Location:/MexConsulting/depoislogar'); //direciona pra pagina de login
            }else{
                $_SESSION['invalido'] = "Email e/ou senha incorretos!"; //Coloca mensagem de erro na superglobal
                header('Location:/MexConsulting/login'); //direciona pra pagina de login
            }
        }

        private function validaUsuario($email,$senha){
            $db = new Usuario(); //instancia usuario

            $usuario = $db->recuperaUsuario($email); //Pega dados do usuario

            return password_verify($senha,$usuario->senha) ? true : false; //Valida se a senha esta correta

        }

        private function deslogarUsuario(){
            session_destroy(); //destroi sessão
            header('Location:/MexConsulting/'); //direciona pra pagina de login
        }
    }
?>