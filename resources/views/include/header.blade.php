<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/website/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/header_footer.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <link rel="icon" href="{{asset('/website/images/logo16.svg')}}">
    <title>Главная</title>
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
    </style>

</head>
<!--Сайт разработан компанией JustCode - http://justcodedigital.com/-->
<body>
<div class="drafter_main_wrapper">
    <div class="chat_svg_wrapper">
        <a href="">
            <svg width="124" height="124" viewBox="0 0 124 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_dd)">
                    <rect x="32" y="30" width="60" height="60" rx="30" fill="#E5D6A0"/>
                    <path
                        d="M76 76C76 76 71.2863 74.1451 67.4728 72.6592H51.4375C49.5392 72.6592 48 71.0272 48 69.0144V47.6448C48 45.632 49.5392 44 51.4375 44H72.5615C74.4598 44 75.999 45.632 75.999 47.6448V66.0491H76V76ZM71.8614 64.0181C71.5309 63.6105 70.9541 63.5634 70.5692 63.9125C70.5392 63.9392 67.5538 66.5941 61.999 66.5941C56.5132 66.5941 53.4818 63.9584 53.4278 63.9104C53.043 63.5629 52.4676 63.6105 52.1376 64.0171C51.9791 64.2125 51.9004 64.4673 51.919 64.7249C51.9376 64.9825 52.052 65.2215 52.2366 65.3888C52.3786 65.5168 55.7741 68.5387 61.999 68.5387C68.2249 68.5387 71.6204 65.5168 71.7624 65.3888C71.9467 65.2216 72.0609 64.9828 72.0795 64.7255C72.098 64.4681 72.0196 64.2135 71.8614 64.0181Z"
                        fill="#14161B"/>
                </g>
                <defs>
                    <filter id="filter0_dd" x="0" y="0" width="124" height="124" filterUnits="userSpaceOnUse"
                            color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix"
                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                        <feOffset dy="2"/>
                        <feGaussianBlur stdDeviation="16"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.16 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feColorMatrix in="SourceAlpha" type="matrix"
                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                        <feOffset dy="1"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/>
                        <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/>
                    </filter>
                </defs>
            </svg>
        </a>
    </div>
    <header class="header">
        <div class="header_wrapper">
            <div class="header_first_part">
                <div class="header_first_part_wrapper">
                    <div class="header_logo_wrapper">
                        <a href="{{ route('projects.index') }}"><img src="{{asset('/website/images/main_logo.svg')}}"
                                                                     alt=""></a>
                    </div>
                    <div class="nav_list_log_in_btn_wrapper">
                        <nav class="main_nav_wrapper">
                            <ul class="main_nav_ul_list">
                                <li class="main_nav_li"><a href="{{ route('projects.index') }}" class="main_nav_link">Проекты</a>
                                </li>
                                <li class="main_nav_li"><a href="/terms-of-use-last" class="main_nav_link">Правила
                                        площадки</a></li>
                                <li class="main_nav_li"><a href="/" class="main_nav_link">О компании</a></li>

                            </ul>
                        </nav>
                        @if (Auth::check())
                            <div class="personal_area_arrow">

                                <div class="perosonal_area_img_name_wrapper">
                                    @if(isset(auth()->user()->profile->profil_photo))
                                        <div class="personal_area_img">
                                            <img src="{{ asset( 'storage/' . auth()->user()->profile->profil_photo )}}"
                                                 alt="">
                                        </div>
                                    @else
                                        <div class="personal_area_img img_default_wrapper">
                                            <img src="{{ asset('website/images/avatardefault.svg') }} " alt="">
                                        </div>
                                    @endif
                                    <p class="personal_area_name"><a>{{Auth::user()->fullname}}</a></p>
                                    <svg class="area_svg" width="18" height="10" viewBox="0 0 18 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </svg>

                                </div>
                                <div class="personal_area__mobile_list_wrapper">
                                    <div style="background: black;height: 20px;"> </div>
                                    <a href="{{ route('profile.index') }}" class="area_link">Профиль</a>
                                    <div class="personal_area_list_line"></div>
                                    <a href="{{ route('messages.show') }}" class="area_link">Диалоги
                                        @if($messages_count != '')
                                            <sup>{{$messages_count}}</sup>
                                        @endif
                                    </a>
                                    <div class="personal_area_list_line"></div>
                                    @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
                                        <a href="{{ route('my_projects.show') }}" class="area_link">Мои проекты</a>
                                        <div class="personal_area_list_line"></div>
                                    @endif
                                    @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
                                        <a href="{{ route('add.chooseType') }}" class="area_link">Новый проект</a>
                                        <div class="personal_area_list_line"></div>
                                    @endif
                                    <a href="/profile?box=bookmark_open" class="area_link">Избранное</a>
                                    <div class="personal_area_list_line"></div>
                                    @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
                                        <a href="/profile?box=balance" class="area_link">Баланс</a>
                                        <div class="personal_area_list_line"></div>
                                    @endif
                                    <a href="{{ route('news.index') }}" class="area_link">Новости</a>
                                    <div class="personal_area_list_line"></div>
                                    <a href="{{ route('editpass') }}" class="area_link">Изменить пароль</a>
                                    <div class="personal_area_list_line"></div>

                                    <a href="/logout" class="area_link">Выйти</a>
                                </div>
                            </div>
                        @else

                            <a href="{{ route('login2') }}" class="log_in_btn">Вход</a>

                        @endif


                    </div>
                    <div class="hamburger-menu">
                        <span class="hamburger-menu-line"></span>
                        <span class="hamburger-menu-line"></span>
                        <span class="hamburger-menu-line last-line"></span>
                    </div>
                    <div class="mobile_version">
                        <i class="material-icons mobile-close mobile-version_close">close</i>
                        <div class="mobile_nav_list_log_in_btn_wrapper">
                            <nav class="mobile_main_nav_wrapper">
                                <ul class="main_nav_ul_list">
                                    <li class="main_nav_li"><a href="{{ route('projects.index') }}"
                                                               class="main_nav_link">Лента</a></li>
                                    <li class="main_nav_li"><a href="/terms-of-use-last" class="main_nav_link">Правила
                                            площадки</a></li>
                                    <li class="main_nav_li"><a href="" class="main_nav_link">О компании</a></li>
                                </ul>
                            </nav>

                            <nav class="header_second_nav_list">
                                <ul class="mobile_second_nav_ul_list">

                                    <li class="second_nav_ul_li">
                                        <a href="{{ route('news.index') }}" class="second_nav_link">Новости</a>
                                    </li>
                                    @auth
                                        <li class="second_nav_ul_li">
                                            <a href="{{ route('messages.show') }}" class="second_nav_link">Диалоги</a>
                                        </li>
                                    @endauth
                                    @auth
                                        <li class="second_nav_ul_li">
                                            <a href="{{ route('my_projects.show') }}" class="second_nav_link"> Мои
                                                проекты</a>
                                        </li>

                                        <li class="second_nav_ul_li">
                                            <a href="{{ route('profile.index') }}" class="second_nav_link">Профиль</a>
                                        </li>
                                        <li class="second_nav_ul_li">
                                            <a href="{{ route("logout") }}" class="second_nav_link">Выйти</a>
                                        </li>
                                    @endauth
                                </ul>
                            </nav>
                            @guest
                                <a href="/login" class="log_in_btn">Вход</a>
                            @endguest
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
