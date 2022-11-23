@extends('web-side.setup.master')

@section('content')
    <section class="header-banner">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide gx-0 gy-0" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('public/web-assets/img/slider-img/slider1.jpeg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('public/web-assets/img/slider-img/slider2.jpeg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('public/web-assets/img/slider-img/slider3.jpeg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('public/web-assets/img/slider-img/slider4.jpeg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('public/web-assets/img/slider-img/slider5.jpeg') }}" class="d-block w-100"
                                alt="...">

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section mt-5">
        <div class="container">

            <div class="row">
                <h1 class="text-center mb-5">Our <span class="color-a">Projects</span></h1>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-5">
                    <h5 class="fw-bold">AL NOOR ORCHARD HOUSING SCHEME - OVERVIEW</h5>
                    <p class="mt-3" style="text-align: justify;">Al Noor Orchard Housing Scheme, the LDA-approved
                        premium housing society in West Lahore from Al Jalil Developers. It&nbsp;is located at 3 km from
                        Faizpur Interchange M2 Motorway. This luxurious gated community offers everything you
                        would&nbsp;love to have in your future home. The project, which is&nbsp; one of its kind and is
                        going to connected to CPEC, is not only a great choice for living but also an ideal place for
                        all commercial activities. This lavish society, with its flag-ship block West Marina, offers 1
                        Kanal, 3,&nbsp;10&nbsp; and 5 Marla residecial plots on easy monthly installments.</p>
                    <button class="btn-present"><a href="contact.html" class="btn ">presentation</a></button>
                    <button class="btn-loc"><a href="contact.html" class="btn ">location</a></button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-5">
                    <img src="{{ asset('public/web-assets/img/banner/propert.jpeg') }}" class="property-img" alt=""
                        srcset="">

                </div>
            </div>

            <div class="row text-center">
                <h1 class=" mb-5">WHAT MAKES <span class="color-a">US UNIQUE</span></h1>
                <div class="col-md-4">
                    <img src="{{ asset('public/web-assets/img/comunity/GatedCommunity1.png') }}" alt=""
                        class="uniq_img" srcset="">
                    <p class="mt-3 img-p">
                        Posh City is a Gated Community. It is a concept of modern lifestyle to ensure safety and surety
                        of the residents in any housing society.
                    </p>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('public/web-assets/img/comunity/Serene Outdoor-01.png') }}" alt=""
                        class="uniq_img" srcset="">
                    <p class="mt-3 img-p">
                        The luxurious living in Posh City is surrounded by lush green parks and green belts all around
                        to get feel of pleasant nature.
                    </p>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('public/web-assets/img/comunity/Uitilites Supply-01.png') }}" alt=""
                        class="uniq_img" srcset="">
                    <p class="mt-3 img-p">
                        Posh City is ensuring the provision of utilities like 24/7 electricity, gas and water supply
                        along with modern sewage system & garbage collection at doorstep etc.
                    </p>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('public/web-assets/img/comunity/TREATMENT PLANT-01.png') }}" alt=""
                        class="uniq_img" srcset="">
                    <p class="mt-3 img-p">
                        To prevent the contamination and water and environment, the latest technology sewage treatment
                        plant has been installed in Posh City.
                    </p>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('public/web-assets/img/comunity/WATER-01.png') }}" alt="" class="uniq_img"
                        srcset="">
                    <p class="mt-3 img-p">
                        Posh City is making sure the purity to be delivered to the people. To supply pure water to the
                        residents, the German Technology plant has been installed.
                    </p>
                </div>


                <div class="col-md-4">
                    <img src="{{ asset('public/web-assets/img/comunity/COMMERCIAL-01.png') }}" alt=""
                        class="uniq_img" srcset="">
                    <p class="mt-3 img-p">
                        Posh City is going to be next commercial hub. The sky-high buildings in the business zone will
                        be creating immense business opportunities for the people; in and around the society.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-6 mb-5 mt-5">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('public/web-assets/img/project.jpg ') }}" class="img-fluid"
                                    alt="" srcset="">
                            </div>
                            <div class="carousel-item active">
                                <img src="{{ asset('public/web-assets/img/project1.jpg ') }}" class="img-fluid"
                                    alt="" srcset="">
                            </div>
                            <div class="carousel-item active">
                                <img src="{{ asset('public/web-assets/img/project3.jpg') }}" class="img-fluid"
                                    alt="" srcset="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-5">
                    <h4 class="text-center">Amenities & Facilities</h4>
                    <section>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/cycling.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/boating.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/fish aqurim.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/fountain.png ')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/gate house.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/high speed internet.png ')}}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/horse riding.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/masjid0.png ')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/survelliance.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/roads.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/vet clinic.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/solar street light.png ')}}" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/walkimng track.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/walled community.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/waterfall feature.png ')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="{{ asset('public/web-assets/img/icons/icons/wifi.png ')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </section>
                </div>
                <h1 class="text-center mt-3">THE LOCATION MAP</h1>
                <p class="text-center">Al Noor Orchard West Marina Cottages and Villas, Lahore-Jaranwala Road, Lahore,
                    Pakistan
                <div class="row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13608.35224620967!2d74.41738735000001!3d31.494263199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1665753179364!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </p>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 mb-5 mt-5">
                    <img src="{{ asset('public/web-assets/img/nexues logo.png') }}" class=" nexus" alt="">

                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-5">
                    <h1 class="text-center mt-5 mb-3 cont-us">FOR BOOKING & DETAILS</h1>
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
                                        class="form-control form-control-lg form-control-a" placeholder="Eamil"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <input name="subject" type="text"
                                        class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" name="message" cols="45" rows="4"
                                        placeholder="Leave a message!" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <button type="submit" class="btn btn-gold">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- <section class="pagination-section">
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
                    </section> -->

        </div>
    </section>
@endsection
