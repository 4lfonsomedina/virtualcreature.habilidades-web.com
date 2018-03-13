<!DOCTYPE html>
<html>
<head>
	<title>VirtualCreature</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquerymin.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/virtualcreature.js"></script>
	<style type="text/css">
		table{
			width: 100%;
		}
		.vc_celda{
			text-align: center;
			width: 5%;
		}
		.container{
			padding-top: 50px;
		}
		.vc_menu{
			
			padding:10px;
			text-align: center;
		}
		.vc_menu img{
			width: 60px;
		}
		.vc_alto{
			height: 300px;
		}
		.a{
			padding-top: 110px;
		}
		.vc_celda_estatus{
			text-align: center;
			padding-bottom: 10px;
			height: 65px !important;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-3 vc_menu"><a href="#" id="btn_m_comer" btn="m_comer"><img src="img/menu/m_comer.png"></a></div>
					<div class="col-xs-3 vc_menu"><a href="#" id="btn_m_limpiar" btn="m_limpiar"><img src="img/menu/m_limpiar.png"></a></div>
					<div class="col-xs-3 vc_menu"><a href="#" btn="m_vacuna"><img src="img/menu/m_vacuna.png"></a></div>
					<div class="col-xs-3 vc_menu"><a href="#" btn="m_info"><img src="img/menu/m_info.png"></a></div>
				</div>
				<div class="row">
					<div class="col-xs-2 vc_menu vc_alto a"><a href="#" btn="m_compartir"><img src="img/menu/m_compartir.png"></a></div>
					<div class="col-xs-8 vc_alto">
						<div class="col-xs-12" style="height: 155px;">
							
						</div>
						<div class="panel panel-default" style="height: 100%">
							<div class="panel-body">
<!--
								<table border="1">
--><table>
									<tr>
										<td class="vc_celda_estatus" id="vc_ce1"></td>
										<td class="vc_celda_estatus" id="vc_ce2"></td>
										<td class="vc_celda_estatus" id="vc_ce3"></td>
										<td class="vc_celda_estatus" id="vc_ce4"></td>
										<td class="vc_celda_estatus" id="vc_ce5"></td>
										<td class="vc_celda_estatus" id="vc_ce6"></td>
										<td class="vc_celda_estatus" id="vc_ce7"></td>
										<td class="vc_celda_estatus" id="vc_ce8"></td>
										<td class="vc_celda_estatus" id="vc_ce9"></td>
										<td class="vc_celda_estatus" id="vc_ce10"></td>
										<td class="vc_celda_estatus" id="vc_ce11"></td>
										<td class="vc_celda_estatus" id="vc_ce12"></td>
										<td class="vc_celda_estatus" id="vc_ce13"></td>
										<td class="vc_celda_estatus" id="vc_ce14"></td>
										<td class="vc_celda_estatus" id="vc_ce15"></td>
										<td class="vc_celda_estatus" id="vc_ce16"></td>
										<td class="vc_celda_estatus" id="vc_ce17"></td>
										<td class="vc_celda_estatus" id="vc_ce18"></td>
										<td class="vc_celda_estatus" id="vc_ce19"></td>
										<td class="vc_celda_estatus" id="vc_ce20"></td>
									</tr>
									<tr>
										<td class="vc_celda" id="vc_c1"></td>
										<td class="vc_celda" id="vc_c2"></td>
										<td class="vc_celda" id="vc_c3"></td>
										<td class="vc_celda" id="vc_c4"></td>
										<td class="vc_celda" id="vc_c5"></td>
										<td class="vc_celda" id="vc_c6"></td>
										<td class="vc_celda" id="vc_c7"></td>
										<td class="vc_celda" id="vc_c8"></td>
										<td class="vc_celda" id="vc_c9"></td>
										<td class="vc_celda" id="vc_c10"><img src='img/creature/lvl1/creature2.gif'></td>
										<td class="vc_celda" id="vc_c11"></td>
										<td class="vc_celda" id="vc_c12"></td>
										<td class="vc_celda" id="vc_c13"></td>
										<td class="vc_celda" id="vc_c14"></td>
										<td class="vc_celda" id="vc_c15"></td>
										<td class="vc_celda" id="vc_c16"></td>
										<td class="vc_celda" id="vc_c17"></td>
										<td class="vc_celda" id="vc_c18"></td>
										<td class="vc_celda" id="vc_c19"></td>
										<td class="vc_celda" id="vc_c20"></td>
									</tr>
								</table>
							</div>
						</div>

					</div>
					<div class="col-xs-2 vc_menu vc_alto a"><a href="#" btn="m_donar"><img src="img/menu/m_donar.png"></a></div>
				</div>
				<div class="row">
					<div class="col-xs-3 vc_menu"><a href="#" btn="m_ejercicio"><img src="img/menu/m_ejercicio.png"></a></div>
					<div class="col-xs-3 vc_menu"><a href="#" btn="m_leer"><img src="img/menu/m_leer.png"></a></div>
					<div class="col-xs-3 vc_menu"><a href="#" btn="m_batalla"><img src="img/menu/m_batalla.png"></a></div>
					<div class="col-xs-3 vc_menu"><a href="#" btn="m_clasificacion"><img src="img/menu/m_clasificacion.png"></a></div>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>



