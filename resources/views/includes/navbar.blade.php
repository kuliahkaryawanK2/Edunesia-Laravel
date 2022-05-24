<!--
      - #HEADER
    -->

    <header>

      <nav class="navbar">

        <div class="navbar-brand">
          <img src="/images/logo.png" alt="Educator Logo">
        </div>

        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="./">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('tentang') }}">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('layanan') }}">Layanan</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('portofolio') }}">Portofolio</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kontak') }}">Kontak Kami</a>
          </li>

        </ul>

        <button class="btn btn-primary">
          <p class="btn-text">Konsultasi Sekarang</p>
          <span class="square"></span>
        </button>

        <button class="nav-toggle-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </nav>

    </header>