<?php
    session_start(); // inicia a variavel $_SESSION
    $url = explode('/', $_SERVER['REQUEST_URI']); //pega a url e transforma em uma array
    //$page = $url[3]; // URL Local
    $page = $url[1]; // URL Online
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet media="screen and (max-width:480px)" href="css/estilo-480px.css">
    <link rel=stylesheet media="screen and (min-width: 481px) and (max-width:839px) " href="css/estilo-839px.css">
    <link rel=stylesheet media="screen and (min-width: 840px) and (max-width:1024px) " href="css/estilo-1024px.css">
    <link rel=stylesheet media="screen and (min-width: 1025px)" href="css/estilo-1025px.css">
    <title>Health Track</title>
</head>
<body>
    <header>
        <div class="navbar">
            <a href="index.php">Health Track</a>
            <a href="#h2-title-inf">Sobre</a>
            <a href="#h2-title-inf2">Como Funciona</a>
        </div>
    </header>

        <div id="div-banner">
            <div id="div-texto-banner">
                <h2 id="h2-banner">Temos uma excelente tecnologia e uma equipe preparada e dedicada a promover a saúde e o bem-estar, ajudando milhões de pessoas no Brasil inteiro.</h2>
            </div>
        </div>

    <div id="div-informacoes">
        <div id="inf">
            <h2 id="h2-title-inf">Sobre</h2>
            <h2 class="h2-inf">O projeto Health Track é um sistema para controle de Saúde alimentar e física do usuário. A solução proposta é desenvolver um software capaz de ajudar o usuário no gerenciamento de sua dieta passada conforme ordens médica.</h2>
        </div>
        <h2 id="h2-title-inf2">Como funciona</h2>
        <div id="div-cf">
            <div id="inf2">
                <img class="img-inf" src="imagens/cel-etapa-1.png">
                <h2 class="h2-inf">O cadastro é rápido e seguro com Design simples e intuitivo, onde você encontra facilmente o que precisa.</h2>
            </div>

            <div class="inf">
                <img class="img-inf" src="imagens/cel-etapa-2.png">
                <h2 class="h2-inf">O histórico completo do usuário é mantido dentro do aplicativo, com a permissão do paciente o dados são cedidos apenas para o nutricionista.</h2>
            </div>

            <div class="inf">
                <img class="img-inf" src="imagens/cel-etapa-3.png">
                <h2 class="h2-inf">O usuário tem a possibilidade de tirar dúvidas e se informar com apenas dois cliques, com a permissão do nutricionista são disponibilizados os perfis profissionais do mesmo!!!</h2>
            </div>
        </div>
    </div>


    
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Health Track<span></span></h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
                    <a href="#">emailempresa@email.com</a>
                    <br>
                    <a href="#">(11)99999-9999</a>
                    .
                    <a href="#">FIXO 00000011</a>
				</p>

				<p class="footer-company-name">Heart Track © 2020</p>


			</div>

			<div class="footer-right">

				<p id="contact">Contate-nos</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email">
					<textarea name="message" placeholder="Mensagem"></textarea>
					<button>Enviar</button>

				</form>

			</div>

		</footer>
</body>
</html>