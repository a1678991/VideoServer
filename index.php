<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <title>Play</title>
  </head>
  <body style="background-color:white">
    <p><a href="./01/play.php">サンプルビデオ</a></p>
    <p><a href="./02/vod.php">VOD sample</a></p>
    <?php
      foreach(glob('video/{*.mp4}',GLOB_BRACE) as $file){
        if(is_file($file)){
            //print(htmlspecialchars($file)."<br>");
    ?>
            <a href="./01/play.php?videoPass=<?php print($file) ?>&videoName=<?php print((substr($file, 6, -4))); ?>"><?php print(substr($file,6)); ?></a>
    <?php
        }
      }
    ?>
    <br>
  </body>
</html>