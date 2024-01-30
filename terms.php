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
                        <h1 class="mb-4 fs-3 fw-bold">Termos de Uso do Site Kristta</h1>
                        <p class="text-break lh-base fs-6">Bem-vindo ao site da Kristta. Leia atentamente estes Termos de Uso antes de utilizar nosso site. Ao acessar e usar o site da Kristta, você concorda com estes Termos de Uso. Se você não concorda com estes Termos de Uso, não utilize nosso site.</p>
                        <p class="text-break lh-base fs-6">1. Uso do site</p>
                        <p class="text-break lh-base fs-6">O uso deste site é restrito para fins pessoais e não comerciais. Você não pode reproduzir, duplicar, copiar, vender, revender ou explorar qualquer parte deste site para fins comerciais sem a autorização prévia por escrito da Kristta.</p>
                        <p class="text-break lh-base fs-6">2. Conteúdo do site</p>
                        <p class="text-break lh-base fs-6">Todo o conteúdo deste site, incluindo, mas não se limitando a textos, imagens, gráficos, logotipos, ícones de botões, áudio e software, é propriedade exclusiva da Kristta ou de seus respectivos proprietários de conteúdo, protegidos pelas leis de direitos autorais e outras leis aplicáveis.</p>
                        <p class="text-break lh-base fs-6">3. Links para outros sites</p>
                        <p class="text-break lh-base fs-6">O site da Kristta pode conter links para outros sites que não são mantidos ou relacionados à Kristta. Não somos responsáveis pelo conteúdo desses sites externos e não endossamos ou garantimos a precisão ou confiabilidade de quaisquer informações contidas nesses sites. O acesso a esses sites externos é por sua conta e risco.</p>
                        <p class="text-break lh-base fs-6">4. Limitação de responsabilidade</p>
                        <p class="text-break lh-base fs-6">A Kristta não será responsável por quaisquer danos diretos, indiretos, acidentais, especiais, consequentes ou punitivos, incluindo, mas não se limitando a lucros cessantes, perda de receita ou danos similares, decorrentes do uso ou impossibilidade de uso deste site.</p>
                        <p class="text-break lh-base fs-6">5. Alterações nos Termos de Uso</p>
                        <p class="text-break lh-base fs-6">A Kristta reserva-se o direito de alterar estes Termos de Uso a qualquer momento, sem aviso prévio. Ao continuar a usar o site da Kristta após quaisquer alterações nesses Termos de Uso, você concorda com tais alterações.</p>
                        <p class="text-break lh-base fs-6">6. Lei aplicável</p>
                        <p class="text-break lh-base fs-6">Estes Termos de Uso são regidos pelas leis do Brasil e quaisquer disputas decorrentes ou relacionadas a estes Termos de Uso serão tratadas exclusivamente pelos tribunais do Brasil.</p>
                        <p class="text-break lh-base fs-6">Ao utilizar nosso site, você concorda com estes Termos de Uso. Se você tiver alguma dúvida sobre estes Termos de Uso, entre em contato conosco.</p>
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