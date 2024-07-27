<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-3 col-md-6 d-flex">
        <i class="bi bi-geo-alt icon"></i>
        <div>
          <h2><?php echo $footAddress ?></h2>
          <p><?php echo $dataAddressFoot ?><br></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-links d-flex">
        <i class="bi bi-telephone icon"></i>
        <div>
          <h2><?php echo $footContact ?></h2>
          <p>
            <strong>
              <?php echo $footPhone ?>
            </strong>
            <a id="phone-footer" href="tel:<?php echo $dataPhone ?>"><?php echo $dataPhoneStr ?></a><br>
            <strong>
              <?php echo $footEmail ?>
            </strong>
            <a id="mail-footer" href="mailto:<?php echo $dataEmail ?>"><?php echo $dataEmail ?></a><br>
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-links d-flex">
        <i class="bi bi-clock icon"></i>
        <div>
          <h2><?php echo $footHours ?></h2>
          <p><?php echo $dataHours ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      <?php echo $footRights ?>
    </div>
  </div>
</footer>