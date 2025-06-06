<?php include 'layouts/main.php'; ?>
  <head>
    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Coming Soon')); ?>

    <?php include 'layouts/head-css.php'; ?>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

     
  </head>

<body class="bg-error">

<!-- Start wrapper-->
 <div class="pt-5">
    <div class="container pt-5">
      <div class="row pt-5">
        <div class="col-lg-12">
            <div class="text-center error-pages">
                <h2 class="coming-soon-title text-success fw-bold mb-3">We are coming soon</h2>
                <h6 class="text-white text-uppercase">Lets Join and work with us</h6>

                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br>ut labore et dolore magna aliqua.</p>

                <div class="w-50 py-4 mx-auto">
                  <form class="">
                    <div class="input-group input-group-lg">
                      <input type="text" class="form-control" placeholder="Enter Your Email ID">
                      <button class="btn btn-success" type="button"><i class="bi bi-arrow-right"></i>
                      </button>
                    </div>
                  </form>
                </div>
                
                <div class="mt-4 d-flex align-items-center justify-content-center gap-3">
                  <a href="index.php" class="btn btn-success rounded-5 px-4"><i class="bi bi-house-fill me-2"></i>Go To Home</a>
                  <a href="javascript:void();" class="btn btn-outline-light rounded-5 px-4"><i class="bi bi-arrow-left me-2"></i>Previous Page </a>
                </div>

                <div class="mt-4">
                    <p class="text-light">Copyright © 2023 | All rights reserved.</p>
                </div>
                   <hr class="border-light border-2">
                   <div class="list-inline contacts-social mt-4"> 
                     <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="bi bi-facebook"></i></a>
                     <a href="javascript:;" class="list-inline-item bg-pinterest text-white border-0"><i class="bi bi-pinterest"></i></a>
                     <a href="javascript:;" class="list-inline-item bg-whatsapp text-white border-0"><i class="bi bi-whatsapp"></i></a>
                     <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="bi bi-linkedin"></i></a>
                  </div>
            </div>
        </div>
    </div>
        </div>

 </div><!--wrapper-->

</body>
</html>
