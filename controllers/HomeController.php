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
            include "views/home.php";
        }
    }
?>