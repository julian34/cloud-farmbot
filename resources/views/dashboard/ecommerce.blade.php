@extends('layouts.vertical', ['title' => 'Ecommerce'])

@section('content')
<!-- Start Content-->
<div class="container-fluid">

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Ecommerce</h4>
    </div>
</div>

<!-- Start Row -->
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="widget-first">
                    <div class="d-flex justify-content-between align-items-end">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary-subtle rounded-2 p-1 me-2 border border-dashed border-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14 14"><path fill="#287F71" fill-rule="evenodd" d="M13.463 9.692C13.463 12.664 10.77 14 7 14S.537 12.664.537 9.713c0-3.231 1.616-4.868 4.847-6.505L4.24 1.077A.7.7 0 0 1 4.843 0H9.41a.7.7 0 0 1 .603 1.023L8.616 3.208c3.23 1.615 4.847 3.252 4.847 6.484M7.625 4.887a.625.625 0 1 0-1.25 0v.627a1.74 1.74 0 0 0-.298 3.44l1.473.322a.625.625 0 0 1-.133 1.236h-.834a.625.625 0 0 1-.59-.416a.625.625 0 1 0-1.178.416a1.877 1.877 0 0 0 1.56 1.239v.636a.625.625 0 1 0 1.25 0v-.636a1.876 1.876 0 0 0 .192-3.696l-1.473-.322a.49.49 0 0 1 .105-.97h.968a.622.622 0 0 1 .59.416a.625.625 0 0 0 1.178-.417a1.874 1.874 0 0 0-1.56-1.238z" clip-rule="evenodd"/></svg>
                                </div>
                                <p class="mb-0 text-dark fs-15">Total Orders</p>
                            </div>
                            <h3 class="mb-0 fs-24 text-black me-2">25,894</h3>
                        </div>

                        <div>
                            <div id="new-orders" class="apex-charts"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-muted mb-0 fs-13">
                            <span class="text-primary fs-14 me-2"><i class="mdi mdi-trending-up fs-18"></i> 12.5%</span>
                            <small class="text-dark fs-14"> vs last 7 days </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="widget-first">
                    <div class="d-flex justify-content-between align-items-end">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-secondary-subtle rounded-2 p-1 me-2 border border-dashed border-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><path fill="#963b68" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4"/></svg>
                                </div>
                                <p class="mb-0 text-dark fs-15">Monthly Orders</p>
                            </div>
                            <h3 class="mb-0 fs-24 text-black me-2">57,800</h3>
                        </div>

                        <div>
                            <div id="monthly-orders" class="apex-charts"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-muted mb-0 fs-13">
                            <span class="text-danger fs-14 me-2"><i class="mdi mdi-trending-down fs-18"></i> 1.5%</span>
                            <small class="text-dark fs-14"> vs last 7 days </small>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="widget-first">
                    <div class="d-flex justify-content-between align-items-end">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-info-subtle rounded-2 p-1 me-2 border border-dashed border-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#73bbe2" d="M7 20V8.975q0-.825.6-1.4T9.025 7H20q.825 0 1.413.587T22 9v8l-5 5H9q-.825 0-1.412-.587T7 20M2.025 6.25q-.15-.825.325-1.487t1.3-.813L14.5 2.025q.825-.15 1.488.325t.812 1.3L17.05 5H9Q7.35 5 6.175 6.175T5 9v9.55q-.4-.225-.687-.6t-.363-.85zM20 16h-4v4z"/></svg>
                                </div>
                                <p class="mb-0 text-dark fs-15">Monthly Revenue</p>   
                            </div>
                            <h3 class="mb-0 fs-24 text-black me-2">$637,254</h3>
                        </div>

                        <div>
                            <div id="monthly-revenue" class="apex-charts"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-muted mb-0 fs-13">
                            <span class="text-primary fs-14 me-2"><i class="mdi mdi-trending-up fs-18"></i> 12.8%</span>
                            <small class="text-dark fs-14"> vs last 7 days </small>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="widget-first">
                    <div class="d-flex justify-content-between align-items-end">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-warning-subtle rounded-2 p-1 me-2 border border-dashed border-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#f59440" d="M5.574 4.691c-.833.692-1.052 1.862-1.491 4.203l-.75 4c-.617 3.292-.926 4.938-.026 6.022C4.207 20 5.88 20 9.23 20h5.54c3.35 0 5.025 0 5.924-1.084c.9-1.084.591-2.73-.026-6.022l-.75-4c-.439-2.34-.658-3.511-1.491-4.203C17.593 4 16.403 4 14.02 4H9.98c-2.382 0-3.572 0-4.406.691" opacity="0.5"/><path fill="#988D4D" d="M12 9.25a2.251 2.251 0 0 1-2.122-1.5a.75.75 0 1 0-1.414.5a3.751 3.751 0 0 0 7.073 0a.75.75 0 1 0-1.414-.5A2.251 2.251 0 0 1 12 9.25"/></svg>
                                </div>
                                <p class="mb-0 text-dark fs-15">Out of Stock</p>
                            </div>
                            <h3 class="mb-0 fs-24 text-black me-2">142 Items</h3>
                        </div>

                        <div>
                            <div id="items-stock" class="apex-charts"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-muted mb-0 fs-13">
                            <span class="text-primary fs-14 me-2"><i class="mdi mdi-trending-up fs-18"></i> 18%</span>
                            <small class="text-dark fs-14"> vs last 7 days </small>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Start -->

<!-- Sales Chart -->
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title text-black mb-0">Sales Report</h5>
                </div>
            </div>

            <div class="card-body">
                <div id="chart-money" class="apex-charts"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title text-black mb-0">Sales by Country</h5>
                </div>
            </div>

            <div class="card-body">
                <div id="sales-country" class="apex-charts"></div>
            </div>
        </div>
    </div>
</div>

<!-- Top Selling Products -->
<div class="row">
    <!-- Top Selling Products -->
    <div class="col-lg-6 col-xl-4">
        <div class="card overflow-hidden">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title text-black mb-0">Top Selling Products</h5>

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

            <!-- start card body -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-traffic mb-0">

                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Sold</th>
                                <th>Earnings</th>
                            </tr>
                        </thead>

                        <tr>
                            <td class="text-center">
                                <div class="d-flex align-items-center">
                                    <span class="avatar mb-0 position-relative">
                                        <img class="avatar avatar-sm rounded-2 me-3 bg-primary-subtle rounded-circle p-1" src="/images/products/bag.png" alt="product-image"/>
                                    </span>
                                    <p class="mb-0 fs-14">Himalayan Hemp Laptop Bag</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary fw-semibold">457</span>
                            </td>
                            <td>
                                <p class="mb-0 fw-medium">$74,487</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <div class="d-flex align-items-center">
                                    <span class="avatar mb-0 position-relative">
                                        <img class="avatar avatar-sm rounded-2 me-3 bg-primary-subtle rounded-circle p-1" src="/images/products/watch.png" alt="product-image"/>
                                    </span>
                                    <p class="mb-0 fs-14">Classic Apple Watch</p>    
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary fw-semibold">859</span>
                            </td>
                            <td>
                                <p class="mb-0 fw-medium">$50,569</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <div class="d-flex align-items-center">
                                    <span class="avatar mb-0 position-relative">
                                        <img class="avatar avatar-sm rounded-2 me-3 bg-primary-subtle rounded-circle p-1" src="/images/products/headphone.png" alt="product-image"/>
                                    </span>
                                    <p class="mb-0 fs-14">New Headphone</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary fw-semibold">1024</span>
                            </td>
                            <td>
                                <p class="mb-0 fw-medium">$45,487</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <div class="d-flex align-items-center">
                                    <span class="avatar mb-0 position-relative">
                                        <img class="avatar avatar-sm rounded-2 me-3 bg-primary-subtle rounded-circle p-1" src="/images/products/leather-jacket.png" alt="product-image"/>
                                    </span>
                                    <p class="mb-0 fs-14">Leather jacket</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary fw-semibold">1478</span>
                            </td>
                            <td>
                                <p class="mb-0 fw-medium">$30,102</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <div class="d-flex align-items-center">
                                    <span class="avatar mb-0 position-relative">
                                        <img class="avatar avatar-sm rounded-2 me-3 bg-primary-subtle rounded-circle p-1" src="/images/products/shoes.png" alt="product-image"/>
                                    </span>
                                    <p class="mb-0 fs-14">Nike Air Shoes</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary fw-semibold">758</span>
                            </td>
                            <td>
                                <p class="mb-0 fw-medium">$89,778</p>
                            </td>
                        </tr>

                    </table>
                </div>
            </div> 
            <!-- end card body -->
        </div>
    </div>

    <!-- Repeat Customer Rate -->
    <div class="col-lg-6 col-xl-5">
        <div class="card">

            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title text-black mb-0">Repeat Customer Rate</h5>
                </div>
            </div>

            <div class="card-body">
                <div id="repeat-customer" class="apex-charts"></div>
            </div>

        </div>
    </div>

    <!-- Repeat Customer Rate -->
    <div class="col-md-12 col-xl-3">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title text-black mb-0">Customer Reviews</h5>
                </div>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2"> 
                    <div class="flex-1"> 
                        <div class="d-flex align-items-baseline mb-1"> 
                            <h4 class="mb-1 text-muted fs-28">4.8</h4> 
                            <span class="ms-2"> 
                                <i class="mdi mdi-star text-warning"></i> 
                                <i class="mdi mdi-star text-warning"></i> 
                                <i class="mdi mdi-star text-warning"></i> 
                                <i class="mdi mdi-star text-warning"></i> 
                                <i class="mdi mdi-star text-muted"></i> 
                            </span> 
                        </div> 
                        <a href="javascript:void(0);" class="fs-14">2,878 Reviews</a> 
                    </div> 
                    <div class="min-w-fit"> 
                        <span class="fs-14">(4.3 out of 5)</span> 
                    </div> 
                </div>

                <div class="mt-2"> 
                    <div class="d-flex align-items-center"> 
                        <div class="flex-fill"> 
                            <div class="d-flex align-items-center justify-content-between"> 
                                <span class="d-block ">5 Stars</span> 
                                <span class="d-block ">80%</span> 
                            </div> 
                            <div class="progress progress-md mt-2" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"> 
                                <div class="progress-bar bg-primary" style="width: 80%"></div> 
                            </div> 
                        </div> 
                    </div> 
                </div>

                <div class="mt-2"> 
                    <div class="d-flex align-items-center"> 
                        <div class="flex-fill"> 
                            <div class="d-flex align-items-center justify-content-between"> 
                                <span class="d-block ">4 Stars</span> 
                                <span class="d-block ">55%</span> 
                            </div> 
                            <div class="progress progress-md mt-2" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"> 
                                <div class="progress-bar bg-primary" style="width: 55%"></div> 
                            </div> 
                        </div> 
                    </div> 
                </div>

                <div class="mt-2"> 
                    <div class="d-flex align-items-center"> 
                        <div class="flex-fill"> 
                            <div class="d-flex align-items-center justify-content-between"> 
                                <span class="d-block ">3 Stars</span> 
                                <span class="d-block ">45%</span> 
                            </div> 
                            <div class="progress progress-md mt-2" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"> 
                                <div class="progress-bar bg-primary" style="width: 45%"></div> 
                            </div> 
                        </div> 
                    </div> 
                </div>

                <div class="mt-2"> 
                    <div class="d-flex align-items-center"> 
                        <div class="flex-fill"> 
                            <div class="d-flex align-items-center justify-content-between"> 
                                <span class="d-block ">2 Stars</span> 
                                <span class="d-block ">25%</span> 
                            </div> 
                            <div class="progress progress-md mt-2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 
                                <div class="progress-bar bg-primary" style="width: 25%"></div> 
                            </div> 
                        </div> 
                    </div> 
                </div>

                <div class="mt-2"> 
                    <div class="d-flex align-items-center"> 
                        <div class="flex-fill"> 
                            <div class="d-flex align-items-center justify-content-between"> 
                                <span class="d-block ">1 Stars</span> 
                                <span class="d-block ">8%</span> 
                            </div> 
                            <div class="progress progress-md mt-2" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"> 
                                <div class="progress-bar bg-primary" style="width: 8%"></div> 
                            </div> 
                        </div> 
                    </div> 
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Top Selling Products -->


