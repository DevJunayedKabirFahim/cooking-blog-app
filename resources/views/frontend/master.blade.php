<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- Page Title -->
    <title>Hashtag || @yield('title')</title>

    <!-- Favicon and touch Icons -->
    <link href="{{asset('/')}}frontend/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="{{asset('/')}}frontend/images/apple-touch-icon.html" rel="apple-touch-icon">
    <link href="{{asset('/')}}frontend/images/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('/')}}frontend/images/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('/')}}frontend/images/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">

    <!-- Lead Style -->
    <link href="{{asset('/')}}frontend/css/main.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-four">
<!-- Preloader Start -->
<div id="preloader" class="loader_show">
    <div class="loader-wrap">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!-- Color Mode Switcher -->
<div id="mode_switcher">
    <span><i class="bi bi-sun-fill"></i></span>
</div>

<!-- pointer start -->
<div class="pointer wptb-pointer" id="wptb-pointer"></div>

<!-- Header 1 -->
<header class="header">
    <div class="top_bar">
        <div class="container">
            <div class="top_bar_inner d-block d-sm-flex align-items-center justify-content-between">
                <div class="header_social">
                    <ul class="top_social">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li ><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li ><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                        <li ><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>
                <div class="logo">
                    <a href="{{route('home')}}" class="logo_light_mode"><img src="{{asset('/')}}frontend/images/logo.svg" alt="img"></a>
                    <a href="{{route('home')}}" class="logo_dark_mode"><img src="{{asset('/')}}frontend/images/logo-white.svg" alt="img"></a>
                </div>

                <div class="other_elements_wrapper mt-3 mt-sm-0 d-flex justify-content-between justify-content-sm-end align-items-center gap-3">

                    <!-- Modal Search -->
                    <a href="#" class="modal_search_icon" data-bs-toggle="modal" data-bs-target="#modalSearch"><i class="bi bi-search"></i></a>

                    <!-- Aside Info  -->
                    <div class="aside_open">
                        <span class="toggle_line"></span>
                        <span class="toggle_line"></span>
                        <span class="toggle_line"></span>
                    </div>

                    <!-- Mobile Menu Toggle Button -->
                    <div class="mr_menu_toggle d-lg-none">
                        <span class="toggle_line"></span>
                        <span class="toggle_line"></span>
                        <span class="toggle_line"></span>
                    </div>

                    <div class="mainnav">
                        @if(Session::get('visitor_id'))
                        <ul class="main_menu flex-lg-fill">
                            <li class="menu-item menu-item-has-children"><a href="">{{Session::get('visitor_name')}}</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{route('my-dashboard')}}">My Dashboard</a></li>
                                    <li class="menu-item"><a href="{{route('user-logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        @else
                            <ul class="main_menu flex-lg-fill">
                                <li class="menu-item"><a href="{{route('user-login')}}">Login</a>
                                </li>
                            </ul>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="middle_bar d-none d-lg-block">
        <div class="container">
            <div class="middle_bar_inner d-flex align-items-center justify-content-center flex-wrap">
                <div class="mainnav flex-lg-fill text-center">
                    <ul class="main_menu">

                        <li class="menu-item"><a href="{{route('home')}}">Home</a></li>

                        <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children"><a href="">Blog Category</a>
                                    <ul class="sub-menu">
                                        @foreach($categories as $category)
                                            <li class="menu-item"><a href="{{route('blog-category', ['id' => $category->id])}}">{{$category->name}}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="menu-item"><a href="{{route('about')}}">About</a></li>
                                <li class="menu-item"><a href="{{route('contact')}}">Contact</a></li>
                                {{--<li class="menu-item"><a href="login.html">Login</a></li>
                                <li class="menu-item"><a href="register.html">Register</a></li>
                                <li class="menu-item"><a href="404.html">404 Error</a></li>
                                <li class="menu-item"><a href="search.html">Search</a></li>--}}
                            </ul>
                        </li>

                        <li class="menu-item menu-item-has-children"><a href="#">Post Types</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children"><a href="#">Post Types</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="post-list.html">Post List One</a></li>
                                        <li class="menu-item"><a href="post-list-2.html">Post List Two</a></li>
                                        <li class="menu-item"><a href="post-2-col-left-sidebar.html">Two Columns Left Sidebar</a></li>
                                        <li class="menu-item"><a href="post-2-col.html">Two Columns Right Sidebar</a></li>
                                        <li class="menu-item"><a href="post-3-col.html">Three Columns</a></li>
                                        <li class="menu-item"><a href="post-4-col.html">Four Columns</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Single Post</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-details.html">Post Fullwidth</a></li>
                                        <li class="menu-item"><a href="blog-details-2.html">Post With Sidebar</a></li>
                                        <li class="menu-item"><a href="post-gallery.html">Post Gallery</a></li>
                                        <li class="menu-item"><a href="post-link.html">Post Link</a></li>
                                        <li class="menu-item"><a href="post-quote.html">Post Quote</a></li>
                                        <li class="menu-item"><a href="post-standard-left-sidebar.html">Post Standard Left Sidebar</a></li>
                                        <li class="menu-item"><a href="post-standard.html">Post Standard Right Sidebar</a></li>
                                        <li class="menu-item"><a href="post-audio.html">Post Audio</a></li>
                                        <li class="menu-item"><a href="post-video.html">Post Video</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-has-children"><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="shop-2-col.html">Two Columns Left Sidebar</a></li>
                                <li class="menu-item"><a href="shop-3-col.html">Three Columns Right Sidebar</a></li>
                                <li class="menu-item"><a href="shop-product.html">Product Details</a></li>
                                <li class="menu-item"><a href="shop-cart.html">Cart</a></li>
                                <li class="menu-item"><a href="shop-checkout.html">Checkout</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- Sticky/Fixed Nav -->
