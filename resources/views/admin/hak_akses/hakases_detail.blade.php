<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Verification</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('') }}assets/images/fav.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href="{{ asset('') }}assets/css/vertical-responsive-menu1.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/instructor-dashboard.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/instructor-responsive.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/night-mode.css" rel="stylesheet">
    <link href='{{ asset('assets') }}/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('') }}assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/bootstrap-select/docs/docs/dist/css/bootstrap-select.min.css"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendor/semantic/semantic.min.css">

</head>

<body>


    <!-- Body Start -->
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row justify-content-xl-center justify-content-lg-center justify-content-md-center">
                <div class="col-xl-12 col-lg-12 col-md-8">
                    <div class="verification_content">
                        <img src="{{ asset('') }}assets/images/verified-account.svg" alt="">
                        <h4>Verification with Edututs+</h4>
                        <p>Praesent sed sapien gravida, tempus nunc nec, euismod turpis. Mauris quis scelerisque
                            arcu. Quisque et aliquet nisl, id placerat est. Morbi quis imperdiet nulla.</p>


                        <div class="verification_form">
                            <h4>Verify Your ID</h4>
                            <form>
                                <table class="table ucp-table display" id="myTable">
                                    <thead class="thead-s">
                                        <tr>
                                            <th class="text-center" scope="col">No.</th>
                                            <th class="text-center" scope="col">Name</th>
                                            <th class="text-center" scope="col">Username</th>
                                            <th class="text-center" scope="col">Email</th>
                                            <th class="text-center" scope="col">No Telepon</th>
                                            <th class="text-center" scope="col">Alamat Pengguna
                                            <th class="text-center" scope="col">Nama UMKM
                                            <th class="text-center" scope="col">Alamat UMKM
                                            <th class="text-center" scope="col">Status</th>
                                            <th class="text-center" scope="col">Tanggal Bergabung</th>
                                            <th class="text-center" scope="col">Berkas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">{{ $data->name }}</td>
                                            <td class="text-center">{{ $data->username }}</td>
                                            <td class="text-center">{{ $data->email }}</td>
                                            <td class="text-center">{{ $data->no_telepon }}</td>
                                            <td class="text-center">{{ $data->alamat_users }}</td>
                                            <td class="text-center">{{ $data->nama_umkm }}</td>
                                            <td class="text-center">{{ $data->alamat_umkm }}</td>
                                            <td class="text-center">Aktive</td>
                                            <td class="text-center">{{ $data->created_at }}</td>

                                            <td class="text-center">
                                                <a href="" title="Detail" class="gray-s" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $data->id_mitra_umkms }}"><i
                                                        class="uil uil-eye"></i></a>
                                            </td>


                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $data->id_mitra_umkms }}"
                                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Berkas
                                                                {{ $data->name }}
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">



                                                            <ul class="alert_verification text-center">
                                                                <div class="row ">
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <label class="label25 text-left">FOTO
                                                                            KTP*</label>
                                                                        <div class="thumb-item">
                                                                            <a href="#" class="fcrse_img">
                                                                                <img src="{{ asset('foto_ktp/' . $data->foto_ktp) }}"
                                                                                    width="100" alt="">
                                                                                <div class="course-overlay"></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <label
                                                                            class="label25 text-left">SWAFOTO*</label>
                                                                        <div class="thumb-item">
                                                                            <a href="#" class="fcrse_img">
                                                                                <img src="{{ asset('file_facecame/' . $data->file_facecame) }}"
                                                                                    alt="">

                                                                                <div class="course-overlay"></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <label class="label25 text-left">LOGO
                                                                            UMKM*</label>
                                                                        <div class="thumb-item">
                                                                            <a href="#" class="fcrse_img">
                                                                                <img src="{{ asset('logo_umkm/' . $data->logo_umkm) }}"
                                                                                    alt="">

                                                                                <div class="course-overlay"></div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </ul>




                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>








                                <button class="verify_submit_btn" type="submit">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Body End -->

    <script src="{{ asset('') }}assets/js/vertical-responsive-menu.min.js"></script>
    <script src="{{ asset('') }}assets/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap-select/docs/docs/dist/js/bootstrap-select.js"></script>
    <script src="{{ asset('') }}assets/vendor/semantic/semantic.min.js"></script>
    <script src="{{ asset('') }}assets/js/custom1.js"></script>
    <script src="{{ asset('') }}assets/js/night-mode.js"></script>

</body>


</html>
