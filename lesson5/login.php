<?php session_start();
require_once __DIR__ . '/functions.php';
$errorMessage = '';
if (isset($_POST['login'])){            
  if (!existsUser($_POST['login'])){
    $errorMessage = 'This login does not exist (';
  } elseif (!сheckPassword($_POST['login'], $_POST['password'])){
    $errorMessage =  'You enter incorrect password (';
  } else {
    $_SESSION['user'] = $_POST['login'];
    makeRecordInLog(getCurrentUser(), 'login');
  }
}
if (isset($_SESSION['user'])){
  header('location: .');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="login-form">        
            <form action="login.php" method="post">
            <h4>Login form</h4>
              <div class="form-field">
                <label for="login">Login</label>
                <input type="text" name="login" id="login">
              </div>
              <div class="form-field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
              </div>
              <div class="form-field submit-field">
                <button type="submit">Login</button>
              </div>
              <div class="form-field error-field">
                <?php echo $errorMessage; ?>
              </div> 
            </form>                  
        </div>
      </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>