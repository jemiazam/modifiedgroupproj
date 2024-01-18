@extends('layout.main')
@include('dashboard')

@section('content')

<div class="content">
    <div class="container">

        <!-- Club cards -->
        <div class="row">
            @foreach ($clubs as $club)
                <!-- Club card -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $club->picture }}" width="100" height="100" alt="Club image" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">{{ $club->name }}</h3>
                        <p class="card-text">{{ $club->club_description }}</p>
                        <div class="text-center">
                        <div class="btn-container">
                        <a href="#" class="btn btn-primary">Join</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>

@endsection
