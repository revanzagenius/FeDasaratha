<?php echo $this->render('partials/main'); ?>

<head>
  <?php echo $this->render('partials/title-meta', array('title' => 'Badges')); ?>

  <?php echo $this->render('partials/head-css'); ?>

</head>

<body>

<?php echo $this->render('partials/menu'); ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?php echo $this->render('partials/page-title', array( 'title' => 'Components', 'pagetitle' => 'Badges')); ?>

         <div class="card">
          <div class="card-header">
            <h6 class="card-title mb-0 py-1">Basic Badge</h6>
          </div>
          <div class="card-body">
            <span class="badge bg-primary">Primary</span>
            <span class="badge bg-secondary">Secondary</span>
            <span class="badge bg-success">Success</span>
            <span class="badge bg-danger">Danger</span>
            <span class="badge bg-warning text-dark">Warning</span>
            <span class="badge bg-info text-dark">Info</span>
            <span class="badge bg-light text-dark">Light</span>
            <span class="badge bg-dark">Dark</span>
            <hr>	<span class="badge rounded-pill bg-primary">Primary</span>
            <span class="badge rounded-pill bg-secondary">Secondary</span>
            <span class="badge rounded-pill bg-success">Success</span>
            <span class="badge rounded-pill bg-danger">Danger</span>
            <span class="badge rounded-pill bg-warning text-dark">Warning</span>
            <span class="badge rounded-pill bg-info text-dark">Info</span>
            <span class="badge rounded-pill bg-light text-dark">Light</span>
            <span class="badge rounded-pill bg-dark">Dark</span>
          </div>
         </div>

         <div class="card">
          <div class="card-header">
            <h6 class="card-title mb-0 py-1">Buttons Badge</h6>
          </div>
          <div class="card-body">
            <div class="row row-cols-auto g-3">
              <div class="col">
                <button type="button" class="btn btn-primary">Notifications <span class="badge bg-dark">8</span>
                </button>
              </div> 
              <div class="col">
                <button type="button" class="btn btn-danger">Notifications <span class="badge bg-dark">5</span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-success">Notifications <span class="badge bg-dark">10</span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-warning">Notifications <span class="badge bg-dark">6</span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-info">Notifications <span class="badge bg-dark">7</span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-dark">Notifications <span class="badge bg-secondary">6</span>
                </button>
              </div>
            </div>
          </div>
         </div>

         <div class="card">
          <div class="card-header">
            <h6 class="card-title mb-0 py-1">Badge Usage</h6>
          </div>
          <div class="card-body">
            <div class="row row-cols-auto gy-4">
              <div class="col">
                <button type="button" class="btn btn-dark position-relative d-flex gap-2"><i class="material-icons-outlined">chat_bubble_outline</i>Comments<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">+18 <span class="visually-hidden">unread messages</span></span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-danger position-relative d-flex gap-2"><i class="material-icons-outlined">chat_bubble_outline</i>Bookmark<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">+18 <span class="visually-hidden">unread messages</span></span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-primary position-relative d-flex gap-2"><i class="material-icons-outlined">favorite_border</i>Wishlist<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">10<span class="visually-hidden">unread messages</span></span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-success position-relative d-flex gap-2"><i class="material-icons-outlined">event</i>Event<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">10<span class="visually-hidden">unread messages</span></span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-warning position-relative d-flex gap-2"><i class="material-icons-outlined">assignment</i>Projects<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">8k <span class="visually-hidden">unread messages</span></span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-info position-relative d-flex gap-2"><i class="material-icons-outlined">account_circle</i>Teams<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">24 <span class="visually-hidden">unread messages</span></span>
                </button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-secondary position-relative d-flex gap-2"><i class="material-icons-outlined">alarm_on</i>Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
                </button>
              </div>
            </div>
          </div>
         </div>

         <div class="card">
          <div class="card-header">
            <h6 class="card-title mb-0 py-1">Icon Badge</h6>
          </div>
          <div class="card-body">
            <div class="row row-cols-auto g-4">
               <div class="col">
                <a class="badge-icon position-relative p-3 rounded-circle text-dark" href="javascript:;">
                  <span class="badge-number position-absolute top-0 end-0">7</span>
                  <i class="material-icons-outlined">notifications</i>
                </a>
               </div>
               <div class="col">
                <a class="badge-icon position-relative p-3 rounded-circle text-white bg-primary" href="javascript:;">
                  <span class="badge-number position-absolute top-0 end-0">9</span>
                  <i class="material-icons-outlined">favorite_border</i>
                </a>
               </div>
               <div class="col">
                <a class="badge-icon position-relative p-3 rounded-circle text-white bg-success" href="javascript:;">
                  <span class="badge-number position-absolute top-0 end-0">4</span>
                  <i class="material-icons-outlined">verified_user</i>
                </a>
               </div>
               <div class="col">
                <a class="badge-icon position-relative p-3 rounded-circle text-dark bg-warning" href="javascript:;">
                  <span class="badge-number position-absolute top-0 end-0">8</span>
                  <i class="material-icons-outlined">home</i>
                </a>
               </div>
               <div class="col">
                <a class="badge-icon position-relative p-3 rounded-circle text-white bg-dark" href="javascript:;">
                  <span class="badge-number position-absolute top-0 end-0">6</span>
                  <i class="material-icons-outlined">date_range</i>
                </a>
               </div>
               <div class="col">
                <a class="badge-icon position-relative p-3 rounded-circle text-dark bg-info" href="javascript:;">
                  <span class="badge-number position-absolute top-0 end-0">5</span>
                  <i class="material-icons-outlined">notification_important</i>
                </a>
               </div>
               <div class="col">
                <a class="badge-icon position-relative p-3 rounded-circle text-white bg-secondary" href="javascript:;">
                  <span class="badge-number position-absolute top-0 end-0">8</span>
                  <i class="material-icons-outlined">chat_bubble_outline</i>
                </a>
               </div>


            </div><!--end row-->
              
           </div>
         </div>

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