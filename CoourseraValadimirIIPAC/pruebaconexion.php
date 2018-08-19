  <?php

		$db = '(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = Riki-Pc)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = XE)
    )
  )' ;

		if ($c=oci_connect('system', 'Asd.#1234', $db)) {

		echo 'Successfully connected to Oracle.\n';

		OCILogoff($c);

		} else {

		$err = OCIError();

		echo 'Connection failed.' . $err[text];

		}


?>