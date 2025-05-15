
<?php echo $this->render('partials/main'); ?>

<head>
  <?php echo $this->render('partials/title-meta', array('title' => 'Matoxi')); ?>
 
  <?php echo $this->render('partials/head-css'); ?>

</head>

<body>

<?php echo $this->render('partials/menu'); ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
        <!--breadcrumb-->
        <?php echo $this->render('partials/page-title', array( 'title' => 'Dashboard', 'pagetitle' => 'eCommerce')); ?>
				<!--end breadcrumb-->

        
      </div><!--end row-->

    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
    <div class="overlay btn-toggle"></div>
  <!--end overlay-->

  <?php echo $this->render('partials/footer'); ?>

  <?php echo $this->render('partials/cart'); ?>

  <?php echo $this->render('partials/right-sidebar'); ?>

  <?php echo $this->render('partials/vendor-scripts'); ?>

  <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="assets/plugins/peity/jquery.peity.min.js"></script>
  <script>
    $(".data-attributes span").peity("donut")
  </script>

</body>

</html>