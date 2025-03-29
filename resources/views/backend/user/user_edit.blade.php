@extends('admin.admin_dashboard')
@section('admin')

    <div class="container">
        <h2>Edit User</h2>
        <form action="{{ route('update.users', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="phone" name="phone" class="form-control" value="{{ $user->phone }}" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>
            <div class="mb-3">
                <label>Role</label>
                <select name="role" class="form-control">
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="vendor" {{ $user->role == 'vendor' ? 'selected' : '' }}>Vendor</option>
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control">
                @if ($user->photo)
                    <img src="{{ asset('upload/user_images/' . $user->photo) }}" alt="User Photo" width="80">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection