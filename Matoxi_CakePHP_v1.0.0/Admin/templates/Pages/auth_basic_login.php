
<?= $this->element('main') ?>

<head>
 
  <?= $this->element('title-meta', array('title' => 'Login')); ?>
 
  <?= $this->element('head-css') ?>
</head>

  <body class="bg-login">

     <div class="container-fluid my-5">
        <div class="row">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
            <div class="card rounded-4">
              <div class="card-body p-5">
                  <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                  <h4 class="fw-bold">Get Started Now</h4>
                  <p class="mb-0">Enter your credentials to login your account</p>

                  <div class="form-body my-4">
										<form class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control" name="useremail" id="inputEmailAddress" placeholder="Enter Email">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password"  placeholder="Enter Password"> 
                          
                          <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="auth-basic-forgot-password">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Login</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-start">
													<p class="mb-0">Don't have an account yet? <a href="auth-basic-register">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>

                  <div class="separator section-padding">
                    <div class="line"></div>
                    <p class="mb-0 fw-bold">OR</p>
                    <div class="line"></div>
                  </div>

                  <div class="d-flex gap-3 justify-content-center mt-4">
                    <a href="javascript:;" class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="assets/images/apps/05.png" width="30" alt="">
                    </a>
                    <a href="javascript:;" class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="assets/images/apps/17.png" width="30" alt="">
                    </a>
                    <a href="javascript:;" class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="assets/images/apps/18.png" width="30" alt="">
                    </a>
                  </div>

              </div>
            </div>
           </div>
        </div><!--end row-->
     </div>
      
    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bi-eye-slash-fill");
            $('#show_hide_password i').removeClass("bi-eye-fill");
          } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bi-eye-slash-fill");
            $('#show_hide_password i').addClass("bi-eye-fill");
          }
        });
      });
    </script>
  
  </body>
</html>