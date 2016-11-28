<?php
	if(isset($_POST['GrupoID']) || isset($_POST['txtTitulo']) || isset($_POST['txtDescripcion'])) {
	    if(empty($_POST['GrupoID']) || empty($_POST['txtTitulo']) || empty($_POST['txtDescripcion'])) {
	        header("Location: ../../Index.php");
	    }
	}
	else{
	    header("Location: ../../Index.php");
	}


	require('../../Models/MySQLConnection.php');

	$upload=false;
	$upload_error = false;
	$msg = '';
	$msg_error = '';
	$FileName = uniqid().'.jpg';


	if( $_FILES ) {
		$uploads_directory = '../../ImageFileStore/';
		$original = $uploads_directory . basename($_FILES['fileImagen']['name']);
		$upload_file_copy = $uploads_directory . $FileName;

		$image_file_type = pathinfo($original, PATHINFO_EXTENSION);

		if( $image_file_type == 'jpg') {
			if( move_uploaded_file($_FILES['fileImagen']['tmp_name'], $upload_file_copy) )
			{
				$upload = true;
				$msg = 'El fichero fue cargado correctamente';


				/*
	                GUARDAR EL NOMBRE DEL PDF EN LA BASE DE DATOS
	            */
	            require("../../Models/MySQLConnection.php");
	            $res = $mysqli->query("INSERT INTO Publicacion VALUES('".uniqid()."', now(), '".$_POST['txtTitulo']."','".$_POST['txtDescripcion']."', '".$FileName."', '".$_POST['GrupoID']."')");
	            if($res) {
	                echo $msg;
	            }
	            else {
	                echo "No guardado";
	            }

			}else{
				$upload = false;
				$upload_error = true;
				$msg_error = 'Error al cargar archivo';
				echo $msg_error;
			}
		}
		else{
			$upload = false;
			$upload_error = true;
			$msg_error = 'Tipo de fichero no permitido';
			echo $msg_error;
		}
	}

	//header("Location: ../index.php"); 
	//exit();
?>