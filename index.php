<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
$salesRep = $_GET['ref'];
$salesRef = $salesRep == null ? '': "?ref=$salesRep";

include "$basePath/src/trans/index.php";
include "$basePath/src/.api.php";
?>
<!DOCTYPE html>
<html lang='es'>

<head>
  <!-- Idioma y codificación -->
  <meta charset="UTF-8">
  <meta http-equiv="content-language" content='es'>

  <!-- Definiciones de la página y SEO -->
  <title><?php echo $seoTitle ?></title>
  <meta name="title" content="<?php echo $metaTitle ?>">
  <meta name="description" content="<?php echo $metaDesc ?>">
  <link rel="canonical" href="https://www.tagac.com.mx/">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "LocalBusiness",
    "name": "TAGAC",
    "description": "<?php echo $seoDesc ?>",
    "url": "https://www.tagac.com.mx/",
    "image": "",
    "logo": "https://www.tagac.com.mx/src/img/tagac-logo.png",
    "email": ""<?php echo $dataEmail ?>",
    "telephone": ""<?php echo $dataPhone ?>",
    "openingHours" : "Mo-Fr 08:00-18:00, Sa 08:00-14:00",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": ""<?php echo $streetAddress ?>",
      "addressLocality": ""<?php echo $addressLocality ?>",
      "addressRegion": ""<?php echo $addressRegion ?>",
      "postalCode": ""<?php echo $postalCode ?>",
      "addressCountry": ""<?php echo $addressCountry ?>"
    }
  }
  </script>

  <!-- Etiquetas comunes -->
  <?php include "$basePath/src/common/head.php" ?>
  <link rel="stylesheet" href="https://www.tagac.com.mx/src/vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="https://www.tagac.com.mx/src/vendor/swiper/swiper-bundle.min.css">

  <!-- Estilo de la página -->
  <link rel="stylesheet" href="https://www.tagac.com.mx/src/css/home.css">

</head>

