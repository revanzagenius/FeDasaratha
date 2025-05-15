<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect them to index page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Include config file
require_once "layouts/config.php";

// Define variables and initialize with empty values
$useremail = $password = "";
$useremail_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate useremail
    if (empty(trim($_POST["useremail"]))) {
        $useremail_err = "Please enter useremail.";
    } else {
        $useremail = trim($_POST["useremail"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Check for input errors before querying the database
    if (empty($useremail_err) && empty($password_err)) {

        // Prepare a SELECT statement
        $sql = "SELECT id, useremail, password FROM users WHERE useremail = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_useremail);

            // Set parameters
            $param_useremail = $useremail;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if useremail exists in the database
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $useremail, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        // Verify password
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["useremail"] = $useremail;

                            // Redirect user to welcome page
                            header("location: index.php");
                            exit;
                        } else {
                            // Password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // No useremail found
                    $useremail_err = "No account found with that useremail.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>
<?php include 'layouts/main.php'; ?>

<head>
 
  <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Login')); ?>
 
  <?php include 'layouts/head-css.php'; ?>
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
										<form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
											<div class="col-12 <?php echo (!empty($useremail_err)) ? 'has-error' : ''; ?>">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control" name="useremail" value="admin123@gmail.com" id="inputEmailAddress" placeholder="Enter Email">
                        <span class="text-danger"><?php echo $useremail_err; ?></span>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" value="Admin123" placeholder="Enter Password"> 
                          
                          <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
												</div>
                        <span class="text-danger"><?php echo $password_err; ?></span>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="auth-basic-forgot-password.php">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Login</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-start">
													<p class="mb-0">Don't have an account yet? <a href="auth-basic-register.php">Sign up here</a>
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