<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ilmupedia</title>
  <meta name="description"
    content="ilmupedia.co.id adalah portal komunitas milik Telkomsel untuk para anak muda yang keren, kreatif, dan inspiratif. Temukan banyak keuntungan dengan bergabung dengan website ini.">
  <meta name="keywords"
    content="LOOP, Telkomsel, LOOP Station, Info produk, LOOP event, Musik, Games, Film, Hobi, Hang Out Place, simPATI">
  <meta name="author" content="Ilmupedia">
  <meta property="og:title" content="Ilmupedia | Ilmupedia.co.id" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@loop_id">
  <meta name="twitter:title" content="Ilmupedia Ilmupedia">
  <meta name="twitter:description"
    content="ilmupedia.co.id adalah portal komunitas milik Telkomsel untuk para anak muda yang keren, kreatif, dan inspiratif. Temukan banyak keuntungan dengan bergabung dengan website ini.">
  <meta name="twitter:creator" content="@loop_id">
  <meta name="twitter:image:src" content="">
  <meta name="twitter:domain" content="ilmupedia.co.id">
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description"
    content="ilmupedia.co.id adalah portal komunitas milik Telkomsel untuk para anak muda yang keren, kreatif, dan inspiratif. Temukan banyak keuntungan dengan bergabung dengan website ini.">
  <meta property="og:image:secure_url" content="" />
  <meta property="fb:app_id" content="" />
  <meta name="facebook-domain-verification" content="" />

  <!--================== stylesheet ==================-->
  <?php
  $sto = stream_context_create(
      array(
          'http' => array(
              'timeout' => 1
              ),
          )
      );
  echo file_get_contents("stylesheet.php", 0 , $sto);
  ?>
</head>

