<?= $this->element('main') ?>

<head>
  <?= $this->element('title-meta', array('title' => 'Popovers')); ?>

  <?= $this->element('head-css') ?>

</head>

<body>

<?= $this->element('menu') ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?= $this->element('page-title', array('title' => 'Components', 'pagetitle' => 'Popovers')); ?>
				
        <div class="card">
					<div class="card-body">
						<h5 class="mb-0">Basic Popovers</h5>
						<hr>
						<button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
					</div>
					<div class="card-body">
						<h5 class="mb-0">Four Directions</h5>
						<hr>
						<div class="row row-cols-auto g-3">
							<div class="col">
								<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on right</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on bottom</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on left</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h5 class="mb-0">Tooltips Examples</h5>
						<hr>
						<div class="row row-cols-auto g-3">
							<div class="col">
								<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Tooltip on right</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">Tooltip on left</button>
							</div>
						</div>
					</div>
				</div>

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

  <script>
		$(function () {
			$('[data-bs-toggle="popover"]').popover();
			$('[data-bs-toggle="tooltip"]').tooltip();
		})
	</script>

</body>

</html>