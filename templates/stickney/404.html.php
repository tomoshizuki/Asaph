<!DOCTYPE html>
<html lang="en">
<head>
  <title>404 Not Found!!!11</title>
  <link rel="stylesheet" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney/stickney.css">
  <link rel="icon" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney/asaph.ico">
  <script async src="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney/whitebox.js"></script>
</head>
<body>

<div id="title">
  <em><a href="<?php echo ASAPH_LINK_PREFIX ?>about">about</a></em>
  <h1><a href="<?php echo Asaph_Config::$absolutePath; ?>"><?php echo htmlspecialchars( Asaph_Config::$title ); ?></a></h1>
</div>

<p></p>

<h2><?php include( ASAPH_PATH.'templates/random404.html.php' );?></h2>

</body>
</html>
