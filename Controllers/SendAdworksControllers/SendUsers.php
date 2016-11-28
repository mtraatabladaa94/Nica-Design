<?php
	if(isset($_POST['GrupoID'])) {
		if(empty($_POST['GrupoID'])) {
			//header("Location: ../../Index.php");
		}
	}
	else {
	    //header("Location: ../../Index.php");
	}
	$GrupoID = $_POST['GrupoID'];

	if(isset($_POST['ThemeID'])) {
		if(empty($_POST['ThemeID'])) {
			header("Location: SelectTheme.php?GrupoID=".$GrupoID);
		}
		else {
			if($_POST['ThemeID'] != "1" && $_POST['ThemeID'] != "2") {
				header("Location: SelectTheme.php?GrupoID=".$GrupoID);
			}
		}
	}
	else {
		header("Location: SelectTheme.php?GrupoID=".$GrupoID);
	}

	require('../../Models/MySQLConnection.php');

	if (is_array($_POST['chkSuscrito'])) {
		$num_countries = count($_POST['chkSuscrito']);
		$destinatarios = "";
		foreach ($_POST['chkSuscrito'] as $key => $value) {
			//SE EMPIEZAN A RECORRER LOS USUARIOS A LOS QUE SE ENVIARA EL CODIGO
			$user = $mysqli->query("SELECT * FROM suscrito WHERE SuscritoID = '".$value."'");
			if($user) {
				while($item = $user->fetch_assoc()) {
					if(trim($destinatarios) != "") {
						$destinatarios = $destinatarios.",".$item["Email"];
					}
					else {
						$destinatarios = $item["Email"];
					}

					//Guardar un registro de los mails enviados
					$suscgrup = $mysqli->query("INSERT INTO SuscritoGrupo VALUES ('".uniqid()."','".$item["SuscritoID"]."','".$GrupoID."')");
					if(!$suscgrup) {
						echo "Ha ocurrido un error al guardar los registros de los emails enviados. Intente nuevamente.";
					}
				}
			}
			else {
				echo "Ha ocurrido un error. Trabajamos para corregirlo. Intente nuevamente.";
			}
			//FIN
		}

		$grupo = $mysqli->query("SELECT * FROM grupo WHERE GrupoID = '".$GrupoID."'");
		if($grupo) {
			while($itemGrupo = $grupo->fetch_assoc()) {
				//$para = $destinatarios;
				//$de =  "mtraatabladaa94@gmail.com";

				$cabeceras = 'MIME-Version: 1.0' . "\r\n";
				$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				$cabeceras .= 'From: Michel Roberto Traña Tablada<mtraatabladaa94@gmail.com>';

				//$cabeceras = 'De:' . $de . "\r\n" .
				//    'Reply-To: nesamir13@gmail.com' . "\r\n" .
				//    'X-Mailer: PHP/' . phpversion();
				require("../../Plantillas/Plantilla1.php");
				echo $html;
				mail($destinatarios, $itemGrupo["Descripcion"], $html, $cabeceras);
			}
		}
		else {
			echo "Ha ocurrido un error al cargar el grupo. Intente nuevamente.";
		}
	}
	else {
		echo "Seleccionar los usuarios que recibiran el correo.";
	}
?>