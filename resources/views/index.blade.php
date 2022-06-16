@extends('layouts.app')
@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">

            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown logo_text">D<span>evysion</span></h2>
                            <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod.</p>
                            <!-- <a href="#featured-services"
                  class="btn-get-started scrollto animate__animated animate__fadeInUp">Contact Us</a> -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/4.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown logo_text">D<span>evysion</span></h2>
                            <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contact Us</a> -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/9.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown logo_text">D<span>evysion</span></h2>
                            <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contact Us</a> -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<main id="main">

    <section id="about">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.</p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Mission</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                        <div class="img">
                            <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Plan</a></h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Vision</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione
                            voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container" data-aos="fade-up">

            <header class="section-header wow fadeInUp">
                <h3>CAPABILITIES</h3>
                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad
                    pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa
                    panatarel.</p>
            </header>

            <div class="row">

                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                    <h4 class="title"><a href="">Branding</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                        occaecati cupiditate non provident</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-card-checklist"></i></div>
                    <h4 class="title"><a href="">Game Design</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat tarad limino ata</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    <h4 class="title"><a href="">Digital</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-binoculars"></i></div>
                    <h4 class="title"><a href="">Strategy</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    <h4 class="title"><a href="">Hopital</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">Ellispe</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                        soluta nobis est eligendi</p>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <section id="testimonials" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonial-1.png" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonial-2.png" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonial-3.png" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                                tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonial-4.png" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                                minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section id="portfolio" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3 class="section-title">Our Work</h3>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class=" col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-branding">Branding</li>
                        <li data-filter=".filter-strategy">Strategy</li>
                        <li data-filter=".filter-web">Game Design</li>
                        <li data-filter=".filter-digital">Digital</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/projects/branding_1.jpg" class="img-fluid" alt="">
                            <a href="assets/img/projects/branding_1.jpg" data-lightbox="portfolio" data-title="Branding 1" class="link-preview"><i class="bi bi-plus"></i></a>
                            <a href="/portfolio-details/branding_1" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="/portfolio-details/branding_1">Branding 1</a></h4>
                            <p>Branding</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-strategy">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/projects/strategy_1.jpg" class="img-fluid" alt="">
                            <a href="assets/img/projects/strategy_1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Strategy 1"><i class="bi bi-plus"></i></a>
                            <a href="/portfolio-details/strategy_1" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="/portfolio-details/strategy_1">Strategy 1</a></h4>
                            <p>Strategy</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/projects/branding_2.jpg" class="img-fluid" alt="">
                            <a href="assets/img/projects/branding_2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Branding 2"><i class="bi bi-plus"></i></a>
                            <a href="/portfolio-details/branding_2" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="/portfolio-details/branding_2">Branding 2</a></h4>
                            <p>Branding</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/projects/branding_3.jpg" class="img-fluid" alt="">
                            <a href="assets/img/projects/branding_3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Branding 3"><i class="bi bi-plus"></i></a>
                            <a href="/portfolio-details/branding_3" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="/portfolio-details/branding_3">Branding 3</a></h4>
                            <p>Branding</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/projects/gamedesign_1.jpg" class="img-fluid" alt="">
                            <a href="assets/img/projects/gamedesign_1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Game Design 1"><i class="bi bi-plus"></i></a>
                            <a href="/portfolio-details/gamedesign_1" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="/portfolio-details/gamedesign_1">Game Design 1</a></h4>
                            <p>Game Design</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/projects/branding_4.jpg" class="img-fluid" alt="">
                            <a href="assets/img/projects/branding_4.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Branding 4"><i class="bi bi-plus"></i></a>
                            <a href="/portfolio-details/branding_4" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="/portfolio-details/branding_4">Branding 4</a></h4>
                            <p>Branding</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/projects/branding_5.jpg" class="img-fluid" alt="">
                            <a href="assets/img/projects/branding_5.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Branding 5"><i class="bi bi-plus"></i></a>
                            <a href="/portfolio-details/branding_5" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="/portfolio-details/branding_5">Branding 5</a></h4>
                            <p>Branding</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-digital">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/projects/digital_1.jpg" class="img-fluid" alt="">
                            <a href="assets/img/projects/digital_1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Digital 1"><i class="bi bi-plus"></i></a>
                            <a href="/portfolio-details/digital_1" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="/portfolio-details/digital_1">Digital 1</a></h4>
                            <p>Digital</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/projects/gamedesign_2.jpg" class="img-fluid" alt="">
                            <a href="assets/img/projects/gamedesign_2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Game Design 2"><i class="bi bi-plus"></i></a>
                            <a href="/portfolio-details/gamedesign_2" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="/portfolio-details/gamedesign_2">Game Design 2</a></h4>
                            <p>Game Design</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->

    <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="bi bi-phone"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="client-intro">
        <header class="section-header">
            <h3>Our Clients</h3>
        </header>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-2"><img src="assets/img/clients/1.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/2.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/3.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/4.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/5.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/6.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
            </div>
            <div class="row text-center">
                <div class="col-lg-2"><img src="assets/img/clients/7.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/8.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/9.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/10.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/11.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/12.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3"></div>
                <div class="col-lg-2"><img src="assets/img/clients/13.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/14.png" style="filter: invert(0.5);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-2"><img src="assets/img/clients/4.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>

</main>
@endsection