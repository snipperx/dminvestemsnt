<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('layouts/header');
?>
<body>


<!--================Header Area =================-->
<?php
$this->load->view('layouts/top-menu');
?>
<!--================Header Area =================-->
<!--================Header Area =================-->

<!--================Banner Area =================-->
<section class="banner_area" style="background: url(img/banner/single-page-banner2.jpg); background-size: cover">
    <div class="container">
        <div class="banner_inner_text">
            <h4>Service Single Page</h4>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="service-single.html">Service single page</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Why Chose Us Area =================-->
<section class="chose_video_area">
    <div class="chose_left_text">
        <div class="chose_text_inner">
            <div class="main_b_title">
                <h2>Why <br class="title_br"> Choose Us?</h2>
                <h6>Play Welcome Video</h6>
            </div>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. </p>
            <ul>
                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>We Are Creative</a></li>
                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Honest And Dependable</a></li>
                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Quality Commitment</a></li>
                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>We Are Always Improving</a></li>
            </ul>
        </div>
    </div>
    <div class="chose_video_right">
        <div class="chose_video_inner">
            <img src="public/img/video-1.jpg" alt="">
            <a class="popup-youtube" href="https://www.youtube.com/watch?v=5GL9JoH4Sws"><img
                        src="img/icon/video-puse.png" alt=""></a>
        </div>
    </div>
</section>
<!--================End Why Chose Us Area =================-->

<!--================Others Service Area =================-->
<section class="other_service_area">
    <div class="container">
        <h4 class="project_title">Our Other Services</h4>
        <div class="service2_inner other_service_slider owl-carousel">
            <div class="item">
                <div class="service2_item">
                    <div class="service2_item_inner">
                        <div class="service2_item_inner_content">
                            <div class="service_icon">
                                <img src="public/img/icon/s2-icon-1.png" alt="">
                                <img src="public/img/icon/s2-icon-hover-1.png" alt="">
                            </div>
                            <h4>NEW-CONSTRUCTION</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que
                                laudantium totam rem aperiam.</p>
                            <a class="view_btn" href="#">Read Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service2_item">
                    <div class="service2_item_inner">
                        <div class="service2_item_inner_content">
                            <div class="service_icon">
                                <img src="public/img/icon/s2-icon-2.png" alt="">
                                <img src="public/img/icon/s2-icon-hover-2.png" alt="">
                            </div>
                            <h4>LOCATION</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que
                                laudantium totam rem aperiam.</p>
                            <a class="view_btn" href="#">Read Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="service2_item">
                    <div class="service2_item_inner">
                        <div class="service2_item_inner_content">
                            <div class="service_icon">
                                <img src="public/img/icon/s2-icon-3.png" alt="">
                                <img src="public/img/icon/s2-icon-hover-3.png" alt="">
                            </div>
                            <h4>REMODEL & REIMAGE</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem-que
                                laudantium totam rem aperiam.</p>
                            <a class="view_btn" href="#">Read Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Others Service Area =================-->

<!--================Service Single Area =================-->
<section class="service_single_area">
    <div class="container">
        <div class="service_single_inner">
            <div class="project_single_slider">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <li><img src="public/img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-2.jpg" alt=""></li>
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <li><img src="public/img/project/project-single-slider/project-thumb-5.jpg" alt=""></li>
                        <li><img src="public//project/project-single-slider/project-thumb-6.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-7.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-8.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-9.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-5.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-6.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-7.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-8.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-9.jpg" alt=""></li>
                    </ul>
                    <div class="custom-navigation">
                        <a href="#" class="flex-prev"><i class="fa fa-angle-left"></i></a>
                        <a href="#" class="flex-next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row s_text_inner">
                <div class="col-md-6">
                    <div class="left_service_desc">
                        <h4 class="project_title">Service Description</h4>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                            Sed semper, lacus sed feugiat dictum, tellus ipsum auctor quam, non faucibus dui nisl et
                            elit. Morbi eu interdum velit. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                            dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                            veniam, quis nostrum exercitationem ullam corporis suscipit consequatur?</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>We are responsible</a></li>
                            <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i>We take everything under
                                    control</a></li>
                            <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Presented in 26
                                    countries</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="our_skill_inner">
                        <h4 class="project_title">Service Description</h4>
                        <div class="single_skill">
                            <h3>Repairing</h3>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress_parcent"><span class="counter">90</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Painting</h3>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress_parcent"><span class="counter">80</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Gardening</h3>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress_parcent"><span class="counter">70</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Repairing</h3>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress_parcent"><span class="counter">80</span>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service_brochure">
                        <h4 class="project_title">Service Description</h4>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                            Sed semper, lacus sed feugiat dictum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                            inventore.</p>
                        <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download PDF</a>
                        <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download DOC</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Service Single Area =================-->

