@extends('layouts.admin')

@section('content')
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="st_title"><i class="uil uil-book-alt"></i>Hak Akses</h2>
                </div>
                <div class="col-md-12">
                    <div class="card_dash1">
                        <div class="card_dash_left1">
                            <i class="uil uil-book-alt"></i>
                            <h1>Hak Akses</h1>
                        </div>
                        <div class="card_dash_right1">
                            <a class="create_btn_dash p-3" href="{{ route('hak-akses.create') }}">Tambah Pengguna</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my_courses_tabs">
                        <ul class="nav nav-pills my_crse_nav" id="pills-tab" role="tablist">
                            <li class="nav-itemwe">
                                <a class="nav-link active" id="pills-my-courses-tab" data-bs-toggle="pill"
                                    href="#pills-my-courses" role="tab" aria-controls="pills-my-courses"
                                    aria-selected="true"><i class="uil uil-book-alt"></i>Admin</a>
                            </li>
                            <li class="nav-itemwe">
                                <a class="nav-link" id="pills-my-purchases-tab" data-bs-toggle="pill"
                                    href="#pills-my-purchases" role="tab" aria-controls="pills-my-purchases"
                                    aria-selected="false"><i class="uil uil-download-alt"></i>Mitra</a>
                            </li>
                            <li class="nav-itemwe">
                                <a class="nav-link" id="pills-upcoming-courses-tab" data-bs-toggle="pill"
                                    href="#pills-upcoming-courses" role="tab" aria-controls="pills-upcoming-courses"
                                    aria-selected="false"><i class="uil uil-upload-alt"></i>Customer</a>
                            </li>
                            {{-- pills-discount --}}
                            <li class="nav-itemwe">
                                <a class="nav-link" id="pills-discount-tab" data-bs-toggle="pill" href="#pills-discount"
                                    role="tab" aria-controls="pills-discount" aria-selected="false"><i
                                        class="uil uil-megaphone">
                                    </i>Pendaftar UMKM</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">
                                <div class="table-responsive mt-30">
                                    <table class="table ucp-table display" id="myTable">
                                        <thead class="thead-s">
                                            <tr>
                                                <th class="text-center" scope="col">No.</th>
                                                <th class="text-center" scope="col">Username</th>
                                                <th class="text-center" scope="col">Email</th>
                                                <th class="text-center" scope="col">No Telepon
                                                </th>
                                                <th class="text-center" scope="col">Role</th>
                                                <th class="text-center" scope="col">Status</th>
                                                <th class="text-center" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($RoleAdmin as $get)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $get->username }}</td>
                                                    <td class="text-center">{{ $get->email }}</td>
                                                    <td class="text-center">{{ $get->no_telepon }}</td>
                                                    <td class="text-center">{{ $get->role }}</td>
                                                    <td class="text-center"><b class="course_active">Active</b></td>
                                                    <td class="text-center">
                                                        <a href="{{ route('hak-akses.edit', $get->id) }}" title="Edit"
                                                            class="gray-s"><i class="uil uil-edit-alt"></i></a>


                                                        <a role="button" title="Delete" data-bs-toggle="modal"
                                                            data-bs-target="#staticBackdrop{{ $get->id }}"
                                                            class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop{{ $get->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                    Hapus Produk</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                Yakin ingin menghapus {{ $get->role }} atas nama
                                                                {{ $get->name }} ?<br>
                                                                <span class="text-danger">Email :
                                                                    {{ $get->email }}</span>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <form action="{{ route('hak-akses.destroy', $get->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="create_btn_dash" type="submit"><a
                                                                            role="button"
                                                                            style="color: white;">Hapus</a></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-my-purchases" role="tabpanel">
                                <div class="table-responsive mt-30">
                                    <table class="table ucp-table display" id="myTable">
                                        <thead class="thead-s">
                                            <tr>
                                                <th class="text-center" scope="col">No.</th>
                                                <th class="text-center" scope="col">Username</th>
                                                <th class="text-center" scope="col">Email</th>
                                                <th class="text-center" scope="col">No Telepon
                                                </th>
                                                <th class="text-center" scope="col">Role</th>
                                                <th class="text-center" scope="col">Status</th>
                                                <th class="text-center" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($RoleMitra as $get)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $get->username }}</td>
                                                    <td class="text-center">{{ $get->email }}</td>
                                                    <td class="text-center">{{ $get->no_telepon }}</td>
                                                    <td class="text-center">{{ $get->role }}</td>
                                                    <td class="text-center"><b class="course_active">Active</b></td>
                                                    <td class="text-center">
                                                        <a href="{{ route('hak-akses.edit', $get->id) }}" title="Edit"
                                                            class="gray-s"><i class="uil uil-edit-alt"></i></a>


                                                        <a role="button" title="Delete" data-bs-toggle="modal"
                                                            data-bs-target="#staticBackdrop{{ $get->id }}"
                                                            class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop{{ $get->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                    Hapus Produk</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                Yakin ingin menghapus {{ $get->role }} atas nama
                                                                {{ $get->name }} ?<br>
                                                                <span class="text-danger">Email :
                                                                    {{ $get->email }}</span>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <form action="{{ route('hak-akses.destroy', $get->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="create_btn_dash" type="submit"><a
                                                                            role="button"
                                                                            style="color: white;">Hapus</a></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-upcoming-courses" role="tabpanel">
                                <div class="table-responsive mt-30">
                                    <table class="table ucp-table display" id="myTable">
                                        <thead class="thead-s">
                                            <tr>
                                                <th class="text-center" scope="col">No.</th>
                                                <th class="text-center" scope="col">Username</th>
                                                <th class="text-center" scope="col">Email</th>
                                                <th class="text-center" scope="col">No Telepon
                                                </th>
                                                <th class="text-center" scope="col">Role</th>
                                                <th class="text-center" scope="col">Status</th>
                                                <th class="text-center" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($RoleCustomer as $get)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $get->username }}</td>
                                                    <td class="text-center">{{ $get->email }}</td>
                                                    <td class="text-center">{{ $get->no_telepon }}</td>
                                                    <td class="text-center">{{ $get->role }}</td>
                                                    <td class="text-center"><b class="course_active">Active</b></td>
                                                    <td class="text-center">
                                                        <a href="{{ route('hak-akses.edit', $get->id) }}" title="Edit"
                                                            class="gray-s"><i class="uil uil-edit-alt"></i></a>


                                                        <a role="button" title="Delete" data-bs-toggle="modal"
                                                            data-bs-target="#staticBackdrop{{ $get->id }}"
                                                            class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop{{ $get->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                    Hapus Produk</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                Yakin ingin menghapus {{ $get->role }} atas nama
                                                                {{ $get->name }} ?<br>
                                                                <span class="text-danger">Email :
                                                                    {{ $get->email }}</span>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <form action="{{ route('hak-akses.destroy', $get->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="create_btn_dash" type="submit"><a
                                                                            role="button"
                                                                            style="color: white;">Hapus</a></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-upcoming-courses" role="tabpanel">
                                <div class="table-responsive mt-30">
                                    <table class="table ucp-table display" id="myTable">
                                        <thead class="thead-s">
                                            <tr>
                                                <th class="text-center" scope="col">No.</th>
                                                <th class="text-center" scope="col">Username</th>
                                                <th class="text-center" scope="col">Email</th>
                                                <th class="text-center" scope="col">No Telepon
                                                </th>
                                                <th class="text-center" scope="col">Role</th>
                                                <th class="text-center" scope="col">Status</th>
                                                <th class="text-center" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($RoleCustomer as $get)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $get->username }}</td>
                                                    <td class="text-center">{{ $get->email }}</td>
                                                    <td class="text-center">{{ $get->no_telepon }}</td>
                                                    <td class="text-center">{{ $get->role }}</td>
                                                    <td class="text-center"><b class="course_active">Active</b></td>
                                                    <td class="text-center">
                                                        <a href="{{ route('hak-akses.edit', $get->id) }}" title="Edit"
                                                            class="gray-s"><i class="uil uil-edit-alt"></i></a>


                                                        <a role="button" title="Delete" data-bs-toggle="modal"
                                                            data-bs-target="#staticBackdrop{{ $get->id }}"
                                                            class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop{{ $get->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                    Hapus Produk</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                Yakin ingin menghapus {{ $get->role }} atas nama
                                                                {{ $get->name }} ?<br>
                                                                <span class="text-danger">Email :
                                                                    {{ $get->email }}</span>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <form action="{{ route('hak-akses.destroy', $get->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="create_btn_dash" type="submit"><a
                                                                            role="button"
                                                                            style="color: white;">Hapus</a></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-discount" role="tabpanel">
                                <div class="table-responsive mt-30">
                                    <table class="table ucp-table display" id="myTable">
                                        <thead class="thead-s">
                                            <tr>
                                                <th class="text-center" scope="col">No.</th>
                                                <th class="text-center" scope="col">Username</th>
                                                <th class="text-center" scope="col">Email</th>
                                                <th class="text-center" scope="col">No Telepon
                                                </th>
                                                <th class="text-center" scope="col">Status</th>
                                                <th class="text-center" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getPendaftarUMKM as $get)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $get->username }}</td>
                                                    <td class="text-center">{{ $get->email }}</td>
                                                    <td class="text-center">{{ $get->no_telepon }}</td>
                                                    @if ($get->status == 'pending')
                                                        <td class="text-center text-capitalize text-bold text-warning">
                                                            {{ $get->status }}</td>
                                                    @endif
                                                    <td class="text-center">
                                                        <a href="/hak-akses/{{ $get->token_umkm }}/details"
                                                            title="Detail" class="gray-s"><i
                                                                class="uil uil-book-alt"></i></a>
                                                        <a href="{{ route('hak-akses.edit', $get->id_mitra_umkms) }}"
                                                            title="Edit" class="gray-s"><i
                                                                class="uil uil-edit-alt"></i></a>


                                                        <a role="button" title="Delete" data-bs-toggle="modal"
                                                            data-bs-target="#staticBackdrop{{ $get->id_mitra_umkms }}"
                                                            class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop{{ $get->id_mitra_umkms }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                    Hapus Produk</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                Yakin ingin menghapus {{ $get->role }} atas nama
                                                                {{ $get->name }} ?<br>
                                                                <span class="text-danger">Email :
                                                                    {{ $get->email }}</span>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <form
                                                                    action="{{ route('hak-akses.destroy', $get->id_mitra_umkms) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="create_btn_dash" type="submit"><a
                                                                            role="button"
                                                                            style="color: white;">Hapus</a></button>
                                                                </form>
                                                            </div>
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
        </div>
    </div>
@endsection
