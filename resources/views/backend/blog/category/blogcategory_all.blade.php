@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Blog Category</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Blog Category</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
<a href="{{route('add.blog.category')}}" class="btn btn-primary">Add Blog Category</a>
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
	<th>Blog Category Name </th>
	<th>Action</th>
</tr>
</thead>
<tbody>

    @foreach($categories as $key => $category)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $category->category_name }}</td>
        <td>
            <a href="{{ route('edit.blog.category', $category->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('delete.blog.category', $category->id) }}" class="btn btn-danger" id="delete">Delete</a>
        </td>
    </tr>
    @endforeach

{{-- <tr>
	<td> 1 </td>
	<td>Baking material</td>

	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td>
</tr>

<tr>
	<td> 2 </td>
	<td>Fresh Fruit</td>

	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td>
</tr>

<tr>
	<td> 3 </td>
	<td>Pet Foods</td>

	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td>
</tr>

<tr>
	<td> 4 </td>
	<td>Clothing</td>

	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td>
</tr> --}}


</tbody>
<tfoot>
<tr>
	<th>Sl</th>
	<th>Blog Category Name </th>
	<th>Action</th>
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>



</div>



@endsection
