@extends('layouts.admin')

@section('content')
  <div class="sa4d25">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="st_title"><i class="uil uil-book-alt"></i>Kategori</h2>
        </div>
        <div class="col-md-12">
          <div class="card_dash1">
            <div class="card_dash_left1">
              <i class="uil uil-book-alt"></i>
              <h1>Bukan Sembarang Kategori</h1>
            </div>
            <div class="card_dash_right1">
              <button class="create_btn_dash" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
                Kategori</button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <form action="{{ route('kategori.store') }}" method="POST">
                      @csrf
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="ui search focus lbel25">
                          <label>Nama Kategori <small class="text-danger">*</small></label>
                          <div class="ui left icon input swdh19">
                            <input class="prompt srch_explore" type="text" placeholder="Course title here"
                              name="nama_kategori" data-purpose="edit-course-title" maxlength="60" id="main[title]"
                              value="">
                            <div class="badge_num">60</div>
                          </div>
                          <div class="help-block">(Please make this a maximum of 100 characters and
                            unique.)</div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="create_btn_dash">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tab-pane fade show active" id="pills-my-courses">
            <div class="table-responsive mt-30">
              <table class="table ucp-table">
                <thead class="thead-s">
                  <tr>
                    <th class="text-start" scope="col">Item No.</th>
                    <th>Kategori</th>
                    <th>Link Subs</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kategori as $get)
                    <tr>
                      <td class="text-start ms-2" style="width: 25%;">{{ $get->created_at->format('yms') }}</td>
                      <td style="width: 30%">{{ $get->nama_kategori }}</td>
                      <td ><a href="/kategori/{{ $get->id_kategoris }}/subs">/<i
                        class="uil uil-forward"></i>{{ $get->nama_kategori }}</a></td>
                      <td class="text-center">
                        <button type="button" title="Edit" data-bs-toggle="modal"
                          data-bs-target="#exampleModal{{ $get->id_kategoris }}" class="btn gray-s"><i
                            class="uil uil-edit-alt"></i></button>
                        <button type="button" title="Delete" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop{{ $get->id_kategoris }}" class="btn gray-s"><i class="uil uil-trash-alt"></i></button>
                      </td>
                      </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop{{ $get->id_kategoris }}" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Kategori</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-center">
                            Yakin ingin menghapus kategori {{ $get->nama_kategori }}<br>
                            <span class="text-danger">Kategori ini akan terhapus jika produk dengan kategori ini sudah tidak ada</span>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="{{ route('kategori.destroy', $get->id_kategoris) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="create_btn_dash" type="submit"><a role="button" style="color: white;">Hapus</a></button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $get->id_kategoris }}" tabindex="-1"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <form action="{{ route('kategori.update', $get->id_kategoris) }}/edit}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kategori
                                {{ $get->nama_kategori }}</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="ui search focus lbel25">
                                <label>Nama Kategori <small class="text-danger">*</small></label>
                                <div class="ui left icon input swdh19">
                                  <input class="prompt srch_explore" type="text" placeholder="Course title here"
                                    value="{{ $get->nama_kategori }}" name="nama_kategori"
                                    data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">
                                  <div class="badge_num">60</div>
                                </div>
                                <div class="help-block">(Please make this a maximum of 100 characters and
                                  unique.)</div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="create_btn_dash">Save changes</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
