<!DOCTYPE html>

<html lang="pt-br" dir="ltr">

<head>

    <!-- Charset and Viewport Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML Meta Tags -->
    <meta name="author" content="Marley de S. Santos">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Open Graph Meta Tags -->
    <meta property="og:url" content="https://www.recantonazareno.com.br">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Chácara Recanto Nazareno - Espaço para Eventos e Confraternizações">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:image:width" content="740">
    <meta property="og:image:height" content="522">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="./assets/css/index.css">

    <!-- Slick JS -->
    <link rel="stylesheet" type="text/css" href="assets/libraries/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/libraries/slick-1.8.1/slick/slick-theme.css">

    <!-- Lightbox -->
    <link href="assets/libraries/lightbox2-2.11.4/dist/css/lightbox.min.css" rel="stylesheet">
    <script src="assets/libraries/lightbox2-2.11.4/dist/js/lightbox-plus-jquery.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <!-- Title -->
    <title>Chácara Recanto Nazareno</title>

</head>

<body>
    <header>
        <!-- Overlay -->
        <div class="overlay"></div>

        <nav>
            <!-- Logo Chácara Recanto Nazareno -->
            <a href="index.php" class="logo">
                <img src="assets/images/logo.png" alt="Logo Chácara Recanto Nazareno">
                <span>Recanto Nazareno</span>
            </a>

            <!-- Links -->
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Instalação</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Galeria</a></li>
            </ul>

            <div class="action">
                <a href="#orçamento">Orçamento</a>
            </div>
        </nav>


        <div class="content-header">
            <div class="title">
                <h1>Chácara Recanto Nazareno</h1>
                <h2>Onde cada momento se torna uma lembrança inesquecível</h2>
            </div>

            <div class="arrow">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <main>

        <section class="about">
            <div class="info">
                <h2>Bem-vindo à Chácara Recanto Nazareno</h2>

                <p>Descubra o ambiete aconchegante e tranquilo da Chácara Recanto Nazareno, o local perfeito para tornar seus eventos e momentos especiais inesquecíveis. Situada em um cenário entre a cidade e o campo, nossa chácara oferece um ambiente acolhedor e harmonioso, ideal para celebrações, encontros familiares, aniversários, eventos corporativos e muito mais.</p>
            </div>

            <div class="info">
                <h3>Sobre a Chácara</h3>

                <p>A Chácara Recanto Nazareno é um espaço cuidadosamente projetado para proporcionar uma experiência única e memorável. Com amplas áreas ao ar livre e instalações modernas, nossa chácara combina o conforto e a praticidade com a beleza da natureza. Aqui, você encontrará:</p>

                <ul>
                    <li><strong>Áreas Verdes:</strong> Amplos jardins e áreas gramadas que criam um ambiente relaxante e perfeito para atividades ao ar livre.</li>

                    <li><strong>Estruturas e Acomodações: </strong>Espaços versáteis que podem ser adaptados para eventos de diferentes tamanhos, com infraestrutura completa para garantir seu conforto e conveniência.</li>

                    <li><strong>Ambiente Tranquilo: </strong>Uma atmosfera tranquila e privativa, longe da agitação urbana, ideal para uma pausa relaxante ou uma celebração em grande estilo.</li>
                </ul>
            </div>
        </section>

        <section class="gallery-images">

            <div class="title-images">
                <h3>Área Externa</h3>
            </div>

            <div class="gallery fotos">
                <?php
                $quantidade_imagens =  range(1, 42);

                foreach ($quantidade_imagens as $numero) {
                    echo '
                        <a href="assets/images/gallery/External/' . $numero . '.jpg" data-lightbox="mygallery">
                            <img src="assets/images/gallery/External/' . $numero . '.jpg" alt="' . $numero . '">

                            <!-- Preview -->
                            <img src="assets/images/gallery/External/' . $numero . '.jpg" alt="' . $numero . '">
                        </a>
                    ';
                }
                ?>
            </div>


            <div class="title-images">
                <h3>Área Interna</h3>
            </div>

            <div class="gallery fotos2">
                <?php
                $quantidade_imagens =  range(1, 14);

                foreach ($quantidade_imagens as $numero) {
                    echo '
                        <a href="assets/images/gallery/Internal/' . $numero . '.jpg" data-lightbox="mygallery">
                            <img src="assets/images/gallery/Internal/' . $numero . '.jpg" alt="' . $numero . '">

                            <!-- Preview -->
                            <img src="assets/images/gallery/Internal/' . $numero . '.jpg" alt="' . $numero . '">
                        </a>
                    ';
                }
                ?>
            </div>

        </section>

        <section class="form" id="orçamento">

            <div class="title-form">
                <h2>Solicite um Orçamento</h2>
            </div>

            <form action="" method="post">
                <div class="container-form">
                    <div class="informations">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" placeholder="Seu nome" required>
                    </div>

                    <div class="informations">
                        <label for="tipo">Tipo de evento</label>
                        <input type="text" name="tipo" id="tipo" placeholder="Especifique o tipo de evento" required>
                    </div>

                    <div class="informations">
                        <label for="quantidade">Quantidade de convidados</label>
                        <input type="number" name="quantidade" id="quantidade" min="1" max="600" placeholder="Máximo de 600 convidados">
                    </div>

                    <div class="informations">
                        <label for="data">Data do evento</label>
                        <input type="date" name="data" id="data">
                    </div>

                    <div class="informations">
                        <label for="
                        celular">Celular</label>
                        <input type="tel" name="celular" id="celular" placeholder="(11) 91234-5678" required>
                    </div>

                    <div class="informations btn">
                        <button type="submit">Solicitar</button>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <div class="copy">
            <span>Desenvolvido por </span>
            <a href="https://github.com/MarleyS439/" target="_blank"> Marley S. Santos</a>
        </div>
    </footer>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="assets/javascript/lightBox.js"></script>

    <script type="text/javascript" src="assets/libraries/slick-1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="assets/javascript/cards.js"></script>

    <!-- Phone Number Formatter -->
    <script type="text/javascript" src="assets/javascript/phoneNumberFormatter.js"></script>
</body>

</html>