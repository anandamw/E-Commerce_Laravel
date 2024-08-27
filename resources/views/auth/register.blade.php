<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from gambolthemes.net/html-items/cursus-new-demo/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 11:46:00 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, shrink-to-fit=9" />
    <meta name="description" content="Gambolthemes" />
    <meta name="author" content="Gambolthemes" />
    <title>Cursus - Sign Up</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('') }}assets/images/fav.png" />

    <!-- Stylesheets -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,500" rel="stylesheet" />
    <link href="{{ asset('') }}assets/vendor/unicons-2.0.1/css/unicons.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/css/vertical-responsive-menu.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/css/responsive.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/css/night-mode.css" rel="stylesheet" />

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('') }}assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/vendor/bootstrap-select/docs/docs/dist/css/bootstrap-select.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendor/semantic/semantic.min.css" />
</head>

<body>
    <!-- Signup Start -->
    <div class="sign_in_up_bg">
        <div class="container">
            <div class="row justify-content-lg-center justify-content-md-center">
                <div class="col-lg-12">
                    <div class="main_logo25" id="logo">
                        {{-- <a href="index.html"><img src="{{ asset('') }}assets/images/logo.svg" alt="" /></a>
                        <a href="index.html"><img class="logo-inverse"
                                src="{{ asset('') }}assets/images/ct_logo.svg" alt="" /></a> --}}
                    </div>
                </div>

                <div class="col-lg-6 col-md-8">
                    <div class="sign_form">
                        <h2>Selamat Datang di Berung Madure
                        </h2>
                        <p>Daftar untuk mulai belanja!</p>
                        <form action="/register" method="POST">
                            @csrf
                            <div class="ui search focus">
                                <div class="ui left icon input swdh11 swdh19">
                                    <input class="prompt srch_explore" type="text" name="username" id="id_username"
                                        placeholder="Username" autofocus />
                                </div>
                            </div>
                            <div class="ui search focus mt-15">
                                <div class="ui left icon input swdh11 swdh19">
                                    <input class="prompt srch_explore" type="email" name="email" id="email"
                                        placeholder="Email Address" />
                                </div>
                            </div>
                            <div class="ui search focus mt-15">
                                <div class="ui left icon input swdh11 swdh19">
                                    <input class="prompt srch_explore" type="no_telepon" name="no_telepon"
                                        id="no_telepon" placeholder="Phone Number" />
                                </div>
                            </div>

                            <div class="ui search focus mt-15">
                                <div class="ui left icon input swdh11 swdh19">
                                    <input class="prompt srch_explore" type="password" name="password" id="password"
                                        placeholder="Password" />
                                </div>
                            </div>
                            <div class="ui form mt-30 checkbox_sign">
                                <div class="inline field">
                                    <div class="ui checkbox mncheck">
                                        <input type="checkbox" tabindex="0" class="hidden" />
                                        <label>
                                            Saya menerima email dengan diskon menarik dan
                                            rekomendasi yang dipersonalisasi </label>
                                    </div>
                                </div>
                            </div>
                            <button class="login-btn" type="submit">Daftar</button>
                        </form>
                        <p class="sgntrm145">
                            Dengan mendaftar, Anda menyetujui Ketentuan
                            <a href="#">
                                Penggunaan
                            </a>
                            dan
                            <a href="#">
                                Kebijakan Privasi
                            </a>
                            kami.
                        </p>
                        <p class="mb-0 mt-30">
                            Sudah punya akun? <a href="/">Masuk</a>
                        </p>
                    </div>
                    <div class="sign_footer">
                        {{-- <img src="{{ asset('') }}assets/images/sign_logo.png" alt="" />© 2024
                        <strong>Cursus</strong>. All Rights Reserved. --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Signup End -->

    <script src="{{ asset('') }}assets/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap-select/docs/docs/dist/js/bootstrap-select.js"></script>
    <script src="{{ asset('') }}assets/vendor/semantic/semantic.min.js"></script>
    <script src="{{ asset('') }}assets/js/custom.js"></script>
    <script src="{{ asset('') }}assets/js/night-mode.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus-new-demo/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 11:46:00 GMT -->

</html>
