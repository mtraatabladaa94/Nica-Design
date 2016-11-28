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

	if(isset($_GET['ThemeID'])) {
		if(empty($_GET['ThemeID'])) {
			header("Location: SelectTheme.php?GrupoID=".$GrupoID);
		}
		else {
			if($_GET['ThemeID'] != "1" && $_GET['ThemeID'] != "2") {
				header("Location: SelectTheme.php?GrupoID=".$GrupoID);
			}
		}
	}
	else {
		header("Location: SelectTheme.php?GrupoID=".$GrupoID);
	}
	$ThemeID = $_GET['ThemeID'];
	
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
								Mailing Masivo
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
							<br />
							<form action="../../Controllers/SendAdworksControllers/SendUsers.php" method="POST" enctype="multipart/form-data">
								<div class="custom-page page">
									<input name="GrupoID" type="hidden" value="<?php echo $GrupoID; ?>" />
									<input name="ThemeID" type="hidden" value="<?php echo $ThemeID; ?>" />

									<?php
										$res = $mysqli->query("SELECT * FROM suscrito");
										if(!$res) {
									?>
										<div class="chip red">
											Hay un Error. Recargue la P&aacute;gina
											<i class="close material-icons">close</i>
										</div>
									<?php
										}
										else {
									?>
										<ul class="collection">
											<?php
												while($item = $res->fetch_assoc()) {
											?>
												<li class="collection-item avatar">
													<img src="../../Resources/Images/User42x42.png" alt="" class="circle" />
													<span class="title"><?php echo $item["Nombres"]." ".$item["Apellidos"]; ?></span>
													<p>
														<a href="#"><?php echo $item["Email"]; ?></a>
														<br />
														<a href="#"><?php echo "(".$item["Extension"].") ".$item["Telefono"]; ?></a>
													</p>
													<a href="#!" class="secondary-content">
														<div class="input-field">
															<input id="chkSuscrito<?php echo $item['SuscritoID']; ?>" value="<?php echo $item['SuscritoID']; ?>" name="chkSuscrito[]" type="checkbox" />
															<label for="chkSuscrito<?php echo $item['SuscritoID']; ?>"></label>
												        </div>
													</a>
												</li>
											<?php
												}
											?>
										</ul>
									<?php
										}
									?>
									
									<br />
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
								</div>

								<button class="btn deep-orange">
									Enviar Publicación
								</button>
								<a href="SelectTheme.php?GrupoID=<?php echo $GrupoID; ?>" class="btn btn-flat">
									Cancelar
								</a>
							</form>
						</div>
					</div>
				</div>
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