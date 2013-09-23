<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>cash4told.com</title>
    <meta name="description" content="cash4told, cash4told.com, told copypasta"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/ico">
    <script type="text/javascript">
        
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-29439846-18']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    
    </script>
    <style type="text/css">
        body{padding:10px 0 0 40px; margin-bottom:40px;}h1{font-size:60px;margin-bottom:0px;}h1, h6{color:#556270; font-family:Arial,Helvetica,sans-serif;}.refresh{color:#28A76A; font-weight: bold;}.pasta{color:#AFBF49; text-decoration:underline;}a{font-weight:bold;text-decoration:none;color:#8398B8;}a:hover{color:#F9023C;}#copypasta{display:none;}
    </style>
    <script type="text/javascript">
        function show(div) {
            document.getElementById(div).style.display = 'block';
        }
    </script>
</head>
<body>
    <div id="wrapper">
        <h1><?php $lines = json_decode(file_get_contents("lines.json"), true); echo $lines[array_rand($lines)]; ?></h1>
        <h6><span class="refresh">Refresh for another</span> / <a class="pasta" href="#" onClick="show('copypasta'); return false;">Click here to show copypasta</a> / Submit changes and view the full list via the <a href="https://github.com/citricsquid/cash4told.com/blob/master/lines.json">repository on github.com</a>.</h6>
        <pre id="copypasta"><?php foreach($lines as $line) { echo "[X] " . $line . "<Br/>"; } ?></pre>
    </div>
</body>
</html>