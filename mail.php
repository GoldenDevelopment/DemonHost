<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['reazon']) && !empty($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $reazon = $_POST['reazon'];
        $asunt = "Enviado desde Demon Hosting | Cancel";
        $header = "From: mainweb@demonhost.us" . "\r\n";
        $header.= "Reply-to: no-reply@demonhost.us" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email,$asunt,$reazon,$asunt,$header);
        if($mail){
            echo "<h4> ¡Mail send successfull! </h4>" ;
        }
    }
}
?>