<div class="fixed_menu w-100">
    <header class="header"></header>
</div>

<!-- Mobile Responsive Menu -->
<div class="mr_menu d-lg-none">
    <div class="mr_menu_overlay"></div>
    <button type="button" class="mr_menu_close"><i class="ion-close"></i></button>
    <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
    <div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->
</div>

<!-- Aside Information -->
<div class="aside_info_wrapper">
    <div class="aside_info">
        <div class="aside_close"><i class="bi bi-x-lg"></i></div>

        <div class="aside_card">
            <div class="logo-side text-center">
                <a href="index.html" class="logo_light_mode"><img src="{{asset('/')}}frontend/images/logo.svg" alt="img"></a>
                <a href="index.html" class="logo_dark_mode"><img src="{{asset('/')}}frontend/images/logo-white.svg" alt="img"></a>
            </div>
        </div>

        <div class="aside_card">
            <div class="short_desc">Hashtag blogging is a website for bloggers to share their experience. It is a platform to share their thoughts and experience freely.</div>
        </div>

        <div class="aside_card">
            <h4 class="widget_title">
                <span><i class="bi bi-hash"></i>Instagram</span>
            </h4>
            <div class="instagram-posts text-center">
                <ul class="instaFeed">
                    <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/1.jpg" alt="insta"></a></li>
                    <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/2.jpg" alt="insta"></a></li>
                    <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/3.jpg" alt="insta"></a></li>
                    <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/4.jpg" alt="insta"></a></li>
                    <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/5.jpg" alt="insta"></a></li>
                    <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/6.jpg" alt="insta"></a></li>
                </ul>
            </div>
        </div>

        <div class="aside_card">
            <h4 class="widget_title">
                <span><i class="bi bi-hash"></i>Contact Us</span>
            </h4>
            <div class="contact_info">
                <ul class="contact_list">
                    <li class="address"><i class="bi bi-geo-alt"></i> 231 Salt Lake city, Utah, USA</li>
                    <li class="phone"><i class="bi bi-phone"></i> +1234 567 890</li>
                    <li class="email"><i class="bi bi-envelope-fill"></i> hashtagblog@gmail.com</li>
                </ul>
            </div>
        </div>

        <div class="aside_card">
            <div class="post_share text-center">
                <ul class="share_list justify-content-center">
                    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li class="twitter" ><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li class="dribbble" ><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                    <li class="instagram" ><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal Search -->
