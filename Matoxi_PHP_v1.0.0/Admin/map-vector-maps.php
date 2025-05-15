<?php include 'layouts/main.php'; ?>

<head>
  <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Vector Map')); ?>

  <?php include 'layouts/head-css.php'; ?>

  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

</head>

<body>

<?php include 'layouts/menu.php'; ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?php includeFileWithVariables('layouts/page-title.php', array('title' => 'Maps', 'pagetitle' => 'Vector Map')); ?>

        <div class="row">
          <div class="col-12 col-xl-6">
            <h6 class="text-uppercase">World Map</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<div id="world-map-markers" style="height: 400px"></div>
							</div>
						</div>
          </div>
          <div class="col-12 col-xl-6">
            <h6 class="text-uppercase">India</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<div id="india" style="height: 400px"></div>
							</div>
						</div>
          </div>
          <div class="col-12 col-xl-6">
            <h6 class="text-uppercase">Usa</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<div id="usa" style="height: 400px"></div>
							</div>
						</div>
          </div>
          <div class="col-12 col-xl-6">
            <h6 class="text-uppercase">Australia Map</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<div id="australia" style="height: 400px"></div>
							</div>
						</div>
          </div>
          <div class="col-12 col-xl-12">
            <h6 class="text-uppercase">Uk Map</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<div id="uk" style="height: 400px"></div>
							</div>
						</div>
          </div>
        </div><!--end row-->
      
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

  <!-- Vector map JavaScript -->
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="assets/plugins/vectormap/jvectormap.custom.js"></script>

</body>

</html>