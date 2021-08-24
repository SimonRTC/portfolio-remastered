<?php

namespace Frameshort\Controllers;

class Portfolio {
        
    /**
     * Show portfolio
     *
     * @param  object $Response
     * @param  array $Binded
     * @return void
     */
    public function Index(\Frameshort\Response $Response, array $Binded = []): void {
        $status = false;
        if (!empty($_POST)) {
            if (strtoupper($_POST["captcha"]) === strtoupper($_SESSION["captcha.phrase"])) {    
                $mail = new \PHPMailer\PHPMailer\PHPMailer();
                $mail->isSMTP();
                $mail->Host         = $_ENV["SMTP_HOST"];
                $mail->SMTPAuth     = true;
                $mail->Username     = $_ENV["SMTP_USERNAME"];
                $mail->Password     = $_ENV["SMTP_PASSWORD"];
                $mail->SMTPSecure   = 'tls';
                $mail->Port         = (int) $_ENV["SMTP_PORT"];
                $mail->setFrom("no-reply@simonmalpel.fr", $_POST["name"]);
                $mail->addAddress("simon.malpel@orange.fr");
                $mail->addReplyTo($_POST["email"], $_POST["name"]);
                $mail->addCC($_POST["email"]);
                $mail->isHTML(false);
                $mail->Subject  = "Nouveau message - www.simonmalpel.fr";
                $mail->Body     = $_POST["message"];
                $status = $mail->send();
            }
            echo "<script>location.hash = \"#contact\";</script>";
        }
        $captcha = new \Gregwar\Captcha\CaptchaBuilder;
        $captcha->build();
        $_SESSION["captcha.phrase"] = $captcha->getPhrase();
        $Response->load("portfolio", [
            "components.headers"    => true,
            "captcha"               => $captcha->inline(),
            "captcha.status"        => (!empty($_POST)? $status: null)
        ]);
        return;
    }

}

?>