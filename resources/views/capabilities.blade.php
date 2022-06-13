@extends('layouts.app')
@section('content')

<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container-fluid">

    <div class="row justify-content-center align-items-center">
      <div class="col-xl-11 d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="/">Devysion</a></h1>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="/">HOME</a></li>
            <li><a class="nav-link scrollto active" href="/capabilities">CAPABILITIES</a></li>
            <li><a class="nav-link scrollto" href="/work">WORK</a></li>
            <li><a class="nav-link scrollto " href="/events">EVENTS</a></li>
            <li><a class="nav-link scrollto" href="/project">PROJECT</a></li>
            <li><a class="nav-link  scrollto" href="/team">TEAM</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </div>

  </div>
</header>

<section id="banner">
  <div class="banner-container">

    <div class="banner-inner" role="listbox">

      <div class="banner-item active" style="background:linear-gradient(rgba(0, 0, 0, 0.65),rgba(0, 0, 0, 0.65)), url(assets/img/bg-image-1.jpeg)">
        <div class="banner-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown logo_text">C<span>APABILITIES</span></h2>
            <div class="breadcrumbs">
              <div class="d-flex justify-content-center align-items-center">
                <ol>
                  <li><a href="index">Home</a></li>
                  <li>Capabilities</li>
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
        <h3>What we can do</h3>
        <p className="skills-header">We create effective strategies, powerful identities, seamless interactions, and
          memorable experiences to
          connect people to brands and organizations.</p>
      </header>

      <div class="skills-content">

      </div>

    </div>
  </section>
  <section id="capabilities-main">
    <div class="container" data-aos="fade-up">
      <div class="row capabilities-row">
        <div class="col-lg-7">
          <img src="assets/img/capabilities/2.jpg" alt="capabilities" class="img-fluid" />
        </div>
        <div class="col-lg-5">
          <p class="title">Branding</p>
          <p class="content">We build brands that inspire. Branding is about expressing
            a company's personality and values, building a comprehensive and consistent experience that resonates with
            customers and nutures lasting relationships.</p>
          <p class="contact"><a href="">Learn more about branding</a></p>
        </div>
      </div>

      <div class="row capabilities-row">

        <div class="col-lg-5">
          <p class="title">Strategy</p>
          <p class="content">We build brands that inspire. Branding is about expressing
            a company's personality and values, building a comprehensive and consistent experience that resonates with
            customers and nutures lasting relationships.</p>
          <p class="contact"><a href="">Learn more about strategy</a></p>
        </div>
        <div class="col-lg-7">
          <img src="assets/img/capabilities/1.jpg" alt="capabilities" class="img-fluid" />
        </div>
      </div>

      <div class="row capabilities-row">
        <div class="col-lg-7">
          <img src="assets/img/capabilities/3.jpg" alt="capabilities" class="img-fluid" />
        </div>

        <div class="col-lg-5">
          <p class="title">Game Design</p>
          <p class="content">We build brands that inspire. Branding is about expressing
            a company's personality and values, building a comprehensive and consistent experience that resonates with
            customers and nutures lasting relationships.</p>
          <p class="contact"><a href="">Learn more about game design</a></p>
        </div>
      </div>

      <div class="row capabilities-row">

        <div class="col-lg-5">
          <p class="title">Digital</p>
          <p class="content">We build brands that inspire. Branding is about expressing
            a company's personality and values, building a comprehensive and consistent experience that resonates with
            customers and nutures lasting relationships.</p>
          <p class="contact"><a href="">Learn more about digital</a></p>
        </div>
        <div class="col-lg-7">
          <img src="assets/img/capabilities/5.jpg" alt="capabilities" class="img-fluid" />
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
        <div class="col-lg-1"></div>
        <div class="col-lg-2"><img src="assets/img/clients/client-1.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-2.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-3.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-4.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-5.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-1"></div>
      </div>
      <div class="row text-center">
        <div class="col-lg-2"></div>
        <div class="col-lg-2"><img src="assets/img/clients/client-5.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-6.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-7.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-8.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </section>
</main>
@endsection