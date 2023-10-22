@extends('frontend.master')
@section('title', 'Blog List')
@section('body')

    <!-- Page Header -->
    <div class="page-header bg_image" style="background-image: url({{asset('/')}}frontend/images/bg/bg-2.jpg);">
        <div class="page-header-content">
            <div class="container">
                <h2 class="heading">Post List</h2>
            </div>
        </div>
    </div>

    <div class="main_wrapper">

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-sm-7">
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

                        <!-- Article Start -->
                        <article class="blog_post style_three" >
                            <div class="post_img mt-0 mb-4 mb-lg-0" >
                                <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                    <a href="{{asset('/')}}frontend/images/blog/sm7.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                </div>
                                <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm10.jpg" alt="img"></a>
                            </div>

                            <div class="post_content">
                                <div class="post_content_inner" >
                                    <div class="post_header">
                                        <div class="tags"><a href="blog-category.html" class="bg-one">Salad</a></div>
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

                        <!-- Article Start -->
                        <article class="blog_post style_three" >
                            <div class="post_img mt-0 mb-4 mb-lg-0" >
                                <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                    <a href="{{asset('/')}}frontend/images/blog/sm8.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                </div>
                                <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm11.jpg" alt="img"></a>
                            </div>

                            <div class="post_content">
                                <div class="post_content_inner" >
                                    <div class="post_header">
                                        <div class="tags"><a href="blog-category.html" class="bg-one">Desert</a></div>
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

                        <!-- Article Start -->
                        <article class="blog_post style_three" >
                            <div class="post_img mt-0 mb-4 mb-lg-0" >
                                <div class="post_type position-absolute end-0 top-15 rounded-circle mt-2 me-2">
                                    <a href="{{asset('/')}}frontend/images/blog/sm9.jpg" data-fancybox="images"><i class="bi bi-images"></i></a>
                                </div>
                                <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/sm12.jpg" alt="img"></a>
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

                        <!-- Pagination  -->
                        <div class="pagination-div">
                            <ul class="pagination d-flex align-items-center justify-content-center">
                                <li><a class="page-number current" href="#">1</a></li>
                                <li><a class="page-number" href="#">2</a></li>
                                <li><a class="page-number" href="#">3</a></li>
                                <li><a href="#"><i class="ion-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sidebar-->
                    <div class="col-lg-3 col-md-5 col-sm-5">
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

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
