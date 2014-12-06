<?php
    class Grupo {

        private $id;
        private $nombre;
        private $avatar;
        private $orden;
        private $estatus;

        public function createGrupo($nombre){
            echo "<br><br><br><br>Create Grupo";
            $insert01 = " INSERT INTO grupo (Grupo)
		                     VALUES('$nombre')";
            $execute01 = mysql_query($insert01) or die("Error  $insert01");

        }
        public function readGrupoG(){
            echo "<br>Read Grupo G";
            //echo "<br><br>readusuarioS";
            $sql01 = "SELECT * FROM grupo   ORDER BY Grupo ASC";
            $result01 = mysql_query($sql01)or die("Error $sql01");
            echo "<div class=table-responsive>";
            echo "<table class=\"table table-striped\">";
            echo "<tr><td colspan=5 align=center><strong>Lista de Grupos</strong></td></tr>";
            echo "<tr><th>Id</th><th>Grupo</th><tr>";
            while($field = mysql_fetch_array($result01)){
                $this->Id = $field['id_grupo'];
                $this->Nombre = $field['Grupo'];
                echo "<tr><td>$this->Id</td><td>$this->Nombre</td></tr>";

            }
            echo "</table>";
            echo "</div>";
        }
        public function readGrupoS(){
            echo "<br>Read Grupo S";
        }
        public function deleteGrupo(){
            echo "<br>Delete Grupo";
        }
        public function updateGrupo(){
            echo "<br>Update Grupo";
        }
        public function asignarAlumnoGrupo(){
            echo "<br>Asignar Alumno a Grupo";
        }
    }