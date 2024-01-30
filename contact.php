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
        <section class="section-04 w-100 d-flex bg-light flex-row flex-nowrap justify-content-center py-3">
            <div class="container-lg d-flex pt-5 flex-row flex-wrap justify-content-center align-items-center my-5">
                <div class="row w-100 text-white mt-5">
                    <div class="col-md-5 my-auto px-5 py-4 mx-0 d-flex flex-row flex-wrap align-items-center" style="background-color:#000028;">
                        <h2>Contate-nos</h2>
                        <p>Um dos nossos consultores entrará em contato em até 24h.</p>
                        <div class="m-0 p-0">
                            <p><i class="fa-brands fa-whatsapp fs-4"></i> &nbsp; Nosso Whatsapp</p>
                            <p><a href="#" class="text-decoration-none fw-bold m-0 text-white">(79) 9 9833-4969</a></p>
                            <p class="mt-4"><i class="fa-solid fa-envelope fs-4"></i> &nbsp; Envie um E-mail</p>
                            <p><a href="#" class="text-decoration-none fw-bold m-0 text-white">contato@kristta.com.br</a></p>
                        </div>
                        <div class="col-md-12 d-flex flex-row flex-wrap justify-content-start">
                            <div class="text-white fs-3 text-center">
                                <a class="link-light" href="#" id="insta"><i class="fa-brands fa-instagram"></i></a>
                            </div>    

                            <div class="text-white fs-3 ms-3 text-center">
                                <a class="link-light" href="http://wa.me/5579998334969/"><i class="my-auto fa-brands fa-whatsapp"></i></a>
                            </div>
                                
                            <div class="text-white fs-3 ms-3 text-center">
                                <a class="link-light" href="https://www.linkedin.com/in/kristta-mkt-97783a264"><i class="fa-brands fa-linkedin"></i></a>
                            </div>   
                        </div>
                    
                    </div>
                    <div class="col-md-6 mx-0 px-0 shadow">
                        <form action="" class="form form-control px-4 py-3">
                            <div class="alert py-1 my-0" id="alert" role="alert"></div>
                            <div class="col-md-12 mb-2">
                                <label for="nome" class="form-label fs-6 opacity-75 fw-semibold">Nome</label>
                                <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="Digite seu nome completo">
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="email" class="form-label fs-6 opacity-75 fw-semibold">Email</label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="name@example.com">
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="fone" class="form-label fs-6 opacity-75 fw-semibold">Telefone</label>
                                <input type="text" class="form-control form-control-sm" name="fone" id="fone" placeholder="Contato">
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="whatsapp" class="form-label fs-6 opacity-75 fw-semibold">Whatsapp</label>
                                <input type="text" class="form-control form-control-sm" name="whatsapp" id="whatsapp" placeholder="Whatsapp">
                            </div>
                            <div class="mb-12">
                                <label for="msg" class="form-label fs-6 opacity-75 fw-semibold">Mensagem</label>
                                <textarea class="form-control form-control-sm" name="msg" id="msg" rows="3"></textarea>
                            </div>
                            <div class="mt-3">
                                <input type="button" name="submit" id="submit" class="btn px-5 py-2 fw-bold text-white" value="Enviar" style="background-color: #000028;">
                            </div>
                        </form>
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

<script type="text/javascript">

	$(document).ready(function(){
		$('#submit').click(function(){
			var nome = $('#nome').val();
            var email = $('#email').val();
			var fone = $('#fone').val();
			var whatsapp = $('#whatsapp').val();
            var msg = $('#msg').val();

			$('#alert').html('');
			if (nome == '') {
				$('#alert').html('Preencher o nome.');
				$('#alert').addClass("alert-danger");
				return false;				
			}

            $('#alert').html('');
			if (email == '') {
				$('#alert').html('Preencher o email.');
				$('#alert').addClass("alert-danger");
				return false;				
			}

			$('#alert').html('');
			if (fone == '') {
				$('#alert').html('Preencher o telefone.');
				$('#alert').addClass("alert-danger");
				return false;
			}

			$('#alert').html('');
			if (whatsapp == '') {
				$('#alert').html('Preencher a whatsapp.');
				$('#alert').addClass("alert-danger");
				return false;
			}

            $('#alert').html('');
			if (msg == '') {
				$('#alert').html('Preencher a mensagem.');
				$('#alert').addClass("alert-danger");
				return false;
			}

			$('#alert').html('');

			$.ajax({
				url:'./controller/enviar.php',
				method: 'POST',
				data: {nome: nome, email:email, fone:fone, whatsapp:whatsapp, msg:msg},
				success: function(result) {
					$('form').trigger("reset");
					$('#alert').addClass("alert-success");
					$('#alert').fadeIn().html(result);
					setTimeout(function(){
						$('#alert').fadeOut('Slow');
					},3000);
				}
			});


		});
	});

</script>

</html>