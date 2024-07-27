<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];

include "$basePath/src/trans/common.php";
require_once "$basePath/src/php/blog.php";

$postsList = getPublishedPosts();

?>
<!doctype html>

<html lang='es'>

<head>

  <!-- Idioma y Codificación -->
  <meta charset="UTF-8">
  <meta http-equiv="content-language" content='es'>
  <link rel="alternate" hreflang="es" href="https://www.tagac.com.mx/">

  <!-- Definiciones y SEO -->
  <title>Blog de TAGAC | Soluciones en empaques</title>
  <link rel="canonical" href="https://www.tagac.com.mx/blog">
  <meta name="title" content="Blog de TAGAC | Soluciones en empaques">
  <meta name="description" content="El Blog de TAGAC está dedicado a publicar...">
  <meta name="author" content="Fernando Romay">

  <!-- Open Graph y Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <!--meta name="twitter:site" content="@ruzaanistudio" /-->
  <meta property="og:url" content='https://www.tagac.com.mx/blog' />
  <meta property="og:type" content="blog" />
  <meta property="og:title" content="Blog de TAGAC | Soluciones en empaques" />
  <meta property="og:description" content="El Blog de TAGAC está dedicado a publicar..." />
  <meta property="og:image" content="'https://www.ruzaani.com/src/img/blog/" />

  <!-- Etiquetas Comunes -->
  <?php include "$basePath/src/common/head.php" ?>

  <!-- Hoja de Estilo -->
  <link rel="stylesheet" href="https://www.tagac.com.mx/src/css/blog.css">

</head>

<body>

  <?php include "$basePath/src/common/navbar.php" ?>

  <section class="posts-list container-fluid">
    <div class="header row">
      <h1 class="content-title">Todas las publicaciones</h1>
      <hr>
    </div>
    <?php foreach ($postsList as $post): ?>
    <div class="data row">
      <div class="macro-container col-lg-4">
        <div class="img-container">
          <a href="<?php echo $post->slug ?>">
            <img class="card-image pc-phone" src="<?php echo "https://www.tagac.com.mx/src/img/blog/$post->imageMd" ?>" alt="<?php echo $post->imageAlt ?>">
            <img class="card-image tab" src="<?php echo "https://www.tagac.com.mx/src/img/blog/$post->imageLg" ?>" alt="<?php echo $post->imageAlt ?>">
          </a>
        </div>
      </div>
      <div class="content col-lg-8">
        <a href="<?php echo $post->slug ?>">
          <p class="date"><?php echo date('j/m/Y', strtotime($post->publishedAt)) ?></p>
          <h2 class="title"><?php echo $post->title ?></h2>
          <p class="description"><?php echo $post->description ?></p>
          <p class="read-more"><span>continuar leyendo</span></p>
        </a>
      </div>
    </div>
    <?php endforeach ?>
  </section>

  <?php include "$basePath/src/common/footer.php" ?>

  <!-- Scripts -->
  <?php include "$basePath/src/common/scripts.php" ?>

</body>

</html>