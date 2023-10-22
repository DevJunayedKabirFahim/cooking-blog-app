@extends('frontend.master')
@section('title', 'About Us')

@section('body')

    <div class="page-header bg_image" style="background-image: url('{{asset('/')}}frontend/images/bg/bg-2.jpg');">
        <div class="page-header-content">
            <div class="container">
                <h2 class="heading">About Author</h2>
            </div>
        </div>
    </div>

    <div class="main_wrapper">
        <div class="author_profile section">
            <div class="container">
                <div class="author_profile_inner">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="author_image">
                                <img src="{{asset('/')}}frontend/images/author.jpg" alt="author">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="author_content">
                                <div class="author_content_inner">
                                    <h2 class="author_name">Hi, I am Rachel Moor</h2>
                                    <div class="author_intro">
                                        <p >A new day come with new hope, new thoughts and new experience. In one life its not easy to always find the right insight in right time. People often live their life full without knowing what the actually wanted to be. A new day come with new hope, new thoughts and new experience.</p>
                                        <p >New thoughts and new experience. In one life its not easy to always find the right insight in right time. People often live their life without knowing what he actually wanted to be. A new day come with new hope.</p>
                                    </div>
                                    <div class="author_footer">
                                        <div class="author_signature"><img src="{{asset('/')}}frontend/images/signature.png" alt="signature"></div>
                                        <div class="post_share">
                                            <ul class="share_list">
                                                <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                <li class="twitter" ><a href="#"><i class="ion-social-twitter"></i></a></li>
                                                <li class="dribbble" ><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                                                <li class="instagram" ><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="postby_author">
                    <h4 class="widget_title"><span><i class="bi bi-hash"></i>Articles By Author</span></h4>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <!-- Article Start -->
                            <article class="blog_post style_two" >
                                <div class="post_img mt-0" >
                                    <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                        <a href="{{asset('/')}}frontend/images/blog/sm1.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                    </div>
                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm1.jpg" alt="img"></a>
                                    <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                </div>
                                <div class="post_header">
                                    <h1 class="post_title">
                                        <a href="blog-details.html">Pork pasta noodles with bok choy</a>
                                    </h1>
                                </div>
                                <div class="post_content">
                                    <div class="post_content_inner" >
                                        <div class="post_intro">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                        </div>
                                    </div>
                                    <div class="post_bottom d-flex align-items-center justify-content-between">
                                        <div class="read_more d-flex">
                                            <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- Article Start -->
                            <article class="blog_post style_two" >
                                <div class="post_img mt-0" >
                                    <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                        <a href="https://www.youtube.com/watch?v=g6lJiImhSCY" data-fancybox="video"><i class="bi bi-youtube"></i></a>
                                    </div>
                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm2.jpg" alt="img"></a>
                                    <div class="tags"><a href="blog-category.html" class="bg-one">Appetizer</a></div>
                                </div>
                                <div class="post_header">
                                    <h1 class="post_title">
                                        <a href="blog-details.html">Pork pasta noodles with bok choy</a>
                                    </h1>
                                </div>
                                <div class="post_content">
                                    <div class="post_content_inner" >
                                        <div class="post_intro">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                        </div>
                                    </div>
                                    <div class="post_bottom d-flex align-items-center justify-content-between">
                                        <div class="read_more d-flex">
                                            <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- Article Start -->
                            <article class="blog_post style_two" >
                                <div class="post_img mt-0" >
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
                                <div class="post_content">
                                    <div class="post_content_inner">
                                        <div class="post_intro">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas...</p>
                                        </div>
                                    </div>
                                    <div class="post_bottom d-flex align-items-center justify-content-between">
                                        <div class="read_more d-flex">
                                            <a href="blog-details.html" data-read="Continue Reading"><span>Continue Reading</span> <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
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
