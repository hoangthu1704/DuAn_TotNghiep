@extends('dashboard')
@section('user')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer">


<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> My Account
        </div>
    </div>
</div>
<div class="page-content pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="row">

                    <!-- // Start Col md 3 menu -->

                    <div class="col-md-3">
                        <div class="dashboard-menu">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link  " href="https://digi-poly.id.vn/dashboard"><i
                                            class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="https://digi-poly.id.vn/user/order/page"><i
                                            class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="https://digi-poly.id.vn/return/order/page"><i
                                            class="fi-rs-shopping-bag mr-10"></i>Return Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="https://digi-poly.id.vn/user/track/order"><i
                                            class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#address"><i class="fi-rs-marker mr-10"></i>My Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="https://digi-poly.id.vn/user/account/page"><i
                                            class="fi-rs-user mr-10"></i>Account details</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="https://digi-poly.id.vn/user/change/password"><i
                                            class="fi-rs-user mr-10"></i>Change Password</a>
                                </li>


                                <li class="nav-item" style="background:#ddd;">
                                    <a class="nav-link" href="https://digi-poly.id.vn/user/logout"><i
                                            class="fi-rs-sign-out mr-10"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- // End Col md 3 menu -->




                    <div class="col-md-9">
                        <div class="tab-content account dashboard-content pl-50">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="mb-0">Your Orders</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" style="background:#ddd;font-weight: 600;">
                                                <thead>
                                                    <tr>
                                                        <th>Sl</th>
                                                        <th>Date</th>
                                                        <th>Totaly</th>
                                                        <th>Payment</th>
                                                        <th>Invoice</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td> 26 February 2025</td>
                                                        <td> $602.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS94401997</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Deliverd</span>




                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/15"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/15"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td> 26 February 2025</td>
                                                        <td> $735.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS74570215</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-warning">Pending</span>


                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/14"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/14"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td> 26 February 2025</td>
                                                        <td> $980.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS51556421</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-warning">Pending</span>


                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/13"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/13"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td> 08 February 2025</td>
                                                        <td> $2260.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS21994871</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-warning">Pending</span>


                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/12"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/12"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td> 06 September 2022</td>
                                                        <td> $520.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS66716188</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-warning">Pending</span>


                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/11"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/11"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td> 06 September 2022</td>
                                                        <td> $320.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS95189836</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-warning">Pending</span>


                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/10"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/10"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td> 04 September 2022</td>
                                                        <td> $4800.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS32039722</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Deliverd</span>




                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/9"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/9"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td> 04 September 2022</td>
                                                        <td> $400.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS56179409</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Deliverd</span>




                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/8"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/8"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td> 29 August 2022</td>
                                                        <td> $320.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS82094998</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Deliverd</span>




                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/7"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/7"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td> 23 August 2022</td>
                                                        <td> $500.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS38157400</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Deliverd</span>




                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/6"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/6"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td> 23 August 2022</td>
                                                        <td> $640.00</td>
                                                        <td> Stripe</td>
                                                        <td> EOS62923939</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-dark">Processing</span>


                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/5"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/5"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td> 22 August 2022</td>
                                                        <td> $720.00</td>
                                                        <td> Cash On Delivery</td>
                                                        <td> EOS28106487</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Deliverd</span>




                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/4"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/4"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td> 22 August 2022</td>
                                                        <td> $960.00</td>
                                                        <td> Stripe</td>
                                                        <td> EOS32084004</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Deliverd</span>




                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/3"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/3"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td> 22 August 2022</td>
                                                        <td> $1520.00</td>
                                                        <td> Stripe</td>
                                                        <td> EOS85742385</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-warning">Pending</span>


                                                        </td>


                                                        <td><a href="https://digi-poly.id.vn/user/order_details/2"
                                                                class="btn-sm btn-success"><i class="fa fa-eye"></i>
                                                                View</a>
                                                            <a href="https://digi-poly.id.vn/user/invoice_download/2"
                                                                class="btn-sm btn-danger"><i class="fa fa-download"></i>
                                                                Invoice</a>
                                                        </td>
                                                    </tr>

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
        </div>
    </div>
</div>








@endsection