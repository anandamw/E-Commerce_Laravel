@extends('layouts.admin')

@section('content')
    <div class="sa4d25">
        <div class="container">
            <div class="row mb-0">
                <div class="col-12">
                    <h2 class="st_title"><i class="uil uil-analysis"></i> Jual Produk Baru</h2>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-12">
                    <div class="course_tabs_1">
                        <div class="step-app">
                            <form action="/{{ auth()->user()->role . '-produk/store' }}" method="POST"
                                enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="step-content">
                                    <div class="step-tab-panel step-tab-info active">
                                        <div class="tab-from-content">
                                            <div class="title-icon">
                                                <h3 class="title"><i class="uil uil-info-circle"></i>Detail Produk</h3>
                                            </div>
                                            <div class="course__form">
                                                <div class="general_info10">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Nama produk*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        placeholder="Course title here" name="nama_produk"
                                                                        data-purpose="edit-course-title" maxlength="60"
                                                                        id="main[title]" value="">
                                                                    <div class="badge_num">60</div>
                                                                </div>
                                                                <div class="help-block">(Please make this a maximum of 100
                                                                    characters and unique.)</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="mt-30 lbel25">
                                                                <label>Produk Kategori*</label>
                                                            </div>
                                                            <select class="selectpicker" title="Pilih Kategori"
                                                                name="sub_kategori" id="selectcategory"
                                                                data-live-search="true">
                                                                @foreach ($kategoris as $item)
                                                                    <optgroup label="{{ $item->nama_kategori }}">
                                                                        @foreach ($item->subs as $get)
                                                                            <option value="{{ $get->id_sub_kategori }}">
                                                                                {{ $get->nama_sub_kategori }}</option>
                                                                        @endforeach
                                                                    </optgroup>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="ui search focus lbel25 mt-15">
                                                                <label>Deskripsi Produk*</label>
                                                                <div class="ui form swdh30">
                                                                    <div class="field">
                                                                        <textarea rows="3" name="deskripsi" id="editor" placeholder="Item description here..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="help-block">3000 kata</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-6 mb-2">
                                                            <div class="ui search focus lbel25 mt-15">
                                                                <label class="label25 text-left">Thumbnail Produk
                                                                    <small>*</small></label>
                                                                <div class="thumb-item">
                                                                    <!-- Gambar default -->
                                                                    <img id="thumbnail-preview"
                                                                        src="{{ asset('') }}assets/images/thumbnail-demo.jpg"
                                                                        alt="Thumbnail Produk"
                                                                        style="width: 100%; height: auto;">
                                                                    <div class="thumb-dt">
                                                                        <div class="upload-btn">
                                                                            <!-- Input file -->
                                                                            <input class="uploadBtn-main-input"
                                                                                type="file" id="ThumbFile__input--source"
                                                                                name="thumbnail" accept="image/*">
                                                                            <label for="ThumbFile__input--source"
                                                                                title="Zip">Choose
                                                                                Thumbnail</label>
                                                                        </div>
                                                                        <span class="uploadBtn-main-file">Size: 590x300
                                                                            pixels. Supports: jpg,
                                                                            jpeg, or png</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step-tab-panel step-tab-gallery mt-4">
                                        <div class="tab-from-content">
                                            <div class="title-icon">
                                                <h3 class="title"><i class="uil uil-notebooks"></i>Atribut</h3>
                                            </div>
                                            <div class="curriculum-section">
                                                <div class="row" id="varian-container">
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="ui search focus mt-30 lbel25">
                                                            <label>Nama Varian*</label>
                                                            <div class="ui left icon input swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    placeholder="Ex: Coklat, Vanila, Lengan Panjang, ..."
                                                                    name="varian[]" data-purpose="edit-course-title"
                                                                    maxlength="60" id="main[title]" value="">
                                                            </div>
                                                            <div class="help-block">(Isikan varian)</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="ui search focus mt-30 lbel25">
                                                            <label>Ukuran*</label>
                                                            <div class="ui left icon input swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    placeholder="Ex: 100gr, 100ml, XL, ..." name="ukuran[]"
                                                                    data-purpose="edit-course-title" maxlength="60"
                                                                    id="main[title]" value="">
                                                            </div>
                                                            <div class="help-block">(Isikan ukuran)</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="ui search focus mt-30 lbel25">
                                                            <label>Harga*</label>
                                                            <div class="ui left icon input swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    inputmode="numeric" placeholder="Rp. ..."
                                                                    name="harga[]" data-purpose="edit-course-title"
                                                                    maxlength="60" id="main[title]" value="">
                                                            </div>
                                                            <div class="help-block">(Isikan Harga dalam Rp.)</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="ui search focus mt-30 lbel25">
                                                            <label>Stok*</label>
                                                            <div class="ui left icon input swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    inputmode="numeric" placeholder="Stok Produk"
                                                                    name="stok[]" data-purpose="edit-course-title"
                                                                    maxlength="60" id="main[title]" value="">
                                                            </div>
                                                            <div class="help-block">(Isikan Stok Produk)</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button id="add-varian" type="button"
                                                    class="btn btn_default rounded mt-4">+</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="step-footer step-tab-pager mt-4 text-end">
                                    <a href="/{{ auth()->user()->role . '-produk' }}"
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

    <script>
        document.getElementById('ThumbFile__input--source').addEventListener('change', function(event) {
            // Ambil file yang dipilih
            var file = event.target.files[0];

            // Pastikan file ada dan merupakan gambar
            if (file && file.type.startsWith('image/')) {
                var reader = new FileReader();

                // Ketika file telah dibaca, tampilkan hasilnya di <img>
                reader.onload = function(e) {
                    document.getElementById('thumbnail-preview').src = e.target.result;
                };

                // Baca file sebagai URL data
                reader.readAsDataURL(file);
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk menambahkan struktur HTML baru
            $('#add-varian').click(function() {
                let newRow = `
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="ui search focus mt-30 lbel25">
            <label>Nama Varian*</label>
            <div class="ui left icon input swdh19">
              <input class="prompt srch_explore" type="text"
                placeholder="Ex: Coklat, Vanila, Lengan Panjang, ..." name="varian[]"
                data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">
            </div>
            <div class="help-block">(Isikan varian)</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="ui search focus mt-30 lbel25">
            <label>Ukuran*</label>
            <div class="ui left icon input swdh19">
              <input class="prompt srch_explore" type="text" placeholder="Ex: 100gr, 100ml, XL, ..."
                name="ukuran[]" data-purpose="edit-course-title" maxlength="60" id="main[title]"
                value="">
            </div>
            <div class="help-block">(Isikan ukuran)</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="ui search focus mt-30 lbel25">
            <label>Harga*</label>
            <div class="ui left icon input swdh19">
              <input class="prompt srch_explore" type="text" inputmode="numeric"
                placeholder="Rp. ..." name="harga[]" data-purpose="edit-course-title" maxlength="60"
                id="main[title]" value="">
            </div>
            <div class="help-block">(Isikan Harga dalam Rp.)</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="ui search focus mt-30 lbel25">
            <label>Stok*</label>
            <div class="ui left icon input swdh19">
              <input class="prompt srch_explore" type="text" inputmode="numeric"
                placeholder="Stok Produk" name="stok[]" data-purpose="edit-course-title"
                maxlength="60" id="main[title]" value="">
            </div>
            <div class="help-block">(Isikan Stok Produk)</div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 text-center">
                <button type="button" class="remove-row create_btn_dash" style="width: 70%">x</button>
        </div>
      </div>
      `;
                $('#varian-container').append(newRow); // Menambahkan struktur di akhir container
            });

            // Fungsi untuk menghapus row ketika tombol x ditekan
            $(document).on('click', '.remove-row', function() {
                $(this).closest('.row').remove();
            });
        });
    </script>
@endsection
