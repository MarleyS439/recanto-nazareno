<?php

// Declaração de tipagem forte
declare(strict_types=1);

// Declaração do namespace
namespace App\View;

// Carrega alguns dados do arquivo config.ini
$data = parse_ini_file(__DIR__ . "/../../config/config.ini", true);

$appName = $data["app"]["APP_NAME"];
$appURL = $data["app"]["APP_URL"];

// URL de assets
$assetsURL = "public/assets";

// Assets
$assets = [
    "images" => "$assetsURL/images/",
    "icons" => "$assetsURL/icons/",
    "css" => "$assetsURL/css/",
    "javascript" => "$assetsURL/javascript/",
];

// Palavras Chave
$keywords = [
    "Chácara para Locação",
    "Espaço para Eventos",
    "Aluguel de Chácara",
    "Festas em Chácara",
    "Alugar Espaço para Eventos",
    "Ferraz de Vasconcelos",
    "Chácara Perto de Mim",
    "Chácaras em Ferraz de Vasconcelos",
    "Chácaras em Ferraz",
    "Chácara com Piscina",
    "Recanto Nazareno",
    "Alugar Espaço",
    "Casamentos",
    "Aniversários",
    "Happy-Hour",
    "Confraternizações",
    "Eventos Religiosos",
    "Eventos Empresariais",
    "Festas Infantis",
    "Natureza",
    "Decoração",
    "Eventos em Chácara",
    "Festas na Chácara",
    "Casamento em Chácara",
    "Espaço para Eventos",
    "Festas Particulares",
    "Lazer e Eventos",
    "Retiro Espiritual",
    "Festa de Debutante",
    "Bodas e Formaturas",
    "Festas de Final de Ano",
    "Ano Novo",
    "Churrasco",
    "Churrasco com Amigos",
    "Day Use",
    "Eventos Personalizados",
    "Cerimônias",
    "Piscinas para Eventos",
    "Eventos Sociais",
    "Feriados em Chácara",
    "Contato com a Natureza",
    "Espaço Kids",
    "Turismo",
];

$title = "Chácara Recanto Nazareno | Espaço para Eventos e Confraternizações";
$description =
    "Locação de Espaço com Piscina para Eventos e Confraternizações. Alugue um espaço para seu evento unindo o melhor entre a cidade e o campo.";
?>

<!DOCTYPE html>

