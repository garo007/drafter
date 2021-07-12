@include('include.header')
<link rel="stylesheet" href="../website/css/personal_area_second.css">
<link rel="stylesheet" href="../website/css/personal_area.css">
<link rel="stylesheet" href="../website/css/edit_profile.css">
<link rel="stylesheet" href="../website/css/my_companies.css">

<main>
    <section class="personal_area">

        <div class="personal_area_wrapper">

            <div class="personal_title_nav_wrapper">
                <h1 class="personal_are_title">Личный кабинет</h1>
                <div class="personal_area_mobile_nav_wrapper">
                    <div class="mobile_personal_area_box">
                        <div class="personal_area_mobile_svg">
                            <svg width="28" height="4" viewBox="0 0 28 4" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#E5D6A0"/>
                                <circle cx="14" cy="2" r="2" fill="#E5D6A0"/>
                                <circle cx="26" cy="2" r="2" fill="#E5D6A0"/>
                            </svg>

                        </div>
                    </div>
                    <div class="personal_mobile_nav_list_wrapper">
                        <div class="personal_title_nav_wrapper">
                            <h1 class="personal_are_title">Личный кабинет</h1>
                            <div class="mobile_personal_area_box second_box">
                                <div class="personal_area_mobile_svg">
                                    <svg width="28" height="4" viewBox="0 0 28 4" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#E5D6A0"/>
                                        <circle cx="14" cy="2" r="2" fill="#E5D6A0"/>
                                        <circle cx="26" cy="2" r="2" fill="#E5D6A0"/>
                                    </svg>

                                </div>
                            </div>
                        </div>


                        <nav class="mobile_personal_area_main_nav">
                            <ul class="personal_area_list_wrapper">
                                <li class="personal_area_list mobile_persoanl_area_link" data-id="open_div1">
                                    Общая информация
                                </li>
                                <div class="perosnal_line"></div>
                                <li class="personal_area_list mobile_persoanl_area_link open" data-id="open_div2">
                                    Избранное
                                </li>
                                <div class="perosnal_line"></div>
                                <li class="personal_area_list mobile_persoanl_area_link" data-id="open_div3">
                                    FAQ
                                </li>
                                    <div class="perosnal_line"></div>
                                <li class="personal_area_list mobile_persoanl_area_link" data-id="open_div5">
                                    Партнеры
                                </li>

