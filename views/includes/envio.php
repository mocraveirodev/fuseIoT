<?php
    if ( isset($_SERVER["OS"]) && $_SERVER["OS"] == "Windows_NT" ) {
        $hostname = strtolower($_SERVER["COMPUTERNAME"]);
    } else {
        $hostname = `hostname`;
        $hostnamearray = explode('.', $hostname);
        $hostname = $hostnamearray[0];
    }
    
    if ( isset($_REQUEST['sendemail']) ) {
        header("Content-Type: text/plain");
        header("X-Node: $hostname");
        $from = $_REQUEST['from'];
        $toemail = $_REQUEST['toemail'];
        $subject = $_REQUEST['subject'];
        $mailContato = $_REQUEST['email']; 
        $nomeContato = $_REQUEST['nome'];
        $telefoneContato = $_REQUEST['telefone'];
        $empresaContato = $_REQUEST['empresa'];
        $mensagemContato = $_REQUEST['message'];
        $message = "Recebemos uma mensagem no site <br/><strong>Nome:</strong> $nomeContato<br/><strong>e-mail:</strong> $mailContato<br/><strong>Telefone:</strong> $telefoneContato<br/><strong>Empresa:</strong> $empresaContato<br/><strong>mensagem:</strong> $mensagemContato";
        if ( $from == "" || $toemail == "" ) {
            header("HTTP/1.1 500 WhatAreYouDoing");
            header("Content-Type: text/plain");
            echo 'FAIL: You must fill in From: and To: fields.';
            exit;
        }
        if ( $_REQUEST['sendmethod'] == "mail" ) {
            $result = mail($toemail, $subject, $message, "From: $from" );
            if ( $result ) {
                echo 'OK';
            } else {
                echo 'FAIL';
            }
        } elseif ( $_REQUEST['sendmethod'] == "smtp" ) {
            ob_start();

            $mail = new PHPMailer;
    
            $mail->SMTPDebug = 2;
            $mail->IsSMTP();
            if ( strpos($hostname, 'cpnl') === FALSE )
                $mail->Host = 'relay-hosting.secureserver.net';
            else
                $mail->Host = 'localhost';
            $mail->SMTPAuth = false;
    
            $mail->From = $from;
            $mail->FromName = 'Fuse | IoT';
            $mail->AddAddress($toemail);
    
            $mail->IsHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
    
            $mailresult = $mail->Send();
            $mailconversation = nl2br(htmlspecialchars(ob_get_clean()));
            if ( !$mailresult ) {
                echo 'FAIL: ' . $mail->ErrorInfo . '<br />' . $mailconversation;
            } else {
                echo $mailconversation;
            }
        } elseif ( $_REQUEST['sendmethod'] == "sendmail" ) {
            $cmd = "cat - << EOF | /usr/sbin/sendmail -t 2>&1\nto:$toemail\nfrom:$from\nsubject:$subject\n\n$message\n\nEOF\n";
            $mailresult = shell_exec($cmd);
            if ( $mailresult == '' ) {
                echo 'OK';
            } else {
                echo "The sendmail command returned what appears to be an error: " . $mailresult . "<br />\n<br />";
            }
        } else {
            echo 'FAIL (Invalid sendmethod variable in POST data)';
        }
        exit;
    }
?>