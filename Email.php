<?php 
 
if(isset($_POST['enviar']))
{
if(!empty($_POST['name']) && !empty($_POST['apellido']) && !empty($_POST['correo']) && !empty($_POST['numero']) && !empty($_POST['mensaje']) )
{
    $name= $_POST['name'];
    $apellido= $_POST['apellido'];
    $correo=$_POST['correo'];
    $numero=$_POST['numero'];
    $mensaje=$_POST['mensaje'];
    $asunto="Compras";
    $header="From: noreply@example.com". "\r\n";
    $header.="Reply-To:noreply@example.com". "\r\n";
    $header.="X-Mailer: PHP".phpversion();

    $mail=mail($correo,$asunto,$mensaje,$header);
    if($mail=true)
    {
        echo'alert("FUNCIONA);';
    }
}
}
 ?>
 