<html lang="pt-br" dir="ltr" class="scroll-smooth">
    <head>
        <!-- HTML Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="marley de S. Santos">
        <meta name="description" content="">
        <meta name="keywords" content="<?= htmlspecialchars(
            implode(", ", $keywords)
        ) ?>">

        <!-- Open Graph Meta Tags -->
        <meta property="og:url" content="<?= htmlspecialchars($appURL) ?>">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
        <meta property="og:description" content="<?= htmlspecialchars(
            $description
        ) ?>">
        <meta property="og:image" content="<?= htmlspecialchars($appURL) ?>">
        <meta property="og:site_name" content="<?= htmlspecialchars(
            $appName
        ) ?>">
        <meta property="og:image:width" content="740">
        <meta property="og:image:height" content="522">

        <!-- Tailwind CSS -->
        <link rel="stylesheet" href="<?= htmlspecialchars(
            $assets["css"]
        ) ?>style.css">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="favicon.ico">

        <!-- PhotoSphere JS Viewer -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.min.css" />

        <!-- Title -->
        <title><?= htmlspecialchars($title) ?></title>
    </head>

    <body>
        <!-- Header -->
        <header class="lg:h-screen bg-center bg-cover" style="background-image: url(<?= htmlspecialchars(
            $assets["images"]
        ) ?>Header.avif)" id="header">
            <nav class="lg:w-full flex justify-between lg:px-16 bg-white/95 backdrop-blur-lg fixed z-50 shadow-lg">
                <a class="p-2 flex items-center" href="">
                    <img class="!w-12 rounded-full border border-yellow-400" src="<?= htmlspecialchars(
                        $assets["images"]
                    ) ?>logo.png" alt="Logo Chácara Recanto Nazareno">
                    <span class="mx-1 font-bold text-stone-800">Chácara Recanto Nazareno</span>
                </a>

                <!-- Navigation -->
                <div class="flex justify-center items-center">
                        <a href="#" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Início</a>
                        <a href="#" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Sobre</a>
                        <a href="#" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Instalação</a>
                        <a href="#" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Galeria de fotos</a>
                    <div class="lg:mx-2">
                        <a href="#" class="font-medium rounded flex justify-center items-center lg:p-2 bg-yellow-400 lg:px-6 lg:mx-2 text-stone-700 transition duration-200 ease-in-out active:scale-90 active:shadow-inner">Orçamento</a>
                    </div>
                </div>
            </nav>

            <!-- Header content -->
            <div class="lg:flex lg:justify-center relative top-50">
                <div class="lg:flex lg:justify-center lg:flex-col">
                    <h1 class="text-6xl font-bold lg:my-2 lg:flex lg:justify-center text-zinc-100">Recanto Nazareno</h1>
                    <h2 class="lg:my-2 font-bold lg:flex lg:justify-center text-zinc-100 text-3xl">Onde cada momento, se torna uma lembrança inesquecível</h2>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main>
            <section class="lg:px-6 lg:py-6 lg:mx-10 lg:my-16">
                <div class="lg:flex lg:justify-between">
                    <div class="">
                        <div class="">
                            <h3 class="uppercase text-2xl font-bold">Um inscrível espaço aconchegante</h3>
                        </div>

                        <div class="w-[45vw]">
                            <p class="lg:py-6 text-base leading-8">O espaço da Recanto Nazareno é uma generosa extensão de verde que te recebe com amplitude e aconchego, garantindo uma privacidade incomparável.  Aqui, você não se sente confinado, mas sim livre para explorar cada canto dos nossos amplos espaços ao ar livre, repletos de vegetação exuberante e convidativos recantos de sombra.  A privacidade é um dos nossos maiores tesouros, permitindo que você e seus acompanhantes desfrutem de momentos de total exclusividade e tranquilidade, longe do olhar curioso e do barulho da cidade.</p>
                        </div>
                    </div>

                    <div class="">
                        <img class="rounded-sm w-[40vw]" src="<?= htmlspecialchars(
                            $assets["images"]
                        ) ?>Header.avif" alt="">
                    </div>
                </div>
            </section>

            <section class="lg:px-6 lg:py-6 lg:mx-10 lg:my-16">
                <div class="lg:flex lg:justify-between flex-row-reverse">
                    <div class="">
                        <div class="">
                            <h3 class="uppercase text-2xl font-bold">Um inscrível espaço aconchegante</h3>
                        </div>

                        <div class="w-[45vw]">
                            <p class="lg:py-6 text-base leading-8">O espaço da Recanto Nazareno é uma generosa extensão de verde que te recebe com amplitude e aconchego, garantindo uma privacidade incomparável.  Aqui, você não se sente confinado, mas sim livre para explorar cada canto dos nossos amplos espaços ao ar livre, repletos de vegetação exuberante e convidativos recantos de sombra.  A privacidade é um dos nossos maiores tesouros, permitindo que você e seus acompanhantes desfrutem de momentos de total exclusividade e tranquilidade, longe do olhar curioso e do barulho da cidade.</p>
                        </div>
                    </div>

                    <div class="">
                        <img class="rounded-sm w-[40vw]" src="<?= htmlspecialchars(
                            $assets["images"]
                        ) ?>Header.avif" alt="">
                    </div>
                </div>
            </section>

            <!-- PhotoSphere -->
            <div class="lg:mx-16">
                <div class="flex items-center justify-center h-[80vh] w-full" id="viewer"></div>
            </div>



            <script type="importmap">
                {
                    "imports": {
                        "three": "https://cdn.jsdelivr.net/npm/three/build/three.module.js",
                        "@photo-sphere-viewer/core": "https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.module.js"
                    }
                }
            </script>

            <script type="module">
                import { Viewer } from '@photo-sphere-viewer/core';

                const viewer = new Viewer({
                    container: document.querySelector('#viewer'),
                    panorama: 'public/assets/images/SGCAM_20241120_163936039.PHOTOSPHERE.jpg',
                });
            </script>

            <section class="lg:px-8 lg:py-6 lg:mx-16 rounded lg:my-16 flex justify-between items-center bg-sky-700">

                <div class="lg:mx-2">
                    <h4 class="font-bold text-zinc-100 text-2xl">Quer mais informações?<h4>
                    <p class="lg:my-4 text-zinc-100">Solicite um orçamento do seu evento ou confraternização conosco. <br> Basta preencher o formulário ao lado</p>
                </div>


                <form class="lg:px-2 lg:py-6 w-[30vw] lg:flex lg:flex-col" action="" method="POST" id="">
                    <div class="lg:my-2">
                        <h4 class="font-bold text-zinc-100 text-xl">Solicite um orçamento</h4>
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-2">
                        <label class="text-zinc-100 lg:my-1" for="name">Nome</label>
                        <input class="p-2 bg-zinc-200 rounded outline-2 outline-zinc-200 transition-all duration-200 ease-in-out focus:outline-yellow-500" type="text" name="" id="" placeholder="Digite seu nome">
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-2">
                        <label class="text-zinc-100 lg:my-1" for="phone">Celular</label>
                        <input class="p-2 bg-zinc-200 rounded outline-2 outline-zinc-200 transition-all duration-200 ease-in-out focus:outline-yellow-500" type="text" name="phone" id="" placeholder="(DDD) 9XXXX-XXXX">
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-2">
                        <label class="text-zinc-100 lg:my-1" for="email">E-mail</label>
                        <input class="p-2 bg-zinc-200 rounded outline-2 outline-zinc-200 transition-all duration-200 ease-in-out focus:outline-yellow-500" type="email" name="email" id="" placeholder="Digite seu e-mail" autocomplete="email">
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-2">
                        <button class="font-medium cursor-pointer bg-yellow-400 rounded p-3 transition duration-200 ease-in-out active:scale-90 active:shadow-inner" type="submit">Enviar</button>
                    </div>
                </form>
            </section>

            <!-- Maps -->
            <section class="lg:flex justify-center lg:my-4 lg:flex-col items-center">

                <div class="lg:my-6">
                    <h4 class="text-2xl text-zinc-100 font-bold border bg-sky-700 rounded lg:px-28 lg:py-4">Localização</h4>
                </div>

                <iframe class="w-[90%] h-[40vh] rounded border border-sky-700" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.939137955059!2d-46.372579325118245!3d-23.57062926193178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6fe9ff490431%3A0xb219426c7d73f900!2sCh%C3%A1cara%20Recanto%20Nazareno!5e0!3m2!1spt-BR!2sbr!4v1741752703537!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </main>

        <footer class="bg-sky-800 lg:px-8">

            <!-- Social -->
            <div class="lg:flex justify-start p-2 lg:flex-col lg:mx-6">

                <div class="lg:my-4">
                    <h4 class="py-2 text-zinc-200 font-bold">Siga-nos nas redes sociais</h4>
                </div>

                <div class="lg:flex">
                    <a class="bg-zinc-100 rounded-full p-2 mr-3" href="https://instagram.com/" target="_blank" title="Instagram">
                        <img class="w-6" src="<?= htmlspecialchars(
                            $assets["icons"]
                        ) ?>Instagram.svg" alt="Instagram">
                    </a>

                    <a class="bg-zinc-100 rounded-full p-2 mr-3" href="https://facebook.com/" target="_blank" title="Facebook">
                        <img class="w-6" src="<?= htmlspecialchars(
                            $assets["icons"]
                        ) ?>Facebook.svg" alt="Facebook">
                    </a>

                    <a class="bg-zinc-100 rounded-full p-2" href="https://facebook.com/" target="_blank" title="Facebook">
                        <img class="w-6" src="<?= htmlspecialchars(
                            $assets["icons"]
                        ) ?>Facebook.svg" alt="Facebook">
                    </a>
                </div>


            </div>

            <!-- Copyright -->
            <div class="lg:p-5 lg:flex lg:justify-end font-medium text-zinc-300">© 2025 Chácara Recanto Nazareno. Todos os Direitos Reservados. Desenvolvido por <a class="mx-1 underline text-zinc-300" href="https://github.com/MarleyS439/" target="_blank">Marley Santos</a></div>
        </footer>

        <div class="right-16 bottom-16 fixed">
            <img class="w-14 pointer-events-none" src="<?= htmlspecialchars(
                $assets["icons"]
            ) ?>WhatsApp.png" alt="WhatsApp">
        </div>

    </body>
</html>
