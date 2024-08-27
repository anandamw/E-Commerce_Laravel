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
                        <h2>Yuk Berswafoto Untuk Melengkapi Persyaratan Pendaftar UMKM
                        </h2>
                        <p>Daftar untuk membuat toko </p>
                        <form action="/selfie/{{ $detail->token_umkm }}/update" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="my_camera"></div>
                                    <br />
                                    <input type="hidden" name="file_facecame" class="image-tag">
                                </div>
                                <div class="col-md-12 text-center">
                                    <br />
                                    <input type="button" class="btn btn-success" onClick="take_snapshot()"
                                        value="Take Snapshot">
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="snapshotModal" tabindex="-1" role="dialog"
                                aria-labelledby="snapshotModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="snapshotModalLabel">Captured Image</h5>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div id="modal-results">Your captured image will appear here...</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script language="JavaScript">
        Webcam.set({
            width: 490,
            height: 350,
            image_format: 'jpeg',
            jpeg_quality: 90
        });

        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                // Set the captured image as a value in the hidden input
                $(".image-tag").val(data_uri);

                // Show the captured image in the modal
                document.getElementById('modal-results').innerHTML = '<img src="' + data_uri +
                    '" style="width: 100%; height: auto;" />';
                $('#snapshotModal').modal('show');
            });
        }
    </script>

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
