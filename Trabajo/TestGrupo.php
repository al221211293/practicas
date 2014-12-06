

    <script src="jquery.min.js"></script>

<?php

require('Grupo.php');
require_once('bd.php');

//var_dump($_POST);

require('header.php');

$grupo = new Grupo();





if (isset($_POST['submit'])) {
    switch($_POST['submit']){
        case "Alta":
            echo "<br><br><br><div class=\"alert alert-danger\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $grupo->createGrupo("$_POST[nombre]");
            $grupo->readGrupoG();

            break;
      /*  case "Borrar":
            echo "<div class=\"alert alert-info\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $usuario->deleteUsuario($_POST['idb']);
            break;
        case "Modificar":
            echo "<div class=\"alert alert-success\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $usuario->updateUsuario($_POST['idm'],".$_POST[nombre].",".$_POST[apellidop].",".$_POST[apellidom].",$_POST['nivel']);
            break;
       case "Buscar":
            echo "<div class=\"alert alert-warning\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $usuario->readUsuarioS($_POST['idbuscar']);
            break;*/
    }

}

echo "
        <div class=table-responsive>
            <form name=alumno action=TestGrupo.php method=Post>
                <table class=\"table table-bordered\">
                    <tr> <td>Nombre del Nuevo Grupo:</td><td><input type=text name=nombre> </input></td> </tr>

                    <tr><td colspan=2 align=center><input type=submit name=submit value=Alta> </input></td></tr>

                </table>
            </form>
        </div>
    ";





// if ($_POST == NULL)
//$materia->asignarMateriaMaestro($id);
//$materia->asignarMateriaGrupo();


?>

    <!--<script type="text/javascript">
        $(function (e) {
            $('#submit').click(function (e) {
                descripcion = $(this).val();
                e.preventDefault()
                $.post('ajax.php', $('#maestro').serialize(), function(data){$('#mensaje').html(data);});

            })
        })

    </script>-->

<?php require('footer.php'); ?>