<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <title>Play</title>
    <link rel="stylesheet" type="text/css" href="../lib/video-js.css" />
    <script src="../lib/video.js"></script>
    <script src="index.js"></script>
  </head>
  <body style="background-color:white">
    <p>
      <?php
        if(!isset($_GET["videoName"])){
          print($_GET["videoName"]);
        }else {
          print("読み込めませんでした");
        }
      ?>
    </p>
    <video id="video1" class="video-js vjs-default-skin vjs-big-play-centered"></video>
  </body>
</html>