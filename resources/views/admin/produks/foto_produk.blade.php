@extends('layouts.admin')

@section('content')
    <div class="sa4d25">
        <div class="container">
            <div class="row mb-0">
                <div class="col-12">
                    <h2 class="st_title"><i class="uil uil-analysis"></i> Tambah Foto Produk {{ $detail->nama_produk }}</h2>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-12">
                    <div class="course_tabs_1">
                        <div class="step-app">
                            <form action="/{{ auth()->user()->role . '/foto-produk/' . $detail->id_produks . '/update' }}"
                                method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="step-content">
                                    <div class="step-tab-panel step-tab-info active">
                                        <div class="tab-from-content">
                                            <div class="title-icon">
                                                <h3 class="title"><i class="uil uil-info-circle"></i>Foto Produk
                                                    {{ $detail->nama_produk }}</h3>
                                            </div>
                                            <div class="course__form">
                                                <div class="general_info10">
                                                    <div class="row">
                                                        @foreach ($atributProduk as $item)
                                                            <div class="col-lg-3 col-md-4 mb-2">
                                                                <div class="ui search focus lbel25 mt-15">
                                                                    <label class="label25 text-left">Foto Varian
                                                                        {{ $item->nama_varian }} <small
                                                                            class="text-danger">{{ $item->ukuran }}</small></label>
                                                                    <div class="thumb-item">
                                                                        <!-- Gambar default -->
                                                                        <img id="thumbnail-preview{{ $item->id_atribut_produk }}"
                                                                            src="{{ is_null($item->foto_produk) ? asset('assets/images/thumbnail-demo.jpg') : asset('foto-varian/' . $item->foto_produk) }}"
                                                                            alt="Thumbnail Produk"
                                                                            style="width: 100%; height: auto;">
                                                                        <div class="thumb-dt">
                                                                            <div class="upload-btn">
                                                                                <!-- Input file -->
                                                                                <input class="uploadBtn-main-input"
                                                                                    type="file"
                                                                                    id="ThumbFile__input--source{{ $item->id_atribut_produk }}"
                                                                                    name="thumbnail[]" accept="image/*">
                                                                                <label
                                                                                    for="ThumbFile__input--source{{ $item->id_atribut_produk }}"
                                                                                    title="Zip">Tambahkan Foto</label>
                                                                            </div>
                                                                            <span class="uploadBtn-main-file">Size: 590x300
                                                                                pixels. Supports: jpg,
                                                                                jpeg, or png</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                document.getElementById('ThumbFile__input--source{{ $item->id_atribut_produk }}').addEventListener('change',
                                                                    function(event) {
                                                                        // Ambil file yang dipilih
                                                                        var file = event.target.files[0];

                                                                        // Pastikan file ada dan merupakan gambar
                                                                        if (file && file.type.startsWith('image/')) {
                                                                            var reader = new FileReader();

                                                                            // Ketika file telah dibaca, tampilkan hasilnya di <img>
                                                                            reader.onload = function(e) {
                                                                                document.getElementById('thumbnail-preview{{ $item->id_atribut_produk }}').src = e.target
                                                                                    .result;
                                                                            };

                                                                            // Baca file sebagai URL data
                                                                            reader.readAsDataURL(file);
                                                                        }
                                                                    });
                                                            </script>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="step-footer step-tab-pager mt-4 text-end">
                                    <a href="/{{ auth()->user()->role }}/foto-produk"
                                        class="btn btn-default pt-2">Cancel</a>
                                    <button class="create_btn_dash" type="submit">Submit for Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
