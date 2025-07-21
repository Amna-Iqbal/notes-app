@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border" style="border-color: #324e66;">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h1" style="color: #324e66;">Your Notes</h1>
                <a href="{{ route('notes.create') }}" class="btn" style="background-color: #c8d9f0; color: #000; font-weight: 600;">
                    + Add Note
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                @foreach ($notes as $note)
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm" style="background-color: #fffacd; border-color: #d8bfd8;">
                            <div class="card-body">
                                <h2 class="h5 card-title">
                                    <a href="{{ route('notes.show', $note) }}" class="text-decoration-none" style="color: #000;">
                                        {{ $note->title }}
                                    </a>
                                </h2>
                                <p class="card-text text-muted">
                                    {{ Str::limit($note->content, 100) }}
                                </p>
                            </div>
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <a href="{{ route('notes.edit', $note) }}"  style="color:rgb(140, 190, 59);">
                                    ✏ Edit
                                </a>
                                <form action="{{ route('notes.destroy', $note) }}" method="POST" onsubmit="return confirm('Delete this note?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger p-0" style="text-decoration: none;">
                                        🗑 Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
