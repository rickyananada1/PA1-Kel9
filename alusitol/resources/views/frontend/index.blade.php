@extends('frontend.main_master')
@section('main')

@section('title')
    Home | Sitoluama Website
@endsection
<main>
    <!-- banner-area -->
    @include('frontend.home_all.home_slide')
    <!-- banner-area-end -->

    <!-- about-area -->
    @include('frontend.home_all.home_about')

    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services">
        <div class="container">
            <div class="services__title__wrap">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section__title">
                            <span class="sub-title">02 - my Services</span>
                            <h2 class="title">Creates amazing digital experiences</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-4">
                        <div class="services__arrow"></div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 services__active">
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img
                                    src="{{ asset('frontend/assets/img/images/services_img01.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light"
                                    src="{{ asset('frontend/assets/img/icons/services_light_icon01.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon01.png') }}"
                                    alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Berita Desa</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione provident quisquam
                                molestias nisi laboriosam corporis suscipit laborum, iste, sequi facilis minus
                                dolorum illum rem perferendis officia sint asperiores aliquam quibusdam.</p>
                            <ul class="services__list">
                                <li>Research & Data</li>
                                <li>Branding & Positioning</li>
                                <li>Business Consulting</li>
                                <li>Go To Market</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img
                                    src="{{ asset('frontend/assets/img/images/services_img02.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light"
                                    src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}"
                                    alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Berita Desa</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, illo obcaecati
                                explicabo aperiam, porro, magni aut exercitationem at commodi consequuntur corporis
                                quasi aliquam asperiores recusandae blanditiis? Autem consequuntur similique ab..
                            </p>
                            <ul class="services__list">
                                <li>User Research & Testing</li>
                                <li>UX Design</li>
                                <li>Visual Design</li>
                                <li>Information Architecture</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img
                                    src="{{ asset('frontend/assets/img/images/services_img03.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light"
                                    src="{{ asset('frontend/assets/img/icons/services_light_icon03.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon03.png') }}"
                                    alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                            <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a
                                forward-looking plan.</p>
                            <ul class="services__list">
                                <li>User Research & Testing</li>
                                <li>UX Design</li>
                                <li>Visual Design</li>
                                <li>Information Architecture</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img
                                    src="{{ asset('frontend/assets/img/images/services_img04.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light"
                                    src="{{ asset('frontend/assets/img/icons/services_light_icon04.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon04.png') }}"
                                    alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                            <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a
                                forward-looking plan.</p>
                            <ul class="services__list">
                                <li>User Research & Testing</li>
                                <li>UX Design</li>
                                <li>Visual Design</li>
                                <li>Information Architecture</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img
                                    src="{{ asset('frontend/assets/img/images/services_img03.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light"
                                    src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}"
                                    alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Web Development</a></h3>
                            <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a
                                forward-looking plan.</p>
                            <ul class="services__list">
                                <li>User Research & Testing</li>
                                <li>UX Design</li>
                                <li>Visual Design</li>
                                <li>Information Architecture</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->


    <!-- portfolio-area -->
    @include('frontend.home_all.galeri')
    <!-- portfolio-area-end -->

    <!-- Berita-area -->
    @include('frontend.home_all.home_berita')

    <!-- Berita-area-end -->

    <!-- contact-area -->
    <section class="homeContact">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">07 - Say hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form</p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form action="#">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter mail*">
                                <input type="number" placeholder="Enter number*">
                                <textarea name="message" placeholder="Enter Massage*"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
@endsection
