
<?= $this->include('partials/main') ?>

<head>
  <?php echo view('partials/title-meta', array('title' => 'Matoxi')); ?>
 
  <?= $this->include('partials/head-css') ?>

</head>

<body>

<?= $this->include('partials/menu') ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
        <!--breadcrumb-->
        <?php echo view('partials/page-title', array('title' => 'Dashboard', 'pagetitle' => 'eCommerce')); ?>
				<!--end breadcrumb-->

     
      

    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
    <div class="overlay btn-toggle"></div>
  <!--end overlay-->

  <?= $this->include('partials/footer') ?>

  <?= $this->include('partials/cart') ?>

  <?= $this->include('partials/right-sidebar') ?>

  <?= $this->include('partials/vendor-scripts') ?>

  <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="assets/plugins/peity/jquery.peity.min.js"></script>
  <script>
    $(".data-attributes span").peity("donut")
  </script>

</body>

</html>