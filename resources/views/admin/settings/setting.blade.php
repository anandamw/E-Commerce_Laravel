@extends('layouts.admin')

@section('content')
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="st_title"><i class="uil uil-book-alt"></i>Produk Saya</h2>
                </div>
                <div class="col-md-12">
                    <div class="card_dash1">
                        <div class="card_dash_left1">
                            <i class="uil uil-book-alt"></i>
                            <h1>Setting Profile</h1>
                        </div>
                        <div class="card_dash_right1">
                            <button class="create_btn_dash"
                                onclick="window.location.href = 'create_new_course.html';">Setting</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my_courses_tabs">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">
                                <div class="table-responsive mt-30">
                                    <table class="table ucp-table">
                                        <thead class="thead-s">
                                            <tr>
                                                <th class="text-center" scope="col">No.</th>
                                                <th class="text-center" scope="col">Name</th>
                                                <th class="text-center" scope="col">Username</th>
                                                <th class="text-center" scope="col">Email</th>
                                                <th class="text-center" scope="col">Alamat</th>
                                                <th class="text-center" scope="col">No Telepon</th>
                                                <th class="text-center" scope="col">Status</th>
                                                <th class="text-center" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getSettings as $item)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $item->name }}</td>
                                                    <td class="text-center">{{ $item->username }}</td>
                                                    <td class="text-center">{{ $item->email }}</td>
                                                    <td class="text-center">{{ $item->alamat_users }}</td>
                                                    <td class="text-center">{{ $item->no_telepon }}</td>
                                                    <td class="text-center"><b class="course_active">Active</b></td>
                                                    <td class="text-center">
                                                        <a href="/profile/{{ $item->token_users }}" title="Profile"
                                                            class="gray-s"><i class="uil uil-user-square"></i></a>
                                                        <a href="#" title="Edit" class="gray-s"><i
                                                                class="uil uil-edit-alt"></i></a>
                                                        <a href="#" title="Delete" class="gray-s"><i
                                                                class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-promotions" role="tabpanel"
                                aria-labelledby="pills-promotions-tab">
                                <div class="promotion_tab mb-10">
                                    <img src="{{ asset('assets') }}/images/dashboard/promotion.svg" alt="">
                                    <h4>Baby promotion plan is activated!</h4>
                                    <p>By activating promotion plans you can improve course views and sales.</p>
                                    <button class="plan_link_btn" onclick="window.location.href = '#';">Change New
                                        Plan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
