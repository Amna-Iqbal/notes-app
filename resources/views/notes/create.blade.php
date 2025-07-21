@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Card with a pastel background -->
            <div class="card shadow-sm" style="background: #c8d9f0;">
                <div class="card-header text-center" style="background: #324e66; color: #fff;">
                    <h1>Add Note</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('notes.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('notes.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