<!--================Our Latest Project Area =================-->
<section class="our_latest_project">
    <div class="container">
        <h3 class="out_title">Our Latest projects</h3>
        <div class="our_latest_slider owl-carousel">
            <div class="item">
                <div class="project_item">
                    <img src="public/img/project/project-2/project-1.jpg" alt="">
                    <div class="project_hover">
                        <div class="project_hover_inner">
                            <div class="project_hover_content">
                                <a href="#"><h4>Jahanara Vila</h4></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                <a class="view_btn" href="#">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project_item">
                    <img src="public/img/project/project-2/project-2.jpg" alt="">
                    <div class="project_hover">
                        <div class="project_hover_inner">
                            <div class="project_hover_content">
                                <a href="#"><h4>Jahanara Vila</h4></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                <a class="view_btn" href="#">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project_item">
                    <img src="public/img/project/project-2/project-3.jpg" alt="">
                    <div class="project_hover">
                        <div class="project_hover_inner">
                            <div class="project_hover_content">
                                <a href="#"><h4>Jahanara Vila</h4></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                <a class="view_btn" href="#">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Our Latest Project Area =================-->

<!--================Get Quote Area =================-->
<section class="get_quote_area project_contact">
    <div class="container">
        <div class="pull-left">
            <h3>Save Your Money </h3>
            <h4>Call us today or Contact us to get started your project.. </h4>
        </div>
        <div class="pull-right">
            <a class="get_btn_black" data-toggle="modal" data-target="#contactusModal">Contact Us</a>
        </div>
    </div>
</section>
<!--================End Get Quote Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widgets_area">
        <div class="container">
            <div class="row footer_widgets_inner">
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget about_widget">
                        <img src="public/img/footer-logo.png" alt="">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque
                            laudantium. ed quia consequuntur magni dolores eos qui ratione.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget recent_widget">
                        <div class="f_w_title">
                            <h3>Recent Posts</h3>
                        </div>
                        <div class="recent_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <img src="public/img/blog/recent-post/recent-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><p>The road to success is always under con-struction</p></a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img src="public/img/blog/recent-post/recent-2.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><p>The road to success is always under con-struction</p></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget address_widget">
                        <div class="f_w_title">
                            <h3>Office Address</h3>
                        </div>
                        <div class="address_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <p>1234 Cafficic, California, USA</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p>(012) 3456789 </p>
                                    <p>(012) 3456789 </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <p>info@domain.com</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget give_us_widget">
                        <h5>Give Us A Call</h5>
                        <h4>(012) 3456789</h4>
                        <h5>or</h5>
                        <a class="get_bg_btn" data-toggle="modal" data-target="#quoteModal">GET A QUOTE</a>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!--================End Footer Area =================-->
    <?php
    // Load footer_view
    $this->load->view('layouts/footer');
    $this->load->view('modal/quote');
    $this->load->view('modal/contactUs');
    ?>

</footer>
<!--================End Footer Area =================-->


<!--================Begin Script Area =================-->
<?php
$this->load->view('layouts/global-js');
?>


</body>
</html>