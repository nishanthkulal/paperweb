<?php
// Include config file
require_once "includes/connection.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: userlogin.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($db);
}
?>
 



<html>
    <title>login page</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <body>
 <section  class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
      

        <div class="card bg-dark text-white col-md-7 col-lg-5 col-xl-5 offset-xl-1 " style="border-radius: 1rem;">
          <div class="card-body p-6 text-center">

            <div class="mb-md-4 mt-md-3 pb-2">

              <h2 class="fw-bold mb-1 text-uppercase">Register</h2>
              <p class="text-white-40 mb-3">Please enter your Email and Password!</p>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-outline form-white mb-2">
                <input type="text" id="typeusername" class="form-control form-control-lg  <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"  value="<?php echo $username; ?>" name="username"/>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <label class="form-label text-left" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-3">
                <input type="password" id="password" class="form-control form-control-lg  <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name="password"  value="<?php echo $password; ?>"/>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <div class="form-outline form-white mb-3">
                <input type="password" id="typePasswordX" class="form-control form-control-lg <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" name="confirm_password" value="<?php echo $confirm_password; ?>" />
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                <label class="form-label" for="typePasswordX">Confrom Password</label>
              </div>
                <hr>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
              <hr>
              <p class="mb-0">Already have an account <a href="userlogin.php" class="text-white-50 fw-bold">Sign In</a>
            </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>

      </div>
    </div>
  </section>

</body> 
  </html>