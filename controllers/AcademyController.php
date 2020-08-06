<?php
    session_start();

    class AcademyController{
        public function acao($rotas){
            switch($rotas){
                case "fuseiotacademy":
                    $this->viewHomeAcademy();
                break;
                case "teste":
                    $this->viewTeste();
                break;
                case "homecurso":
                    $this->viewHomeCurso();
                break;
                case "curso":
                    $this->viewCurso();
                break;
                case "conceitosbasicos":
                    $this->viewConceitosBasicos();
                break;
            }
        }

        private function viewHomeAcademy(){
            $_SESSION['title'] = "fuse | IoT Academy";
            include "views/academy/academy.php";
        }
        
        private function viewTeste(){
            $_SESSION['title'] = "fuse | IoT Academy";
            include "views/teste.php";
        }

        private function viewHomeCurso(){
            if(isset($_SESSION['usuario'])){
                unset($_SESSION['errologin']);
                unset($_SESSION['erroemail']);
                unset($_SESSION['errosenha']);
                unset($_SESSION['alterasenha']);
                $_SESSION['title'] = "fuse | IoT Academy";
                include "views/academy/homecurso.php";
            }else{
                echo "<script>window.location.href = '/?login';</script>";
            }
        }
        private function viewCurso(){
            if(isset($_SESSION['usuario'])){
                unset($_SESSION['errologin']);
                unset($_SESSION['erroemail']);
                unset($_SESSION['errosenha']);
                unset($_SESSION['alterasenha']);
                $_SESSION['title'] = "fuse | IoT Academy";
                include "views/academy/curso.php";
            }else{
                echo "<script>window.location.href = '/?login';</script>";
            }
        }

        private function viewConceitosBasicos(){
            // $db = new Usuario();
            // $prog = $db->cadastrarProgresso($_SESSION['usuario']->id);
            $_SESSION['curso'] = "conceitosbasicos";
            include "views/academy/layoutcurso.php";
        }
    }
?>