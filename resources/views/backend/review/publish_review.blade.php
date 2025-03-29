@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Publish Review</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Publish Review</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">

			</div>
		</div>
	</div>
	<!--end breadcrumb-->

	<hr />
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>STT</th>
							<th>Image </th>
							<th>Product </th>
							<th>User </th>
							<th>Comment </th>
							<th>Rating </th>
							<th>Status </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($reviews as $key => $review)
						<tr>
							<td> {{ $key + 1 }} </td>
							<td> <img src="{{ asset("upload/products/thambnail/" . $review->product->product_thumbnail) }}" style="width: 40px; height:40px;"></td>
							<td>{{ $review->product->product_name }}</td>
							<td>{{ $review->user->username}}</td>
							<td>{{ $review->comment }}</td>

							<td>
								@for ($i = 1; $i < $review->rating; $i++)
									<i class="bx bxs-star text-warning"></i>
									@endfor
							</td>
							<td>
								<span class="badge rounded-pill bg-warning">Publish</span>
							</td>

							<td>
								<a href="{{ route('review.delete', $review->id) }}" class="btn btn-danger" id="delete">Delete</a>
							</td>
						</tr>
						@endforeach




					</tbody>
					<tfoot>
						<tr>
							<th>Sl</th>
							<th>Image </th>
							<th>Product </th>
							<th>User </th>
							<th>Comment </th>
							<th>Rating </th>
							<th>Status </th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>



</div>





@endsection