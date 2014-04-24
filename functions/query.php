<?php
include_once('functions/connect.php');
/*
Comprobando la Conexión
*/
/*
$usuario = "postgres"; // Coloca el Nombre de Usuario de PostgreSQL
$password = "17588630"; // Coloca el password de PostgreSQL
$db = "scime"; // Coloca en Nombre de la Base de Datos 
$port = 5432; // Puerto
$host = "localhost";  // Coloca la ruta del host, si es local escribe locahost ó 127.0.0.1
$attrib = "host=$host port=$port dbname=$db user=$user password=$passwd"; // Junta lo parámetros vaciados en las variables anteriores
$connect = pg_connect($attrib) or die ("Error de conexion. ". pg_last_error()); // Compueba la conexión
//echo "Conexion Exitosa <hr>"; 
*/
class QueryS {
// Atributos
public $query;
public $resultado;

// Métodos
    function __contruct($query,$resultado){
        $this->query = $query;
        $this->resultado = $resultado;
        $resultado = pg_query($cnx, $sql);
        if (!$result) {
          echo "An error occurred.\n";
          exit;
        }
        
    } 
}
$sql = "SELECT * FROM estado";

$result = pg_query($cnx, $sql);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "Ubicación Geográfica: $row[1]  Estado: $row[2]";
  echo "<br />\n";
}
?>