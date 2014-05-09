<!DOCTYPE html>

<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Per Møldrup-Dalum">
    <meta name="generator" content="Vim/7.4">
    <meta name="robots" content="index,follow">

   <title><?php echo $this->title;?></title>

<?php
foreach ($this->stylesheets as $stylesheet) 
{
    echo "   <link rel=\"stylesheet\" href=\"${stylesheet}\">" .PHP_EOL;
}
?>
   </head>
      <body>

      <h2 class="header"><a href="/<?php echo $this->home;?>"><?php echo $this->header;?></a></h2>

    <div class="navbar">
    <a href="/<?php echo $this->home?>">Home</a> 
        <span class="navbar-separator">|</span>
        <a href="/<?php echo $this->home?>/articles">Articles</a>
        <span class="navbar-separator">|</span>
        <a href="/<?php echo $this->home?>/pages/books.php">Reading</a>
        <span class="navbar-separator">|</span>
        <a href="/<?php echo $this->home?>/colophon.php">Colophon</a>
   </div>
   <div class="content">

