<!DOCTYPE html>
<?php
// IF tenário para tratar dos erros da página.
// Se a condição for verdadeira, logo apos o ? ele executa a instrução a esquerda dos : (dois pontos) se for falsa a direita.
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<html lang="pt-br">
	<head>
        <meta charset="iso-8859-1">
        <!--IE Compatibility modes-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Mobile first-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login</title>        
        <!-- jquery - link cdn -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>        
        <meta name="description"
        	content="Free Admin Template Based On Twitter Bootstrap 3.x">
        <meta name="author" content="">        
        <meta name="msapplication-TileColor" content="#5bc0de" />
        <meta name="msapplication-TileImage"
        	content="../bootstrap/img/metis-tile.png" />        
        <!-- Bootstrap -->
        <link rel="stylesheet"
        	href="../bootstrap/lib/bootstrap/css/bootstrap.css">
        <!-- Font Awesome -->
        <link rel="stylesheet"
        	href="../bootstrap/lib/font-awesome/css/font-awesome.css">
        <!-- Metis core stylesheet -->
        <link rel="stylesheet" href="../bootstrap/css/main.css">
        <!-- metisMenu stylesheet -->
        <link rel="stylesheet" href="../bootstrap/lib/metismenu/metisMenu.css">
        <!-- onoffcanvas stylesheet -->
        <link rel="stylesheet"
        	href="../bootstrap/lib/onoffcanvas/onoffcanvas.css">
        <!-- animate.css stylesheet -->
        <link rel="stylesheet" href="../bootstrap/lib/animate.css/animate.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
	</head>

<body class="login">

	<div class="form-signin">
		<div class="text-center">
			<img src="../assets/img/logo.png" alt="logo easyt">
		</div>
		<hr>
		<div class="tab-content">
			<div id="login" class="tab-pane active">
				<form name="loginform" method="post"
					action="../controller/validar_acesso.php">
					<p class="text-muted text-center">Insira seus dados para
						autenticação</p>
					<div class="form-group">
					<input type="text" placeholder="Usuário" name="usuario" id="campo_usuario"
						class="form-control top"> 
					</div>
					<div class="form-group">
					<input type="password"
						placeholder="Senha" name="senha" class="form-control bottom" id="campo_senha">
					</div>
					
					<div class="checkbox">
						<label> <input type="checkbox"> Lembrar-me
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" id="btn_login" type="submit">
					Entrar
					</button>
				</form>
            <?php
            if ($erro == 1) {
                echo '<font color="#E74C3C">Usuário e ou senha inválido(s)</font>';
            }
            ?>
        </div>
		</div>
		<hr>
		<p class="text-muted text-right">
			Made by <span style="font-weight: bold;">EasyTech®</span>
	
	</div>


	<!--jQuery -->
	<script src="../bootstrap/lib/jquery/jquery.js"></script>

	<!--Bootstrap -->
	<script src="../bootstrap/lib/bootstrap/js/bootstrap.js"></script>


	<script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);

        $(document).ready(function(){
			//verificar se os campos de usuário e senha foram devidamente preenchidos
			$('#btn_login').click(function(){

				var campo_vazio = false;

				//Função seletora
				if($('#campo_usuario').val() == ''){
					$('#campo_usuario').css({'border-color': '#E74C3C'});
					campo_vazio = true;
				} else {
					$('#campo_usuario').css({'border-color': '#CCC'});
				}	
				if($('#campo_senha').val() == ''){
					$('#campo_senha').css({'border-color': '#E74C3C'});
					campo_vazio = true;
				} else {
					$('#campo_senha').css({'border-color': '#CCC'});
				}
				//Cancela o submit do formulário
				if(campo_vazio) return false;				
			});
		})(jQuery);
        
    </script>
</body>

</html>
