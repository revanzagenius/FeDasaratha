<?= $this->element('main') ?>

<head>
  <?= $this->element('title-meta', array('title' => 'File Upload')); ?>

  <?= $this->element('head-css') ?>

  <link href="assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet">
	<link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet">

</head>

<body>

<?= $this->element('menu') ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?= $this->element('page-title', array('title' => 'Forms', 'pagetitle' => 'File Upload')); ?>
				
        <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Fancy File Upload</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<input id="fancy-file-upload" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Image Uploadify</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<form>
									<input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
								</form>
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

<?= $this->element('footer') ?>

<?= $this->element('cart') ?>

<?= $this->element('right-sidebar') ?>

<?= $this->element('vendor-scripts') ?>

  <script src="assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
	<script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
	<script>
		$('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
	</script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>

</body>

</html>