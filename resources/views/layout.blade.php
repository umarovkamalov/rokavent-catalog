<?php
use Illuminate\Support\Facades\App; ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="{{App::getLocale()}}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="{{App::getLocale()}}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{App::getLocale()}}">
<!--<![endif]-->
<!-- Begin Head -->


<head>
    <!--=== Required meta tags ===-->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Kamal Umarov">
    <meta name="MobileOptimized" content="320">
    <meta name="yandex-verification" content="d64abf94d8de7d4f" />

    <!--=== custom css ===-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" type="image/ico" href="{{ asset('favicon.ico') }}" />
    <!--=== custom css ===-->
    <title>@yield('title')</title>

</head>
<body class="int_dark_bg">

<!--=== start Main wraapper ===-->
<div class="int_main_wraapper">
    <div class="int_infosidebar">
        <div class="siderbar_social">
            <ul>
                <li><a href="https://www.facebook.com/rokavent.uz/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://t.me/rokavent"><i class="fab fa-telegram"></i></a></li>
            </ul>
        </div>
        <div class="siderbar_contact">
            <a href="tel:+998971300402">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.56 480.56" width="18px" height="18px"><g><g>
                            <g>
                                <path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8    c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4    c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8    c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3    c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9    c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                <path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1    c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                <path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5    l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/></g></g></g>
                </svg>+998(97)130-04-02&nbsp; +998(97)262-04-02</a>
        </div>
        <div class="siderbar_email">
            <a href="mailto:sales.manager@rokavent.uz">
                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 485.211 485.211"><g><g>
                            <path d="M485.211,363.906c0,10.637-2.992,20.498-7.785,29.174L324.225,221.67l151.54-132.584   c5.895,9.355,9.446,20.344,9.446,32.219V363.906z M242.606,252.793l210.863-184.5c-8.653-4.737-18.397-7.642-28.908-7.642H60.651   c-10.524,0-20.271,2.905-28.889,7.642L242.606,252.793z M301.393,241.631l-48.809,42.734c-2.855,2.487-6.41,3.729-9.978,3.729   c-3.57,0-7.125-1.242-9.98-3.729l-48.82-42.736L28.667,415.23c9.299,5.834,20.197,9.329,31.983,9.329h363.911   c11.784,0,22.687-3.495,31.983-9.329L301.393,241.631z M9.448,89.085C3.554,98.44,0,109.429,0,121.305v242.602   c0,10.637,2.978,20.498,7.789,29.174l153.183-171.44L9.448,89.085z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/></g></g>
                </svg>sales.manager@rokavent.uz</a>
        </div>
    </div>
    <div class="int_content_wraapper int_content_left">
        <div class="int_header_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="int_logo">
                            <a href="/"><img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="logo"/></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                        <div class="int_nav">
                            <div class="int_menu">

									<span class="close_menu_int">
										<svg xmlns="http://www.w3.org/2000/svg" width="9px" height="8px">
											<defs>
											<filter>
												<feFlood flood-color="rgb(255, 255, 255)" flood-opacity="1" result="floodOut"></feFlood>
												<feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut"></feComposite>
												<feBlend mode="normal" in="compOut" in2="SourceGraphic"></feBlend>
											</filter>

											</defs>
											<g>
											<path fill-rule="evenodd" fill="#ffffff" d="M4.713,3.998 L7.864,0.850 C8.060,0.654 8.060,0.337 7.864,0.142 C7.668,-0.054 7.351,-0.054 7.155,0.142 L4.005,3.290 L0.854,0.142 C0.659,-0.054 0.342,-0.054 0.146,0.142 C-0.050,0.337 -0.050,0.654 0.146,0.850 L3.296,3.998 L0.146,7.146 C-0.050,7.341 -0.050,7.658 0.146,7.854 C0.244,7.952 0.372,8.001 0.500,8.001 C0.628,8.001 0.756,7.952 0.854,7.854 L4.005,4.706 L7.155,7.854 C7.253,7.952 7.381,8.001 7.510,8.001 C7.638,8.001 7.766,7.952 7.864,7.854 C8.060,7.658 8.060,7.341 7.864,7.146 L4.713,3.998 Z"></path>
											</g>
										</svg>
									</span>
                                <ul>
                                    {!! menu('Menu', 'menu') !!}
                                    <li class="int_home_dropdown">
                                        <a href="#" target="">
                                            <i class="fa fa-language"></i>  {{ __('messages.lang')  }}&nbsp;&nbsp;
                                        </a>
                                        <ul>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('locale', ['locale' => 'uz']) }}">
                                                    <img width="40" src="https://img.icons8.com/color/2x/uzbekistan.png" alt="flag Uzbek">
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('locale', ['locale' => 'tr']) }}">
                                                    <img width="40" src="https://img.icons8.com/color/2x/turkey.png" alt="flag turkey">
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('locale', ['locale' => 'ru']) }}">
                                                    <img width="40" src="https://img.icons8.com/officel/2x/russian-federation.png" alt="flag russia">
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('locale', ['locale' => 'en']) }}">
                                                    <img width="40" src="https://img.icons8.com/emoji/2x/united-kingdom-emoji.png" alt="flag british">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="int_cartsec">

                            </div>
                            <div class="int_toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===Start Revolution Slider===-->
        <div class="int_banner_slider">
            <div class="banner_box_wrapper">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 align-self-center">
                            <div class="main_contentblock">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="swiper_imgbox imgbox1">
                                                <div class="swipper_img">
                                                    <h4>{{__('messages.the_best_solutions_for_the_hvac_industry')}}</h4>
                                                    <h2>{{__('messages.insulation')}}</h2>
                                                    <h3>Наша <span class="banner_span1">Работа</span></h3>
                                                    <p>{{__('messages.sale_of_insulating_materials_in_uzbekistan')}}</p>
                                                    <h1>Insulation</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper_imgbox imgbox2">
                                                <div class="swipper_img">
                                                    <h4>Лучшие решения для индустрии ОВК<span>HVAC</span></h4>
                                                    <h2>Изоляция</h2>
                                                    <h3>Наша <span class="banner_span1">Работа</span></h3>
                                                    <p>Roka-vent Это партнер бизнес-решений, предпочитаемый производителями и покупателями строительного, вентиляционного и изоляционного материалов по всему миру.</p>
                                                    <h1>Insulation</h1>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-7 align-self-center pr-0">
                            <!--=== Swiper ===-->
                            <div class="main_imgblock">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="swiper_contbox">
                                                <div class="swipper_conntent">
                                                    <img src="{{ asset('images/slider1/int_v1_slider01.jpg') }}" class="img-fluid" alt="images" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper_contbox">
                                                <div class="swipper_conntent">
                                                    <img src="{{ asset('images/slider1/int_v1_slider02.jpg') }}" class="img-fluid" alt="images" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Add Arrows ===-->
                    <div class="banner_navi">
                        <div class="swiper-button-next">{{__('messages.next')}}</div>
                        <div class="swiper-button-prev">{{__('messages.back')}}</div>
                    </div>
                </div>
            </div>

        </div>
        <!--===End Revolution Slider===-->
    </div>
    <!--=== End content ===-->

    @yield('main_content')


    <!--===Start Bottom Footer Section===-->

    <!--===Start Bottom Footer Section===-->

</div>
<!--=== End Main wraapper ===-->
<!--===Start Dark Bottom Footer Section===-->
<div class="int_bottom_footer_wrapper">
    <div class="container">
        <div class="bottom_footer_box_wrapper text-center">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright © 2018 <a target="_blank" href="https://t.me/KamalUmarov">Roka Vent.</a> All Right Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===Start Dark Bottom Footer Section===-->

<script>
    window.replainSettings = { id: '3096dc0c-79ef-479f-91a8-b0d83bc30335' };
    (function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');
</script>
<!-- BUTTON TOP START -->

    <!--=== Optional JavaScript ===-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}" ></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugin/countto/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/plugin/countto/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!--=== Optional JavaScript ===-->
</body>
</html>