<div class="row">
    <!-- Start Order Report -->
    <div class="col-xl-4">
        <div class="card">

            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title text-black mb-0">Order Report</h5>
                </div>
            </div>

            <div class="card-body">
                <div id="ordersreport" class="apex-charts"></div>

                <div class="order-report-card border shadow-sm card mb-0 mx-auto mt-3 p-3">
                    <div class="row">
                        <div class="col-md-6 col justify-content-center text-center"> 
                            <p class="mb-1 d-flex justify-content-center">
                                <span class="ballot-point bg-primary"></span>
                                Delivered
                            </p>
                            <h4 class="mb-1 fw-medium text-black">7854</h4> 
                            <div class="d-flex justify-content-center"> 
                                <p class="text-muted mb-0 fs-13">Last 6 months</p>
                            </div>
                        </div>

                        <div class="col-md-6 col justify-content-center text-center">
                            <p class="mb-1 d-flex justify-content-center">
                                <span class="ballot-point bg-secondary"></span>
                                Cancelled
                            </p>
                            <h4 class="mb-1 fw-medium text-black">2480</h4>
                            <div class="d-flex justify-content-center"> 
                                <p class="text-muted mb-0 fs-13">Last 6 months</p>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    <!-- End Order Report -->

    <!-- Start Products Stock -->
    <div class="col-xl-8">
        <div class="card overflow-hidden">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title text-black mb-0">Products Stock</h5>
                    <div class="ms-auto"> 
                        <button class="btn btn-sm bg-light border dropdown-toggle fw-medium text-black" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stock<i class="mdi mdi-chevron-down ms-1 fs-14"></i></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">In stock</a>
                            <a class="dropdown-item" href="#">Low stock</a>
                            <a class="dropdown-item" href="#">Out of stock</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-stock mb-0">

                        <thead>
                            <tr class="text-capitalize">
                                <th>Product Item</th>
                                <th>Product ID</th>
                                <th>Date Added</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>QTY</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Audio HD3</td>
                                <td class="text-muted">#PFR-1045</td>
                                <td class="text-muted">29 Mar, 2024</td>
                                <td class="text-muted">$1487</td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger fw-semibold fs-13">Out of Stock</span>
                                </td>
                                <td>46 Pics</td>
                            </tr>
                            <tr>
                                <td>Smartwatch</td>
                                <td class="text-muted">#PFR-1045</td>
                                <td class="text-muted">17 Dec, 2024</td>
                                <td class="text-muted">$1028</td>
                                <td>
                                    <span class="badge bg-warning-subtle text-warning fw-semibold fs-13">Low Stock</span>
                                </td>
                                <td>18 Pics</td>
                            </tr>
                            <tr>
                                <td>AirPods Max</td>
                                <td class="text-muted">#PFR-1045</td>
                                <td class="text-muted">15 Apr, 2024</td>
                                <td class="text-muted">$1487</td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger fw-semibold fs-13">Out of Stock</span>
                                </td>
                                <td>587 Pics</td>
                            </tr>
                            <tr>
                                <td>Women Pink Heels</td>
                                <td class="text-muted">#PFR-1045</td>
                                <td class="text-muted">13 Feb, 2024</td>
                                <td class="text-muted">$1487</td>
                                <td>
                                    <span class="badge bg-primary-subtle text-primary fw-semibold fs-13">In Stock</span>
                                </td>
                                <td>42 Pics</td>
                            </tr>
                            <tr>
                                <td>Pixel 8 Pro</td>
                                <td class="text-muted">#PFR-1045</td>
                                <td class="text-muted">22 July, 2024</td>
                                <td class="text-muted">$1487</td>
                                <td>
                                    <span class="badge bg-warning-subtle text-warning fw-semibold fs-13">Low Stock</span>
                                </td>
                                <td>784 Pics</td>
                            </tr>
                            <tr>
                                <td>HP Monitor</td>
                                <td class="text-muted">#PFR-1045</td>
                                <td class="text-muted">19 Dec, 2024</td>
                                <td class="text-muted">$1487</td>
                                <td>
                                    <span class="badge bg-primary-subtle text-primary fw-semibold fs-13">In Stock</span>
                                </td>
                                <td>78 Pics</td>
                            </tr>
                            
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products Stock -->
</div>


