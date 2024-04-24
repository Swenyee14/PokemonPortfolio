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
    <link rel="stylesheet" href="css/viewBlog.css" />
    <title>View Blog</title>
  </head>
  <body>
    <div class="main-form">

      <?php // div is only accessed if there is 'info'
          if(isset($_REQUEST['info'])) {?> 
            <div class="submit-button" role="alert">
              Your post has been recognised
            </div>
      <?php }?>

      <div class="go-home">
            <a href="index.html">Go home</a>
      </div>
    
        <div class="big-box">

            <?php foreach($query as $q){?>
                <div class="">
                    <div class="">
                        <div class="toggle-button">
                            <div class="data">
                              <h1 class=""><?php echo $q['title'];?></h1>
                              <h1 class=""><?php echo $q['date'];?></h1>
                            </div>
                            <p class="input-box"><?php echo $q['content'];?></p>
                        </div>
                    </div>
                </div>
            <?php }?>

        </div> 

    </div>
  </body>
</html>
