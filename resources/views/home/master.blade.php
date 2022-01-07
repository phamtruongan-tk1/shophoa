<!--Author: Template Stock
    Author URL: http://templatestock.co
    -->
<!DOCTYPE html>
<html>
    <head>
        <title>Above Free Responsive Template | Template Stock</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="{{asset('template/css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
        <link href="{{asset('template/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('template/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('template/js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{asset('template/js/easing.js')}}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
            	$(".scroll").click(function(event){		
            		event.preventDefault();
            		$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            	});
            });
        </script>
    </head>
    <body>
        <div class="header" id="head">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""/></a>
                    </div>
                    <div class="top-menu">
                        <span class="menu"> </span>
                        <ul>
                            <nav class="cl-effect-5">
                                <li><a class="active" href="index.html"><span data-hover="Home"> Trang chủ</span></a></li>
                                <li><a href="#about" class="scroll"><span data-hover="about">Giới thiệu</span></a></li>
                                <li><a href="#work" class="scroll"><span data-hover="work"><span>Menu</span></a></li>
                                <li><a href="#contact" class="scroll"><span data-hover="contact">Liên hệ</span></a></li>
                            </nav>
                        </ul>
                    </div>
                    <!--script-nav-->
                    <script>
                        $("span.menu").click(function(){
                        $(".top-menu ul").slideToggle("slow" , function(){
                        });
                        });
                    </script>
                    <div class="clearfix"></div>
                </div>
                <div class="index-banner">
                    <div class="wmuSlider example1">
                        <div class="wmuSliderWrapper">
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-wrap">
                                    <div class="banner_center">
                                        <h1>CƠM TRƯA VĂN PHÒNG GIAO TẬN NƠI</h1>
                                        <h2> <span> FREESHIP TỪ 5 PHẦN </span></h2>
                                        <h1>GIAO QUẬN 1, 3, 10, PHÚ NHUẬN, TÂN BÌNH </h1>
                                    </div>
                                </div>
                            </article>
                            <article style="position: relative; width: 100%; opacity: 1;">
                                <div class="banner-wrap">
                                    <div class="banner_center">
                                        <h1>Content here,</h1>
                                        <h2>Lorem <span>graphic &  designer</span></h2>
                                        <h2>Contrary</h2>
                                    </div>
                                </div>
                            </article>
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-wrap">
                                    <div class="banner_center">
                                        <h1>Lorem Ipsum ,</h1>
                                        <h2>Contrary to <span>&  designer</span></h2>
                                        <h2>reproduced below</h2>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <script src="{{asset('template/js/jquery.wmuSlider.js')}}"></script> 
                    <script>
                        $('.example1').wmuSlider();         
                    </script> 	           	      
                </div>
            </div>
        </div>
        <div class="content">
            <div class="about-section" id="about" id="about">
                <div class="container">
                    <div class="about-header">
                        <h3>Giới thiệu</h3>
                        <div class="about-imag">
                            <img src="{{asset('template/images/pic-9.jpg')}}" alt=""/>
                        </div>
                        <div class="about-text">
                            <p>Đến với Anzi, bạn không cần bận tâm các vấn đề vệ sinh an toàn thực phẩm. Với nguyên tắc "Cái đức đặt lên hàng đầu", thức ăn từ khâu chọn lọc đến khâu chế biến đều được đội ngũ bếp chăm chút kỹ lưỡng !</p>
                            <p>Đến với Anzi, bạn không cần bận tâm các vấn đề vệ sinh an toàn thực phẩm. Với nguyên tắc "Cái đức đặt lên hàng đầu", thức ăn từ khâu chọn lọc đến khâu chế biến đều được đội ngũ bếp chăm chút kỹ lưỡng !</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="arrow1">
                        <a href="#work" class="scroll"><img src="{{asset('template/images/arrow1.png')}}" alt=""/></a>
                    </div>
                </div>
            </div>
            <!-- about-section-ends -->
            <div class="works-section" id="work" id="work">
                <div class="works-header">
                    <h3>Menu</h3>
                </div>
                <div class="portfolio-section-bottom-row" id="portfolio">
                    <div class="container">
                        <script src="{{asset('template/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                            	$('#horizontalTab').easyResponsiveTabs({
                            		type: 'default', //Types: default, vertical, accordion           
                            		width: 'auto', //auto or any width like 600px
                            		fit: true   // 100% fit in a container
                            	});
                                
                            });
                            
                        </script>
                        <link rel="stylesheet" href="{{asset('template/css/swipebox.css')}}">
                        <script src="{{asset('template/js/jquery.swipebox.min.js')}}"></script> 
                        <script type="text/javascript">
                            jQuery(function($) {
                            	$(".swipebox").swipebox();
                            });
                        </script>
                        <!-- Portfolio Ends Here -->
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul class="resp-tabs-list">
                                @foreach ($dates as $date)
                                    <li class="resp-tab-item @if($date->name === $now) {{'resp-tab-active'}} @endif " aria-controls="tab_item-0" role="tab"><span>{{Str::ucfirst($date->name)}} <br></span></li>
                                @endforeach
                                    <div class="clearfix"></div>
                                </ul>
                                <div id="portfoliolist">
                                    <div class="resp-tabs-container">
                                    @foreach ($dates as $date)
                                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                            <div class="tab_img">
                                                @foreach ($date->product as $product)
                                                    <div class="col-md-3 img-top grid_box">
                                                        <a href="" class="swipebox"  title="Image Title">
                                                        <img style="width:261px; height:230px; border-radius:10px" src="{{asset('uploads/products/' . $product->image)}}" class="img-responsive" alt="">
                                                        <span class="" style="font-size: 20px; color:white">{{Str::ucfirst($product->name)}}</span> <br>
                                                        <span class="" style="font-size: 15px; color:white">{{number_format($product->price ). ' vnđ'}} </span>
                                                        </a>
                                                    </div>
                                                @endforeach
                                                    <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            jQuery(function(){
                                jQuery('.resp-tab-item.resp-tab-active').click();
                            });
                        </script>
                        <div class="arrow">
                            <a href="#services" class="scroll"><img src="{{asset('template/images/arrow.png')}}" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-section" id="contact" id="contact">
            <div class="container">
                <div class="contact-header">
                    <h3> contact</h3>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                </div>
                <div class="social-icon">
                    <a href="#"><i class="icon1"></i></a>
                    <a href="#"><i class="icon2"></i></a>
                    <a href="#"><i class="icon3"></i></a>
                    <a href="#"><i class="icon4"></i></a>
                    <a href="#"><i class="icon5"></i></a>
                    <a href="#"><i class="icon6"></i></a>
                    <a href="#"><i class="icon7"></i></a>
                    <a href="#"><i class="icon8"></i></a>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2015 Onepage . All rights  Reserved | Template by<a href="http://templatestock.com" target="target_blank">Template Stock</a></p>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                    	/*
                    	var defaults = {
                     			containerID: 'toTop', // fading element id
                    		containerHoverID: 'toTopHover', // fading element hover id
                    		scrollSpeed: 1200,
                    		easingType: 'linear' 
                    		};
                    	*/
                    	
                    	$().UItoTop({ easingType: 'easeOutQuart' });
                    	
                    });
                </script>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
            </div>
        </div>
        </div>
    </body>
</html>