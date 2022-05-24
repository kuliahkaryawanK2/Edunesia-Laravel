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
            <span class="underline-img">About Us<img src="/images/banner-line.png" alt="line"></span>
          </h1>

          <p class="section-text">
            Tentang Kami
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
        - #ABOUT SECTION
      -->

      <section class="about" id="about">

        <div class="about-left">

          <div class="img-box">
            <img src="/images/about-img-bg.png" alt="about bg" class="about-bg">

            <img src="/images/about-img.png" alt="about person" class="about-img">

            <img src="/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
            <img src="/images/banner-aliment-icon-3.png" alt="" class="icon-2 smooth-zigzag-anim-3" width="195">
          </div>

        </div>

        <div class="about-right">

          <p class="section-subtitle">About Us</p>

          <h2 class="section-title">Kenapa Harus Pilih Kami ?</h2>

          <p class="section-text">
            Kami akan membantu menjalankan iklan bisnis anda dengan pengalaman yang sudah kami dapatkan. Kami juga akan menerapkan strategi iklan yang sudah terbukti berhasil di kami
          </p>

          <ul class="about-ul">

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Penjualan Meningkat.</p>
            </li>

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Iklan Lebih Maksimal.</p>
            </li>

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Konsumen Yang Tertarget.</p>
            </li>

          </ul>

          <button class="btn btn-primary">
            <p class="btn-text">Lihat Paket Layanan</p>
            <span class="square"></span>
          </button>

        </div>

      </section>



      <!--
        - #FEATURES SECTION
      -->

      <section class="features">

        <div class="features-left">

          <p class="section-subtitle">Visi Dan Misi</p>

          <h2 class="section-title">Visi Dan Misi Edunesia</h2>

          <ul>

<!--            <li class="features-item">-->
<!--              <div class="item-icon-box blue">-->
<!--                <img src="/images/feature-icon-1.png" alt="feature icon">-->
<!--              </div>-->

<!--              <div class="wrapper">-->

<!--                <h3 class="item-title">Student Life</h3>-->

<!--                <p class="item-text">Nulla vestibulum pretium nibh at dignissim. Aliquam vehicula consectetur dignissim-->
<!--                  dictum.</p>-->

<!--              </div>-->
<!--            </li>-->

            <li class="features-item">
              <div class="item-icon-box pink">
                <img src="/images/feature-icon-2.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">Visi</h3>

                <p class="item-text">Nulla vestibulum pretium nibh at dignissim. Aliquam vehicula consectetur dignissim
                  dictum.</p>

              </div>
            </li>

            <li class="features-item">
              <div class="item-icon-box purple">
                <img src="/images/feature-icon-3.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">Misi</h3>

                <p class="item-text">Nulla vestibulum pretium nibh at dignissim. Aliquam vehicula consectetur dignissim
                  dictum.</p>

              </div>
            </li>

          </ul>

        </div>

        <div class="features-right">
          <img src="/images/coure-features-img.jpg" alt="core features image">
        </div>

      </section>




      <!--
        - #CONTACT
      -->

      <section class="contact">

        <div class="contact-card" id="contact">
          <img src="/images/cta-bg-img.png" alt="shape" class="contact-card-bg">

          <h2>Tingkatkan Bisnismu Dengan Kami </h2>

          <button class="btn btn-primary">
            <p class="btn-text">Hubungi Kami</p>
            <span class="square"></span>
          </button>
        </div>

      </section>

    </main>

  </div>

</body>

@endsection
