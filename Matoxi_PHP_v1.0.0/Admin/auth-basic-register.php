<?php
// Include config file
require_once "layouts/config.php";

// Initialize variables with empty values
$useremail = $username = $password = $confirm_password = "";
$useremail_err = $username_err = $password_err = $confirm_password_err = "";

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate useremail
    if (empty(trim($_POST["useremail"]))) {
        $useremail_err = "Please enter an email.";
    } elseif (!filter_var($_POST["useremail"], FILTER_VALIDATE_EMAIL)) {
        $useremail_err = "Invalid email format.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE useremail = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_useremail);

            // Set parameter
            $param_useremail = trim($_POST["useremail"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $useremail_err = "This email is already taken.";
                } else {
                    $useremail = trim($_POST["useremail"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 8) {
        $password_err = "Password must have at least 8 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // // Validate confirm password
    // if (empty(trim($_POST["confirm_password"]))) {
    //     $confirm_password_err = "Please confirm password.";
    // } else {
    //     $confirm_password = trim($_POST["confirm_password"]);
    //     if ($password != $confirm_password) {
    //         $confirm_password_err = "Password did not match.";
    //     }
    // }

    // Check input errors before inserting into database
    if (empty($useremail_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (useremail, username, password, token) VALUES (?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_useremail, $param_username, $param_password, $param_token);

            // Set parameters
            $param_useremail = $useremail;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_token = bin2hex(random_bytes(50)); // generate unique token

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to index page
                header("location: index.php");
                exit;
            } else {
                echo "Something went wrong. Please try again later.";
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
  <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Register')); ?>

  <?php include 'layouts/head-css.php'; ?>

  </head>

  <body class="bg-register">


    <!--authentication-->

     <div class="container-fluid my-5">
        <div class="row">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
            <div class="card rounded-4">
              <div class="card-body p-5">
                  <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                  <h4 class="fw-bold">Get Started Now</h4>
                  <p class="mb-0">Enter your credentials to create your account</p>

                  <div class="form-body my-4" >
										<form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
											<div class="col-12 <?= !empty($username_err) ? 'has-error' : ''; ?>">
												<label for="inputUsername" class="form-label">Username</label>
												<input type="text" class="form-control" name="username" placeholder="Enter Username">
                        <span class="text-danger"><?=$username_err?></span>
											</div>
											<div class="col-12 <?= !empty($useremail_err) ? 'has-error' : ''; ?>">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control" name="useremail" placeholder="Enter Email">
                        <span class="text-danger"><?=$useremail_err?></span>
											</div>
											<div class="col-12 <?= !empty($password_err) ? 'has-error' : ''; ?>">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="Enter Password">
                          
                           <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
												</div>
                        <span class="text-danger"><?=$password_err?></span>
											</div>
											
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Register</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-start">
													<p class="mb-0">Already have an account? <a href="auth-basic-login.php">Sign in here</a></p>
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
      
    <!--authentication-->

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