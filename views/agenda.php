<?php 
$host = "localhost";
$user = "root";
$pass = "";
$banco = "easyt";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php 
    session_start();
    if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
        header ("Location: login.php");
        exit;
    } else {
        echo "Você está logado!";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset=iso-8859-1>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Tag utilizada para design responsÃ­vos -->
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>EasyT-Dashboard</title>

<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Estilo prÃ³prio do projeto -->
<link href="../assets/css/estilo.css" rel="stylesheet">

<meta name="description"
	content="Free Admin Template Based On Twitter Bootstrap 3.x">
<meta name="author" content="">

<meta name="msapplication-TileColor" content="#5bc0de" />
<meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="../bootstrap/lib/bootstrap/css/bootstrap.css">

<!-- Font Awesome -->
<link rel="stylesheet"
	href="../bootstrap/lib/font-awesome/css/font-awesome.css">

<!-- Metis core stylesheet -->
<link rel="stylesheet" href="../bootstrap/css/main.css">

<link rel="stylesheet" href="../assets/css/calendario.css">

<!-- metisMenu stylesheet -->
<link rel="stylesheet" href="../bootstrap/lib/metismenu/metisMenu.css">

<!-- onoffcanvas stylesheet -->
<link rel="stylesheet" href="../bootstrap/lib/onoffcanvas/onoffcanvas.css">

<!-- animate.css stylesheet -->
<link rel="stylesheet" href="../bootstrap/lib/animate.css/animate.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<!-- Barra de NavegaÃ§Ã£o -->
	<nav class="navbar navbar-default ">
		<div class="container">
			<div class="navbar-header">

				<!-- Chamar barra lateral -->
				<a href="#menu-toggle" class="btn btn-default navbar-left" id="menu-toggle">|||</a>
				
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#barra-navegacao">
					<span class="sr-only">Alternar Menu</span>
					<!--Texto para leitores de tela-->
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"> <img src="../assets/img/logo.png"
					width="80" height="27" class="d-inline-block align-top">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="barra-navegacao">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Ajuda</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"> UsuÃ¡rio <span class="caret"></span>
					</a>
						<ul class="dropdown-menu">
							<li><a href="#">Minha Conta</a></li>
							<li><a href="login.php">Logout</a></li>
						</ul></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Encerramento Barra de NavegaÃ§Ã£o -->


	<!-- Barra lateral -->
	<div id="wrapper">

		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li><a href="../index.php#">Dashboard</a></li>
				<li><a href="#">Tomadas</a></li>
				<li><a href="agenda.php">Agenda</a></li>
				<li><a href="relatorios.html">Relatórios</a></li>
				<li><a href="configuracoes.html">Configurações</a></li>
			</ul>
		</div>
		<!-- /#sidebar-wrapper -->
		<!-- Page Content -->
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<div class="page-header">
							<h1>Agenda</h1>
						</div>
					</div>
				</div>

				<div class="container-fluid ">
					<div class="row">
						<!-- Coluna 1 do corpo-->
						<div class="col-xs-3">
							<h2>Status</h2>
								<div>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Data</th>
												<th>Nome</th>
												<th>DescriÃ§Ã£o</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>22/02/2012</td>
												<td>Ligar Switche HP</td>
												<td>Liga switche responsÃ¡vel pela rede corporativa.</td>
											</tr>
											<tr>
												<td>Mary</td>
												<td>Moe</td>
												<td>mary@example.com</td>
											</tr>
											<tr>
												<td>July</td>
												<td>Dooley</td>
												<td>july@example.com</td>
											</tr>
										</tbody>
									</table>


								</div>
						</div>

						<!-- Coluna 2 do corpo-->
						<div class="col-xs-6">
							<div id="agendamentos" class="row">
								<div id="calendar"
									class="col-sm-8 col-md-9 animated animated-sm bounceInUp">
									<h2>
										Calendar <small>plan it</small><i
											class="fa fa-plus fa-fw pull-right small btn btn-block"></i>
									</h2>

									<div class="panel panel-default">
										<div class="panel-body">
											<div class="calendar fc fc-ltr">
												<table class="fc-header" style="width: 100%">
													<tbody>
														<tr>
															<td class="fc-header-left">
																<div class="btn-group">
																	<button type="button"
																		class="fc-button-prev fc-corner-left btn btn-default btn-sm">
																		<i class="fa fa-chevron-left"></i>

																	</button>
																	<button type="button" class="btn btn-default btn-sm">
																		<i class="fa fa-chevron-right"></i>

																	</button>
																</div> <span
																class="fc-button fc-button-prev fc-state-default fc-corner-left"
																unselectable="on"><span class="fc-text-arrow">‹</span></span>
																<span
																class="fc-button fc-button-next fc-state-default fc-corner-right"
																unselectable="on"><span class="fc-text-arrow">›</span></span>
																<span class="fc-header-space"></span><span
																class="fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right fc-state-disabled"
																unselectable="on">today</span>

															</td>
															<td class="fc-header-center"><span
																class="fc-header-title">
																	<h2>January 2014</h2>
															</span></td>
															<td class="fc-header-right"><span
																class="fc-button fc-button-month fc-state-default fc-corner-left fc-state-active"
																unselectable="on">month</span><span
																class="fc-button fc-button-agendaWeek fc-state-default"
																unselectable="on">week</span><span
																class="fc-button fc-button-agendaDay fc-state-default fc-corner-right"
																unselectable="on">day</span></td>
														</tr>
													</tbody>
												</table>
												<div class="fc-content"
													style="position: relative; min-height: 1px;">
													<div class="fc-view fc-view-month fc-grid"
														style="position: relative; min-height: 1px;"
														unselectable="on">
														<div
															style="position: absolute; z-index: 8; top: 0; left: 0">
															<div
																class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end ui-draggable"
																style="position: absolute; z-index: 8; left: 495px; top: 60px;"
																unselectable="on">
																<div class="fc-event-inner">
																	<span class="fc-event-title"
																		style="position: relative; left: 18px; top: 10px; font-size: 20px;">3</span>

																</div>
																<div class="ui-resizable-handle ui-resizable-e">   </div>
															</div>
															<div
																class="fc-event fc-event-hori fc-event-draggable fc-event-start"
																style="position: absolute; z-index: 8; left: 804px; width: 304px; top: 352px;">
																<div class="fc-event-inner">
																	<span class="fc-event-title"
																		style="position: relative; left: 18px; top: 10px; font-size: 20px;">5</span>

																</div>
															</div>
															<div
																class="fc-event fc-event-hori fc-event-draggable fc-event-end"
																style="position: absolute; z-index: 8; left: 20px; top: 470px;">
																<div class="fc-event-inner">
																	<span class="fc-event-title"
																		style="position: relative; left: 17px; top: 9px; font-size: 20px;">2</span>

																</div>
																<div class="ui-resizable-handle ui-resizable-e">   </div>
															</div>
															<div
																class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end"
																style="position: absolute; z-index: 8; left: 306px; top: 265px;">
																<div class="fc-event-inner">
																	<span class="fc-event-title"
																		style="position: relative; top: 11px; left: 18px; font-size: 20px;">2</span>

																</div>
																<div class="ui-resizable-handle ui-resizable-e">   </div>
															</div>
														</div>
														<table class="fc-border-separate" style="width: 100%"
															cellspacing="0">
															<thead>
																<tr class="fc-first fc-last">
																	<th
																		class="fc-day-header fc-sun fc-widget-header fc-first"
																		style="width: 158px;">Sun</th>
																	<th class="fc-day-header fc-mon fc-widget-header"
																		style="width: 158px;">Mon</th>
																	<th class="fc-day-header fc-tue fc-widget-header"
																		style="width: 158px;">Tue</th>
																	<th class="fc-day-header fc-wed fc-widget-header"
																		style="width: 158px;">Wed</th>
																	<th class="fc-day-header fc-thu fc-widget-header"
																		style="width: 158px;">Thu</th>
																	<th class="fc-day-header fc-fri fc-widget-header"
																		style="width: 158px;">Fri</th>
																	<th
																		class="fc-day-header fc-sat fc-widget-header fc-last"
																		style="width: 158px;">Sat</th>
																</tr>
															</thead>
															<tbody>
																<tr class="fc-week fc-first">
																	<td
																		class="fc-day fc-sun fc-widget-content fc-other-month fc-first"
																		data-date="2013-12-29">
																		<div style="min-height: 80px;">
																			<div class="fc-day-number">29</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-mon fc-widget-content fc-other-month"
																		data-date="2013-12-30">
																		<div>
																			<div class="fc-day-number">30</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-tue fc-widget-content fc-other-month"
																		data-date="2013-12-31">
																		<div>
																			<div class="fc-day-number">31</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-wed fc-widget-content"
																		data-date="2014-01-01">
																		<div>
																			<div class="fc-day-number">1</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-thu fc-widget-content"
																		data-date="2014-01-02">
																		<div>
																			<div class="fc-day-number">2</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-fri fc-widget-content"
																		data-date="2014-01-03">
																		<div>
																			<div class="fc-day-number">3</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-sat fc-widget-content fc-last"
																		data-date="2014-01-04">
																		<div>
																			<div class="fc-day-number">4</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr class="fc-week">
																	<td class="fc-day fc-sun fc-widget-content fc-first"
																		data-date="2014-01-05">
																		<div style="min-height: 80px;">
																			<div class="fc-day-number">5</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-mon fc-widget-content"
																		data-date="2014-01-06">
																		<div>
																			<div class="fc-day-number">6</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-tue fc-widget-content"
																		data-date="2014-01-07">
																		<div>
																			<div class="fc-day-number">7</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-wed fc-widget-content"
																		data-date="2014-01-08">
																		<div>
																			<div class="fc-day-number">8</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-thu fc-widget-content"
																		data-date="2014-01-09">
																		<div>
																			<div class="fc-day-number">9</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-fri fc-widget-content"
																		data-date="2014-01-10">
																		<div>
																			<div class="fc-day-number">10</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-sat fc-widget-content fc-last"
																		data-date="2014-01-11">
																		<div>
																			<div class="fc-day-number">11</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr class="fc-week">
																	<td class="fc-day fc-sun fc-widget-content fc-first"
																		data-date="2014-01-12">
																		<div style="min-height: 80px;">
																			<div class="fc-day-number">12</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-mon fc-widget-content"
																		data-date="2014-01-13">
																		<div>
																			<div class="fc-day-number">13</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-tue fc-widget-content"
																		data-date="2014-01-14">
																		<div>
																			<div class="fc-day-number">14</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-wed fc-widget-content"
																		data-date="2014-01-15">
																		<div>
																			<div class="fc-day-number">15</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-thu fc-widget-content"
																		data-date="2014-01-16">
																		<div>
																			<div class="fc-day-number">16</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-fri fc-widget-content"
																		data-date="2014-01-17">
																		<div>
																			<div class="fc-day-number">17</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-sat fc-widget-content fc-last"
																		data-date="2014-01-18">
																		<div>
																			<div class="fc-day-number">18</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr class="fc-week">
																	<td class="fc-day fc-sun fc-widget-content fc-first"
																		data-date="2014-01-19">
																		<div style="min-height: 80px;">
																			<div class="fc-day-number">19</div>
																			<div class="fc-day-content">
																				<div style="position: relative;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-mon fc-widget-content"
																		data-date="2014-01-20">
																		<div>
																			<div class="fc-day-number">20</div>
																			<div class="fc-day-content">
																				<div style="position: relative;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-tue fc-widget-content"
																		data-date="2014-01-21">
																		<div>
																			<div class="fc-day-number">21</div>
																			<div class="fc-day-content">
																				<div style="position: relative;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-wed fc-widget-content fc-today fc-state-highlight"
																		data-date="2014-01-22">
																		<div>
																			<div class="fc-day-number">22</div>
																			<div class="fc-day-content">
																				<div style="position: relative;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-thu fc-widget-content"
																		data-date="2014-01-23">
																		<div>
																			<div class="fc-day-number">23</div>
																			<div class="fc-day-content">
																				<div style="position: relative;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-fri fc-widget-content"
																		data-date="2014-01-24">
																		<div>
																			<div class="fc-day-number">24</div>
																			<div class="fc-day-content">
																				<div style="position: relative;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-sat fc-widget-content fc-last"
																		data-date="2014-01-25">
																		<div>
																			<div class="fc-day-number">25</div>
																			<div class="fc-day-content">
																				<div style="position: relative;"> </div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr class="fc-week">
																	<td class="fc-day fc-sun fc-widget-content fc-first"
																		data-date="2014-01-26">
																		<div style="min-height: 80px;">
																			<div class="fc-day-number">26</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-mon fc-widget-content"
																		data-date="2014-01-27">
																		<div>
																			<div class="fc-day-number">27</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-tue fc-widget-content"
																		data-date="2014-01-28">
																		<div>
																			<div class="fc-day-number">28</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-wed fc-widget-content"
																		data-date="2014-01-29">
																		<div>
																			<div class="fc-day-number">29</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-thu fc-widget-content"
																		data-date="2014-01-30">
																		<div>
																			<div class="fc-day-number">30</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td class="fc-day fc-fri fc-widget-content"
																		data-date="2014-01-31">
																		<div>
																			<div class="fc-day-number">31</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-sat fc-widget-content fc-other-month fc-last"
																		data-date="2014-02-01">
																		<div>
																			<div class="fc-day-number">1</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 25px;"> </div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr class="fc-week fc-last">
																	<td
																		class="fc-day fc-sun fc-widget-content fc-other-month fc-first"
																		data-date="2014-02-02">
																		<div style="min-height: 80px;">
																			<div class="fc-day-number">2</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-mon fc-widget-content fc-other-month"
																		data-date="2014-02-03">
																		<div>
																			<div class="fc-day-number">3</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-tue fc-widget-content fc-other-month"
																		data-date="2014-02-04">
																		<div>
																			<div class="fc-day-number">4</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-wed fc-widget-content fc-other-month"
																		data-date="2014-02-05">
																		<div>
																			<div class="fc-day-number">5</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-thu fc-widget-content fc-other-month"
																		data-date="2014-02-06">
																		<div>
																			<div class="fc-day-number">6</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-fri fc-widget-content fc-other-month"
																		data-date="2014-02-07">
																		<div>
																			<div class="fc-day-number">7</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																	<td
																		class="fc-day fc-sat fc-widget-content fc-other-month fc-last"
																		data-date="2014-02-08">
																		<div>
																			<div class="fc-day-number">8</div>
																			<div class="fc-day-content">
																				<div style="position: relative; height: 0px;"> </div>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /#page-content-wrapper -->
		</div>
<!-- /#wrapper -->
	</div>

		<!-- jQuery -->
		<script src="../bootstrap/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		<script src="../essets/js/scripts.js"></script>

		<!-- Menu Toggle Script -->
		<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>