<div class="search-modal style_two">
    <div class="modal fade" id="modalSearch">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="search_overlay">
                    <form class="search_form" action="https://wpthemebooster.com/demo/themeforest/html/hashtag/cooking/search.php">
                        <input type="text" name="search" class="keyword form-control" placeholder="Type Here...">
                        <button type="submit" class="btn"><i class="ion-ios-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
    </div>
</div>

{{--
<!-- Modal Newsletter -->
<div class="newsletter-modal">
    <div class="modal fade" id="modalNewsletter">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="newsletter rounded-0 d-lg-flex align-items-center text-four">
                    <div class="newsletter_imgbox flex-shrink-0">
                        <img src="{{asset('/')}}frontend/images/bg/bg-4.jpg" alt="">
                    </div>
                    <div class="newsletter_inner w-100 px-2 px-md-5 py-3">
                        <div class="newsletter_header">
                            <h3><i class="ion-email text-one"></i>Subscribe to newsletter</h3>
                            <h5>Get each & every new blogs through your e-mail</h5>
                        </div>
                        <form class="newsletter_form" method="post" action="https://wpthemebooster.com/demo/themeforest/html/hashtag/cooking/subscription.php">
                            <div class="form_group">
                                <input class="form-control" type="email" placeholder="Your Email Address" name="ne" required="">
                                <button type="submit" class="btn bg-one"><i class="bi bi-send"></i></button>
                            </div>
                            <div class="form-check d-inline-block">
                                <input class="form-check-input" type="checkbox" value="" id="stopNewsletter">
                                <label class="form-check-label" for="stopNewsletter">
                                    Stop Newsletter Popup
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <button type="button" class="btn close-btn" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
            </div>
        </div>
    </div>
</div>
--}}


@yield('body')






<!-- Footer -->
<footer class="footer">
    <div class="footer_above pd-top-100 pd-bottom-55">
        <div class="container">
            <div class="footer_widget">
                <div class="instagram-posts position-relative">
                    <h4 class="instafeed_text text-center position-absolute translate-middle top-50 start-50">
                        <a href="#" class="text-two px-4 py-3">#Hashtagblog on Instagram</a>
                    </h4>
                    <ul class="instaFeed flex-nowrap">
                        <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/1.jpg" alt="img"></a></li>
                        <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/2.jpg" alt="img"></a></li>
                        <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/3.jpg" alt="img"></a></li>
                        <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/4.jpg" alt="img"></a></li>
                        <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/5.jpg" alt="img"></a></li>
                        <li><a href="#"><img src="{{asset('/')}}frontend/images/instagram/6.jpg" alt="img"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_middle pd-top-40 pd-bottom-40">
        <div class="container">
            <div class="footer_middle_inner d-flex align-items-center justify-content-center justify-content-sm-between flex-wrap gap-3 position-relative">
                <div class="copyright">
                    <p> &copy; 2023 Hashtag. Copyrights Reserved</p>
                </div>
                <div class="footer_social">
                    <ul class="bottom_social">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="totop">
                    <a href="#"><i class="bi bi-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- All JavaScript Files -->
<script src="{{asset('/')}}frontend/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}frontend/js/bootstrap.min.js"></script>


<script src="{{asset('/')}}frontend/plugins/swiper/swiper-bundle.min.js"></script>

<script src="{{asset('/')}}frontend/plugins/fancybox/jquery.fancybox.min.js"></script>

<script src="{{asset('/')}}frontend/js/custom.js"></script>
<script>
    window.onload = function(){
        setTimeout(function(){
            $(".newsletter-modal .modal").modal('show');
        }, 6000);
    };
</script>
</body>
</html>
