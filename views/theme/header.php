<header class="fixed-top w-100 bg-white nav-bar-list shadow-sm" id="nav-bar-list-id">
<?php
    include_once('kChat.php');
?>
    <div class="container-lg">
        <nav class="navbar navbar-expand-md" id="navbar">
            <div class="row w-100 mx-0">
                <div class="col-md-3 py-2 px-0 mx-0 d-flex flex-row flex-wrap justify-content-between">
                    <a class="navbar-brand" href="./index.php"><img src="./assets/images/logob.webp" width="200px"></a>
                    <button class="navbar-toggler mx-right text-dark border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-sharp fa-solid fa-bars text-dark fs-2"></i>
                    </button>
                </div>
                <div class="col-md-9 mx-0 px-0 collapse navbar-collapse fw-bold" id="navbarNav">
                    <ul class="navbar-nav w-100 d-md-flex flex-md-nowrap flex-md-row justify-content-md-end">
                        <li class="nav-item border-danger hover-nav">
                            <a class="nav-link active text-dark" aria-current="page" href="./index.php">Início</a>
                        </li>
                        <li class="nav-item border-success hover-nav">
                            <a class="nav-link active text-dark" aria-current="page" href="./about.php">A agência</a>
                        </li>
                        <li class="nav-item border-warning hover-nav px-2">
                            <a class="nav-link text-dark" href="./works.php">Portfólio</a>
                        </li>
                        <li class="nav-item border-info hover-nav px-2">
                            <a class="nav-link text-dark" href="./services.php">Serviços</a>
                        </li>   
                        <li class="nav-item border-primary hover-nav px-2">
                            <a class="nav-link text-dark" href="./client/login.php">Área do Cliente</a>
                        </li>                  
                        <li class="nav-item border-secondary hover-nav">
                            <a class="nav-link text-dark" href="./contact.php">Fale conosco</a>
                        </li>   

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

    <!-- Chat Bot -->
    <script type="text/javascript" src="./assets/js/script-botchat.js"></script>
  <script>
    
  const desiredElement = document.getElementById('nav-bar-list-id'); // elemento alvo
  const pixelsAmount = '50'; // Quantidade de pixels a contar do TOP até definir a cor

  window.addEventListener('scroll', function() {
      if (window.scrollY > pixelsAmount) {
        desiredElement.classList.add('changeStyle'); // adiciona classe "changeColor"
      } else {
        desiredElement.classList.remove('changeStyle'); // remove classe "changeColor"
      }
  });
  </script>