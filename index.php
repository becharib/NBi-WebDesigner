<?php
/**
 * Created by PhpStorm.
 * User: Bilal
 * Date: 08/02/2017
 * Time: 11:25
 */
?>

<!DOCTYPE html>
<!-- Cas où le navigateur est IE -->
<?php include "include/internet_explorer.php"; ?>

<head>
    <!-- Meta -->
    <?php include 'include/meta.php'; ?>

    <!-- Link -->
    <?php include 'include/link.php'; ?>

    <!-- CSS général -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">
</head>

<body id="body">

<!-- Chargement -->
<div id="preloader">
    <img src="img/preloader.gif" alt="Preloader">
</div>
<!-- Fin Chargement -->

<!-- Navbar -->
<?php include 'include/navbar_index.php'; ?>

<!--
Home Slider
==================================== -->

<section id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Nb Slides -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Fin Nb Slides -->

        <!-- Wrapper Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- 1ere Slide -->
            <div class="item active" style="background-image: url(img/fond6.jpeg);">
                <div class="carousel-caption">
                    <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Brandi</span>!
                    </h2>
                    <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/creative</span>
                        one page template.</h3>
                    <p data-wow-duration="1000ms" class="wow slideInRight animated">We are a team of professionals</p>

                    <ul class="social-links text-center wow bounceInUp animated">
                        <li><a href=""><i class="fa fa-linkedin fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-viadeo fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Fin 1ere Slide -->

            <!-- 2e Slide -->
            <div class="item" style="background-image: url(img/fond3.jpg);">
                <div class="carousel-caption">
                    <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Team</span>!
                    </h2>
                    <h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/creative</span>
                        one page template.</h3>
                    <p data-wow-duration="500ms" class="wow slideInRight animated">We are a team of professionals</p>

                    <ul class="social-links text-center wow bounceInUp animated">
                        <li><a href=""><i class="fa fa-linkedin fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-viadeo fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Fin 2e Slide -->

            <!-- 3e Slide -->
            <div class="item" style="background-image: url(img/fond7.jpg);">
                <div class="carousel-caption">
                    <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Team</span>!
                    </h2>
                    <h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/creative</span>
                        one page template.</h3>
                    <p data-wow-duration="500ms" class="wow slideInRight animated">We are a team of professionals</p>

                    <ul class="social-links text-center wow bounceInUp animated">
                        <li><a href=""><i class="fa fa-linkedin fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-viadeo fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Fin 3e Slide -->

        </div>
        <!-- Fin Wrapper Slides -->

    </div>
</section>

<!--
End Home SliderEnd
==================================== -->

<!--
Features
==================================== -->

<section id="prestations" class="features">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <h2>Prestations</h2>
                <div class="devider"><i class="fa fa-star-o fa-lg"></i></div>
            </div>

            <!-- service item -->
            <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-github fa-2x"></i>
                    </div>

                    <div class="service-desc">
                        <h3>Branding</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>
                </div>
            </div>
            <!-- end service item -->

            <!-- service item -->
            <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-pencil fa-2x"></i>
                    </div>

                    <div class="service-desc">
                        <h3>Development</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>
                </div>
            </div>
            <!-- end service item -->

            <!-- service item -->
            <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-bullhorn fa-2x"></i>
                    </div>

                    <div class="service-desc">
                        <h3>Consulting</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>
                </div>
            </div>
            <!-- end service item -->

        </div>
    </div>
</section>

<!--
End Features
==================================== -->


<!--
Our Works
==================================== -->

