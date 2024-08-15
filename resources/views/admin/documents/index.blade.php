@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Documents</h1>
    <a href="{{ route('documents.create') }}" class="btn btn-primary mb-3">Create Document</a>

    @if($documents->isEmpty())
        <p>No documents available.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Classification</th>
                    <th>File</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documents as $document)
                <tr>
                    <td>{{ $document->title }}</td>
                    <td>{{ $document->classification->name }}</td>
                    <td>
                        @if($document->file_path)
                            <a href="{{ Storage::url($document->file_path) }}" target="_blank">Download</a>
                        @else
                            No file
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
