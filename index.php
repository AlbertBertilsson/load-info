<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>IC test</title>
</head>

<body>

<div>
* mammut.jpg 7.98KB 8176 bytes<br>
* alphatest.png 25,9KB 26529 bytes<br>
* room.jpg 483KB 494782 bytes<br>

<table id="cookie">
</table>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . '<br>';

if (preg_match("/image\/webp/i", $_SERVER['HTTP_ACCEPT'])) {
    echo "<h2>WEBP!</h2>";
}

if (preg_match("/ \((iPhone|iPad); CPU (iPhone|iPad|) ?OS (8|9|\d\d)_/", $_SERVER['HTTP_USER_AGENT'])) {
    echo "<h2>J2!</h2>";
}
?>
</div>

<div>
<img src="file.php?name=m&file=mammut.jpg&type=image/jpeg">
<img src="images/mammut_s.jpg">
<img src="file.php?name=m2&file=alphatest.png&type=image/png">
<img src="images/alphatest_s.png">
<img src="images/room_s.jpg">
<img src="file.php?name=m3&file=room.jpg&type=image/jpeg">
</div>

<br><br>
<h1>Grey background, force webp (test browser compatibility), Android &amp; Chrome</h1>
<div style="background-color: #888">
<img src="images/mammut.webp">
<img src="images/mammut_s.webp">
<img src="images/alphatest.webp">
<img src="images/alphatest_s.webp">
<img src="images/room_s.webp">
<img src="images/room.webp">
</div>

<br><br>
<h1>Grey background, force JPEG2000 (test browser compatibility), Safari (OS X &amp; iOS)</h1>
<div style="background-color: #888">
<img src="images/mammut.jp2">
<img src="images/mammut_s.jp2">
<img src="images/alphatest.jp2">
<img src="images/alphatest_s.jp2">
<img src="images/room_s.jp2">
<img src="images/room.jp2">
</div>

<br><br>
<h1>Grey background, force JPEG XR (test browser compatibility), IE 9 &amp; 11 &amp; Edge</h1>
<div style="background-color: #888">
<img src="images/mammut.jxr">
<img src="images/mammut_s.jxr">
<img src="images/alphatest.jxr">
<img src="images/alphatest_s.jxr">
<img src="images/room_s.jxr">
<img src="images/room.jxr">
</div>


<script>
  window.onload = function displayCookies() {
    res = '';
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length ; i++) {
      var c = decodeURIComponent(ca[i]);
      var pa = c.split(/=|:/)
      res += '<tr>';
      for (var j = 0 ; j < pa.length ; j++) {
        res += '<td>' + pa[j].trim() + '</td>';
      }
      res += '</tr>';
    }
    document.getElementById('cookie').innerHTML = res;
  }
</script>
</body></html>
