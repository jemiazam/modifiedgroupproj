
@extends('layout.main')

@section('content')


<div class="content " >
    <div class="container">

        <!-- Icon boxes (Features) -->
        <section class="container py-5 mb-2 mb-md-4 mb-lg-5">
            <div class="row row-cols-1 row-cols-md-3 g-4 pt-2 pt-md-4 pb-lg-2">
                @foreach ($clubs as $club)
                    <!-- Item -->
                    <div class="col">
                        <div class="card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary h-100">
                            <div class="d-grid">
                                <img src="{{ $club->picture }}" width="168" alt="Doctor icon" class="rounded-pill p-3">
                                <div class="text-center"><span class="text-warning"><i class='bx bxs-star' ></i> {{ $club->rating }}</span></div>
                            </div>
                        <div class="card-body text-center text-sm-start text-md-center text-xxl-start pb-3 pb-sm-2 pb-md-3 pb-xxl-2">
                            <h3 class="h5 mb-2 mt-n4 mt-sm-0 mt-md-n4 mt-xxl-0">{{ $club->name }}</h3>
                            <p class="fs-sm mb-1">{{ $club->club_description }}</p>
                            
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

</div>

  @endsection

