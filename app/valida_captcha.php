<?php
    /**
     * Asocia un codigo de respuesta a un mensaje HTTP
     */
    function _requestStatus($code){
        $status = array(
          200 => "OK",
          401 => "Captcha incorrecto",
          404 => "Not found",
          500 => "Internal Server Error"
        );
        return (isset($status[$code]))? $status[$code] : $status[500];
      }    

      /**
     * Devuelve un arreglo en formato JSON y maneja el codigo respuesta
     */
    function response($data, $status) {
        header("Content-Type: application/json");
        header("HTTP/1.1 " . $status . " " . _requestStatus($status));
        echo json_encode($data);
    }

    function enviarRespuesta($generado, $recibido) {
        if ($generado == $recibido) {
            response('', 200);
        } else {
            response('', 401);
        }
    }

	session_start();

    $generado = $_SESSION['captcha]'];
    $recibido = $_POST['securityCode'];

    enviarRespuesta($generado, $recibido);
    