@extends('layouts.app')
@section('content')
<!-- <section id="banner">
  <div class="banner-container">

    <div class="banner-inner" role="listbox">

      <div class="banner-item active" style="background:linear-gradient(rgba(0, 0, 0, 0.65),rgba(0, 0, 0, 0.65)), url(assets/img/bg-image-1.jpeg)">
        <div class="banner-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown logo_text">O<span>ur work</span></h2>
            <div class="breadcrumbs">
              <div class="d-flex justify-content-center align-items-center">
                <ol>
                  <li><a href="index">Home</a></li>
                  <li>Our work</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<main id="main">
  <section class="detail-intro">
    <img src="{{asset('assets/img/projects/gamedesign_2.jpg')}}" alt="projects" class="img-fluid" style="width: 100% ;" />
  </section>
  <section class="detail-content">
    <div class="container">
      <header class="section-header wow fadeInUp">
        <h3>GAME DESIGN 1</h3>

      </header>
      <div class="detail-content-body row">

        <div class="col-lg-9 content-left">
          <p>To promote Sting's New Broadway musical, The Last Ship, we were presented an open brief - akin to writing
            for a music video pitch. The objective was to tell a visual and beautiful story that is emotionally
            tethered to the musical.</p>
          <p>To promote Sting's New Broadway musical, The Last Ship, we were presented an open brief - akin to writing
            for a music video pitch. The objective was to tell a visual and beautiful story that is emotionally
            tethered to the musical.</p>
          <p>To promote Sting's New Broadway musical, The Last Ship, we were presented an open brief - akin to writing
            for a music video pitch. The objective was to tell a visual and beautiful story that is emotionally
            tethered to the musical.</p>
          <p>To promote Sting's New Broadway musical, The Last Ship, we were presented an open brief - akin to writing
            for a music video pitch. The objective was to tell a visual and beautiful story that is emotionally
            tethered to the musical.</p>
          <p>To promote Sting's New Broadway musical, The Last Ship, we were presented an open brief - akin to writing
            for a music video pitch. The objective was to tell a visual and beautiful story that is emotionally
            tethered to the musical.</p>
        </div>
        <div class="col-lg-3 content-right">
          <div class="intro-group">
            <label>AGENCY</label>
            <p>Devysion</p>
          </div>
          <div class="intro-group">
            <label>DIRECTOR</label>
            <p>Matthew Encina</p>
          </div>
          <div class="intro-group">
            <label>DESIGNER</label>
            <p>William Jackson</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="row challenge-group">
        <div class="col-lg-4 text-center challenge-group-title">
          <h2>The Creative Challenge</h2>
        </div>
        <div class="col-lg-8 challenge-group-content">
          <p>1. Create an animated extension of the live-action “drive-thru” campaign.</p>
          <p>2. Showcase current and upcoming titles in the Xbox Game Pass catalog.</p>
          <p>3. Strategically align and sync with the announcements made by Xbox at E3.</p>
        </div>
      </div>
      <div class="row part-content gy-3">
        <div class="col-lg-6">
          <img src="{{asset('assets/img/projects/xbox-game-pass-e3-2018-1.jpeg')}}" alt="xbox-game" class="img-fluid" />
        </div>
        <div class="col-lg-6">
          <img src="{{asset('assets/img/projects/xbox-game-pass-e3-2018-2.jpeg')}}" alt="xbox-game" class="img-fluid" />
        </div>
      </div>
      <div class="row challenge-group">
        <div class="col-lg-4 text-center challenge-group-title">
          <h2>Expanding the Xbox Game Pass Brand</h2>
        </div>
        <div class="col-lg-8 challenge-group-content">
          <p>Our task was to build on the current Xbox Game Pass campaign and announce new game titles. So we developed an expansive 3d animated world based off of the original drive-thru themed set.</p>
          <p>We began by building out dozens of lightbox menus to feature game art. These served as the primary architecture for the camera to fly through.</p>
        </div>
      </div>
      <div class="row part-content gy-3">
        <div class="col-lg-6">
          <img src="{{asset('assets/img/projects/xbox-game-pass-e3-2018-9-1.jpeg')}}" alt="xbox-game" class="img-fluid" />
        </div>
        <div class="col-lg-6">
          <img src="{{asset('assets/img/projects/xbox-game-pass-e3-2018-9-2.jpeg')}}" alt="xbox-game" class="img-fluid" />
        </div>
      </div>
      <div class="credit">
        <header class="section-header wow fadeInUp">
          <h3>CREDITS</h3>
        </header>
        <div class="row credit-content">
          <div class="col-lg-2"></div>
          <div class="col-lg-4">
            <div class="credit-group">
              <label>CLIENT</label>
              <p>Microsoft X-Box</p>
            </div>
            <div class="credit-group">
              <label>CLIENT CREATIVES</label>
              <p>Josh Munsee (Senior Global Consumer Marketing Manager)</p>
            </div>
            <div class="credit-group">
              <label>AGENCY</label>
              <p>Ayzenberg Group</p>
            </div>
            <div class="credit-group">
              <label>AGENCY CREATIVES</label>
              <p>Gary Goodman (Executive Creative Director, Ayzenberg), Allen Bey (Creative Director, Ayzenberg)</p>
            </div>
            <div class="credit-group">
              <label>PRODUCERS</label>
              <p>Mehera Bey (Senior Supervising Producer, Ayzenberg), Jonthan Clark (Producer, Ayzenberg), Jesica Shipley (Associate Producer, Ayzenberg)</p>
            </div>
            <div class="credit-group">
              <label>AGENCY ACCOUNT DIRECTORS</label>
              <p>Geordie Larratt-Smith (Account Director), Chy Lin (Senior Account Executive)</p>
            </div>
            <div class="credit-group">
              <label>AGENCY EDITOR</label>
              <p>Chris May (Ayzenberg)</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="credit-group">
              <label>CREATIVE DIRECTOR</label>
              <p>Matthew Encina</p>
            </div>
            <div class="credit-group">
              <label>DIRECTOR</label>
              <p>Matthew Encina</p>
            </div>
            <div class="credit-group">
              <label>EXECUTIVE PRODUCER</label>
              <p>Scott Rothstein</p>
            </div>
            <div class="credit-group">
              <label>ASSOCIATE CREATIVE DIRECTOR</label>
              <p>John Robson</p>
            </div>
            <div class="credit-group">
              <label>PRODUCER</label>
              <p>Nick Molo</p>
            </div>
            <div class="credit-group">
              <label>3D ANIMATORS</label>
              <p>Aaron Knapp, Sean Starkweather, Daniel Zhang, John Robson, Liam Ward, Andrew Soria, Sean Garfinkel, Caleb Bol</p>
            </div>
            <div class="credit-group">
              <label>COMPOSITORS</label>
              <p>Aaron Knapp, Sean Starkweather, John Robson, Liam Ward, Andrew Soria, Sean Garfinkel</p>
            </div>
            <div class="credit-group">
              <label>DESIGNERS</label>
              <p>Matthew Encina, Caleb Bol, Minhye Cho, Belinda Rodriguez</p>
            </div>
            <div class="credit-group">
              <label>EDITORS</label>
              <p>John Robson</p>
            </div>
            <div class="credit-group">
              <label>STORYBOARD ARTIST</label>
              <p>Max Forward</p>
            </div>
            <div class="credit-group">
              <label>COLORIST</label>
              <p>Stephen Latty</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection