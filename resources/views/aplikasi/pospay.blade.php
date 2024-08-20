<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POSIND TEGAL - Our Gallery</title>

  @extends('layout.app')
</head>

<body>
  <x-navbar />

  <!-- Home Section Start -->
  <div id="home" class="home">
    <div class="content">
      <h5>Selamat Datang Di Kantor Pos Cabang Tegal</h5>
      <h1>Siap Kirim Dari <span class="changecontent"></span></h1>
      <div class="d-flex justify-content-center">
        <a href="https://youtu.be/0wNnrZ1jQeU?si=dHPGaylzPQecjRxX" class="glightbox btn-watch-video">
          <i class="bi bi-play-circle"></i>
          <span>Watch Video</span>
        </a>
      </div>
    </div>
  </div>
  <!-- Home Section End -->
  <main id="main">


    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in">
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('/assets/img/Logo Dapenpos.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/img/Logistik.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/img/Logo ULBI.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/img/Logo Pos Properti.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/img/Logo Posfin.png') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- End Cliens Section -->

    <section id="features" class="features-section">
      <div class="container-features">
        <div class="row text-center mb-5">
          <div class="section-title" data-aos="fade-up">
            <h2>POSPAY</h2>
            <p></p>
          </div>
        </div>

        <!-- Row for features above the phone image -->
        <div class="row text-center justify-content-center">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-box">
              <div class="icon-box">
                <span class="feature-number">1</span>
              </div>
              <h4>Install</h4>
              <p style="text-align: justify;">Download dan install aplikasi POSPAY dari App Store maupun PlayStore.</p>
              <div class="mt-3">
                <a href="#" class="btn btn-primary">
                  <i class="fas fa-download" style="margin-right: 5px;"></i> Download Now
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-box">
              <div class="icon-box">
                <span class="feature-number">2</span>
              </div>
              <h4>Buat Akun</h4>
              <p style="text-align: justify;"> Registrasi dengan klik Buat akun. Lalu
                isikan dengan Nama, NO. HP yang digunakan untuk SMS, Email, terakhir isikan kode referal yaitu sebagai berikut:
                AE50004045.</p>
            </div>
          </div>
        </div>

        <!-- Row for phone image with features on the left and right -->
        <div class="row text-center align-items-center">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-box">
              <div class="icon-box">
                <span class="feature-number">3</span>
              </div>
              <h4>Isikan</h4>
              <p style="text-align: justify;">Ikuti proses nya untuk membuat username dan password dan klik buat akun sampai bisa proses login.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <img src="{{asset ('assets/img/pospay (1).png') }}" alt="Handphone" class="center-phone-image">
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-box">
              <div class="icon-box">
                <span class="feature-number">4</span>
              </div>
              <h4>Untuk Apa?</h4>
              <p style="text-align: justify;">Aplikasi ini bisa digunakan untuk menyimpan uang, pembayaran tagihan tanpa ada potongan, administrasi bulanan dan bunga.</p>
            </div>
          </div>
        </div>

        <!-- Row for features below the phone image -->
        <div class="row text-center justify-content-center">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-box">
              <div class="icon-box">
                <span class="feature-number">5</span>
              </div>
              <h4>Layanan POSPAY</h4>
              <ol style="text-align: justify;">
                <li style="font-family: 'Josefin Sans'">Layanan Bill Payment: Pembayaran berbagai Tagihan seperti Listrik, PDAM, Cicilan Motor, Mobil, BPJS, Pembelian pulsa, token listrik, dan masih banyak lagi.</li>
                <li style="font-family: 'Josefin Sans'">Pengiriman Uang melalui layanan Weselpos Instan. Kirim uang secepat SMS.</li>
                <li style="font-family: 'Josefin Sans'">Pengelolaan Keuangan melalui Layanan Giropos: menyimpan dana di rekening Giropos, mudah, aman, dan nyaman.</li>
                <li style="font-family: 'Josefin Sans'">Fasilitas Scan QR Code untuk pembayaran/pembelian via merchant/Micro Payment dengan basis Rekening Giropos.</li>
                <li style="font-family: 'Josefin Sans'">Perencanaan Keuangan dll.</li>
              </ol>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-box">
              <div class="icon-box">
                <span class="feature-number">6</span>
              </div>
              <h4>Fitur Terbaru</h4>
              <ol style="text-align: justify;" style="font-family: 'Josefin Sans'">
                <li style="font-family: 'Josefin Sans'">Autodebit: Bisa transfer uang ke manapun dengan sesama rekening POSPAY secara rutin dan terjadwal.</li>
                <li style="font-family: 'Josefin Sans'">Oren Partner: Untuk mengelola dan memonitor kerja sama dengan mitra atau agen.</li>
              </ol>
            </div>
          </div>
        </div>

    </section>
    <footer id="footer" class="footer-animate">
      <div class="footer-top">
        <div class="container-fluid bg-dark footer py-5">
          <div class="container py-5">
            <div class="row g-5">
              <div class="col-lg-6 col-xl-3">
                <div class="footer-item-1">
                  <img src="{{asset ('assets/img/pos logo.png') }}" alt="" class="img-fluid logo-footer">
                  <div class="contact-info">
                    <i class="fas fa-phone" style="color: #47b2e4;"></i>Hello Pos: 1500161
                  </div>
                  <div class="contact-info">
                    <i class="fas fa-envelope" style="color: #47b2e4;"></i>halopos@posindonesia.co.id
                  </div>
                  <div class="contact-info">
                    <i class="bx bxl-facebook"></i><a href="https://www.facebook.com/kantorpostegal52100/">PosAja Tegal 52100</a>
                  </div>
                  <div class="contact-info">
                    <i class="bx bxl-instagram"></i><a href="https://www.instagram.com/posind_tegal?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">@posind_tegal</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-3">
                <div class="footer-item-2">
                  <div class="d-flex flex-column mb-4">
                    <h4 class="mb-4 text-white">Recent News</h4>
                    <a href="#">
                      <div class="d-flex align-items-center">
                        <div class="rounded-circle border border-2 border-primary overflow-hidden" style="width: 60px; height: 60px;">
                          <img src="{{asset ('assets/img/news1.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100 h-100" alt="">
                        </div>
                        <div class="d-flex flex-column ps-3">
                          <a href="https://www.tribunnews.com/techno/2024/05/18/pos-indonesia-sulap-3000-aset-gedung-jadi-tempat-kumpul-peminat-e-sport" class="h6 text-white">
                            Pos Indonesia Sulap 3.000 Aset Gedung Jadi Tempat Kumpul Peminat e-Sport
                          </a>
                          <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> May 18, 2024</small>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="d-flex flex-column">
                    <a href="#">
                      <div class="d-flex align-items-center">
                        <div class="rounded-circle border border-2 border-primary overflow-hidden" style="width: 60px; height: 60px;">
                          <img src="{{asset ('assets/img/news4.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100 h-100" alt="">
                        </div>
                        <div class="d-flex flex-column ps-3">
                          <a href="https://www.rri.co.id/bisnis/833809/dorong-umkm-naik-kelas-melalui-posaja-umkm-fest-2024"
                            class="h6 text-white">
                            POSIND Dorong UMKM Naik Kelas Melalui PosAja UMKM Fest 2024
                          </a>
                          <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> July 18, 2024</small>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-3">
                <div class="d-flex flex-column text-start footer-item-3">
                  <h4 class="mb-4 text-white">Quick Links</h4>
                  <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Home</a>
                  <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Services</a>
                  <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> From Us</a>
                  <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Q&A</a>
                  <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Our Gallery</a>
                  <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Our Apps</a>
                  <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Office</a>
                  <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Contact</a>
                </div>
              </div>
              <div class="col-lg-8 col-xl-3">
                <div class="footer-item-4">
                  <h4 class="mb-4 text-white">Our Services</h4>
                  <div class="row g-3">
                    <div class="col-6">
                      <div class="rounded overflow-hidden mb-8">
                        <img src="{{asset ('assets/img/Pos_Ekspor (1).png') }}" class="img-zoomin img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="rounded overflow-hidden mb-8">
                        <img src="{{asset ('assets/img/Pos_Nextday (1).png') }}" class="img-zoomin img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="rounded overflow-hidden mb-8">
                        <img src="{{asset ('assets/img/Pos_Reguler (1).png') }}" class="img-zoomin img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="rounded overflow-hidden mb-8">
                        <img src="{{asset ('assets/img/Pos_Sameday (1).png') }}" class="img-zoomin img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="rounded overflow-hidden mb-8">
                        <img src="{{asset ('assets/img/E_Paket.png') }}" class="img-zoomin img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="rounded overflow-hidden mb-8">
                        <img src="{{asset ('assets/img/EMS.png') }}" class="img-zoomin img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="rounded overflow-hidden mb-8">
                        <img src="{{asset ('assets/img/posaja (1).png') }}" class="img-zoomin img-fluid w-100 posaja-logo" alt="">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="rounded overflow-hidden mb-8">
                        <img src="{{asset ('assets/img/pospay.png') }}" class="img-zoomin img-fluid w-100" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy;<strong><span>POSIND TEGAL 2024</span></strong>
        </div>
        <div class="credits">
          <a href="https://bootstrapmade.com/"></a>
        </div>



      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" id="back-to-top"><i class="bi bi-arrow-up-short"></i></a>

    <div class="whatsapp-chat-container" id="whatsapp-chat-container">
      <div class="whatsapp-chat-bubble" id="whatsapp-chat-bubble">
        <span class="notification">CS</span>
        <i class="fab fa-whatsapp"></i>
        <a target="_blank" href="https://wa.me/6281384911009">
        </a>
      </div>
    </div>

</body>

</html>