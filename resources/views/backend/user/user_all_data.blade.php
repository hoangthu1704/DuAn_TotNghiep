@extends('admin.admin_dashboard')
@section('admin')

	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">All User Data </div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">All User Data</li>
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
								<th>Sl</th>
								<th>Image </th>
								<th>Name </th>
								<th>Email </th>
								<th>Phone </th>
								<th>Status </th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if($users->isNotEmpty())
								@foreach ($users as $user)
									<tr>
										<td> {{ $user->id }} </td>
										<td>
											@if($user->photo)
												<img src="{{ asset('upload/user_images/' . $user->photo) }}" alt="Admin"
													class="rounded-circle p-1 bg-primary" width="60" height="60">
											@else
												No Image
											@endif
										</td>
										<td> {{ $user->name }} </td>
										<td> {{ $user->email }} </td>
										<td>
											@if($user->phone)
												{{ $user->phone }}
											@else
												No Phone
											@endif

										</td>

										<td>
											@if ($user->status === 'active')
												<span class="badge badge-pill bg-success">Active</span>
											@else
												<span class="badge badge-pill bg-danger">Inactive</span>
											@endif
										</td>

										<td>
											<a href="{{ route('edit.users', $user->id) }}" class="btn btn-info">Edit</a>
											<a href="{{ route('delete.users', $user->id) }}" class="btn btn-danger"
												id="delete">Delete</a>
										</td>
									</tr>
								@endforeach
							@else
								<tr>
									<td colspan="5" class="text-center">Không có user nào!</td>
								</tr>
							@endif



							{{-- <tr>
								<td> 2 </td>
								<td> <img src="https://digi-poly.id.vn/upload/no_image.jpg" alt="Admin"
										class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
								<td> Khan </td>
								<td> khan@gmail.com </td>
								<td> </td>

								<td>
									<span class="badge badge-pill bg-danger"> 1 second ago </span>

								</td>

								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger" id="delete">Delete</a>

								</td>
							</tr>

							<tr>
								<td> 3 </td>
								<td> <img
										src="https://digi-poly.id.vn/upload/user_images/2022082912100bfc3c5b20c439c4972383592e1c26bc.jpg"
										alt="Admin" class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
								<td> kazi </td>
								<td> kazi@gmail.com </td>
								<td> 43343434 </td>

								<td>
									<span class="badge badge-pill bg-danger"> 2 years ago </span>

								</td>

								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger" id="delete">Delete</a>

								</td>
							</tr>

							<tr>
								<td> 4 </td>
								<td> <img src="https://digi-poly.id.vn/upload/user_images/202207242133images (1).png"
										alt="Admin" class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
								<td> User </td>
								<td> user@gmail.com </td>
								<td> 4343434111 </td>

								<td>
									<span class="badge badge-pill bg-danger"> 6 days ago </span>

								</td>

								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger" id="delete">Delete</a>

								</td>
							</tr> --}}


						</tbody>
						<tfoot>
							<tr>
								<th>Sl</th>
								<th>Image </th>
								<th>Name </th>
								<th>Email </th>
								<th>Phone </th>
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