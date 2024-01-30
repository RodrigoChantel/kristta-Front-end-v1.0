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
    <main data-aos="fade" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true">
        <section class="" style="margin-top: 12.4vh;">
            <div class="container-lg py-5 text-black rounded-0 flex-wrap align-content-center justify-content-center">
                <div class="row">
                    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-12">
                        <h1 class="mb-4 fs-3 fw-bold">SOBRE NÓS</h1>
                        <p class="text-break lh-base fs-6">A Kristta oferece diversos serviços para ajudar as empresas a alcançarem seus objetivos, incluindo desenvolvimento web, marketing, identidade visual, treinamento de equipes e muito mais. Com uma equipe altamente capacitada, a Kristta se dedica a fornecer soluções personalizadas e inovadoras para cada cliente.</p>
                        <p class="text-break lh-base fs-6">O desenvolvimento web é uma área em que a Kristta tem muita experiência e habilidade. A equipe da Kristta entende que o site de uma empresa é a sua vitrine na internet e, por isso, oferece soluções que garantam um design atraente, uma navegação fácil e uma boa experiência para o usuário.</p>
                        <p class="text-break lh-base fs-6">Já o marketing é um ponto crucial para ajudar as empresas a atingirem seus objetivos. A Kristta oferece soluções de marketing eficazes e personalizadas, incluindo estratégias de SEO, publicidade digital e análise de dados. Além disso, a identidade visual é outro fator importante que a Kristta destaca. A equipe da Kristta trabalha para criar uma identidade visual coerente e impactante que transmita a personalidade e os valores da empresa.</p>
                        <p class="text-break lh-base fs-6">Por fim, o treinamento de equipes é outro serviço oferecido pela Kristta. A equipe da Kristta entende que capacitar os funcionários de uma empresa é fundamental para garantir o sucesso da empresa. Por isso, oferece treinamentos personalizados e eficazes para garantir que a equipe esteja pronta para atingir seus objetivos.</p>
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