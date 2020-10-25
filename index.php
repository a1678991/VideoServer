<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <title>いんでっくす</title>
    <link rel="stylesheet" type="text/css" href="./CSS/index.css">
  </head>
  <body style="background-color:white">
    <header>
      <h1 class="header">
          <a class="header" href="/">ue8d's Videos</a>
      </h1 class="header">
      <nav class="pc-nav">
          <ul class="header">
              <li class="header"><a class="header" href="#">ABOUT</a></li>
              <li class="header"><a class="header" href="#">CONTACT</a></li>
          </ul>
      </nav>
    </header>

    <div class = "main">
      <p>サンプルムービー</p>
      <?php
        foreach(glob('video/{*.mp4}',GLOB_BRACE) as $file){
          if(is_file($file)){
              //print(htmlspecialchars($file)."<br>");
      ?>
              <a href="./01/play.php?videoPass=<?php print($file) ?>&videoName=<?php print((substr($file, 6, -4))); ?>"><?php print(substr($file,6)); ?></a><br>
      <?php
          }
        }
      ?>
      <br>
      <p>VOD一覧</p>
      <?php
        foreach(glob('workspace/{*.m3u8}',GLOB_BRACE) as $file){
          if(is_file($file)){
            //print(htmlspecialchars($file)."<br>");
      ?>
            <a href="./02/vod.php?videoPass=<?php print($file) ?>&videoName=<?php print((substr($file, 10, -5))); ?>"><?php print(substr($file,10,-5)); ?></a>
      <?php
          }
        }
      ?>
    </div>

    <footer>
      <!-- フッター -->
    </footer>
  </body>
</html>