@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('content')

<!-- Start Content-->
<div class="container-fluid">

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Contacts</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                <li class="breadcrumb-item active">Contacts</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="row">

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">
                                <div class="d-flex">
                                    <img src="/images/users/user-12.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Anna M. Hines</a></h4>
                                </div>
                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">georgia.young@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">
                                <div class="d-flex">
                                    <img src="/images/users/user-11.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Philip</a></h4>
                                </div>
                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">alma.lawson@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-success-subtle text-success fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">
                                <div class="d-flex">
                                    <img src="/images/users/user-13.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Dianne Russell</a></h4>
                                </div>
                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">deanna.lawson@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-warning-subtle text-warning fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">
                                <div class="d-flex">
                                    <img src="/images/users/user-14.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Devon Lane</a></h4>
                                </div>
                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">neaven.youngstar@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">
                                <div class="d-flex">
                                    <img src="/images/users/user-5.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Theresa Webb</a></h4>
                                </div>
                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">michelle.rivara@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-warning-subtle text-warning fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">
                                <div class="d-flex">
                                    <img src="/images/users/user-9.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Leeanna Cline</a></h4>
                                </div>
                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">leeannacline@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-4.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">David Hardy</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">davidhardy@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-warning-subtle text-warning fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-3.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Roland Burgess</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">rolandburgess@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-8.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Christina Correa</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">christinavorrea@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-6.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Kay Haines</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">kaychaines@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-warning-subtle text-warning fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/profile.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Christina Correa</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">christinavorrea@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-10.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Dawn Dow</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">dawnjdow@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-warning-subtle text-warning fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-2.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Betsey Fanelli</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">betseyfanelli@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-warning-subtle text-warning fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-7.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Arnold Diaz</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">arnolddiaz@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-14.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Ricardo Thomas</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">ricardothomas@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-warning-subtle text-warning fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-3.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Gordon Eklund</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">gordoneEklund@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-6.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Martin Helmer</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">martinhelmer@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-15.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Susan Hubbard</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">susanhubbard@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-warning-subtle text-warning fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-7.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Robert Brewer</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">robertnbrewer@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-light text-muted fw-semibold fs-14 px-3 rounded-5">Lead</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-content-center">

                                <div class="d-flex">
                                    <img src="/images/users/user-5.jpg" alt="avatar" class="img-fluid avatar-md img-thumbnail me-2 rounded-circle avatar-border">
                                    <h4 class="fs-16 mb-0 align-content-center"><a href="javascript:void(0);" class="text-black">Wiley Brown</a></h4>
                                </div>

                                <div class="dropdown mx-0">
                                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted fs-20"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Follow</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 pt-1">
                                <a href="javascript:void(0);" class="d-inline-block text-muted">wileyvbrown@example.com</a>
                            </div>

                            <div class="mt-2 pt-1">
                                <span class="badge bg-warning-subtle text-warning fw-semibold fs-14 px-3 rounded-5">Customer</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection