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
                <div class="row bg-light rounded-3">

                    <div class="col-md-12 text-center py-3"><h1 class="">Clique e confira nossos serviços</h1></div>
 
                    <div class="col-md-12 mb-5 d-flex flex-row flex-wrap justify-content-center align-items-center" style="z-index: 100;">
                        <a href="#" class="text-center mx-2 my-3 text-decoration-none border-bottom border-5 border-primary" style="width: 25vh;" onclick="redesSociais('redes-click')">
                            <div class="mx-auto rounded-circle d-flex flex-row flex-nowrap justify-content-center align-items-center">
                                <i class="fa-sharp fa-solid fa-thumbs-up fs-1 text-dark"></i>
                            </div>
                            <span class="text-center text-black fw-semibold">Redes Sociais</span>
                        </a>
                        <a href="#" class="text-center mx-2 my-3 text-decoration-none border-bottom border-5 border-primary" style="width: 25vh;" onclick="identidadeVisual('idv-click')">
                            <div class="mx-auto rounded-circle d-flex flex-row flex-nowrap justify-content-center align-items-center">
                                <i class="fa-sharp fa-solid fa-palette fs-1 text-dark"></i>
                            </div>
                            <span class="text-center text-black fw-semibold">Identidade Visual</span>
                        </a>
                        <a href="#" class="text-center mx-2 my-3 text-decoration-none border-bottom border-5 border-primary" style="width: 25vh;" onclick="webSites('website-click')">
                            <div class="mx-auto rounded-circle d-flex flex-row flex-nowrap justify-content-center align-items-center">
                                <i class="fa-solid fa-computer fs-1 text-dark"></i>
                            </div>
                            <span class="text-center text-black fw-semibold">Websites</span>
                        </a>
                        <a href="#" class="text-center mx-2 my-3 text-decoration-none border-bottom border-5 border-primary" style="width: 25vh;" onclick="treinamentos('treinamentos-click')">
                            <div class="mx-auto rounded-circle d-flex flex-row flex-nowrap justify-content-center align-items-center">
                                <i class="fa-sharp fa-solid fa-people-group fs-1 text-dark"></i>
                            </div>
                            <span class="text-center text-black fw-semibold">Treinamentos</span>
                        </a>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-12" id="redes-click">
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="mb-3">Gestão de redes sociais</h3>
                                <span>Conecte-se com seu público oferecendo conteúdo de valor todos os dias.</span>
                                <div class="mt-3 ms-5">
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp;Estratégias com base em pesquisa de mercado;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp;Conteúdo de alta qualidade: textos e imagens;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp;Agenda de publicações otimizada;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp;Alcance ampliado para o público-alvo certo;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp;Anúncios de remarketing: exibir para quem já interagiu com a marca;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp;Relatórios mensais detalhados.</p>
                                </div>
                                <span class="fw-bold mt-4">Itens adicionais</span>
                                
                                <hr>
                                <div class="d-flex flex-row flex-wrap justify-content-between">
                                    <span>+ Vídeos animados e motion</span>
                                    <span>+ Criação de Landing page</span>
                                </div>

                                <a href="./contact.php" class="btn btn-primary my-3">Personalize seu plano</a>
                            </div>
                            <div class="col-md-5 d-md-block d-xl-block d-xxl-block d-lg-block d-none">
                                <img src="./assets/images/works/kristtapost/postinsta.webp" width="100%" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" id="idv-click" style="display: none;">
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="mb-3">Identidade Visual</h3>
                                <span>Transforme sua empresa com a identidade visual certa. Seja você uma marca em ascensão ou em busca de mudanças, estamos aqui para ajudar a moldar a imagem do seu negócio.</span>
                                <div class="mt-3 ms-5">
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Criação do logotipo e suas variações;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Análise de concorrente;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Tipografia;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Conceito;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Cores;</p>
                                </div>
                                <span class="fw-bold mt-4">Itens adicionais</span>
                                
                                <hr>
                                <div class="d-flex flex-row flex-wrap justify-content-between">
                                    <p>Personalize a sua marca com ajuda de um especialista. Aperfeiçoe cada ponto de contato com clientes e colaboradores.</p>
                                    <div class="col-md-6">
                                        <p>+ Manual da marca</p>
                                        <p>+ Apresentações, folders, revistas, ebooks, infográficos e outros;</p>
                                        <p>+ Assinatura de e-mail</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>+ Material de vendas e peças publicitárias</p>
                                        <p>+ Peças gráficas</p>
                                        <p>+ Material de escritório</p>
                                    </div>
                                </div>

                                <a href="./contact.php" class="btn btn-primary my-3">Personalize seu plano</a>
                            </div>
                            <div class="col-md-5 d-md-flex d-xl-flex d-xxl-flex d-lg-flex d-none flex-row flex-nowrap align-items-center justify-content-center">
                                <img src="./assets/images/services/idv.webp" width="100%" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" id="website-click" style="display: none;">
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="mb-3">Websites</h3>
                                <span>Transforme sua presença online em uma oportunidade de negócio. Com um site profissional, atraia mais clientes e aumente suas chances de conversão, disponível 24 horas por dia, sete dias por semana.</span>
                                <div class="mt-3 ms-5">
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Criação de Landingpages de alta performace;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Responsivos: adaptamos a visualização para computador, celular e tablet;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Configuração de segurança (SSL);</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Formulário de contato;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Botão flutuante do Whatsapp;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Links para redes sociais.</p>
                                </div>
                                <span class="fw-bold mt-4">Itens adicionais</span>
                                
                                <hr>
                                <div class="d-flex flex-row flex-wrap justify-content-between">
                                    <p>Transforme sua empresa em uma referência na sua área de atuação com visibilidade e destaque.</p>
                                    <div class="col-md-6">
                                        <p>+ Hospedagem</p>
                                        <p>+ Domínio</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>+ E-mail Marketing</p>
                                        <p>+ Banco de Dados</p>
                                    </div>
                                </div>

                                <a href="./contact.php" class="btn btn-primary my-3">Personalize seu plano</a>
                            </div>
                            <div class="col-md-5 d-md-flex d-xl-flex d-xxl-flex d-lg-flex d-none flex-row flex-wrap align-items-center justify-content-center">
                                <p class="text-center my-0"><img src="./assets/images/works/kristtapost/notebook2.webp" width="100%" alt=""></p>
                                <p class="text-center my-0"><img src="./assets/images/works/kristtapost/smartphone.webp" width="50%" alt=""></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" id="treinamentos-click" style="display: none;">
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="mb-3">Treinamento de equipe</h3>
                                <span>Treinar sua equipe comercial traz benefícios além de conhecimento e capacitação, como motivação e engajamento da equipe, que se sente valorizada com o investimento em seu treinamento.</span>
                                <div class="mt-3 ms-5">
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Treinamento em prospecção;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Treinamento de técnica de vendas;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Treinamentos operacionais;</p>
                                    <p class="d-flex flex-row flex-nowrap align-items-center"><i class="fa-solid fa-circle" style="font-size: 7px;"></i> &nbsp; Treinamento sobre soluções da empresa;</p>
                                </div>
                                <span class="fw-bold mt-4">Itens adicionais</span>
                                
                                <hr>
                                <div class="d-flex flex-row flex-wrap justify-content-between">
                                    <p>Aprenda a manter sua equipe de vendas motivada e focada em resultados com treinamentos eficazes. Alcance alta performance e melhoria contínua com a nossa ajuda.</p>
                                    <div class="col-md-6">
                                        <p>+ Clientes teste</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>+ Pós vendas</p>
                                    </div>
                                </div>

                                <a href="./contact.php" class="btn btn-primary my-3">Personalize seu plano</a>
                            </div>
                            <div class="col-md-5 d-md-flex d-xl-flex d-xxl-flex d-lg-flex d-none flex-row flex-wrap align-items-center justify-content-center">
                                <p class="text-center my-0"><img src="./assets/images/works/kristtapost/berguilhos.webp" width="75%" alt=""></p>
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

<script>
  function redesSociais() {
    document.getElementById('redes-click').style.display = 'block';
    document.getElementById('idv-click').style.display = 'none';
    document.getElementById('website-click').style.display = 'none';
    document.getElementById('treinamentos-click').style.display = 'none';
  }
  
  function identidadeVisual() {
    document.getElementById('redes-click').style.display = 'none';
    document.getElementById('idv-click').style.display = 'block';
    document.getElementById('website-click').style.display = 'none';
    document.getElementById('treinamentos-click').style.display = 'none';
  }
  
  function webSites() {
    document.getElementById('redes-click').style.display = 'none';
    document.getElementById('idv-click').style.display = 'none';
    document.getElementById('website-click').style.display = 'block';
    document.getElementById('treinamentos-click').style.display = 'none';
  }
  
  function treinamentos() {
    document.getElementById('redes-click').style.display = 'none';
    document.getElementById('idv-click').style.display = 'none';
    document.getElementById('website-click').style.display = 'none';
    document.getElementById('treinamentos-click').style.display = 'block';
  }
</script>

</html>