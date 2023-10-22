@extends('frontend.master')
@section('title', 'Blog Detail')

@section('body')


    <div class="main_wrapper">

        <div class="blog_details section pb-0">
            <div class="container">

                <article class="blog_post" >
                    <div class="post_header">
                        <div class="tags justify-content-center"><a href="blog-category.html" class="bg-one">{{$blog->category->name}}</a></div>
                        <h1 class="post_title text-center">
                            <a href="{{route('blog-detail', ['id' => $blog->id])}}">{{$blog->title}}</a>
                        </h1>
                    </div>
                    <div class="post_footer p-0 mr-bottom-30 d-flex justify-content-center gap-4 bg-transparent border-0">
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
                    <h4 class="text-center text-success mb-3">{{session('message')}}</h4>

                    <div class="video_post">
                        <div class="ytube_video">

                            <div class="video_post_content">
                                <img src="{{asset($blog->image)}}" alt="blog" height="680" width="620">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1">
                            <div class="post_content mr-top-30">
                                <div class="post_content_inner">
                                    <div class="post_intro">

                                    </div>



                                    <div class="fulltext">

                                        <p>{!! $blog->description !!}</p>
                                        <div class="liflet_banner bg_image p-5" style="background-image: url('{{asset('/')}}frontend/images/bg/bg-8.jpg');">
                                            <div class="liflet_inner text-center">
                                                <h2>Did you make this recipe?</h2>
                                                <p>Tag @hashtag on socialmedia and be sure to leave a review <br>
                                                    on the blog post </p>
                                                <div class="btn-group mt-0">
                                                    <a href="#" class="btn bg-one text-uppercase">Tag me on Instagram</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post_share text-center mt-5">
                                            <ul class="share_list justify-content-center">
                                                <li>Share:</li>
                                                <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                <li class="twitter" ><a href="#"><i class="ion-social-twitter"></i></a></li>
                                                <li class="dribbble" ><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                                                <li class="pinterest" ><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                                                <li class="instagram" ><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                                <li class="whatsapp"><a href="#"><i class="ion-social-whatsapp-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Blog Post Navigation -->
                                <div class="post_navigation d-flex align-items-center justify-content-between flex-wrap flex-lg-nowrap">
                                    <!-- Previous Post -->
                                    <div class="previous_post d-flex align-items-center gap-3 mb-4 mb-lg-0">
                                        <div class="prev_arrow"> <i class="bi bi-chevron-left"></i> </div>
                                        <div class="prev_item">
                                            <div class="prev_text text-uppercase">Previous Post</div>
                                            <h3><a href="blog-details.html">Beef rib Stake rare medium</a></h3>
                                        </div>
                                    </div>

                                    <!-- Next Post  -->
                                    <div class="next_post d-flex align-items-center gap-3">
                                        <div class="next_arrow order-2"> <i class="bi bi-chevron-right"></i> </div>
                                        <div class="next_item text-end">
                                            <div class="next_text text-uppercase">Next Post</div>
                                            <h3><a href="blog-details-2.html">Salmon, egg & avocado Toast</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Author Section -->
                            <div class="author_div d-flex align-items-center flex-wrap flex-lg-nowrap">
                                <div class="author">
                                    <img alt="img" src="{{asset('/')}}frontend/images/author_sm.png" class="avatar">
                                </div>
                                <div class="author-block">
                                    <div class="author_designation">Blogger</div>
                                    <h5 class="author_name">Rachel Joyena Moor</h5>
                                    <p class="author_intro mb-0">Author of this blog Rachel Moor is a travel enthusiast, writer &
                                        photographer. She share his activity in this blog.</p>
                                </div>
                            </div>

                            <!-- Related Posts -->
                            <div class="related_posts">
                                <div class="sub-section-heading left-align"><span>You can also try</span></div>
                                <div class="swiper swiper_related_posts">
                                    <div class="swiper-wrapper">
                                        <!-- Slide 1 -->
                                        <div class="swiper-slide">
                                            <article class="blog_post style_two" >
                                                <div class="post_img mt-0" >
                                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/lg1.jpg" alt="img"></a>
                                                </div>
                                                <div class="post_header">
                                                    <h1 class="post_title">
                                                        <a href="blog-details.html">Beef rib Stake rare medium</a>
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
                                            </article>
                                        </div>

                                        <!-- Slide 2 -->
                                        <div class="swiper-slide">
                                            <article class="blog_post style_two" >
                                                <div class="post_img mt-0" >
                                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/lg2.jpg" alt="img"></a>
                                                </div>
                                                <div class="post_header">
                                                    <h1 class="post_title">
                                                        <a href="blog-details.html">Deep Fried jamboo Shrimp </a>
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
                                            </article>
                                        </div>

                                        <!-- Slide 3 -->
                                        <div class="swiper-slide">
                                            <article class="blog_post style_two" >
                                                <div class="post_img mt-0" >
                                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/lg3.jpg" alt="img"></a>
                                                </div>
                                                <div class="post_header">
                                                    <h1 class="post_title">
                                                        <a href="blog-details.html">Salmon, egg & avocado Toast</a>
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
                                            </article>
                                        </div>

                                        <!-- Slide 4 -->
                                        <div class="swiper-slide">
                                            <article class="blog_post style_two" >
                                                <div class="post_img mt-0" >
                                                    <a href="blog-details.html"><img src="{{asset('/')}}frontend/images/blog/lg2.jpg" alt="img"></a>
                                                </div>
                                                <div class="post_header">
                                                    <h1 class="post_title">
                                                        <a href="blog-details.html">Fish Stake rare medium</a>
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
                                            </article>
                                        </div>
                                    </div>

                                    <!-- Swiper Navigation -->
                                    <div class="swiper_navigation">
                                        <div class="swiper-button-next"><i class="bi bi-chevron-right"></i></div>
                                        <div class="swiper-button-prev"><i class="bi bi-chevron-left"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Comments section -->
                            <div class="comments-area">
                                <h3 class="comments-title">Comments</h3>
                                <ul class="comment-list">
                                    <li class="comment even thread-even depth-1">
                                        <div class="commenter-block">
                                            <div class="comment-avatar">
                                                <img alt="img" src="{{asset('/')}}frontend/images/blog/commenter1.png" class="avatar">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-date">February 14, 2023</div>
                                                <div class="comment-author-name">Rachel Joyena Moor</div>
                                                <div class="comment-author-comment">
                                                    <p>Aenean sollicitudin, lorem auci elit consequat ipsutissem niuis sed odio sit amet
                                                        vulputate cursus nibh a sit amet ullamcorper.</p>
                                                </div>
                                                <div class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></div>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ul>
                                <div class="comments-pagination">
                                    <a class="page-numbers" href="#">1</a>
                                    <span aria-current="page" class="page-numbers current">2</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </article>


            </div>

            <!-- Comment Form  -->
            <div class="comment-respond" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <h3 class="comment-reply-title">Leave A Comment</h3>
                            @if(Session::get('visitor_id'))
                            <form action="{{route('comment.store')}}" class="comment-form" method="post">
                                @csrf
                                <p class="logged-in-as">Your email address will not be published. Required fields are marked *</p>

                                <div class="recipe_rating d-flex align-items-center gap-3 mt-4 mb-3">
                                    <h5>Your Recipe Rating: </h5>
                                    <ul class="list-unstyled px-0 m-0 d-flex align-items-center gap-1">
                                        <li><a href="#"> <i class="bi bi-star"></i> </a></li>
                                        <li><a href="#"> <i class="bi bi-star"></i> </a></li>
                                        <li><a href="#"> <i class="bi bi-star"></i> </a></li>
                                        <li><a href="#"> <i class="bi bi-star"></i> </a></li>
                                        <li><a href="#"> <i class="bi bi-star"></i> </a></li>
                                    </ul>
                                </div>
                                <div class="form-container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea name="comment" class="form-control" placeholder="Comment*" required></textarea>
                                                <input type="hidden" value="{{$blog->id}}" name="blog_id">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-check d-inline-block w-100">
                                                <input class="form-check-input" type="checkbox" value="" id="savemail">
                                                <label class="form-check-label" for="savemail">
                                                    Save my name, email, and website in this browser
                                                </label>
                                            </div>
                                            <div class="btn-group mt-3">
                                                <input class="btn dark" type="submit" value="Post Comment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @else
                                <div class="btn-group mt-3">
                                    <a href="{{route('user-login')}}" class="btn dark">Login For Comment</a>
                                </div>
                            @endif
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
