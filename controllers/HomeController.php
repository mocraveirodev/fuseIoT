<?php
    session_start();

    class HomeController{
        public function acao($rotas){
            switch($rotas){
                case "home":
                    $this->viewHome();
                break;
            }
        }

        private function viewHome(){
            if(isset($_SESSION['usuario'])){
                $_SESSION['errologin'] = "";
                $_SESSION['erroemail'] = "";
                $_SESSION['errosenha'] = "";
                $_SESSION['alterasenha'] = "";
            }
            include "views/home.php";
        }
    }
?>