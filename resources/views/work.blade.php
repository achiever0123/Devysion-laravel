@extends('layouts.app')
@section('content')
<section id="banner">
  <div class="banner-container">

    <div class="banner-inner" role="listbox">

      <div class="banner-item active" style="background:linear-gradient(rgba(0, 0, 0, 0.65),rgba(0, 0, 0, 0.65)), url(assets/img/bg-image-1.jpeg)">
        <div class="banner-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown logo_text">W<span>ORK</span></h2>
            <div class="breadcrumbs">
              <div class="d-flex justify-content-center align-items-center">
                <ol>
                  <li><a href="index">Home</a></li>
                  <li>Work</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<main id="main">
  <section id="skills">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3>We are a Brand Strategy Design Consultancy.</h3>
        <p className="skills-header">We help businesses grow, launch products, and build enduring relationships with
          their communities.</p>
      </header>

      <div class="skills-content">

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