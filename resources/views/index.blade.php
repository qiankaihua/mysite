<?php
function isMobile(){   
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备  
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])){  
        return TRUE;  
    }  
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息  
    if (isset ($_SERVER['HTTP_VIA'])){  
        return stristr($_SERVER['HTTP_VIA'], "wap") ? TRUE : FALSE;// 找不到为flase,否则为TRUE  
    }   
    // 判断手机发送的客户端标志,兼容性有待提高  
    if (isset ($_SERVER['HTTP_USER_AGENT'])) {  
        $clientkeywords = array (  
            'mobile',  
            'nokia',  
            'sony',  
            'ericsson',  
            'mot',  
            'samsung',  
            'htc',  
            'sgh',  
            'lg',  
            'sharp',  
            'sie-',  
            'philips',  
            'panasonic',  
            'alcatel',  
            'lenovo',  
            'iphone',  
            'ipod',  
            'blackberry',  
            'meizu',  
            'android',  
            'netfront',  
            'symbian',  
            'ucweb',  
            'windowsce',  
            'palm',  
            'operamini',  
            'operamobi',  
            'openwave',  
            'nexusone',  
            'cldc',  
            'midp',  
            'wap'  
            );   
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字  
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))){  
            return TRUE;  
        }  
    }  
    if (isset ($_SERVER['HTTP_ACCEPT'])){ // 协议法，因为有可能不准确，放到最后判断  
        // 如果只支持wml并且不支持html那一定是移动设备  
        // 如果支持wml和html但是wml在html之前则是移动设备  
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== FALSE) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === FALSE || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))){  
            return TRUE;  
        }  
    }  
    return FALSE;  
}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>qiankaihua's home</title>
        <meta name="description" content="qiankaihua's personal site">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

        <div class="overlay"></div>
        @if(!isMobile())
        <section class="top-part">
          <video controls autoplay loop>
            <source src="videos/video.mp4" type="video/mp4">
            <source src="videos/video.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video>
        
        </section>
        @endif
        <section class="cd-hero">

          <div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="#0"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Welcome</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/about-icon.png"></div><h6>About Me</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/featured-icon.png"></div><h6>Blog</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/projects-icon.png"></div><h6>Pictrue</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/contact-icon.png"></div><h6>Contact Me</h6></a></li>
              </ul>
            </nav> 
          </div> <!-- .cd-slider-nav -->

          <ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading">
                <h1>Qian Kaihua's Home</h1>
                <span>欢迎来到我的个人网站</span>
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content first-content">
                        <h4>关于网站</h4>
                        <p>始建于2017.08.06，现仅有主页供浏览，功能正在逐步更新中......</p>
                        <p>2017.08.07,增加blog页面</p>
                        <div class="primary-button">
                          <!--a href="#">Discover More</a-->
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>
            <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>

            <li>
              <div class="heading">
                <h1>About Us</h1>
                <span>Get More Info About Our Agency</span> 
              </div>
              <div class="cd-half-width second-slide">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/left-about-image.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>Who we are?</h4>
                              <p>Fusce neque leo, dapibus sed imperdiet sed, vulputate sed purus. Nam eget justo in nibh facilisis rhoncus. Donec et risus non mauris lobortis convallis. Aliquam id urna quis ante blandit semper.</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>What we do?</h4>
                              <p>Nam aliquam ultrices interdum. Vivamus metus mi, accumsan a tincidunt a, efficitur id felis. Vivamus non nibh malesuada, vestibulum nulla in, iaculis sem. Aenean tincidunt faucibus ipsum, ac aliquet nunc accumsan sed. Nulla sodales nunc sit amet libero egestas, ut interdum ex congue.</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="img/right-about-image.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Blog</h1>
                <span>记录生活中的点滴，记录工作中的心得</span> 
              </div>
              <div class="cd-half-width third-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content third-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/left-feature-image.png">
                          </div>
                          <div class="col-md-5">
                            <div class="right-feature-text">
                              <h4>最新日志: <em>{{$newblog->title}}</em></h4>
                              <p>{!! str_limit($newblog->content, $limit = 10, $end = '...') !!}</p>
                              <div class="feature-list">
                                <ul>
                                  @foreach($blogs as $blog)
                                    <p><a href={{ "/blog/".$blog->id }}>{{ $blog->title }}</a></p>
                                  @endforeach
                                </ul>
                              </div>
                              <div class="primary-button">
                                <a href="/blog/bloglist">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
                <div>
                </div>
              </div>
              
            </li>

            <li>
              <div class="heading">
                <h1>My Picture</h1>
                <span>在这里你可以看到我的照片</span> 
              </div>
              <div class="cd-half-width fourth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fourth-content">
                        <div class="row">
                          <div class="col-md-3 project-item">
                            <a href="img/item-01.jpg" data-lightbox="image-1"><img src="img/project-item-01.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-02.jpg" data-lightbox="image-1"><img src="img/project-item-02.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-03.jpg" data-lightbox="image-1"><img src="img/project-item-03.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-04.jpg" data-lightbox="image-1"><img src="img/project-item-04.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-05.jpg" data-lightbox="image-1"><img src="img/project-item-05.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-06.jpg" data-lightbox="image-1"><img src="img/project-item-06.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-07.jpg" data-lightbox="image-1"><img src="img/project-item-07.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-08.jpg" data-lightbox="image-1"><img src="img/project-item-08.jpg"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Contact us</h1>
                <span>You'll be responded within 48 hrs</span> 
              </div>
              <div class="cd-half-width fivth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fivth-content">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="left-info">
                              <p>Maecenas imperdiet sagittis lacus, ut consequat velit iaculis id. Praesent eu consequat urna. Morbi justo dolor, ornare sed lorem et, auctor iaculis ligula.
                              <br><br>
                              <em>3344 Donec mollis libero<br>at metus luctus 10110</em>
                              </p>
                              <ul class="social-icons">
                                <i><a href="#"><i class="fa fa-facebook"></i></a></i>
                                <i><a href="#"><i class="fa fa-twitter"></i></a></i>
                                <i><a href="#"><i class="fa fa-linkedin"></i></a></i>
                                <i><a href="#"><i class="fa fa-rss"></i></a></i>
                                <i><a href="#"><i class="fa fa-behance"></i></a></i>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="row">
                              <form id="contact" action="" method="post">
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message</button>
                                  </fieldset>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>
          </ul> <!-- .cd-hero-slider -->
        </section> <!-- .cd-hero -->


        <footer>
          <p>Copyright &copy; 2017 Qian Kaihua </p>
        </footer>
    
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/mymain.js"></script>

    </body>
</html>