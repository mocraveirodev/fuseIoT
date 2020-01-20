<?php
    class HomeController{
        public function acao($rotas){
            switch($rotas){
                case "home":
                    $this->viewHome(); //Alterando o metodo de chamadas para que traga todos os posts armazenados
                break;
            }
        }

        private function viewHome(){
            include "views/home.php";
        }
    }
?>