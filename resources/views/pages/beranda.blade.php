@extends('layouts.template')

@section('content')
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="section3125">
                        <h4 class="item_title">UMKM</h4>
                        <a href="live_streams.html" class="see150">See all</a>
                        <div class="la5lo1">
                            <div class="owl-carousel live_stream owl-theme">
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{ asset('assets') }}/images/left-imgs/img-1.jpg" alt="">
                                            <h4>Someone</h4>
                                            <p>Aktif<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{ asset('assets') }}/images/left-imgs/img-2.jpg" alt="">
                                            <h4>Someone</h4>
                                            <p>Aktif<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{ asset('assets') }}/images/left-imgs/img-9.jpg" alt="">
                                            <h4>Someone</h4>
                                            <p>Aktif<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{ asset('assets') }}/images/left-imgs/img-3.jpg" alt="">
                                            <h4>Someone</h4>
                                            <p>Aktif<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{ asset('assets') }}/images/left-imgs/img-4.jpg" alt="">
                                            <h4>Someone</h4>
                                            <p>Aktif<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{ asset('assets') }}/images/left-imgs/img-5.jpg" alt="">
                                            <h4>Someone</h4>
                                            <p>Aktif<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{ asset('assets') }}/images/left-imgs/img-6.jpg" alt="">
                                            <h4>Someone</h4>
                                            <p>Aktif<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{ asset('assets') }}/images/left-imgs/img-7.jpg" alt="">
                                            <h4>Someone</h4>
                                            <p>Aktif<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{ asset('assets') }}/images/left-imgs/img-8.jpg" alt="">
                                            <h4>Someone</h4>
                                            <p>Aktif<span></span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section3125 mt-50">
                        <h4 class="item_title">Produk Baru</h4>
                        <a href="#" class="see150">Lihat Semua</a>
                        <div class="la5lo1">
                            <div class="owl-carousel featured_courses owl-theme">

                                @foreach ($produks as $item)
                                    <div class="item">
                                        <div class="fcrse_1 mb-20">
                                            <a href="/produk/{{ $item->token_produk }}/detail" class="fcrse_img">
                                                <img src="{{ asset("thumbnail_produk/$item->thumbnail") }}" alt="">
                                                <div class="course-overlay">
                                                    <div class="badge_seller">Bestseller</div>
                                                    <div class="crse_reviews">
                                                        <i class='uil uil-star'></i>4.5
                                                    </div>
                                                    <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                </div>
                                            </a>
                                            <div class="fcrse_content">
                                                <div class="eps_dots more_dropdown">
                                                    <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                    <div class="dropdown-content">
                                                        <span><i class='uil uil-share-alt'></i>Bagikan</span>
                                                        <span><i class="uil uil-shopping-cart-alt"></i>Simpan</span>
                                                        <span><i class="uil uil-windsock"></i>Laporkan</span>
                                                    </div>
                                                </div>
                                                <div class="vdtodt">
                                                    <span class="vdt14">{{ $item->atr->sum('stok') }} Tersisa</span>
                                                    <span class="vdt14"> Terjual</span>
                                                </div>
                                                <a href="/produk/detail" class="crse14s">{{ $item->nama_produk }}</a>
                                                <a href="#"
                                                    class="crse-cate">{{ $item->subs->nama_sub_kategori }}</a>
                                                <div class="auth1lnkprce">
                                                    <p class="cr1fot">By <a href="#">Ananda Maulana Wahyudi</a></p>
                                                    <div class="prce142">
                                                        @if ($item->atr->min('harga') == $item->atr->max('harga'))
                                                            Rp {{ number_format($item->atr->max('harga')) }}
                                                        @else
                                                            Rp {{ number_format($item->atr->min('harga')) }} - Rp
                                                            {{ number_format($item->atr->max('harga')) }}
                                                        @endif
                                                    </div>
                                                    <button class="shrt-cart-btn" title="cart"><i
                                                            class="uil uil-shopping-cart-alt"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="section3126">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-history'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Temukan Produk Baru dan Unik</h4>
                                        <p>Nikmati pengalaman berbelanja dengan pilihan produk berkualitas dari UMKM terbaik
                                            kami, dengan
                                            inovasi dan kreativitas dalam setiap produknya.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-user-check'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Jelajahi Koleksi Terbaru</h4>
                                        <p>Temukan produk unik dari UMKM lokal dari daerah Sumenep yang menawarkan kualitas
                                            dan keunikan
                                            yang tidak bisa Anda temukan di tempat lain.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-play-circle'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Belanja Produk Karya Anak Bangsa</h4>
                                        <p>Dukung UMKM lokal dengan membeli produk-produk yang dibuat dengan penuh cinta dan
                                            dedikasi oleh
                                            pengusaha Indonesia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-presentation-play'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>10,000+ UMKM Sumenep</h4>
                                        <p>Kolaborasi untuk mendorong pertumbuhan ekonomi lokal dengan inovasi dan
                                            kreativitas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section3125 mt-50">
                        <h4 class="item_title">UMKM Terpopuler</h4>
                        <a href="all_instructor.html" class="see150">Lihat Semua</a>
                        <div class="la5lo1">
                            <div class="owl-carousel top_instrutors owl-theme">
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img
                                                    src="{{ asset('assets') }}/images/left-imgs/img-1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">Someone</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Makanan &amp; Minuman</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li><a href="#" class="ln"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">10 Produk</span>
                                                <span class="vdt15">100 Piece Terjual</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img
                                                    src="{{ asset('assets') }}/images/left-imgs/img-2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">Someone</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Makanan, Minuman, Aksesoris</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li><a href="#" class="ln"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">14 Produk</span>
                                                <span class="vdt15">76 Piece Terjual</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="right_side">
                        <div class="fcrse_2 mb-30">
                            <div class="tutor_img">

                                @if (Auth::check())
                                    @if (auth()->user()->foto_profile == null)
                                        <a href="/profile/{{ auth()->user()->token_users }} "> <img
                                                src="{{ asset('') }}assets/images/no-profile.jpg " width="50"
                                                height="35" alt=""></a>
                                    @else
                                        <a href="/profile/{{ auth()->user()->token_users }} "><img
                                                src="{{ asset('foto_profile/' . auth()->user()->foto_profile) }}"
                                                alt=""></a>
                                    @endif
                                @else
                                    <a href=""><img src="{{ asset('assets/images/no-profile.jpg') }}"
                                            alt=""></a>
                                @endif


                            </div>
                            <div class="tutor_content_dt">
                                <div class="tutor150 mb-3">

                                    @if (Auth::check())
                                        <a href="/profile/{{ auth()->user()->token_users }} "
                                            class="tutor_name">{{ auth()->user()->username }}</a>
                                    @else
                                        <a href=" " class="tutor_name">Guest</a>
                                    @endif

                                    <div class="mef78" title="Verify">
                                        <i class="uil uil-check-circle"></i>
                                    </div>
                                </div>
                                <ul class="tutor_social_links">
                                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                                @if (Auth::check())
                                    <a href="logout" class="prfle12link">Logout</a>
                                @else
                                    <div type="button" class="prfle12link" data-bs-toggle="modal"
                                        data-bs-target="#modalLogin">
                                        Login
                                    </div>
                                @endif

                                @include('auth.login')

                            </div>
                        </div>

                        <div class="fcrse_3">
                            <div class="cater_ttle">
                                <h4>Kategori Terpopuler</h4>
                            </div>
                            <ul class="allcate15">
                                <li><a href="#" class="ct_item"><i class='uil uil-food'></i>Makanan</a></li>
                                <li><a href="#" class="ct_item"><i class='uil uil-bag-alt'></i>Pakaian</a></li>
                                <li><a href="#" class="ct_item"><i class='uil uil-shopping-basket'></i>Minuman</a>
                                </li>
                                <li><a href="#" class="ct_item"><i class='uil uil-paperclip'></i>Aksesoris</a></li>
                            </ul>
                        </div>



                        @if (Auth::check())
                            @if ($getStatus == null || $getStatus->status == 'register')
                                <div class="strttech120">
                                    <h4>Pendaftaran UMKM null</h4>
                                    <p>Daftarkan UMKM anda dan mulai promosikan dan jual di Website E-Commerce Resmi Kami
                                    </p>
                                    <button class="Get_btn" onclick="window.location.href = '/daftar/umkm';">Mulai
                                        Jualan</button>
                                </div>
                            @elseif ($getStatus->status == 'pending')
                                <div class="strttech120">
                                    <h4>Proses Verifikasi Data</h4>
                                    <p>Pendaftaran UMKM Anda sedang dalam proses verifikasi. Anda akan segera dapat
                                        mempromosikan dan menjual produk di Website E-Commerce Resmi Kami setelah verifikasi
                                        selesai.</p>
                                    <button class="btn btn-warning">Menunggu</button>
                                </div>
                            @elseif ($getStatus->status == 'success')
                                <div class="strttech120">
                                    <h4>TOKO SAYA</h4>
                                    {{-- <p>Daftarkan UMKM anda dan mulai promosikan dan jual di Website E-Commerce Resmi Kami</p> --}}
                                    <button class="Get_btn" onclick="window.location.href = '/daftar/umkm';">Mulai
                                        Jualan</button>
                                </div>
                            @endif
                        @else
                            <div class="strttech120">
                                <h4>Pendaftaran UMKM</h4>
                                <p>Daftarkan UMKM anda dan mulai promosikan dan jual di Website E-Commerce Resmi Kami
                                </p>
                                <button class="Get_btn" onclick="window.location.href = '/daftar/umkm';">Mulai
                                    Jualan</button>
                            </div>
                        @endif



                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="section3125 mt-30">
                        <h4 class="item_title">Lihat Ulasan Pembeli</h4>
                        <div class="la5lo1">
                            <div class="owl-carousel Student_says owl-theme">
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Donec ac ex eu arcu euismod feugiat. In venenatis bibendum nisi, in placerat
                                                eros ultricies
                                                vitae. Praesent pellentesque blandit scelerisque. Suspendisse potenti."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('assets') }}/images/left-imgs/img-4.jpg"
                                                    alt="">
                                            </div>
                                            <h4>Someone</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Cras id enim lectus. Fusce at arcu tincidunt, iaculis libero quis, vulputate
                                                mauris. Morbi
                                                facilisis vitae ligula id aliquam. Nunc consectetur malesuada bibendum."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('assets') }}/images/left-imgs/img-1.jpg"
                                                    alt="">
                                            </div>
                                            <h4>Someone</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti
                                                sociosqu ad
                                                litora torquent per conubia nostra, per inceptos himenaeos eros ac, sagittis
                                                orci."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('assets') }}/images/left-imgs/img-7.jpg"
                                                    alt="">
                                            </div>
                                            <h4>Someone</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Nulla bibendum lectus pharetra, tempus eros ac, sagittis orci. Suspendisse
                                                posuere dolor
                                                neque, at finibus mauris lobortis in. Pellentesque vitae laoreet tortor."
                                            </p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('assets') }}/images/left-imgs/img-6.jpg"
                                                    alt="">
                                            </div>
                                            <h4>Someone</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Curabitur placerat justo ac mauris condimentum ultricies. In magna tellus,
                                                eleifend et
                                                volutpat id, sagittis vitae est. Pellentesque vitae laoreet tortor."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('assets') }}/images/left-imgs/img-3.jpg"
                                                    alt="">
                                            </div>
                                            <h4>Someone</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
