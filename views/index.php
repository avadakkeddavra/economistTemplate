<?php require_once 'config/config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="<?php echo STYLE_PATH;?>css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo STYLE_PATH;?>css/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo STYLE_PATH;?>css/style.css">
    <link rel="stylesheet" href="<?php echo STYLE_PATH;?>font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="slick-1.6.0/slick/slick-theme.css">
    <link rel="stylesheet" href="slick-1.6.0/slick/slick.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
    <header>
       <div class="menu-row row">
          <div class="logo col-sm-4"><img src="" alt=""></div>
                  <ul class="menu col-sm-8">
               <li><a href="#">Главная</a></li>
               <li class="dropdown-item"><a href="#">обучение</a>
                   <i class="fa fa-angle-down"></i>
                    <ul class="dropdown-link">
                       <li><a href="#">Абитуриентам</a></li>
                       <li><a href="#">Студентам</a></li>
                   </ul>
                </li>
               <li class="dropdown-item"><a href="/academy/departement/">наука</a>
               </li>
               <li class="dropdown-item"><a href="news/">Новости</a>
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
        <div class="slider-container">
          
            <ul id="slider">
                
                <li>
                   <div class="bg-overlay"></div>
                    <img src="img/slide1.jpg" alt="">
                    <div class="desc">
                        <h1>Lorem ipsum dolor.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum placeat accusantium sequi expedita omnis non perspiciatis excepturi ducimus mollitia porro.</p>
                        <a href="#" class="btn-standart">Подробнее</a>
                    </div>
                </li>
                <li>
                   <div class="bg-overlay"></div>
                    <img src="img/slide2.jpg" alt="">
                    <div class="desc">
                        <h1>Lorem ipsum dolor.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum placeat accusantium sequi expedita omnis non perspiciatis excepturi ducimus mollitia porro.</p>
                        <a href="#" class="btn-standart">Подробнее</a>
                    </div>
                </li>
                <li>
                   <div class="bg-overlay"></div>
                    <img src="img/slide3.jpg" alt="">
                    <div class="desc">
                        <h1>Lorem ipsum dolor.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum placeat accusantium sequi expedita omnis non perspiciatis excepturi ducimus mollitia porro.</p>
                        <a href="#" class="btn-standart">Подробнее</a>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="header-row container-fluid">
          <div class="row">
                  <article class="col-md-4">
                    <h3>Lorem ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus voluptatibus nisi laudantium excepturi consectetur odio esse mollitia error nam voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, explicabo? Iusto facilis quam veritatis dicta cumque beatae debitis possimus quisquam!</p>
                </article>
                <article class="col-md-4">
                    <h3>Lorem ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A molestiae minima assumenda consequatur inventore, impedit amet eaque quasi possimus facere! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis iste alias maxime libero, porro officia molestiae quasi non eligendi quis!</p>
                </article>
                <article class="col-md-4">
                    <h3>Lorem ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eius, amet quod illo rerum, praesentium eum ea quidem eligendi natus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aut mollitia, culpa tempore deleniti. Vel quas at id modi perferendis?</p>
                </article>
            </div>
        </div>
    </header>
    
    <section class="latest-event container" >
        <div class="row">
            <div class="col-md-6 img"><img src="img/slide1.jpg" alt="" class="img-responsive"></div>
            <div class="col-md-6 news-info">
                <h3 class="h-inline">Lorem ipsum dolor. <i class="fa fa-book"></i></h3>
                <p class="desc-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ducimus optio adipisci sit, quod aut numquam explicabo nam est asperiores, ex vero quas accusantium ullam sunt iure accusamus consectetur illo. Quidem suscipit nihil maxime aspernatur commodi dolore magni hic doloribus provident, sunt ipsa, soluta expedita fugiat corporis, pariatur sint vel ut ex distinctio consectetur. Recusandae aliquid ipsam unde sed debitis, excepturi mollitia animi sequi esse porro suscipit vero voluptate at minima deleniti aperiam accusantium amet voluptates enim nam voluptas aspernatur. Natus molestiae aliquid incidunt culpa ratione ipsa, ut eius! Nemo eos sed quaerat quidem distinctio exercitationem mollitia quos officiis quae!</p>
                <a href="#" class="btn-standart">Подробнее</a>
            </div>
        </div>
    </section>
    
    <section class="about container">
        <h3 class="h-block">О факультете <i class="fa fa-comment-o"></i></h3>
        <div class="row">
            <div class="col-md-3 about-item">
                <div class="circle"><i class="fa fa-suitcase"></i></div>
                <div class="desc">
                    <h3 class="h-desc">Lorem ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore delectus aperiam libero nesciunt vel minus reiciendis sed, soluta perspiciatis dignissimos fuga rem, voluptate eos porro id molestiae ratione officiis totam!</p>
                </div>
            </div>
            <div class="col-md-3 about-item">
                <div class="circle"><i class="fa fa-diamond"></i></div>
                <div class="desc">
                    <h3 class="h-desc">Lorem ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore delectus aperiam libero nesciunt vel minus reiciendis sed, soluta perspiciatis dignissimos fuga rem, voluptate eos porro id molestiae ratione officiis totam!</p>
                </div>
            </div>
            <div class="col-md-3 about-item">
                <div class="circle"><i class="fa fa-book"></i></div>
                <div class="desc">
                    <h3 class="h-desc">Lorem ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore delectus aperiam libero nesciunt vel minus reiciendis sed, soluta perspiciatis dignissimos fuga rem, voluptate eos porro id molestiae ratione officiis totam!</p>
                </div>
            </div>
            <div class="col-md-3 about-item">
                <div class="circle"><i class="fa fa-plug"></i></div>
                <div class="desc">
                    <h3 class="h-desc">Lorem ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore delectus aperiam libero nesciunt vel minus reiciendis sed, soluta perspiciatis dignissimos fuga rem, voluptate eos porro id molestiae ratione officiis totam!</p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class='departments container'>
       <h3 class="h-block">Кафедры факультета <i class="fa fa-heart-o"></i></h3>
        <div class="row">

        <?php 
        foreach($data['departements'] as $item)
        {
            echo '
                <div class="col-md-4 col-sm-6 department">
                    <h3 class="h-desc"><a href="' . TEMPLATE_PATH . 'departements/' . $item['id'] . '" class="h-link">' . $item['title'] . '</a></h3>
                    <p>' . $item['description'] . '</p>
                </div>
            ';
        }

         ?>
         <!--    <div class="col-md-4 col-sm-6 department">
                <h3 class="h-desc"><a href="#" class="h-link"></a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis cumque, fugiat velit quo pariatur non rerum ratione nulla ea nobis alias ipsa? Repellendus non saepe unde, in expedita rerum dolorem.</p>
            </div>
            <div class="col-md-4 col-sm-6 department">
                <h3 class="h-desc"><a href="#" class="h-link">менеджмента</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis cumque, fugiat velit quo pariatur non rerum ratione nulla ea nobis alias ipsa? Repellendus non saepe unde, in expedita rerum dolorem.</p>
            </div>
            <div class="col-md-4 col-sm-6 department">
                <h3 class="h-desc"><a href="#" class="h-link">экономики управления</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis cumque, fugiat velit quo pariatur non rerum ratione nulla ea nobis alias ipsa? Repellendus non saepe unde, in expedita rerum dolorem.</p>
            </div>
                  <div class="col-md-4 col-sm-6 department">
                <h3 class="h-desc"><a href="#" class="h-link">Экономики предприятия</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis cumque, fugiat velit quo pariatur non rerum ratione nulla ea nobis alias ipsa? Repellendus non saepe unde, in expedita rerum dolorem.</p>
            </div>
            <div class="col-md-4 col-sm-6 department">
                <h3 class="h-desc"><a href="#" class="h-link">менеджмента</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis cumque, fugiat velit quo pariatur non rerum ratione nulla ea nobis alias ipsa? Repellendus non saepe unde, in expedita rerum dolorem.</p>
            </div>
            <div class="col-md-4 col-sm-6 department">
                <h3 class="h-desc"><a href="#" class="h-link">экономики управления</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis cumque, fugiat velit quo pariatur non rerum ratione nulla ea nobis alias ipsa? Repellendus non saepe unde, in expedita rerum dolorem.</p>
            </div> -->
        </div>
    </section>
    
    
 <!--    <section class="container for-students">
        <h2 class="h-block">для студентов</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="#" class="h-link"><img src="img/for-students1.jpg" alt="" class="img-responsive"></a>
                    <h3 class="h-desc"><a href="#" class="h-link">Lorem ipsum.</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione aliquid, impedit porro aut ea veritatis delectus enim itaque labore debitis.</p>
                <a href="#" class="btn-standart">Подробнее</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="h-link"><img src="img/for-students2.jpg" alt="" class="img-responsive"></a>
                <h3 class="h-desc"><a href="#" class="h-link">Lorem ipsum.</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione aliquid, impedit porro aut ea veritatis delectus enim itaque labore debitis.</p>
                <a href="#" class="btn-standart">Подробнее</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="h-link"><img src="img/for-students3.jpg" alt="" class="img-responsive"></a>
                <h3 class="h-desc"><a href="#" class="h-link">Lorem ipsum.</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione aliquid, impedit porro aut ea veritatis delectus enim itaque labore debitis.</p>
                <a href="#" class="btn-standart">Подробнее</a>
            </div>
        </div>
    </section> -->
    
    <section class="container teachers">
        <h2 class="h-block">преподаватели</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6 teacher">
                <img src="img/teacher_solodulhin.jpg" alt="" class="img-responsive">
                <div class="teacher-info">
                    <h3 class="h-desc">Декан</h3>
                    <p>Lorem ipsum dolor.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 teacher">
                <img src="img/teacher2.png" alt="" class="img-responsive">
                <div class="teacher-info">
                    <h3 class="h-desc">Проффесор</h3>
                    <p>Lorem ipsum dolor.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 teacher">
                <img src="img/teacher3.png" alt="" class="img-responsive">
                <div class="teacher-info">
                    <h3 class="h-desc">доцент</h3>
                    <p>Lorem ipsum dolor.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 teacher">
                <img src="img/teacher4.png" alt="" class="img-responsive">
                <div class="teacher-info">
                    <h3 class="h-desc">доцент</h3>
                    <p>Lorem ipsum dolor.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="parallax latest-events">
       <div class="bg-overlay"></div>
        <div class="container">
            <h2 class="h-block">последние события</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 event">
                    <a href="#" class="h-link"><img src="img/for-students1.jpg" alt="" class="img-responsive"></a>
                    <div class="event-info">
                        <a href="#" class="h-link"><h3 class="h-desc">Lorem ipsum dolor.</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione suscipit, aspernatur! Laborum quas consequatur laudantium velit tempora, reprehenderit possimus, dignissimos.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 event">
                    <a href="#" class="h-link"><img src="img/for-students3.jpg" alt="" class="img-responsive"></a>
                    <div class="event-info">
                        <a href="#" class="h-link"><h3 class="h-desc">Lorem ipsum dolor.</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione suscipit, aspernatur! Laborum quas consequatur laudantium velit tempora, reprehenderit possimus, dignissimos.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 event">
                    <a href="#" class="h-link"><img src="img/for-students2.jpg" alt="" class="img-responsive"></a>
                    <div class="event-info">
                        <a href="#" class="h-link"><h3 class="h-desc">Lorem ipsum dolor.</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione suscipit, aspernatur! Laborum quas consequatur laudantium velit tempora, reprehenderit possimus, dignissimos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="clearfix"></div>
    
    <section class="latest-news container">
        <h2 class="h-block">Последние новости</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6 new">
                <a href="#" class="new-link"><img src="img/for-students1.jpg" alt="" class="img-responsive">
                <div class="date">
                    <span class="number">12</span>
                    <span class="month">Апрель</span>
                </div>
                </a>
                <h3 class="h-desc"><a href="#" class="h-link">Lorem ipsum.</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum perferendis, facilis provident ea reprehenderit alias fugit ratione perspiciatis necessitatibus libero eligendi laboriosam eveniet possimus soluta velit assumenda! Sit, maiores facere?</p><a href="#" class="btn-standart">Подробнее</a>
            </div>
            <div class="col-md-4 col-sm-6 new">
                <a href="#" class="new-link"><img src="img/for-students2.jpg" alt="" class="img-responsive">
                <div class="date">
                    <span class="number">12</span>
                    <span class="month">Апрель</span>
                </div>
                </a>
                <h3 class="h-desc"><a href="#" class="h-link">Lorem ipsum.</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum perferendis, facilis provident ea reprehenderit alias fugit ratione perspiciatis necessitatibus libero eligendi laboriosam eveniet possimus soluta velit assumenda! Sit, maiores facere?</p><a href="#" class="btn-standart">Подробнее</a>
            </div>
            <div class="col-md-4 col-sm-6 new">
                <a href="#" class="new-link"><img src="img/for-students3.jpg" alt="" class="img-responsive">
                <div class="date">
                    <span class="number">12</span>
                    <span class="month">Апрель</span>
                </div>
                </a>
                <h3 class="h-desc"><a href="#" class="h-link">Lorem ipsum.</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum perferendis, facilis provident ea reprehenderit alias fugit ratione perspiciatis necessitatibus libero eligendi laboriosam eveniet possimus soluta velit assumenda! Sit, maiores facere?</p><a href="#" class="btn-standart">Подробнее</a>
            </div>
        </div>
    </section>
    
    <footer>
   <div class="container">    
        <h2 class="h-block">Связяться с нами</h2>
               <div class="row form-rules">
                    <div class="col-md-6 contact-form">
                    <form action="" class="form" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Имя">
                        </div>
                        
                        <div class="form-group">
                           
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        
                        <div class="form-group">
                            <input type="number" name="number" class="form-control" placeholder="Номер телефона">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="message-theme" class="form-control" placeholder="Тема сообщения">
                        </div>
                        
                        <textarea name="message" class="form-control">Сообщение</textarea>
                        <button type="submit">Отправить</button>
                    </form>
                </div>
                <div class="col-md-6 rules">
                    <h3 class="h-desc">Lorem ipsum dolor sit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium debitis iusto vero similique doloribus, nulla, consectetur, saepe rem quo cumque possimus. Asperiores, deleniti, impedit delectus voluptas similique saepe repellat aperiam!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium debitis iusto vero similique doloribus, nulla, consectetur, saepe rem quo cumque possimus. Asperiores, deleniti, impedit delectus voluptas similique saepe repellat aperiam!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium debitis iusto vero similique doloribus, nulla, consectetur, saepe rem quo cumque possimus. Asperiores, deleniti, impedit delectus voluptas similique saepe repellat aperiam!</p>  
                </div>
            </div>
        </div>
        
        
        <div class="row footer-menu">
          <div class="container">
                  <div class="col-md-3 col-sm-6 footer-item">
                    <h4 class="h_col">Ближайшие события</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-item">
                    <h4 class="h_col">Страницы кафедр</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-item">
                    <h4 class="h_col">Для студентов</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-item">
                    <h4 class="h_col">для абитуриентов</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">&copy; Copyright 2017</div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="slick-1.6.0/slick/slick.js"></script>
    <script src="js/js.js"></script>
</body>
</html>