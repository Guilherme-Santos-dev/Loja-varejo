<?php

namespace APP\Utils;

class Redirect
{
    public static function Redirect(
        string | array $message,
        string $type= 'success',
        string $url = '../View/message.php'
    ) {
        session_start();
        if(is_array($message)){
            // TODO implementar o tratamento de coleções
        } else {
            if($type == 'successe'){
                $_SESSION['img_success'] = $message;
            }else{
                $_SESSION['msg_error'] = $message;
            }
        }
    }
}