@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Active Vendor Details</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Active Vendor Details</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <form method="post" action="{{ route('vendor.updateStatus', $vendor->id) }}" enctype="multipart/form-data"> --}}
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">User Name</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="username" value="{{ $vendor->username}}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Shop Name</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="name" class="form-control" value="{{ $vendor->shop_name }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Email</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" name="email" class="form-control" value="{{ $vendor->email }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Phone</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="phone" class="form-control" value="{{ $vendor->phone }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Address</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="address" class="form-control" value="{{ $vendor->address }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Join</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="vendor_join" class="form-control" value="{{ $vendor->vendor_join }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Info</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <textarea name="vendor_short_info" class="form-control" rows="3" readonly>{{ $vendor->vendor_short_info }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Photo</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <img id="showImage" src="{{ asset($vendor->photo) }}" alt="Vendor" style="width:100px; height: 100px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- <button type="submit" class="btn btn-danger px-4">
                                            {{ $vendor->status == 'Active' ? 'Inactive Vendor' : 'Active Vendor' }}
                                        </button> --}}
                                        <form action="{{ route('vendor.updateStatus', $vendor->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-warning">Inactive</button>
                                        </form>
                                    </div>
                                </div>

                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
