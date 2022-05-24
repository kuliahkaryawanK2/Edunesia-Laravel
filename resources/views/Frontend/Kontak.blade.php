@extends('layouts.app')
@section('content')

<body>

  <!--
    - main container
  -->

  <div class="container">

  




    <main>

      <!--
        - #HOME SECTION
      -->

      <section class="home" id="home">

        <div class="deco-shape shape-1">
          <img src="/images/shape-1.png" alt="art shape" width="70">
        </div>
        <div class="deco-shape shape-2">
          <img src="/images/shape-2.png" alt="art shape" width="55">
        </div>
        <div class="deco-shape shape-3">
          <img src="/images/shape-3.png" alt="art shape" width="120">
        </div>
        <div class="deco-shape shape-4">
          <img src="/images/shape-4.png" alt="art shape" width="30">
        </div>

        <div class="home-left">

<!--          <p class="section-subtitle">Welcome To Online Coaching</p>-->

          <h1 class="main-heading">
            <span class="underline-img">Contact Us<img src="/images/banner-line.png" alt="line"></span>
          </h1>

          <p class="section-text">
            Kontak Kami
          </p>

          <div class="home-btn-group">
            <button class="btn btn-primary">
              <p class="btn-text">Konsultasi Sekarang</p>
              <span class="square"></span>
            </button>

            <button class="btn btn-primary">
              <p class="btn-text">Hubungi Kami</p>
              <span class="square"></span>
            </button>
          </div>

        </div>

        <!-- <div class="home-right">

          <div class="img-box">

            <img src="/images/banner-img-bg.png" alt="colorful background shape" class="background-shape">
            <img src="/images/banner-img.png" alt="banner image" class="banner-img">

            <img src="/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
            <img src="/images/banner-aliment-icon-2.png" alt="" class="icon-2 smooth-zigzag-anim-2" width="240">
            <img src="/images/banner-aliment-icon-3.png" alt="" class="icon-3 smooth-zigzag-anim-3" width="195">
            <img src="/images/banner-aliment-icon-4.png" alt="" class="icon-4 drop-anim">

          </div>

        </div> -->

      </section>




      <!--
        - #BLOG
      -->

      <section class="blog" id="blog">

        <p class="section-subtitle">Our Contact</p>

        <h2 class="section-title">Contact Us</h2>

        <main class="flexbox-col">

          <div class="form-wrapper">
            <form id="form" method="post" name="emailform" action="email.php">
              <!-- <h3 class="form-title">Responsive Form</h3>
              <p class="form-undertitle">Fields marked "*" are required.</p> -->
              <div class="form-input-grid">
                <div>
                  <p class="form-text">First Name*</p>
                  <div class="form-input-wrapper flexbox-left">
                    <i class="uil uil-user"></i>
                    <input class="form-input" id="first" name="first" type="text" placeholder="First Name" aria-label="" required>
                  </div>
                </div>
                <div>
                <p class="form-text">Last Name*</p>
                <div class="form-input-wrapper flexbox-left">
                  <i class="uil uil-asterisk"></i>
                  <input class="form-input" id="last" name="last" type="text" placeholder="Last Name" aria-label="" required>
                </div>
              </div>
            </div>
            <div class="form-input-max">
              <p class="form-text">Email*</p>
              <div class="form-input-wrapper flexbox-left">
                <i class="uil uil-at"></i>
                <input class="form-input" id="email" name="email" type="email" placeholder="Email" aria-label="" required>
              </div>
            </div>
            <div class="form-input-max">
              <p class="form-text">Message* (Max 500)</p>
              <div id="textarea" class="form-input-wrapper flexbox-left-start">
                <i class="uil uil-comment-dots"></i>
                <textarea class="form-input" id="message" name="message" placeholder="Your message" maxlength="500" aria-label="" required></textarea>
              </div>
             </div>
             <div class="form-input-max flexbox-left">
              <div class="button-wrapper">
                <button id="form-button" type="submit" class="button btn-primary"><i class="uil uil-envelope-heart"></i> Send<div class="btn-secondary"></div></button>
               </div>
             </div>
           </form>
          </div>
        
        </main>

      </section>





   

    </main>


  </div>
</body>

@endsection
