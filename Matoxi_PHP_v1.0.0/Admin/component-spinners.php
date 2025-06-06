<?php include 'layouts/main.php'; ?>

<head>
  <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Spinners')); ?>

  <?php include 'layouts/head-css.php'; ?>

</head>

<body>

<?php include 'layouts/menu.php'; ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?php includeFileWithVariables('layouts/page-title.php', array('title' => 'Components', 'pagetitle' => 'Spinners')); ?>
				
        <div class="row row-cols-auto row-cols-1 row-cols-lg-2">
					<div class="col">
						<h5 class="mb-0">Border spinner</h5>
						<hr>
						<div class="card">
							<div class="card-body">
								<div class="spinner-border" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Border Color spinner</h5>
						<hr>
						<div class="card">
							<div class="card-body">
								<div class="spinner-border text-primary" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-secondary" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-success" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-danger" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-warning" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-info" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-light" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border text-dark" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Growing spinner</h5>
						<hr>
						<div class="card">
							<div class="card-body">
								<div class="spinner-grow" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Border Color spinner</h5>
						<hr>
						<div class="card">
							<div class="card-body">
								<div class="spinner-grow text-primary" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-secondary" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-success" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-danger" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-warning" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-info" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-light" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow text-dark" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Growing Size Spinner</h5>
						<hr>
						<div class="card">
							<div class="card-body">
								<div class="spinner-border spinner-border-sm" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow spinner-grow-sm" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<h5 class="mb-0">Border Color spinner</h5>
						<hr>
						<div class="card">
							<div class="card-body">
								<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"> <span class="visually-hidden">Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<h5 class="mb-0">Spinners With Buttons</h5>
						<hr>
						<div class="card">
							<div class="card-body">
								<button class="btn btn-primary" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-primary" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<button class="btn btn-primary" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-primary" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<hr>
								<button class="btn btn-danger" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-danger" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<button class="btn btn-danger" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-danger" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<hr>
								<button class="btn btn-success" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-success" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<button class="btn btn-success" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-success" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<hr>
								<button class="btn btn-dark" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-dark" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
								<button class="btn btn-dark" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									<span class="visually-hidden">Loading...</span>
								</button>
								<button class="btn btn-dark" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									Loading...</button>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->

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