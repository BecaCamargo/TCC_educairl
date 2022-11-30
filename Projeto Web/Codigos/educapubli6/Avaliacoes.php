<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Avaliações</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/MenuStyle.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/avaliacoes.css"> 
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <header>
            <nav>
            <a class="logo" href="Menu.php">Educa IRL</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
                </div>
            <ul class="nav-list">
                <li><a href="admin.php">Adiministração</a><li>
                <li><a href="EscolasLocais.php">Escolas locais</a><li>
                <li><a href="Avaliacoes.php" style="color: rgb(98, 228, 233);">Avaliações</a><li>
                <li><a href="Comunidade.php">Comunidade</a><li>
                <li><a href="UltimasNoticias.php">Últimas Notícias</a><li>
                <nav class="dp-menu">
                <ul>
                    <li><a class="more" href="#">+</a>
                        <ul class="font">
                            <li><a href="Sobre.php">Sobre</a></li>
                            <li><a href="Perfil.php">Perfil</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            </ul>     
        </header>
        </nav>
    </div>

<div Id="designer-conteiner1">

    <div id="white-conteiner">
        <p class="top">Deixe aqui o seu feedback</p>
        <p class="top2">Sobre escola.</p>
        <h4 class="top3">Deixe nos saber sua opinião!</h4> 
        <input id="opinion-text" type="text" id="Nome" placeholder="texto">

    </div>

    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processostars.php" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>							
        </div>
	</form>
				
    <br><br><br>
    <h3 class="text">Não sabe o que dizer? veja algumas sugestões de feedbacks abaixo!</h3>
    <br><br><br>
   

<div class="containerBox">
    <container>
        <div class="container">
            <input type="button" value="Pouca participação dos pais">

            <input type="button" value="Metodologia de ensino ultrapassada">
        </div>
    </container> 
</div> 

<br><br>

    <section>
        <div class="container">
                <input type="button" value="Alimentação pracéria">

                <input type="button" value="Infraestrutura fraca">
            </label>
        </div>
    </section>

<br><br>

    <section>
        <div class="container">
            <input type="button" value="Falta de material">
    
            <input type="button" value="Falta de compromisso">
        </div>
    </section>

    <div class="botao">
        <input class="botão1" type="submit" value="Enviar">
    </div>

    <h5>AVALIANDO A ESCOLA:</h5>

    <div class="AvSchool">
        <input class="botao2" type="submit" value="Enviar">
    </div>

</div>



<footer>
    Agradecemos sua visita! 
</footer>

</body>
</html>