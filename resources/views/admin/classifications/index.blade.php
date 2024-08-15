{{-- resources/views/admin/classifications/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Classifications</h1>
    <a href="{{ route('classifications.create') }}" class="btn btn-primary mb-3">Create Classification</a>
    
    @if($classifications->isEmpty())
        <p>No classifications available.</p>
    @else
        <ul class="list-group">
            @foreach($classifications as $classification)
                {{-- Appel du partial pour afficher chaque classification et ses enfants --}}
                @include('admin.classifications._classification_row', ['classification' => $classification])
            @endforeach
        </ul>
    @endif
</div>
@endsection
