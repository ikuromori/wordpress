<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>チーズアカデミー</title>
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
 <!--ヘッダー-->
 <section id="header">
   <img src="https://ikuromori.com/wp-content/uploads/2021/06/header_logo.png" alt="" class="header_logo">
   <div class="hamburger-menu">
    <input type="checkbox" id="menu-btn-check">
    <label for="menu-btn-check" class="menu-btn"><span></span></label>
   </div>
   <div class="header-tittle">
       <ul>
         <li><a href="#about"> ABOUT</a> </li>
         <li><a href="#course"> COURSE</a> </li>
         <li><a href="#news"> NEWS</a></li>
         <li><a href="#access">ACCESS</a></li>
       </ul>
   </div> 
</section>