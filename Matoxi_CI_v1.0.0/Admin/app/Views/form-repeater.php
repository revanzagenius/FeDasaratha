<?= $this->include('partials/main') ?>

<head>
  <?php echo view('partials/title-meta', array('title' => 'Repeater')); ?>

  <?= $this->include('partials/head-css') ?>

</head>

<body>

<?= $this->include('partials/menu') ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?php echo view('partials/page-title', array('title' => 'Forms', 'pagetitle' => 'Repeater')); ?>
				
        <!-- Repeater Html Start -->
        <div id="repeater">
          <!-- Repeater Heading -->

            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Repeater</h5>
                  <button class="btn btn-primary repeater-add-btn px-4">Add</button>
                </div>
              </div>
            </div>

          <!-- Repeater Items -->
          <div class="items" data-group="test">
            <div class="card">
              <div class="card-body">
                <!-- Repeater Content -->
                <div class="item-content">
                  <div class="mb-3">
                    <label for="inputName1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputName1" placeholder="Name" data-name="name">
                  </div>
                  <div class="mb-3">
                    <label for="inputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputEmail1" placeholder="Email" data-skip-name="true" data-name="email">
                  </div>
                </div>
                <!-- Repeater Remove Btn -->
                <div class="repeater-remove-btn">
                  <button class="btn btn-danger remove-btn px-4">
                    Remove
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="items" data-group="test">

              <div class="card">
                <div class="card-body">
                <!-- Repeater Content -->
                <div class="item-content">
                  <div class="mb-3">
                    <label for="inputName2" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputName2" placeholder="Name" data-name="name">
                  </div>
                  <div class="mb-3">
                    <label for="inputEmail2" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputEmail2" placeholder="Email" data-skip-name="true" data-name="email">
                  </div>
                </div>
                <!-- Repeater Remove Btn -->
                <div class="repeater-remove-btn">
                  <button class="btn btn-danger remove-btn px-4">
                    Remove
                  </button>
                </div>
                </div>
              </div>

          </div>

              <div class="items" data-group="test">
                <div class="card">
                  <div class="card-body">
                    <!-- Repeater Content -->
                    <div class="item-content">
                      <div class="mb-3">
                        <label for="inputName3" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName3" placeholder="Name" data-name="name">
                      </div>
                      <div class="mb-3">
                        <label for="inputEmail3" class="form-label">Email</label>
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" data-skip-name="true"
                          data-name="email">
                      </div>
                    </div>
                    <!-- Repeater Remove Btn -->
                    <div class="repeater-remove-btn">
                      <button class="btn btn-danger remove-btn px-4">
                        Remove
                      </button>
                    </div>
                  </div>
                </div>
              </div>
          
        </div>
          <!-- Repeater End -->

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

  
  <script src="assets/plugins/form-repeater/repeater.js"></script>
	<script>
        /* Create Repeater */
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>

  </body>

</html>