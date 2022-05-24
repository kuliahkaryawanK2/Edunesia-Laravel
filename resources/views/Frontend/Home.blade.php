@extends('layouts.app')

@section('content')
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

            Solusi Dari Semua Masalah Marketing
            <span class="underline-img">Anda<img src="/images/banner-line.png" alt="line"></span>
          </h1>

          <p class="section-text">
            Konsultasikan Masalah Anda ke Tim Kami, Kami Siap Membantu.
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

        <div class="home-right">

          <div class="img-box">

            <img src="/images/banner-img-bg.png" alt="colorful background shape" class="background-shape">
            <img src="/images/banner-img.png" alt="banner image" class="banner-img">

            <img src="/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
            <img src="/images/banner-aliment-icon-2.png" alt="" class="icon-2 smooth-zigzag-anim-2" width="240">
            <img src="/images/banner-aliment-icon-3.png" alt="" class="icon-3 smooth-zigzag-anim-3" width="195">
            <img src="/images/banner-aliment-icon-4.png" alt="" class="icon-4 drop-anim">

          </div>

        </div>

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
        - #COURSE SECTION
      -->

<!--      <section class="course" id="course">-->

<!--        <p class="section-subtitle">Our Online Courses</p>-->

<!--        <h2 class="section-title">Find The Right Online Course For You</h2>-->

<!--        <div class="course-grid">-->

<!--          <div class="course-card">-->

<!--            <div class="course-banner">-->
<!--              <img src="/images/course-1.jpg" alt="course banner">-->

<!--              <div class="course-tag-box">-->
<!--                <a href="#" class="badge-tag orange">Business</a>-->
<!--                <a href="#" class="badge-tag blue">Marketing</a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <div class="course-content">-->

<!--              <h3 class="card-title">-->
<!--                <a href="#">Become product manager learn skills.</a>-->
<!--              </h3>-->

<!--              <div class="wrapper border-bottom">-->

<!--                <div class="author">-->
<!--                  <img src="/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">-->

<!--                  <a href="#" class="author-name">Lillian Wals</a>-->
<!--                </div>-->

<!--                <div class="rating">-->
<!--                  <ion-icon name="star"></ion-icon>-->
<!--                  <p>5.0 (2k)</p>-->
<!--                </div>-->

<!--              </div>-->

<!--              <div class="wrapper">-->
<!--                <div class="course-price">$50.00</div>-->

<!--                <div class="enrolled">-->
<!--                  <div class="icon-user">-->
<!--                    <img src="/images/student-icon.png" alt="user icon">-->
<!--                  </div>-->

<!--                  <p>600k</p>-->
<!--                </div>-->
<!--              </div>-->

<!--            </div>-->

<!--          </div>-->


<!--          <div class="course-card">-->

<!--            <div class="course-banner">-->
<!--              <img src="/images/course-2.jpg" alt="course banner">-->

<!--              <div class="course-tag-box">-->
<!--                <a href="#" class="badge-tag orange">Business</a>-->
<!--                <a href="#" class="badge-tag blue">Marketing</a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <div class="course-content">-->

<!--              <h3 class="card-title">-->
<!--                <a href="#">Fashion and luxury fashion in a changing.</a>-->
<!--              </h3>-->

<!--              <div class="wrapper border-bottom">-->

<!--                <div class="author">-->
<!--                  <img src="/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">-->

<!--                  <a href="#" class="author-name">Lillian Wals</a>-->
<!--                </div>-->

<!--                <div class="rating">-->
<!--                  <ion-icon name="star"></ion-icon>-->
<!--                  <p>4.7 (5k)</p>-->
<!--                </div>-->

<!--              </div>-->

<!--              <div class="wrapper">-->
<!--                <div class="course-price">$80.00</div>-->

<!--                <div class="enrolled">-->
<!--                  <div class="icon-user">-->
<!--                    <img src="/images/student-icon.png" alt="user icon">-->
<!--                  </div>-->

<!--                  <p>545k</p>-->
<!--                </div>-->
<!--              </div>-->

<!--            </div>-->

<!--          </div>-->


<!--          <div class="course-card">-->

<!--            <div class="course-banner">-->
<!--              <img src="/images/course-3.jpg" alt="course banner">-->

<!--              <div class="course-tag-box">-->
<!--                <a href="#" class="badge-tag orange">Business</a>-->
<!--                <a href="#" class="badge-tag blue">Marketing</a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <div class="course-content">-->

<!--              <h3 class="card-title">-->
<!--                <a href="#">Learning to write as a professional.</a>-->
<!--              </h3>-->

