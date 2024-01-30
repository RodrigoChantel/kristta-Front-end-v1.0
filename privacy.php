<?php 
    include_once('controller/fileVersion.php');
    IncludeVersioned('css/bootstrap.min.css');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="./assets/css/style.css?v=<?php echo filemtime('./assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
    <link href="./assets/css/style-botchat.css?v=<?php echo filemtime('./assets/css/style-botchat.css'); ?>" rel="stylesheet" type="text/css">
    <link href="./assets/css/animation.css?v=<?php echo filemtime('./assets/css/animation.css'); ?>" rel="stylesheet" type="text/css">
    <link href="./assets/css/bootstrap.min.css?v=<?php echo filemtime('./assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="./assets/css/aos.css?v=<?php echo filemtime('./assets/css/aos.css'); ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/images/fav/favteste.webp?v=<?php echo filemtime('./assets/images/fav/favteste.webp'); ?>">
    <script src="./assets/js/script.js?v=<?php echo filemtime('./assets/js/script.js'); ?>"></script>
    <script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js?v=<?php echo filemtime('./assets/js/jquery-3.3.1.min.js'); ?>"></script>

    <title>Kristta</title>
</head>
<body>
    <?php
        include_once('./views/theme/header.php');
    ?>
    <main data-aos="fade" data-aos-delay="0" data-aos-duration="500" data-aos-once="true">
        <section class="" style="margin-top: 12.4vh;">
            <div class="container-lg py-5 text-black rounded-0 flex-wrap align-content-center justify-content-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-4 fs-3 fw-bold">Política de Privacidade da Kristta</h1>
                        <p class="text-break lh-base fs-6">A privacidade dos nossos usuários é extremamente importante para nós na Kristta. A presente Política de Privacidade descreve como coletamos, utilizamos e protegemos as informações pessoais dos nossos usuários.</p>
                        <p class="text-break lh-base fs-6">Informações que coletamos</p>
                        <p class="text-break lh-base fs-6">Podemos coletar informações pessoais, como nome, endereço de e-mail, número de telefone e endereço residencial, quando você se inscreve para receber nossas comunicações por e-mail, faz um pedido em nosso site ou entra em contato conosco por meio do formulário de contato.</p>
                        <p class="text-break lh-base fs-6">Como usamos as informações que coletamos</p>
                        <p class="text-break lh-base fs-6">As informações pessoais coletadas são utilizadas para processar pedidos, fornecer comunicações por e-mail, responder a perguntas e fornecer suporte ao cliente. Também podemos utilizar essas informações para fins de marketing, incluindo o envio de ofertas especiais e promoções.</p>
                        <p class="text-break lh-base fs-6">Divulgação de informações a terceiros</p>
                        <p class="text-break lh-base fs-6">Não vendemos, alugamos ou compartilhamos suas informações pessoais com terceiros, exceto quando necessário para cumprir requisitos legais ou regulatórios.</p>
                        <p class="text-break lh-base fs-6">Proteção de informações</p>
                        <p class="text-break lh-base fs-6">Mantemos medidas de segurança razoáveis para proteger as informações pessoais que coletamos e armazenamos. No entanto, não podemos garantir a segurança absoluta dessas informações devido à natureza da transmissão de dados pela internet.</p>
                        <p class="text-break lh-base fs-6">Alterações na Política de Privacidade</p>
                        <p class="text-break lh-base fs-6">Podemos atualizar esta Política de Privacidade periodicamente. Quaisquer alterações serão publicadas em nosso site e entrarão em vigor imediatamente após a publicação.</p>
                        <p class="text-break lh-base fs-6">Contato</p>
                        <p class="text-break lh-base fs-6">Se tiver alguma dúvida ou preocupação sobre esta Política de Privacidade, entre em contato conosco por meio do formulário de contato em nosso site.</p>
                        <p class="text-break lh-base fs-6">Atualizado em 01/01/2023.</p>
                        <hr class="mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="./assets/images/icons/sslcertifi.webp" width="200vh" alt="SSL">
                            </div>
                            <div class="col-md-8 d-flex flex-row flex-wrap align-items-center">
                                <span>O Certificado SSL oferece segurança na transferência de dados entre servidores web e navegadores, criptografando informações no site. Isso protege dados caso haja interceptação.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        include_once('./views/theme/footer.php');
    ?>
</body>
<script src="./assets/js/popper.min.js?v=<?php echo filemtime('./assets/js/popper.min.js'); ?>"></script>
<script src="./assets/js/style.js?v=<?php echo filemtime('./assets/js/style.js'); ?>"></script>
<script src="./assets/js/bootstrap.min.js?v=<?php echo filemtime('./assets/js/bootstrap.min.js'); ?>"></script>
<script src="./assets/js/fontawesome.js?v=<?php echo filemtime('./assets/js/fontawesome.js'); ?>" crossorigin="anonymous"></script>
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
</script>


<!-- AOS -->
<script src="assets/js/aos.js?v=<?php echo filemtime('assets/js/aos.js'); ?>"></script>
<script>
  AOS.init({
  });
</script>
</html>