<body>
  <!-- ::Header Start -->
  <header class="header-sticky header-absolute">
    <?php include('navbar.php') ?>
  </header>
  <!-- ::Header End -->

  <main class="">
    <section class="home_sitebanner parallax-wrap pt-lg-0">
      <div class="container">
        <div class="row g-xl-5">
          <!-- ::HeroCaption Start -->
          <div class="site_caption col-lg-6 mb-5 mb-xl-0" data-aos="zoom-in">
            <div class="">
              <h1>Sahabat Belajar Terbaik</h1>
              <p>Akses ribuan konten belajar gratis dan premium!</p>
              <a href="" class="btn btn-primary">Start Tryout!</a>
            </div>
          </div>
          <!-- ::HeroCaption End -->

          <!-- ::HeroImage Start -->
          <div class="site_img col-11 col-sm-8 col-lg-6">
            <!-- Hero image -->
            <div class="hero_img_block" data-aos="fade-down">
              <img src="assets/images/bg/home-hero.avif" alt="ilmupedia">
            </div>
            <figure class="layer svg_parallax star_object svg_object_yellow" data-aos="zoom-in" data-depth="-0.5">
              <?= file_get_contents("assets/images/element/star.svg"); ?>
            </figure>
            <figure class="layer svg_parallax circle_object svg_object_blue" data-aos="zoom-in" data-depth="0.4">
              <?= file_get_contents("assets/images/element/circle.svg"); ?>
            </figure>
            <figure class="layer svg_parallax triangle_object svg_object_orange" data-aos="zoom-in" data-depth="0.8">
              <?= file_get_contents("assets/images/element/triangle.svg"); ?>
            </figure>
          </div>
          <!-- ::HeroImage End -->

        </div>
      </div>

    </section>

    <section class="section_feature">
      <div class="container">

        <!-- ::Product Start -->
        <div class="row mb-3 mb-md-5">
          <div class="col">
            <h2 class="mb-0">Online Terus di Aplikasi Favorit</h2>
          </div>
        </div>

        <div class="swiper swiper-offset" data-aos="fade-in" data-swiper-options='{
          "spaceBetween": 12,
          "breakpoints": { 
            "576": {"slidesPerView": 1},
            "768": {"slidesPerView": 2},
            "992": {"slidesPerView": 3},
            "1600": {"slidesPerView": 4}
          }}'>

          <div class="swiper-wrapper">

            <!-- Swipper item -->
            <div class="swiper-slide">
              <a href="" class="card card-img-scale bg-body overflow-hidden stretched-link">
                <!-- Image -->
                <div class="card-img-scale-wrapper ratio ratio-16x9">
                  <img src="assets/images/bg/tsel1.avif" class="img-scale" alt="Product">
                </div>
              </a>
            </div>

            <!-- Swipper item -->
            <div class="swiper-slide">
              <a href="" class="card card-img-scale bg-body overflow-hidden stretched-link">
                <!-- Image -->
                <div class="card-img-scale-wrapper ratio ratio-16x9">
                  <img src="assets/images/bg/tsel2.avif" class="img-scale" alt="Product">
                </div>
              </a>
            </div>

            <!-- Swipper item -->
            <div class="swiper-slide">
              <a href="" class="card card-img-scale bg-body overflow-hidden stretched-link">
                <!-- Image -->
                <div class="card-img-scale-wrapper ratio ratio-16x9">
                  <img src="assets/images/bg/tsel3.avif" class="img-scale" alt="Product">
                </div>
              </a>
            </div>

            <!-- Swipper item -->
            <div class="swiper-slide">
              <a href="" class="card card-img-scale bg-body overflow-hidden stretched-link">
                <!-- Image -->
                <div class="card-img-scale-wrapper ratio ratio-16x9">
                  <img src="assets/images/bg/tsel4.avif" class="img-scale" alt="Product">
                </div>
              </a>
            </div>

            <!-- Swipper item -->
            <div class="swiper-slide">
              <a href="" class="card card-img-scale bg-body overflow-hidden stretched-link">
                <!-- Image -->
                <div class="card-img-scale-wrapper ratio ratio-16x9">
                  <img src="assets/images/bg/tsel5.avif" class="img-scale" alt="Product">
                </div>
              </a>
            </div>

          </div>
        </div>
        <!-- ::Product End -->

        <!-- ::Services Start -->
        <div class="row g-3 pt-7 pt-xl-8">
          <div class="col-12">
            <h3 class="section_subtitle rotate-n4">#Layanan</h3>
          </div>

          <!-- ::Services Item -->
          <div class="col-12 col-md-4" data-aos="fade-up">
            <div class="card bg-yellow card-hover-shadow">
              <a href="#" class="stretched-link"></a>
              <div class="card-body text-black p-xl-5">
                <div class="row">
                  <div class="col-3 col-md-6 col-lg-4 col-xxl-3 mb-3">
                    <img src="assets/images/element/Users-Four.svg" alt="Services">
                  </div>
                  <div class="col-12 col-xxl-9">
                    <h5>Murid SMP/SMA</h5>
                    Akses ribuan video belajar, artikel, info event online dan offline, serta mini games seru!
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- ::Services Item -->
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card bg-orange card-hover-shadow">
              <a href="#" class="stretched-link"></a>
              <div class="card-body text-black p-xl-5">
                <div class="row">
                  <div class="col-3 col-md-6 col-lg-4 col-xxl-3 mb-3">
                    <img src="assets/images/element/User-Multiple-Male-Female.svg" alt="Services">
                  </div>
                  <div class="col-12 col-xxl-9">
                    <h5>Pengajar</h5>
                    Akses ribuan konten belajar untuk guru, informasi sertifikasi, pelatihan dan seminar, serta artikel
                    seru!
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- ::Services Item -->
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card bg-blue card-hover-shadow">
              <a href="#" class="stretched-link"></a>
              <div class="card-body text-black p-xl-5">
                <div class="row">
                  <div class="col-3 col-md-6 col-lg-4 col-xxl-3 mb-3">
                    <img src="assets/images/element/Multiple-Neutral-2.svg" alt="Services">
                  </div>
                  <div class="col-12 col-xxl-9">
                    <h5>Wali Murid</h5>
                    Pilih konten belajar untuk anak Anda , dapatkan info acara online/offline, dan akses info seputar
                    sekolah favorit!
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!--==================== ::Section Article Start ====================-->
    <section class="pb-0">
      <div class="container">
        <div class="row g-5">
          <div class="col-12 col-xl-4 col-xxl-3">
            <h3 class="section_subtitle bg-yellow rotate-4">#Konten</h3>
            <h4>Akses ribuan konten belajar gratis dan premium!</h4>
          </div>
          <div class="col-12 col-xl-8 ms-xl-auto">
            <div class="table-responsive-md pb-3 pb-md-0">
              <div class="row g-3 flex-nowrap flex-md-wrap">

                <!-- Content Card -->
                <div class="col-8 col-md-4" data-aos="fade-up">
                  <a href="#konten" class="card card-img-scale stretched-link">
                    <div class="card-img-scale-wrapper ratio ratio-1x1">
                      <img src="assets/images/bg/konten1.avif" class="img-scale" alt="Konten">
                    </div>
                    <div class="tagline">
                      Lifestyle & Fashion
                    </div>
                  </a>
                </div>

                <!-- Content Card -->
                <div class="col-8 col-md-4" data-aos="fade-up" data-aos-delay="100">
                  <a href="#konten" class="card card-img-scale stretched-link">
                    <div class="card-img-scale-wrapper ratio ratio-1x1">
                      <img src="assets/images/bg/konten2.avif" class="img-scale" alt="Konten">
                    </div>
                    <div class="tagline">
                      Entertainment
                    </div>
                  </a>
                </div>

                <!-- Content Card -->
                <div class="col-8 col-md-4" data-aos="fade-up" data-aos-delay="200">
                  <a href="#konten" class="card card-img-scale stretched-link">
                    <div class="card-img-scale-wrapper ratio ratio-1x1">
                      <img src="assets/images/bg/konten3.avif" class="img-scale" alt="Konten">
                    </div>
                    <div class="tagline">
                      Techno & Games
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-auto ms-auto">
            <a class="icon-link icon-link-hover" href="#">Lihat Semua<i class="bi bi-arrow-right"></i> </a>
          </div>
        </div>
      </div>
    </section>
    <!--==================== ::Section Article End ====================-->

    <!--==================== ::Section Adeva Start ====================-->
    <section class="my-5">
      <div class="container">
        <div class="row g-7 g-xl-5 justify-content-around">
          <div class="col-8 col-md-6 col-xl-4 order-md-last position-relative pt-6" data-aos="fade-up">
            <div class="card ratio ratio-4x3 rotate-10 shadow-lg">
              <img src="assets/images/bg/adeva.avif" alt="adeva">
            </div>
            <div class="section_subtitle rotate-n4 brand_logo border">
              <img src="assets/images/element/adeva-title.avif" alt="adeva">
            </div>
          </div>
          <div class="col-md-6 col-xl-4 text-center text-md-start" data-aos="fade-up" data-aos-delay="100">
            <h2>Yuk, Coba Belajar Bareng Adeva!</h2>
            <div class="subtitle mb-4">Asisten belajar berbasis AI, siap menjawab pertanyaan kamu seputar materi
              pelajaran</div>
            <a href="" class="btn btn-primary">Coba Sekarang!</a>
          </div>
        </div>
      </div>
    </section>
    <!--==================== ::Section Adeva End ====================-->

    <!--==================== ::Section Tryout Start ====================-->
    <section class="bg-primary-alt">
      <div class="container text-center text-lg-start">
        <div class="row justify-content-center g-4 g-lg-7 g-xxl-8">
          <div class="col-10 col-md-8 col-lg-6 col-xxl-5 mb-5 mb-lg-0 d-flex align-items-center" data-aos="fade-up">
            <img src="assets/images/bg/tryout.png" alt="Tryout">
          </div>
          <div class="col-md-8 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="section_subtitle rotate-n4">#Tryout</h3>
            <div class="text-white">
              <h2>Yuk, coba latihan soal di Ilmupedia Tryout!</h2>
              <p>Akses ratusan soal mata pelajaran SMA untuk tingkatkan kemampuan kamu. Daftar
                sekarang dan nikmati 2 sesi gratis untuk memulai perjalanan belajarmu!</p>
            </div>
            <a href="" class="btn btn-secondary mt-4">Coba Gratis</a>
          </div>
        </div>
      </div>
    </section>
    <!--==================== ::Section Tryout End ====================-->

    <section class="jarallax vh-50" data-jarallax data-speed="0.75">
      <img src="assets/images/bg/register.avif" class="jarallax-img" alt="">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 me-md-auto offset-md-1 text-center text-md-start" data-aos="fade-up">
            <h2>Daftar Sekarang</h2>
            <h4 class="fw-medium mb-5">Akses produk dan layanan Ilmupedia secara lengkap!</h4>
            <a href="" class="btn btn-warning btn-lg rounded-3 shadow_outline">Daftar Sekarang</a>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-xl-10">
            <div class="card rounded-5 border border-dark shadow_outline">
              <div class="card-body p-5 p-xxl-7">
                <div class="row justify-content-between gy-4 gy-md-0">
                  <div class="col-lg-5 text-center text-lg-start d-lg-flex align-items-center">
                    <h5>Didukung oleh platform edukasi favorit!</h5>
                  </div>
                  <div class="col-lg-7 col-xxl-6">
                    <div class="row justify-content-center g-3 g-md-6 g-lg-2 g-xxl-2">
                      <div class="col-7 col-md-4 d-flex align-items-center">
                        <a href="" class="btn btn-white rounded-3">
                          <img src="assets/images/element/kuncie-logo.svg" alt="">
                        </a>
                      </div>
                      <div class="col-7 col-md-4 d-flex align-items-center">
                        <a href="" class="btn btn-white rounded-3">
                          <img src="assets/images/element/sekolahmu_logo.svg" alt="">
                        </a>
                      </div>
                      <div class="col-7 col-md-4 d-flex align-items-center">
                        <a href="" class="btn btn-white rounded-3">
                          <img src="assets/images/element/skulid-icon.svg" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==================== ::Footer Start ====================-->
    <?php include('footer.php') ?>
    <!--===================== ::Footer End =====================-->

  </main>

  <!--==================== ::Script Start ====================-->
  <?php include('script.php') ?>
  <!--===================== ::Script End =====================-->

</body>

</html>