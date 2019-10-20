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
  <?php
  require_once ("header.php");
  ?>
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
    <section id="other">
      <?php
      require_once ("course.php");
      require_once ("event.php");
      ?>
    </section>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</script>
<script src="js/index.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
var if_ctrl = 0;
var if_r = 0;
function is_ctrl(pressKey){
  if(pressKey==17){ //ctrl
    return 1;
  } else if (navigator.userAgent.match(/macintosh/i)){
    if (pressKey == 224 && navigator.userAgent.match(/firefox/i)){
      return 1;
    } else if (pressKey == 91 || pressKey == 93){
      return 1;
    }
  }
  return 0;
}
function disable_reload(e){
  if(navigator.userAgent.match(/msie/i) && window.event){
    window.event.returnValue=false;
    window.event.keyCode=0
  } else
  if (navigator.userAgent.match(/macintosh/i) || e.preventDefault){
    e.preventDefault();
    e.stopPropagation();
  }
  return false;
}
function catchkeydown(e){
  var pressKey;
  if (eval(e)){
    pressKey=e.keyCode;
  } else {
    pressKey=event.keyCode;
  }
  if(is_ctrl(pressKey)==1){ //ctrl
    if_ctrl=1;
    if(if_r==1){return disable_reload(e);}
  }
  if(pressKey==82){ //r
    if_r=1;
    if(if_ctrl==1){return disable_reload(e);}
  }
  if(pressKey==116){ //f5
    if (navigator.userAgent.match(/safari/i)
    && !navigator.userAgent.match(/chrome/i)){
      window.location="https://sumiweb.herokuapp.com/";
      return true;
    } else {
      return disable_reload(e);
    }
  }
}
function catchkeyup(e){
  var pressKey;
  if (eval(e)){
    pressKey=e.keyCode;
  } else {
    pressKey=event.keyCode;
  }
  if(is_ctrl(pressKey)==1){ //ctrl
    if_ctrl=0;
    if(if_r==1){return disable_reload(e);}
  }
  if(pressKey==82){ //r
    if_r=0;
    if(if_ctrl==1){return disable_reload(e);}
  }
  if(pressKey==116){ //f5
    if (navigator.userAgent.match(/safari/i)
    && !navigator.userAgent.match(/chrome/i)){
      window.location="https://sumiweb.herokuapp.com/";
    } else {
      return disable_reload(e);
    }
  }
}
document.onkeydown = catchkeydown;
document.onkeyup = catchkeyup;
</script>
</body>
</html>