<div class="row">
    <!-- Start Recent Order -->
    <div class="col-md-12">
        <div class="card overflow-hidden mb-0">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title text-black mb-0">Recent Order</h5>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-traffic mb-0">

                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Created</th>
                                <th>Modified</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="text-muted">#3413</a>
                            </td>
                            <td class="d-flex align-items-center">
                                <img src="/images/users/user-12.jpg" class="avatar avatar-sm rounded-circle me-3" />
                                <div>
                                    <p class="mb-0 fw-medium fs-14">Richard Dom</p>
                                    <p class="text-muted fs-13 mb-0">richard@api.com</p>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">82</p>
                            </td>
                            <td>
                                <p class="mb-0">$480.00</p>
                            </td>
                            <td>
                                <p class="mb-0">August 09, 2023</p>
                            </td>
                            <td>
                                <p class="mb-0">August 18, 2023</p>
                            </td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary fw-semibold">Delivered</span>
                            </td>
                            <td>                                                       
                                <a aria-label="anchor" class="btn btn-sm bg-primary-subtle me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                    <i class="mdi mdi-pencil-outline fs-14 text-primary"></i>
                                </a>
                                <a aria-label="anchor" class="btn btn-sm bg-danger-subtle" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                    <i class="mdi mdi-delete fs-14 text-danger"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="text-muted">#4125</a>
                            </td>
                            <td class="d-flex align-items-center">
                                <img src="/images/users/user-11.jpg" class="avatar avatar-sm rounded-circle me-3" />
                                <div>
                                    <p class="mb-0 fw-medium fs-14">Randal Dare</p>
                                    <p class="text-muted fs-13 mb-0">randal@dotcom.com</p>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">93</p>
                            </td>
                            <td>
                                <p class="mb-0">$568.00</p>
                            </td>
                            <td>
                                <p class="mb-0">January 19, 2023</p>
                            </td>
                            <td>
                                <p class="mb-0">March 09, 2023</p>
                            </td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary fw-semibold">Delivered</span>
                            </td>
                            <td>                                                       
                                <a aria-label="anchor" class="btn btn-sm bg-primary-subtle me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                    <i class="mdi mdi-pencil-outline fs-14 text-primary"></i>
                                </a>
                                <a aria-label="anchor" class="btn btn-sm bg-danger-subtle" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                    <i class="mdi mdi-delete fs-14 text-danger"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="text-muted">#6532</a>
                            </td>
                            <td class="d-flex align-items-center">
                                <img src="/images/users/user-13.jpg" class="avatar avatar-sm rounded-circle me-3" />
                                <div>
                                    <p class="mb-0 fw-medium fs-14">Bickle Bob</p>
                                    <p class="text-muted fs-13 mb-0">bicklebob@dotcom.com</p>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">56</p>
                            </td>
                            <td>
                                <p class="mb-0">$398.00</p>
                            </td>
                            <td>
                                <p class="mb-0">April 25, 2023</p>
                            </td>
                            <td>
                                <p class="mb-0">June 21, 2023</p>
                            </td>
                            <td>
                                <span class="badge bg-danger-subtle text-danger fw-semibold">Cancelled</span>
                            </td>
                            <td>                                                       
                                <a aria-label="anchor" class="btn btn-sm bg-primary-subtle me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                    <i class="mdi mdi-pencil-outline fs-14 text-primary"></i>
                                </a>
                                <a aria-label="anchor" class="btn btn-sm bg-danger-subtle" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                    <i class="mdi mdi-delete fs-14 text-danger"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="text-muted">#7405</a>
                            </td>
                            <td class="d-flex align-items-center">
                                <img src="/images/users/user-14.jpg" class="avatar avatar-sm rounded-circle me-3" />
                                <div>
                                    <p class="mb-0 fw-medium fs-14">Emma Wilson</p>
                                    <p class="text-muted fs-13 mb-0">emmawilson@dotcom.com</p>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">68</p>
                            </td>
                            <td>
                                <p class="mb-0">$652.00</p>
                            </td>
                            <td>
                                <p class="mb-0">September 24, 2023</p>
                            </td>
                            <td>
                                <p class="mb-0">November 13, 2023</p>
                            </td>
                            <td>
                                <span class="badge bg-info-subtle text-info fw-semibold">Pending</span>
                            </td>
                            <td>                                                       
                                <a aria-label="anchor" class="btn btn-sm bg-primary-subtle me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                    <i class="mdi mdi-pencil-outline fs-14 text-primary"></i>
                                </a>
                                <a aria-label="anchor" class="btn btn-sm bg-danger-subtle" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                    <i class="mdi mdi-delete fs-14 text-danger"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="text-muted">#4526</a>
                            </td>
                            <td class="d-flex align-items-center">
                                <img src="/images/users/user-15.jpg" class="avatar avatar-sm rounded-circle me-3" />
                                <div>
                                    <p class="mb-0 fw-medium fs-14">Hugh Jackma</p>
                                    <p class="text-muted fs-13 mb-0">hughjackma@dotcom.com</p>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">52</p>
                            </td>
                            <td>
                                <p class="mb-0">$746.00</p>
                            </td>
                            <td>
                                <p class="mb-0">July 28, 2023</p>
                            </td>
                            <td>
                                <p class="mb-0">August 21, 2023</p>
                            </td>
                            <td>
                                <span class="badge bg-warning-subtle text-warning fw-semibold">Shipped</span>
                            </td>
                            <td>                                                       
                                <a aria-label="anchor" class="btn btn-sm bg-primary-subtle me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                    <i class="mdi mdi-pencil-outline fs-14 text-primary"></i>
                                </a>
                                <a aria-label="anchor" class="btn btn-sm bg-danger-subtle" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                    <i class="mdi mdi-delete fs-14 text-danger"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="text-muted">#1054</a>
                            </td>
                            <td class="d-flex align-items-center">
                                <img src="/images/users/user-12.jpg" class="avatar avatar-sm rounded-circle me-3" />
                                <div>
                                    <p class="mb-0 fw-medium fs-14">Angelina Hose</p>
                                    <p class="text-muted fs-13 mb-0">angelinahose@dotcom.com</p>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">45</p>
                            </td>
                            <td>
                                <p class="mb-0">$205.00</p>
                            </td>
                            <td>
                                <p class="mb-0">June 09, 2023</p>
                            </td>
                            <td>
                                <p class="mb-0">August 25, 2023</p>
                            </td>
                            <td>
                                <span class="badge bg-info-subtle text-info fw-semibold">Pending</span>
                            </td>
                            <td>                                                       
                                <a aria-label="anchor" class="btn btn-sm bg-primary-subtle me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                    <i class="mdi mdi-pencil-outline fs-14 text-primary"></i>
                                </a>
                                <a aria-label="anchor" class="btn btn-sm bg-danger-subtle" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                    <i class="mdi mdi-delete fs-14 text-danger"></i>
                                </a>
                            </td>
                        </tr>

                    </table>
                </div>    
            </div>

            <div class="card-footer py-0 border-top">
                <div class="row align-items-center">
                    <div class="col-sm">
                        <div class="text-block text-center text-sm-start">
                            <span class="fw-medium">1 of 3</span>
                        </div>
                    </div>
                    <div class="col-sm-auto mt-3 mt-sm-0">
                        <div class="pagination gap-2 justify-content-center py-3 ps-0 pe-3">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled"> 
                                    <a class="page-link me-2 rounded-2" href="javascript:void(0);"> Prev </a> 
                                </li>
                                <li class="page-item active"> 
                                    <a class="page-link rounded-2 me-2" href="#" data-i="1" data-page="5">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link me-2 rounded-2" href="#" data-i="2" data-page="5">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link text-primary rounded-2" href="javascript:void(0);"> next </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Recent Order -->
</div>

</div> <!-- container-fluid -->

@endsection

@section('script-bottom')
<script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
@vite(['resources/js/pages/ecommerce-dashboard.init.js'])
@endsection