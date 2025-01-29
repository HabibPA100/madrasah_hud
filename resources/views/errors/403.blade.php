@extends('frontend.layout.main')
@section('main-contant')

    <!-- 403 Start -->
    <div class="text-center">
        <img src="{{ asset('frontend/img/warning.png') }}" alt="Warning" width="150px" height="150px">
        <p class="text-center text-black">ACCESS DENIED!</p>
        <p class="font-bold text-center text-danger" style="font-size: 12rem">403</p>
        <p class="text-center fs-1 mt-2">You are trying to access this page without permission.</p>
        <p class="text-center fs-1 mt-1">If you do this again, your IP will be permanently blocked!</p>
        <a href="{{ url('/') }}" class="mt-4 btn btn-dark text-white rounded-pill">Go Home</a>
    </div>
    <!-- 403 End -->
        
@endsection
   