<section id="works" class="works clearfix">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center wow bounceIn animated">
                <h2>Works</h2>
                <div class="devider"><i class="fa fa-star-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center wow bounceInLeft animated">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>

            <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                <ul class="text-center">
                    <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                    <li><a href="javascript:;" data-filter=".branding" class="filter">Branding</a></li>
                    <li><a href="javascript:;" data-filter=".web" class="filter">web</a></li>
                    <li><a href="javascript:;" data-filter=".logo-design" class="filter">logo design</a></li>
                    <li><a href="javascript:;" data-filter=".photography" class="filter">photography</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="project-wrapper wow zoomIn animated">

        <figure class="mix work-item branding">
            <img src="img/works/item-1.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-1.jpg"><i
                        class="fa fa-eye fa-lg"></i></a>
                <h4>Labore et dolore magnam</h4>
                <p>Photography</p>
            </figcaption>
        </figure>

        <figure class="mix work-item web">
            <img src="img/works/item-2.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-2.jpg"><i
                        class="fa fa-eye fa-lg"></i></a>
                <h4>Labore et dolore magnam</h4>
                <p>Photography</p>
            </figcaption>
        </figure>

        <figure class="mix work-item logo-design">
            <img src="img/works/item-3.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-3.jpg"><i
                        class="fa fa-eye fa-lg"></i></a>
                <h4>Labore et dolore magnam</h4>
                <p>Photography</p>
            </figcaption>
        </figure>

        <figure class="mix work-item photography">
            <img src="img/works/item-4.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-4.jpg"><i
                        class="fa fa-eye fa-lg"></i></a>
                <h4>Labore et dolore magnam</h4>
                <p>Photography</p>
            </figcaption>
        </figure>

        <figure class="mix work-item branding">
            <img src="img/works/item-5.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-5.jpg"><i
                        class="fa fa-eye fa-lg"></i></a>
                <h4>Labore et dolore magnam</h4>
                <p>Photography</p>
            </figcaption>
        </figure>

        <figure class="mix work-item web">
            <img src="img/works/item-6.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-6.jpg"><i
                        class="fa fa-eye fa-lg"></i></a>
                <h4>Labore et dolore magnam</h4>
                <p>Photography</p>
            </figcaption>
        </figure>

        <figure class="mix work-item logo-design">
            <img src="img/works/item-7.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-7.jpg"><i
                        class="fa fa-eye fa-lg"></i></a>
                <h4>Labore et dolore magnam</h4>
                <p>Photography</p>
            </figcaption>
        </figure>

        <figure class="mix work-item photography">
            <img src="img/works/item-8.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-8.jpg"><i
                        class="fa fa-eye fa-lg"></i></a>
                <h4>Labore et dolore magnam</h4>
                <p>Photography</p>
            </figcaption>
        </figure>

    </div>


</section>

<!--
End Our Works
==================================== -->

<!--
Meet Our Team
==================================== -->

<section id="team" class="team">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                <h2>Meet Our Team</h2>
                <div class="devider"><i class="fa fa-star-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>

            <!-- single member -->
            <figure class="team-member col-md-6 col-sm-6 col-xs-12 text-center wow zoomIn animated">
                <div class="member-thumb is-centered">
                    <img src="img/team/member-1.png" alt="Team Member" class="img-responsive">
                    <figcaption class="overlay">
                        <h5>voluptatem quia voluptas </h5>
                        <p>sit aspernatur aut odit aut fugit,</p>
                        <ul class="social-links text-center">
                            <li><a href=""><i class="fa fa-linkedin fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-viadeo fa-lg"></i></a></li>
                        </ul>
                    </figcaption>
                </div>
                <h4>John Filmr Doe</h4>
                <span>Managing Director</span>
            </figure>
            <!-- end single member -->

            <!-- single member -->
            <figure class="team-member col-md-6 col-sm-6 col-xs-12 text-center wow zoomIn animated">
                <div class="member-thumb is-centered">
                    <img src="img/team/member-2.png" alt="Team Member" class="img-responsive">
                    <figcaption class="overlay">
                        <h5>voluptatem quia voluptas </h5>
                        <p>sit aspernatur aut odit aut fugit,</p>
                        <ul class="social-links text-center">
                            <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-viadeo fa-lg"></i></a></li>
                        </ul>
                    </figcaption>
                </div>
                <h4>Martin Matrone</h4>
                <span>Lead Developer</span>
            </figure>
            <!-- end single member -->

        </div>
    </div>
</section>

<!--
End Meet Our Team
==================================== -->

<!--
Some fun facts
==================================== -->

