<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>
  <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Matoxi')); ?>
 
  <?php include 'layouts/head-css.php'; ?>

</head>

<body>

<?php include 'layouts/menu.php'; ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
        <!--breadcrumb-->
        <?php includeFileWithVariables('layouts/page-title.php', array('title' => 'Dashboard', 'pagetitle' => 'eCommerce')); ?>
				<!--end breadcrumb-->

       

    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
    <div class="overlay btn-toggle"></div>
  <!--end overlay-->

  <?php include 'layouts/footer.php'; ?>

  <?php include 'layouts/cart.php'; ?>

  <?php include 'layouts/right-sidebar.php'; ?>

  <?php include 'layouts/vendor-scripts.php'; ?>

</body>

</html>