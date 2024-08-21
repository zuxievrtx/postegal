<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Office Details - POSIND TEGAL</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    @extends('layout.app')
</head>

<body>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs" style="margin-top: 10px">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="office.html">Office</a></li>
                    <li>Office Details</li>
                </ol>
                <h2>
                    Pusat Informasi Kantor Pos Adiwerna Kabupaten Tegal
                </h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Office Details Section ======= -->
        <section id="office-details" class="office-details">
            <div class="container">
                <div class="content-wrapper">
                    <div class="office-info">
                        <h2>
                            Informasi Kontak
                        </h2>
                        <h5>
                            Kantor Pos Adiwerna Kabupaten Tegal
                        </h5>
                        <ul>
                            <ul>
                                <li><i class="bi bi-geo-alt"></i> : Jl. Raya Sel. Banjaran, Widuri, Adiwerna, Kec.
                                    Adiwerna, Kabupaten Tegal, Jawa Tengah 52194 </li>
                                <li><i class="bi bi-arrow-right-circle"></i> : <a
                                        href="https://www.google.com/maps/dir//Kantor+Pos+Adiwerna,+Jl.+Raya+Sel.+Banjaran,+Widuri,+Adiwerna,+Kec.+Adiwerna,+Kabupaten+Tegal,+Jawa+Tengah+52194/@-6.9337211,109.1353696,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e6fb92b2eaff1d3:0xc7b7c3bf11066c09!2m2!1d109.135372!2d-6.9337208?entry=ttu">Petunjuk
                                        Arah</a></li>
                                <li><i class="bi bi-telephone"></i> : (0283) 444933 </li>
                                <li><i class="bi bi-globe"></i> : <a
                                        href="https://www.posindonesia.co.id/en">www.posindonesia.co.id</a></li>
                                <li><i class="bi bi-envelope"></i> : 52121 - 52194</li>
                            </ul>
                            <li><i class="bi bi-clock"></i> Jam Operasional : <span class="chevron">▶</span>
                                <div class="dropdown">
                                    <div class="dropdown-content">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Hari</th>
                                                    <th>Jam</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Senin</td>
                                                    <td>06.00 - 22.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selasa</td>
                                                    <td>06.00 - 22.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Rabu</td>
                                                    <td>06.00 - 22.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Kamis</td>
                                                    <td>06.00 - 22.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumat</td>
                                                    <td>06.00 - 22.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Sabtu</td>
                                                    <td>06.00 - 22.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Minggu</td>
                                                    <td>06.00 - 22.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                    </div>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.554564142958!2d109.1353696!3d-6.9337211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb92b2eaff1d3%3A0xc7b7c3bf11066c09!2sKantor%20Pos%20Adiwerna!5e0!3m2!1sid!2sid!4v1723431212788!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Office Details Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chevron = document.querySelector('.chevron');
            const dropdown = chevron.parentElement.querySelector('.dropdown');

            chevron.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdown.classList.toggle('show');
            });

            document.addEventListener('click', function() {
                dropdown.classList.remove('show');
            });
        });
    </script>
</body>

</html>
