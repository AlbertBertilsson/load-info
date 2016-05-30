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
echo $_SERVER['HTTP_USER_AGENT'];
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
<img src="./IC test_files/mammut(4).jpg">
<img src="./IC test_files/mammut(5).jpg">
<img src="./IC test_files/alphatest(4).png">
<img src="./IC test_files/alphatest(5).png">
<img src="./IC test_files/room(5).jpg">
<img src="./IC test_files/room(4).jpg">
</div>

<br><br>
<h1>Grey background, force JPEG XR (test browser compatibility), IE 9 &amp; 11 &amp; Edge</h1>
<div style="background-color: #888">
<img src="./IC test_files/mammut(6).jxr">
<img src="./IC test_files/mammut(7).jpg">
<img src="./IC test_files/alphatest(6).png">
<img src="./IC test_files/alphatest(7).png">
<img src="./IC test_files/room(7).jpg">
<img src="./IC test_files/room(6).jpg">
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
