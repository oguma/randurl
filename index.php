<?php
$urls = Array(
"https://www.google.com",
"https://www.amazon.com",
"https://www.facebook.com",
"https://www.apple.com"
);
$url = $urls[array_rand($urls)];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Refresh" content="0; url='<?php echo $url; ?>'"/>
</head>
<body></body>
</html>
