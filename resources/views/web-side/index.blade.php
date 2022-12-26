@extends('web-side.setup.master')

@section('content')
<section class="header-banner">
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide gx-0 gy-0" data-bs-ride="false">
                <div class="carousel-inner">
                    
                    @foreach ($data['sliders'] as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                        <img src="{{ asset('storage/app/public/uploads/home/slider/' . $slider->image) }}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="social d-flex flex-column" id="social-icon">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-telephone"></i></a>
        </div>
    </div>
</section>

<section class="property-section">
    <div class="container mt-5 mb-5">

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('public/web-assets/img/banner/home.jpg') }}" class="home-img" alt="">
            </div>
            <div class="col-md-6 mt-4">
                <h1 class="color-a">Nexus Properties</h1>
                <p class="mt-lg-5">The A Team scaled to the main dealer level in just two months
                    and became the second-highest seller of Al-Noor Orchard
                    Housing Scheme Lahore with the biggest contribution in
                    Block D. We won a Toyota Corolla Grande Car at the 2021 Dealers Summit and Dealership for Al
                    Aziz Residencia. The company achieved the milestone of launching Pakistan’s first Property
                    Trading Hub in DHA in February 2021.The A Team scaled to
                    the main dealer level in just two months and became the
                    second-highest seller of Al-Noor Orchard Housing Scheme
                    Lahore with the biggest contribution in Block D. We won a
                    Toyota Corolla Grande Car at the 2021 Dealers Summit and
                    Dealership for Al Aziz Residencia. The company achieved the
                    milestone of launching Pakistan’s first Property Trading Hub
                    in DHA in February 2021.</p>
                <button type="button" class="btn btn-gold">Details</button>
            </div>
        </div>
    </div>
</section>

    <section class="bg-c">
        <div class="container">
            <div class="row" id="box-row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="text-center col-md-3">
                            <div class="card-1 mt- our-mission" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                <h5>Company Tagline</h5>
                                <p class="p">Where Dreams <br> Come Home</p>
                            </div>
                        </div>
                        <div class="text-center col-md-3">
                            <div class="card-1 mt- our-mission" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                <h5>Our Goals</h5>
                                <p class="p">Our mission is to be serve the community through the best real estate
                                    service</p>
                            </div>
                        </div>
                        <div class="text-center col-md-3">
                            <div class="card-1 mt- our-mission" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                <h5>Our Mission</h5>
                                <p class="p">Our mission is to be
                                    serve the community through the best
                                    real estate service</p>
                            </div>
                        </div>
                        <div class="text-center col-md-3">
                            <div class="card-1 mt- our-mission" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                <h5 class="p">Our Vision</h5>
                                <p>Our mission is to be serve the community through the best real estate service</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="property-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-5">
                <h1>We Deal in</h1>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="resbtn">
                    <button type="button" class="btn btn-default btn-property">Search Property</button>
                    <button type="button" class="btn btn-default btn-pro">Select Project</button>
                </div>
            </div>
        </div>
        @if (count($data['projects']) > 0)
        <div class="row mt-5">
            @foreach ($data['projects'] as $project)
            <div class="col-md-6 col-lg-4 image mt-3">
                <div class="card border-0 hover">
                    <div class="card-body" data-aos="zoom-in">
                        <div class="deal_img">
                            <img src="{{ asset('storage/app/public/uploads/projects/' . $project->p_image ?? '') }}" class=" project_img" alt="">
                            <div class="overlay-on-img">
                                <div class="text-property">
                                    <P class="meet">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur reiciendis corrupti repellendus voluptatum, enim ipsam fugiat ducimus nisi odio, rerum tenetur praesentium? Praesentium cum doloribus itaque nostrum quas laudantium ab id quae magnam, vel quo enim consectetur quia eos eaque labore ducimus neque amet quaerat libero tempora. Dicta, voluptatem veniam.</P>
                                </div>
                            </div>
                        </div>
                        
                        <h6 class="mt-3">{{ $project->name }}</h6>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-6 col-lg-6 image mb-3">
                    <img src="{{ asset('public/web-assets/img/banner/img4.jpeg ') }}" class="img-fluid" alt="">
            <div class="overlay">
                <div class="text">
                    <P class="meet">Al Noor Orchard Housing Scheme</P>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-lg-6 image mb-3">
            <img src="{{ asset('public/web-assets/img/banner/img4.jpeg ') }}" class="img-fluid" alt="">
            <div class="overlay">
                <div class="text">
                    <P class="meet">Al Noor Orchard Housing Scheme</P>

                </div>

            </div>
        </div>
        <div class="col-md-6 col-lg-6 image mb-3">
            <img src="{{ asset('public/web-assets/img/banner/img4.jpeg ') }}" class="img-fluid" alt="">
            <div class="overlay">
                <div class="text">
                    <P class="meet">Al Noor Orchard Housing Scheme</P>
                </div>
            </div>
        </div> --}}
    </div>
    @endif

    </div>
