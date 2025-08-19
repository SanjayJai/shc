@extends('frontend.layouts.app')

@section('title', 'Services')

@push('styles')
<style>
    .custom-service-card {
        cursor: pointer;
        border: 1px solid #e0e0e0;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06);
    }

    .custom-service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        border-color: #ff9800;
    }

    .custom-service-card .card-title {
        font-weight: 600;
        color: #333;
    }

    .custom-service-card .card-text {
        font-size: 0.95rem;
        line-height: 1.6;
        color: #6c757d;
    }

    .custom-service-card i {
        transition: transform 0.3s ease;
    }

    .custom-service-card:hover i {
        transform: rotate(10deg) scale(1.1);
    }
</style>
@endpush

@section('content')
    <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Service</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->

    <div class="service-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-item-wrapper space__bottom--m40">
                        <div class="row">
                            @php
                                $icons = [
                                    'flaticon-002-welding',
                                    'flaticon-004-walkie-talkie',
                                    'flaticon-015-cart',
                                    'flaticon-010-tank-1',
                                    'flaticon-048-chemical',
                                    'flaticon-037-forklift',
                                ];
                            @endphp

                            @forelse($services as $index => $service)
                                <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
                                    <div class="card h-100 border rounded-4 w-100 service-card-hover custom-service-card">
                                        <div class="position-relative">
                                            <img width="370" height="247"
                                                 src="{{ asset('storage/' . $service->image) }}"
                                                 class="card-img-top rounded-top-4"
                                                 alt="{{ $service->title }}" />
                                            <span class="position-absolute top-0 end-0 m-3 bg-white rounded-circle p-2 shadow">
                                                <i class="{{ $icons[$index % count($icons)] }} fs-3" style="color: #ff9800;"></i>
                                            </span>
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title mb-2">{{ $service->title }}</h5>
                                            <p class="card-text flex-grow-1 mb-0">
                                                {{ \Illuminate\Support\Str::limit($service->description, 100) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center">
                                    <p>No services available.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================  newsletter area ====================-->
    <div class="newsletter-area newsletter-area-bg bg-img" data-bg="assets/img/backgrounds/newsletter-bg.webp">
        <x-newsletter />
    </div>
    <!--====================  End of newsletter area  ====================-->

    <!--====================  scroll top ====================-->
    <button class="scroll-top" id="scroll-top">
        <i class="fa fa-angle-up"></i>
    </button>
@endsection
