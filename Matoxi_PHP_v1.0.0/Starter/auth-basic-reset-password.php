<?php
// Include config file
require_once "layouts/config.php";

// Define variables and initialize with empty values
$useremail = $username =  $password = $confirm_password = "";
$useremail_err = $username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate useremail
    if (empty(trim($_POST["useremail"]))) {
        $useremail_err = "Please enter useremail.";
    } elseif (!filter_var($_POST["useremail"], FILTER_VALIDATE_EMAIL)) {
        $useremail_err = "Invalid email format";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE useremail = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_useremail);

            // Set parameters
            $param_useremail = trim($_POST["useremail"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    
                    $useremail = trim($_POST["useremail"]);
                } else {
                    $useremail_err = "Useremail something went wrong.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
            
        }
    }

    

    // Validate password
    $password = trim($_POST["password"]);
    if (empty($password)) {
        $password_err = "Please enter a password.";
    } elseif (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/', $password)) {
        $password_err = "Password must contain at least one digit, one lowercase letter, and one uppercase letter.";
    } else {
        $password = trim($_POST["password"]);
    }


    //Validate confirm password

    $password = trim($_POST["password"]);
    if (empty($password)) {
        $confirm_password_err = "Please enter a Confirm password.";
    } elseif (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/', $password)) {
        $confirm_password_err = "Password must contain at least one digit, one lowercase letter, and one uppercase letter.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }
    

    // Check input errors before inserting in database
    if (empty($useremail_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        //$sql = "INSERT INTO user (useremail, username, password ,token) VALUES (?, ?, ?, ?)";
        $sql ="UPDATE users SET password = ? WHERE useremail = '$useremail'";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s",  $param_password, );

            // Set parameters
            $param_useremail = $useremail;
            //$param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            //$param_token = bin2hex(random_bytes(50));
            

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                
                // Redirect to index page
                header("location: auth-basic-login.php");
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
  <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Reset Password')); ?>

  <?php include 'layouts/head-css.php'; ?>

  </head>

  <body class="bg-reset-password">

    <!--authentication-->

     <div class="container my-5">
        <div class="row">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
            <div class="card rounded-4">
              <div class="card-body p-5">
                  <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                  <h4 class="fw-bold">Genrate New Password</h4>
                  <p class="mb-0">We received your reset password request. Please enter your new password!</p>
                  <div class="form-body mt-4">
										<form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="col-12 <?= !empty($useremail_err) ? 'has-error' : ''; ?>">
												<label class="form-label" for="NewPassword">UserEmail</label>
												<input type="text" class="form-control" name="useremail" id="NewPassword" placeholder="Enter Email">
                        <span class="text-danger"><?=$useremail_err?></span>
											</div>
											<div class="col-12 <?= !empty($password_err) ? 'has-error' : ''; ?>">
												<label class="form-label" for="NewPassword">New Password</label>
												<input type="text" class="form-control" name="password" id="NewPassword" placeholder="Enter new password">
                        <span class="text-danger"><?=$password_err?></span>
											</div>
                      <div class="col-12 <?= !empty($confirm_password_err) ? 'has-error' : ''; ?>">
                        <label class="form-label" for="ConfirmPassword">Confirm Password</label>
                        <input type="text" class="form-control" name="confirm_password" id="ConfirmPassword" placeholder="Confirm password">
                        <span class="text-danger"><?=$confirm_password_err?></span>
                      </div>
											<div class="col-12">
												<div class="d-grid gap-2">
                          <button type="submit" class="btn btn-primary">Change Password</button>
                           <a href="auth-basic-login.php" class="btn btn-light">Back to Login</a>
                        </div>
											</div>
										</form>
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