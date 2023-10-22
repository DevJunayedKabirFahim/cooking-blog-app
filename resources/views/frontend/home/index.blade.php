@extends('frontend.master')

@section('title','Home Page')

@section('body')
    <div class="main_wrapper">
        <!-- Theme Slider -->
        <div class="slider_category">
            <div class="container-fluid">
                <div class="swiper swiper_blog_category">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        @foreach($blogs as $blog)
                        <div class="swiper-slide">
                            <div class="blog_category_item style_two">
                                <div class="blog_category_item_img">
                                    <img src="{{asset($blog->image)}}" alt="img">
                                </div>
                                <div class="blog_category_inner">
                                    <div class="post_header">
                                        <div class="tags"><a class="bg-one text-white" href="blog-category.html">{{$blog->category->name}}</a></div>
                                        <h1 class="post_title">
                                            <a href="{{route('blog-detail', ['id' => $blog->id])}}">{{$blog->title}}</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <!-- Swiper Navigation -->
                    <div class="swiper-button-next"><i class="bi bi-chevron-right"></i></div>
                    <div class="swiper-button-prev"><i class="bi bi-chevron-left"></i></div>

                </div>
            </div>
        </div>

        <div class="category_list bg_image" style="background-image: url('{{asset('/')}}frontend/images/bg/bg-1.jpg');">
            <div class="container d-flex align-items-center justify-content-around gap-3 flex-wrap">
                @foreach($categories as $category)
                    <div class="blog_category_item style_three">
                        <div class="blog_category_item_img">
                            <a href="{{route('blog-category', ['id' => $category->id])}}"><img src="{{asset($category->image)}}" height="200" width="200" alt="img"></a>
                        </div>
                        <div class="blog_category_inner">
                            <div class="post_header">
                                <div class="tags"><a class="text-uppercase" href="blog-category.html">{{$category->name}}</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-sm-7">
                        <div class="blog_list">
                            <!-- Article Start -->
                            <article class="blog_post" >
                                <div class="post_header">
                                    <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                    <h1 class="post_title">
                                        <a href="blog-details.html">Fried Tiger Shrimp With Avocado Salad</a>
                                    </h1>
                                </div>
                                <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                    <div class="author element d-flex align-items-center gap-1" >
                                        by <a href="about.html">Rachel Moor</a>
                                    </div>
                                    <div class="calendar element" >
                                        <a href="#">February 28, 2023</a>
                                    </div>
                                    <div class="comments element" >
                                        <a href="#"> <i class="bi bi-chat"></i> 2k</a>
                                    </div>
                                    <div class="view element" >
                                        <a href="#"> <i class="bi bi-eye"></i> 1.3k</a>
                                    </div>
                                </div>

                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/1.jpg" alt="blog"></a>
                                </div>
                                <div class="post_content">
                                    <div class="post_content_inner" >
                                        <div class="post_intro">
                                            <p>Digital marketing is the component of marketing that uses the Internet and online
                                                based digital technologies such as desktop computers, mobile phones and other digital media &platforms to promote products and services...</p>
                                        </div>
                                    </div>
                                    <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="read_more d-flex">
                                            <a href="{{route('blog-detail',['id' => $blog->id])}}" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="element post_share d-flex align-items-center gap-3" >
                                            <span class="share-btn">Share : </span>
                                            <ul class="share_list">
                                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                <li ><a href="#"><i class="ion-social-twitter"></i></a></li>
                                                <li ><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                                <li ><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                                <li ><a href="#"><i class="ion-social-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Article Start -->
                            <article class="blog_post" >
                                <div class="post_header">
                                    <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                    <h1 class="post_title">
                                        <a href="blog-details.html">20 Most famous smoothie recipe in this summer</a>
                                    </h1>
                                </div>
                                <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                    <div class="author element d-flex align-items-center gap-1" >
                                        by <a href="about.html">Rachel Moor</a>
                                    </div>
                                    <div class="calendar element" >
                                        <a href="#">February 28, 2023</a>
                                    </div>
                                    <div class="comments element" >
                                        <a href="#"> <i class="bi bi-chat"></i> 2k</a>
                                    </div>
                                    <div class="view element" >
                                        <a href="#"> <i class="bi bi-eye"></i> 1.3k</a>
                                    </div>
                                </div>

                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/2.jpg" alt="blog"></a>
                                </div>
                                <div class="post_content">
                                    <div class="post_content_inner" >
                                        <div class="post_intro">
                                            <p>Kestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce porttitor metus eget lectus consequat, sit amet feugiat magna vulputate. Phasellus iaculis tellus augue, at ultrices lacus efficitur a. Mauris a nibh erat. In sed massa sed erat consectetur ...</p>
                                        </div>
                                    </div>
                                    <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="read_more d-flex">
                                            <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                        </div>

                                        <div class="element post_share d-flex align-items-center gap-3" >
                                            <span class="share-btn">Share : </span>
                                            <ul class="share_list">
                                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                <li ><a href="#"><i class="ion-social-twitter"></i></a></li>
                                                <li ><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                                <li ><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                                <li ><a href="#"><i class="ion-social-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>


                        <!-- More Posts  -->
                        <div class="more_posts">
                            <div class="sub-section-heading"><span>Most Popular</span></div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <!-- Article Start -->
                                    <article class="blog_post style_two" >
                                        <div class="post_img" >
                                            <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                                <a href="{{asset('/')}}frontend/images/blog/sm1.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                            </div>
                                            <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm1.jpg" alt="img"></a>
                                            <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                        </div>
                                        <div class="post_header">
                                            <h1 class="post_title">
                                                <a href="blog-details.html">Cheese, salmon & rosemary salad</a>
                                            </h1>
                                        </div>
                                        <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                            <div class="author element d-flex align-items-center gap-1" >
                                                by <a href="about.html">Rachel Moor</a>
                                            </div>
                                            <div class="calendar element" >
                                                <a href="#">February 28, 2023</a>
                                            </div>
                                        </div>
                                        <div class="post_content">
                                            <div class="post_content_inner" >
                                                <div class="post_intro">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                                </div>
                                            </div>
                                            <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="read_more d-flex">
                                                    <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <!-- Article Start -->
                                    <article class="blog_post style_two" >
                                        <div class="post_img" >
                                            <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                                <a href="https://www.youtube.com/watch?v=g6lJiImhSCY" data-fancybox="video"><i class="bi bi-youtube"></i></a>
                                            </div>
                                            <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm2.jpg" alt="img"></a>
                                            <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                        </div>
                                        <div class="post_header">
                                            <h1 class="post_title">
                                                <a href="blog-details.html">Walnut green salad for weight loss</a>
                                            </h1>
                                        </div>
                                        <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                            <div class="author element d-flex align-items-center gap-1" >
                                                by <a href="about.html">Rachel Moor</a>
                                            </div>
                                            <div class="calendar element" >
                                                <a href="#">February 28, 2023</a>
                                            </div>
                                        </div>
                                        <div class="post_content">
                                            <div class="post_content_inner" >
                                                <div class="post_intro">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                                </div>
                                            </div>
                                            <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="read_more d-flex">
                                                    <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <!-- Article Start -->
                                    <article class="blog_post style_two" >
                                        <div class="post_img" >
                                            <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                                <a href="https://vimeo.com/49674259" data-fancybox="video"><i class="bi bi-vimeo"></i></a>
                                            </div>
                                            <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm3.jpg" alt="img"></a>
                                            <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                        </div>
                                        <div class="post_header">
                                            <h1 class="post_title">
                                                <a href="blog-details.html">Pork pasta noodles with bok choy</a>
                                            </h1>
                                        </div>
                                        <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                            <div class="author element d-flex align-items-center gap-1" >
                                                by <a href="about.html">Rachel Moor</a>
                                            </div>
                                            <div class="calendar element" >
                                                <a href="#">February 28, 2023</a>
                                            </div>
                                        </div>
                                        <div class="post_content">
                                            <div class="post_content_inner" >
                                                <div class="post_intro">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                                </div>
                                            </div>
                                            <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="read_more d-flex">
                                                    <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <!-- Article Start -->
                                    <article class="blog_post style_two" >
                                        <div class="post_img" >
                                            <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                                <a href="{{asset('/')}}frontend/images/blog/sm4.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                            </div>
                                            <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm4.jpg" alt="img"></a>
                                            <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                        </div>
                                        <div class="post_header">
                                            <h1 class="post_title">
                                                <a href="blog-details.html">Chicken  fried rice with bok choy</a>
                                            </h1>
                                        </div>
                                        <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                            <div class="author element d-flex align-items-center gap-1" >
                                                by <a href="about.html">Rachel Moor</a>
                                            </div>
                                            <div class="calendar element" >
                                                <a href="#">February 28, 2023</a>
                                            </div>
                                        </div>
                                        <div class="post_content">
                                            <div class="post_content_inner" >
                                                <div class="post_intro">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                                </div>
                                            </div>
                                            <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="read_more d-flex">
                                                    <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <!-- Add Start -->
                                <div class="col-lg-6 col-md-12 col-sm-12 mb-5 mb-lg-0">
                                    <div class="adv-post style_2 bg_image" style="background-image: url('{{asset('/')}}frontend/images/add-2.jpg');">
                                        <div class="order-form-wrapper">
                                            <form class="order_form" action="https://wpthemebooster.com/demo/themeforest/html/hashtag/cooking/subscribe.php">
                                                <h2 class="text-uppercase fw-normal text-white">Order my newest recipe book</h2>
                                                <p class="text-white">I Have written my Fifth Recipe Book for you. Place order here to get your copy</p>
                                                <div class="form-group mb-4">
                                                    <input type="text" name="name" class="form-control" placeholder="Name*" required="">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <input type="email" name="email" class="form-control" placeholder="E-mail*" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input class="btn bg-black" type="submit" name="submit" value="Order Now">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <!-- Article Start -->
                                    <article class="blog_post style_two" >
                                        <div class="post_img" >
                                            <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                                <a href="{{asset('/')}}frontend/images/blog/sm5.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                            </div>
                                            <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm5.jpg" alt="img"></a>
                                            <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                        </div>
                                        <div class="post_header">
                                            <h1 class="post_title">
                                                <a href="blog-details.html">Easy Sunday brunch ideas for your party</a>
                                            </h1>
                                        </div>
                                        <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                            <div class="author element d-flex align-items-center gap-1" >
                                                by <a href="about.html">Rachel Moor</a>
                                            </div>
                                            <div class="calendar element" >
                                                <a href="#">February 28, 2023</a>
                                            </div>
                                        </div>
                                        <div class="post_content">
                                            <div class="post_content_inner" >
                                                <div class="post_intro">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                                </div>
                                            </div>
                                            <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="read_more d-flex">
                                                    <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <!-- Article Start -->
                                    <article class="blog_post style_two mb-0" >
                                        <div class="post_img mt-0" >
                                            <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                                <a href="{{asset('/')}}frontend/images/blog/sm6.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                            </div>
                                            <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm6.jpg" alt="img"></a>
                                            <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                        </div>
                                        <div class="post_header">
                                            <h1 class="post_title">
                                                <a href="blog-details.html">Shrimp & salmon sushi in Japanese style </a>
                                            </h1>
                                        </div>
                                        <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                            <div class="author element d-flex align-items-center gap-1" >
                                                by <a href="about.html">Rachel Moor</a>
                                            </div>
                                            <div class="calendar element" >
                                                <a href="#">February 28, 2023</a>
                                            </div>
                                        </div>
                                        <div class="post_content">
                                            <div class="post_content_inner" >
                                                <div class="post_intro">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                                </div>
                                            </div>
                                            <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="read_more d-flex">
                                                    <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>

                        <!-- Vertical Posts -->
                        <div class="vertical_posts mr-top-60 mr-bottom-20">
                            <div class="sub-section-heading"><span>Recent posts</span></div>
                            <!-- Article Start -->
                            <article class="blog_post style_three" >
                                <div class="post_img mt-0 mb-4 mb-lg-0" >
                                    <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                        <a href="{{asset('/')}}frontend/images/blog/sm7.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                    </div>
                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm7.jpg" alt="img"></a>
                                </div>

                                <div class="post_content">
                                    <div class="post_content_inner" >
                                        <div class="post_header">
                                            <div class="tags"><a href="blog-category.html" class="bg-one">Salad</a></div>
                                            <h1 class="post_title">
                                                <a href="blog-details.html">Cherry blueberry waffle with honey</a>
                                            </h1>
                                        </div>
                                        <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                            <div class="author element d-flex align-items-center gap-1" >
                                                by <a href="about.html">Rachel Moor</a>
                                            </div>
                                            <div class="calendar element" >
                                                <a href="#">February 28, 2023</a>
                                            </div>
                                        </div>
                                        <div class="post_intro">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                        </div>
                                        <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="read_more d-flex">
                                                <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Article Start -->
                            <article class="blog_post style_three" >
                                <div class="post_img mt-0 mb-4 mb-lg-0" >
                                    <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                        <a href="{{asset('/')}}frontend/images/blog/sm8.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                    </div>
                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm8.jpg" alt="img"></a>
                                </div>

                                <div class="post_content">
                                    <div class="post_content_inner" >
                                        <div class="post_header">
                                            <div class="tags"><a href="blog-category.html" class="bg-one">Desert</a></div>
                                            <h1 class="post_title">
                                                <a href="blog-details.html">Caribbean style coral fish barbecue  </a>
                                            </h1>
                                        </div>
                                        <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                            <div class="author element d-flex align-items-center gap-1" >
                                                by <a href="about.html">Rachel Moor</a>
                                            </div>
                                            <div class="calendar element" >
                                                <a href="#">February 28, 2023</a>
                                            </div>
                                        </div>
                                        <div class="post_intro">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                        </div>
                                        <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="read_more d-flex">
                                                <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Article Start -->
                            <article class="blog_post style_three" >
                                <div class="post_img mt-0 mb-4 mb-lg-0" >
                                    <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                        <a href="{{asset('/')}}frontend/images/blog/sm9.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                    </div>
                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm9.jpg" alt="img"></a>
                                </div>

                                <div class="post_content">
                                    <div class="post_content_inner" >
                                        <div class="post_header">
                                            <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                            <h1 class="post_title">
                                                <a href="blog-details.html">Pork pasta noodles with bok choy</a>
                                            </h1>
                                        </div>
                                        <div class="post_footer p-0 d-flex justify-content-start gap-4 bg-transparent border-0">
                                            <div class="author element d-flex align-items-center gap-1" >
                                                by <a href="about.html">Rachel Moor</a>
                                            </div>
                                            <div class="calendar element" >
                                                <a href="#">February 28, 2023</a>
                                            </div>
                                        </div>
                                        <div class="post_intro">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                        </div>
                                        <div class="post_bottom d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="read_more d-flex">
                                                <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="pagination-div">
                            <ul class="pagination">
                                <li><a class="page-number current" href="#">1</a></li>
                                <li><a class="page-number" href="#">2</a></li>
                                <li><a class="page-number" href="#">3</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Aside -->
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <!-- Sidebar -->
                        <div class="sidebar">
                            <div id="search" class="widget widget_search">
                                <div class="sidebar_search">
                                    <form class="search_form" action="https://wpthemebooster.com/demo/themeforest/html/hashtag/cooking/search.php">
                                        <input type="text" name="search" class="keyword form-control" placeholder="Search">
                                        <button type="submit" class="btn"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div id="custom_1" class="widget widget_custom bg-nine p-4">
                                <h4 class="widget_title"><span><i class="bi bi-hash"></i>About Author</span></h4>
                                <div class="sidebar_author">
                                    <img src="{{asset('/')}}frontend/images/author_full.jpg" alt="img">
                                    <h5>Rachel Joyena Moor</h5>
                                    <h6>Chef & Blogger</h6>
                                    <p class="intro">Author of this blog Rachel Moor is	a travel enthusiast, writer, food expert & international photographer</p>
                                    <img class="signature" src="{{asset('/')}}frontend/images/signature.png" alt="img">
                                </div>
                            </div>

                            <div id="categories-1" class="widget widget_categories">
                                <h4 class="widget_title"><span><i class="bi bi-hash"></i>Categories</span></h4>
                                <div class="sidebar_categories">
                                    <ul class="category_list">
                                        <li class="active"><a href="blog-category.html">Photography</a> (5)</li>
                                        <li><a href="#">Travel</a> (7)</li>
                                        <li><a href="blog-category.html">Lifestyle</a> (4)</li>
                                        <li><a href="blog-category.html">Food</a> (2)</li>
                                        <li><a href="blog-category.html">Life Tips</a> (4)</li>
                                    </ul>
                                </div>
                            </div>

                            <div id="custom_2" class="widget widget_custom bg_image px-3 pt-5 pb-4"  style="background-image: url('{{asset('/')}}frontend/images/bg/bg-5.jpg');">
                                <h4 class="widget_title text-white"><span><i class="bi bi-hash"></i>Follow Me</span></h4>
                                <div class="sidebar_social">
                                    <ul class="share_list d-flex align-items-center justify-content-center gap-4">
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li ><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li ><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                                        <li ><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                        <li ><a href="#"><i class="ion-social-youtube"></i></a></li>
                                    </ul>

                                    <div class="sidebar_newsletter">
                                        <form class="newsletter_form" action="https://wpthemebooster.com/demo/themeforest/html/hashtag/cooking/subscribe.php">
                                            <h4>Subscribe to <br> GET Yummy RECIPES</h4>
                                            <input type="text" name="subscribe" class="form-control" placeholder="Your E-mail Address">
                                            <button type="submit" class="btn">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="recent-posts-1" class="widget widget_recent_posts">
                                <h4 class="widget_title"><span><i class="bi bi-hash"></i>Recent Posts</span></h4>
                                <div class="sidebar_recent_posts">
                                    <ul class="recent_posts_list">
                                        <li class="post_item">
                                            <div class="post_thumbnail">
                                                <img class="primary_img" src="{{asset('/')}}frontend/images/blog/thumbnail1.jpg" alt="img">
                                            </div>
                                            <div class="post_content">
                                                <h6><span class="date">February 28, 2023</span></h6>
                                                <h5><a href="blog-details-2.html">My Photo dump form my Bahamas trip  </a></h5>
                                            </div>
                                        </li>
                                        <li class="post_item">
                                            <div class="post_thumbnail">
                                                <img class="primary_img" src="{{asset('/')}}frontend/images/blog/thumbnail2.jpg" alt="img">
                                            </div>
                                            <div class="post_content">
                                                <h6><span class="date">February 28, 2023</span></h6>
                                                <h5><a href="blog-details-2.html">I fly high with my friends</a></h5>
                                            </div>
                                        </li>
                                        <li class="post_item">
                                            <div class="post_thumbnail">
                                                <img class="primary_img" src="{{asset('/')}}frontend/images/blog/thumbnail3.jpg" alt="img">
                                            </div>
                                            <div class="post_content">
                                                <h6><span class="date">February 28, 2023</span></h6>
                                                <h5><a href="blog-details-2.html">A bule sky kind of afternoon </a></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="custom_4" class="widget widget_custom">
                                <div class="sidebar_add text-center">
                                    <img src="{{asset('/')}}frontend/images/add.jpg" alt="img">
                                </div>
                            </div>

                            <div id="tags-1" class="widget widget_tag_cloud">
                                <h4 class="widget_title"><span><i class="bi bi-hash"></i>Tag Cloud</span></h4>
                                <div class="sidebar_tags">
                                    <ul class="tag_list">
                                        <li><a href="#">Appetizer</a></li>
                                        <li><a href="#">Desert</a></li>
                                        <li><a href="blog-category.html">Food</a></li>
                                        <li><a href="#">Salad</a></li>
                                        <li><a href="#">Recipe</a></li>
                                        <li><a href="#">Cooking</a></li>
                                        <li><a href="#">Drink</a></li>
                                        <li><a href="#">Main Course</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div id="custom_3" class="widget widget_custom">
                                <h4 class="widget_title"><span><i class="bi bi-hash"></i>Shop</span></h4>
                                <div class="sidebar_shop">
                                    <div class="swiper swiper_sidebar_shop_slider">
                                        <div class="swiper-wrapper">
                                            <!-- Slide 1 -->
                                            <div class="swiper-slide">
                                                <div class="product_item">
                                                    <div class="product_thumb">
                                                        <div class="product_imagebox">
                                                            <span class="badge-new">New</span>
                                                            <img class="primary_img" src="{{asset('/')}}frontend/images/shop/1.jpg" alt="img">
                                                            <div class="cart_button">
                                                                <a href="#" class="btn">
                                                                    Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product_item_inner">
                                                            <div class="label_text">
                                                                <h4 class="product_item_name"><a href="shop-product.html">Boho Tot Bag</a> <span class="product_item_price">$19.00</span></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Slide 2 -->
                                            <div class="swiper-slide">
                                                <div class="product_item">
                                                    <div class="product_thumb">
                                                        <div class="product_imagebox">
                                                            <img class="primary_img" src="{{asset('/')}}frontend/images/shop/2.jpg" alt="img">
                                                            <div class="cart_button">
                                                                <a href="#" class="btn">
                                                                    Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product_item_inner">
                                                            <div class="label_text">
                                                                <h4 class="product_item_name"><a href="shop-product.html">Boho Tot Bag</a> <span class="product_item_price">$19.00</span></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Slide 3 -->
                                            <div class="swiper-slide">
                                                <div class="product_item">
                                                    <div class="product_thumb">
                                                        <div class="product_imagebox">
                                                            <span class="badge-new">Sale</span>
                                                            <img class="primary_img" src="{{asset('/')}}frontend/images/shop/3.jpg" alt="img">
                                                            <div class="cart_button">
                                                                <a href="#" class="btn">
                                                                    Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product_item_inner">
                                                            <div class="label_text">
                                                                <h4 class="product_item_name"><a href="shop-product.html">Boho Tot Bag</a> <span class="product_item_price">$19.00</span></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Swiper Pagination -->
                                        <!-- <div class="swiper-pagination"></div> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery -->
        <div class="section our_gallery bg_image" style="background-image: url('{{asset('/')}}frontend/images/bg/bg-2.jpg');">
            <div class="container">
                <div class="sub-section-heading text-white"><span>Our Gallery</span></div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="post_img text-center mb-lg-0">
                            <img src="{{asset('/')}}frontend/images/gallery/1.jpg" alt="img">
                            <a href="{{asset('/')}}frontend/images/gallery/1.jpg" data-fancybox="gallery" class="popup"> <i class="bi bi-plus"></i> </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="post_img text-center">
                            <img src="{{asset('/')}}frontend/images/gallery/2.jpg" alt="img">
                            <a href="{{asset('/')}}frontend/images/gallery/2.jpg" data-fancybox="gallery" class="popup"> <i class="bi bi-plus"></i> </a>
                        </div>
                        <div class="post_img text-center mb-lg-0">
                            <img src="{{asset('/')}}frontend/images/gallery/3.jpg" alt="img">
                            <a href="{{asset('/')}}frontend/images/gallery/3.jpg" data-fancybox="gallery" class="popup"> <i class="bi bi-plus"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="post_img text-center">
                            <img src="{{asset('/')}}frontend/images/gallery/4.jpg" alt="img">
                            <a href="{{asset('/')}}frontend/images/gallery/4.jpg" data-fancybox="gallery" class="popup"> <i class="bi bi-plus"></i> </a>
                        </div>
                        <div class="post_img text-center mb-0">
                            <img src="{{asset('/')}}frontend/images/gallery/5.jpg" alt="img">
                            <a href="{{asset('/')}}frontend/images/gallery/5.jpg" data-fancybox="gallery" class="popup"> <i class="bi bi-plus"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Subscribe Newsletter  -->
        <div class="newsletter bg_image" style="background-image: url('{{asset('/')}}frontend/images/bg/bg-3.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                        <div class="newsletter_inner">
                            <div class="newsletter_header">
                                <h3>For Best Recipes <br> Subscribe to newsletter!</h3>
                                <h5>Subscribe to Hashtag Blog to get amazing recipes & cooking tips everyweek</h5>
                            </div>
                            <form class="newsletter_form flex-1" method="post" action="https://wpthemebooster.com/demo/themeforest/html/hashtag/cooking/subscription.php">
                                <div class="form_group">
                                    <input class="form-control" type="email" placeholder="Your Email Address" name="ne" required="">
                                    <button type="submit" class="btn bg-one">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
