@extends('web-side.setup.master')

@section('content')
<section class="breadcrumb-section mb-5">
    <div class="container">
        <div class="row text-center">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <h1 class="color-a">ABOUT OUR COMPANY</h1>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="about-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>ABOUT US<span class="color-a"> <br> Nexus Properties</span> </h1>
                <p>The A Team scaled to the main dealer level in just two months
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
                    in DHA in February 2021. </p>
                <!-- <button type="button" class="btn btn-blue">More Details</button> -->
            </div>
            <div class="col-md-6">
                <img src="{{ asset('public/web-assets/img/services1.png ')}}" alt="img" class="img-fluid" srcset="">
            </div>
        </div>
    </div>
</section>
<section class="why-choce-section mb-5 bg-b">
    <div class="container pb-5">
        <div class="row">
            <h1 class="text-center mb-5 mt-5"> <span class="color-why">WHY</span><span class="color-a"> CHOOSE
                    US</span></h1>
            <div class="col-sm-12 col-md-3 col-lg-3 mt-2">
                <div class="card why-choose">
                    <div class="card-body text-center">
                        <p><i class="bi bi-house-heart-fill color-a"></i></p>
                        <h4 class="">Company
                            Tagline</h4>
                        <p>Our mission is to be serve the community through the best real estate service</p>
                        <!-- <div class="overlay-2">
                            <div class="text-2">
                                <P class="meet-choose"> Al Noor Orchard Housing Scheme</P>
    
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3  col-lg-3 mt-2">
                <div class="card why-choose">
                    <div class="card-body text-center">
                        <p><i class="bi bi-people color-a"></i></p>
                        <h4 class="">Our Mission</h4>
                        <p>Our mission is to be serve the community through the best real estate service</p>
                        <!-- <div class="overlay-2">
                            <div class="text-2">
                                <P class="meet-choose"> Al Noor Orchard Housing Scheme</P>
    
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3  col-lg-3 mt-2">
                <div class="card why-choose">
                    <div class="card-body text-center">
                        <p><i class="bi bi-wallet-fill color-a"></i></p>
                        <h4 class="">Our Goals</h4>
                        <p>Our mission is to be serve the community through the best real estate service</p>
                        <!-- <div class="overlay-2">
                            <div class="text-2">
                                <P class="meet-choose"> Al Noor Orchard Housing Scheme</P>
    
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3  col-lg-3 mt-2">
                <div class="card why-choose">
                    <div class="card-body text-center">
                        <p><i class="bi bi-wallet-fill color-a"></i></p>
                        <h4 class="">Our Vision</h4>
                        <p>Our mission is to be serve the community through the best real estate service</p>
                        <!-- <div class="overlay-2">
                            <div class="text-2">
                                <P class="meet-choose"> Al Noor Orchard Housing Scheme</P>
    
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="charman-section mb-5">

    <div class="container ">
        <div class="row">
            <div class="col-md-7">
                <h1 class="pt-4"> <span class="msg-form">Message From</span><span class="color-a"> <br>
                        CHAIRMAN</span> </h1>
                <p class="pt-4 ch-p">“ The A Team’s partnership with Lahore Rung and AV Pakistan is a reflection of our
                    willingness to
                    help people and strives to build a sense of community around us.” </p>
                <!-- <button type="button" class="btn btn-blue">More Details</button> -->
                <h4>Saif ud din Ahmed</h4>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('public/web-assets/img/Asset 2.png') }}" alt="img" class="ch-img" srcset="">
            </div>
        </div>
    </div>
</section>
<section>

    <div class="container-fluid helloooas">
        <div class="row mt-5 mb-4">
            <h1 class="pb-2 text-center color-blue">MEET THE TEAM</h1>
            <div class="col-lg-3 image mb-3">
                <img src="{{ asset('public/web-assets/img/Asset3.png ')}}" class="img-fluid" alt="">
                <div class="overlay1">
                    <div class="text-1">
                        <P class="meet-p">ZAIN ALVI</P>
                        <p class="meet-p1">Managing Director</p>
                        <div class="card-footer-d">
                            <div class="socials-footer  justify-content-center">
                                <ul class="list-inline social-icon">
                                    <li class="list-inline-item ">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-facebook " aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="col-lg-3 image mb-3">
                <img src="{{ asset('public/web-assets/img/Asset3.png ')}}" class="img-fluid" alt="">
                <div class="overlay1">
                    <div class="text-1">
                        <P class="meet-p">ZAIN ALVI</P>
                        <p class="meet-p1">Managing Director</p>
                        <div class="card-footer-d">
                            <div class="socials-footer  ">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="col-lg-3 image mb-3">
                <img src="{{ asset('public/web-assets/img/Asset3.png ')}}" class="img-fluid" alt="">
                <div class="overlay1">
                    <div class="text-1">
                        <P class="meet-p">ZAIN ALVI</P>
                        <p class="meet-p1">Managing Director</p>
                        <div class="card-footer-d">
                            <div class="socials-footer  justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-3 image mb-3">
                <img src="{{ asset('public/web-assets/img/Asset3.png ')}}" class="img-fluid" alt="">
                <div class="overlay1">
                    <div class="text-1">
                        <P class="meet-p">ZAIN ALVI</P>
                        <p class="meet-p1">Managing Director</p>
                        <div class="card-footer-d">
                            <div class="socials-footer  justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
</section>

<section class="charman-section mb-5">

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class=""> <span class="color-hire">HiRE AN</span>
                    <p class="color-invest"> iNVESTMENT CONSULTANT!</p>
                </h1>
                <p class="pt-0 mt-0 hire-p">Are you looking for an investment consultant?
                    Nexus Properties will help you choose the right mode of
                    investment in the best housing societies</p>

                <a href="{{ url('contact') }}" class="btn btn-default btn-get px-4 py-2"><span>GET IN TOUCH</span></a href="{{ url('contact') }}">


            </div>



            <div class="col-md-5">
                <img src="{{ asset('public/web-assets/img/Asset 1.png') }}" alt="img" class="ch-img" srcset="">
            </div>
        </div>
    </div>
</section>
@endsection
