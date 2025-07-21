@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Card with pastel background -->
            <div class="card shadow-sm" style="background: #c8d9f0;">
                <div class="card-header text-center" style="background: #324e66; color: #fff;">
                    <h1 class="h4 mb-0">{{ $note->title }}</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $note->content }}</p>
                </div>
                <div class="card-footer bg-transparent d-flex justify-content-between">
                    <div>
                        <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this note?')">
                                Delete
                            </button>
                        </form>
                    </div>
                    <a href="{{ route('notes.index') }}" class="btn btn-secondary btn-sm">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
