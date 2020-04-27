<?php
    session_start();

    class AcademyController{
        public function acao($rotas){
            switch($rotas){
                case "academy":
                    $this->viewHomeAcademy();
                break;
                case "goacademy":
                    $this->viewGoAcademy();
                break;
                case "homecurso":
                    $this->viewHomeCurso();
                break;
            }
        }

        private function viewHomeAcademy(){
            include "views/academy/academy.php";
        }
        private function viewGoAcademy(){
            if(isset($_SESSION['usuario'])){
                $_SESSION['errologin'] = "";
                $_SESSION['erroemail'] = "";
                $_SESSION['errosenha'] = "";
                $_SESSION['alterasenha'] = "";
            }
            header('Location:/?academy');
        }

        private function viewHomeCurso(){
            if(isset($_SESSION['usuario'])){
                $_SESSION['errologin'] = "";
                $_SESSION['erroemail'] = "";
                $_SESSION['errosenha'] = "";
                $_SESSION['alterasenha'] = "";
            }
            include "views/academy/homecurso.php";
        }
    }
?>