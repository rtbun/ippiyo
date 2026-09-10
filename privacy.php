<?php
$instance = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'this IPPiyo instance';
$instance = htmlspecialchars($instance, ENT_QUOTES);

$serverAdmin = isset($_SERVER['SERVER_ADMIN']) ? trim($_SERVER['SERVER_ADMIN']) : '';
$hasAdmin = ($serverAdmin != '' && filter_var($serverAdmin, FILTER_VALIDATE_EMAIL));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>IPPiyo - Privacy Policy</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="Description" content="IPPiyo will display your current IP address.">
<meta name="keywords" content="ip, find your ip address, ipaddress, address, ipconfig, whois, vpn, admin, dns, tcp, portscan, telnet, ping, network, router, openssh, linux, ipv6">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#3300CC" vlink="#0000CC">

<table width="577" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody><tr>
    <td><img src="img/main_03.gif" width="577" height="126" usemap="#Map" border="0"></td>
  </tr>
</tbody></table>

<table width="577" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody><tr>

    <td width="26"><img src="img/26.gif" width="26" height="10"></td>

    <td width="19" valign="top" background="img/7.gif">
      <img src="img/7.gif" width="19" height="430">
    </td>

    <td width="511" valign="top">

      <img src="img/pixel.gif" width="511" height="17" border="0"><br>
      <img src="img/priv.gif" width="511" height="23" border="0">

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          <b>What type of information does IPPiyo collect?</b>
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          IPPiyo itself does not require user accounts, advertising trackers, or
          a visitor database. It reads information supplied with your web request
          in order to display information about your connection.
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          <b>I see my IP address is displayed. Is this somehow logged?</b>
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          IPPiyo obtains your address from the web server and displays it back to
          you. The standard IPPiyo pages do not intentionally save your address
          to their own database.
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          However, the web server, PHP host, reverse proxy, or hosting provider
          running this instance may keep ordinary access or error logs. These logs
          may contain information such as your IP address, the date and time of a
          request, the page requested, your browser User-Agent, HTTP status, and
          referring page.
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          <b>Does IPPiyo use cookies?</b>
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          The standard IPPiyo pages do not require or set cookies.
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          <b>Who operates this web site?</b>
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          IPPiyo is open source and may be hosted by anyone. This copy of IPPiyo
          is being served by <b><?php echo $instance; ?></b>. The webmaster or
          organization operating this instance controls its web server,
          configuration, logs, and log retention.
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          The IPPiyo project itself does not receive the access logs of
          independently hosted IPPiyo instances.
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          <b>Who can I contact with questions or concerns?</b>
        </font>
      </p>

      <p>
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
<?php if ($hasAdmin) { ?>
          Please contact the webmaster of this instance:
          <a href="mailto:<?php echo htmlspecialchars($serverAdmin, ENT_QUOTES); ?>"><?php echo htmlspecialchars($serverAdmin); ?></a>
<?php } else { ?>
          Please contact the webmaster or hosting provider responsible for this
          IPPiyo instance.
<?php } ?>
        </font>
      </p>

      <p align="center">
        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="2">
          <a href="/">Back to My Current IP Address</a>
        </font>
      </p>

    </td>

    <td width="21" valign="top" background="img/9.gif">
      <img src="img/9.gif" width="21" height="430">
    </td>

  </tr>
</tbody></table>

<map name="Map">
  <area shape="rect" coords="373,71,418,94" href="/help.php">
  <area shape="rect" coords="223,71,370,94" href="/portscan.php">
  <area shape="rect" coords="136,72,223,94" href="/">
</map>

<table width="577" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody><tr>
    <td><img src="img/26.gif" width="26" height="10"><img src="img/main_17.gif" width="551" height="17"></td>
  </tr>
</tbody></table>

&nbsp;<table width="577" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody><tr>
    <td><img src="img/26.gif" width="26" height="10"></td>
    <td>
      <div align="center">
        <img src="img/pixel.gif" width="551" height="6"><br>

        <table width="30" border="0" cellspacing="0" cellpadding="3">
          <tbody>
            <tr>
              <td width="88">
                <div align="center">
                  <b>
                    <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="1">
                      Link To Us:
                    </font>
                  </b>
                </div>
              </td>
            </tr>
            <tr>
              <td align="center">
                <a href="/link.php">
                  <img src="img/ippiyo.gif" width="88" height="31" border="0" alt="IPPiyo">
                </a>
              </td>
            </tr>
          </tbody>
        </table>

        <font face="MS PGothic, IPAMonaPGothic, Monapo, Mona, submona, sans-serif" size="1">
          IPPiyo is OPEN ! - <a href="/privacy.php">Privacy Policy</a>
        </font>
      </div>
    </td>
  </tr>
</tbody></table>

</body>
</html>