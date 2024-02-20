@extends('layouts.masterLayout')
@section('title','About')
@push('css')
    <style>
        /* about section banner */
        .image-aboutus-banner {
            background: linear-gradient(rgba(0, 0, 0, .01), rgba(0, 0, 0, .01)), url({{ asset('user/images/php2.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            padding-top: 110px;
            padding-bottom: 110px;
        }

        .image-aboutus-para {
            color: #04e991;
        }

        /* end about section banner */

        .counter {
            color: #21D192;
            font-family: 'Muli', sans-serif;
            width: 200px;
            height: 200px;
            text-align: center;
            border-radius: 100%;
            padding: 77px 32px 40px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .counter:before,
        .counter:after {
            content: "";
            background: #fff;
            width: 80%;
            height: 80%;
            border-radius: 100%;
            box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.3);
            transform: translateX(-50%)translateY(-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: -1;
        }

        .counter:after {
            background: linear-gradient(45deg, #04e991 49%, #00a156 50%);
            width: 100%;
            height: 100%;
            box-shadow: none;
            transform: translate(0);
            top: 0;
            left: 0;
            z-index: -2;
            clip-path: polygon(50% 50%, 50% 0, 100% 0, 100% 100%, 0 100%, 0 50%);
        }

        .counter .counter-icon {
            color: #fff;
            background: linear-gradient(45deg, #04e991 49%, #00a156 50%);
            font-size: 33px;
            line-height: 70px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            transition: all 0.3s;
        }

        .counter .counter-icon i.fa {
            transform: rotateX(0deg);
            transition: all 0.3s ease 0s;
        }

        .counter:hover .counter-icon i.fa {
            transform: rotateX(360deg);
        }

        .counter h3 {
            font-size: 17px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 0 3px;
        }

        .counter .counter-value {
            font-size: 30px;
            font-weight: 700;
        }

        .counter.orange {
            color: #21D192;
        }

        .counter.orange:after,
        .counter.orange .counter-icon {
            background: linear-gradient(45deg, #04e991 49%, #00a156 50%);
        }

        .counter.green {
            color: #88BA1B;
        }

        .counter.green:after,
        .counter.green .counter-icon {
            background: linear-gradient(45deg, #04e991 49%, #00a156 50%);
        }

        .counter.blue {
            color: #5DB3E4;
        }

        .counter.blue:after,
        .counter.blue .counter-icon {
            background: linear-gradient(45deg, #04e991 49%, #00a156 50%);
        }

        @media screen and (max-width:990px) {
            .counter {
                margin-bottom: 40px;
            }
        }
    </style>
@endpush


@section('content')
    <section>
        <div class="image-aboutus-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="lg-text">About Us</h1>
                        <p class="image-aboutus-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="about section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <img src="{{ asset('user/images/php.jpg') }}" class="about-image img-fluid" alt="my working image">
                </div>

                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <div class="about-thumb">

                        <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                            <h2 class="text-white me-4 mb-0">My Story</h2>

                            <img src="{{ asset('user/images/happy-bearded-young-man.jpg') }}" class="avatar-image img-fluid"
                                alt="">
                        </div>

                        <h3 class="pt-2 mb-3">A little bit about Codearif</h3>

                        <p>This one-page HTML portfolio is provided by <a href="https://templatemo.com"
                                target="_blank">TemplateMo</a>. This layout is based on Bootstrap v5.1.3 CSS and JS
                            libraries. Image credits go to <a href="https://unsplash.com" target="_blank">Unsplash</a>
                            and
                            <a href="https://freepik.com" target="_blank">FreePik</a> for images used in this page.
                        </p>

                        <p>You are allowed to use this template for your websites. You are not allowed to redistribute
                            the
                            template ZIP file on any other website. Please <a href="https://templatemo.com/contact"
                                target="_blank">contact us</a> for more info.</p>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="https://bootstrapbrain.com/demo/components/abouts/about-1/assets/img/about-img-1.jpg" alt="About 1">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">Who Are We?</h2>
                            <p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and superior
                                products. Our perspective is to furnish outstanding captivating services.</p>
                            <p class="mb-5">We are a fast-growing company, but we have never lost sight of our core
                                values. We believe in collaboration, innovation, and customer satisfaction. We are always
                                looking for new ways to improve our products and services.</p>
                            <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Versatile Brand</h2>
                                            <p class="text-secondary mb-0">We are crafting a digital method that subsists
                                                life across all mediums.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Digital Agency</h2>
                                            <p class="text-secondary mb-0">We believe in innovation by merging primary with
                                                elaborate ideas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured section-padding">
        <div class="container">

            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <span class="counter-value">3</span>
                                <span>+</span>
                                <h3>Years of experiance</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter orange">
                                <div class="counter-icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <span class="counter-value">30</span>
                                <span>+</span>
                                <h3>Project</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="fa fa-coffee"></i>
                                </div>
                                <span class="counter-value">250</span>
                                <span>+</span>
                                <h3>Happy Clients</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <span class="counter-value">20</span>
                                <span>+</span>
                                <h3>Customer</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="profile-thumb">
                        <div class="profile-title">
                            <h4 class="mb-0">Information</h4>
                        </div>

                        <div class="profile-body">
                            <p>
                                <span class="profile-small-title">Name</span>
                                <span>Joshua Morgan</span>
                            </p>

                            <p>
                                <span class="profile-small-title">Birthday</span>
                                <span>Aug 12, 1986</span>
                            </p>

                            <p>
                                <span class="profile-small-title">Phone</span>
                                <span><a href="tel: 305-240-9671">120-240-9600</a></span>
                            </p>

                            <p>
                                <span class="profile-small-title">Email</span>
                                <span><a href="mailto:hello@josh.design">hello@josh.design</a></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <div class="about-thumb">
                        <div class="row">
                            <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                <strong class="featured-numbers">20+</strong>

                                <p class="featured-text">Years of Experiences</p>
                            </div>

                            <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                <strong class="featured-numbers">245</strong>

                                <p class="featured-text">Happy Customers</p>
                            </div>

                            <div class="col-lg-6 col-6 pt-4">
                                <strong class="featured-numbers">640</strong>

                                <p class="featured-text">Project Finished</p>
                            </div>

                            <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                <strong class="featured-numbers">72+</strong>

                                <p class="featured-text">Digital Awards</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
        </div>
    </section>


    <section class="clients section-padding">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12 col-12">
                    <h3 class="text-center mb-5">Companies I've had worked</h3>
                </div>

                <div class="col-lg-2 col-4 ms-auto clients-item-height">
                    <img src="{{ asset('user/images/clients/cachet.svg') }}" class="clients-image img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-4 clients-item-height">
                    <img src="{{ asset('user/images/clients/guitar-center.svg') }}" class="clients-image img-fluid"
                        alt="">
                </div>

                <div class="col-lg-2 col-4 clients-item-height">
                    <img src="{{ asset('user/images/clients/tokico.svg') }}" class="clients-image img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-4 clients-item-height">
                    <img src="{{ asset('user/images/clients/shopify.svg') }}" class="clients-image img-fluid"
                        alt="">
                </div>

                <div class="col-lg-2 col-4 me-auto clients-item-height">
                    <img src="{{ asset('user/images/clients/profil-rejser.svg') }}" class="clients-image img-fluid"
                        alt="">
                </div>

            </div>
        </div>
    </section>
@endsection