<!--              <div class="wrapper border-bottom">-->

<!--                <div class="author">-->
<!--                  <img src="/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">-->

<!--                  <a href="#" class="author-name">Lillian Wals</a>-->
<!--                </div>-->

<!--                <div class="rating">-->
<!--                  <ion-icon name="star"></ion-icon>-->
<!--                  <p>4.1 (3k)</p>-->
<!--                </div>-->

<!--              </div>-->

<!--              <div class="wrapper">-->
<!--                <div class="course-price">$29.90</div>-->

<!--                <div class="enrolled">-->
<!--                  <div class="icon-user">-->
<!--                    <img src="/images/student-icon.png" alt="user icon">-->
<!--                  </div>-->

<!--                  <p>317k</p>-->
<!--                </div>-->
<!--              </div>-->

<!--            </div>-->

<!--          </div>-->


<!--          <div class="course-card">-->

<!--            <div class="course-banner">-->
<!--              <img src="/images/course-4.jpg" alt="course banner">-->

<!--              <div class="course-tag-box">-->
<!--                <a href="#" class="badge-tag orange">Business</a>-->
<!--                <a href="#" class="badge-tag blue">Marketing</a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <div class="course-content">-->

<!--              <h3 class="card-title">-->
<!--                <a href="#">Improving accessibility of Your markdown.</a>-->
<!--              </h3>-->

<!--              <div class="wrapper border-bottom">-->

<!--                <div class="author">-->
<!--                  <img src="/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">-->

<!--                  <a href="#" class="author-name">Lillian Wals</a>-->
<!--                </div>-->

<!--                <div class="rating">-->
<!--                  <ion-icon name="star"></ion-icon>-->
<!--                  <p>4.8 (3.9k)</p>-->
<!--                </div>-->

<!--              </div>-->

<!--              <div class="wrapper">-->
<!--                <div class="course-price">$49.90</div>-->

<!--                <div class="enrolled">-->
<!--                  <div class="icon-user">-->
<!--                    <img src="/images/student-icon.png" alt="user icon">-->
<!--                  </div>-->

<!--                  <p>891k</p>-->
<!--                </div>-->
<!--              </div>-->

<!--            </div>-->

<!--          </div>-->



<!--          <div class="course-card">-->

<!--            <div class="course-banner">-->
<!--              <img src="/images/course-5.jpg" alt="course banner">-->

<!--              <div class="course-tag-box">-->
<!--                <a href="#" class="badge-tag orange">Business</a>-->
<!--                <a href="#" class="badge-tag blue">Marketing</a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <div class="course-content">-->

<!--              <h3 class="card-title">-->
<!--                <a href="#">Master query in a short period of time.</a>-->
<!--              </h3>-->

<!--              <div class="wrapper border-bottom">-->

<!--                <div class="author">-->
<!--                  <img src="/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">-->

<!--                  <a href="#" class="author-name">Lillian Wals</a>-->
<!--                </div>-->

<!--                <div class="rating">-->
<!--                  <ion-icon name="star"></ion-icon>-->
<!--                  <p>3.8 (1k)</p>-->
<!--                </div>-->

<!--              </div>-->

<!--              <div class="wrapper">-->
<!--                <div class="course-price">$89.00</div>-->

<!--                <div class="enrolled">-->
<!--                  <div class="icon-user">-->
<!--                    <img src="/images/student-icon.png" alt="user icon">-->
<!--                  </div>-->

<!--                  <p>204k</p>-->
<!--                </div>-->
<!--              </div>-->

<!--            </div>-->

<!--          </div>-->


<!--          <div class="course-card">-->

<!--            <div class="course-banner">-->
<!--              <img src="/images/course-6.jpg" alt="course banner">-->

<!--              <div class="course-tag-box">-->
<!--                <a href="#" class="badge-tag orange">Business</a>-->
<!--                <a href="#" class="badge-tag blue">Marketing</a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <div class="course-content">-->

<!--              <h3 class="card-title">-->
<!--                <a href="#">Business Intelligence analyst Course 2022.</a>-->
<!--              </h3>-->

<!--              <div class="wrapper border-bottom">-->

<!--                <div class="author">-->
<!--                  <img src="/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">-->

<!--                  <a href="#" class="author-name">Lillian Wals</a>-->
<!--                </div>-->

<!--                <div class="rating">-->
<!--                  <ion-icon name="star"></ion-icon>-->
<!--                  <p>4.9 (23k)</p>-->
<!--                </div>-->

<!--              </div>-->

<!--              <div class="wrapper">-->
<!--                <div class="course-price">$199.00</div>-->

