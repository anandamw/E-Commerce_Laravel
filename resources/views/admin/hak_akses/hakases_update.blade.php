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
                            <form action="{{ route('hak-akses.update', $getsdata->id) }}" method="POST"
                                enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('PUT')

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
                                                                <label>Nama*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        placeholder="Course title here" name="name"
                                                                        data-purpose="edit-course-title"
                                                                        value="{{ $getsdata->name }}" maxlength="60"
                                                                        id="main[title]"">
                                                                    <div class="badge_num">60</div>
                                                                </div>
                                                                <div class="help-block">(Please make this a maximum of 100
                                                                    characters and unique.)</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Username*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        placeholder="Course title here" name="username"
                                                                        data-purpose="edit-course-title" maxlength="60"
                                                                        id="main[title]" value="{{ $getsdata->username }}">
                                                                    <div class="badge_num">60</div>
                                                                </div>
                                                                <div class="help-block">(Please make this a maximum of 100
                                                                    characters and unique.)</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Email*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        placeholder="Course title here" name="email"
                                                                        data-purpose="edit-course-title" maxlength="60"
                                                                        id="main[title]" value="{{ $getsdata->email }}">
                                                                    <div class="badge_num">60</div>
                                                                </div>
                                                                <div class="help-block">(Please make this a maximum of 100
                                                                    characters and unique.)</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>No Telepon*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        placeholder="Course title here" name="no_telepon"
                                                                        data-purpose="edit-course-title" maxlength="60"
                                                                        id="main[title]"
                                                                        value="{{ $getsdata->no_telepon }}">
                                                                    <div class="badge_num">60</div>
                                                                </div>
                                                                <div class="help-block">(Please make this a maximum of 100
                                                                    characters and unique.)</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Alamat *</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        placeholder="Course title here" name="alamat_users"
                                                                        data-purpose="edit-course-title" maxlength="60"
                                                                        id="main[title]"
                                                                        value="{{ $getsdata->alamat_users }}">
                                                                    <div class="badge_num">60</div>
                                                                </div>
                                                                <div class="help-block">(Please make this a maximum of 100
                                                                    characters and unique.)</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Password *</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="password"
                                                                        placeholder="Course title here" name="password"
                                                                        data-purpose="edit-course-title" maxlength="60"
                                                                        id="main[title]" value="{{ $getsdata->password }}">
                                                                    <div class="badge_num">60</div>
                                                                </div>
                                                                <div class="help-block">(Please make this a maximum of 100
                                                                    characters and unique.)</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="mt-30 lbel25">
                                                                <label>Hak Akses Saat ini
                                                                    <span
                                                                        style="color: red; text-transform: capitalize">{{ $getsdata->role }}*</span></label>
                                                            </div>
                                                            <select class="selectpicker" title="Pilih Hak Akses"
                                                                name="role" id="selectcategory"
                                                                data-live-search="true">
                                                                <option value="admin">Admin</option>
                                                                <option value="mitra">Mitra</option>
                                                                <option value="customer">Customer</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-5 col-md-6 mb-2">
                                                            <div class="ui search focus lbel25 mt-15">
                                                                <label class="label25 text-left">Thumbnail Produk
                                                                    <small>*</small></label>
                                                                <div class="thumb-item">
                                                                    <!-- Gambar default -->
                                                                    <img id="thumbnail-preview"
                                                                        src="{{ asset('foto_profile/' . $getsdata->foto_profile) }}"
                                                                        alt="Thumbnail Produk"
                                                                        style="width: 100%; height: auto;">
                                                                    <div class="thumb-dt">
                                                                        <div class="upload-btn">
                                                                            <!-- Input file -->
                                                                            <input class="uploadBtn-main-input"
                                                                                type="file"
                                                                                id="ThumbFile__input--source"
                                                                                name="foto_profile"
                                                                                value="{{ $getsdata->foto_profile }}"
                                                                                accept="image/*">
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
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="ui search focus lbel25 mt-15">
                                                                <label>Deskripsi*</label>
                                                                <div class="ui form swdh30">
                                                                    <div class="field">
                                                                        <textarea rows="3" value="{{ $getsdata->deskripsi }}" name="deskripsi" id="editor"
                                                                            placeholder="Item description here..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="help-block">3000 kata</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-footer step-tab-pager mt-4 text-end">
                                    <a href="{{ route('hak-akses.index') }}" class="btn btn-default pt-2">Cancel</a>
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
@endsection
