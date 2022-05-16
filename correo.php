if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) 
    && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $name = $_POST['asunto'];
        $msg = $_POST['msg'];
        $name = $_POST['email'];
        $header ="from: dylanrivas198@gmail.com" . "\r\n"; 
        $header. = "reply-to: dylanrivas198@gmail.com" . "\r\n"; 
        $header. = "X-mailer: PHP/". phpversion();

        $mail = mail($email, $asunto, $msg, $header);
        if ($mail) {
            echo "<h4> ¡mail enviado!</h4>";
        }
    }
}