<body>

  <!-- Barra de navegación -->
  <?php include "$basePath/src/common/navbar.php" ?>

  <!--  Sección Héroe  -->
  <section id="inicio" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2><?php echo $heroTitle ?></h2>
          <p data-aos-delay="100"><?php echo $heroSub ?></p>
          <div class="d-flex">
            <a href="/<?php echo $salesRef ?>#contacto" class="btn-book-a-table">
              <?php echo $heroCTA ?>
            </a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="https://www.tagac.com.mx/src/img/HOJA-PARA-ENVOLVER.png" class="img-fluid" alt="Papel grado alimenticio">
        </div>
      </div>
    </div>
  </section>

  <!--  Botón de Whatsapp  -->
  <?php include "$basePath/whatsapp-float.php"; ?>

  <!-- Sección de Edificación -->
  <section id="stats-counter-two" class="stats-counter-two">
    <div class="container" data-aos="zoom-out">
      <div class="section-header">
        <p><?php echo $edifTitle ?></p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-5 position-relative stats-img" data-aos="fade-up" data-aos-delay="150"
          style="background-image: url(https://www.tagac.com.mx/<?php echo $edifImg ?>); background-position: right; background-repeat: no-repeat; background-size: cover;">
        </div>
        <div class="col-lg-7 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <?php echo $edifText ?>
            <a href="/<?php echo $salesRef ?>#contacto" class="btn-book-a-table">
              <?php echo $edifCTA ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Llamada a la Acción -->
  <section id="nosotros" class="about">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2><?php echo $aboutTitle ?></h2>
        <p><?php echo $aboutSub ?></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-5 position-relative about-img"
          style="background-image: url(https://www.tagac.com.mx/<?php echo $aboutImg ?>) ; background-position: center; background-repeat: no-repeat; background-size: cover;"
          data-aos="fade-up" data-aos-delay="150">
          <div class="call-us position-absolute">
            <p class="cta"><?php echo $aboutCTA ?></p>
            <p class="number"><?php echo $aboutPhone ?></p>
          </div>
        </div>
        <div class="col-lg-7 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <?php echo $aboutText ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Banner -->
  <section id="stats-counter" class="stats-counter">
    <div class="container stats" data-aos="zoom-out">
      <div class="flex">
        <h1 class="text-white"><?php echo $ctaTitle ?></h1>
        <h5 class="text-white"><?php echo $ctaSub ?></h5>
        <a class="btn-book-a-table" href="/<?php echo $salesRef ?>#contacto">
          <?php echo $ctaBtn ?>
        </a>
      </div>
    </div>
  </section>

  <!-- Sección de Productos -->
  <section id="productos" class="events">
    <div class="container-fluid" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo $prodTitle ?></h2>
        <p><?php echo $prodSub ?></p>
      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <?php foreach ($products as $item): ?>
            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(https://www.tagac.com.mx/<?php echo $item['img'] ?>)">
              <h3><?php echo $item['title'] ?></h3>
              <p class="description"><?php echo $item['sub'] ?></p>
            </div>
          <?php endforeach ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
   </div>
  </section>

  <!-- Sección de Empaques -->
  <section id="empaques">
    <div class="container-fluid flex-column d-flex jusitfy-content-center align-items-center" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo $packTitle ?></h2>
        <p><?php echo $packSub ?></p>
      </div>

      <div id="carrusel" class="carousel slide">
        <div class="carousel-inner">
          <?php
            $directorio = "src/img/empaque/";
            $imagenes = glob($directorio . "*.{jpg,png,webp,jpeg}", GLOB_BRACE);
            foreach ($imagenes as $index => $imagen) {
                $activeClass = $index === 0 ? 'active' : '';
                echo '<div class="carousel-item ' . $activeClass . '">';
                echo '<img src="' . $imagen . '" class="d-block w-100" alt="Imagen">';
                echo '</div>';
            }
          ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
      <a class="btn-book-a-table mt-4" href="/<?php echo $salesRef ?>#contacto">
        <?php echo $ctaBtn ?>
      </a>
    </div>
  </section>

  <!-- Sección de Cobertura de Envíos -->
  <section id="cobertura" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo $shipTitle ?></h2>
        <p><?php echo $shipSub ?></p>
      </div>

      <div class="row">
        <img src="https://www.tagac.com.mx/<?php echo $shipImg ?>" class="col-lg-8" alt="<?php echo $shipImgAlt ?>">
        <?php echo $shipPoints ?>
      </div>
  </section>

  <!--  Sección de Contacto  -->
  <section id="contacto" class="contact">
    <div class="container" data-aos="fade-up">
     <div class="section-header">
        <h2><?php echo $contTitle ?></h2>
        <p><?php echo $contSub ?></p>
      </div>
     <div class="row gy-4">
       <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3><?php echo $contPhone ?></h3>
              <a id="phone-contact" href="tel:<?php echo $dataPhone ?>"><?php echo $dataPhoneStr ?></a>
            </div>
          </div>
        </div>
       <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <i class="icon bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3><?php echo $contEmail ?></h3>
              <a id="email-contact" href="mailto:<?php echo $dataEmail ?>"><?php echo $dataEmail ?></a>
            </div>
          </div>
        </div>
       <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-map flex-shrink-0"></i>
            <div>
              <h3><?php echo $contAddress ?></h3>
              <p><?php echo $dataAddress ?><br></p>
            </div>
          </div>
        </div>
       <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-share flex-shrink-0"></i>
            <div>
              <h3><?php echo $contHours ?></h3>
              <div>
                <?php echo $dataHours ?>
              </div>
            </div>
          </div>
        </div>
     </div>
     <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
        <div class="row">
          <div class="col-xl-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-xl-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>End Contact Form -->
   </div>
  </section>

  <!--  Pie de Página  -->
  <?php include "$basePath/src/common/footer.php" ?>

  <!-- Scripts comunes -->
  <?php include "$basePath/src/common/scripts.php" ?>
  <script src="https://www.tagac.com.mx/src/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://www.tagac.com.mx/src/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://www.tagac.com.mx/src/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Scripts de la página -->
  <script src="https://www.tagac.com.mx/src/js/home.js"></script>
  <script src="https://www.tagac.com.mx/src/js/cookies.js"></script>

</body>

</html>