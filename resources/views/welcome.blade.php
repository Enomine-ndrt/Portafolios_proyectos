@extends('layouts.template')
@section('content')
@foreach ($proyectos as $proyecto)

<!-- Portfolio Item 1-->
<div class="mb-5 col-md-6 col-lg-4">
    <div class="mx-auto portfolio-item" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{ $proyecto->id }}">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="text-center text-white portfolio-item-caption-content"><i class="fas fa-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="{{ $proyecto->imagen }}" alt="..." />
    </div>
</div>

<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="border-0 modal-header"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="pb-5 text-center modal-body">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="mb-0 portfolio-modal-title text-secondary text-uppercase">{{ $proyecto->nombre }}</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="mb-5 rounded img-fluid" src="{{ $proyecto->imagen }}"  alt="..." />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">{{ $proyecto->descripcion }}</p>
                            <a href="{{ $proyecto->url}}"class="btn btn-primary"  data-bs-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Visitar proyecto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

