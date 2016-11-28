<?php
	if(isset($_GET['GrupoID'])) {
		if(empty($_GET['GrupoID'])) {
			//header("Location: ../../Index.php");
		}
	}
	else {
	    //header("Location: ../../Index.php");
	}
	
	$GrupoID = $_GET['GrupoID'];

	$Title = "Crear";

	require("../../Controllers/SendAdworksControllers/Index.php");
	require("../../Models/MySQLConnection.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php
			require("../../Themes/Layout/Styles.php");
			require("../../Themes/Layout/Meta.php");
		?>
		<?php
			require("../../Themes/Layout/Scripts.php");
		?>
	</head>
	<body class="blue-grey lighten-5">
		<?php
			require("../../Themes/Layout/MenuAside.php");
		?>
		<div class="bg green"></div>
		<div style="height: 72px;"></div>

		<div class="content">
			<div class="container">
				<div class="row">
					<div class=" col s12">
						<div class="custom-container-form white z-depth-1">
							<div class="content-title green z-depth-2 white-text">
								Publicar
								<!--<div class="content-title-action right" style="padding-top:7px;padding-right:7px;">
									<div class="menu-setting fixed-action-btn horizontal click-to-toggle" style="position: relative;">
										<a class="btn-floating btn-flat">
											<i class="material-icons">query_builder</i>
										</a>
										<ul>
											<li>
												<a href="Sala.php" class="btn-floating blue modal-trigger modal-sala">
													<i class="material-icons">library_books</i>
												</a>
											</li>
										</ul>
									</div>
								</div>-->
								<div class="right">
									<a class="btn-floating btn-flat" href="Create.php" style="margin-right: 5px;">
										<i class="material-icons">query_builder</i>
									</a>
								</div>
							</div>
							<form action="../../Controllers/SendAdworksControllers/Create.php" method="POST" enctype="multipart/form-data">

								<input name="GrupoID" type="hidden" value="<?php echo $_GET['GrupoID']; ?>" />
								<div class="row">
									<br />
									<div class="input-field col s12">
										<input name="txtTitulo" id="titulo" placeholder="" type="text" class="validate">
										<label for="titulo">T&iacute;tulo de la Publicaci&oacute;n</label>
									</div>
								</div>
								<div class="row">
									<div class="file-field input-field col s12">
										<div class="btn green">
											<span>Seleccionar Imagen</span>
											<input type="file" name="fileImagen">
										</div>
										<div class="file-path-wrapper">
											<input name="labelImagen" class="file-path validate" placeholder="Seleccionar una imagen" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea name="txtDescripcion" id="descripcion" placeholder="" class="materialize-textarea" rows="3" cols="1"></textarea>
										<label for="descripcion">Descripci&oacute;n de la Publicaci&oacute;n</label>
									</div>
								</div>
								<?php
									if(isset($_GET['Err'])) {
										if(empty($_GET['Err'])) {
								?>

								<?php
										}
										else {
								?>
												<div class="row">
													<div class="center">
														<div class="chip red">
								<?php
													switch($_GET['Err']) {
														case "1":
															echo "Favor ingresar Usuario y Contraseña";
														break;
														case "2":
															echo "Ha ocurrido un problema intentar mas tarde";
														break;
														case "3":
															echo "Usuario o Contraseña incorrectos";
														break;
													}
								?>
															<i class="close material-icons">close</i>
														</div>
													</div>
												</div>
								<?php
										}
									}
									else {
								?>

								<?php
									}
								?>
								<button class="btn deep-orange">
									Guardar Publicación
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-container container">
				<div class="row">
					<div class="col s12">
						<div class="row">
							<?php
								$res = $mysqli->query("SELECT * FROM Publicacion");
								if(!$res) {
							?>
								<div class="chip red">
									Hay un Error. Recargue la P&aacute;gina
									<i class="close material-icons">close</i>
								</div>
							<?php
								}
								else {
									while($item = $res->fetch_assoc()) {
										?>
											<div class="col s12 m4">
												<div class="card large">
													<div class="card-image">
														<img class="activator" src="../../ImageFileStore/<?php echo $item['Image']; ?>" />
													</div>
													<div class="card-content">
														<span class="card-title activator grey-text text-darken-4"><?php echo $item['Titulo']; ?><i class="material-icons right">more_vert</i></span>
														<p>
															<?php echo $item['Contenido']; ?>
														</p>
													</div>
													<div class="card-reveal">
														<span class="card-title grey-text text-darken-4"><?php echo $item['Titulo']; ?><i class="material-icons right">close</i></span>
			      										<p>
			      											<?php echo $item['Contenido']; ?>
			      										</p>
													</div>
													<div class="card-action">
														<a class="btn btn-floating yellow darken-2" href="Create.php?GrupoID=<?php echo $GrupoID; ?>">
															<i class="material-icons">mode_edit</i>
														</a>
														<a class="btn btn-floating red" href="Delete.php?GrupoID=<?php echo $GrupoID; ?>">
															<i class="material-icons">delete</i>
														</a>
													</div>
												</div>
											</div>
										<?php
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="fixed-action-btn">
			 	<a class="btn-floating btn-large deep-orange">
			    	<i class="large material-icons">settings</i>
			    </a>
			    <ul>
			    	<li><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
			    	<li><a class="btn-floating yellow darken-1"><i class="material-icons">mode_edit</i></a></li>
			    	<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
			    	<li><a class="btn-floating blue" href="SelectTheme.php?GrupoID=<?php echo $GrupoID;?>"><i class="material-icons">supervisor_account</i></a></li>
			    </ul>
			</div>
		</div>
		<!--FINAL DEL BODY-->

		<!--FOOTER-->
		<?php
			require("../../Themes/Layout/Footer.php");
		?>
		<!--FINAL FOOTER-->
	</body>
</html>