<section id="facts" class="facts">
    <div class="parallax-overlay">
        <div class="container">
            <div class="row number-counters">

                <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                    <h2 class="titresectionchiffres">Some Fun Facts</h2>
                    <div class="devider"><i class="fa fa-star-o fa-lg"></i></div>
                </div>

                <!-- first count item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="counters-item">
                        <i class="fa fa-clock-o fa-3x"></i>
                        <strong data-to="3200">0</strong>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <p>Hours of Work</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                     data-wow-delay="300ms">
                    <div class="counters-item">
                        <i class="fa fa-users fa-3x"></i>
                        <strong data-to="120">0</strong>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                     data-wow-delay="600ms">
                    <div class="counters-item">
                        <i class="fa fa-rocket fa-3x"></i>
                        <strong data-to="360">0</strong>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <p> Projects Delivered </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                     data-wow-delay="900ms">
                    <div class="counters-item">
                        <i class="fa fa-trophy fa-3x"></i>
                        <strong data-to="6454">0</strong>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <p>Awards Won</p>
                    </div>
                </div>
                <!-- end first count item -->

            </div>
        </div>
    </div>
</section>

<!--
End Some fun facts
==================================== -->


<!--
Contact Us
==================================== -->

<section id="contact" class="contact">
    <div class="container">
        <div class="row mb50">

            <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                <h2>Let’s Discuss</h2>
                <div class="devider"><i class="fa fa-star-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>

            <!-- contact address -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                <div class="contact-address">
                    <h3>Cras at ultrices erat, sed vulputate!</h3>
                    <p>2345 Setwant natrer, 1234,</p>
                    <p>Washington. United States.</p>
                    <p>(401) 1234 567</p>
                </div>
            </div>
            <!-- end contact address -->

            <!-- contact form -->
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms"
                 data-wow-delay="300ms">
                <div class="contact-form">
                    <h3>Say hello!</h3>
                    <form action="#" id="contact-form">
                        <div class="input-group name-email">
                            <div class="input-field">
                                <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="input-group">
                            <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                        </div>
                        <div class="input-group">
                            <input type="submit" id="form-submit" class="pull-right" value="Send message">
                        </div>
                    </form>
                </div>
            </div>
            <!-- end contact form -->

            <!-- footer social links -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms"
                 data-wow-delay="600ms">
                <ul class="footer-social">
                    <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
                    <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
                    <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
                </ul>
            </div>
            <!-- end footer social links -->

        </div>
    </div>

    <!-- Google map -->
    <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
    <!-- End Google map -->

</section>

<!--
End Contact Us
==================================== -->


<footer id="footer" class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                <div class="footer-single">
                    <img src="img/footer-logo.png" alt="">
                    <p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="300ms">
                <div class="footer-single">
                    <h6>Subscribe </h6>
                    <form action="#" class="subscribe">
                        <input type="text" name="subscribe" id="subscribe">
                        <input type="submit" value="&#8594;" id="subs">
                    </form>
                    <p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="600ms">
                <div class="footer-single">
                    <h6>Explore</h6>
                    <ul>
                        <li><a href="#">Inside Us</a></li>
                        <li><a href="#">Flickr</a></li>
                        <li><a href="#">Google</a></li>
                        <li><a href="#">Forum</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="900ms">
                <div class="footer-single">
                    <h6>Support</h6>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Market Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Pressroom</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 wow bounceInUp animated">
                <p class="copyright text-center">
                    Copyright © 2017 NBi - Communication. Tous droits réservés. Conçu et developpé par Bilal Bechari et
                    Nicolas Jourdan.
                </p>
            </div>
        </div>
    </div>
</footer>

<a href="javascript:void(0);" id="back-top" class="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

<!-- Script -->
<?php include "include/script.php";?>

<script>
    var wow = new WOW({
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120,          // distance to the element when triggering the animation (default is 0)
            mobile: false,       // trigger animations on mobile devices (default is true)
            live: true        // act on asynchronously loaded content (default is true)
        }
    );
    wow.init();
</script>

<!-- Custom Functions -->
<script src="js/custom.js"></script>

<script type="text/javascript">
    $(function () {
        /* ========================================================================= */
        /*	Contact Form
         /* ========================================================================= */

        $('#contact-form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "come on, you have a name don't you?",
                    minlength: "your name must consist of at least 2 characters"
                },
                email: {
                    required: "no email, no message"
                },
                message: {
                    required: "um...yea, you have to write something to send this form.",
                    minlength: "thats all? really?"
                }
            },
            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    type: "POST",
                    data: $(form).serialize(),
                    url: "process.php",
                    success: function () {
                        $('#contact-form :input').attr('disabled', 'disabled');
                        $('#contact-form').fadeTo("slow", 0.15, function () {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor', 'default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function () {
                        $('#contact-form').fadeTo("slow", 0.15, function () {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    });
</script>
</body>
</html>

