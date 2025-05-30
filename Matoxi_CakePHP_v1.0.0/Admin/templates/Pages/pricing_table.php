<?= $this->element('main') ?>

<head>
  <?= $this->element('title-meta', array('title' => 'Pricing Table')); ?>

  <?= $this->element('head-css') ?>

</head>

<body>

<?= $this->element('menu') ?>

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <?= $this->element('page-title', array('title' => 'Pages', 'pagetitle' => 'Pricing Table')); ?>
				
        <div class="row">
           <div class="col-12 col-xl-4">
             <div class="card border-top border-4 border-primary">
               <div class="card-body p-4">
                 <div class="px-2 py-1 fw-medium bg-primary bg-opacity-10 text-primary text-uppercase w-25 text-center rounded">Basic</div>
                 <div class="my-4">
                    <h3 class="mb-2">BasicPack 2022</h3>
                    <p class="mb-0">Made for starters</p>
                 </div>
                 <div class="pricing-content d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fs-6">Bandwith</p>
                      <p class="mb-0 fw-medium fs-6">50 GB</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fs-6">Add-On Domains</p>
                      <p class="mb-0 fw-medium fs-6">10</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fs-6">SSD Storage</p>
                      <p class="mb-0 fw-medium fs-6">250 GB</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fs-6">Mail Adresses</p>
                      <p class="mb-0 fw-medium fs-6">25</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fs-6">Support</p>
                      <p class="mb-0 fw-medium fs-6">Only Mail</p>
                    </div>
                 </div>
                 <div class="price-tag d-flex align-items-center justify-content-center gap-2 my-5">
                   <h5 class="mb-0 align-self-end text-primary">$</h5>
                   <h1 class="mb-0 lh-1 price-amount text-primary">499</h1>
                   <h5 class="mb-0 align-self-end text-primary">/month</h5>
                 </div>
                 <div class="d-grid">
                   <button class="btn btn-lg btn-primary">Get Started</button>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-12 col-xl-4">
            <div class="card border-top border-4 border-success">
              <div class="card-body p-4">
                <div class="px-2 py-1 fw-medium bg-success bg-opacity-10 text-success text-uppercase w-25 text-center rounded">Standard</div>
                <div class="my-4">
                   <h3 class="mb-2">BasicPack 2022</h3>
                   <p class="mb-0">Made for starters</p>
                </div>
                <div class="pricing-content d-flex flex-column gap-3">
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">Bandwith</p>
                     <p class="mb-0 fw-medium fs-6">50 GB</p>
                   </div>
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">Add-On Domains</p>
                     <p class="mb-0 fw-medium fs-6">10</p>
                   </div>
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">SSD Storage</p>
                     <p class="mb-0 fw-medium fs-6">250 GB</p>
                   </div>
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">Mail Adresses</p>
                     <p class="mb-0 fw-medium fs-6">25</p>
                   </div>
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">Support</p>
                     <p class="mb-0 fw-medium fs-6">Only Mail</p>
                   </div>
                </div>
                <div class="price-tag d-flex align-items-center justify-content-center gap-2 my-5">
                  <h5 class="mb-0 align-self-end text-success">$</h5>
                  <h1 class="mb-0 lh-1 price-amount text-success">999</h1>
                  <h5 class="mb-0 align-self-end text-success">/month</h5>
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-success">Get Started</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">
            <div class="card border-top border-4 border-danger">
              <div class="card-body p-4">
                <div class="px-2 py-1 fw-medium bg-danger bg-opacity-10 text-danger text-uppercase w-25 text-center rounded">Premium</div>
                <div class="my-4">
                   <h3 class="mb-2">BasicPack 2022</h3>
                   <p class="mb-0">Made for starters</p>
                </div>
                <div class="pricing-content d-flex flex-column gap-3">
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">Bandwith</p>
                     <p class="mb-0 fw-medium fs-6">50 GB</p>
                   </div>
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">Add-On Domains</p>
                     <p class="mb-0 fw-medium fs-6">10</p>
                   </div>
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">SSD Storage</p>
                     <p class="mb-0 fw-medium fs-6">250 GB</p>
                   </div>
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">Mail Adresses</p>
                     <p class="mb-0 fw-medium fs-6">25</p>
                   </div>
                   <div class="d-flex align-items-center justify-content-between">
                     <p class="mb-0 fs-6">Support</p>
                     <p class="mb-0 fw-medium fs-6">Only Mail</p>
                   </div>
                </div>
                <div class="price-tag d-flex align-items-center justify-content-center gap-2 my-5">
                  <h5 class="mb-0 align-self-end text-danger">$</h5>
                  <h1 class="mb-0 lh-1 price-amount text-danger">799</h1>
                  <h5 class="mb-0 align-self-end text-danger">/month</h5>
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-danger">Get Started</button>
                </div>
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

<?= $this->element('footer') ?>

<?= $this->element('cart') ?>

<?= $this->element('right-sidebar') ?>

<?= $this->element('vendor-scripts') ?>

</body>

</html>