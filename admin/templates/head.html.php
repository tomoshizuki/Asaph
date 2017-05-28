<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin: Asaph</title>
  <link rel="stylesheet" href="<?php echo Asaph_Config::$absolutePath; ?>admin/templates/admin.css">
  <link rel="icon" href="<?php echo Asaph_Config::$absolutePath; ?>admin/templates/asaph.ico">
</head>
<body>


<div id="menu">
  <h1>Asaph</h1>
  <a href="?posts">Posts</a>
  <a href="?users">Users</a>


  <a class="logout" href="?logout">Logout</a>

  Bookmarklet:
  <a class="bookmarklet" title="Post Bookmarklet" href="javascript:void((function(){var%20e=document.createElement('script');e.type='text/javascript';e.src='<?php echo ASAPH_POST_JS; ?>';document.body.appendChild(e)})());">Asaph</a>
</div>

<div id="content">
