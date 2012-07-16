<?php header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>404 Not Found!!!11</title>
  <link rel="stylesheet" type="text/css" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney/stickney.css" />
  <link rel="Shortcut Icon" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney/asaph.ico" />
  <script type="text/javascript" src="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney/whitebox.js"></script>
</head>
<body>

<div id="title">
  <em><a href="<?php echo ASAPH_LINK_PREFIX ?>about">about</a></em>
  <h1><a href="<?php echo Asaph_Config::$absolutePath; ?>"><?php echo htmlspecialchars( Asaph_Config::$title ); ?></a></h1>
</div>

<br>

<h2><?php include( ASAPH_PATH.'templates/random404.html.php' );?></h2>

</body>
</html>
