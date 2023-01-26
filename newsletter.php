<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
    <link rel="stylesheet" href="styles/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header>
    <nav class="navbar">
        <span class="logo"><a href="index.html"><img src="imagens/logo.png" alt=""></a></span>
        <div class="menuButton">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mobileNav">
        <span class="navtext">
                <a href="#" class="dropbtn">Museu <img src="imagens/icon.png" alt=""></a>
                <span class="dropdown-content">
                    <a href="pages/historia.html">História</a>
                    <a href="pages/missao.html">Missão</a>
                    <a href="pages/editorial.html">Editorial</a>
                    <a href="pages/premios.html">Prémios</a>
                </span>
            </span>
            <span class="navtext">
                <a href="#" class="dropbtn">Coleções <img src="imagens/icon.png" alt=""></a>
                <span class="dropdown-content">
                    <a href="pages/arqueologia.html">Arqueologia</a>
                    <a href="pages/escultura.html">Escultura</a>
                    <a href="pages/ourivesaria.html">Ourivesaria</a>
                    <a href="pages/joalharia.html">Joalharia</a>
                    <a href="pages/pintura.html">Pintura</a>
                    <a href="pages/desenho.html">Desenho</a>
                    <a href="pages/ceramica.html">Cerâmica</a>
                    <a href="pages/texteis.html">Têxteis</a>
                    <a href="pages/mobiliario.html">Mobiliário</a>
                    <a href="pages/outras-colecoes.html">Outras Coleções</a>
                </span>
            </span>
            <span class="navtext"><a href="pages/exposicoes.html">Exposições</a></span>
            <span class="navtext"><a href="pages/como-visitar.html">Como Visitar</a></span>
        </div>
    </nav>
</header>

<div class="margin">

    <h1 class="titulo">Obrigado! Subscreveu a Newsletter!</h1>

    <?php

    $filename = 'newsletter.txt';

    $email = $_POST['email'];

    $write = $email . '<br>';

    file_put_contents($filename, $write, FILE_APPEND);
    ?>

    <a class="subtitulo" href="index.html"><p>Voltar atrás</p></a>
</div>

<footer>
    <div class="margin">
        <div class="footer">
            <a href="https://www.facebook.com/Museu-Nacional-de-Machado-de-Castro-145797318798963/" target="_blank"><img src="imagens/footer/fb.png" alt=""></a>
            <a href="https://www.instagram.com/museunacionalmachadodecastro/" target="_blank"> <img src="imagens/footer/insta.png" alt=""></a>
            <a href="https://www.youtube.com/user/MuseuMachadodeCastro" target="_blank"><img src="imagens/footer/yt.png" alt=""></a>
            <a href="http://museunacionaldemachadodecastro.blogspot.com/" target="_blank"><img src="imagens/footer/blog.png" alt=""></a>
            <a href="https://www.portugal.gov.pt/pt/gc22" target="_blank"><img src="imagens/footer/republica.png" alt=""></a>
            <a href="http://www.turismodeportugal.pt/pt/Paginas/homepage.aspx" target="_blank"><img src="imagens/footer/clean.png" alt=""></a>
            <a href="http://www.patrimoniocultural.gov.pt/pt/" target="_blank"><img src="imagens/footer/patrimonio.png" alt=""></a>
            <a href="https://www.tripadvisor.pt/Attraction_Review-g189143-d3249700-Reviews-Museu_Nacional_de_Machado_de_Castro-Coimbra_Coimbra_District_Central_Portugal.html" target="_blank"><img src="imagens/footer/trip.png" alt=""></a>
            <a href="http://www.matriznet.dgpc.pt/MatrizNet/Objectos/ObjectosListar.aspx?" target="_blank"><img src="imagens/footer/matriz.jpg" alt=""></a>
        </div>
    </div>
</footer>
</body>
</html>
