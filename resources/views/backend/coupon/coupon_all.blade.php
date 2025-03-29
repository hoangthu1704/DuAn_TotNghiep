@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Coupon </div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Coupon</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
<a href="{{route('add.coupon')}}" class="btn btn-primary">Add Coupon</a> 				 
			</div>
		</div>
	</div>
	<!--end breadcrumb-->
	 
	<hr/>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
<tr>
	<th>Sl</th>
	<th>Coupon Name </th>
	<th>Coupon Discount  </th>
	<th>Coupon Validity  </th>
	<th>Coupon Status  </th>
	<th>Action</th> 
</tr>
</thead>
<tbody>
    @foreach ($coupons as $key => $coupon)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $coupon->coupon_name }}</td>
        <td>{{ $coupon->coupon_discount }}%</td>
        <td>{{ \Carbon\Carbon::parse($coupon->coupon_validity)->format('D, d M Y') }}</td>
        <td>
            @if (\Carbon\Carbon::parse($coupon->coupon_validity)->isFuture())
                <span class="badge rounded-pill bg-success">Valid</span>
            @else
                <span class="badge rounded-pill bg-danger">Invalid</span>
            @endif
        </td>
        <td>
            <a href="{{ route('edit.coupon', $coupon->id) }}" class="btn btn-info">Edit</a>
			<form action="{{ route('delete.coupon', $coupon->id) }}" method="POST" style="display: inline;">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this coupon?')">Delete</button>
			</form>
			
        </td>
    </tr>
    @endforeach
</tbody>

<tfoot>
<tr>
	<th>Sl</th>
	<th>Coupon Name </th>
	<th>Coupon Discount  </th>
	<th>Coupon Validity  </th>
	<th>Coupon Status  </th>
	<th>Action</th> 
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>


	 
</div>




@endsection