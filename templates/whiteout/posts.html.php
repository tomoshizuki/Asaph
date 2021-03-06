<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo htmlspecialchars( Asaph_Config::$title ); ?></title>
  <link rel="stylesheet" href="<?php echo Asaph_Config::$absolutePath; ?>templates/whiteout/whiteout.css">
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo ASAPH_LINK_PREFIX; ?>feed">
  <link rel="icon" href="<?php echo Asaph_Config::$absolutePath; ?>templates/whiteout/asaph.ico">
  <script async src="<?php echo Asaph_Config::$absolutePath; ?>templates/whiteout/whitebox.js"></script>
</head>
<body>

<div id="title">
  <em><a href="<?php echo ASAPH_LINK_PREFIX; ?>about">about</a></em>
  <h1><a href="<?php echo Asaph_Config::$absolutePath; ?>"><?php echo htmlspecialchars( Asaph_Config::$title ); ?></a></h1>
</div>

<?php foreach( $posts as $p ) { ?>
  <div class="post">
    <?php if( $p['image'] ) { ?>
      <a href="<?php echo $p['image']; ?>" rel="alternate" title="<?php echo $p['title']; ?>">
        <img src="<?php echo $p['thumb']; ?>" height="<?php echo Asaph_Config::$images['thumbHeight'] ?>" width="<?php echo Asaph_Config::$images['thumbWidth'] ?>" alt="<?php echo $p['title']; ?>"/>
      </a>
    <?php } else { ?>
      <p>
        <a href="<?php echo $p['source']; ?>"><?php echo nl2br($p['title']); ?></a>
      </p>
    <?php } ?>
    <div class="postInfo">
      via: <a href="<?php echo $p['source']; ?>"><?php echo $p['sourceDomain']; ?></a>
    </div>
  </div>
<?php } ?>
<div class="clear"></div>

<div id="pages">
  <div class="pageInfo">
    page <?php echo $pages['current']; ?> of <?php echo $pages['total']; ?>
  </div>

  <div class="pageLinks">
    <?php if( $pages['prev'] ) { ?>
      <a href="<?php echo ASAPH_LINK_PREFIX.'page/'.$pages['prev']?>">&laquo; prev</a>
    <?php } else { ?>
      &laquo; prev
    <?php } ?>
    /
    <?php if( $pages['next'] ) { ?>
      <a href="<?php echo ASAPH_LINK_PREFIX.'page/'.$pages['next']?>">next &raquo;</a>
    <?php } else { ?>
      next &raquo;
    <?php } ?>
  </div>
  <div class="clear"></div>
</div>

</body>
</html>