{{--                                <div class="perosnal_line"></div>--}}
{{--                                <li class="personal_area_list mobile_persoanl_area_link" data-id="open_div4">--}}
{{--                                    Категории бизнеса--}}
{{--                                </li>--}}
{{--                                <div class="perosnal_line"></div>--}}
{{--                                <li class="personal_area_list mobile_persoanl_area_link" data-id="open_div5">--}}
{{--                                    Баланс--}}
{{--                                </li>--}}
                                <div class="perosnal_line"></div>
                                <li class="personal_area_list mobile_persoanl_area_link" data-id="open_div6">
                                    Пользовательское соглашение
                                </li>
                                <div class="perosnal_line"></div>
                                <li class="personal_area_list mobile_persoanl_area_link" data-id="open_div7">
                                    Информация о площадке
                                </li>
                                <div class="perosnal_line"></div>
                                <li class="personal_area_list mobile_persoanl_area_link" data-id="open_div8">
                                    Уставные документы
                                </li>
{{--                                <div class="perosnal_line"></div>--}}
{{--                                <li class="personal_area_list">--}}
{{--                                    <button class="personal_area_list_btn"><a href="/logout"--}}
{{--                                                                              style="text-decoration: none;"--}}
{{--                                                                              class="personal_area_list_btn">Выйти</a>--}}
{{--                                    </button>--}}
{{--                                </li>--}}

                            </ul>
                        </nav>
                    </div>

                </div>

            </div>
            <nav class="personal_area_main_nav">
                <ul class="personal_area_list_wrapper">
{{--                    <li class="personal_area_list persoanl_area_link {{ session()->has('box') ? '' : 'active' }}"--}}
{{--                        data-id="open_div1">--}}
{{--                        Общая информацияdwdw--}}
{{--                    </li>--}}
                    <li class="personal_area_list persoanl_area_link open {{ session()->has('box') && session()->get('box') == 'bookmark_open' ? 'active' : '' }}"
                        data-id="open_div2" style="display: none">
                        Избранное
                    </li>
{{--                    <li class="personal_area_list persoanl_area_link" data-id="open_div3">--}}
{{--                        Избранное--}}
{{--                    </li>--}}
{{--                    <li class="personal_area_list persoanl_area_link" data-id="open_div4">--}}
{{--                        Категории бизнеса--}}
{{--                    </li>--}}
                    <li class="personal_area_list persoanl_area_link {{ session()->has('box') && session()->get('box') == 'balance' ? 'active' : '' }}"
                        data-id="open_div5" style="display: none">

                        Баланс
                    </li>

                    <li class="personal_area_list persoanl_area_link" data-id="open_div6">
                        Пользовательское соглашение
                    </li>
                    <li class="personal_area_list persoanl_area_link" data-id="open_div6">
                        Партнеры
                    </li>
{{--                    <li class="personal_area_list persoanl_area_link" data-id="open_div7">--}}
{{--                        Информация о площадке--}}
{{--                    </li>--}}
                    <li class="personal_area_list persoanl_area_link" data-id="open_div8">
                        Уставные документы
                    </li>
{{--                    <li class="personal_area_list">--}}
{{--                        <a href="/logout" style="text-decoration: none;" class="personal_area_list_btn">Выйти</a>--}}
{{--                    </li>--}}
                </ul>
            </nav>
            <div
                class="hidden_div {{ session()->has('box') && !session()->has('session_for_company_store') ? '' : 'open' }}"
                id="open_div1">
                <div
                    class="persoanl_area_image_info_btns_wrapper @if(!session()->has('session_for_edit_profile')) open_wrapper @endif"
                    id="show_profile">

                    <div class="personal_area_image_link_wrapper">
                        <div class="personal_area_images_wrapper">
                            @if(isset($profil->profil_photo))
                                <div class="personal_area_img1">
                                    <img src="{{asset('/website/images/peronsal_area_img2.png')}}" alt="">
                                </div>
                            @endif
                            <div class="personal_area_img2">
                                @if(isset($profil->profil_photo))
                                    <img src="{{ asset('storage/' . $profil->profil_photo) }}" alt="">
                                @else
                                    <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">
                                @endif
                            </div>
                            <div class="personal_area_img3">
                                <img src="{{asset('/website/images/second_item.png')}}" alt="">
                            </div>
                        </div>
                        <a class="personal_area_img_link edit_profile_open" style="margin-top: 116px">Редактировать профиль</a>
                        @if(auth()->user()->role_id == 2)
                            <a class="personal_area_img_link open_companies mobile_show" data-id="open_companies">Мои
                                компании</a>
                        @endif
                        @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
                            <a href="{{ route('my_projects.show') }}"
                               class="personal_area_img_link  only_mobile_show_projects_link">Мои проекты</a>
                        @endif
                        @if(auth()->user()->role_id == 2)
                            <a class="personal_area_img_link open_companies mobile_show" data-id="open_companies">Новый Проект</a>
                        @endif
                    </div>
                    <div class="personal_area_name_info_wrapper">
                        <h1 class="personal_name_surname">{{ Auth::user()->fullname }}</h1>
                        <div class="role_type_flex">
                            @if(auth()->user()->role_id == 1)
                                <h2 class="perosonal_area_investor">Инвестор</h2>
                            @elseif(auth()->user()->role_id == 2)
                                <h2 class="perosonal_area_investor">Заёмщик</h2>
                            @else
                                <h2 class="perosonal_area_investor">Гость</h2>
                            @endif
                            <a class="personal_area_password_status_link first_personal_link change_role k1">Изменить
                                статус</a>
                        </div>

                        <div class="perosnal_area_phone_passport_info_details_wrapper">
                            <div class="perosnal_area_phone_mail_wrapper">
                                <div class="personal_area_phone_svg_wrapper">
                                    <div class="perosnal_area_phone_svg">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.9999 15.9201V18.9201C21.0011 19.1986 20.944 19.4743 20.8324 19.7294C20.7209 19.9846 20.5572 20.2137 20.352 20.402C20.1468 20.5902 19.9045 20.7336 19.6407 20.8228C19.3769 20.912 19.0973 20.9452 18.8199 20.9201C15.7428 20.5857 12.7869 19.5342 10.1899 17.8501C7.77376 16.3148 5.72527 14.2663 4.18993 11.8501C2.49991 9.2413 1.44818 6.27109 1.11993 3.1801C1.09494 2.90356 1.12781 2.62486 1.21643 2.36172C1.30506 2.09859 1.4475 1.85679 1.6347 1.65172C1.82189 1.44665 2.04974 1.28281 2.30372 1.17062C2.55771 1.05843 2.83227 1.00036 3.10993 1.0001H6.10993C6.59524 0.995321 7.06572 1.16718 7.43369 1.48363C7.80166 1.80008 8.04201 2.23954 8.10993 2.7201C8.23656 3.68016 8.47138 4.62282 8.80993 5.5301C8.94448 5.88802 8.9736 6.27701 8.89384 6.65098C8.81408 7.02494 8.6288 7.36821 8.35993 7.6401L7.08993 8.9101C8.51349 11.4136 10.5864 13.4865 13.0899 14.9101L14.3599 13.6401C14.6318 13.3712 14.9751 13.1859 15.3491 13.1062C15.723 13.0264 16.112 13.0556 16.4699 13.1901C17.3772 13.5286 18.3199 13.7635 19.2799 13.8901C19.7657 13.9586 20.2093 14.2033 20.5265 14.5776C20.8436 14.9519 21.0121 15.4297 20.9999 15.9201Z"
                                                stroke="#848993" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <p class="personal_area_phone_info">
                                        @if (strlen(Auth::user()->phone) > 3)
                                            {{Auth::user()->phone}}
                                        @else
                                            Номер не указан
                                        @endif
                                    </p>
                                </div>
                                <div class="personal_area_mail_svg_wrapper">


                                        @if (Auth::user()->is_verified_email == 0)
                                           <div class="not_verify_email">Подтвердить почту</div>
                                        @endif


                                    <div class="personal_area_mail_svg">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                stroke="#848993" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path d="M2 12H22" stroke="#848993" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path
                                                d="M12 2C14.5013 4.73835 15.9228 8.29203 16 12C15.9228 15.708 14.5013 19.2616 12 22C9.49872 19.2616 8.07725 15.708 8 12C8.07725 8.29203 9.49872 4.73835 12 2V2Z"
                                                stroke="#848993" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <p class="personal_area_mail_info">{{Auth::user()->email}}</p>
                                </div>
                            </div>
                            <div class="personal_area_passport_snils_wrapper">
                                <div class="personal_area_passport_svg_wrapper">
                                    <div class="personal_area_passport_svg">
                                        @if(isset($profil->passport_photo) && isset($profil->selfi_pasport) && isset($profil->passport_number))
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <circle cx="12" cy="12" r="11.25" stroke="#6DEC98" stroke-width="1.5"/>
                                            </svg>
                                        @else
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="11.25" stroke="#DA3D3D" stroke-width="1.5"/>
                                                <path
                                                    d="M12.8984 14.5312H11.5391L11.1328 6.57812H13.2969L12.8984 14.5312ZM11.0391 17.0234C11.0391 16.638 11.1406 16.3464 11.3438 16.1484C11.5469 15.9453 11.8359 15.8438 12.2109 15.8438C12.5807 15.8438 12.8646 15.9479 13.0625 16.1562C13.2604 16.3646 13.3594 16.6536 13.3594 17.0234C13.3594 17.3932 13.2578 17.6875 13.0547 17.9062C12.8568 18.1198 12.5755 18.2266 12.2109 18.2266C11.8411 18.2266 11.5521 18.1224 11.3438 17.9141C11.1406 17.7057 11.0391 17.4089 11.0391 17.0234Z"
                                                    fill="#DA3D3D"/>
                                            </svg>
                                        @endif
                                    </div>
                                    <div class="personal_area_passport_info_title">
                                        <p class="personal_area_passport_title">Паспорт</p>
                                        @if(isset($profil->passport_number))
                                            <p class="personal_area_passport_info">{{ $profil->passport_number }}</p>
                                        @else
                                            <p class="personal_area_passport_info">Введите Номер паспорта</p>
                                        @endif
                                    </div>

                                </div>
                                <div class="personal_area_snils_svg_wrapper">
                                    <div class="personal_area_passport_svg">
                                        @if(isset($profil->snils_photo) && isset($profil->snils))
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <circle cx="12" cy="12" r="11.25" stroke="#6DEC98" stroke-width="1.5"/>
                                            </svg>
                                        @else
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="11.25" stroke="#DA3D3D" stroke-width="1.5"/>
                                                <path
                                                    d="M12.8984 14.5312H11.5391L11.1328 6.57812H13.2969L12.8984 14.5312ZM11.0391 17.0234C11.0391 16.638 11.1406 16.3464 11.3438 16.1484C11.5469 15.9453 11.8359 15.8438 12.2109 15.8438C12.5807 15.8438 12.8646 15.9479 13.0625 16.1562C13.2604 16.3646 13.3594 16.6536 13.3594 17.0234C13.3594 17.3932 13.2578 17.6875 13.0547 17.9062C12.8568 18.1198 12.5755 18.2266 12.2109 18.2266C11.8411 18.2266 11.5521 18.1224 11.3438 17.9141C11.1406 17.7057 11.0391 17.4089 11.0391 17.0234Z"
                                                    fill="#DA3D3D"/>
                                            </svg>
                                        @endif
                                    </div>

                                    <div class="personal_area_snils_info_title">
                                        <p class="personal_area_snils_title">СНИЛС</p>
                                        @if(isset($profil->snils))
                                            <p class="personal_area_snils_info">{{ $profil->snils }}</p>
                                        @else
                                            <p class="personal_area_snils_info">Введите снилс</p>
                                        @endif
                                    </div>

                                </div>

                            </div>
                        </div>
                        @if(auth()->user()->role_id == 2)
                            <div class="my_company_new_wrapper">
                                <a class="personal_area_img_link open_companies web_show m-t" data-id="open_companies">
                                    Мои компании
                                </a>
                                <a class="personal_area_img_link open_companies web_show m-t" data-id="open_companies">
                                    Новый Проект
                                </a>
                            </div>
                        @endif
{{--                        <div class="mobile_personal_area_change_password_status_links_wrapper">--}}
{{--                            <a class="personal_area_password_status_link first_personal_link change_role">Изменить--}}
{{--                                статус</a>--}}
{{--                            <a href="{{route('recover_password')}}" class="personal_area_password_status_link">Изменить--}}
{{--                                пароль</a>--}}
{{--                        </div>--}}
                    </div>
{{--                    <div class="personal_area_change_password_status_links_wrapper">--}}
{{--                        <a class="personal_area_password_status_link first_personal_link change_role">Изменить--}}
{{--                            статус</a>--}}
{{--                        <a href="{{ route('editpass') }}" class="personal_area_password_status_link">Изменить пароль</a><br>--}}
{{--                    </div>--}}
                </div>
                <div
                    class="persoanl_area_image_info_btns_wrapper @if(session()->has('session_for_edit_profile')) open_wrapper @endif  "
                    id="edit_profile">
                    <div class="personal_area_image_link_wrapper">
                        <div class="personal_area_images_wrapper">

                            @if(isset($profil->profil_photo))
                                <div class="personal_area_img1">
                                    <img src="{{asset('/website/images/peronsal_area_img2.png')}}" alt="">
                                </div>
                            @endif
                            <div class="personal_area_img2">
                                @if(isset($profil->profil_photo))
                                    <img src="{{ asset('storage/' . $profil->profil_photo) }}" alt="">
                                @else
                                    <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">
                                @endif
                            </div>
                            <div class="personal_area_img3">
                                <img src="{{asset('/website/images/second_item.png')}}" alt="">
                            </div>
                        </div>
                        <div class="write_us_form_inputs_field">
                            <label for="fileinput" class=" write_us_input file_label">

                                <svg width="31" height="27" viewBox="0 0 31 27" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17"
                                        stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z"
                                        stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M29 21H21" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M25 17V25" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span class="file_span">Изменить фото</span>

                            </label>
                        </div>
                    </div>
                    <form action="{{ route('profile-update')}}" class="personal_area_form_wrapper"
                          enctype="multipart/form-data" method="post">
                        @csrf
                        <input type="file" id="fileinput" hidden name="profil_photo" onchange="readURL(this);">
                        <div class="personal_area_form_inputs_wrapper">
                            <div class="personal_area_form_input">
                                @if ($errors->has('name_surname'))
                                    <span class="error_text"> {{$errors->first('name_surname')}} </span>
                                @endif
                                <input type="text" placeholder="ФИО" class="persons_area_input" name="name_surname"
                                       value="{{old('name_surname',Auth::user()->fullname)}}">
                            </div>
                            <div class="personal_area_form_input second_area_input">
                                @if ($errors->has('snils'))
                                    <div class="alert-error"> {{$errors->first('snils')}} </div>
                                @endif
                                <input type="text" placeholder="СНИЛС" class="persons_area_input special_input"
                                       name="snils" value="@isset( $profil->snils ) {{ $profil->snils }} @endisset">
                                <div class="personal_area_file_input_second">
                                    <label for="four_fileinput" class="four_fileinput">
                                        <svg width="30" height="30" viewBox="0 0 30 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17"
                                                stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z"
                                                stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <input type="file" id="four_fileinput" hidden name="snils_photo">
                                    </label>
                                </div>
                            </div>
                            <div class="personal_area_form_input">
                                @if ($errors->has('phone'))
                                    <span class="error_text"> {{$errors->first('phone')}} </span>
                                @endif
                                <input type="text" placeholder="телефон" class="persons_area_input" name="phone"
                                       value="{{old('phone',strlen(Auth::user()->phone) > 3 ? Auth::user()->phone : '')}}">
                            </div>
                            <div class="personal_area_form_input second_area_input">
                                <input type="text" placeholder="Паспорт (серия, номер)"
                                       class="persons_area_input special_input" name="passport_number"
                                       value="@isset( $profil->passport_number ) {{ $profil->passport_number }} @endisset">
                                @if ($errors->has('passport_number'))
                                    <div class="alert-error"> {{$errors->first('passport_number')}} </div>
                                @endif
                                <div class="personal_area_file_input_second">
                                    <label>

                                        <svg width="30" height="26" viewBox="0 0 30 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17"
                                                stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z"
                                                stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                        <input type="file" hidden name="passport_photo">

                                    </label>
                                </div>
                            </div>
                            <div class="personal_area_form_input">
                                @if ($errors->has('email'))
                                    <span class="error_text"> {{$errors->first('email')}} </span>
                                @endif
                                <input type="text" placeholder="e-mail" class="persons_area_input" name="email"
                                       value="{{ old('email',Auth::user()->email) }}">
                            </div>
                            <div class="personal_area_form_input_type_file">
                                <label for="second_fileinput" class=" write_us_input_second file_label">

                                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17"
                                            stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z"
                                            stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                    <span class="file_span_second">Селфи с паспортом</span>
                                    <input type="file" id="second_fileinput" hidden name="selfi_pasport"
                                           placeholder="Селфи с паспортом">
                                    @if ($errors->has('selfi_pasport'))
                                        <div class="error_text"> {{$errors->first('selfi_pasport')}} </div>
                                    @endif


                                </label>
                            </div>
                        </div>
                        <div class="personal_area_form_btns_wrapper">
                            <button class="personal_area_form_btn first_area_btn cancel_edit_btn">Отмена</button>
                            <button class="personal_area_form_btn" type="submit">Сохранить</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="hidden_div {{ session()->has('box') && session()->get('box') == 'bookmark_open' ? 'open' : '' }}" id="open_div2">
                <div class="completed_projects_items_wrapper">
                    <div class="completed_project_first_item hidden_second_project">
                        <p class="first_item_title">Фильтры</p>
                        <div class="filter_of_catagories_wrapper">
                            <p class="filter_of_catagories_wrapper_title">Категория</p>
                            <div class="filter_of_catagories_wrapper_check_inputs">
                                @foreach($categories as $category)
                                    <div class="check_input_wrapper">
                                        <span class="filter_input_span">{{ $category->name }}</span>
                                        <input type="checkbox" class="filter_input" data-id="{{ $category->id }}" hidden
                                               id="{{ $category->id."filter_input" }}">
                                        <label class="filter_input_label"
                                               for="{{ $category->id."filter_input" }}"></label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="filter_inputs_btns_wrapper">
                            <button class="filter_btn1">Очистить</button>
                            <button class="filter_btn2">Применить</button>
                        </div>
                    </div>
                    <div class="personal_bookmarks_wrapper">
                        <div class="bookmarks_childs_wrapper">
                            <h1 class="bookmarks_title">Мои избранные</h1>
                            <div class="bookmarks_svg_title_wrapper">
                                <p class="bookmarks_second_title">По релевантности</p>
                                <div class="bookmarks_svg_wrapper">
                                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 0.5L4 4L0.499999 0.5" stroke="#DADADA" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="completed_project_first_item  hidden_first_project">
                            <p class="first_item_title">Фильтры</p>
                            <div class="filter_of_catagories_wrapper">
                                <p class="filter_of_catagories_wrapper_title">Категория</p>
                                <div class="filter_of_catagories_wrapper_check_inputs">
                                    @foreach($categories as $category)
                                        <div class="check_input_wrapper">
                                            <span class="filter_input_span">{{ $category->name }}</span>
                                            <input type="checkbox" class="filter_input" data-id="{{ $category->id }}"
                                                   hidden id="{{ $category->id."filter_input" }}">
                                            <label class="filter_input_label"
                                                   for="{{ $category->id."filter_input" }}"></label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="filter_inputs_btns_wrapper">
                                <button class="filter_btn1">Очистить</button>
                                <button class="filter_btn2">Применить</button>
                            </div>
                        </div>
                    </div>
                    <div class="completed_project_second_item">
                        @if(isset($investment_bookmark))
                            @foreach($investment_bookmark as $investment)
                                @if($investment->status != '0')
                                    <div
                                        class="completed_project_small_item completed_project_investment special_second_project"
                                        id="{{ $investment->id }}">
                                        <div class="small_item_img_text_wrapper">
                                            <div class="small_item_img">
                                                <img src="{{ asset('storage/uploads/'.$investment->company_logo)  }}"
                                                     alt="">
                                            </div>
                                            <div class="hidden_img">
                                                <img src="{{ asset('storage/uploads/'.$investment->company_logo)  }}"
                                                     alt="">
                                            </div>
                                            <div class="smal_item_text_wrapper">
                                                <div class="small_item_title_svg_wrapper">
                                                    <p class="small_item_title"><a
                                                            href="{{ route('business.single',['name'=>'investment' ,'id'=> $investment->id ]) }}">{{ $investment->company_name }}</a>
                                                    </p>
                                                    <span class="removeBookmark" data-id="{{ $investment->id }}">
                                                                <div
                                                                    class="small_item_svg_wrapper added_to_bookmark showBookmark"
                                                                    data-id="{{ $investment->id }}"
                                                                    data-type="investment">
                                                                    <svg width="34" height="40" viewBox="0 0 34 40"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                            fill="#E5D6A0" stroke="#E5D6A0"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                    </svg>
                                                                </div>
                                                        </span>
                                                    <div class="small_item_svg_wrapper add_to_bookmarks">
                                                        <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p class="hidden_price">{{ $investment->percentage }}%</p>
                                                <p class="small_item_info1">Ставка:</p>
                                                <p class="small_item_info2">{{ $investment->percentage }}%</p>
                                                <div class="small_item_info_svg_wrapper">
                                                    <p class="small_item_info3">
                                                        <span>Собрано:</span> {{ $investment->am_collected }}
                                                        из {{ $investment->am_required }} Руб </p>
                                                    <div class="small_item_info4_svg_wrapper">
                                                        <div class="small_item_info4_svg">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M24 23.9999V20.9496C24 19.3316 23.3679 17.7798 22.2426 16.6357C21.1174 15.4916 19.5913 14.8489 18 14.8489H6C4.4087 14.8489 2.88258 15.4916 1.75736 16.6357C0.632141 17.7798 0 19.3316 0 20.9496V23.9999"
                                                                    fill="#E5D6A0"/>
                                                                <path
                                                                    d="M12.0007 12.2014C15.3144 12.2014 18.0007 9.47004 18.0007 6.10071C18.0007 2.73138 15.3144 0 12.0007 0C8.68702 0 6.00073 2.73138 6.00073 6.10071C6.00073 9.47004 8.68702 12.2014 12.0007 12.2014Z"
                                                                    fill="#E5D6A0"/>
                                                            </svg>
                                                        </div>
                                                        <p class="small_item_info4">{{ count($investment->invests) }}</p>
                                                    </div>
                                                </div>
                                                <div class="small_item_loading_wrapper">
                                                    <div class="small_item_loading_child"
                                                         style="width: {{ $investment->am_collected/$investment->am_required*100 }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small_item_show_more_text_wrapper">
                                            <p class="small_item_show_more_text">
                                                {{ $investment->description }}
                                            </p>
                                            {{--                                <button class="read_more_btn">Читать полностью</button>--}}
                                        </div>
                                        <div class="small_item_star_number_wrapper">
                                            <div class="star_svg_wrapper">
                                                <div class="star_svg">
                                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"
                                                            stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                        <path d="M13.9372 6.48877L8.18704 11.9775L5.31201 9.23315"
                                                              stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>


                                                </div>
                                                <div class="jq-ry-group-wrapper">
                                                    <div class="jq-ry-normal-group jq-ry-group">
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993" style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993" style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993" style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993" style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    </div>
                                                    <div class="active_star" style="width:70%">
                                                        <div class="jq-ry-rated-group jq-ry-group">
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98" style="margin-left: 0px;"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98" style="margin-left: 0px;"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98" style="margin-left: 0px;"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98" style="margin-left: 0px;"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="small_item_star_date">{{ date('d.m.Y', strtotime($investment->created_at)) }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        @if(isset($business_bookmark))
                            @foreach($business_bookmark as $businesse)
                                @if($businesse->status != '0')
                                    <div class="completed_project_small_item" id="{{ $businesse->id }}">
                                        <div class="small_item_img_text_wrapper">
                                            <div class="small_item_img">
                                                <img src="{{ asset('storage/uploads/'.$businesse->company_logo)  }}"
                                                     alt="">
                                            </div>
                                            <div class="hidden_img">
                                                <img src="{{ asset('storage/uploads/'.$businesse->company_logo)  }}"
                                                     alt="">
                                            </div>
                                            <div class="smal_item_text_wrapper">
                                                <div class="small_item_title_svg_wrapper">
                                                    <p class="small_item_title"><a
                                                            href="{{ route('business.single',['name'=>'business' ,'id'=> $businesse->id ]) }}">{{ $businesse->company_name }}</a>
                                                    </p>
                                                    <span class="removeBookmark" data-id="{{ $businesse->id }}">
                                                                <div
                                                                    class="small_item_svg_wrapper added_to_bookmark showBookmark"
                                                                    data-id="{{ $businesse->id }}" data-type="business">
                                                                    <svg width="34" height="40" viewBox="0 0 34 40"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                            fill="#E5D6A0" stroke="#E5D6A0"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                    </svg>
                                                                </div>
                                                            </span>
                                                    <div class="small_item_svg_wrapper add_to_bookmarks">
                                                        <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p class="hidden_price">{{ number_format($businesse->cost, 0, ',', ' ') }}<span>&#8381;</span></p>
                                                <p class="hidden_city">{{ $businesse->city }} </p>
                                                <p class="small_item_info1">Цена:</p>
                                                <p class="small_item_info2">{{ number_format($businesse->cost, 0, ',', ' ') }}<span>&#8381;</span></p>
                                                <div class="small_item_info_svg_wrapper">
                                                    <p class="small_item_info3">
                                                        <span>Город:</span> {{ $businesse->city }}</p>
                                                    <div class="small_item_info4_svg_wrapper">
                                                        <div class="small_item_info4_svg">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M24 23.9999V20.9496C24 19.3316 23.3679 17.7798 22.2426 16.6357C21.1174 15.4916 19.5913 14.8489 18 14.8489H6C4.4087 14.8489 2.88258 15.4916 1.75736 16.6357C0.632141 17.7798 0 19.3316 0 20.9496V23.9999"
                                                                    fill="#E5D6A0"/>
                                                                <path
                                                                    d="M12.0007 12.2014C15.3144 12.2014 18.0007 9.47004 18.0007 6.10071C18.0007 2.73138 15.3144 0 12.0007 0C8.68702 0 6.00073 2.73138 6.00073 6.10071C6.00073 9.47004 8.68702 12.2014 12.0007 12.2014Z"
                                                                    fill="#E5D6A0"/>
                                                            </svg>
                                                        </div>
                                                        <p class="small_item_info4">8</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small_item_show_more_text_wrapper">
                                            <p class="small_item_show_more_text">
                                                {{ $businesse->description }}
                                            </p>
                                            {{--                                <button class="read_more_btn">Читать полностью</button>--}}
                                        </div>
                                        <div class="small_item_star_number_wrapper">
                                            <div class="star_svg_wrapper">
                                                <div class="star_svg">
                                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"
                                                            stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                        <path d="M13.9372 6.48877L8.18704 11.9775L5.31201 9.23315"
                                                              stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>


                                                </div>
                                                <div class="jq-ry-group-wrapper">
                                                    <div class="jq-ry-normal-group jq-ry-group">
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993" style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993" style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993" style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#848993" style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    </div>
                                                    <div class="active_star" style="width:70%">
                                                        <div class="jq-ry-rated-group jq-ry-group">
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98" style="margin-left: 0px;"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98" style="margin-left: 0px;"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98" style="margin-left: 0px;"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                                 xml:space="preserve" width="32px" height="32px"
                                                                 fill="#6DEC98" style="margin-left: 0px;"><polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="small_item_star_date">{{ date('d.m.Y', strtotime($businesse->created_at)) }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="hidden_div" id="open_div3">
                <div class="personal_area_faq_items_wrapper">
                    <h1 class="faq_main_title">FAQ</h1>
                    <div class="faq_line"></div>
                    <div class="personal_area_faq_item">
                        <div class="personal_area_faq_title_svg_wrapper">
                            <p class="personal_area_faq_title">
                                Как осуществляется верификация на сайте?
                            </p>
                            <div class="personal_area_faq_svg">
                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                        </div>
                        <div class="personal_area_faq_hidden_info">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </div>
                    </div>
                    <div class="faq_line"></div>
                    <div class="personal_area_faq_item">
                        <div class="personal_area_faq_title_svg_wrapper">
                            <p class="personal_area_faq_title">
                                Как изменить пароль?
                            </p>
                            <div class="personal_area_faq_svg">
                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                        </div>
                        <div class="personal_area_faq_hidden_info">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </div>
                    </div>
                    <div class="faq_line"></div>
                    <div class="personal_area_faq_item">
                        <div class="personal_area_faq_title_svg_wrapper">
                            <p class="personal_area_faq_title">
                                Как инвестировать в молодой бизнес?
                            </p>
                            <div class="personal_area_faq_svg">
                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                        </div>
                        <div class="personal_area_faq_hidden_info">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </div>
                    </div>
                    <div class="faq_line"></div>
                    <div class="personal_area_faq_item">
                        <div class="personal_area_faq_title_svg_wrapper">
                            <p class="personal_area_faq_title">
                                Как осуществляется верификация на сайте?
                            </p>
                            <div class="personal_area_faq_svg">
                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                        </div>
                        <div class="personal_area_faq_hidden_info">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </div>
                    </div>
                    <div class="faq_line"></div>
                </div>
            </div>
            <div class="hidden_div" id="open_div6">
                <div class="terms_of_use_personal_area_items_wrapper">
                    <h1 class="terms_of_use_main_title">Пользовательское соглашение</h1>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>


                </div>
            </div>
            <div class="hidden_div" id="open_div8">
                <div class="personal_area_faq_items_wrapper">
                    <h1 class="faq_main_title">Уставные документы</h1>
                    <div class="faq_line"></div>
                    <div class="personal_area_faq_item">
                        <div class="personal_area_faq_title_svg_wrapper">
                            <p class="personal_area_faq_title">
                                Документ 1
                            </p>
                            <div class="personal_area_faq_svg">
                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                        </div>
                        <div class="personal_area_faq_hidden_info">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </div>
                    </div>
                    <div class="faq_line"></div>
                    <div class="personal_area_faq_item">
                        <div class="personal_area_faq_title_svg_wrapper">
                            <p class="personal_area_faq_title">
                                Документ 2
                            </p>
                            <div class="personal_area_faq_svg">
                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                        </div>
                        <div class="personal_area_faq_hidden_info">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </div>
                    </div>
                    <div class="faq_line"></div>
                    <div class="personal_area_faq_item">
                        <div class="personal_area_faq_title_svg_wrapper">
                            <p class="personal_area_faq_title">
                                Документ 3
                            </p>
                            <div class="personal_area_faq_svg">
                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                        </div>
                        <div class="personal_area_faq_hidden_info">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </div>
                    </div>
                    <div class="faq_line"></div>
                    <div class="personal_area_faq_item">
                        <div class="personal_area_faq_title_svg_wrapper">
                            <p class="personal_area_faq_title">
                                Документ 4
                            </p>
                            <div class="personal_area_faq_svg">
                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </div>
                        </div>
                        <div class="personal_area_faq_hidden_info">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </div>
                    </div>
                    <div class="faq_line"></div>
                </div>
            </div>
            <div class="hidden_div {{ session()->has('box') && session()->get('box') == 'balance' ? 'open' : '' }}" id="open_div5">
                <h1 class="faq_main_title">Баланс</h1>
                <div class="balance_items_wrapper">
                    <div class="balance_item first_balance_item">
                        <div id="doughnutChart" class="chart"></div>
                    </div>
                    <div class="balance_item second_balance_item">
                        <div class="balance_line"></div>
                        <div class="balance_diagram_number_texts_wrapper">
                            <p class="balance_diagram_text">Баланс</p>
                            <p class="balance_diagram_number">
                                0
                                <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.893311 13.4434H9.46474" stroke="#F0F0F0" stroke-width="2"/>
                                    <path
                                        d="M3.55998 17V1H8.55998C9.70925 1 10.8114 1.49805 11.6241 2.38459C12.4368 3.27112 12.8933 4.47352 12.8933 5.72727C12.8933 6.98102 12.4368 8.18342 11.6241 9.06996C10.8114 9.9565 9.70925 10.4545 8.55998 10.4545H0.893311"
                                        stroke="#F0F0F0" stroke-width="2"/>
                                </svg>

                            </p>
                        </div>
                        <div class="balance_line"></div>
                        <div class="balance_diagram_number_texts_wrapper">
                            <p class="balance_diagram_text on_account">На счете</p>
                            <p class="balance_diagram_number on_account">
                                0
                                <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.893311 13.4434H9.46474" stroke="#A5AAB7" stroke-width="2"/>
                                    <path
                                        d="M3.55998 17V1H8.55998C9.70925 1 10.8114 1.49805 11.6241 2.38459C12.4368 3.27112 12.8933 4.47352 12.8933 5.72727C12.8933 6.98102 12.4368 8.18342 11.6241 9.06996C10.8114 9.9565 9.70925 10.4545 8.55998 10.4545H0.893311"
                                        stroke="#A5AAB7" stroke-width="2"/>
                                </svg>

                            </p>
                        </div>
                        <div class="balance_line"></div>
                        <div class="balance_diagrams_main_wrapper">
                            <div class="balance_diagram_number_texts_wrapper open_diagram_div">
                                <p class="balance_diagram_text invested">Инвестировано</p>
                                <div class="svg_number_wrapper">

                                    <p class="balance_diagram_number invested">
                                        0
                                        <svg class="invested_svg" width="14" height="17" viewBox="0 0 14 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.893311 13.4434H9.46474" stroke="#F0F0F0" stroke-width="2"/>
                                            <path
                                                d="M3.55998 17V1H8.55998C9.70925 1 10.8114 1.49805 11.6241 2.38459C12.4368 3.27112 12.8933 4.47352 12.8933 5.72727C12.8933 6.98102 12.4368 8.18342 11.6241 9.06996C10.8114 9.9565 9.70925 10.4545 8.55998 10.4545H0.893311"
                                                stroke="#F0F0F0" stroke-width="2"/>
                                        </svg>

                                    </p>
                                    <svg class="open_svg" width="18" height="10" viewBox="0 0 18 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </div>

                            </div>
                            <div class="balance_line"></div>
                            <div class="balance_diagrams_hidden_div">
                                <div class="balance_diagrams_hidden_item">
                                    <div class="balance_diagram_hidden_img_text_wrapper">
                                        <div class="balance_diagram_hidden_img">
                                            <img src="../images/balance_img1.png" alt="">
                                        </div>
                                        <div class="balance_diagram_hidden_info_wrapper">
                                            <p class="balacne_diagram_hidden_title">Цуммастер</p>
                                            <p class="balacne_diagram_hidden_info">- 150 000 руб.</p>
                                        </div>
                                    </div>
                                    <div class="balance_diagram_hidden_date_wrapper">
                                        <p class="balance_diagram_hidden_date">03.03.2021</p>
                                    </div>
                                </div>
                                <div class="balance_line"></div>
                                <div class="balance_diagrams_hidden_item">
                                    <div class="balance_diagram_hidden_img_text_wrapper">
                                        <div class="balance_diagram_hidden_img">
                                            <img src="../images/balance_img2.png" alt="">
                                        </div>
                                        <div class="balance_diagram_hidden_info_wrapper">
                                            <p class="balacne_diagram_hidden_title">Производство сыра из немолока</p>
                                            <p class="balacne_diagram_hidden_info">- 90 000 руб.</p>
                                        </div>
                                    </div>
                                    <div class="balance_diagram_hidden_date_wrapper">
                                        <p class="balance_diagram_hidden_date">03.03.2021</p>
                                    </div>
                                </div>
                                <div class="balance_line"></div>
                                <div class="balance_diagrams_hidden_item">
                                    <div class="balance_diagram_hidden_img_text_wrapper">
                                        <div class="balance_diagram_hidden_img">
                                            <img src="../images/balance_img3.png" alt="">
                                        </div>
                                        <div class="balance_diagram_hidden_info_wrapper">
                                            <p class="balacne_diagram_hidden_title">Спортмастер</p>
                                            <p class="balacne_diagram_hidden_info">- 800 000 руб.</p>
                                        </div>
                                    </div>
                                    <div class="balance_diagram_hidden_date_wrapper">
                                        <p class="balance_diagram_hidden_date">03.03.2021</p>
                                    </div>
                                </div>
                                <div class="balance_line"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="hidden_div" id="open_div7">
                <div class="terms_of_use_personal_area_items_wrapper">
                    <h1 class="terms_of_use_main_title">Информация о площадке</h1>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="terms_of_use_personal_area_item">
                        <h4 class="terms_of_use_personal_area_item_title">Lorem ipsum </h4>
                        <p class="terms_of_use_personal_area_item_info">
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>


                </div>
            </div>
            <div class="hidden_div @if(session()->has('session_for_company_store')) open @endif" id="open_companies">
                <div class="hidden_companies_div @if(!$errors->any()) open @endif" id="open_hidden_div1">
                    <div class="companies_items_wrapper">
                        <div class="companies_item first_companies_item">
                            <div class="file_input_wrapper">
                                <label class=" write_us_input file_label">

                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 16H8" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M16 8V24" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <rect x="0.5" y="0.5" width="31" height="31" stroke="#E5D6A0"/>
                                    </svg>
                                    <span class="file_span">Добавить компанию</span>

                                </label>

                            </div>

                        </div>


                        <div class="companies_item companies_item_second">
                            @if($companies)
                                @foreach($companies as $company)
                                    <div class="companies_line"></div>
                                    <div class="companies_item_wrapper">
                                        <div class="companies_item_svg_img_wrapper">
                                            <div class="companies_item_img_text_wrapper">
                                                <div class="companies_item_img">
                                                    <img
                                                        src="{{ asset('storage/uploads/companies/' . $company->logo) }}"
                                                        alt="">
                                                </div>
                                                <div class="companies_item_text_wrapper">
                                                    <p class="companies_item_text1">{{ $company->name }}</p>
                                                    <p class="companies_item_text2">ИНН {{ $company->inn }}</p>
                                                    <p class="companies_item_text3">ОГРН {{ $company->ogrn }}</p>
                                                </div>
                                            </div>
                                            <div class="companies_item_svg">
                                                <svg width="18" height="11" viewBox="0 0 18 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1.30469L9 10.3715L17 1.30469" stroke="#E5D6A0"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>

                                            </div>
                                        </div>
                                        <div class="companies_hidden_wrapper">
                                            <div class="companies_details_wrapper">
                                                <p class="companies_details_text">Устав</p>
                                                <div class="companies_details_svg">
                                                    @if($company->charter == null)
                                                        <label for="{{ $company->id."charter" }}">
                                                            <input type="file" hidden id="{{ $company->id."charter" }}"
                                                                   name="charter" data-id="{{ $company->id }}"
                                                                   data-type="charter">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17 9H1" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M9 1V17" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </label>
                                                    @else
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                    stroke-width="1.5"/>
                                                        </svg>
                                                    @endif
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg" class="hidden_verified_svg">
                                                        <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                stroke-width="1.5"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="companies_details_wrapper">
                                                <p class="companies_details_text">Выписка из ЕГРЮЛ</p>
                                                <div class="companies_details_svg">
                                                    @if($company->extract == null)
                                                        <label for="{{ $company->id."egryul" }}">
                                                            <input type="file" hidden id="{{ $company->id."egryul" }}"
                                                                   data-id="{{ $company->id }}" data-type="extract">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17 9H1" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M9 1V17" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </label>
                                                    @else
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                    stroke-width="1.5"/>
                                                        </svg>
                                                    @endif
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg" class="hidden_verified_svg">
                                                        <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                stroke-width="1.5"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="companies_details_wrapper">
                                                <p class="companies_details_text">Приказ о назначении</p>
                                                <div class="companies_details_svg">
                                                    @if($company->order_of_appointment == null)
                                                        <label for="{{ $company->id."appointment" }}">
                                                            <input type="file" hidden
                                                                   id="{{ $company->id."appointment" }}"
                                                                   data-id="{{ $company->id }}"
                                                                   data-type="order_of_appointment">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17 9H1" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M9 1V17" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </label>
                                                    @else
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                    stroke-width="1.5"/>
                                                        </svg>
                                                    @endif
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg" class="hidden_verified_svg">
                                                        <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                stroke-width="1.5"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="companies_details_wrapper">
                                                <p class="companies_details_text">Лист записи</p>
                                                <div class="companies_details_svg">
                                                    @if($company->record_sheet == null)
                                                        <label for="{{ $company->id."record_sheet" }}">
                                                            <input type="file" hidden
                                                                   id="{{ $company->id."record_sheet" }}"
                                                                   data-id="{{ $company->id }}"
                                                                   data-type="record_sheet">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17 9H1" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M9 1V17" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </label>
                                                    @else
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                    stroke-width="1.5"/>
                                                        </svg>
                                                    @endif
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg" class="hidden_verified_svg">
                                                        <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                stroke-width="1.5"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="companies_details_wrapper">
                                                <p class="companies_details_text">Бухгалтерский баланс</p>
                                                <div class="companies_details_svg">
                                                    @if($company->balance_sheet == null)
                                                        <label for="{{ $company->id."balance_sheet" }}">
                                                            <input type="file" hidden
                                                                   id="{{ $company->id."balance_sheet" }}"
                                                                   data-id="{{ $company->id }}"
                                                                   data-type="balance_sheet">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17 9H1" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M9 1V17" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </label>
                                                    @else
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                    stroke-width="1.5"/>
                                                        </svg>
                                                    @endif
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg" class="hidden_verified_svg">
                                                        <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                stroke-width="1.5"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="companies_details_wrapper">
                                                <p class="companies_details_text">Штатное расписание</p>
                                                <div class="companies_details_svg">
                                                    @if($company->staffing_table == null)
                                                        <label for="{{ $company->id."staffing_table" }}">
                                                            <input type="file" hidden
                                                                   id="{{ $company->id."staffing_table" }}"
                                                                   data-id="{{ $company->id }}"
                                                                   data-type="staffing_table">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17 9H1" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M9 1V17" stroke="#DADADA" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </label>
                                                    @else
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                    stroke-width="1.5"/>
                                                        </svg>
                                                    @endif
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg" class="hidden_verified_svg">
                                                        <path d="M7 13.6L9.46154 16L17.6667 8" stroke="#6DEC98"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <circle cx="12" cy="12" r="11.25" stroke="#6DEC98"
                                                                stroke-width="1.5"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="hidden_companies_div @if($errors->any()) open @endif" id="open_hidden_div2">
                    <form action="{{ route('company.store') }}" class="companies_items_second_wrapper" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="companies_personal_item">
                            <div class="companies_personal_items_images_wrapper">

                                <!--<div class="companies_personal_item_first_img">-->
                            <!--      <img src="{{asset('/website/images/peronsal_area_img2.png')}}" alt="">-->
                                <!--</div>-->
                                <div class="companies_personal_item_second_img">
                                    <img src="{{ asset('/website/images/avatardefault.svg') }}" alt="">
                                </div>
                                <div class="companies_personal_item_third_img">
                                    <img src="company_second_sign.png" alt="">
                                </div>
                                <label for="fileinput4" class="file_label_second">

                                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17"
                                            stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z"
                                            stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M29 21H21" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M25 17V25" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    <span class="file_span">Добавить логотип</span>
                                    <input type="file" id="fileinput4" hidden name="logo">
                                </label>
                            </div>
                        </div>
                        <div class="companies_inputs_wrapper_item">
                            <div class="companies_inputs_fields_wrapper">
                                <div class="inputs_field_wrapper">
                                    <input type="text" class="input_field" name="company_name"
                                           placeholder="Название компании">
                                    @if ($errors->has('company_name'))
                                        <div class="alert-error">
                                            {{$errors->first('company_name')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="inputs_field_wrapper">
                                    <input type="text" class="input_field" name="reg_date"
                                           placeholder="Дата регистрации">
                                    @if ($errors->has('reg_date'))
                                        <div class="alert-error">
                                            {{$errors->first('reg_date')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="inputs_field_wrapper">
                                    <input type="text" class="input_field" name="low_address"
                                           placeholder="Юридический адрес">
                                    @if ($errors->has('low_address'))
                                        <div class="alert-error">
                                            {{$errors->first('low_address')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="inputs_field_wrapper">
                                    <input type="text" class="input_field" name="dir_fullname"
                                           placeholder="ФИО руководителя">
                                    @if ($errors->has('dir_fullname'))
                                        <div class="alert-error">
                                            {{$errors->first('dir_fullname')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="inputs_field_wrapper">
                                    <input type="text" class="input_field" name="inn" placeholder="ИНН">
                                    @if ($errors->has('inn'))
                                        <div class="alert-error">
                                            {{$errors->first('inn')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="inputs_field_wrapper">
                                    <input type="text" class="input_field" name="ogrn" placeholder="ОГРН">
                                    @if ($errors->has('ogrn'))
                                        <div class="alert-error">
                                            {{$errors->first('ogrn')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="companies_btns_wrapper">
                                <button class="companies_first_btn personal_area_list " data-id="open_div1"
                                        type="button">Отмена
                                </button>
                                <button class="companies_second_btn" type="submit">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
</div>
<div id="role_modal" class="modal hide_modal">
    <div class="modal-content">
        <span class="close">×</span>
        <div class="service">
            <div class="service_items_wrapper">
{{--                @if(auth()->user()->status == 0)--}}
{{--                    <p class="main_nav_link">Вы не подтвердили номер телефона, подтвердите, что мы продолжаем</p>--}}
{{--                    <a href="{{ route('confirm_phone') }}" class="persoanl_area_link">подтвердить номер</a>--}}
{{--                @else--}}
                    <form action="{{ route('update-role.store') }}" method="post" class="service_item">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="role_id" type="hidden" value="1" "/>
                        <button class="service_item_link">Инвестор</button>
                    </form>
                    <form class="service_item" action="{{ route('update-role.store') }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="role_id" type="hidden" value="2"/>
                        <button class="service_item_link">Заемщик</button>
                    </form>
                <form class="service_item" action="{{ route('update-role.store') }}" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <input name="role_id" type="hidden" value="3"/>
                    <button class="service_item_link">Продавец</button>
                </form>
                <form class="service_item" action="{{ route('update-role.store') }}" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <input name="role_id" type="hidden" value="4"/>
                    <button class="service_item_link">Партнер</button>
                </form>
{{--                @endif--}}
            </div>
        </div>
    </div>
</div>


<div id="not_verify_email_modal" class="modal hide_modal">
    <div class="modal-content">
        <span class="close">×</span>
        <div class="service">
            <div class="service_items_wrapper">
                    <p class="service_items_wrapper_text">
                        На вашу почту былa отправленна ссылка для подтверждения
                    </p>

                    <p class="email_time_left">



                    </p>

                    <button style="display: none;" class="send_email_again">Отправить еще раз</button>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

<script src="../website/js/perosnal_area_second.js"></script>
<script src="../website/js/companies.js"></script>



@if (Auth::user()->is_verified_email == 0)

    <script>

        $('.not_verify_email').click(function (){
            $('.send_email_again').hide();
            $.ajax({
                url: "{{route('send_email_again')}}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    console.log(data);
                },
                cache: false
            })
            $('.send_email_again').on('click', function(){
                $.ajax({
                    url: "{{route('send_email_again')}}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: () => {
                        $(this).css('display', 'none')
                    },
                    success: (data) => {
                        console.log(data);
                    },
                    cache: false
                })
            })
        })
        setInterval(function(){
            $.ajax({
                url: "{{route('left_time_for_verify_email')}}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    if(data.timer === 'true') {
                        $('.send_email_again').hide().removeClass('open')
                        $('.email_time_left').html(data.message)
                    } else {
                        $('.email_time_left').html('');
                        if (!$('.send_email_again').hasClass('open')) {
                            $('.send_email_again').show().addClass('open')
                        }
                    }
                },
                cache: false
            })
        }, 1000);



    </script>

@endif

@include('include.footer')









