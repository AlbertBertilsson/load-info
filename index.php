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
</div>

<div>
<img src="file.php?name=m&file=mammut.jpg&type=image/jpeg">
<img src="./IC test_files/mammut(1).jpg">
<img src="./IC test_files/alphatest.png">
<img src="./IC test_files/alphatest(1).png">
<img src="./IC test_files/room.jpg">
<img src="./IC test_files/room(1).jpg">
</div>

<br><br>
<h1>Black background (test PNG transparency)</h1>
<div style="background-color: #000">
<img src="./IC test_files/mammut.jpg">
<img src="./IC test_files/mammut(1).jpg">
<img src="./IC test_files/alphatest.png">
<img src="./IC test_files/alphatest(1).png">
<img src="./IC test_files/room.jpg">
<img src="./IC test_files/room(1).jpg">
</div>

<br><br>
<h1>Grey background, force webp (test browser compatibility), Android &amp; Chrome</h1>
<div style="background-color: #888">
<img src="./IC test_files/mammut(2).jpg">
<img src="./IC test_files/mammut(3).jpg">
<img src="./IC test_files/alphatest(2).png">
<img src="./IC test_files/alphatest(3).png">
<img src="./IC test_files/room(2).jpg">
<img src="./IC test_files/room(3).jpg">
</div>

<br><br>
<h1>Grey background, force JPEG2000 (test browser compatibility), Safari (OS X &amp; iOS)</h1>
<div style="background-color: #888">
<img src="./IC test_files/mammut(4).jpg">
<img src="./IC test_files/mammut(5).jpg">
<img src="./IC test_files/alphatest(4).png">
<img src="./IC test_files/alphatest(5).png">
<img src="./IC test_files/room(4).jpg">
<img src="./IC test_files/room(5).jpg">
</div>

<br><br>
<h1>Grey background, force JPEG XR (test browser compatibility), IE 9 &amp; 11 &amp; Edge</h1>
<div style="background-color: #888">
<img src="./IC test_files/mammut(6).jxr">
<img src="./IC test_files/mammut(7).jpg">
<img src="./IC test_files/alphatest(6).png">
<img src="./IC test_files/alphatest(7).png">
<img src="./IC test_files/room(6).jpg">
<img src="./IC test_files/room(7).jpg">
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
        res += '<td>' + pa[j] + '</td>';
      }
      res += '</tr>';
    }
    document.getElementById('cookie').innerHTML = res;
  }
</script>
</body></html>
