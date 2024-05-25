<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-3 col-md-6 d-flex">
        <i class="bi bi-geo-alt icon"></i>
        <div>
          <h2><?php echo $footAddress[$lang] ?></h2>
          <p><?php echo $dataAddressFoot[$lang] ?><br></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-links d-flex">
        <i class="bi bi-telephone icon"></i>
        <div>
          <h2><?php echo $footContact[$lang] ?></h2>
          <p>
            <strong>
              <?php echo $footPhone[$lang] ?>
            </strong>
            <a id="phone-footer" href="tel:<?php echo $dataPhone[$lang] ?>"><?php echo $dataPhoneStr[$lang] ?></a><br>
            <strong>
              <?php echo $footEmail[$lang] ?>
            </strong>
            <a id="mail-footer" href="mailto:<?php echo $dataEmail[$lang] ?>"><?php echo $dataEmail[$lang] ?></a><br>
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-links d-flex">
        <i class="bi bi-clock icon"></i>
        <div>
          <h2><?php echo $footHours[$lang] ?></h2>
          <p><?php echo $dataHours[$lang] ?></p>
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