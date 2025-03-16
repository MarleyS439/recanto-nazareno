<?php

// Declaração de tipagem forte
declare(strict_types=1);

// Declaração do namespace
namespace App\View;

// Carrega alguns dados do arquivo config.ini
$data = parse_ini_file(__DIR__ . "/../../config/config.ini", true);

// Dados da aplicação
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

$questions = [
    "O Recanto Nazareno possui hospedagem?",
    "Quais são os tipos de eventos que posso realizar?",
    "A locação inclui mesas, cadeiras e decoração?",
    "Posso levar minha própria comida e bebida?",
    "O espaço possui churrasqueira ou cozinha?",
    "Até que horas posso utilizar o espaço?",
    "O Recanto Nazareno oferece serviço de buffet e garçons?",
    "Tem estacionamento no local?",
    "A piscina pode ser utilizada durante o evento?",
    "Como faço para agendar uma visita ou reservar uma data?",
];

$answers = [
    "Não, nossa chácara é destinada exclusivamente para eventos e não oferece hospedagem",
    "Nossa chácara é ideal para festas de aniversário, casamentos, confraternizações, eventos corporativos, batizados, entre outros.",
    "Não disponibilizamos mesas e cadeiras, mas a podemos indicar profissionais terceirizados.",
    "Sim, permitimos que os clientes tragam alimentos e bebidas, mas também podemos indicar fornecedores parceiros.",
    "Sim, temos uma área com churrasqueira equipada.",
    "O horário limite para os eventos varia conforme o contrato, mas geralmente é de 12h de diária com limite de horário até às 22:00h",
    "Não oferecemos serviço de buffet e garçons, mas podemos indicar profissionais de confiança.",
    "Sim, temos estacionamento com capacidade para até 30 veículos.",
    "Sim, a piscina está disponível para uso, mas recomendamos atenção especial à segurança dos convidados.",
    "Você pode entrar em contato conosco pelo WhatsApp para verificar a disponibilidade e agendar uma visita ou agendar uma visita direto pelo site.",
];
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
        <link rel="icon" type="image/x-icon" href="<?= htmlspecialchars(
            $assets["icons"]
        ) ?>favicon.ico">

        <!-- PhotoSphere JS Viewer -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.min.css" />

        <script>
          // Define dataLayer and the gtag function.
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}

          // Set default consent to 'denied' as a placeholder
          // Determine actual values based on your own requirements
          gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied'
          });
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-XXXXXX');</script>
        <!-- End Google Tag Manager -->

        <!-- Create one update function for each consent parameter -->
        <script>
          function consentGrantedAdStorage() {
            gtag('consent', 'update', {
              'ad_storage': 'granted'
            });
          }
        </script>

        <!-- GLightbox -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

        <!-- Slick CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>

        <!-- Custom Slick CSS -->
        <style>
            .slick-prev, .slick-next {
                background-color: #0069a8;
                width: 38px;
                height: 38px;
                border-radius: 5px;
                z-index: 1000;
            }

            .slick-prev:hover, .slick-next:hover {
                background-color: #0069a895;
            }
        </style>

        <!-- Title -->
        <title><?= htmlspecialchars($title) ?></title>
    </head>

    <body>
        <!-- Header -->
        <header class="lg:h-screen bg-center bg-cover" style="background-image: url(<?= htmlspecialchars(
            $assets["images"]
        ) ?>Header.avif)" id="início">
            <nav class="lg:w-full flex justify-between lg:px-16 bg-white/95 backdrop-blur-lg fixed z-[1000] shadow-lg">
                <a class="p-2 flex items-center" href="">
                    <img class="!w-12 rounded-full border border-yellow-400" src="<?= htmlspecialchars(
                        $assets["images"]
                    ) ?>logo.png" alt="Logo Chácara Recanto Nazareno">
                    <span class="mx-1 font-bold text-stone-800">Chácara Recanto Nazareno</span>
                </a>

                <!-- Navigation -->
                <div class="flex justify-center items-center">
                        <a href="#início" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Início</a>
                        <a href="#sobre" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Sobre</a>
                        <a href="#instalação" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Instalação</a>
                        <a href="#agendar" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Visitar</a>
                        <a href="#galeria" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Galeria de fotos</a>
                        <a href="#faq" class="relative lg:mx-3 text-stone-800 transition-all duration-150 hover:text-sky-950 after:block after:w-full after:h-[2px] after:bg-sky-950 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">FAQ</a>
                    <div class="lg:mx-2">
                        <a href="#form" class="font-medium rounded flex justify-center items-center lg:p-2 bg-yellow-400 lg:px-6 lg:mx-2 text-stone-700 transition duration-200 ease-in-out active:scale-90 active:shadow-inner">Orçamento</a>
                    </div>
                </div>
            </nav>

            <!-- Header content -->
            <div class="lg:flex lg:justify-center relative top-50">
                <div class="lg:flex lg:justify-center lg:flex-col top-10">
                    <h1 class="text-6xl font-bold lg:my-2 lg:flex lg:justify-center text-zinc-100">Recanto Nazareno</h1>
                    <h2 class="lg:my-2 font-bold lg:flex lg:justify-center text-zinc-100 text-3xl">Onde cada momento, se torna uma lembrança inesquecível</h2>
                </div>
            </div>
        </header>

        <div id="sobre"></div>

        <!-- Main -->
        <main>

            <!-- Information -->
            <section class="lg:px-6 lg:py-6 lg:mx-10 lg:my-16">
                <div class="lg:flex lg:justify-between">
                    <div class="lg:flex lg:flex-col lg:py-8">
                        <div class="">
                            <h3 class="uppercase text-2xl font-bold underline">Um inscrível espaço aconchegante</h3>
                        </div>

                        <div class="w-[45vw]">
                            <p class="lg:py-6 text-base leading-8">O espaço da Recanto Nazareno é uma generosa extensão de verde que te recebe com amplitude e aconchego, garantindo uma privacidade incomparável.  Aqui, você não se sente confinado, mas sim livre para explorar cada canto dos nossos amplos espaços ao ar livre, repletos de vegetação exuberante e convidativos recantos de sombra.  A privacidade é um dos nossos maiores tesouros, permitindo que você e seus acompanhantes desfrutem de momentos de total exclusividade e tranquilidade, longe do olhar curioso e do barulho da cidade.</p>
                        </div>
                    </div>

                    <!-- Image Information -->
                    <div class="pointer-events-none">
                        <img class="rounded-sm w-[40vw]" src="<?= htmlspecialchars(
                            $assets["images"]
                        ) ?>Image1.avif" alt="">
                    </div>
                </div>
            </section>

            <!-- Information -->
            <section class="lg:px-6 lg:py-6 lg:mx-10 lg:my-16">
                <div class="lg:flex lg:justify-between flex-row-reverse">
                    <div class="lg:flex lg:flex-col lg:py-8">
                        <div class="">
                            <h3 class="uppercase text-2xl font-bold underline">Celebre Momentos Inesquecíveis</h3>
                        </div>

                        <div class="w-[45vw]">
                            <p class="lg:py-6 text-base leading-8">No Recanto Nazareno, cada evento se transforma em uma experiência única. Com uma estrutura cuidadosamente planejada, oferecemos um ambiente ideal para comemorações especiais, onde cada detalhe é pensado para proporcionar conforto e bem-estar. Seja para festas, reuniões ou eventos familiares, nosso espaço combina elegância e funcionalidade, garantindo que cada momento seja celebrado com alegria e praticidade. Aqui, sua festa ganha vida em um cenário harmonioso e acolhedor, perfeito para criar memórias inesquecíveis.</p>
                        </div>
                    </div>

                    <!-- Image Information -->
                    <div class="pointer-events-none">
                        <img class="rounded-sm w-[40vw]" src="<?= htmlspecialchars(
                            $assets["images"]
                        ) ?>Image2.avif" alt="">
                    </div>
                </div>
            </section>

            <section class="lg:mx-16 rounded z-10 lg:py-8 text-stone-800 h-screen">
                <div class="lg:flex lg:justify-center">
                    <div class="card border">
                        <div class="">
                            <span>Festas</span>
                        </div>
                    </div>
                </div>
            </section>

            <div id="galeria"></div>

            <!-- Galeria -->
            <section class="rounded z-10 lg:py-8 text-stone-800 w-full">
                <div class="lg:my-6 lg:flex lg:justify-center w-full">
                    <h4 class="lg:p-4 lg:my-3 font-bold text-4xl bg-sky-700 rounded text-zinc-100 w-full text-center">
                        Galeria de Fotos
                    </h4>
                </div>

                <div class="w-full">
                    <!-- Carrossel Slick -->
                    <div class="fotos slick-carousel lg:mx-20">
                        <?php
                        $quantidade_imagens = range(1, 53); // Ajuste a quantidade de imagens
                        foreach ($quantidade_imagens as $numero): ?>
                            <div>
                                <a href="<?= htmlspecialchars(
                                    $assets["images"]
                                ) ?>gallery/<?= $numero ?>.avif"
                                    class="glightbox block w-full">
                                    <img src="<?= htmlspecialchars(
                                        $assets["images"]
                                    ) ?>gallery/<?= $numero ?>.avif"
                                            alt="Imagem <?= $numero ?>"
                                            class="w-[90%] lg:mx-2 h-40 lg:h-full object-cover rounded shadow-md">
                                </a>
                            </div>
                        <?php endforeach;
                        ?>
                    </div>
                </div>
            </section>

            <!-- PhotoSphere -->
            <div class="lg:mx-16 rounded z-10 lg:py-6">
                <div class="lg:my-6 lg:flex lg:justify-center">
                    <h4 class="lg:p-4 lg:my-3 font-bold text-4xl bg-sky-700 rounded text-zinc-100 w-full text-center">Uma perspectiva única deste lugar especial</h4>
                </div>

                <!-- Container viewer -->
                <div class="flex items-center justify-center h-[80vh] w-full" id="viewer"></div>

                <div id="faq" class="lg:my-2"></div>
            </div>

            <!-- FAQ -->
            <section class="lg:my-4 lg:flex lg:justify-center lg:flex-col lg:mx-16 lg:py-6">

                <div class="lg:my-6 lg:flex lg:justify-center">
                    <h4 class="lg:p-4 lg:my-2 font-bold text-4xl bg-sky-700 rounded text-zinc-100 w-full text-center">Perguntas Frequentes</h4>
                </div>

                <div class="lg:p-2 w-full lg:px-28">
                    <?php if (count($questions) === count($answers)) {
                        for ($i = 0; $i < count($questions); $i++) {
                            echo '
                                <div class="w-full border-b border-b-stone-800 lg:my-2 lg:px-2" title="Expandir/Recolher">
                                    <!-- Pergunta -->
                                    <div class="flex items-center w-full justify-between cursor-pointer lg:p-2 toggle-faq">
                                        <h5 class="text-sky-950 text-xl font-bold">' .
                                $questions[$i] .
                                '</h5>
                                        <span class="text-4xl text-stone-800 lg:mx-4 lg:p-2 button">+</span>
                                    </div>

                                    <!-- Resposta -->
                                    <div class="hidden text-stone-800 lg:p-2 answer w-full" id="faq' .
                                $i .
                                '">
                                        <p class="w-full">' .
                                $answers[$i] .
                                '</p>
                                    </div>
                                </div>
                                ';
                        }
                    } ?>
                </div>
            </section>

            <!-- Google Calendar -->
            <section class="lg:my-4 lg:flex lg:justify-center lg:flex-col lg:mx-16 lg:py-6">
                <div class="lg:my-6 lg:flex lg:justify-center">
                    <h4 class="lg:p-4 lg:my-2 font-bold text-4xl bg-sky-700 rounded text-zinc-100 w-full text-center">Faça uma visita e conheça mais!</h4>
                </div>

                <div class="lg:flex lg:justify-center lg:my-8 text-stone-800 items-center lg:py-8">
                    <!-- Google Calendar Appointment Scheduling begin -->
                    <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                    <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                    <script>
                    (function() {
                      var target = document.currentScript;
                      window.addEventListener('load', function() {

                        calendar.schedulingButton.load({
                          url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ0HY4syPCOU4scdvYUDfoax8Q8yOvG7uPDO3BiTMgkXZPcun8RmuWCfiXaJKSZjuuIyHwLPuNjh?gv=true',
                          color: '#0069a8',
                          label: 'CLIQUE AQUI PARA AGENDAR VISITA',
                          target,
                        });
                      });
                    })();
                    </script>
                    <!-- end Google Calendar Appointment Scheduling -->
                </div>
            </section>


            <div id="form"></div>


            <!-- Contact -->
            <section class="lg:px-16 lg:py-4 lg:mx-16 rounded lg:my-16 flex justify-between items-center bg-sky-700">

                <div class="lg:mx-2">
                    <h4 class="font-bold text-zinc-100 text-4xl">Quer mais informações?<h4>
                    <p class="lg:my-4 text-zinc-100 text-xl">Solicite um orçamento para o seu evento ou confraternização conosco.</p>
                    <p class="text-zinc-100 text-xl">Basta preencher o formulário ao lado</p>
                </div>

                <!-- Contact Form -->
                <form class="lg:px-4 lg:py-4 w-[30vw] lg:flex lg:flex-col" action="budget" method="POST" id="">
                    <div class="lg:my-2">
                        <h4 class="font-bold text-zinc-100 text-3xl">Solicite um orçamento</h4>
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-1">
                        <label class="text-zinc-100 lg:my-1" for="name">Nome</label>
                        <input class="p-1 bg-zinc-100 rounded outline-2 outline-zinc-100 transition-all duration-200 ease-in-out focus:outline-yellow-500" type="text" name="name" id="name" placeholder="Digite seu nome" autocomplete="name">
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-1">
                        <label class="text-zinc-100 lg:my-1" for="phone">Celular</label>
                        <input class="p-1 bg-zinc-100 rounded outline-2 outline-zinc-100 transition-all duration-200 ease-in-out focus:outline-yellow-500" type="text" name="phone" id="phone" placeholder="(DDD) 9XXXX-XXXX" autocomplete="phone">
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-1">
                        <label class="text-zinc-100" for="email">E-mail</label>
                        <input class="p-1 bg-zinc-100 rounded outline-2 outline-zinc-100 transition-all duration-200 ease-in-out focus:outline-yellow-500" type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplete="email">
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-1">
                        <label class="text-zinc-100 lg:my-1" for="date">Data do evento</label>
                        <input class="p-1 bg-zinc-100 rounded outline-2 outline-zinc-100 transition-all duration-200 ease-in-out focus:outline-yellow-500 placeholder:text-zinc-500" placeholder="DD/MM/YYYY" type="date" name="date" id="date">
                        <div class="" id="invalidDate"></div>
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-1">
                        <label class="text-zinc-100 lg:my-1" for="partcipants">Quantidade de convidados</label>
                        <input class="p-1 bg-zinc-100 rounded outline-2 outline-zinc-100 transition-all duration-200 ease-in-out focus:outline-yellow-500 placeholder:text-zinc-500" placeholder="Quantidade de convidados" type="number" name="participants" id="partcipants" min="1" max="600">
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-1">
                        <label class="text-zinc-100 lg:my-1" for="type">Tipo de evento</label>
                        <input class="p-1 bg-zinc-100 rounded outline-2 outline-zinc-100 transition-all duration-200 ease-in-out focus:outline-yellow-500 placeholder:text-zinc-500" placeholder="Casamento, Aniversário, Festas, etc." type="text" name="eventType" id="type">
                    </div>

                    <div class="lg:flex lg:flex-col lg:my-2">
                        <button class="font-medium cursor-pointer bg-yellow-400 rounded p-3 transition duration-200 ease-in-out active:scale-90 active:shadow-inner" type="submit">Enviar</button>
                    </div>

                </form>
            </section>

            <!-- Maps -->
            <section class="lg:flex justify-center lg:my-4 lg:flex-col items-center">

                <div class="lg:my-6">
                    <h4 class="text-4xl text-zinc-100 font-bold border bg-sky-700 rounded lg:px-28 lg:py-4">Localização</h4>
                </div>

                <!-- Maps -->
                <iframe class="w-[90%] h-[40vh] rounded border border-sky-700" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.939137955059!2d-46.372579325118245!3d-23.57062926193178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6fe9ff490431%3A0xb219426c7d73f900!2sCh%C3%A1cara%20Recanto%20Nazareno!5e0!3m2!1spt-BR!2sbr!4v1741752703537!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-sky-800 lg:px-10 lg:flex lg:flex-col lg:py-5 lg:w-full">

            <div class="grid grid-cols-3 gap-2">
                <!-- Social -->
                <div class="lg:flex lg:flex-col lg:p-8">

                    <div class="lg:my-4">
                        <h4 class="py-2 text-zinc-200 font-bold text-xl">Siga-nos nas redes sociais</h4>
                    </div>

                    <!-- Social Links -->
                    <div class="lg:flex">

                        <!-- Instagram -->
                        <a class="bg-zinc-100 rounded-full p-2 mr-3" href="https://instagram.com/" target="_blank" title="Instagram">
                            <img class="w-6" src="<?= htmlspecialchars(
                                $assets["icons"]
                            ) ?>Instagram.svg" alt="Instagram">
                        </a>

                        <!-- Facebook -->
                        <a class="bg-zinc-100 rounded-full p-2 mr-3" href="https://facebook.com/" target="_blank" title="Facebook">
                            <img class="w-6" src="<?= htmlspecialchars(
                                $assets["icons"]
                            ) ?>Facebook.svg" alt="Facebook">
                        </a>

                        <!-- TikTok -->
                        <a class="bg-zinc-100 rounded-full p-2 mr-3" href="https://tiktok.com/" target="_blank" title="TikTok">
                            <img class="w-6" src="<?= htmlspecialchars(
                                $assets["icons"]
                            ) ?>TikTok.svg" alt="TikTok">
                        </a>

                        <!-- YouTube -->
                        <a class="bg-zinc-100 rounded-full p-2" href="https://youtube.com/" target="_blank" title="YouTube">
                            <img class="w-6" src="<?= htmlspecialchars(
                                $assets["icons"]
                            ) ?>YouTube.svg" alt="YouTube">
                        </a>
                    </div>
                </div>

                <!-- Contact -->
                <div class="lg:flex lg:flex-col lg:p-8">
                    <div class="lg:my-4">
                        <h4 class="py-2 text-zinc-200 font-bold text-xl">Contato</h4>
                    </div>

                    <div class="lg:flex lg:flex-col">
                        <span class="text-zinc-100 font-bold my-1">E-mail: <a class="text-zinc-100 font-normal underline" href="mailto:contato@recantonazareno.com.br" title="Envie um e-mail">contato@recantonazareno.com.br</a></span>
                        <span class="text-zinc-100 font-bold my-1">WhatsApp: <a class="text-zinc-100 font-normal underline" href="https://wa.me/+551136180643" title="Chamar no WhatsApp Business">(11) 93618-0643</a></span>
                    </div>
                </div>

                <!-- About -->
                <div class="lg:flex lg:flex-col lg:p-8">
                    <div class="lg:my-4">
                        <h4 class="py-2 text-zinc-200 font-bold text-xl">Sobre</h4>
                    </div>

                    <div class="lg:flex lg:flex-col">
                        <p class="text-zinc-100">Recanto Nazareno é uma chácara com espaço para eventos e festas com piscina.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright -->
        <div class="bg-sky-800 lg:p-5 lg:flex lg:justify-center font-medium text-zinc-300">© 2025 Chácara Recanto Nazareno. Todos os Direitos Reservados. Desenvolvido por <a class="mx-1 underline text-zinc-300" href="https://github.com/MarleyS439/" target="_blank">Marley Santos</a></div>

        <!-- WhatsApp -->
        <div class="right-16 bottom-16 fixed z-[10000] cursor-pointer">
            <img class="w-14 pointer-events-none" src="<?= htmlspecialchars(
                $assets["icons"]
            ) ?>WhatsApp.png" alt="WhatsApp">
        </div>

        <!-- Cookies -->
        <div class="fixed bottom-10 z-[1000] bg-white/95 backdrop-blur-md grid place-items-center p-4 shadow-xl shadow-black/20 rounded w-1/2" id="cookies">
            <div class="w-full">
                <p class="text-left">Este site usa cookies para melhorar sua experiência. Ao continuar navegando, você concorda com nossa <a class="text-sky-700" href="cookies">Política de Cookies.</a></p>
                <div class="flex justify-end lg:p-2">
                    <button class="bg-sky-700 text-white p-2 px-8 rounded hover:bg-sky-800" type="button" aria-label="Permitir cookies" id="permited" onclick="consentGrantedAdStorage()">Permitir</button>
                    <button class="border border-sky-700 text-sky-700 p-2 px-8 rounded hover:bg-gray-200 ml-2" type="button" aria-label="Recusar cookies" id="recused">Recusar</button>
                </div>
            </div>
        </div>

        <!-- Import Map - Photo Sphere -->
        <script type="importmap">
            {
                "imports": {
                    "three": "https://cdn.jsdelivr.net/npm/three/build/three.module.js",
                    "@photo-sphere-viewer/core": "https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.module.js"
                }
            }
        </script>

        <!-- Photo Sphere Module -->
        <script type="module">
            import { Viewer } from '@photo-sphere-viewer/core';
            const viewer = new Viewer({
                container: document.querySelector('#viewer'),
                panorama: 'public/assets/images/SGCAM_20241120_163936039.PHOTOSPHERE.jpg',
                caption: 'Chácara Recanto Nazareno - Área da Piscina',
                touchmoveTwoFingers: true,
                mousewheelCtrlKey: true,
                lang: {
                  zoom: 'Zoom',
                  zoomOut: 'Zoom -',
                  zoomIn: 'Zoom +',
                  moveUp: 'Mover para cima',
                  moveDown: 'Mover para baixo',
                  moveLeft: 'MMove para esquerda',
                  moveRight: 'Mover para a direita',
                  description: 'Descrição',
                  download: 'Download',
                  fullscreen: 'Tela cheia',
                  loading: 'Carregando...',
                  menu: 'Menu',
                  close: 'Fechar',
                  twoFingers: 'Use dois dedos para navegar',
                  ctrlZoom: 'Use CTRL + scroll para dar zoom',
                  loadError: 'O panorama não pode ser carregado',
                  webglError: 'Seu browser não suporta WebGL',
                }
            });
        </script>

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <!-- GLightbox -->
        <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
        <!-- Slick JS -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- Phone Number -->
        <script>
          (function () {
            $(document).ready(function () {

              // Iniciar GLightbox
              const lightbox = GLightbox({ selector: '.glightbox' });

              // Slick JS
              $('.slick-carousel').slick({
                  slidesToShow: 3, // Número de imagens visíveis
                  slidesToScroll: 1,
                  autoplay: true,
                  autoplaySpeed: 2000,
                  arrows: true,
                  dots: false,
                  infinite: true,
                  responsive: [
                      { breakpoint: 1024, settings: { slidesToShow: 2 } },
                      { breakpoint: 768, settings: { slidesToShow: 1 } }
                  ]
              });

              // Cookies
              let cookies = $("#cookies");
              $("#permited").click(function () {
                cookies.hide();
              });
              $("#recused").click(function () {
                cookies.hide();
              });

              // Phone Number Formatter
              $("#celular").on("input", function () {
              var input = $(this).val().replace(/\D/g, "");
                if (input.length > 0) {
                  input = input.match(/^(\d{0,2})(\d{0,5})(\d{0,4})$/);
                  $(this).val(function () {
                    return !input[2]
                      ? input[1]
                      : "(" + input[1] + ") " + input[2] + (input[3] ? "-" + input[3] : "");
                  });
                }
              });
            });
          }) ();
        </script>

        <!-- FAQ -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let date = new Date();

                // Seleciona todos os items com a classe `.toggle-faq`
                const faqItems = document.querySelectorAll(".toggle-faq");

                // Para cada item com ID
                faqItems.forEach((item, index) => {
                    item.addEventListener("click", function() {
                        const answer = document.getElementById(`faq${index}`);
                        const button = this.querySelector(".button");

                        // Para caso o item tenha a classe `hidden`
                        if (answer.classList.contains("hidden")) {
                            answer.classList.remove("hidden");
                            answer.classList.add("block");
                            button.textContent = "_"; // Troca o "+" pelo "_"
                        } else {
                            answer.classList.add("hidden");
                            answer.classList.remove("block");
                            button.textContent = "+"; // Volta para "+"
                        }
                    });
                });
            });
        </script>
    </body>
</html>
