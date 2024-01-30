<!-- Created By Rodrigo -->
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
    <div  data-aos="fade" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true">
        <?php
            include_once('./views/theme/content.php');
            include_once('./views/theme/footer.php');
        ?>
    </div>
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
