<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>REGISTER</title>
    <?php
    
        require_once 'db_connect.php';
        if(isset($_REQUEST['email'])){
          $email    = stripslashes($_REQUEST['email']);
          $email    = mysqli_real_escape_string($con, $email);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con, $password);

        // $email = filter_input(INPUT_POST,'email');
        // $pass = filter_input(INPUT_POST,'password');
        // $action = filter_input(INPUT_POST,'action');    
        // if(!empty($action) && $action == 'register')
        // {
            $query = "insert into users(email,password) values('$email','".md5($password)."')";   
            $result = mysqli_query($con, $query);
            if ($result) {
              echo "<div class='form-control'>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
          } else {
              echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                    </div>";
          }
      } else { 
        
        
    ?>
  </head>
  <body>
    <form action="" method="post">
    <div class="container">
        <h1 >Register</h1>
        <p>Please fill in this form to create an account.</p>
        <div class="col-md-3 mt-1 d-flex  flex-row">
        <label for="email"  class="col-md-3 " ><b>Email</b></label>
        <input class="form-control" type="text" placeholder="Enter Email" name="email" id="email" required>
        </div>
        
        <div class="col-md-3 mt-1 d-flex  flex-row">
        <label for="psw" class="col-md-3"><b>Password</b></label>
        <input type="text" class="form-control"  placeholder="Enter Password" name="password" id="psw" required>
        </div>
        <input type="hidden" name="action" value="register">
        <button class="btn-primary mt-2" name="submit" type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
    </form>
    

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <?php
      
      }
    ?>
  </body>
</html>