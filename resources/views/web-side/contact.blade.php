@extends('web-side.setup.master')

@section('content')
    <section class="breadcrumb-section mb-5">
        <div class="container-fluid">
            <div class="row text-center">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <h1 class="color-a">Contact Us</h1>
                    <ol class="breadcrumb justify-content-center">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="card-section mb-5">
        <div class="container">
            <div class="row text-center">
                <h1 class="mb-5 cont">Contact US</h1>

                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="card get-in" id="new_card">
                        <div class="card-body">
                            <div class="con">
                                <div>
                                    <h4 class="card-title title-cont">GET IN TOUCH</h4>
                                    <span class="card-text fw-bold mb-2">+92 308 8555508</span>
                                    <h6 class="card-text mt-0"><a href="mailto:demo@gmail.com">demo@gmail.com</a></h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="card get-in">
                        <div class="card-body">
                            <div class="con">
                                <div>
                                    <h4 class="card-title title-cont">CONTACT NUMBER</h4>
                                    <p class="card-text mt-4">
                                    <h6 class="fw-bold c-txt" style="font-size:14px ;">3KM FAiZPUR iNTERCHANGE MOTORWAY
                                        M2 MAiN SHARAQPUR ROAD LAHORE.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="card get-in">
                        <div class="card-body">
                            <div class="con">
                                <div>
                                    <h4 class="card-title title-cont">WORKING HOURS</h4>
                                    <h6 class="card-text mb-2 fw-bold">10:00 AM</h6>
                                    <h6 class="card-text mt-0 fw-bold">07:00 PM</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="mt-5"> <span class="color-hire">HIRE AN INVESTMENT</span>
                        <p class="color-invest"> CONSULTANT NOW!</p>
                    </h1>
                    <p class="pt-0 mt-0" style="font-size:15px;">
                        Are you looking get in touch with an investment
                        consultant?<br> Nexus Properties provides you a free
                        of cost session to help <br> you consult with the best
                        agents available. Please fill your<br> information details
                        to help us get in touch with you</p>
                    <span><i class="bi bi-dot dots-icon"></i></span>
                    <span><i class="bi bi-dot dots-icon"></i></span>
                    <span><i class="bi bi-dot dots-icon"></i></span>

                </div>
                <div class=" col-sm-12 col-md-5">
                    <div class="form-contact">
                        <h1 class="text-center mb-2 cont-us">Contact Us</h1>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{ url('contact-mail') }}" method="post" role="form" class="validation-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="name"
                                            class="form-control form-control-lg form-control-a" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input name="email" type="email"
                                            class="form-control form-control-lg form-control-a" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input name="subject" type="text"
                                            class="form-control form-control-lg form-control-a" placeholder="Subject"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" name="message" cols="45" rows="4"
                                            placeholder="Leave a message!" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <button type="submit" class="btn btn-gold">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
