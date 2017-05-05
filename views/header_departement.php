 <?php require_once 'config/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="<?php echo STYLE_PATH;?>css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo STYLE_PATH;?>css/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo STYLE_PATH;?>css/style.css">
    <link rel="stylesheet" href="<?php echo STYLE_PATH;?>css/departement.css">
    <link rel="stylesheet" href="<?php echo STYLE_PATH;?>font-awesome-4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="slick-1.6.0/slick/slick-theme.css">
    <link rel="stylesheet" href="slick-1.6.0/slick/slick.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body class="departement">
    <header>
      <div class="bg-overlay"></div>
       <div class="menu-row row">
          <div class="logo col-sm-4"><img src="" alt=""></div>
            <ul class="menu col-sm-8">
               <li><a href="<?php echo TEMPLATE_PATH?>">Главная</a></li>
               <li class="dropdown-item"><a href="#">обучение</a>
                   <i class="fa fa-angle-down"></i>
                    <ul class="dropdown-link">
                       <li><a href="#">Абитуриентам</a></li>
                       <li><a href="#">Студентам</a></li>
                   </ul>
                </li>
               <li class="dropdown-item"><a href="#">наука</a>
               </li>
               <li class="dropdown-item"><a href="#">Новости</a>
               <i class="fa fa-angle-down"></i>
               <ul class="dropdown-link dropdown-news">
                   <li class="col-md-4">
                       <h3 class="h-desc">Новости</h3>
                       <ul class="dropdown-link-inside">
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                       </ul>
                   </li>
                   <li class="col-md-4">
                       <h3 class="h-desc">Статьи</h3>
                        <ul class="dropdown-link-inside">
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                       </ul>
                   </li>
                   <li class="col-md-4">
                       <h3 class="h-desc">События</h3>
                        <ul class="dropdown-link-inside">
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                           <li><a href="#">Lorem ipsum dolor.</a></li>
                       </ul>
                   </li>
               </ul>
               </li>
               <li><a href="#">Преподаватели</a></li>
               <li><a href="#">Контакты</a></li>
           </ul>
       </div>