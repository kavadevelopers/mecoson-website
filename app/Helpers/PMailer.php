<?php
namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class PMailer{

    public static function send($to,$subject,$body,$file = false){
        $mail               = new PHPMailer();
        $mail->isSMTP();
        $mail->IsHTML(true);
        $mail->SMTPDebug    = 0;
        $mail->SMTPAuth     = true;
        $mail->SMTPSecure   = 'ssl';
        $mail->CharSet      = "utf-8";
        $mail->Host         = CommonHelper::setting('smtp_host');
        $mail->Port         = CommonHelper::setting('smtp_port');
        $mail->Username     = CommonHelper::setting('smtp_user');
        $mail->Password     = CommonHelper::setting('smtp_password');
        $mail->SetFrom(CommonHelper::setting('smtp_from_email'),CommonHelper::setting('smtp_from_name'));
        $mail->Subject      = $subject;
        $mail->Body         = $body;
        foreach (explode(',', $to) as $key => $value) {
            $mail->AddAddress($value);
        }
        if($file && isset($file)) {
            $mail->addStringAttachment(file_get_contents($file['url']), $file['name']);
        }
        if ($mail->Send()) {
            return true;
        } else {
            return false;
        }
    }

}