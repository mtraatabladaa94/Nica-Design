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
					<div class="col s12">
						<div class="row">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-image">
										<img class="activator" src="../../ImageFileStore/57eb0bf694f9f.jpg" />
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">
											Primer Tema
											<i class="material-icons right">more_vert</i>
										</span>
										<p>
											Un bonito diseño para mailing masivo. Consiste en un encabezado con los principales datos del negocio. Además ofertas para que sus usuarios conozcan sus productos.
										</p>
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">
											Primer Tema
											<i class="material-icons right">close</i>
										</span>
  										<p>
											Un bonito diseño para mailing masivo. Consiste en un encabezado con los principales datos del negocio. Además ofertas para que sus usuarios conozcan sus productos.
										</p>
									</div>
									<div class="card-action">
										<div class="center">
											<a class="btn deep-orange" href="SendUsers.php?GrupoID=<?php echo $GrupoID; ?>&ThemeID=1">
												Seleccionar
											</a>
											<a target="_blank" class="btn btn-flat" href="PreviewTheme.php?GrupoID=<?php echo $GrupoID; ?>&ThemeID=1">
												Previo
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col s12 m6">
								<div class="card">
									<div class="card-image">
										<img class="activator" src="../../ImageFileStore/57eb0bf694f9f.jpg" />
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">
											Segundo Tema
											<i class="material-icons right">more_vert</i>
										</span>
										<p>
											Un bonito diseño para mailing masivo. Consiste en un encabezado con los principales datos del negocio. Además ofertas para que sus usuarios conozcan sus productos.
										</p>
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">
											Segundo Tema
											<i class="material-icons right">close</i>
										</span>
  										<p>
											Un bonito diseño para mailing masivo. Consiste en un encabezado con los principales datos del negocio. Además ofertas para que sus usuarios conozcan sus productos.
										</p>
									</div>
									<div class="card-action">
										<div class="center">
											<a class="btn deep-orange" href="SendUsers.php?GrupoID=<?php echo $GrupoID; ?>&ThemeID=2">
												Seleccionar
											</a>
											<a target="_blank" class="btn btn-flat" href="PreviewTheme.php?GrupoID=<?php echo $GrupoID; ?>&ThemeID=2">
												Previo
											</a>
										</div>
									</div>
								</div>
							</div>
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