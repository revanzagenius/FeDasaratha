<?php echo $this->render('partials/main'); ?>

<head>
  <?php echo $this->render('partials/title-meta', array('title' => 'Vertical')); ?>

  <?php echo $this->render('partials/head-css'); ?>

</head>

<body>

<?php echo $this->render('partials/menu'); ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?php echo $this->render('partials/page-title', array( 'title' => 'Pages', 'pagetitle' => 'Vertical Page')); ?>
				
      <h3 class="mb-0">Main Content</h3>
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

</body>

</html>