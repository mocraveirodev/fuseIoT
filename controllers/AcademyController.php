<?php
    session_start();

    class AcademyController{
        public function acao($rotas){
            switch($rotas){
                case "academy":
                    $this->viewHomeAcademy();
                break;
            }
        }

        private function viewHomeAcademy(){
            include "views/academy/academy.php";
        }
    }
?>