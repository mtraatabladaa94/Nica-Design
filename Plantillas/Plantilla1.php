<?php
	$Url = "http://79.170.44.113/nicdesign.com/";

	$html = '
		<!DOCTYPE html>
		<html lang="es">
		<head>
			<meta charset="utf-8">
			<title>Plantilla 1</title>
		</head>
		<body style="padding: 0; margin: 0;" bgcolor="d9d7ce" style="font-family: Arial; font-size: 12px;">
		<table height="20px"></table>
		<div>
			<table style="margin:0 auto;" bgcolor="ffffff" border="0" cellspacing="0" cellpadding="0" width="600px">
				<tr>
					<td colspan="5">
						<img width="600px" src="'.$Url.'Resources/Images/12928301_10153693639495326_2341979282073055358_n.jpg" />
					</td>
				</tr>
				<tr>
					<td width="10px"></td>
					<td valign="middle">
						<a href="http://79.170.44.113/nicdesign.com/" style="text-decoration: none;">
							<strong>
								<font face="Calibri" size=5 color="efaf3e">
									NicDesign
								</font>
							</strong>
						</a>
					</td>
					<td valign="middle" align="center">
						<i>
							<font face="Calibri" size=2 color="0000">
								"Presencia y crecimiento de tu negocio en el mundo digital"
							</font>
						</i>
					</td>
					<td valign="middle" align="right">
						<strong>
							<font face="Calibri" size=2 color="0000">
								'.date("d/m/Y").'
							</font>
						</strong>
					</td>
					<td width="10px"></td>
				</tr>
			</table>
			<table style="margin:0 auto;" bgcolor="ffffff" height="3px" border="0" cellspacing="0" cellpadding="0" width="600px"></table>
			<table style="margin:0 auto;" bgcolor="ff5722" height="3px" border="0" cellspacing="0" cellpadding="0" width="600px"></table>
			<table style="margin:0 auto;" bgcolor="ffffff" border="0" cellspacing="0" cellpadding="0" width="600px">
				<tr>
					<td>
						<br />
					</td>
				</tr>
			</table>
	';


	$res = $mysqli->query("SELECT * FROM Publicacion");
	$tmp = 0;
	if($res) {
		while($item = $res->fetch_assoc()) {
			if($tmp == 0) {
				$html.='
					<table style="margin:0 auto;" bgcolor="ffffff" border="0" cellspacing="0" cellpadding="0" width="600px">
						<tr>
							<td width="20px"></td>
							<td width="300px" valign="top">
								<a href="">
									<img style="border-radius: 10px;" width="100%" src="'.$Url.'ImageFileStore/'.$item['Image'].'" />
								</a>
							</td>
							<td width="10px"></td>
							<td width="250px" valign="top">
								<a href="http://79.170.44.113/nicdesign.com/" style="text-decoration: none;">
									<font face="Calibri" size=4 color="efaf3e">
										'.$item['Titulo'].'
									</font>
								</a>
								<p align="justify" style="margin-top:5px;">
									<font face="Arial" size=2 color="000">
										'.$item['Contenido'].'
									</font>
									<br >
									<strong>
										<font face="Calibri" size=6 color="000">
											C$ '.number_format($item['Precio'], 2).'
										</font>
									</strong>
								</p>
							</td>
							<td width="20px"></td>
						</tr>
						<tr>
							<td colspan="5">
								<br />
							</td>
						</tr>
						<tr>
							<td width="20px"></td>
							<td colspan="3">
								<span>
									<img width="560" src="'.$Url.'Resources/Images/Separator.png">
								</span>
							</td>
							<td width="20px"></td>
						</tr>
						<tr>
							<td colspan="5">
								<br />
							</td>
						</tr>
					</table>
				';
			}
			else {
				$html.='
					<table style="margin:0 auto;" bgcolor="ffffff" border="0" cellspacing="0" cellpadding="0" width="600px">
						<tr>
							<td width="20px"></td>
							<td width="250px" valign="top">
								<a href="http://79.170.44.113/nicdesign.com/" style="text-decoration: none;">
									<font face="Calibri" size=4 color="efaf3e">
										'.$item['Titulo'].'
									</font>
								</a>
								<p align="justify" style="margin-top:5px;">
									<font face="Arial" size=2 color="000">
										'.$item['Contenido'].'
									</font>
									<br >
									<strong>
										<font face="Calibri" size=6 color="000">
											C$ '.number_format($item['Precio'], 2).'
										</font>
									</strong>
								</p>
							</td>
							<td width="10px"></td>
							<td width="300px" valign="top">
								<a href="">
									<img style="border-radius: 10px;" width="100%" src="'.$Url.'ImageFileStore/'.$item['Image'].'" />
								</a>
							</td>
							<td width="20px"></td>
						</tr>
						<tr>
							<td colspan="5">
								<br />
							</td>
						</tr>
						<tr>
							<td width="10px"></td>
							<td colspan="3">
								<span>
									<img width="560" src="'.$Url.'Resources/Images/Separator.png">
								</span>
							</td>
							<td width="10px"></td>
						</tr>
						<tr>
							<td colspan="5">
								<br />
							</td>
						</tr>
					</table>
				';
			}


			//se cambia de lado
			if($tmp == 0) {
				$tmp = 1;
			}
			else {
				$tmp = 0;
			}
		}
	}

	$html.='
		<table style="margin:0 auto;" bgcolor="ebebed" border="0" cellspacing="0" cellpadding="0" width="600px">
			<tr>
				<td colspan="5">
					<br />
				</td>
			</tr>
			<tr>
				<td width="10px"></td>
				<td width="150px" valign="top">
					<center>
						<strong>
							<font face="Calibri" size=3 color="efaf3e">
								Contactenos
							</font>
						</strong>
					</center>
					<br />
					<table width="145px" bgcolor="ffab91" height="1px" border="0" cellspacing="0" cellpadding="0"></table>
					<br />
					<strong>
						<font face="Calibri" size=2 color="efaf3e">
							Correos:
						</font>
					</strong>
					<br />
					<font face="Calibri" size=1 color="000">
						jonathan@artesanosnica.com
						<br />
						emiliolopez@artesanosnica.com
					</font>

					<strong>
						<font face="Calibri" size=2 color="efaf3e">
							Teléfonos:
						</font>
					</strong>
					<br />
					<font face="Calibri" size=1 color="000">
						(505) 8432-0840
					</font>
					<br />

					<strong>
						<font face="Calibri" size=2 color="efaf3e">
							Dirección:
						</font>
					</strong>
					<br />
					<font face="Calibri" size=1 color="000">
						De la gasolinera PUMA 800MTS al oeste. UNAN FAREM Chontales, Nicaragua.
					</font>
				</td>
				<td width="280px" valign="top">
					<center>
						<strong>
							<font face="Calibri" size=3 color="efaf3e">
								¿Que es NicDesign?
							</font>
						</strong>
					</center>
					<br />
					<table width="275px" bgcolor="ffab91" height="1px" border="0" cellspacing="0" cellpadding="0"></table>
					<br />
					<p align="justify">
						<font face="Calibri" size=1 color="000">
							Queremos brindarte una web competitiva adaptada a tu negocio, que se destaque del resto y que potencie la visibilidad online de tu negocio, asi como también la administración de contenidos dinámicos. Todo esto acompañado con el proceso de fortalecer el marketing y social media de tu labor como empresario, quitandote todas tus dudas e inquietudes para que puedas sacarle el máximo partido a tu posicionamiento en el mundo web.
						</font>
					</p>
				</td>
				<td width="145px" valign="top">
					<center>
						<strong>
							<font face="Calibri" size=3 color="efaf3e">
								Siguenos en
							</font>
						</strong>
					</center>
					<br />
					<table width="145px" bgcolor="ffab91" height="1px" border="0" cellspacing="0" cellpadding="0"></table>
					<br />
					<br />
					<div style="text-align: center;">
						<span>
							<a href="https://www.facebook.com/thejoseshop?_rdr=p" style="text-decoration: none;">
								<img style="margin:0 auto;" src="'.$Url.'Resources/Images/Facebook.png" width="32" height="32" />
							</a>
						</span>
						<span>
							<a href="https://twitter.com/thejoseshop" style="text-decoration: none;">
								<img style="margin:0 auto;" src="'.$Url.'Resources/Images/Twitter.png" width="32" height="32" />
							</a>
						</span>
						<span>
							<a href="https://pinterest.com/thejoseshop" style="text-decoration: none;">
								<img style="margin:0 auto;" src="'.$Url.'Resources/Images/Pinterest.png" width="32" height="32" />
							</a>
						</span>
					</div>
				</td>
				<td width="10px"></td>
			</tr>
			<tr>
				<td colspan="5">
					<br />
				</td>
			</tr>
		</table>

		<table style="margin:0 auto;" bgcolor="78909c" height="20px" border="0" cellspacing="0" cellpadding="0" width="600px">
			<tr>
				<td width="10px"></td>
				<td align="left" valign="middle">
					<span>
						<strong>
							<font face="Calibri" size=2 color="ffffff">
								© Copyright - <a href="" style="text-decoration: none; color:#fbe9e7;">NicDesign</a> '.date("Y").'
							</font>
						</strong>
					</span>
				</td>
				<td align="right" valign="middle">
					<span>
						<table height="4px" border="0" cellspacing="0" cellpadding="0"></table>
						<a href="" style="text-decoration: none;">
							<img width="32px" height="32px" src="'.$Url.'Resources/Images/Profile/12031434_651709138315117_3783905120307888826_o.png" />
						</a>
					</span>
				</td>
				<td width="10px"></td>
			</tr>
		</table>

		<table style="margin:0 auto;" height="10px" border="0" cellspacing="0" cellpadding="0" width="600px"></table>
	';

	return $html;
?>