<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post: Asaph</title>
  <link rel="stylesheet" type="text/css" href="<?php echo ASAPH_POST_CSS; ?>" />
</head>
<body class="Asaph_Post">
  <h1 id="Asaph_PostSuccess">
    Posted!
  </h1>
  <script type="text/javascript">
    if( parent ) {
      parent.location = "<?php echo addslashes($_POST['xhrLocation']) ?>#Asaph_Success";
    }
  </script>
</body>
</html>
