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
                case "conceitosbasicos":
                    $this->viewConceitosBasicos();
                break;
            }
        }

        private function viewHomeAcademy(){
            $_SESSION['title'] = "fuse | IoT Academy";
            include "views/academy/academy.php";
        }
        
        private function viewGoAcademy(){
            if(isset($_SESSION['usuario'])){
                unset($_SESSION['modalInfo']);
                unset($_SESSION['ErrorInfo']);
                unset($_SESSION['mailresult']);
                unset($_SESSION['errologin']);
                unset($_SESSION['erroemail']);
                unset($_SESSION['errosenha']);
                unset($_SESSION['alterasenha']);
                unset($_SESSION['abreLogin']);
                unset($_SESSION['emBreve']);
            }
            header('Location:/?academy');
        }

        private function viewHomeCurso(){
            if(isset($_SESSION['usuario'])){
                $_SESSION['errologin'] = "";
                $_SESSION['erroemail'] = "";
                $_SESSION['errosenha'] = "";
                $_SESSION['alterasenha'] = "";
                include "views/academy/homecurso.php";
            }else{
                header('Location:/?login');
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