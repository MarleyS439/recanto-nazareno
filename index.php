<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Marley de S. Santos">
    <link rel="shortcut icon" href="./assets/images/logo.jpeg" type="image/x-icon">
    <title>Recanto Nazareno</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="./assets/libraries/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./assets/libraries/slick-1.8.1/slick/slick-theme.css">
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <!-- Navegação-->
        <nav>
            <!-- Logo -->
            <a href="index.php">
                <div class="logo-area">
                    <img src="./assets/images/logo.jpeg" alt="Logo">
                    <span>Recanto Nazareno</span>
                </div>
            </a>


            <!-- Ícone de menu mobile -->
            <div class="menu-icon">
                <svg width="50" height="50">
                    <image href="./assets/images/icons/menu.svg" width="50" height="50" />
                </svg>
            </div>

            <!-- Menu mobile -->
            <ul class="mobile-menu">
                <li><a href="#">Início</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Instalação</a></li>
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Contato</a></li>
                <li id="orcamentoOnline"><a href="#">Orçamento online</a></li>
            </ul>

            <!-- Menu desktop -->
            <ul class="desktop-menu">
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#events">Eventos</a></li>
                <li><a href="#">Instalação</a></li>
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Contato</a></li>
            </ul>

            <!-- Acesso rápido -->
            <div>
                <a href="#formulario" id="orcamento">Orçamento online</a>
            </div>

        </nav>

        <!-- Sobreposição -->
        <div class="overlay">

        </div>

        <!-- Título do header -->
        <div class="title-header">
            <div class="content">
                <h1>Chácara Recanto Nazareno</h1>
                <p>Onde cada momento se torna uma lembrança inesquecível</p>
            </div>

            <!-- Flechas de ação -->
            <div class="arrow">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Principal -->
    <main>
        <section class="about" id="sobre">
            <div class="about-info">
                <div>
                    <img src="./assets/images/logo.jpeg" alt="Logo Chácara Recanto Nazareno">
                    <h2>O Recanto Nazareno</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias vitae aperiam eius, dolor
                        alias
                        iste voluptatum dolorum sapiente cupiditate voluptatem, possimus sed corrupti, minima rerum
                        tempora
                        debitis optio doloremque ducimus.</p>
                </div>

                <div class="">
                    <h3>Título</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nostrum in non, quam
                        voluptas sed laborum debitis voluptatem veniam deserunt aut eius quibusdam officia obcaecati
                        nihil voluptates provident? Commodi, exercitationem.</p>
                </div>

                <div class="">
                    <h3>Titulo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dolore pariatur ullam nisi esse
                        architecto officiis, cum commodi expedita possimus alias error nam nesciunt inventore sed quo
                        tenetur? Sint, sapiente.</p>
                </div>
            </div>
        </section>

        <div class="" id="events">
            <h2 class="">Eventos</h2>
        </div>

        <section class="eventos">
            <div class="card">
                <img src="./assets/images/chacara001.jpeg" alt="">
                <div class="texto">
                    <span>Casamentos</span>
                </div>
            </div>

            <div class="card">
                <img src="./assets/images/chacara001.jpeg" alt="">
                <div class="texto">
                    <span>Aniversários</span>
                </div>
            </div>

            <div class="card">
                <img src="./assets/images/chacara001.jpeg" alt="">
                <div class="texto">
                    <span>Confraternizações</span>
                </div>
            </div>

            <div class="card">
                <img src="./assets/images/chacara001.jpeg" alt="">
                <div class="texto">
                    <span>Eventos Corporativos</span>
                </div>
            </div>

            <div class="card">
                <img src="./assets/images/chacara001.jpeg" alt="">
                <div class="texto">
                    <span>Eventos personalizados</span>
                </div>
            </div>

            <div class="card">
                <img src="./assets/images/chacara001.jpeg" alt="">
                <div class="texto">
                    <span>Eventos Religiosos</span>
                </div>
            </div>

            <div class="card">
                <img src="./assets/images/Screenshot_20240117_230805_Maps.png" alt="">
                <div class="texto">
                    <span>Chás de Revelação e Bebê</span>
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="parent">
                <div class="div1">
                    <img src="./assets/images/header-image.jpeg" alt="">
                </div>

                <div class="div2">
                    <img src="./assets/images/chacara013.jpeg" alt="">
                </div>

                <div class="div3">
                    <img src="./assets/images/chacara027.jpeg" alt="">
                </div>

                <div class="div4">
                    <img src="./assets/images/chacara005.jpeg" alt="">
                </div>

                <div class="div5">
                    <img src="./assets/images/chacara012.jpeg" alt="">
                </div>

                <div class="div6">
                    <img src="./assets/images/chacara006.jpeg" alt="">
                </div>
            </div>
        </section>

        <section class="orcamento-form" id="formulario">
            <form action="" method="post">

                <h2>Solicite um orçamento</h2>

                <div class="item">
                    <label for="nome">Seu nome</label>
                    <input type="text" name="nomeCliente" id="nome" placeholder="Como podemos te chamar?">
                </div>

                <div class="item">
                    <label for="email">E-mail</label>
                    <input type="email" name="emailCliente" id="email" placeholder="Seu e-mail de contato">
                </div>

                <div class="item">
                    <label for="quantidade">Quantidade de pessoas</label>
                    <input type="number" name="quantidadePessoas" id="quantidade" min="1" max="300"
                        placeholder="Número de convidados">
                </div>

                <div class="item">
                    <label for="tipo">Tipo de envento</label>
                    <input type="text" name="tipoEvento" id="tipo" placeholder="Que tipo de evento vai ser?">
                </div>

                <div class="item">
                    <label for="dataEvento">Data do evento</label>
                    <input type="date" name="dataEvento" id="dataEvento">
                </div>

                <div class="item submit-btn">
                    <button type="submit">Enviar</button>
                </div>

            </form>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <section class="item-footer side1">
            <div class="centralize">
                <h3>Siga-nos nas redes sociais</h3>
            </div>

            <div class="social-medias">
                <a href="https://www.instagram.com/recantonazareno/" title="Instagram Recanto Nazareno" target="_blank">
                    <img src="./assets/images/icons/instagram-svgrepo-com(1).svg" alt="Instagram Recanto Nazareno">
                    <span>Instagram</span>
                </a>
                <a href="https://www.facebook.com/recantonazareno/" title="Facebook Recanto Nazareno" target="_blank">
                    <img src="./assets/images/icons/facebook-svgrepo-com.svg" alt="Facebook Recanto Nazareno">
                    <span>Facebook</span>
                </a>
                <a href="https://www.tiktok.com/" title="TikTok Chácara Recanto Nazareno" target="_blank">
                    <img src="./assets/images/icons/tiktok-svgrepo-com.svg" alt="TikTok Recanto Nazareno">
                    <span>TikTok</span>
                </a>

                <a href="https://www.youtube.com/recantonazareno/" title="YouTube Chácara Recanto Nazareno"
                    target="_blank">
                    <img src="./assets/images/icons/youtube-svgrepo-com.svg" alt="YouTube Recanto Nazareno">
                    <span>YouTube</span>
                </a>
            </div>
        </section>

        <div class="copy">
            <p>Desenvolvido por:
                <span>
                    <a href="https://github.com/MarleyS439" target="_blank">
                        Marley Santos
                    </a>
                </span>
            </p>
        </div>
    </footer>

    <div class="whatsapp-icon circle pulse">
        <a href="https://wa.me/5511996390560" target="_blank">
            <img src="./assets/images/icons/whatsapp1.png" alt="WhatsApp">
        </a>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./assets/libraries/slick-1.8.1/slick/slick.min.js"></script>

    <script>
        $('.eventos').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 100,
            slidesToShow: 3,
            slidesToScroll: 4,
            prevArrow: true,
            nextArrow: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
</body>

</html>