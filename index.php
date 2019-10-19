<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no">
  <title>ようこそ角研へ</title>
  <link rel="shortcut icon" href="img/sumi.ico">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/image.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
  <div id="loader-bg">
    <div id="loader">
      <img src="img/sumi.gif" width="80" height="80">
      <h1>これは角研です。</h1>
    </div>
  </div>
  <?php
  require_once ("header.php");
  ?>
  <div class="container">
    <div id="wrap">
      <section id="top">
        <?php
        require_once ("top.php");
        ?>
      </section>
      <section id="member">
        <?php
        require_once ("member.php");
        ?>
      </section>
      <section id="space">
        <?php
        require_once ("space.php");
        ?>
      </section>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- <script src="js/jquery.min.js"> -->

  </script>
  <script src="js/index.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
