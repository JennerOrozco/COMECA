<?php 
    $to = "comeca@comeca.com"; // this is your Email address
    $from = $_POST['Mail']; // this is the sender's Email address
    $first_name = $_POST['Name'];    
    $subject = "EMAIL WEB " . $_POST['Sub'];        
    $message = "*****  DATOS CLIENTE ***** ".  "\n\n" .  " Nombre: " . $first_name ."\n\n" . " TEL: " . $_POST['Tel'] ."\n\n" . " CONTENIDO DEL MENSAJE :" . "\n\n" . $_POST['Mensaje'];
    $message2 = "Nuestro equipo ah recibido tu mensaje Sr/Sra. " . $first_name . "\n\n" . $_POST['Mensaje'] . "\n\n" . "Nos comunicaremos contigo lo antes posible.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message2,$headers2);
    
    
?>