<?php include 'layouts/main.php'; ?>

<head>
  <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Date Time Pickers')); ?>

  <?php include 'layouts/head-css.php'; ?>

  <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

</head>

<body>

<?php include 'layouts/menu.php'; ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?php includeFileWithVariables('layouts/page-title.php', array('title' => 'Forms', 'pagetitle' => 'Date Time Pickers')); ?>
					
        <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Date Time Pickers</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<div class="mb-3">
									<label class="form-label">Pick a Date</label>
									<input type="text" class="form-control datepicker">
								</div>
								<div class="mb-3">
									<label class="form-label">Time Picker</label>
									<input type="text" class="form-control time-picker">
								</div>
								<div class="mb-3">
									<label class="form-label">Date & Time Picker</label>
									<input type="text" class="form-control date-time">
								</div>
								<div class="mb-3">
									<label class="form-label">Date Format</label>
									<input type="text" class="form-control date-format">
								</div>
								<div class="mb-3">
									<label class="form-label">Date Range</label>
									<input type="text" class="form-control date-range">
								</div>
								<div class="mb-3">
									<label class="form-label">Inline Calendar</label>
									<input type="text" class="form-control date-inline">
								</div>
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

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script>
		
		$(".datepicker").flatpickr();

		$(".time-picker").flatpickr({
				enableTime: true,
				noCalendar: true,
				dateFormat: "Y-m-d H:i",
			});

		$(".date-time").flatpickr({
				enableTime: true,
				dateFormat: "Y-m-d H:i",
		});

		$(".date-format").flatpickr({
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

		$(".date-range").flatpickr({
			mode: "range",
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

		$(".date-inline").flatpickr({
			inline: true,
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

	</script>

</body>

</html>