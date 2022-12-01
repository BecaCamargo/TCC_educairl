<?php
session_start();
?>

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
                <li><a href="avaliacoes.php" style="color: rgb(98, 228, 233);">Avaliações</a><li>
                <li><a href="Comunidade.php">Comunidade</a><li>
                <li><a href="UltimasNoticias.php">Últimas Notícias</a><li>
                <li><a href="Sobre.php">Sobre</a></li>
            </ul>     
        </header>
        </nav>
    </div>

<div Id="designer-conteiner1">

    <div id="white-conteiner">
        <h3 class="top">Deixe aqui o seu feedback sobre a</h3>
        <h3 class="top2">escola.</h3> 
        <h4 class="top3">Deixe nos saber sua opinião!</h4>
        <input class="text2" type="text"> 
        <div id="linha-horizontal"></div>

    </div>

    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
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
				
    <h3 class="texto">NÃO SABE O QUE DIZER? VEJA ALGUMAS SUGESTÕES DE</h3>
    <h3 class="texto2">FEEDBACKS ABAIXO !</h3>
    <br>
    
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

    <h5>AVALIANDO A ESCOLA:</h5>

    <div id="AvSchool1">  
            <input type="button" value="ESCOLA">
    </div>  

    <div id="AvSchool2">  
        <a href="avaliacoes.php">
            <input type="submit" value="Enviar">
        </a>
    </div>  
</div>

<footer>
    Agradecemos sua visita! 
</footer>

</body>
</html>