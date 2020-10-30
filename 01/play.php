<?php $sample = video/sample.mp4 ?>
<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <title>Play</title>
    <link rel="stylesheet" type="text/css" href="../lib/video-js.css" />
    <script type="text/javascript">
      var videoPass = "<?php echo $_GET['videoPass']; ?>";
    </script>
    <script src="../lib/video.js"></script>
    <script src="index.js"></script>
  </head>
  <body style="background-color:white">
    <p>
      <?php
        if(isset($_GET["videoName"])){
          print($_GET["videoName"]);
        }else {
          echo "読み込めませんでした";
        }
      ?>
    </p>
    <video id="video1" class="video-js vjs-default-skin vjs-big-play-centered"></video>
    <br>
    <a href="../index.php">トップへ戻る</a>
  </body>
</html>