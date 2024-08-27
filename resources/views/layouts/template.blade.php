<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UMKM Sumenep || E-Commerce</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/fav.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href='{{ asset('assets') }}/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="{{ asset('assets') }}/css/vertical-responsive-menu.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/night-mode.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/docs/docs/dist/css/bootstrap-select.min.css"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/semantic/semantic.min.css">



    <link href="{{ asset('assets') }}/css/vertical-responsive-menu1.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/instructor-responsive.css" rel="stylesheet">


    <!-- Vendor Stylesheets -->
    <link href="{{ asset('assets') }}/vendor/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">



</head>

<body>

    @include('sweetalert::alert')

    @include('layouts.components.header')

    <!-- Left Sidebar Start -->
    <nav class="vertical_nav">
        <div class="left_section menu_left" id="js-menu">
            <div class="left_section">
                <h6 class="left_title">BERANDA</h6>
                <ul>
                    <li class="menu--item">
                        <a href="/beranda" class="menu--link {{ request()->is('beranda') ? 'active' : '' }}"
                            title="Home">
                            <i class='uil uil-home-alt menu--icon'></i>
                            <span class="menu--label">Beranda</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="/produk" class="menu--link {{ request()->is('produk') ? 'active' : '' }}"
                            title="Explore">
                            <i class='uil uil-layer-group menu--icon'></i>
                            <span class="menu--label"> Produk</span>
                        </a>
                    </li>
                    <li class="menu--item menu--item__has_sub_menu">
                        <label class="menu--link" title="Categories">
                            <i class='uil uil-layers menu--icon'></i>
                            <span class="menu--label">Kategori</span>
                        </label>
                        <ul class="sub_menu">
                            <li class="sub_menu--item">
                                <a href="#" class="sub_menu--link">Makanan</a>
                            </li>
                            <li class="sub_menu--item">
                                <a href="#" class="sub_menu--link">Minuman</a>
                            </li>
                            <li class="sub_menu--item">
                                <a href="#" class="sub_menu--link">Pakaian</a>
                            </li>
                            <li class="sub_menu--item">
                                <a href="#" class="sub_menu--link">Aksesoris</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu--item">
                        <a href="#" class="menu--link" title="Saved Courses">
                            <i class="uil uil-heart-alt menu--icon"></i>
                            <span class="menu--label">Promo Menarik</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="left_section pt-2">
                <h6 class="left_title">SETTING & LAINNYA</h6>
                <ul>
                    <li class="menu--item">
                        <a href="setting.html" class="menu--link" title="Setting">
                            <i class='uil uil-cog menu--icon'></i>
                            <span class="menu--label">Setting</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="help.html" class="menu--link" title="Help">
                            <i class='uil uil-question-circle menu--icon'></i>
                            <span class="menu--label">Bantuan</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="report_history.html" class="menu--link" title="Report History">
                            <i class='uil uil-windsock menu--icon'></i>
                            <span class="menu--label">HIstori Belanja</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="feedback.html" class="menu--link" title="Send Feedback">
                            <i class='uil uil-comment-alt-exclamation menu--icon'></i>
                            <span class="menu--label">Beri Masukan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="left_footer">
                <ul>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                    <li><a href="#">UMKM</a></li>
                    <li><a href="#">Hak Cipta</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Ketentuan</a></li>
                </ul>
                <div class="left_footer_content">
                    <p>© 2024 <strong>Ananda & Rahman</strong><br>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </nav>
    <!-- Left Sidebar End -->
    <!-- Body Start -->
    <div class="wrapper">
        @yield('content')
        <footer class="footer mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f1">
                            <a href="about_us.html">About</a>
                            <a href="our_blog.html">Blog</a>
                            <a href="career.html">Careers</a>
                            <a href="press.html">Press</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f1">
                            <a href="help.html">Help</a>
                            <a href="coming_soon.html">Advertise</a>
                            <a href="coming_soon.html">Developers</a>
                            <a href="contact_us.html">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f1">
                            <a href="terms_of_use.html">Copyright Policy</a>
                            <a href="terms_of_use.html">Terms</a>
                            <a href="terms_of_use.html">Privacy Policy</a>
                            <a href="sitemap.html">Sitemap</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f3">
                            <a href="#" class="btn1542">Teach on Cursus</a>
                            <div class="lng_btn">
                                <div class="ui language bottom right pointing dropdown floating" id="languages"
                                    data-content="Select Language">
                                    <a href="#"><i class='uil uil-globe lft'></i>Language<i
                                            class='uil uil-angle-down rgt'></i></a>
                                    <div class="menu">
                                        <div class="scrolling menu">
                                            <div class="item" data-percent="100" data-value="en"
                                                data-english="English">
                                                <span class="description">English</span>
                                                English
                                            </div>
                                            <div class="item" data-percent="94" data-value="da"
                                                data-english="Danish">
                                                <span class="description">dansk</span>
                                                Danish
                                            </div>
                                            <div class="item" data-percent="94" data-value="es"
                                                data-english="Spanish">
                                                <span class="description">Español</span>
                                                Spanish
                                            </div>
                                            <div class="item" data-percent="34" data-value="zh"
                                                data-english="Chinese">
                                                <span class="description">简体中文</span>
                                                Chinese
                                            </div>
                                            <div class="item" data-percent="54" data-value="zh_TW"
                                                data-english="Chinese (Taiwan)">
                                                <span class="description">中文 (臺灣)</span>
                                                Chinese (Taiwan)
                                            </div>
                                            <div class="item" data-percent="79" data-value="fa"
                                                data-english="Persian">
                                                <span class="description">پارسی</span>
                                                Persian
                                            </div>
                                            <div class="item" data-percent="41" data-value="fr"
                                                data-english="French">
                                                <span class="description">Français</span>
                                                French
                                            </div>
                                            <div class="item" data-percent="37" data-value="el"
                                                data-english="Greek">
                                                <span class="description">ελληνικά</span>
                                                Greek
                                            </div>
                                            <div class="item" data-percent="37" data-value="ru"
                                                data-english="Russian">
                                                <span class="description">Русский</span>
                                                Russian
                                            </div>
                                            <div class="item" data-percent="36" data-value="de"
                                                data-english="German">
                                                <span class="description">Deutsch</span>
                                                German
                                            </div>
                                            <div class="item" data-percent="23" data-value="it"
                                                data-english="Italian">
                                                <span class="description">Italiano</span>
                                                Italian
                                            </div>
                                            <div class="item" data-percent="21" data-value="nl"
                                                data-english="Dutch">
                                                <span class="description">Nederlands</span>
                                                Dutch
                                            </div>
                                            <div class="item" data-percent="19" data-value="pt_BR"
                                                data-english="Portuguese">
                                                <span class="description">Português(BR)</span>
                                                Portuguese
                                            </div>
                                            <div class="item" data-percent="17" data-value="id"
                                                data-english="Indonesian">
                                                <span class="description">Indonesian</span>
                                                Indonesian
                                            </div>
                                            <div class="item" data-percent="12" data-value="lt"
                                                data-english="Lithuanian">
                                                <span class="description">Lietuvių</span>
                                                Lithuanian
                                            </div>
                                            <div class="item" data-percent="11" data-value="tr"
                                                data-english="Turkish">
                                                <span class="description">Türkçe</span>
                                                Turkish
                                            </div>
                                            <div class="item" data-percent="10" data-value="kr"
                                                data-english="Korean">
                                                <span class="description">한국어</span>
                                                Korean
                                            </div>
                                            <div class="item" data-percent="7" data-value="ar"
                                                data-english="Arabic">
                                                <span class="description">العربية</span>
                                                Arabic
                                            </div>
                                            <div class="item" data-percent="6" data-value="hu"
                                                data-english="Hungarian">
                                                <span class="description">Magyar</span>
                                                Hungarian
                                            </div>
                                            <div class="item" data-percent="6" data-value="vi"
                                                data-english="Vietnamese">
                                                <span class="description">tiếng Việt</span>
                                                Vietnamese
                                            </div>
                                            <div class="item" data-percent="5" data-value="sv"
                                                data-english="Swedish">
                                                <span class="description">svenska</span>
                                                Swedish
                                            </div>
                                            <div class="item" data-precent="4" data-value="pl"
                                                data-english="Polish">
                                                <span class="description">polski</span>
                                                Polish
                                            </div>
                                            <div class="item" data-percent="6" data-value="ja"
                                                data-english="Japanese">
                                                <span class="description">日本語</span>
                                                Japanese
                                            </div>
                                            <div class="item" data-percent="0" data-value="ro"
                                                data-english="Romanian">
                                                <span class="description">românește</span>
                                                Romanian
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="footer_bottm">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="fotb_left">
                                        <li>
                                            <a href="index.html">
                                                <div class="footer_logo">
                                                    <img src="{{ asset('assets') }}/images/logo1.svg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <p>© 2024 <strong>Cursus</strong>. All Rights Reserved.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="edu_social_links">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Body End -->

    <script src="{{ asset('assets') }}/js/vertical-responsive-menu.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="{{ asset('assets') }}/vendor/semantic/semantic.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap-select/docs/docs/dist/js/bootstrap-select.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script src="{{ asset('assets') }}/js/night-mode.js"></script>


</body>

</html>
