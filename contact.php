<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><? echo "$yourdomain" ;?>web hosting</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <? 
    $yourdomain = $_SERVER['HTTP_HOST'];
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
    ?>

 <? include ("menu.php"); ?>

<div id="page">
  <div id="content">
    <div id="welcome">

  <h2>Contact Us</h2>
  <p>If you have any problems or have the need to contact us to ask a question,<br />
      you can use the <span>integrated support system</span> in your control panel to create a support ticket.<br />
   
      We will reply to your question as soon as possible.
<br><br />
      For technical support please look at the <a href="http://byet.net/forumdisplay.php?f=28">Knowledge Base</a>
</div>
  </div>
  <!-- end #content -->
  <div id="sidebar">
    <div id="links">
      <ul>

    <li class="first"><a href="index.php"><b>H</b>omepage</a></li>
    <li><a href="signup.php" accesskey="A"><b>S</b>ignup</a></li>
    <li><a href="news.php" accesskey="P"><b>P</b>roduct new</a></li>
    <li><a href="contact.php" accesskey="U">Contact <b>U</b>s</a></li>
    <li><a href="https://ifastnet.com/portal/terms.php" accesskey="S"><b>T</b>erms of service</a></li>
      </ul>
    </div>
    <div>
      <h2>Instant activation</h2>
      <blockquote>
        <p>Free hosting accounts are activated instantly, no need to wait for manual approval, you can start building your pages immediately!  A powerful Vista Panel control panel is provided to manage your website, packed with hundreds of great features including Email, FTP add-on domain and much more..</p>
      </blockquote>
    </div>
  </div>
  <!-- end #sidebar -->
  <div style="clear: both; height: 1px;"></div>
</div>
<!-- end #page -->
 <? include ("footer.php"); ?>

</body>
</html>