{{-- resources/views/admin/classifications/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Create Classification</h1>
    <form action="{{ route('classifications.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mt-3">
            <label for="parent_id">Parent Classification</label>
            <select class="form-control" id="parent_id" name="parent_id">
                <option value="">None</option>
                @foreach($classifications as $classification)
                    @include('admin.classifications._classification_option', ['classification' => $classification, 'level' => 0])
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create</button>
    </form>
</div>
@endsection
