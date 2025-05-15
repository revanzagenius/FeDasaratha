<?= $this->include('partials/main') ?>

<head>
  <?php echo view('partials/title-meta', array('title' => 'Vertical')); ?>

  <?= $this->include('partials/head-css') ?>

</head>

<body>

<?= $this->include('partials/menu') ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?php echo view('partials/page-title', array('title' => 'Pages', 'pagetitle' => 'Vertical Page')); ?>
				
      <h3 class="mb-0">Main Content</h3>
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

</body>

</html>