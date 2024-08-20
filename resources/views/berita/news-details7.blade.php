<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>News Details - POSIND TEGAL</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/poslogo.JPG" rel="icon" />
    <link href="assets/img/poslogo.JPG" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs" style="margin-top: 10px">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html #from">From Us</a></li>
            <li>News Details</li>
          </ol>
          <h2>
            Perkuat UMKM di BUMN, Erick Thohir Resmikan Vending Machine Binaan
            PosIND Bandung
          </h2>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- ======= News Details Section ======= -->
      <section id="news-details" class="news-details">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-8">
              <div class="news-details-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="assets/img/news7.jpg" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/newss7.jpg" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/newsss7.jpg" alt="" />
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="news-info">
                <h3>
                  Menteri BUMN, Erick Thohir, meresmikan program Vending Machine
                  dan UMKM Corner PosIND di Graha Pos Indonesia Jalan Banda,
                  Kota Bandung.
                </h3>
                <ul>
                  <li><strong>Date</strong>: July 20, 2024</li>
                  <li>
                    <strong>URL</strong> :
                    <a
                      href="https://rejabar.republika.co.id/berita/sgwwfa512/perkuat-umkm-di-bumn-erick-thohir-resmikan-vending-machine-binaan-posind-bandung"
                      >bit.ly/POSINDBANDUNG</a
                    >
                  </li>
                </ul>
              </div>
              <div class="news-description">
                <h5>
                  Peluncuran Vending Machine dan UMKM Corner PosIND oleh Menteri
                  BUMN di Bandung
                </h5>
                <div id="dropdown-content" class="dropdown-content">
                  <p>
                    Menteri BUMN, Erick Thohir, meresmikan program Vending
                    Machine dan UMKM Corner PosIND di Graha Pos Indonesia,
                    Bandung. Program ini mendukung pemasaran produk UMKM dengan
                    Vending Machine dan UMKM Corner di lokasi strategis. Arya
                    mengapresiasi inisiatif ini dan mendorong kolaborasi BUMN
                    dengan UMKM untuk meningkatkan ekonomi dan kesejahteraan
                    UMKM. Dirut Pos Indonesia, Faizal Rochmad Djoemadi,
                    menyebutkan kerja sama dengan 100 mitra binaan menawarkan
                    berbagai produk makanan, minuman, fashion, dan craft.
                  </p>
                </div>
                <button id="dropdown-button" class="btn btn-primary">
                  Read More
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End News Details Section -->
    </main>
    <!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Custom JS for button animation -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".news-details-slider", {
          speed: 400,
          loop: true,
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });

        var dropdownButton = document.getElementById("dropdown-button");
        var dropdownContent = document.getElementById("dropdown-content");

        dropdownButton.addEventListener("click", function () {
          dropdownContent.classList.toggle("show");

          if (dropdownContent.classList.contains("show")) {
            dropdownButton.textContent = "Show Less";
          } else {
            dropdownButton.textContent = "Read More";
          }
        });
      });
    </script>
  </body>
</html>
