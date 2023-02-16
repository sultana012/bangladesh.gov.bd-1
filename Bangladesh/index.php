<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <?wp_head();?>
</head>
<body>
    <!--header part start  -->
   
    <header class="cont_p">
        <div class="row topbar">
            <div class="col-lg-6 top_left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 top_right d-flex justify-content-end">
                <p>২১ কার্তিক, ১৪২৯ |</p>
                <a href="#">English</a>
            </div>
        </div>
    </header>
    <!--header part end  -->
    <!-- logo part start -->
    <section class="cont">
        <div class="row logo">
            <div class="col-lg-4 logo_left">
                <a href="#">
                    <?php the_custom_logo();?>
                    
            </div>
            <div class="col-lg-8 logo_right">
                <div class="logo_right_top d-flex justify-content-end">
                    <div class="top_menu">
                        
                        
                    </div>
                    <div class="top_menu d-flex">
                        <span>৫৮</span>
                        <p>মন্ত্রণালয়<br>ও বিভাগ</p>
                    </div>
                    <div class="top_menu d-flex">
                        <span>৩৫৩</span>
                        <p>অধিদপ্তর<br>ওঅন্যান্য </p>
                    </div>
                    <div class="top_menu d-flex">
                        <span>৮</span>
                        <p>বিভাগ</p>
                    </div>
                    <div class="top_menu d-flex">
                        <span>৬৪</span>
                        <p>জেলা</p>
                    </div>
                    <div class="top_menu d-flex">
                        <span>৪৯২</span>
                        <p>উপজেলা</p>
                    </div>
                    <div class="top_menu d-flex">
                        <span>৪৫৫৪</span>
                        <p>ইউনিয়ন</p>
                    </div>
                    
                </div>
                <div class="logo_right_bottom">
                    <div class="row xx">
                        <div class="col-lg-9 logo_right_bottom_search">
                            <form action="">
                                <input type="text" placeholder="খুঁজুন ">
                                <button>অনুসন্ধান </button>
                            </form>
                        </div>
                        <div class="col-lg-3 logo_right_bottom_icon d-flex justify-content-center">
                            <div class="logo_right_bottom_right1">
                                <?php dynamic_sidebar();?>
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/a2i-logo-footer.png" alt=""></a>
                            </div>
                            <div class="logo_right_bottom_right2">
                                <p>সাথে থাকুন:</p>
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/facebook-icon.png" alt=""></a>
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/youtube-icon.png" alt=""></a>
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/twitter-blue-icon.png" alt=""></a>
                                <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/header/gplus-icon.png" alt=""></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- Menu part start -->
    <section class="cont_p">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                 
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu([
                        'theme_location'=>'TM',
                        'menu_class'=>'navbar-nav',
                    ]);
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">হোম</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li> -->
                      
                    </ul>
                    
                </div>
              </nav>
        </div>
    </section>
    <!-- Menu part end -->
    <!-- Hero Part Start -->
    <section class="cont">
        <div class="row hero">
            <div class="hero_main col-lg-8">
                <div class="banner">
                    <?php dynamic_sidebar('banner');?>
                </div>
                <!-- slider start -->
                <div class="slider">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <?php
                        $qry = new WP_Query([
                            'post_type'=>'post',
                            'catagory_name'=>'slider',
                        ]);
                        ?>
                        <div class="carousel-inner">
                            <?php
                            $x = 0 ;
                            while($qry-> have_posts()){ $qry->the_post();
                                $x++;
                            ?>
                          <div class="carousel-item <?= ($x==1) ? 'active' : '' ?>">
                            <?php the_post_thumbnail();?>
                        </div>
                        <?php }?>
                            </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <!-- slider end -->
                <div class="tab">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/call_center.png" alt=""></a>
                                    <p>কল সেন্টার</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>মৎস্য ও প্রাণী</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/mobile_service.png" alt=""></a>
                                    <p>মোবাইল সেবা </p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/helpdesk.png" alt=""></a>
                                    <p>হেল্পডেস্ক</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">B</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><<img src="<?= get_template_directory_uri() ?>./assets/images/tab/call_center.png" alt=""></a>
                                    <p>কল সেন্টার</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>মৎস্য ও প্রাণী</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><<img src="<?= get_template_directory_uri() ?>./assets/images/tab/mobile_service.png" alt=""></a>
                                    <p>মোবাইল সেবা </p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/helpdesk.png" alt=""></a>
                                    <p>হেল্পডেস্ক</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><<img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><<img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                      </div>
                </div>
                <div class="list m-3">
                    <h5>উদ্যোগ</h5>
                    <ul>
                        <li><a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> </li>
                        <li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।(১১-০৪-২০১৫)</a>  </li>
                        <li><a href="">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। (০৭-০৪-২০১৫)</a> </li>
                    </ul>
                </div>
                <div class="others"></div>
            </div>
            <div class="hero_side col-lg-4">
                <div class="side_img">
                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
                </div>
                <h4>সকল বাতায়ন</h4>
                <form action="">
                    <select name="" id="">
                        <option value="">ওয়েবসাইট বাছাই করুন</option>
                        <option value="">মন্ত্রণালয়</option>
                        <option value="">অধিদপ্তর </option>
                        <option value="">ঢাকা বিভাগ</option>
                        <option value="">চট্টগ্রাম বিভাগ</option>
                    </select>
                    <button>চলুন</button>
                </form>
                <div class="side_video">
                    <h5>মুজিব১০০ আ্যাপ</h5>
                    <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5>মাস্ক পরুন সেবা নিন</h5>
                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/mask-bd-portal (1).jpg" class="d-block w-100" alt=""></a>
                    <h6>ডেঙ্গু প্রতিরোধে করণীয়</h6>
                    <a href="#"><img src="<?= get_template_directory_uri() ?>./assets/images/sidebar/dengu.jpg" class="d-block w-100" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Part End -->
    <!-- footer part start -->
    <footer class="cont_p mt-5">
        <div class="row footer_main">
            <img src="<?= get_template_directory_uri() ?>./assets/images/footer/download.png" alt="">
        </div>
        </div>
        <div class="row footer_bottom">
            <div class="col-lg-7 fb_left">L</div>
            <div class="col-lg-5 fb_right">R</div>
        </div>
    </footer>
    <!-- footer part end -->


    <?php wp_footer();?>
</body>
</html>