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
            <span class="underline-img">Service<img src="/images/banner-line.png" alt="line"></span>
          </h1>

          <p class="section-text">
            Layanan Kami
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
        - #COURSE CATEGORY SECTION
      -->

      <section class="category">

        <p class="section-subtitle">Pelayanan Kami</p>

        <h2 class="section-title">Bagaimana kami membantu Anda?</h2>

        <ul class="course-item-group">

          <li class="course-category-item">

            <div class="wrapper">
              <img src="/images/course-category-icon-1.png" alt="category icon" class="category-icon default">

              <img src="/images/course-category-icon-1-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Strategi Iklan Menjual</a>
              </h3>

              <p class="category-subtitle">Kami akan menentukan strategi iklan yang menjual yang selama ini sudah kami terapkan</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="/images/course-category-icon-2.png" alt="category icon" class="category-icon default">

              <img src="/images/course-category-icon-2-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">
                  Skema dan Konten Follow Up</a>
              </h3>

              <p class="category-subtitle">Kami juga akan menyediakan skema dan konten follow up cs Anda, sehingga tingkat closing bisa lebih tinggi</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="/images/course-category-icon-3.png" alt="category icon" class="category-icon default">

              <img src="/images/course-category-icon-3-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Copywriting</a>
              </h3>

              <p class="category-subtitle">Copywriting sangat penting diterapkan di bisnis Anda, sehingga penawaran yang Anda buat sulit untuk ditolak oleh customer</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="/images/course-category-icon-4.png" alt="category icon" class="category-icon default">

              <img src="/images/course-category-icon-4-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Retargeting</a>
              </h3>

              <p class="category-subtitle">Kami juga akan menargetkan kembali pemirsa anda dengan konten iklan yang berbeda, sehingga mendapatkan konversi lebih banyak</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="/images/course-category-icon-5.png" alt="category icon" class="category-icon default">

              <img src="/images/course-category-icon-5-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Strategi Iklan Menjual</a>
              </h3>

              <p class="category-subtitle">Kami akan menentukan strategi iklan yang menjual yang selama ini sudah kami terapkan</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="/images/course-category-icon-6.png" alt="category icon" class="category-icon default">

              <img src="/images/course-category-icon-6-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Laporan Harian</a>
              </h3>

              <p class="category-subtitle">Kami akan membuat laporan harian dari hasil iklan anda, sehingga iklan yang dijalankan lebih terukur</p>
            </div>

          </li>

        </ul>

      </section>

      <!--
        - #BLOG
      -->

      <section class="blog" id="blog">

        <p class="section-subtitle">Pelayanan</p>

        <h2 class="section-title">Our Service</h2>

        <div class="blog-grid">

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="/images/blog-1.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Website</a>
              </h3>
            </div>

          </div>

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="/images/blog-1.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Design Content</a>
              </h3>
            </div>

          </div>


          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="/images/blog-1.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Ads</a>
              </h3>
            </div>

          </div>


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