<!--                <div class="enrolled">-->
<!--                  <div class="icon-user">-->
<!--                    <img src="/images/student-icon.png" alt="user icon">-->
<!--                  </div>-->

<!--                  <p>1.3M</p>-->
<!--                </div>-->
<!--              </div>-->

<!--            </div>-->

<!--          </div>-->

<!--        </div>-->

<!--        <button class="btn btn-primary">-->
<!--          <p class="btn-text">View All Course</p>-->
<!--          <span class="square"></span>-->
<!--        </button>-->

<!--      </section>-->





      <!--
        - #EVENT SECTION
      -->

<!--      <section class="event">-->

<!--        <div class="event-left">-->

<!--          <div class="event-banner">-->
<!--            <img src="/images/event-img.jpg" alt="event banner" class="banner-img">-->
<!--          </div>-->

<!--          <button class="play smooth-zigzag-anim-1">-->
<!--            <div class="play-icon pulse-anim">-->
<!--              <ion-icon name="play-circle"></ion-icon>-->
<!--            </div>-->

<!--            <p>Watch Us !</p>-->
<!--          </button>-->

<!--        </div>-->

<!--        <div class="event-right">-->

<!--          <p class="section-subtitle">Our Events</p>-->

<!--          <h2 class="section-title">Join Our Upcoming Events</h2>-->

<!--          <div class="event-card-group">-->

<!--            <div class="event-card">-->

<!--              <div class="content-left">-->
<!--                <p class="day">28</p>-->
<!--                <p class="month">Feb, 2022</p>-->
<!--              </div>-->

<!--              <div class="content-right">-->
<!--                <div class="schedule">-->
<!--                  <p class="time">10:30am To 2:30pm</p>-->
<!--                  <p class="place">Poland</p>-->
<!--                </div>-->

<!--                <a href="#" class="event-name">Business creativity workshops</a>-->
<!--              </div>-->

<!--            </div>-->

<!--            <div class="event-card">-->

<!--              <div class="content-left">-->
<!--                <p class="day">15</p>-->
<!--                <p class="month">Mar, 2022</p>-->
<!--              </div>-->

<!--              <div class="content-right">-->
<!--                <div class="schedule">-->
<!--                  <p class="time">10:30am To 2:30pm</p>-->
<!--                  <p class="place">Poland</p>-->
<!--                </div>-->

<!--                <a href="#" class="event-name">Street Performance: Call for Art.</a>-->
<!--              </div>-->

<!--            </div>-->

<!--            <div class="event-card">-->

<!--              <div class="content-left">-->
<!--                <p class="day">20</p>-->
<!--                <p class="month">May, 2022</p>-->
<!--              </div>-->

<!--              <div class="content-right">-->
<!--                <div class="schedule">-->
<!--                  <p class="time">10:30am To 2:30pm</p>-->
<!--                  <p class="place">Poland</p>-->
<!--                </div>-->

<!--                <a href="#" class="event-name">Digital transformation conference</a>-->
<!--              </div>-->

<!--            </div>-->

<!--          </div>-->

<!--        </div>-->

<!--      </section>-->





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
        - #INSTRUCTOR SECTION
      -->

<!--      <section class="instructor">-->

<!--        <p class="section-subtitle">Best Coach</p>-->

<!--        <h2 class="section-title">Our Expert Instructor</h2>-->

<!--        <div class="instructor-grid">-->

<!--          <div class="instructor-card">-->

<!--            <div class="instructor-img-box">-->
<!--              <img src="/images/instructor-1.jpg" alt="instructor louis sullivan">-->

<!--              <div class="social-link">-->
<!--                <a href="#" class="facebook">-->
<!--                  <ion-icon name="logo-facebook"></ion-icon>-->
<!--                </a>-->

<!--                <a href="#" class="instagram">-->
<!--                  <ion-icon name="logo-instagram"></ion-icon>-->
<!--                </a>-->

<!--                <a href="#" class="twitter">-->
<!--                  <ion-icon name="logo-twitter"></ion-icon>-->
<!--                </a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <h4 class="instructor-name">Louis Sullivan</h4>-->

<!--            <p class="instructor-title">Instructor</p>-->

<!--          </div>-->

<!--          <div class="instructor-card">-->

<!--            <div class="instructor-img-box">-->
<!--              <img src="/images/instructor-2.jpg" alt="instructor camden david">-->

<!--              <div class="social-link">-->
<!--                <a href="#" class="facebook">-->
<!--                  <ion-icon name="logo-facebook"></ion-icon>-->
<!--                </a>-->

