<?php
  include "addPost.php"
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/blog.css" />
    <title>Blog</title>
  </head>
  <body>
    <div class="main-form">
      <div class="form-box">
        <div class="top-button">
          <div id="button"></div>
          <button type="button" class="toggle-button">Add Blog</button>
        </div>

        <form method="POST" id="input" class="input" action="">
          <input type="text" name = "title" id="preventtitle" class="input-box" placeholder="Title"/>
          <textarea
            type="text"
            class="info-box"
            id="preventtextarea"
            name="content" 
            rows="6"
            placeholder="Your message"
          ></textarea>
          <div class="button-end">
            <input type="submit" id="yes" name ="post" class="submit-button" value="Add post"></input>
            <button type="reset" class="submit-button">Clear</button>
          </div>
        </form>

      </div>
    </div> 

    <script src="clear.js"></script> <!--links my php and js file-->
    <script src="default.js"></script> <!--links my php and js file-->
  </body>
</html>
 