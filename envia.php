<?php
 
 
    function form_mail($sPara, $sAsunto, $sTexto, $sDe)
    {
 
        $bHayFicheros = 0;
        $sCabeceraTexto = "";
        $sCuerpo = $sTexto;
        $sSeparador = uniqid("_Separador-de-datos_");
 
        $sCabeceras = "MIME-version: 1.0\n";
 
        // Recogemos los campos del formulario 
        foreach ($_POST as $sNombre => $sValor)
            $sCuerpo = $sCuerpo."\n".$sNombre." = ".$sValor;
 
 
        // Si hay adjunto se añaden al mensaje 
        if ($bHayFicheros)
            $sCuerpo .= $sAdjuntos."\n\n--".$sSeparador."--\n";
 
        // Se añade la cabecera de destinatario 
        if ($sDe)$sCabeceras .= "From:".$sDe."\n";
 
        // Envía mail 
        return(mail($sPara, $sAsunto, $sCuerpo, $sCabeceras));
    }
 
        //datos recepción correo
		$tema = 'Mensaje recibido de Enorelax.com';
		if (form_mail("dleiva1970@fp.uoc.edu", $tema, 
		"Los datos introducidos en el formulario son:\n\n", $_POST[email])) 
		echo "<p> <font face='Tahoma, Geneva, sans-serif'> Su formulario ha sido enviado con exito. ";
		echo "<br>";
		echo "<a href='index.html'>Volver al inicio</a><font></p>";
		?>