<!--                <a href="#" class="instagram">-->
<!--                  <ion-icon name="logo-instagram"></ion-icon>-->
<!--                </a>-->

<!--                <a href="#" class="twitter">-->
<!--                  <ion-icon name="logo-twitter"></ion-icon>-->
<!--                </a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <h4 class="instructor-name">Camden David</h4>-->

<!--            <p class="instructor-title">Instructor</p>-->

<!--          </div>-->

<!--          <div class="instructor-card">-->

<!--            <div class="instructor-img-box">-->
<!--              <img src="/images/instructor-3.jpg" alt="instructor fiona dean">-->

<!--              <div class="social-link">-->
<!--                <a href="#" class="facebook">-->
<!--                  <ion-icon name="logo-facebook"></ion-icon>-->
<!--                </a>-->

<!--                <a href="#" class="instagram">-->
<!--                  <ion-icon name="logo-instagram"></ion-icon>-->
<!--                </a>-->

<!--                <a href="#" class="twitter">-->
<!--                  <ion-icon name="logo-twitter"></ion-icon>-->
<!--                </a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <h4 class="instructor-name">Fiona Dean</h4>-->

<!--            <p class="instructor-title">Instructor</p>-->

<!--          </div>-->

<!--          <div class="instructor-card">-->

<!--            <div class="instructor-img-box">-->
<!--              <img src="/images/instructor-4.jpg" alt="instructor cherish sosa">-->

<!--              <div class="social-link">-->
<!--                <a href="#" class="facebook">-->
<!--                  <ion-icon name="logo-facebook"></ion-icon>-->
<!--                </a>-->

<!--                <a href="#" class="instagram">-->
<!--                  <ion-icon name="logo-instagram"></ion-icon>-->
<!--                </a>-->

<!--                <a href="#" class="twitter">-->
<!--                  <ion-icon name="logo-twitter"></ion-icon>-->
<!--                </a>-->
<!--              </div>-->
<!--            </div>-->

<!--            <h4 class="instructor-name">Cherish Sosa</h4>-->

<!--            <p class="instructor-title">Instructor</p>-->

<!--          </div>-->

<!--        </div>-->

<!--      </section>-->





      <!--
        - #TESTIMONIALS
      -->

      <section class="testimonials">

        <div class="testimonials-left">

          <p class="section-subtitle">Testimoni</p>

          <h2 class="section-title">Apa Kata Konsumen Kami </h2>

          <p class="section-text">
            Proin et lacus eu odio tempor porttitor id vel augue. Vivamus volutpat vehicula sem, et imperdiet enim
            tempor id.
            Phasellus lobortis efficitur nisl eget vehicula. Donec viverra blandit nunc, nec tempor ligula ullamcorper
            venenatis.
          </p>

        </div>

        <div class="testimonials-right">

          <div class="testimonials-card">
            <img src="/images/quote.png" alt="quote icon" class="quote-img">

            <p class="testimonials-text">
              "Proin feugiat tortor non neque eleifend, at fermentum est elementum. Ut mollis leo odio vulputate rutrum.
              Nunc sagittis
              sit amet ligula ut eleifend. Mauris consequat mauris sit amet turpis commodo fermentum. Quisque consequat
              tortor ut nisl
              finibus".
            </p>

            <div class="testimonials-client">

              <div class="client-img-box">
                <img src="/images/client.jpg" alt="client christine rose">
              </div>

              <div class="client-detail">
                <h4 class="client-name">Christine Rose</h4>

                <p class="client-title">Customer</p>
              </div>

            </div>
          </div>

        </div>

      </section>





      <!--
        - #BLOG
      -->

      <section class="blog" id="blog">

        <p class="section-subtitle">Our Blog</p>

        <h2 class="section-title">Latest Blog & News</h2>

        <div class="blog-grid">

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="/images/blog-1.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Blog example.</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="/images/calendar.png" alt="calendar icon">

                  <a href="#">07 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="/images/comment.png" alt="comment icon">

                  <a href="#">3 Comments</a>
                </div>

              </div>

            </div>

          </div>

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="/images/blog-2.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Blog example.</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="/images/calendar.png" alt="calendar icon">

                  <a href="#">04 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="/images/comment.png" alt="comment icon">

                  <a href="#">10 Comments</a>
                </div>

              </div>

            </div>

          </div>

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="/images/blog-3.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Blog example.</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="/images/calendar.png" alt="calendar icon">

                  <a href="#">01 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="/images/comment.png" alt="comment icon">

                  <a href="#">5 Comments</a>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section>

    </main>


  </div>

@endsection