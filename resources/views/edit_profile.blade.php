@include('include.header')

    <link rel="stylesheet" href="../website/css/edit_profile.css">
{{--    <link rel="stylesheet" href="../website/css/second_header.css">--}}


@if(session()->has('success'))

  <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>{{ session()->get('success') }}</p>
      </div>
  </div>

@elseif($errors->any())
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach

      </div>
  </div>
@endif
    <main>
        <section class="personal_area">
            <div class="personal_area_wrapper">
                <div class="personal_title_nav_wrapper">
                    <h1 class="personal_are_title">Редактирование профиля</h1>
                    <div class="personal_area_mobile_nav_wrapper">
                        <div class="mobile_personal_area_box">
                            <div class="personal_area_mobile_svg">
                                <svg width="28" height="4" viewBox="0 0 28 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="#E5D6A0"/>
                                    <circle cx="14" cy="2" r="2" fill="#E5D6A0"/>
                                    <circle cx="26" cy="2" r="2" fill="#E5D6A0"/>
                                </svg>

                            </div>
                        </div>
                        <div class="personal_mobile_nav_list_wrapper">
                            <div class="personal_title_nav_wrapper">
                                <h1 class="personal_are_title">Иванов <br> Иван Иванович</h1>
                                <div class="mobile_personal_area_box second_box">
                                    <div class="personal_area_mobile_svg">
                                        <svg width="28" height="4" viewBox="0 0 28 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="2" cy="2" r="2" fill="#E5D6A0"/>
                                            <circle cx="14" cy="2" r="2" fill="#E5D6A0"/>
                                            <circle cx="26" cy="2" r="2" fill="#E5D6A0"/>
                                        </svg>

                                    </div>
                                </div>
                            </div>

                            <nav class="mobile_personal_area_main_nav">
                                <ul class="personal_area_list_wrapper">
                                    <li class="personal_area_list">
                                        <a href="/profile" class="mobile_persoanl_area_link">Общая информация</a>
                                    </li>
                                    <div class="perosnal_line"></div>
                                    <li class="personal_area_list">
                                        <a href="" class="mobile_persoanl_area_link">Закладки</a>
                                    </li>
                                    <div class="perosnal_line"></div>
                                    <li class="personal_area_list">
                                        <a href="" class="mobile_persoanl_area_link">FAQ</a>
                                    </li>
                                    <div class="perosnal_line"></div>
                                    <li class="personal_area_list">
                                        <a href="" class="mobile_persoanl_area_link">Категории бизнеса</a>
                                    </li>
                                    <div class="perosnal_line"></div>
                                    <li class="personal_area_list">
                                        <a href="" class="mobile_persoanl_area_link">Баланс</a>
                                    </li>
                                    <div class="perosnal_line"></div>
                                    <li class="personal_area_list">
                                        <a href="" class="mobile_persoanl_area_link">Пользовательское соглашение</a>
                                    </li>
                                    <div class="perosnal_line"></div>
                                    <li class="personal_area_list">
                                        <a href="" class="mobile_persoanl_area_link">Информация о площадке</a>
                                    </li>
                                    <div class="perosnal_line"></div>
                                    <li class="personal_area_list">
                                        <a href="" class="mobile_persoanl_area_link">Уставные документы</a>
                                    </li>
                                    <div class="perosnal_line"></div>
                                    <li class="personal_area_list">
                                        <a href="/logout" style="text-decoration: none;" class="mobile_personal_area_list_btn">Выйти из профиля</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
                <nav class="personal_area_main_nav">
                    <ul class="personal_area_list_wrapper">
                        <li class="personal_area_list">
                            <a href="/profile" class="persoanl_area_link">Общая информация</a>
                        </li>
                        <li class="personal_area_list">
                            <a href="" class="persoanl_area_link">Закладки</a>
                        </li>
                        <li class="personal_area_list">
                            <a href="" class="persoanl_area_link">FAQ</a>
                        </li>
                        <li class="personal_area_list">
                            <a href="" class="persoanl_area_link">Категории бизнеса</a>
                        </li>
                        <li class="personal_area_list">
                            <a href="" class="persoanl_area_link">Баланс</a>
                        </li>
                        <li class="personal_area_list">
                            <a href="" class="persoanl_area_link">Пользовательское соглашение</a>
                        </li>
                        <li class="personal_area_list">
                            <a href="" class="persoanl_area_link">Информация о площадке</a>
                        </li>
                        <li class="personal_area_list">
                            <a href="" class="persoanl_area_link">Уставные документы</a>
                        </li>
                        <li class="personal_area_list">
                            <a href='/logout' style="text-decoration: none;" class="personal_area_list_btn">Выйти</a>
                        </li>
                    </ul>
                </nav>
                <div class="persoanl_area_image_info_btns_wrapper">
                    <div class="personal_area_image_link_wrapper">
                        <div class="personal_area_images_wrapper">
                            <div class="personal_area_img1">
                                <img src="{{asset('/website/images/peronsal_area_img2.png')}}" alt="">
                            </div>
                            <div class="personal_area_img2">
                                    @if(isset($profil->profil_photo))
                                        <img src="{{ 'storage/' . $profil->profil_photo }}" alt="">
                                    @else
                                        <img src="{{ asset('website/images/personal_img.png') }}" alt="">
                                    @endif
                            </div>
                            <div class="personal_area_img3">
                                <img src="{{asset('/website/images/second_item.png')}}" alt="">
                            </div>
                        </div>
                        <div class="write_us_form_inputs_field">
                            <label for="fileinput" class=" write_us_input file_label">

                                <svg width="31" height="27" viewBox="0 0 31 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M29 21H21" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M25 17V25" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="file_span">Изменить фото</span>

                            </label>
                        </div>
                    </div>
                    <form action="{{ route('profile-update')}}" class="personal_area_form_wrapper" enctype="multipart/form-data" method="post">
                        @csrf
                        <input type="file" id="fileinput" hidden name="profil_photo" onchange="readURL(this);">
                        <div class="personal_area_form_inputs_wrapper">
                            <div class="personal_area_form_input">
                                <input type="text" placeholder="ФИО" class="persons_area_input" name="name_surname" value="{{Auth::user()->fullname}}">
                            </div>
                            <div class="personal_area_form_input">
                                <input type="text" placeholder="телефон" class="persons_area_input" name="phone" value="{{strlen(Auth::user()->phone) > 3 ? Auth::user()->phone : ''}}">
                            </div>
                            <div class="personal_area_form_input">
                                <input type="text" placeholder="e-mail" class="persons_area_input" name="email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="personal_area_form_input second_area_input">
                                <input type="text" placeholder="Паспорт (серия, номер)" class="persons_area_input special_input" name="passport_number" value="@isset( $profil->passport_number ) {{ $profil->passport_number }} @endisset">

                                <div class="personal_area_file_input_second">
                                    <label >

                                        <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                        <input type="file" hidden name="passport_photo">

                                    </label>
                                </div>
                            </div>
                            <div class="personal_area_form_input second_area_input">

                                <input type="text" placeholder="СНИЛС" class="persons_area_input special_input" name="snils" value="@isset( $profil->snils ) {{ $profil->snils }} @endisset">
                                <div class="personal_area_file_input_second">
                                    <label for="four_fileinput">
                                        <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <input type="file" id="four_fileinput" hidden name="snils_photo">
                                    </label>
                                </div>
                            </div>

                            <div class="personal_area_form_input_type_file">
                                <label for="second_fileinput" class=" write_us_input_second file_label">

                                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                    <span class="file_span_second">Селфи с паспортом</span>
                                    <input type="file" id="second_fileinput" hidden name="selfi_pasport">
                                </label>
                            </div>
                        </div>
                        <div class="personal_area_form_btns_wrapper">
                            <button class="personal_area_form_btn first_area_btn" type="reset">Отмена</button>
                            <button class="personal_area_form_btn" type="submit">Сохранить</button>
                        </div>
                    </form>

                </div>

            </div>
        </section>
    </main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('/website/js/personal.js')}}"></script>




@include('include.footer')


