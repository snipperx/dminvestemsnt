<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('layouts/header');
?>
<body>

<!--================Header Area =================-->
<?php
$this->load->view('layouts/top-menu');
?>

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h4>Project Single Page</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Project single page 01</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================PreConstruction Area =================-->
<section class="preconstruction_area">
    <div class="row pre_construction_inner">
        <div class="col-md-6">
            <div class="pre_construction_item">
                <img src="public/img/pre-cons-left.jpg" alt="">
                <div class="pre_hover">
                    <h4>PRE-CONSTRUCTION</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    <a class="slider_btn" href="#">Read Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="pre_construction_right">
                <img src="public/img/pre-cons-right.jpg" alt="">
                <div class="pre_hover">
                    <h4>CIVIL & ARCHITECTURE</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    <a class="slider_btn" href="#">Read Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End PreConstruction Area =================-->

<!--================Project Single Area =================-->
<section class="project_single_area">
    <div class="container">
        <div class="project_single_inner">
            <div class="project_single_slider">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-s-1.jpg" alt=""></li>
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <li><img src="public/img/project/project-single-slider/project-thumb-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-2.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-3.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-4.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-1.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-2.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-3.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-4.jpg" alt=""></li>
                        <li><img src="public/img/project/project-single-slider/project-thumb-1.jpg" alt=""></li>
                    </ul>
                    <div class="custom-navigation">
                        <a href="#" class="flex-prev"><i class="fa fa-angle-left"></i></a>
                        <a href="#" class="flex-next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="project_summery">
                        <h4 class="project_title">Project Summery</h4>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum.</p>
                        <ul>
                            <li><a href="#">Client’s Name : <span>Md. Shafiqul Alom</span> </a></li>
                            <li><a href="#">Catagory: <span>Repairing</span></a></li>
                            <li><a href="#">Value: <span>$154543</span></a></li>
                            <li><a href="#">Year Completed: <span>April 2010</span> </a></li>
                            <li><a href="#">Area: <span>21,000 m2</span></a></li>
                            <li><a href="#">Architect: <span>Masud & Rocky</span></a></li>
                            <li><a href="#">Location: <span>123, ABC Road, London</span></a></li>
                            <li><a href="#">Investors website: <span>www.domain.com</span></a></li>
                        </ul>
                    </div>
                    <div class="project_quote">
                        <h4 class="project_title">Owner Review</h4>
                        <div class="quote_inner">
                            <p>Proin gravida nibh vel velit hace aauctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipissum, nec sagittis sem nibh id elit.  </p>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                        </div>
                    </div>
                    <div class="panel-group project_collaps" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project_discription">
                        <h4 class="project_title">Project Summery</h4>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore. Proin gravida nibh vel velit hace aauctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipissum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit aasmet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                        <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti hacsociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore. Proin gravida nibh vel velit hace aauctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipissum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit aasmet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                    </div>
                    <div class="project_s_tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tab 01</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Tab 02</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Tab 03</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade in" id="home">
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                <p>Proin gravida nibh vel velit hace aauctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipissum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit aasmet mauris. Morbi accumsan ipsum velit.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                <p>Proin gravida nibh vel velit hace aauctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipissum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit aasmet mauris. Morbi accumsan ipsum velit.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                <p>Proin gravida nibh vel velit hace aauctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipissum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit aasmet mauris. Morbi accumsan ipsum velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Project Single Area =================-->

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
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium. ed quia consequuntur magni dolores eos qui ratione.</p>
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
    <?php
    // Load footer_view
    $this->load->view('layouts/footer');
    $this->load->view('modal/quote');
    $this->load->view('modal/contactUs');
    ?>
</footer>
<!--================End Footer Area =================-->
<?php
$this->load->view('layouts/global-js');
?>
</body>
</html>