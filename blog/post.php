<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
$uri = $_GET['uri'];

include "$basePath/src/trans/common.php";
require_once "$basePath/src/php/blog.php";

// Cargar contenido
$data = getPost($uri);
$post = $data[0];
$meta = $data[1];
$author = $data[2];
$cta = $data[3];

if (!isset($post)) {
  header('Location: https://www.tagac.com.mx/');
  exit();
}
?>
<!doctype html>

<html lang='es'>

<head>

  <!-- Idioma y Codificación -->
  <meta charset="UTF-8">
  <meta http-equiv="content-language" content='es'>

  <!-- Definiciones y SEO -->
  <title><?php echo $post->title ?></title>
  <link rel="canonical" href="<?php echo "https://www.tagac.com.mx/blog/$uri" ?>">
  <meta name="title" content="<?php echo $meta->title ?>">
  <meta name="description" content="<?php echo $meta->description ?>">
  <meta name="author" content="<?php echo $author->name ?>">

  <!-- Open Graph  y Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <!--meta name="twitter:site" content="" /-->
  <meta name="twitter:image" content="<?php echo "https://www.tagac.com.mx/src/img/blog/$post->image" ?>" />
  <meta property="og:url" content="<?php echo "https://www.tagac.com.mx/blog/$uri" ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php echo $meta->title ?>" />
  <meta property="og:description" content="<?php echo $meta->description ?>" />
  <meta property="og:image" content="<?php echo "https://www.tagac.com.mx/src/img/blog/$post->image" ?>" />

  <!-- Etiquetas Comunes -->
  <?php include "$basePath/src/common/head.php" ?>

  <!-- Hoja de estilo -->
  <link rel="stylesheet" href="https://www.tagac.com.mx/src/css/blog.css">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "name": "<?php echo $post->title ?>",
    "headline": "<?php echo $post->title ?>",
    "url": "<?php echo "https://www.tagac.com.mx/blog/$uri" ?>",
    "image": "https://www.tagac.com.mx/src/img/blog/<?php echo $post->image ?>",
    "datePublished": "<?php echo $post->publishedAt ?>",
    "dateModified": "<?php echo $post->updatedAt ?>",
    "author": {
      "@type": "Person",
      "name": "<?php echo $author->name ?>"
    },
    "articleSection": [
      <?php
        $list = explode(';', $meta->sections);
        foreach ($list as $item): ?>
      "<?php echo $item ?>",
      <?php endforeach ?>
      ""
    ],
    "publisher": {
      "@type": "Organization",
      "name": "TAGAC"
    }
  }
  </script>
</head>

<body>

  <?php include "$basePath/src/common/navbar.php" ?>

  <!-- Popup de Suscripción -->
  <!--?php include "popup.php" ?-->

  <section id="content" class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- Sección de Contenido -->
        <div class="post col-lg-9">
          <div class="header row">
            <h1><?php echo $post->title ?></h1>
            <div class="col-md-6">
              <p class="author"><?php echo "Por {$author->name}" ?></p>
            </div>
            <div class="col-md-6">
              <p class="date"><?php echo "Publicado el " . date('j/m/Y', strtotime($post->publishedAt)) ?></p>
            </div>
            <img src="<?php echo 'https://www.tagac.com.mx/src/img/blog/' . $post->image ?>"
              alt="<?php echo $post->imageAlt; ?>">
          </div>
          <div class="body row">
            <?php echo $post->body ?>
          </div>

          <!-- ***** Call To Action image ***** >
          <div class="cta row">
            <a href="?php echo $cta['slug'] ?>">
              <img src="<?php echo 'https://www.ruzaani.com/src/img/blog/cta/' . $cta->image ?>"
                alt="?php echo $cta->imageAlt ?>">
            </a>
          </div-->
        </div>

        <!-- Sección de Pubcicaciones Destacadas >
        <-?php $featured = getFeaturedPosts() ?>
        <div class="col-lg-3 sticky-lg-top sidebar">
          <div class="header row">
            <h4>Artículos Destacados</h4>
          </div>
          <div class="list row">
          <?php foreach ($featured as $post): ?>
            <a href="<?php echo $post['slug'] ?>">
              <div class="featured col-6 col-md-12">
                <img src="<?php echo 'https://www.tagac.com.mx/src/img/blog/' . $post->image ?>" alt="<?php echo $post->imageAlt ?>">
                <p><?php echo $post->title ?></p>
              </div>
            </a>
          <?php endforeach ?>
          </div>
        </div-->

      </div>
    </div>
  </section>

  <?php include "$basePath/src/common/footer.php" ?>

  <!-- Scripts -->
  <?php include "$basePath/src/common/scripts.php" ?>
  <script src="https://www.tagac.com.mx/src/js/post.js"></script>

</body>

</html>