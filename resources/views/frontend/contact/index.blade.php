@extends('frontend.master')

@section('title', 'Contact Us')

@section('body')

    <div class="page-header bg_image" style="background-image: url('{{asset('/')}}frontend/images/bg/bg-2.jpg');">
        <div class="page-header-content">
            <div class="container">
                <h2 class="heading">Contact Us</h2>
            </div>
        </div>
    </div>


    <div class="main_wrapper">
        <div class="contact section pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="contact_address">
                            <div class="section_header">
                                <h1 class="section_title">Contact Me</h1>
                                <p>For any of your query, contact Me</p>
                            </div>
                            <div class="contact_info">
                                <ul class="contact_list">
                                    <li class="address"><i class="bi bi-geo-alt"></i> 231 Salt Lake city, Utah, USA</li>
                                    <li class="phone"><i class="bi bi-phone"></i> +1234 567 890</li>
                                    <li class="email"><i class="bi bi-envelope-fill"></i> hashtagblog@gmail.com</li>
                                </ul>
                            </div>
                            <div class="post_share mt-5">
                                <ul class="share_list">
                                    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li class="twitter" ><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li class="dribbble" ><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                                    <li class="instagram" ><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="contactus" >
                            <div class="section_header">
                                <h1 class="section_title">Send Us Mail</h1>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <form class="contact_form" action="https://wpthemebooster.com/demo/themeforest/html/hashtag/cooking/register.php" method="post">
                                <div class="form-container">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Text Here*" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Name*" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="E-mail*" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group mb-5">
                                                <input class="btn" type="submit"  name="submit" value="Contact">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Google Map  -->
            <div class="gmapbox mt-5">
                <div id="googleMap" class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7303.30184393501!2d90.3818125935791!3d23.759824500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9c9d8e69699%3A0x58c424d9022b0453!2sBITM%20Lab%20(401-402)!5e0!3m2!1sen!2sbd!4v1696857938800!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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