</section>
<section class="know-section bg-c">
    <div class="container">




        <div id="testimonial-carousel" class="swiper">

            <div class="swiper-wrapper">

                <div class="carousel-item-b swiper-slide">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="con">
                                <div class="">
                                    <h1 class="text-white text-center">Did You Know?</h1>
                                    <h3 class="text-white text-start investing">“</h3>
                                    <p class="text-white text-center investing">90% of the millionaires become so by
                                        investing in
                                        Real
                                        Estate
                                    </p>
                                    <h3 class="text-white text-end investing">“</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 testimonial_img">
                            <img src="{{ asset('public/web-assets/img/banner/propert.jpeg ') }}" class="property-img" alt="" srcset="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item-b swiper-slide">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="con">
                                <div class="">
                                    <h1 class="text-white text-center">Did You Know?</h1>
                                    <h3 class="text-white text-start investing">“</h3>
                                    <p class="text-white text-center investing">Ninety percent of all millionaires
                                        become so through owning real estate.
                                    </p>
                                    <h3 class="text-white text-end investing">“</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 testimonial_img">
                            <img src="{{ asset('public/web-assets/img/banner/busines.png') }}" class="property-img" alt="" srcset="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item-b swiper-slide">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="con">
                                <div class="">
                                    <h1 class="text-white text-center">Did You Know?</h1>
                                    <h3 class="text-white text-start investing">“</h3>
                                    <p class="text-white text-center investing">Buying real estate is not only the best
                                        way, the quickest way, the safest way, but the only way to become wealthy.
                                    </p>
                                    <h3 class="text-white text-end investing">“</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 testimonial_img">
                            <img src="{{ asset('public/web-assets/img/banner/busines2.png') }}" class="property-img" alt="" srcset="">
                        </div>
                    </div>
                </div>

            </div>

        </div>



    </div>
</section>


<section class="our-services mt-5 ">
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-5">OUR SERVICES</h1>
            <div class="col-md-6 col-lg-3 col-12 text-center service-icons" data-aos="fade-right">
                <p class="m-auto service-icon"><i class="bi bi-house-fill"></i></i></p>
                <h3 class="mt-3 service-icon">Investment Consultancy</h3>
            </div>
            <div class="col-md-6 col-lg-3 col-12 text-center " id="service-icons1" data-aos="fade-right">
                <p class="m-auto service-icon"><i class="bi bi-bar-chart-fill"></i></p>
                <h3 class="mt-3 service-icon">Property Management</h3>
            </div>

            <div class="col-md-6 col-lg-3 col-12 text-center " id="service-icons2" data-aos="fade-left">
                <p class="m-auto service-icon"><i class="bi bi-building"></i></p>
                <h3 class="mt-3 service-icon real">Sale / Purchase</h3>
            </div>
            <div class="col-md-6 col-lg-3 col-12 text-center " id="service-icons3" data-aos="fade-left">
                <p class="m-auto service-icon"><i class="bi bi-search"></i></p>
                <h3 class="mt-3 service-icon real">Realtor’s Growth</h3>
            </div>
        </div>
        <!-- <h1 class="text-center mb-5">OUR SERViCES</h1>
                                                                                                <div class="row">

                                                                                                </div> -->
    </div>
</section>

<section class="testimonial-section bg-c">
    <div class="container">
        <div class="row pb-5">
            <h1 class="color-a text-center pt-4 " id="cosultant1">WHAT OUR CLIENT’S SAY ABOUT US</h1>
            <div id="property-carousel" class="swiper">
                <div class="swiper-wrapper">
                    <div class="col-sm-12 col-md-6 col-lg-4 pt-5 mt-5  carousel-item-b swiper-slide">
                        <div class="card">
                            <div class="user text-center">
                                <div class="profile">
                                    <img src="{{ asset('public/web-assets/img/pexels-filip-wouters-2276589.jpg ') }}" class="rounded-circle" width="80">
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <h4 class="mb-0">SAIF UD DIN</h4>
                                <p>What an experience working with Nexus Properties. Extremely Professional and
                                    cooperating.Looking forward to hire them again soon!
                                </p>
                                <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 pt-5 mt-5  carousel-item-b swiper-slide">
                        <div class="card">
                            <div class="user text-center">
                                <div class="profile">
                                    <img src="{{ asset('public/web-assets/img/pexels-filip-wouters-2276589.jpg ') }}" class="rounded-circle" width="80">
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <h4 class="mb-0">SAIF UD DIN</h4>
                                <p>What an experience working with Nexus Properties. Extremely Professional and
                                    cooperating.Looking forward to hire them again soon!
                                </p>
                                <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 pt-5 mt-5  carousel-item-b swiper-slide">
                        <div class="card">
                            <div class="user text-center">
                                <div class="profile">
                                    <img src="{{ asset('public/web-assets/img/pexels-filip-wouters-2276589.jpg ') }}" class="rounded-circle" width="80">
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <h4 class="mb-0">SAIF UD DIN</h4>
                                <p>What an experience working with Nexus Properties. Extremely Professional and
                                    cooperating.Looking forward to hire them again soon!
                                </p>
                                <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="propery-carousel-pagination carousel-pagination"></div>
            </div>

        </div>
    </div>

</section>

<section class="get-in-touch-section mt-5 mb-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="cosultant" data-aos="fade-right">LOOKING FOR AN <br> INVESTMENT CONSULTANT?</h1>
            </div>
            <div class="col-md-6 mt-4 text-center" data-aos="fade-left">
                <a href="{{ url('contact') }}" class="btn btn-default btn-get px-4 py-2"><span>GET IN TOUCH</span></a href="{{ url('contact') }}">
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        AOS.init();
    });
</script>
@endsection