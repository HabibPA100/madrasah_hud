@extends('frontend.layout.main')
@section('main-contant')

    <!-- 403 Start -->
    <div class="text-center">
        <h1 class="text-6xl font-bold text-danger">403</h1>
        <p class="text-2xl font-semibold text-secondary">ACCESS DENIED!</p>
        <p class="text-lg text-muted mt-2">You are trying to access this page without permission.</p>
        <p class="text-lg text-muted mt-1">If you do this again, your IP will be permanently blocked!</p>
        <a href="{{ url('/') }}" class="mt-4 btn btn-dark text-white rounded-pill">Go Home</a>
    </div>
    <!-- 403 End -->
        
@endsection
   