<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <title>Play</title>
  </head>
  <body style="background-color:white">
    <p><a href="./01/play.php">サンプルビデオ</a></p>
    <?php
      foreach(glob('video/{*.mp4}',GLOB_BRACE) as $file){
        if(is_file($file)){
            //print(htmlspecialchars($file)."<br>");
    ?>
            <a href="./01/play.php?videoPass=<?php print($file) ?>"><?php echo $file ?></a>
    <?php
        }
      }
    ?>
  </body>
</html>