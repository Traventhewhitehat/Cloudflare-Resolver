<!DOCTYPE html>
<html>
<head>
  <title>Cloudflare resolver</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="faviico.ico">
</head>
<body>
  <div id="menu4">
  <div id="menu3">
  <div id="menu2">
  <div id="menu1">
  </div>
  <div id="animated-example" class="animated bounceInDown">
    <ul>
      <center><img src= "CloudFlare1.png" alt="Que QUERES?" width="412" height="188"></center>
    </ul>
    <form method="post" onsubmit="validaForm(); return false;" class="form">
    <p class="name">
      <center><label for="name">Please put your site to resolve:</label>
        <br />
      <input type="text" size= "30" maxlength="30" name="cloud" placeholder="yourhost.com">
    </p>
    <p class="submit">
      <br />
      <br />
     <input type="submit" name="Enviar" value="Revolve!"></center>
     <?php
       if(isset($_POST['Enviar']))
       {
           insert();
       }
       function insert()
       {
         $de = htmlspecialchars($_POST['cloud']);
         $www1 = gethostbyname($de);
         echo "<br />";
         echo "<br />";
         echo "<center>" . "<h1>" . $de . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $www1 . "</h1>" . "</center>";
         echo "<br />";
         $ftp = "ftp." . $de;
         $ftp1 = gethostbyname($ftp);
         echo "<center>" . "<h1>" . $ftp . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $ftp1 . "</h1>" . "</center>";
         echo "<br />";
         $mail = "mail." . $de;
         $mail1 = gethostbyname($mail);
         echo "<center>" . "<h1>" . $mail . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $mail1 . "</h1>" . "</center>";
         echo "<br />";
         $direct = "direct." . $de;
         $direct1 = gethostbyname($direct);
         echo "<center>" . "<h1>" . $direct . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $direct1 . "</h1>" . "</center>";
         echo "<br />";
         $directconnect = "direct-connect." . $de;
         $directconnect1 = gethostbyname($directconnect);
         echo  "<center>" . "<h1>" . $directconnect . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $directconnect1 . "</h1>" . "</center>";
         echo "<br />";
         $cpanel = "cpanel." . $de;
         $cpanel1 = gethostbyname($cpanel);
         echo "<center>" . "<h1>" . $cpanel . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $cpanel1 . "</h1>" . "</center>";
         echo "<br />";
         $forum = "forum." . $de;
         $forum1 = gethostbyname($forum);
         echo "<center>" . "<h1>" . $forum . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $forum1 . "</h1>" . "</center>";
         echo "<br />";
         $blog = "blog." . $de;
         $blog1 = gethostbyname($blog);
         echo "<center>" . "<h1>" . $blog . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $blog1 . "</h1>" . "</center>";
         echo "<br />";
         $m = "m." . $de;
         $m1 = gethostbyname($m);
         echo "<center>" . "<h1>" . $m . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $m1 . "</h1>" . "</center>";
         echo "<br />";
         $dev = "dev." . $de;
         $dev1 = gethostbyname($dev);
         echo "<center>" . "<h1>" . $dev . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dev1 . "</h1>" . "</center>";
         echo "<br />";
         $webmail = "webmail." . $de;
         $webmail1 = gethostbyname($webmail);
         echo "<center>" . "<h1>" . $webmail . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $webmail1 . "</h1>" . "</center>";
         echo "<br />";
         $record = "record." . $de;
         $record1 = gethostbyname($record);
         echo "<center>" . "<h1>" . $record . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $record1 . "</h1>" . "</center>";
         echo "<br />";
         $ssl = "ssl." . $de;
         $ssl1 = gethostbyname($ssl);
         echo "<center>" . "<h1>" . $ssl . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $ssl1 . "</h1>" . "</center>";
         echo "<br />";
         $dns = "dns." . $de;
         $dns1 = gethostbyname($dns);
         echo "<center>" . "<h1>" . $dns . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dns1 . "</h1>" . "</center>";
         echo "<br />";
         $help = "help." . $de;
         $help1 = gethostbyname($help);
         echo "<center>" . "<h1>" . $help . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $help1 . "</h1>" . "</center>";
		 echo "<br />";
		 echo "<br />";
		 echo "<br />";
       }
       ?>
    </p>
  </div>
</body>
</html>
