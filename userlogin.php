<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.html");
    exit;
}
 
// Include config file
require_once "includes/connection.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: home.html");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
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

              <h2 class="fw-bold mb-1 text-uppercase">Login</h2>
              <p class="text-white-40 mb-3">Please enter your login and password!</p>

              <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-outline form-white mb-2">
                <input type="text" id="typeEmailX" class="form-control form-control-lg <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" name="username"/>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <label class="form-label text-left" for="typeEmailX">Username</label>
              </div>

              <div class="form-outline form-white mb-3">
                <input type="password" id="typePasswordX" class="form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name ="password"/>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-4 pb-lg-2"><a class="text-white-40" href="#!">Forgot password?</a></p>
                <hr>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              <br>
              <br>
              <div>
                <p class="mb-0">Don't have an acount? <a href="userregister.php" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>
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