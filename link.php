<?php
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https' : 'http';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';

$host = preg_replace('/[^A-Za-z0-9.\-:\[\]]/', '', $host);

$path = dirname($_SERVER['SCRIPT_NAME']);
if ($path == '/' || $path == '\\' || $path == '.') {
    $path = '';
}

$base = $scheme . '://' . $host . $path;

$linkcode = '<a href="' . $base . '/">' . "\r\n";
$linkcode .= '<img src="' . $base . '/img/ippiyo.gif" width="88" height="31" border="0" alt="[IPPiyo]">' . "\r\n";
$linkcode .= '</a>';
?>

<html>
<head>
<title>Link to IPPiyo</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#3300CC" vlink="#0000CC">

<p>
<font size="2" face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif">
Add IPPiyo on your site!<br><br>

<a href="<?php echo htmlspecialchars($base, ENT_QUOTES); ?>/">
<img src="img/ippiyo.gif" width="88" height="31" border="0" alt="[IPPiyo]">
</a>
</font>
</p>

<p>
<font size="2" face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif">
Copy the following HTML code and place it on your site.<br>

<textarea name="textarea" cols="50" rows="5" readonly><?php echo htmlspecialchars($linkcode, ENT_QUOTES); ?></textarea>

<br><br>

<a href="/">Back Home</a>
</font>
</p>

<p>&nbsp;</p>

</body>
</html>
