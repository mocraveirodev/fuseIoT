<?php
    session_start();

    include_once "models/Usuario.php";
    include_once "models/Curso.php";

    class UsuarioController{

        public function acao($rotas){
            switch($rotas){
                case "login":
                    $this->loginUsuario();
                break;
                case "logar":
                    $this->logarModal();
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
                case "embreve":
                    $this->emBreve();
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
                        $_SESSION['abreLogin'] = "";
                        $_SESSION['emBreve'] = "";
                        header('Location:/?academy');
                    }else{
                        $_SESSION['errologin'] = "";
                        $_SESSION['erroemail'] = "";
                        $_SESSION['alterasenha'] = "senha";
                        $_SESSION['errosenha'] = "Senha não alterada! Tente de novo.";
                        $_SESSION['abreLogin'] = "";
                        $_SESSION['emBreve'] = "";
                        header('Location:/?academy');
                    }
                }else{
                    $_SESSION['errologin'] = "";
                    $_SESSION['erroemail'] = "";
                    $_SESSION['alterasenha'] = "senha";
                    $_SESSION['errosenha'] = "Senha digitadas não conferem!";
                    $_SESSION['abreLogin'] = "";
                    $_SESSION['emBreve'] = "";
                    header('Location:/?academy');
                }
            }else{
                if(isset($_POST['email'])){
                    $_SESSION = [];
                    $this->logarUsuario();
                }else{
                    $_SESSION['errologin'] = "";
                    $_SESSION['erroemail'] = "";
                    $_SESSION['alterasenha'] = "";
                    $_SESSION['errosenha'] = "";
                    $_SESSION['abreLogin'] = "login";
                    $_SESSION['emBreve'] = "";
                    header('Location:/?academy');
                }
            }
        }

        private function logarUsuario(){
            if($_POST){
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                if($this->validaUsuario($email,$senha)){
                    $user = new Usuario();
                    $curso = new Curso();
                    $_SESSION['usuario'] = $user->recuperaUsuario($email);
                    $_SESSION['cursos'] = $curso->listarCursos();
                    $_SESSION['aulas'] = $curso->listarAulas();
                    $user->ultimoLogin($_SESSION['usuario']->id_usuario);
                    header('Location:/?homecurso');
                }else{
                    $_SESSION['errologin'] = "Email e/ou senha incorretos!";
                    $_SESSION['erroemail'] = "";
                    $_SESSION['errosenha'] = "";
                    $_SESSION['alterasenha'] = "";
                    $_SESSION['abreLogin'] = "";
                    $_SESSION['emBreve'] = "";
                    header('Location:/?academy');
                }
            }else{
                $_SESSION['errologin'] = "logar";
                $_SESSION['erroemail'] = "";
                $_SESSION['errosenha'] = "";
                $_SESSION['alterasenha'] = "";
                $_SESSION['abreLogin'] = "";
                $_SESSION['emBreve'] = "";
                header('Location:/?academy');
            }
        }

        private function logarModal(){
            $_SESSION['errologin'] = "";
        }

        private function validaUsuario($email,$senha){
            $db = new Usuario();

            $usuario = $db->recuperaUsuario($email);

            return password_verify($senha,$usuario->senha) ? true : false;

        }

        private function alteraSenha(){
            $_SESSION['errologin'] = "";
            $_SESSION['alterasenha'] = "email";
            $_SESSION['errosenha'] = "";
            $_SESSION['abreLogin'] = "";
            $_SESSION['emBreve'] = "";
            header('Location:/?academy');
        }

        private function novaSenha(){
            $email = $_POST['email'];
            $db = new Usuario();
            $usuario = $db->recuperaUsuario($email);
            if($usuario->email == $email){
                $_SESSION['altera'] = $email;
                $_SESSION['errologin'] = "";
                $_SESSION['errosenha'] = "";
                $_SESSION['erroemail'] = "";
                $_SESSION['alterasenha'] = "senha";
                $_SESSION['abreLogin'] = "";
                $_SESSION['emBreve'] = "";
                header('Location:/?academy');
            }else{
                $_SESSION['alterasenha'] = "email";
                $_SESSION['errologin'] = "";
                $_SESSION['errosenha'] = "";
                $_SESSION['erroemail'] = "Email incorreto ou não cadastrado!";
                $_SESSION['abreLogin'] = "";
                $_SESSION['emBreve'] = "";
                header('Location:/?academy');
            }
        }

        private function deslogarUsuario(){
            session_gc();
            session_destroy();
            header('Location:/?');
        }

        private function registrarUsuario(){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $operação = $_POST['operacao'];
            $email = $_POST['email'];
            // $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $db = new Usuario();

            $cadastro = $db->cadastrarUsuario($nome,$sobrenome,$operação,$email);

            if($cadastro){
                $_SESSION['cadastrado'] = $db->recuperaUsuario($email);
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

        private function emBreve(){
            $_SESSION['altera'] = "";
            $_SESSION['errologin'] = "";
            $_SESSION['errosenha'] = "";
            $_SESSION['erroemail'] = "";
            $_SESSION['alterasenha'] = "";
            $_SESSION['abreLogin'] = "";
            $_SESSION['emBreve'] = "abre";
            echo "<script>window.location.href = '/?fuseiotacademy';</script>";
        }
    }
?>