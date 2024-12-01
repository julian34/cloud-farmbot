@extends('layouts.vertical', ['title' => 'Analytics'])

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
        </div>
    </div>

    <!-- start row -->
    <div class="row">
        <div class="col-md-12 col-xl-4">
            <div class="row g-3">

                <div class="col-md-6 col-xl-6">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="fs-16 mb-1">Website Traffic</div>
                            </div>

                            <div class="d-flex align-items-baseline mb-2">
                                <div class="fs-22 mb-0 me-2 fw-semibold text-black">91.6K</div>
                                <div class="me-auto">
                                    <span class="text-primary d-inline-flex align-items-center">
                                        15%
                                        <i data-feather="trending-up" class="ms-1" style="height: 20px; width: 20px;"></i>
                                    </span>
                                </div>
                            </div>

                            <div id="website-traffic" class="apex-charts"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="fs-16 mb-1">Conversion Rate</div>
                            </div>

                            <div class="d-flex align-items-baseline mb-2">
                                <div class="fs-22 mb-0 me-2 fw-semibold text-black">15%</div>
                                <div class="me-auto">
                                    <span class="text-danger d-inline-flex align-items-center">
                                        10%
                                        <i data-feather="trending-down" class="ms-1" style="height: 20px; width: 20px;"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="conversion-visitors" class="apex-charts"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="fs-16 mb-1">Session Duration</div>
                            </div>

                            <div class="d-flex align-items-baseline mb-2">
                                <div class="fs-22 mb-0 me-2 fw-semibold text-black">90 Sec</div>
                                <div class="me-auto">
                                    <span class="text-primary d-inline-flex align-items-center">
                                        25%
                                        <i data-feather="trending-up" class="ms-1" style="height: 20px; width: 20px;"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="session-duration" class="apex-charts"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="fs-16 mb-1">Active Users</div>
                            </div>

                            <div class="d-flex align-items-baseline mb-2">
                                <div class="fs-22 mb-0 me-2 fw-semibold text-black">2,986</div>
                                <div class="me-auto">
                                    <span class="text-primary d-inline-flex align-items-center">
                                        4%
                                        <i data-feather="trending-up" class="ms-1" style="height: 20px; width: 20px;"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="active-users" class="apex-charts"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="fs-16 mb-1">Average Daily Sales</div>
                            </div>

                            <div class="d-flex align-items-baseline mb-2">
                                <div class="fs-22 mb-0 me-2 fw-semibold text-black">$28,450</div>
                            </div>

                            <div id="average-daily-sales" class="apex-charts"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end sales -->

        <!-- Start Earning Reports -->
        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title text-black mb-0">Earning Reports</h5>
                    </div>
                </div>

                <div class="card-body">
                    <!-- Earning reports Chart -->
                    <div id="monthly-sales" class="apex-charts"></div>

                    <div class="border border-dashed border-primary-subtle rounded p-3 mt-2">
                        <div class="row gap-2 gap-sm-0">
                            <div class="col-12 col-sm-4">
                                <div class="earnings-section">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="bg-info-subtle rounded-2 p-1 me-2 border border-dashed border-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48"><g fill="none">
                                                <path d="M0 0h48v48H0z"/><path fill="#73bbe2" fill-rule="evenodd" d="M24 7a1 1 0 0 0-1 1v3h-1a7 7 0 1 0 0 14h1v10h-1a5 5 0 0 1-4.716-3.333a1 1 0 1 0-1.885.666A7 7 0 0 0 22 37h1v3a1 1 0 1 0 2 0v-3h1a7 7 0 1 0 0-14h-1V13h1a5 5 0 0 1 4.716 3.333a1 1 0 1 0 1.885-.666A7 7 0 0 0 26 11h-1V8a1 1 0 0 0-1-1m-3 1a3 3 0 1 1 6 0v1.055A9.01 9.01 0 0 1 34.487 15a3 3 0 1 1-5.657 2A3 3 0 0 0 27 15.17v5.885a9.001 9.001 0 0 1 0 17.89V40a3 3 0 1 1-6 0v-1.055A9.01 9.01 0 0 1 13.513 33a3 3 0 1 1 5.657-2A3 3 0 0 0 21 32.83v-5.885a9.001 9.001 0 0 1 0-17.89zm-4 10a5 5 0 0 1 5-5h1v10h-1a5 5 0 0 1-5-5m4-2.83a3.001 3.001 0 0 0 0 5.66zM25 25h1a5 5 0 0 1 0 10h-1zm2 2.17v5.66a3.001 3.001 0 0 0 0-5.66" clip-rule="evenodd"/></g>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 fw-normal fs-16">Earnings</h6>
                                    </div>
                                    <h4 class="my-2 text-black">$545.69</h4>
                                    <div class="progress w-75" style="height:6px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                <div class="earnings-profit border-start border-dashed border-primary-subtle mt-md-0 mt-2">
                                    <div class="ms-md-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="bg-primary-subtle rounded-2 p-1 me-2 border border-dashed border-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="#287F71" fill-rule="evenodd" clip-rule="evenodd">
                                                    <path d="M17.206 1.856c-1.063-.419-2.09-.135-2.817.512c-.71.63-1.139 1.602-1.139 2.632v4c0 .967.784 1.75 1.75 1.75h4c1.03 0 2.002-.43 2.633-1.139c.646-.727.93-1.754.51-2.817a8.776 8.776 0 0 0-4.937-4.938M14.75 9V5c0-.627.265-1.182.636-1.512c.353-.314.791-.425 1.27-.236a7.276 7.276 0 0 1 4.092 4.092c.189.479.078.917-.236 1.27c-.33.371-.885.636-1.512.636h-4a.25.25 0 0 1-.25-.25"/><path d="M10.995 2.87c-.61-.396-1.2-.51-1.85-.396c-.55.096-1.14.36-1.767.641l-.067.03A10.25 10.25 0 1 0 20.855 16.69l.03-.068c.281-.627.545-1.217.641-1.768c.113-.648 0-1.239-.396-1.85c-.426-.657-1.01-.979-1.724-1.125c-.634-.13-1.426-.13-2.334-.129H15.5c-.964 0-1.612-.002-2.095-.066c-.461-.063-.659-.17-.789-.3c-.13-.13-.237-.328-.3-.79c-.064-.482-.066-1.13-.066-2.094V6.928c0-.908 0-1.7-.13-2.334c-.145-.714-.467-1.298-1.125-1.724M7.924 4.514c.719-.322 1.136-.503 1.48-.563c.265-.046.474-.018.776.178c.254.165.389.361.471.765c.095.467.099 1.104.099 2.106v1.552c0 .898 0 1.648.08 2.242c.084.628.27 1.195.726 1.65c.455.456 1.022.642 1.65.726c.594.08 1.344.08 2.242.08H17c1.002 0 1.639.004 2.106.099c.404.082.6.217.765.471c.196.302.224.511.178.777c-.06.343-.241.76-.563 1.48a8.755 8.755 0 0 1-4.638 4.507a8.75 8.75 0 0 1-6.924-16.07"/></g>
                                                </svg>
                                            </div>
                                            <h6 class="mb-0 fw-normal fs-16">Profit</h6>
                                        </div>
                                        <h4 class="my-2 text-black">$256.34</h4>
                                        <div class="progress w-75" style="height:6px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-4">
                                <div class="earnings-expense border-start border-dashed border-primary-subtle mt-md-0 mt-2">
                                    <div class="ms-md-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="bg-secondary-subtle rounded-2 p-1 me-2 border border-dashed border-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"><g fill="none" stroke="#963b68" stroke-linejoin="round">
                                                    <path d="M.5 12.5h4l1-4h1.795a4.625 4.625 0 0 0 4.33-3.001C12.532 3.08 10.745.5 8.161.5H3.5z"/><path d="M4 14.5h4L9 11h1.577c1.477 0 2.82-.859 3.438-2.2c.927-2.008-.54-4.3-2.75-4.3H6.5z"/></g>
                                                </svg>
                                            </div>
                                            <h6 class="mb-0 fw-normal fs-16">Expense</h6>
                                        </div>
                                        <h4 class="my-2 text-black">$74.19</h4>
                                        <div class="progress w-75" style="height:6px">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end row -->


    <!-- Start Wdget Component -->
    <div class="row">

        <!-- Start Traffic Source -->
        <div class="col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title text-black mb-0">Traffic Source</h5>
                    </div>
                </div>

                <div class="card-body mt-0">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th>Network</th>
                                    <th colspan="2">Visitors</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instagram</td>
                                    <td>3,550</td>
                                    <td class="w-50">
                                        <div class="progress progress-md mt-0">
                                            <div class="progress-bar bg-danger" style="width: 80.0%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Facebook</td>
                                    <td>1,245</td>
                                    <td class="w-50">
                                        <div class="progress progress-md mt-0">
                                            <div class="progress-bar bg-primary" style="width: 55.9%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Twitter</td>
                                    <td>1,798</td>
                                    <td class="w-50">
                                        <div class="progress progress-md mt-0">
                                            <div class="progress-bar bg-secondary" style="width: 67.0%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>YouTube</td>
                                    <td>986</td>
                                    <td class="w-50">
                                        <div class="progress progress-md mt-0">
                                            <div class="progress-bar bg-danger" style="width: 38.72%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Pinterest</td>
                                    <td>854</td>
                                    <td class="w-50">
                                        <div class="progress progress-md mt-0">
                                            <div class="progress-bar bg-primary" style="width: 45.08%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Linkedin</td>
                                    <td>650</td>
                                    <td class="w-50">
                                        <div class="progress progress-md mt-0">
                                            <div class="progress-bar bg-warning" style="width: 68.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Sales By Countries -->
        <div class="col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title text-black mb-0">Sales by Countries</h5>
                        <div class="ms-auto"> 
                            <button class="btn btn-sm bg-light border dropdown-toggle fw-medium text-black" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">View All<i class="mdi mdi-chevron-down ms-1 fs-14"></i></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">This Week</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex align-items-center mb-3">
                            <div class="avatar flex-shrink-0 me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64">
                                    <path fill="#ed4c5c" d="M48 6.6C43.3 3.7 37.9 2 32 2v4.6z"/><path fill="#fff" d="M32 11.2h21.6C51.9 9.5 50 7.9 48 6.6H32z"/><path fill="#ed4c5c" d="M32 15.8h25.3c-1.1-1.7-2.3-3.2-3.6-4.6H32z"/><path fill="#fff" d="M32 20.4h27.7c-.7-1.6-1.5-3.2-2.4-4.6H32z"/><path fill="#ed4c5c" d="M32 25h29.2c-.4-1.6-.9-3.1-1.5-4.6H32z"/><path fill="#fff" d="M32 29.7h29.9c-.1-1.6-.4-3.1-.7-4.6H32z"/><path fill="#ed4c5c" d="M61.9 29.7H32V32H2c0 .8 0 1.5.1 2.3h59.8c.1-.8.1-1.5.1-2.3c0-.8 0-1.6-.1-2.3"/><path fill="#fff" d="M2.8 38.9h58.4c.4-1.5.6-3 .7-4.6H2.1c.1 1.5.3 3.1.7 4.6"/><path fill="#ed4c5c" d="M4.3 43.5h55.4c.6-1.5 1.1-3 1.5-4.6H2.8c.4 1.6.9 3.1 1.5 4.6"/><path fill="#fff" d="M6.7 48.1h50.6c.9-1.5 1.7-3 2.4-4.6H4.3c.7 1.6 1.5 3.1 2.4 4.6"/><path fill="#ed4c5c" d="M10.3 52.7h43.4c1.3-1.4 2.6-3 3.6-4.6H6.7c1 1.7 2.3 3.2 3.6 4.6"/><path fill="#fff" d="M15.9 57.3h32.2c2.1-1.3 3.9-2.9 5.6-4.6H10.3c1.7 1.8 3.6 3.3 5.6 4.6"/><path fill="#ed4c5c" d="M32 62c5.9 0 11.4-1.7 16.1-4.7H15.9c4.7 3 10.2 4.7 16.1 4.7"/><path fill="#428bc1" d="M16 6.6c-2.1 1.3-4 2.9-5.7 4.6c-1.4 1.4-2.6 3-3.6 4.6c-.9 1.5-1.8 3-2.4 4.6c-.6 1.5-1.1 3-1.5 4.6c-.4 1.5-.6 3-.7 4.6c-.1.8-.1 1.6-.1 2.4h30V2c-5.9 0-11.3 1.7-16 4.6"/><path fill="#fff" d="m25 3l.5 1.5H27l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm4 6l.5 1.5H31l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm-8 0l.5 1.5H23l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm4 6l.5 1.5H27l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm-8 0l.5 1.5H19l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm-8 0l.5 1.5H11l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm20 6l.5 1.5H31l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm-8 0l.5 1.5H23l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm-8 0l.5 1.5H15l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm12 6l.5 1.5H27l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm-8 0l.5 1.5H19l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm-8 0l.5 1.5H11l-1.2 1l.4 1.5l-1.2-.9l-1.2.9l.4-1.5l-1.2-1h1.5zm2.8-14l1.2-.9l1.2.9l-.5-1.5l1.2-1h-1.5L13 9l-.5 1.5h-1.4l1.2.9zm-8 12l1.2-.9l1.2.9l-.5-1.5l1.2-1H5.5L5 21l-.5 1.5h-1c0 .1-.1.2-.1.3l.8.6z"/>
                                </svg>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1 fs-15 fw-semibold text-black">$8,567k</h6>
                                    </div>
                                    <small class="text-muted fw-semibold">United states</small>
                                </div>
                                <div class="user-progress">
                                    <p class="text-primary fw-medium mb-0 d-flex align-items-center gap-1">
                                        <i class="mdi mdi-chevron-up fs-20"></i>
                                        40.8%
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="d-flex align-items-center mb-3">
                            <div class="avatar flex-shrink-0 me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64">
                                    <path fill="#2a5f9e" d="M32 2v10H12v20H2c0 16.6 13.4 30 30 30s30-13.4 30-30S48.6 2 32 2"/><path fill="#fff" d="M32 2c-4.7 0-9.1 1.1-13.1 3v6H11v7.9H5c-1.9 4-3 8.4-3 13.1h12V17l12 15h6v-7.5L23.6 14H32z"/><g fill="#ed4c5c"><path d="M15.4 14L30 32h2v-4.9L21.4 14z"/><path d="M32 5H18.9c-6 2.9-11 7.9-13.9 13.9V32h6V11h21z"/></g><path fill="#fff" d="m8 35.7l2.2-2.7l-.7 3.5l3.5.1l-3.1 1.6L12 41l-3.1-1.4L8 43l-.9-3.4L4 41l2.1-2.8L3 36.6l3.5-.1l-.7-3.5zm44-15.5l1.8-2.2l-.6 2.8l2.8.1l-2.5 1.3l1.7 2.2l-2.5-1.2L52 26l-.7-2.8l-2.5 1.2l1.7-2.2l-2.5-1.3l2.8-.1l-.6-2.8zm0 20l1.8-2.2l-.6 2.8l2.8.1l-2.5 1.3l1.7 2.2l-2.5-1.2L52 46l-.7-2.8l-2.5 1.2l1.7-2.2l-2.5-1.3l2.8-.1l-.6-2.8zm-10-14l1.8-2.2l-.6 2.8l2.8.1l-2.5 1.3l1.7 2.2l-2.5-1.2L42 32l-.7-2.8l-2.5 1.2l1.7-2.2l-2.5-1.3l2.8-.1l-.6-2.8z"/>
                                </svg>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1 fs-15 fw-semibold text-black">$8,567k</h6>
                                    </div>
                                    <small class="text-muted fw-semibold">Australia</small>
                                </div>
                                <div class="user-progress">
                                    <p class="text-danger fw-medium mb-0 d-flex align-items-center gap-1">
                                        <i class="mdi mdi-chevron-down fs-20"></i>
                                        35.8%
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="d-flex align-items-center mb-3">
                            <div class="avatar flex-shrink-0 me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64">
                                    <path fill="#f2b200" d="M31.8 2c-13 0-24.1 8.4-28.2 20h56.6C56 10.4 44.9 2 31.8 2"/><path fill="#83bf4f" d="M31.8 62c13.1 0 24.2-8.3 28.3-20H3.6c4.1 11.7 15.2 20 28.2 20"/><path fill="#fff" d="M3.6 22c-1.1 3.1-1.7 6.5-1.7 10s.6 6.9 1.7 10h56.6c1.1-3.1 1.7-6.5 1.7-10s-.6-6.9-1.7-10z"/><circle cx="31.8" cy="32" r="8" fill="#428bc1"/><circle cx="31.8" cy="32" r="7" fill="#fff"/><g fill="#428bc1"><circle cx="29.2" cy="25.5" r=".5"/><circle cx="27.6" cy="26.4" r=".5"/><circle cx="26.3" cy="27.7" r=".5"/><circle cx="25.4" cy="29.3" r=".5"/><circle cx="24.9" cy="31.1" r=".5"/><circle cx="24.9" cy="32.9" r=".5"/><circle cx="25.4" cy="34.7" r=".5"/><circle cx="26.3" cy="36.3" r=".5"/><circle cx="27.6" cy="37.6" r=".5"/><circle cx="29.2" cy="38.5" r=".5"/><circle cx="30.9" cy="38.9" r=".5"/><path d="M32.3 39c0-.3.2-.5.4-.6c.3 0 .5.2.6.4c0 .3-.2.5-.4.6c-.4.1-.6-.1-.6-.4"/><circle cx="34.5" cy="38.5" r=".5"/><circle cx="36.1" cy="37.6" r=".5"/><circle cx="37.4" cy="36.3" r=".5"/><circle cx="38.3" cy="34.7" r=".5"/><circle cx="38.8" cy="32.9" r=".5"/><path d="M38.8 31.6c-.3 0-.5-.2-.6-.4c0-.3.2-.5.4-.6c.3 0 .5.2.6.4c.1.3-.1.5-.4.6"/><circle cx="38.3" cy="29.3" r=".5"/><circle cx="37.4" cy="27.7" r=".5"/><circle cx="36.1" cy="26.4" r=".5"/><path d="M35 25.7c-.1.3-.4.4-.7.3c-.3-.1-.4-.4-.3-.7c.1-.3.4-.4.7-.3c.3.2.4.5.3.7m-1.8-.6c0 .3-.3.5-.6.4c-.3 0-.5-.3-.4-.6c0-.3.3-.5.6-.4c.3.1.5.4.4.6m-1.8-.1c0 .3-.2.5-.4.6c-.3 0-.5-.2-.6-.4c0-.3.2-.5.4-.6c.3-.1.6.1.6.4"/><circle cx="31.8" cy="32" r="1.5"/><path d="m31.8 25l-.2 4.3l.2 2.7l.3-2.7zm-1.8.2l.9 4.3l.9 2.5l-.4-2.7z"/><path d="m28.3 25.9l2 3.9l1.5 2.2l-1.1-2.5zM26.9 27l2.9 3.3l2 1.7l-1.7-2.1z"/><path d="m25.8 28.5l3.6 2.4l2.4 1.1l-2.2-1.6z"/><path d="m25.1 30.2l4.1 1.3l2.6.5l-2.5-.9zm-.3 1.8l4.4.2l2.6-.2l-2.6-.2z"/><path d="m25.1 33.8l4.2-.9l2.5-.9l-2.6.5zm.7 1.7l3.8-1.9l2.2-1.6l-2.4 1.1z"/><path d="m26.9 36.9l3.2-2.8l1.7-2.1l-2 1.7zm1.4 1.2l2.4-3.7l1.1-2.4l-1.5 2.2z"/><path d="m30 38.8l1.4-4.1l.4-2.7l-.9 2.5zm1.8.2l.3-4.3l-.3-2.7l-.2 2.7zm1.8-.2l-.8-4.3l-1-2.5l.5 2.7z"/><path d="m35.3 38.1l-1.9-3.9l-1.6-2.2l1.2 2.5zm1.5-1.2l-2.9-3.2l-2.1-1.7l1.8 2.1z"/><path d="m37.9 35.5l-3.6-2.4l-2.5-1.1l2.2 1.6zm.7-1.7l-4.1-1.3l-2.7-.5l2.6.9zm.2-1.8l-4.3-.3l-2.7.3l2.7.2zm-.2-1.8l-4.2.9l-2.6.9l2.7-.5z"/><path d="M37.9 28.5L34 30.4L31.8 32l2.5-1.1zm-1.1-1.4l-3.2 2.8l-1.8 2.1l2.1-1.7z"/><path d="M35.3 25.9L33 29.6L31.8 32l1.6-2.2z"/><path d="m33.7 25.2l-1.4 4.1l-.5 2.7l1-2.5z"/></g>
                                </svg>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1 fs-15 fw-semibold text-black">$8,567k</h6>
                                    </div>
                                    <small class="text-muted fw-semibold">India</small>
                                </div>
                                <div class="user-progress">
                                    <p class="text-primary fw-medium mb-0 d-flex align-items-center gap-1">
                                        <i class="mdi mdi-chevron-up fs-20"></i>
                                        55.8%
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="d-flex align-items-center mb-3">
                            <div class="avatar flex-shrink-0 me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64"><path fill="#f9f9f9" d="M48 6.6C43.4 3.7 37.9 2 32 2S20.6 3.7 16 6.6v50.7c4.6 2.9 10.1 4.6 16 4.6s11.4-1.7 16-4.6z"/><path fill="#ed4c5c" d="M48 6.6v50.7c8.4-5.2 14-14.8 14-25.4s-5.6-20-14-25.3m-32 0C7.6 11.9 2 21.5 2 32s5.6 20.1 14 25.4zm26.9 25c-.4-.2-.5-.6-.4-.8l1-3.6l-3.5.7c-.1 0-.5 0-.6-.7l-.3-1.2l-2.4 2.8s-1.6 1.7-1.1-.9l1-5.5l-1.9 1c-.1 0-.5.1-1-.9L32 19l-1.8 3.3c-.5 1-.9.9-1 .9l-1.9-1l1 5.5c.5 2.6-1.1.9-1.1.9l-2.4-2.8l-.3 1.2c-.2.7-.5.7-.6.7l-3.5-.7l1 3.6c0 .3 0 .6-.4.8l-1 .6s4 3.2 5.3 4.3c.3.2.9.8.7 1.5l-.5 1.4l5.5-.8c.3 0 .9 0 .8.9l-.3 5.7h1l-.3-5.7c0-.9.6-.9.8-.9l5.5.8l-.5-1.4c-.2-.7.4-1.3.7-1.5C40 35.2 44 32 44 32z"/></svg>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1 fs-15 fw-semibold text-black">$8,567k</h6>
                                    </div>
                                    <small class="text-muted fw-semibold">Canada</small>
                                </div>
                                <div class="user-progress">
                                    <p class="text-danger fw-medium mb-0 d-flex align-items-center gap-1">
                                        <i class="mdi mdi-chevron-down fs-20"></i>
                                        30.0%
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="d-flex align-items-center mb-3">
                            <div class="avatar flex-shrink-0 me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64">
                                    <path fill="#2a5f9e" d="M32 2v10H12v20H2c0 16.6 13.4 30 30 30s30-13.4 30-30S48.6 2 32 2"/><g fill="#fff"><path d="M14 8C6.7 13.5 2 22.2 2 32h12z"/><path d="M8 14h24V2C22.2 2 13.5 6.7 8 14"/><path d="M9.8 11.8L26 32h6v-7.5L17.1 5.9c-2.7 1.6-5.2 3.6-7.3 5.9"/></g><g fill="#ed4c5c"><path d="M32 5H18.9c-6 2.9-11 7.9-13.9 13.9V32h6V11h21z"/><path d="M32 27.1L19 11h-6l17 21h2z"/></g><path fill="#fff" d="m37.1 32l1-2.9l-2.7-1.9h3.4l1-2.8l1 2.8h3.4l-2.7 1.9l1 2.9l-2.7-1.8z"/><path fill="#ed4c5c" d="m39.8 29.5l1.6 1.1l-.6-1.8l1.6-1.1h-2l-.6-1.7l-.6 1.7h-2l1.6 1.1l-.6 1.8z"/><path fill="#fff" d="m54.6 32l1-2.9l-2.7-1.9h3.4l1-2.8l1 2.8h3.4L59 29.1l1 2.9l-2.7-1.8z"/><path fill="#ed4c5c" d="m57.3 29.5l1.6 1.1l-.6-1.8l1.6-1.1h-2l-.6-1.7l-.6 1.7h-2l1.6 1.1l-.6 1.8z"/><path fill="#fff" d="m45.9 21.7l1-2.9l-2.7-1.9h3.4l1-2.8l1 2.8H53l-2.7 1.9l1 2.9l-2.7-1.8z"/><path fill="#ed4c5c" d="m48.5 19.2l1.6 1.1l-.6-1.8l1.6-1.1h-1.9l-.7-1.7l-.5 1.7h-2l1.6 1.1l-.6 1.8z"/><path fill="#fff" d="m45 48.7l1.3-3.8l-3.6-2.5h4.5l1.3-3.7l1.3 3.7h4.4l-3.6 2.5l1.3 3.8l-3.5-2.4z"/><path fill="#ed4c5c" d="m48.5 45.4l2.1 1.4l-.7-2.3l2-1.5h-2.5l-.9-2.2l-.7 2.2h-2.6l2 1.5l-.7 2.3z"/><path fill="#fff" d="M12.6 11h12.2v3H12.6z"/>
                                </svg>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1 fs-15 fw-semibold text-black">$8,567k</h6>
                                    </div>
                                    <small class="text-muted fw-semibold">New Zealand</small>
                                </div>
                                <div class="user-progress">
                                    <p class="text-primary fw-medium mb-0 d-flex align-items-center gap-1">
                                        <i class="mdi mdi-chevron-up fs-20"></i>
                                        68.8%
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Start Visit By Device -->
        <div class="col-md-12 col-xl-4">
            <div class="card overflow-hidden">

                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title text-black mb-0">Visit by Device</h5>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2 position-relative">
                        <h3 class="fs-14 mb-0 text-muted">Total Page Visit</h3>
                    </div>

                    <div class="d-flex align-items-center mt-3">
                        <h4 class="fs-24 mb-0 me-2 fw-medium text-black">24,565K</h4>
                        <span class="badge bg-primary-subtle text-primary">3.18% 
                            <i data-feather="trending-up" class="ms-1" style="height: 14px; width: 14px;"></i>
                        </span>
                    </div>

                    <hr class="border my-3">

                    <div class="row">
                        <div class="col-md-4 col-xl-4 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="visit-device mt-2">
                                <div class="">
                                    <h4 class="fs-15 text-muted mb-1">Mobile</h4>
                                    <p class="fs-24 text-black mb-0">78%</p>
                                    <p class="text-primary fw-medium mb-0 mt-md-5 mt-3 mb-0 d-flex align-items-center gap-2">
                                        3.75%
                                        <i data-feather="trending-up" class="me-1" style="height: 18px; width: 18px;"></i>
                                    </p>
                                    <div class="progress progress-md mt-2">
                                        <div class="progress-bar bg-primary" style="width: 78.0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-xl-4 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="visit-device border-start border-dashed border-1 mt-3 mt-md-2">
                                <div class="ms-md-3">
                                    <h4 class="fs-15 text-muted mb-1">Tablet</h4>
                                    <p class="fs-24 text-black mb-0">12%</p>
                                    <p class="text-danger fw-medium mb-0 mt-md-5 mt-3 mb-0 d-flex align-items-center gap-2">
                                        1.98%
                                        <i data-feather="trending-down" class="me-1" style="height: 18px; width: 18px;"></i>
                                    </p>
                                    <div class="progress progress-md mt-2">
                                        <div class="progress-bar bg-danger" style="width: 56.0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="visit-device border-start border-dashed border-1 mt-3 mt-md-2">
                                <div class="ms-md-3">
                                    <h4 class="fs-15 text-muted mb-1">Web</h4>
                                    <p class="fs-24 text-black mb-0">10%</p>
                                    <p class="text-danger fw-medium mb-0 mt-md-5 mt-3 mb-0 d-flex align-items-center gap-2">
                                        1.77%
                                        <i data-feather="trending-down" class="me-1" style="height: 18px; width: 18px;"></i>
                                    </p>
                                    <div class="progress progress-md mt-2">
                                        <div class="progress-bar bg-danger" style="width: 37.0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="m-0 fs-14 fst-italic text-muted mb-0 mt-2 pt-1">Last data updated - 13min ago <a href="#!" class="link-danger ms-1 "><i class="align-middle mdi mdi-refresh"></i></a></p>
                </div>
            </div>
        </div>

    </div>
    <!-- End Monthly Sales -->

    <div class="row">
        <div class="col-xl-8">
            <div class="card overflow-hidden">
                
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title text-black mb-0">Campaign Source</h5>
                    </div>
                </div>

                <div class="card-body mt-0">
                    <div class="table-responsive table-card mt-0">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th scope="col" class="cursor-pointer">Source</th>
                                    <th scope="col" class="cursor-pointer">Medium</th>
                                    <th scope="col" class="cursor-pointer">Impression</th>
                                    <th scope="col" class="cursor-pointer">Campaign Name</th>
                                    <th scope="col" class="cursor-pointer">Clicks</th>
                                    <th scope="col" class="cursor-pointer">Cost</th>
                                    <th scope="col" class="cursor-pointer desc">Conversion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Google</td>
                                    <td>CPC</td>
                                    <td>3,432,18</td>
                                    <td>Summer Sale 2024</td>
                                    <td>4,819,21</td>
                                    <td>$2,876,23</td>
                                    <td>3,218,49</td>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td>Social</td>
                                    <td>4,432,18</td>
                                    <td>Holiday Promo</td>
                                    <td>1,224,56</td>
                                    <td>$4,983,40</td>
                                    <td>5,152,60</td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td>Social</td>
                                    <td>6,159,32</td>
                                    <td>New Product Launch</td>
                                    <td>8,951,34</td>
                                    <td>$7,436,54</td>
                                    <td>4,254,41</td>
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    <td>Social</td>
                                    <td>21,154,34</td>
                                    <td>Flash Sale</td>
                                    <td>12,018,30</td>
                                    <td>$12,543,01</td>
                                    <td>43,309,28</td>
                                </tr>
                                <tr>
                                    <td>Affiliate</td>
                                    <td>Affiliate</td>
                                    <td>34,154,31</td>
                                    <td>Partner Campaign</td>
                                    <td>11,018,30</td>
                                    <td>$18,650,58</td>
                                    <td>89,309,28</td>
                                </tr>
                                <tr>
                                    <td>YouTube</td>
                                    <td>Video</td>
                                    <td>14,154,31</td>
                                    <td>Partner Campaign</td>
                                    <td>18,018,30</td>
                                    <td>$47,650,58</td>
                                    <td>54,309,28</td>
                                </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title text-black mb-0">Top Session</h5>
                    </div>
                </div>

                <div class="card-body">
                    <div id="top-session" class="apex-charts mt-n3"></div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title text-black mb-0">Top Leads</h5>
                        <div class="ms-auto"> 
                            <button class="btn btn-sm bg-light border dropdown-toggle fw-medium text-black" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by Created<i class="mdi mdi-chevron-down ms-1 fs-14"></i></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Created</a>
                                <a class="dropdown-item" href="#">Converted</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div id="totalleads" class="apex-charts mt-n3"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title text-black mb-0">Top Performing Pages</h5>
                    </div>
                </div>

                <div class="card-body mt-0">
                    <div class="table-responsive table-card mt-0">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th class="width-xxl cursor-pointer" colspan="2">Pages</th>
                                    <th class="width-sm cursor-pointer text-end pe-0" colspan="2">Click</th>
                                    <th class="cursor-pointer width-sm text-end" colspan="2">Avg.position</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">Index</td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">1,101</span>
                                            <span class="text-danger d-block text-end fs-14">-435</span>
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">3.58</span>
                                            <span class="text-danger d-block text-end fs-14">-2.45</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td colspan="2">Blog</td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">657</span>
                                            <span class="text-danger d-block text-end fs-14">-535</span>
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">2.35</span>
                                            <span class="text-danger d-block text-end fs-14">-1.05</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">Products</td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">745</span>
                                            <span class="text-success d-block text-end fs-14">935</span>
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">3.58</span>
                                            <span class="text-success d-block text-end fs-14">2.45</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">Licenses</td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">1,587</span>
                                            <span class="text-danger d-block text-end fs-14">235</span>                                                              
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">7.47</span>
                                            <span class="text-danger d-block text-end fs-14">-3.89</span>                                                 
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">Affiliate</td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">1,947</span>
                                            <span class="text-success d-block text-end fs-14">635</span>
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">4.58</span>
                                            <span class="text-success d-block text-end fs-14">3.45</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">Socials</td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">1,247</span>
                                            <span class="text-danger d-block text-end fs-14">-735</span>
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">4.41</span>
                                            <span class="text-danger d-block text-end fs-14">-3.21</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">zoyothemes.com</td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">847</span>
                                            <span class="text-danger d-block text-end fs-14">-562</span>
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="d-flex justify-content-end">                                
                                            <span class="text-black fs-14 me-3">2.57</span>
                                            <span class="text-danger d-block text-end fs-14">-1.21</span>
                                        </div>
                                    </td>
                                </tr>

                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->

@endsection

@section('script-bottom')
<script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
@vite(['resources/js/pages/analytics-dashboard.init.js'])
@endsection