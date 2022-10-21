<?php include_once('header.php'); ?>

<div class="service_background">

    <div class="container pt-60 pb-60">
        <div class="row gy-50">

            <div class="col-lg-5 mt-100 about_sec">
                <h3 class="mb-20 text-primary" data-show="startbox">About Us</h3>
                <p class="mb-40" data-show="startbox" data-show-delay="100">
                    Maecenas <b>habitant urna magna tellus sodales</b> fringilla. Cursus sed nisi in netus ultricies adipiscing sem. Viverra at morbi viverra nunc tristique facilisi ut id. Leo, tortor tortor in elementum nibh pretium mattis quisquSenectus id nunc, quam venenatis lobortis quam.
                </p>

            </div>

            <div class="col-lg-6 text-center offset-lg-1">
                <div class="position-relative shape-parent">


                    <div class="" style="--img-height: 70%;" data-show="startbox"><a class="image-link" href="assets/img/about-us.png"><img class="" loading="lazy" src="images/about-us.png" alt="" class="img-fluid"></a></div>
                </div>
            </div>

        </div>
    </div>
</div>


<section class="counter_sec service_background">

    <div class="counter">
        <div class="container">
            <div class="row counter_bg">
                <div class=" col-lg-3 col-md-3 col-sm-6 col-6 ">
                    <div class="count-up">
                        <p class="counter-count">100</p>
                        <p>Lives Changed</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="count-up">
                        <p class="counter-count">200</p>
                        <p>Lives Changed</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="count-up">
                        <p class="counter-count">300</p>
                        <p>Lives Changed</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="count-up">
                        <p class="counter-count">400</p>
                        <p>Lives Changed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="valuses_goals service_background">

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img-holder">
                    <img class="img-container img-preview" src="images/about-1.png" class="img-fluid">
                    <h3 class="valus_txt">Values </h3>

                    <p class="maintain_txt">To maintain High standard of nutritional Quality, and never cease to reach our cutomers satisfaction</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img-holder">
                    <img class="img-container img-preview" src="images/about-2.png" class="img-fluid">
                    <h3 class="valus_txt bg-black">Goals </h3>

                    <p class="maintain_txt bg-black">To produce the best consumers food product, and be among leading companies in the history of mankind</p>

                </div>
            </div>
        </div>
    </div>

</section>

<section class="Our_Culture service_background">

    <div class="container pt-60 pb-60">
        <div class="row gy-50">

            <div class="col-lg-6 text-center offset-lg-1">
                <div class="position-relative shape-parent">


                    <div class="" data-show="startbox"><a class="image-link" href="#"><img class="" loading="lazy" src="images/our-culture.png" alt="" class="img-fluid"></a></div>
                </div>
            </div>

            <div class="col-lg-5 mt-100">
                <h3 class="mb-20 text-primary" data-show="startbox">Our Culture</h3>
                <p class=" mb-40" data-show="startbox" data-show-delay="100">
                    Semper. Nulla dolor scelerisque phasellus leo, mi ultrices. Tempus, turpis enim fames arcu mauris risus arcu.
                    Turpis nec enim, et sed dignissim ornare magna a id. Sed id et scelerisque lacinia sociis at magna leo convallis. Sagittis non consequat sollicitudin mattis bibendum tortor diam, ipsum. Phasellus sociis euismod eleifend lorem nulla pretium. Adipiscing feugiat leo amet mauris
                </p>

            </div>



        </div>
    </div>
</section>


<section class="service_background our_brands">
    <div class="container  pt-60 pb-60">
        <div class="row d-flex justify-content-center align-items-center text-center">

            <div class="col-lg-6 col-md-6 col-12 bg-white rounded   py-20">
                <h5>Our Brands</h5>
                <div class="row text-center">
                    <div class="col">
                        <a href="#">
                            <img src="images/tentes.png" alt="tomatobrand" class="img-fluid">
                        </a>


                    </div>

                    <div class="col">


                        <a href="#" class="offset-1">
                            <img src="images/rock.png" alt="BrandIcon" class=" img-fluid">
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<script>
    $('.counter-count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {

            //chnage count up speed here
            duration: 4000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>

<?php include_once('footer.php'); ?>