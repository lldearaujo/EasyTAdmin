<?php
echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?" . ">";
$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
require_once ('../controller/permissao.class.php');
$permissao = new Permissao();
$permissao->getNome();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset=iso-8859-1>
<!--IE Compatibility modes-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--Mobile first-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Cadastrar Usuários</title>

<!-- jquery - link cdn -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<meta name="description"
	content="Free Admin Template Based On Twitter Bootstrap 3.x">
<meta name="author" content="">

<meta name="msapplication-TileColor" content="#5bc0de" />
<meta name="msapplication-TileImage"
	content="../assets/img/metis-tile.png" />

<link href="../bootstrap/css/bootstrap-toggle.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap-toggle.js"></script>

<!-- Bootstrap -->
<link rel="stylesheet"
	href="../bootstrap/lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../assets/css/estilo.css">

<!-- Font Awesome -->
<link rel="stylesheet"
	href="../bootstrap/lib/font-awesome/css/font-awesome.css">

<!-- Metis core stylesheet -->
<link rel="stylesheet" href="../bootstrap/css/main.css">

<!-- metisMenu stylesheet -->
<link rel="stylesheet" href="../abootstrap/lib/metismenu/metisMenu.css">

<!-- onoffcanvas stylesheet -->
<link rel="stylesheet"
	href="../abootstrap/lib/onoffcanvas/onoffcanvas.css">

<!-- animate.css stylesheet -->
<link rel="stylesheet" href="../bootstrap/lib/animate.css/animate.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif] -->

</head>
<body>
	<div class="container">

		<div class="page-header">
			<h1>Cadastro de Usuários</h1>
		</div>

		<div class="row">
			<div class="col-xs-8">
				<h4>Preencha todos os campos a seguir:</h4>
				<form method="post" action="../controller/registra_usuario.php"
					id="formUsuario">
					<div class="form-group">
						<input type="text" id="nome" name="nome" placeholder="Nome"
							class="form-control">
					</div>

					<div class="form-group">
						<input type="text" id="username" name="username"
							placeholder="Usuário" class="form-control">
						<?php
    if ($erro_usuario) {
        echo '<font style="color:#E74C3C">Usuário já existe</font';
    }
    ?>
					</div>

					<div class="form-group">
						<input type="password" id="password" name="password"
							placeholder="Senha" class="form-control">
					</div>

					<div class="form-group">

						<label class="control-label col-lg-3">Selecione as permissões do
							usuário</label>
						<div class="form-group">
							<div class="col-lg-4">
								<select id="select_permissao" name="select_permissao"
									class="form-control">
									
									<option value="<?php echo serialize($permissao->getNome());?>"></option>
								</select>
							</div>
						</div>

					</div>
					<div class="form-group row">
						<div class="col-sm-3">
							<button type="submit" id="btn_salvar"
								class="btn btn-primary form-control">Salvar</button>
						</div>
					</div>
				</form>

				<div>
					<button onclick="myFunction()" name="btn_add" id="btn_add"
						class="btn">
						<i class="glyphicon glyphicon-plus"></i>
					</button>
					<button id="btn_edt" class="btn">
						<i class="glyphicon glyphicon-wrench"></i>
					</button>
				</div>


			</div>
		</div>
	</div>

	<!--jQuery -->
	<script src="../bootstrap/lib/jquery/jquery.js"></script>

	<!--Bootstrap -->
	<script src="../bootstrap/lib/bootstrap/js/bootstrap.js"></script>

	<script type="text/javascript">
        $(document).ready(function(){
			//verificar se os campos de nome, usuário e senha foram devidamente preenchidos
			$('#btn_salvar').click(function(){

				var campo_vazio = false;

				//Função seletora
				if($('#nome').val() == ''){
					$('#nome').css({'border-color': '#E74C3C'});
					campo_vazio = true;
				} else {
					$('#nome').css({'border-color': '#CCC'});
				}	
				if($('#username').val() == ''){
					$('#username').css({'border-color': '#E74C3C'});
					campo_vazio = true;
				} else {
					$('#username').css({'border-color': '#CCC'});
				}
				if($('#password').val() == ''){
				$('#password').css({'border-color': '#E74C3C'});
				campo_vazio = true;
				} else {
					$('#password').css({'border-color': '#CCC'});
				}
				//Cancela o submit do formulário
				if(campo_vazio) return false;				
			});
		})(jQuery);


        function myFunction() {
            var myWindow = window.open("cadastra_permissoes.php", "myWindow", "width=490,height=480");
        }
        
    </script>

</body>

</html>
