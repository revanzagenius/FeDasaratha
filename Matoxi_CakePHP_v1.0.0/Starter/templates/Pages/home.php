
<?= $this->element('main') ?>

<head>
  <?= $this->element('title-meta', array('title' => 'Matoxi')); ?>
 
  <?= $this->element('head-css') ?>

</head>

<body>

<?= $this->element('menu') ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
        <!--breadcrumb-->
        <?= $this->element('page-title', array('title' => 'Dashboard', 'pagetitle' => 'eCommerce')); ?>
				<!--end breadcrumb-->

       
      
    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
    <div class="overlay btn-toggle"></div>
  <!--end overlay-->

  <?= $this->element('footer') ?>

  <?= $this->element('cart') ?>

  <?= $this->element('right-sidebar') ?>

  <?= $this->element('vendor-scripts') ?>

</body>

</html>