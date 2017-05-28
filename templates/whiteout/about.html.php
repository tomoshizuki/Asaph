<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo htmlspecialchars( Asaph_Config::$title ); ?></title>
  <link rel="stylesheet" href="<?php echo Asaph_Config::$absolutePath; ?>templates/whiteout/whiteout.css">
  <link rel="icon" href="<?php echo Asaph_Config::$absolutePath; ?>templates/whiteout/asaph.ico">
  <script async src="<?php echo Asaph_Config::$absolutePath; ?>templates/whiteout/whitebox.js"></script>
</head>
<body>

<div id="title">
  <em><a href="<?php echo ASAPH_LINK_PREFIX ?>about">about</a></em>
  <h1><a href="<?php echo Asaph_Config::$absolutePath; ?>"><?php echo htmlspecialchars( Asaph_Config::$title ); ?></a></h1>
</div>

<p>
  <?php /* Write whatever you want here, but please leave a link to phoboslab/asaph somewhere! */ ?>
  This microblog is powered by <a href="http://www.phoboslab.org/projects/asaph">Asaph</a>.
</p>

</body>
</html>
