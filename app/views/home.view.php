<?php $this->view('includes/header', $data) ?>

<body>

  <!-- ======= Header ======= -->
  <?php $this->view('includes/nav', $data) ?>
  <!-- End Header -->

  <!-- ======= main ======= -->
  <?php $this->view('includes/main', $data) ?>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->view('includes/footer', $data) ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= ROOT ?>/zenblog/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= ROOT ?>/zenblog/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= ROOT ?>/zenblog/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= ROOT ?>/zenblog/assets/vendor/aos/aos.js"></script>
  <script src="<?= ROOT ?>/zenblog/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= ROOT ?>/zenblog/assets/js/main.js"></script>

</body>

</html>