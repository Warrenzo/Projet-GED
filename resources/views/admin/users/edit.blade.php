{{-- resources/views/admin/users/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="form-text text-muted">Leave blank to keep current password.</small>
        </div>

        <div class="form-group mt-3">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="form-group mt-3">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role">
                <option value="user" @if($user->role == 'user') selected @endif>User</option>
                <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update User</button>
    </form>
</div>
@endsection
