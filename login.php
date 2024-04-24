<?php
  include("link.php");
  include("form.php");
  include("addPost.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login Page</title>
  </head>
  <body>
    <div class="main-form">
      <div class="form-box"> 
        <div class="top-button">
          <button type="button" class="toggle-button">Login</button>
        </div>
        <form method="POST" name = "form" action="form.php" id="input" class="input">
          <input
            type="text"
            class="input-box"
            name="username"
            placeholder="User ID..."
            required
          />  
          <input
            type="text"
            class="input-box"
            name="password"
            placeholder="Enter password"
            required
          />
          <input type="submit" class="submit-button" name="button" value="Login"></button>
        </form>
      </div>

    </div>
  </body>
</html>
