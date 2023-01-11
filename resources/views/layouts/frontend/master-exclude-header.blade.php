<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/image-removebg-preview.png') }}" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- css include costum -->
    <link rel="stylesheet" href="{{ asset('fe/css/style.css') }}">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- icon font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar -->
    @include('layouts.frontend.partial.header')
    <div class="container">
        <!-- yield content -->
        @yield('content')
        <!-- yield content -->
    </div>

    <!-- start footer -->
    <footer class="text-center text-lg-start text-muted shadow-nih bg-light">
        <div class="container">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Mari Terhubung Dengan Sosial Media Kami</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="https://web.facebook.com/profile.php?id=100079256423101" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://id.wikipedia.org/wiki/Pekunden,_Banyumas,_Banyumas" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="https://www.instagram.com/deswita_pekundenn/" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://www.youtube.com/@desawisatapekunden8752" class="me-4 text-reset">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section>
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-10 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Desa Wisata Pekunden
                            </h6>
                            <p>
                                Pekunden adalah sebuah desa di kecamatan Banyumas, Banyumas, Jawa Tengah, Indonesia.
                            </p>
                        </div>

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
                            <p><i class="fas fa-home me-3"></i> Kec Bannyumas</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                pekunden@gmail.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i>08786262522</p>
                        </div>
                        <!-- Grid column -->

                        {{-- map --}}
                        <div class="text-uppercase fw-bold col-md-4 col-lg-3 mx-auto mb-md-0 mb-4">
                            <div class="footer-map">
                                <div class="footer-nav-title">Temukan Kami</div>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15822.006602629157!2d109.27497379256691!3d-7.520131106130033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6544aaf0b5e925%3A0x3585450fd704511c!2sPekunden%2C%20Kec.%20Banyumas%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1670850998976!5m2!1sid!2sid"
                                    width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

        </div>
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright
        </div>
        <!-- Copyright -->
    </footer>
    <!-- end footer -->

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    @yield('script')
</body>

</html>
