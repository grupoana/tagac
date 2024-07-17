<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
$lang ='es';

include "$basePath/src/trans/lp/cuadriculado.php";
include "$basePath/src/common/contact-data.php";
include "$basePath/src/.api.php";
?>
<!DOCTYPE html>
<html lang='<?php echo $lang ?>'>

<head>
  <!-- Idioma y codificación -->
  <meta charset="UTF-8">
  <meta http-equiv="content-language" content="<?php echo $lang ?>">

  <!-- Definiciones de la página y SEO -->
  <title><?php echo $seoTitle ?></title>
  <meta name="description" content="<?php echo $seoTitle ?>">

  <!-- Etiquetas comunes -->
  <?php include "$basePath/src/common/head.php" ?>

  <!-- Hoja de estilo -->
  <link rel="stylesheet" href="https://www.tagac.com.mx/src/css/lp/cuadriculado.css">

</head>

<body>
  <!--------------- Rastreador del Tag Manager ---------------->
<?php include "$basePath/src/common/tag-manager.php" ?>

  <!--------------------- Hero section ------------------------>
  <section id="<?php echo $heroId ?>" class="row hero">
    <div class="float-parent">
      <div class="float">
        <h1><?php echo $heroTitle ?></h1>
        <p><?php echo $heroSub ?></p>
      </div>
    </div>
    <div class="arrow bounce">
      <a href="#<?php echo $descId ?>">
        <img src="https://www.usa-tagac.com/assets/img/chevron-down.svg" alt="seguir leyendo">
      </a>
    </div>
  </section>

  <!--------------------- Description ------------------------->
  <section id="<?php echo $descId ?>" class="row description">
    <div class="row item odd">
      <div class="text first-div col-md-5">
        <div class="header">
          <h2><?php echo $descTitle[1] ?></h2>
          <p><?php echo $descSub[1] ?></p>
        </div>
      </div>
      <div class="picture col-md-7" data-aos="fade-left">
        <img class="img-lg" src="<?php echo $descImg[1]['lg'] ?>" alt="TAGAC Papel grado alimenticio">
        <img class="img-md" src="<?php echo $descImg[1]['md'] ?>" alt="TAGAC Papel grado alimenticio">
        <img class="img-sm" src="<?php echo $descImg[1]['sm'] ?>" alt="TAGAC Papel grado alimenticio">
      </div>
    </div>
    <div class="row item odd even">
      <div class="picture col-md-7" data-aos="fade-right" data-aos-offset="200">
        <img class="img-lg" src="<?php echo $descImg[2]['lg'] ?>" alt="TAGAC Papel grado alimenticio">
        <img class="img-md" src="<?php echo $descImg[2]['md'] ?>" alt="TAGAC Papel grado alimenticio">
      </div>
      <div class="text first-div col-md-5">
        <div class="header">
          <h2><?php echo $descTitle[2] ?></h2>
          <p><?php echo $descSub[2] ?></p>
        </div>
      </div>
      <div class="picture img-sm col-12" data-aos="fade-right">
        <img src="<?php echo $descImg[2]['sm'] ?>" alt="Papel grado alimenticio">
      </div>
    </div>
    <div class="row item odd">
      <div class="text first-div col-md-6">
        <div class="header">
          <h2><?php echo $descTitle[3] ?></h2>
          <p><?php echo $descSub[3] ?></p>
        </div>
      </div>
      <div class="picture col-md-6" data-aos="fade-left">
        <img class="img-lg" src="<?php echo $descImg[3]['lg'] ?>" alt="TAGAC Papel grado alimenticio">
        <img class="img-md" src="<?php echo $descImg[3]['md'] ?>" alt="TAGAC Papel grado alimenticio">
        <img class="img-sm" src="<?php echo $descImg[3]['sm'] ?>" alt="TAGAC Papel grado alimenticio">
      </div>
    </div>
    <div class="row item even">
      <div class="picture col-md-7" data-aos="fade-right" data-aos-offset="200">
        <img class="img-lg" src="<?php echo $descImg[4]['lg'] ?>" alt="TAGAC Papel grado alimenticio">
        <img class="img-md" src="<?php echo $descImg[4]['md'] ?>" alt="TAGAC Papel grado alimenticio">
      </div>
      <div class="text first-div col-md-5">
        <div class="header">
          <h2><?php echo $descTitle[4] ?></h2>
          <p><?php echo $descSub[4] ?></p>
        </div>
      </div>
      <div class="picture img-sm col-12" data-aos="fade-right">
        <img src="<?php echo $descImg[4]['sm'] ?>" alt="TAGAC Papel grado alimenticio">
      </div>
    </div>
    <div class="col-12 cta-div">
    <a class="cta-button shake" href="#<?php echo $ctaId ?>"><?php echo $cta ?></a>
    </div>
  </section>

  <div class="separator-top"></div>

  <!-------------------- Product offer ------------------------>
  <section id="<?php echo $prodId ?>" class="row offer">
    <div class="header">
      <h2><?php echo $ofrTitle ?></h2>
    </div>
    <div class="col-lg-5 col-md-6 content">
      <p><?php echo $ofrSub ?></p>
      <div class="cta-div cta-inner">
        <a class="cta-button shake" href="#<?php echo $ctaId ?>"><?php echo $cta ?></a>
      </div>
    </div>
    <div class="col-lg-7 col-md-6 picture-container">
      <div class="row picture-top" data-aos="zoom-in">
        <img src="https://www.usa-tagac.com/assets/img/lp/checkered/offer1.jpg" alt="TAGAC Papel grado alimenticio">
      </div>
      <div class="row space"></div>
      <div class="row picture-bottom" data-aos="zoom-in" data-aos-offset="400">
        <img src="https://www.usa-tagac.com/assets/img/lp/checkered/offer2.jpg" alt="TAGAC Papel grado alimenticio">
      </div>
    </div>
  </section>

  <div class="separator-bottom"></div>

  <!----------------------- About Us -------------------------->
  <section id="<?php echo $aboutId ?>" class="row about">
    <div class="col-12 header">
      <div class="logo">
        <img src="https://www.tagac.com.mx/src/img/brand/logo-full.svg" alt="TAGAC">
      </div>
      <h2><?php echo $aboutTitle ?></h2>
    </div>
    <div class="row item odd">
      <div class="col-md-7 description">
        <p><?php echo $aboutDescription ?></p>
      </div>
      <div class="col-md-5 picture" data-aos="fade-left">
        <img src="https://www.tagac.com.mx/src/img/lp/cuadriculado/nosotros-empaques.jpg" alt="TAGAC Soluciones en empaque">
      </div>
    </div>
  </section>

  <div class="separator-contact"></div>

  <!-------------------- Call to Action ----------------------->
  <section id="<?php echo $ctaId ?>" class="row cta">
    <div class="col-12 header">
      <h2><?php echo $ctaTitle ?></h2>
      <p><?php echo $ctaDescription ?></p>
    </div>
    <div class="col-md-6 form">
      <form id="tagac<?php echo $ctaFormId ?>" action="https://www.tagac.com.mx/src/php/form-submit.php" method="post" accept-charset='UTF-8'>
        <input type="hidden" name="form" id="form" value="<?php echo $ctaFormName ?>">
        <input type="name" name="name" id="name" placeholder="<?php echo $ctaName ?>" autocomplete="on" required>
        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="<?php echo $ctaEmail ?>" required>
        <input type="tel" name="phone" id="phone" placeholder="<?php echo $ctaPhone ?>" autocomplete="on">
        <div class="col-lg-12">
            <textarea type="text" name="message" id="message" placeholder="<?php echo $ctaMessage ?>" class="form-control"></textarea>
          </div>
        <button id="form-submit" name="submit" type="submit" class="cta-button"><?php echo $ctaBtn ?></button>
      </form>
    </div>
    <div class="col-md-6 more">
      <p><?php echo $ctaMore ?></p>
      <a id="<?php echo $ctaPhoneId ?>" class="cta-button" href="tel:<?php echo $dataPhone[$lang] ?>">Llámanos al <?php echo $dataPhoneStr[$lang] ?></a>
      <a id="<?php echo $ctaEmailId ?>" class="cta-button" href="mailto:<?php echo $dataEmail[$lang] ?>">Envíanos un correo a<br><?php echo $dataEmail[$lang] ?></a>
    </div>
  </section>

  <!-- Scripts -->
  <?php include "$basePath/src/common/scripts.php" ?>

  <!-- AOS initialization -->
  <script>AOS.init({duration: 300, easing: 'ease-in-out', mirror: false});</script>
</body>

</html>