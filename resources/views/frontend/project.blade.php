@extends('frontend.layouts.app')
@section('title', 'Project')
@section('content')

<!--====================  Lightbox2 CSS  ====================-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />

<!--====================  breadcrumb area ====================-->
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.webp">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-breadcrumb-content text-center">
                    <h1>Gallery</h1>
                    <ul class="page-breadcrumb-links">
                        <li><a href="{{ route('Home') }}">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->

<!--====================  project area ====================-->
<div class="project-section space__bottom--r120">
    <div class="container">
            <div class="row">
        @forelse ($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <a href="{{ asset('storage/' . $project->image) }}" 
                       data-lightbox="project-gallery"
                       data-title="{{ $project->title }}">
                        <img src="{{ asset('storage/' . $project->image) }}" 
                             class="card-img-top"
                             alt="{{ $project->title }}"
                             style="object-fit: cover; aspect-ratio: 4/3;">
                    </a>
                    <div class="card-body text-center">
                        <h6 class="mb-0">{{ $project->title }}</h6>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <h5>No gallery items available yet.</h5>
            </div>
        @endforelse
    </div>


        {{-- Pagination --}}
        @if ($projects->total() > 6)
            <div class="row space__top--50">
                <div class="col">
                    <ul class="page-pagination">
                        {{-- Previous --}}
                        @if (!$projects->onFirstPage())
                            <li><a href="{{ $projects->previousPageUrl() }}"><i class="fa fa-angle-left"></i> Prev</a></li>
                        @endif

                        {{-- Page Numbers --}}
                        @foreach ($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)
                            <li class="{{ $projects->currentPage() === $page ? 'active' : '' }}">
                                <a href="{{ $url }}">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a>
                            </li>
                        @endforeach

                        {{-- Next --}}
                        @if ($projects->hasMorePages())
                            <li><a href="{{ $projects->nextPageUrl() }}"><i class="fa fa-angle-right"></i> Next</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        @endif
    </div>
</div>
<!--====================  End of project area  ====================-->

<!--====================  newsletter area ====================-->
<div class="newsletter-area newsletter-area-bg bg-img" data-bg="assets/img/backgrounds/newsletter-bg.webp">
    <x-newsletter />
</div>
<!--====================  End of newsletter area  ====================-->

<!--====================  scroll top ====================-->
<button class="scroll-top" id="scroll-top">
    <i class="fa fa-angle-up"></i>
</button>
<!--====================  End of scroll top  ====================-->

<!--====================  Lightbox2 JS  ====================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<script>
    lightbox.option({
        'resizeDuration': 100, // make this lower for faster animation (default is 200)
        'fadeDuration': 100,   // optional: also control fade speed of overlay
        'imageFadeDuration': 100, // optional: image fade-in speed
        'wrapAround': true,
        'albumLabel': "Image %1 of %2"
    })
</script>

@endsection
