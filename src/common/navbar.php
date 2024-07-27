<!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $tagManagerID ?>" height="0" width="0"
    style="display:none;visibility:hidden"></iframe></noscript>

  <!-- ======= Header ======= -->
  <header id="header" class="navigation fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="https://www.tagac.com.mx/src/img/brand/logo-full.svg" class="img-fluid" alt="tagac">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/#inicio"><?php echo $menuHome ?></a></li>
          <li><a href="/#nosotros"><?php echo $menuAbout ?></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $menuProducts ?></a>
            <ul class="dropdown-menu">
<?php foreach ($submenuProducts as $category): ?>
                <li><a href="/<?php echo $category['href'] ?>" class="dropdown-item"><?php echo $category['title']?></a></li>
<?php endforeach ?>
            </ul>
          </li>
          <li><a href="/#cobertura"><?php echo $menuShipping ?></a></li>
          <li><a href="https://www.tagac.com.mx/blog/"><?php echo $menuBlog ?></a></li>
        </ul>
      </nav>
      <div class="d-flex align-items-center gap-3">
        <a class="btn-book-a-table" href="/#contacto"><?php echo $menuContact ?></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
