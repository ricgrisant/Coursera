<?php 
class Conexion{

	private $Usuario = "system";
	private $contrasena = "Asd.#1234";
	private $link;
	private $infoConexion = "(DESCRIPTION =
	(ADDRESS = (PROTOCOL = TCP)(HOST = Riki-Pc)(PORT = 1521))
	(CONNECT_DATA =
	(SERVER = DEDICATED)
	(SERVICE_NAME = XE)
	)
)";


public function __construct()
{
	$this->establecerConexion();
}

	/*
	$db = '(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = Riki-Pc)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = XE)
    )
  )' ;

		if ($c=oci_connect('system', 'Asd.#1234', $db)) 
	*/

		public function establecerConexion(){
			$this->link =oci_connect($this->Usuario, $this->contrasena, $this->infoConexion);
			if( !($this->link)) {
				echo "Conexión no se pudo establecer.<br />";
				die( print_r( oci_error(), true));
			}
		}
		public function cerrarConexion(){
			oci_close($this->link);
		}

		public function consultaSql($sql){
			 
			return $stid = oci_parse($this->link, $sql);
		}

		public function obtenerFila($resultado){
			return oci_fetch_assoc ($resultado);
		}

		public function liberarResultado($resultado){
			oci_free_statement($resultado);
		}
	}
	?>