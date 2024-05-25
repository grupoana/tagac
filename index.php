<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
$lang = 'es';
$salesRep = $_GET['ref'];
$salesRef = $salesRep == null ? '': "?ref=$salesRep";

include "$basePath/assets/contact-data.php";
include "$basePath/assets/trans/index.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
  <!-- Idioma y codificación -->
  <meta charset="UTF-8">
  <meta http-equiv="content-language" content="<?php echo $lang ?>">

  <!-- Definiciones de la página y SEO -->
  <title><?php echo $seoTitle[$lang] ?></title>
  <meta name="title" content="<?php echo $metaTitle[$lang] ?>">
  <meta name="description" content="<?php echo $metaDesc[$lang] ?>">
  <link rel="canonical" href="https://www.tagac.com.mx/">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "LocalBusiness",
    "name": "TAGAC",
    "description": "<?php echo $seoDesc[$lang] ?>",
    "url": "https://www.tagac.com.mx/",
    "image": "",
    "logo": "https://www.tagac.com.mx/assets/img/tagac-logo.png",
    "email": ""<?php echo $dataEmail[$lang] ?>",
    "telephone": ""<?php echo $dataPhone[$lang] ?>",
    "openingHours" : "Mo-Fr 08:00-18:00, Sa 08:00-14:00",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": ""<?php echo $streetAddress[$lang] ?>",
      "addressLocality": ""<?php echo $addressLocality[$lang] ?>",
      "addressRegion": ""<?php echo $addressRegion[$lang] ?>",
      "postalCode": ""<?php echo $postalCode[$lang] ?>",
      "addressCountry": ""<?php echo $addressCountry[$lang] ?>"
    }
  }
  </script>

  <!-- Estilo de la página -->
  <link rel="stylesheet" href="https://www.tagac.com.mx/assets/css/home.css">

  <!-- Etiquetas comunes -->
  <?php include "$basePath/assets/common/head.php" ?>

</head>

