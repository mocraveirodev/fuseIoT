<?php
    session_start();

    header('Content-Type: text/html; charset=UTF-8');

    include_once "models/Email.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    class HomeController{
        public function acao($rotas){
            switch($rotas){
                case "home":
                    $this->viewHome();
                break;
                case "email":
                    $this->envioEmail();
                break;
                case "pagseguro":
                    $this->viewPagseguro();
                break;
                case "pagamento":
                    $this->viewPagamento();
                break;
            }
        }

        private function viewPagseguro(){
            include "views/pagseguro/pagseguro.php";
        }
        private function viewPagamento(){
            include "views/pagseguro/pagamento.php";
        }

        private function viewHome(){
            if(isset($_SESSION['usuario'])){
                $_SESSION['errologin'] = "";
                $_SESSION['erroemail'] = "";
                $_SESSION['errosenha'] = "";
                $_SESSION['alterasenha'] = "";
            }
            $_SESSION['title'] = "fuse | IoT";
            include "views/home.php";
        }

        private function envioEmail(){
            $from = $_POST['from'];
            $subject = $_POST['subject'];
            $mailContato = $_POST['email']; 
            $nomeContato = $_POST['nome'];
            $telefoneContato = $_POST['telefone'];
            $empresaContato = $_POST['empresa'];
            $mensagemContato = $_POST['message'];

            //trocar pra switch case
            if($_POST['from'] == "iottalks@fuseiot.io"){
                $nameFrom = 'Inscrição IoT Talks';
                $message = "Recebemos uma Inscrição para o IoT Talks!<br><br><strong>Nome:</strong> $nomeContato<br/><strong>E-mail:</strong> $mailContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Empresa:</strong> $empresaContato";
                $messagePlain = "==> Recebemos uma Inscrição para o IoT Talks! ======== Nome: $nomeContato ======== E-mail:  $mailContato ======== Telefone: $telefoneContato ======== Empresa: $empresaContato";
            }

            if($_POST['from'] == "contato@fuseiot.io"){
                $nameFrom = 'Contato - Fuse | IoT';
                $message = "Recebemos uma mensagem no site <br/><strong>Nome:</strong> $nomeContato<br/><strong>e-mail:</strong> $mailContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>mensagem:</strong> $mensagemContato";
                $messagePlain = "Recebemos uma mensagem no site ======== Nome: $nomeContato ======== e-mail: $mailContato ======== Telefone: $telefoneContato ======== Empresa: $empresaContato ======== mensagem: $mensagemContato";
            }

            $mail = new PHPMailer(true);
            
            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->IsSMTP();
                $mail->Host = 'relay-hosting.secureserver.net';
                $mail->SMTPAuth = false;

                $mail->setFrom($from, $nameFrom);
                $mail->addAddress("murilo.silva@fuseiot.io");
                $mail->addAddress("monica.craveiro@fuseiot.io");
                $mail->addAddress("leonardo.garcia@fuseiot.io");

                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = $messagePlain;

                $mailresult = $mail->Send();

                if($from == "contato@fuseiot.io"){
                    $_SESSION['mailresult'] = "Em breve nossos especialistas irão entrar em contato para dar mais informações.";
                    $_SESSION['modalInfo'] = "fecha";
                }else{
                    $_SESSION['mailresult'] = "Sua inscrição no IoT Talks foi realizada com sucesso!";
                    $_SESSION['modalInfo'] = "fecha";
                }

                $db = new Email();
                $db->logEnvio($nomeContato,$mailContato,$telefoneContato,$empresaContato,$mensagemContato,true,$mailresult);

            }catch (Exception $e) {
                if($from == "contato@fuseiot.io"){
                    $_SESSION['ErrorInfo'] = "Houve um erro enviando o email. Tente de novo mais tarde!";
                    $_SESSION['modalInfo'] = "fecha";
                }else{
                    $_SESSION['ErrorInfo'] = "Houve um erro ao realizar sua inscrição no IoT Talks. Tente de novo mais tarde!";
                    $_SESSION['modalInfo'] = "fecha";
                }

                $db = new Email();
                $db->logEnvio($nomeContato,$mailContato,$telefoneContato,$empresaContato,$mensagemContato,false,$mail->ErrorInfo);
            }

            $mail->clearAddresses();
            $mail->clearAttachments();
            $mail->ClearAllRecipients();

            ($from == "contato@fuseiot.io") ? header('Location:/?#contato') : header('Location:/?home');
        }
    }
?>