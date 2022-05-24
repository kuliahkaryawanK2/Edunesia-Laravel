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
            <span class="underline-img">Our Blog<img src="/images/banner-line.png" alt="line"></span>
          </h1>

          <p class="section-text">
            Portofolio Kami
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

</body>

@endsection