<body>

  <!-- Barra de navegación -->
  <?php include "$basePath/assets/common/navbar.php" ?>

  <!--  Sección Héroe  -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2><?php echo $heroTitle[$lang] ?></h2>
          <p data-aos-delay="100"><?php echo $heroSub[$lang] ?></p>
          <div class="d-flex">
            <a href="/<?php echo $salesRef ?>#contacto" class="btn-book-a-table">
              <?php echo $heroCTA[$lang] ?>
            </a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="https://www.tagac.com.mx/assets/img/HOJA-PARA-ENVOLVER.png" class="img-fluid" alt="Papel grado alimenticio">
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
        <p><?php echo $edifTitle[$lang] ?></p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-5 position-relative stats-img" data-aos="fade-up" data-aos-delay="150"
          style="background-image: url(https://www.tagac.com.mx/<?php echo $edifImg[$lang] ?>); background-position: right; background-repeat: no-repeat; background-size: cover;">
        </div>
        <div class="col-lg-7 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <?php echo $edifText[$lang] ?>
            <a href="/<?php echo $salesRef ?>#contacto" class="btn-book-a-table">
              <?php echo $edifCTA[$lang] ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Llamada a la Acción -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2><?php echo $aboutTitle[$lang] ?></h2>
        <p><?php echo $aboutSub[$lang] ?></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-5 position-relative about-img"
          style="background-image: url(https://www.tagac.com.mx/<?php echo $aboutImg[$lang] ?>) ; background-position: center; background-repeat: no-repeat; background-size: cover;"
          data-aos="fade-up" data-aos-delay="150">
          <div class="call-us position-absolute">
            <p class="cta"><?php echo $aboutCTA[$lang] ?></p>
            <p class="number"><?php echo $aboutPhone[$lang] ?></p>
          </div>
        </div>
        <div class="col-lg-7 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <?php echo $aboutText[$lang] ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Banner -->
  <section id="stats-counter" class="stats-counter">
    <div class="container stats" data-aos="zoom-out">
      <div class="flex">
        <h1 class="text-white"><?php echo $ctaTitle[$lang] ?></h1>
        <h5 class="text-white"><?php echo $ctaSub[$lang] ?></h5>
        <a class="btn-book-a-table" href="/<?php echo $salesRef ?>#contacto">
          <?php echo $ctaBtn[$lang] ?>
        </a>
      </div>
    </div>
  </section>


  <!-- Sección de Productos -->
  <section id="products" class="events">
    <div class="container-fluid" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo $prodTitle[$lang] ?></h2>
        <p><?php echo $prodSub[$lang] ?></p>
      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <?php foreach ($products[$lang] as $item): ?>
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
  <section id="packing">
    <div class="container-fluid flex-column d-flex jusitfy-content-center align-items-center" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo $packTitle[$lang] ?></h2>
        <p><?php echo $packSub[$lang] ?></p>
      </div>

      <div id="carrusel" class="carousel slide">
        <div class="carousel-inner">
          <?php
            $directorio = "assets/img/empaque/";
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
        <?php echo $ctaBtn[$lang] ?>
      </a>
    </div>
  </section>

  <!-- Sección de Cobertura de Envíos -->
  <section id="coverage" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo $shipTitle[$lang] ?></h2>
        <p><?php echo $shipSub[$lang] ?></p>
      </div>

      <div class="row">
        <img src="https://www.tagac.com.mx/<?php echo $shipImg[$lang] ?>" class="col-lg-8" alt="<?php echo $shipImgAlt[$lang] ?>">
        <?php echo $shipPoints[$lang] ?>
      </div>
  </section>

  <!--  Sección de Contacto  -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
     <div class="section-header">
        <h2><?php echo $contTitle[$lang] ?></h2>
        <p><?php echo $contSub[$lang] ?></p>
      </div>
     <div class="row gy-4">
       <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3><?php echo $contPhone[$lang] ?></h3>
              <a id="phone-contact" href="tel:<?php echo $dataPhone[$lang] ?>"><?php echo $dataPhoneStr[$lang] ?></a>
            </div>
          </div>
        </div>
       <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <i class="icon bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3><?php echo $contEmail[$lang] ?></h3>
              <a id="email-contact" href="mailto:<?php echo $dataEmail[$lang] ?>"><?php echo $dataEmail[$lang] ?></a>
            </div>
          </div>
        </div>
       <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-map flex-shrink-0"></i>
            <div>
              <h3><?php echo $contAddress[$lang] ?></h3>
              <p><?php echo $dataAddress[$lang] ?><br></p>
            </div>
          </div>
        </div>
       <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-share flex-shrink-0"></i>
            <div>
              <h3><?php echo $contHours[$lang] ?></h3>
              <div>
                <?php echo $dataHours[$lang] ?>
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
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h2>
              <?php echo $footAddress[$lang] ?>
            </h2>
            <p>
              <?php echo $dataAddressFoot[$lang] ?><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h2>
              <?php echo $footContact[$lang] ?>
            </h2>
            <p>
              <strong>
                <?php echo $footPhone[$lang] ?>
              </strong> <a id="phone-footer" href="tel:<?php echo $dataPhone[$lang] ?>"><?php echo $dataPhoneStr[$lang] ?></a><br>
              <strong>
                <?php echo $footEmail[$lang] ?>
              </strong> <a id="mail-footer" href="mailto:<?php echo $dataEmail[$lang] ?>"><?php echo $dataEmail[$lang] ?></a><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h2>
              <?php echo $footHours[$lang] ?>
            </h2>
            <p>
              <?php echo $dataHours[$lang] ?>
            </p>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <?php echo $footRights[$lang] ?>
      </div>

    </div>

  </footer>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://www.tagac.com.mx/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.tagac.com.mx/assets/vendor/aos/aos.js"></script>
  <script src="https://www.tagac.com.mx/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://www.tagac.com.mx/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://www.tagac.com.mx/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://www.tagac.com.mx/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://www.tagac.com.mx/assets/js/home.js"></script>
  <script src="https://www.tagac.com.mx/assets/js/cookies.js"></script>
  <!--script src="assets/js/script.js"></script-->

  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/24005559.js"></script>

</body>

</html>