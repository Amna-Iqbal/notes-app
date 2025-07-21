@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Styled Card -->
            <div class="card shadow-sm" style="background: #c8d9f0;">
                <div class="card-header text-center" style="background: #324e66; color: #fff;">
                    <h1>Welcome back, {{ Auth::user()->name }}!</h1>
                </div>
                <div class="card-body text-center">
                    <h5>You have <strong>{{ $notesCount }}</strong> notes saved.</h5>
                    
                    @if ($lastNote)
                        <p>Your last note was updated on <strong>{{ $lastNote->updated_at->format('F j, Y') }}</strong>.</p>
                    @else
                        <p>Start by creating your first note!</p>
                    @endif
                    
                    <div class="d-flex justify-content-center mt-3">
                        <a href="{{ route('notes.index') }}" class="btn btn-primary mx-2" >View Your Notes</a>
                        <a href="{{ route('notes.create') }}" class="btn btn-success mx-2">Create New Note</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
