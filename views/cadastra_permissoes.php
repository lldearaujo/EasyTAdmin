<!DOCTYPE html>
<?php
    // IF tenário para tratar dos erros da página.
    // Se a condição for verdadeira, logo apos o ? ele executa a instrução a esquerda dos : (dois pontos) se for falsa a direita.
    // Verifica se o existe condições para o carregamento
    $edt = isset($_GET['edt']) ? $_GET['edt'] : 0;
    //Vefirica se os checkbox já estão marcados
    $selecao = array(); 
    function verifica($valor, $array)
    {
        if(in_array($valor, $array))
            echo "checked='checked'";
    }
    
    
    
    
    
    
    
?>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<!--IE Compatibility modes-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--Mobile first-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Gerenciar permissões</title>

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
	    <![endif]-->
</head>
<body>
	<div class="container">

		<div class="page-header">
			<h1>Cadastro de Permissões</h1>
		</div>

		<div class="row">
			<div class="col-xs-8">
				<h4>Preencha todos os campos a seguir:</h4>
				<form method="post" action="../controller/registra_permissoes.php"
					id="formUsuario">
					<div class="form-group">
						<input type="text" id="nome" name="nome" placeholder="Nome"
							class="form-control">
					</div>

					<div class="form-group">
						<input type="text" id="descricao" name="descricao"
							placeholder="Descrição" class="form-control">
					</div>

					<div class="form-group">
						<div class="col-lg-8">
							<h5>Marque as abas que dejesa permitir o acesso:</h5>
							<div class="checkbox">
								<label> <input class="uniform" type="checkbox" value="1"
									name="abas[]" <?php verifica("1", $selecao)?>> Dashboard
								</label>
							</div>
							<div class="checkbox">
								<label> <input class="uniform" type="checkbox" value="2"
									name="abas[]" <?php verifica("2", $selecao)?>> Tomadas
								</label>
							</div>
							<div class="checkbox">
								<label> <input class="uniform" type="checkbox" value="3"
									name="abas[]" <?php verifica("3", $selecao)?>> Agenda
								</label>
							</div>
							<div class="checkbox">
								<label> <input class="uniform" type="checkbox" value="4"
									name="abas[]" <?php verifica("4", $selecao)?>> Relatórios
								</label>
							</div>
							<div class="checkbox">
								<label> <input class="uniform" type="checkbox" value="5"
									name="abas[]" <?php verifica("5", $selecao)?>> Configurações
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<?php
                            if ($edt == 1) {
                                echo '<font color="#E74C3C">Editar Permissão</font>';
                                }
                            ?>
							<button type="submit" class="btn btn-primary form-control">Salvar</button>
						</div>
					</div>
				</form>
			</div>
		</div>





	</div>
	
	<script type="text/javascript">

	</script>
	

</body>

</html>
