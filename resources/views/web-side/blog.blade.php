@extends('web-side.setup.master')

@section('content')
    <section class="breadcrumb-section mb-5">
        <div class="container-fluid">
            <div class="row text-center">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <h1 class="color-a">BLOG</h1>
                    <ol class="breadcrumb justify-content-center">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <h1 class="text-center mb-5">Our <span class="color-a">Blog</span></h1>

                @if (count($data['blogs']) > 0)
                @foreach ($data['blogs'] as $blog)
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="card border-0" style="width: 100%;">
                        <div class="image">
                            <img src="{{ asset('public/web-assets/img/NEXUS_BLOG.jpeg') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <h3 class="card-title b-crd-t">{{ $blog->title }}
                            </h3>
                            <p class="card-text">{{ $blog->description }}</p>
                            <a href="blog-details.html" class="btn btn-gold">More Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
               
                @endif

               

                <section class="pagination-section">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link me-2" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item me-2"><a class="page-link" href="#">1</a></li>
                            <li class="page-item me-2"><a class="page-link" href="#">2</a></li>
                            <li class="page-item me-2"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
    </section>
@endsection
