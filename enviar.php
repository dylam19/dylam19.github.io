<?php
    $destinatatio = 'dylanrivas198@gmail.com'

    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['msg'];
    
    $header= "PUDEV";
    $mensajecompleto = $mensaje 

    mail($destinatatio, $aunto, $mensajecompleto, $header);
    echo "<script> alert('correo enviado exitosamente!'</script>"
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>"
?>