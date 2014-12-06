<?php

require ('Usuario.php');
require ('bd.php');
require ('header1.php');



$usuario = new Usuario();

/*$usuario->readUsuarioG();
$usuario->readUsuarioS(2);
$usuario->createUsuario("Raul","G","M",1);
$usuario->updateUsuario(5,"Arturo","M","G",2);
$usuario->deleteUsuario(1);*/

if (isset($_POST['submit'])) {
    switch($_POST['submit']){
        case "Entrar":

            echo "<br><br><br><br><div class=\"alert alert-danger\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $usuario->loginUsuario("$_POST[login]","$_POST[contrasena]");
            break;

    }

}




echo "<center>
        <div class=table-responsive>
            <form name=Usuario action=inicio.php method=Post>
                <table class=\"table table-bordered\">
                    <tr> <td>Usuario:</td><td><input type=text name=login> </input></td> </tr>
                    <tr> <td>contraseña</td><td><input type=text name=contrasena> </input></td> </tr>

                    <tr><td align=center></td><td><input type=submit name=submit value=Entrar> </input></td></tr>

                </table>
            </form>
        </div></center>
    ";


require ('footer.php');
?>