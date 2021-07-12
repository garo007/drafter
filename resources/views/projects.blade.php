@include('include.header')
<main>

    <section class="top">
        <div class="header_second_part ">
            <div class="header_second_wrapper">
                <nav class="header_second_nav_list">
                    <ul class="second_nav_ul_list">
                        <li class="second_nav_ul_li">
                            <a href="#" class="second_nav_link">Инвестор</a>
                        </li>
                        <li class="second_nav_ul_li">
                            <a href="#" class="second_nav_link">Заемщик</a>
                        </li>
                        <li class="second_nav_ul_li">
                            <a href="#" class="second_nav_link">Продавец</a>
                        </li>
                        <li class="second_nav_ul_li">
                            <a href="#" class="second_nav_link">Партнер</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="top_wrapper">
            <div class="top_items_wrapper">
                <div class="top_item first_top_item">
                    <div class="top_info_wrapper">
                        <!-- Slider main container -->
                    </div>
                    <form class="top_search_form_wrapper" action="{{ route('search') }}" method="get">
                        <div class='top_link_wrapper2'>
                            <button class="top_link"><a href="{{ route('add.chooseType') }}">Разместить объявление</a>
                            </button>
                        </div>
                        <div class="top_search_input_svg_wrapper">
                            <div class="top_search_svg">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.3636 3C8.90722 3 7.48354 3.43187 6.2726 4.24099C5.06167 5.05011 4.11786 6.20015 3.56052 7.54567C3.00319 8.89119 2.85737 10.3718 3.14149 11.8002C3.42562 13.2286 4.12693 14.5406 5.15675 15.5704C6.18657 16.6003 7.49863 17.3016 8.92703 17.5857C10.3554 17.8698 11.836 17.724 13.1815 17.1667C14.527 16.6093 15.6771 15.6655 16.4862 14.4546C17.2953 13.2437 17.7272 11.82 17.7272 10.3636C17.7271 8.41069 16.9512 6.5378 15.5703 5.15688C14.1894 3.77597 12.3165 3.00012 10.3636 3V3Z"
                                        stroke="#D2BE8B" stroke-width="2" stroke-miterlimit="10"/>
                                    <path d="M15.8574 15.8574L21.0001 21.0001" stroke="#D2BE8B" stroke-width="2"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="top_search_input">
                                <input type="text" placeholder="Найти проект" class="top_search_input"
                                       name="search" value="{{ old('search') }}" required>
                            </div>
                            <div class="close_svg">
                                <a href="/">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" width="16" height="16" x="0" y="0" viewBox="0 0 329.26933 329"
                                         style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                           <g>
                               <path xmlns="http://www.w3.org/2000/svg"
                                     d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"
                                     fill="#e5d6a0" data-original="#000000" style="" class=""/>
                           </g>
                        </svg>
                                </a>
                            </div>
                        </div>
                        <button class="top_search_form_btn" type="submit">Найти</button>
                    </form>
                </div>
            </div>
            <div class="for_line">
                <div class="line"></div>
            </div>
    </section>
    <section class="completed_projects">
        <div class="completed_projects_wrapper">
            <!-- Desctop actions filters START-->
            <div class="completed_projects_title_select_wrapper desctop">
                <h1 class="completed_projects_title">Объявления</h1>
                <div class="complected_projects_btns_select_wrapper">
                    <div class="complected_projects_bnts_main_parent">
                        <div class="completed_projects_btn1 active_bt">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="31" height="31" stroke="#E5D6A0"/>

                                <rect class='btn1_black' x="7.5" y="7.5" width="17" height="3" rx="0.5"
                                      stroke="#E5D6A0"/>
                                <rect class='btn1_black' x="7.5" y="14.5" width="17" height="3" rx="0.5"
                                      stroke="#E5D6A0"/>
                                <rect class='btn1_black' x="7.5" y="21.5" width="17" height="3" rx="0.5"
                                      stroke="#E5D6A0"/>
                            </svg>
                        </div>
                        <div class="completed_projects_btn2">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="31" height="31" stroke="#E5D6A0"/>
                                <rect class='btn2_black' x="7.5" y="7.5" width="7" height="7" rx="0.5"
                                      stroke="#E5D6A0"/>
                                <rect class='btn2_black' x="7.5" y="17.5" width="7" height="7" rx="0.5"
                                      stroke="#E5D6A0"/>
                                <rect class='btn2_black' x="17.5" y="7.5" width="7" height="7" rx="0.5"
                                      stroke="#E5D6A0"/>
                                <rect class='btn2_black' x="17.5" y="17.5" width="7" height="7" rx="0.5"
                                      stroke="#E5D6A0"/>
                            </svg>
                        </div>
                    </div>
                    <div class="completed_projects_select_wrapper">
                        <div class="completed_projects_title_svg_wrapper">
                            <div class="dropdown">
                                <p class="completed_projects_name ">Сначала новые</p>
                                <div class="completed_projects_info_wrapper dropdown-content">
                                    <ul>
                                        <li class="completed_projects_info active">
                                            <a href="" class="completed_projects_info_link">Сначала новые</a>
                                            <div class="completed_projects_select_line">
                                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                          fill="#e5d6a0"/>
                                                </svg>
                                            </div>
                                        </li>
                                        <li class="completed_projects_info">
                                            <a href="" class="completed_projects_info_link">Сначала дешевые</a>
                                            <div class="completed_projects_select_line">
                                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                          fill="#e5d6a0"/>
                                                </svg>
                                            </div>
                                        </li>
                                        <li class="completed_projects_info">
                                            <a href="" class="completed_projects_info_link">Сначала дорогие</a>
                                            <div class="completed_projects_select_line">
                                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                          fill="#e5d6a0"/>
                                                </svg>
                                            </div>
                                        </li>
                                        <li class="completed_projects_info">
                                            <a href="" class="completed_projects_info_link">Сначала с высоким
                                                рейтингом</a>
                                            <div class="completed_projects_select_line">
                                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                          fill="#e5d6a0"/>
                                                </svg>
                                            </div>
                                        </li>
                                        <li class="completed_projects_info">
                                            <a href="" class="completed_projects_info_link">Сначала с высоким
                                                процентом</a>
                                            <div class="completed_projects_select_line">
                                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                          fill="#e5d6a0"/>
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="completed_projects_select_line selected">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 0.5L5 4.5L9 0.5" stroke="#6E7C87"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class=" open_filter_block">
                   <div class="open_filter_block_wrapper">
                       <p class="completed_projects_name">Фильтры</p>
                       <div class="completed_projects_select_line">
                           <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                               <path d="M1 0.5L5 4.5L9 0.5" stroke="#6E7C87"/>
                           </svg>
                       </div>
                   </div>
                   </div> -->
            </div>
            <!-- Desctop actions filters  END-->
            <div class="completed_projects_items_wrapper special_completed_project_second">
                <div action="" method="get" id="cat_form">
                    <div class="completed_project_first_item">
                        <div class="completed_project_first_item_child">
                            <div class="banner_add_svg_angle angle1">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 41V1H41" stroke="#E5D6A0" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="banner_add_svg_angle angle2">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 41V1H0" stroke="#E5D6A0" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="banner_add_svg_angle angle3">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 0V40H41" stroke="#E5D6A0" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="banner_add_svg_angle angle4">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 0V40H0" stroke="#E5D6A0" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="completed_project_item_title_svg_wrapper">
                                <p class="first_item_title">Фильтры</p>
                                <div class="first_item_svg">
                                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L9 9L17 1" stroke="#F0F0F0" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="completed_project_filter_inputs_btns_wrapper">
                                <div class="filter_of_catagories_wrapper">
                                    <p class="filter_of_catagories_wrapper_title">Категория</p>
                                    <div class="filter_of_catagories_wrapper_check_inputs">
                                        @foreach($categories as $category)
                                            <div class="check_input_wrapper">
                                                <span class="filter_input_span">{{ $category->name }}</span>
                                                <input type="checkbox" value="{{ $category->id }}" name="category[]"
                                                       class="filter_input"
                                                       data-id="{{ $category->id }}" hidden
                                                       id="{{ $category->id."filter_input" }}">
                                                <label class="filter_input_label"
                                                       for="{{ $category->id."filter_input" }}"></label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="filter_inputs_btns_wrapper">
                                    <button class="filter_btn1" type="button">Очистить</button>
                                    <button class="filter_btn2" id="cat_btn">Применить</button>
                                </div>
                            </div>
                        </div>

                        <div class="completed_project_first_item_second_child">
                            <div class="banner_add_div first_banner_add">
                                <div class="banner_add_svg_angle first_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 41V1H41" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_svg_angle second_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40 41V1H0" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_svg_angle third_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 0V40H41" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_svg_angle fours_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40 0V40H0" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_div_img">
                                    <img src="website/images/b.png" alt="">
                                </div>
                                <div class="banner_add_div_info">
                                    <p class="banner_add_div_info_title">Спортмастер</p>
                                    <p class="banner_add_div_info_num">8 200 000 ₽</p>
                                    <div class="banner_add_info_hidden_div">
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 7.25C6.82843 7.25 7.5 6.57843 7.5 5.75C7.5 4.92157 6.82843 4.25 6 4.25C5.17157 4.25 4.5 4.92157 4.5 5.75C4.5 6.57843 5.17157 7.25 6 7.25Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M10.0464 7.51786C8.52902 10.8929 6 14.75 6 14.75C6 14.75 3.47098 10.8929 1.95357 7.51786C0.436157 4.14286 2.96518 1.25 6 1.25C9.03482 1.25 11.5638 4.14286 10.0464 7.51786Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">Москва</p>
                                        </div>
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.3 3.66667H10.7M5.3 3.66667H2.6C2.24196 3.66667 1.89858 3.80714 1.64541 4.05719C1.39223 4.30724 1.25 4.64638 1.25 5V11.6667C1.25 12.0203 1.39223 12.3594 1.64541 12.6095C1.89858 12.8595 2.24196 13 2.6 13H13.4C13.758 13 14.1014 12.8595 14.3546 12.6095C14.6078 12.3594 14.75 12.0203 14.75 11.6667V5C14.75 4.64638 14.6078 4.30724 14.3546 4.05719C14.1014 3.80714 13.758 3.66667 13.4 3.66667H10.7H5.3ZM5.3 3.66667V1.4C5.3 1.29391 5.34267 1.19217 5.41862 1.11716C5.49457 1.04214 5.59759 1 5.705 1H10.295C10.4024 1 10.5054 1.04214 10.5814 1.11716C10.6573 1.19217 10.7 1.29391 10.7 1.4V3.66667H5.3Z"
                                                        stroke="#9B8E6C" stroke-width="1.5"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">Торговля</p>
                                        </div>
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="6" stroke="#9B8E6C" stroke-width="1.5"/>
                                                    <path
                                                        d="M6.375 9.375L8.15993 11.4574C8.38589 11.721 8.80513 11.6798 8.97535 11.3772L12 6"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">Действующий</p>
                                        </div>
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 10.5C9.82843 10.5 10.5 9.82843 10.5 9C10.5 8.17157 9.82843 7.5 9 7.5C8.17157 7.5 7.5 8.17157 7.5 9C7.5 9.82843 8.17157 10.5 9 10.5Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M2.25 5.51786C2.25 5.14845 2.39223 4.79417 2.64541 4.53296C2.89858 4.27175 3.24196 4.125 3.6 4.125H14.4C14.758 4.125 15.1014 4.27175 15.3546 4.53296C15.6078 4.79417 15.75 5.14845 15.75 5.51786V12.4821C15.75 12.8516 15.6078 13.2058 15.3546 13.467C15.1014 13.7283 14.758 13.875 14.4 13.875H3.6C3.24196 13.875 2.89858 13.7283 2.64541 13.467C2.39223 13.2058 2.25 12.8516 2.25 12.4821V5.51786Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M2.25 7.125C2.96608 7.125 3.65284 6.80893 4.15919 6.24632C4.66554 5.68371 4.95 4.92065 4.95 4.125"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M15.4531 7.125C14.737 7.125 14.0503 6.80893 13.5439 6.24632C13.0376 5.68371 12.7531 4.92065 12.7531 4.125"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M13.0469 13.875C13.0469 13.0794 13.3313 12.3163 13.8377 11.7537C14.344 11.1911 15.0308 10.875 15.7469 10.875"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M5.25 13.875C5.25 13.0794 4.96554 12.3163 4.45919 11.7537C3.95284 11.1911 3.26608 10.875 2.55 10.875"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">140 000 ₽/мес</p>
                                        </div>
                                        <div class="small_item_show_more_text_wrapper">
                                            <p class="small_item_show_more_text second_show">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempo... incididunt ut labore et dolore magna...
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua
                                            </p>
                                            <button class="read_more_btn">Читать полностью</button>
                                        </div>
                                    </div>
                                    <a href="" class="banner_add_div_info_btn desktop_btn_second">Открыть объявление</a>
                                    <a href="" class="banner_add_div_info_btn hidden_btn_second">Открыть</a>
                                </div>
                            </div>
                            <div class="banner_add_div second_banner_add open">
                                <div class="banner_add_svg_angle first_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 41V1H41" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_svg_angle second_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40 41V1H0" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_svg_angle third_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 0V40H41" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_svg_angle fours_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40 0V40H0" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_div_img">
                                    <img src="website/images/b.png" alt="">
                                </div>
                                <div class="banner_add_div_info">
                                    <p class="banner_add_div_info_title">Спортмастер</p>
                                    <p class="banner_add_div_info_num">8 200 000 ₽</p>
                                    <div class="banner_add_info_hidden_div">
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 7.25C6.82843 7.25 7.5 6.57843 7.5 5.75C7.5 4.92157 6.82843 4.25 6 4.25C5.17157 4.25 4.5 4.92157 4.5 5.75C4.5 6.57843 5.17157 7.25 6 7.25Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M10.0464 7.51786C8.52902 10.8929 6 14.75 6 14.75C6 14.75 3.47098 10.8929 1.95357 7.51786C0.436157 4.14286 2.96518 1.25 6 1.25C9.03482 1.25 11.5638 4.14286 10.0464 7.51786Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">Москва</p>
                                        </div>
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.3 3.66667H10.7M5.3 3.66667H2.6C2.24196 3.66667 1.89858 3.80714 1.64541 4.05719C1.39223 4.30724 1.25 4.64638 1.25 5V11.6667C1.25 12.0203 1.39223 12.3594 1.64541 12.6095C1.89858 12.8595 2.24196 13 2.6 13H13.4C13.758 13 14.1014 12.8595 14.3546 12.6095C14.6078 12.3594 14.75 12.0203 14.75 11.6667V5C14.75 4.64638 14.6078 4.30724 14.3546 4.05719C14.1014 3.80714 13.758 3.66667 13.4 3.66667H10.7H5.3ZM5.3 3.66667V1.4C5.3 1.29391 5.34267 1.19217 5.41862 1.11716C5.49457 1.04214 5.59759 1 5.705 1H10.295C10.4024 1 10.5054 1.04214 10.5814 1.11716C10.6573 1.19217 10.7 1.29391 10.7 1.4V3.66667H5.3Z"
                                                        stroke="#9B8E6C" stroke-width="1.5"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">Торговля</p>
                                        </div>
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="6" stroke="#9B8E6C" stroke-width="1.5"/>
                                                    <path
                                                        d="M6.375 9.375L8.15993 11.4574C8.38589 11.721 8.80513 11.6798 8.97535 11.3772L12 6"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">Действующий</p>
                                        </div>
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 10.5C9.82843 10.5 10.5 9.82843 10.5 9C10.5 8.17157 9.82843 7.5 9 7.5C8.17157 7.5 7.5 8.17157 7.5 9C7.5 9.82843 8.17157 10.5 9 10.5Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M2.25 5.51786C2.25 5.14845 2.39223 4.79417 2.64541 4.53296C2.89858 4.27175 3.24196 4.125 3.6 4.125H14.4C14.758 4.125 15.1014 4.27175 15.3546 4.53296C15.6078 4.79417 15.75 5.14845 15.75 5.51786V12.4821C15.75 12.8516 15.6078 13.2058 15.3546 13.467C15.1014 13.7283 14.758 13.875 14.4 13.875H3.6C3.24196 13.875 2.89858 13.7283 2.64541 13.467C2.39223 13.2058 2.25 12.8516 2.25 12.4821V5.51786Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M2.25 7.125C2.96608 7.125 3.65284 6.80893 4.15919 6.24632C4.66554 5.68371 4.95 4.92065 4.95 4.125"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M15.4531 7.125C14.737 7.125 14.0503 6.80893 13.5439 6.24632C13.0376 5.68371 12.7531 4.92065 12.7531 4.125"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M13.0469 13.875C13.0469 13.0794 13.3313 12.3163 13.8377 11.7537C14.344 11.1911 15.0308 10.875 15.7469 10.875"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M5.25 13.875C5.25 13.0794 4.96554 12.3163 4.45919 11.7537C3.95284 11.1911 3.26608 10.875 2.55 10.875"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">140 000 ₽/мес</p>
                                        </div>
                                        <div class="small_item_show_more_text_wrapper">
                                            <p class="small_item_show_more_text second_show">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor... incididunt ut labore et dolore magna...
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua
                                            </p>
                                            <button class="read_more_btn">Читать полностью</button>
                                        </div>
                                    </div>
                                    <a href="" class="banner_add_div_info_btn desktop_btn_second">Открыть объявление</a>
                                    <a href="" class="banner_add_div_info_btn hidden_btn_second">Открыть</a>
                                </div>
                            </div>
                            <div class="banner_add_div  hidden_banner_add">
                                <div class="banner_add_svg_angle first_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 41V1H41" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_svg_angle second_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40 41V1H0" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_svg_angle third_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 0V40H41" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_svg_angle fours_angle">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40 0V40H0" stroke="#E5D6A0" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="banner_add_div_img">
                                    <img src="website/images/b.png" alt="">
                                </div>
                                <div class="banner_add_div_info">
                                    <p class="banner_add_div_info_title">Спортмастер</p>
                                    <p class="banner_add_div_info_num">8 200 000 ₽</p>
                                    <div class="banner_add_info_hidden_div">
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 7.25C6.82843 7.25 7.5 6.57843 7.5 5.75C7.5 4.92157 6.82843 4.25 6 4.25C5.17157 4.25 4.5 4.92157 4.5 5.75C4.5 6.57843 5.17157 7.25 6 7.25Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M10.0464 7.51786C8.52902 10.8929 6 14.75 6 14.75C6 14.75 3.47098 10.8929 1.95357 7.51786C0.436157 4.14286 2.96518 1.25 6 1.25C9.03482 1.25 11.5638 4.14286 10.0464 7.51786Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">Москва</p>
                                        </div>
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.3 3.66667H10.7M5.3 3.66667H2.6C2.24196 3.66667 1.89858 3.80714 1.64541 4.05719C1.39223 4.30724 1.25 4.64638 1.25 5V11.6667C1.25 12.0203 1.39223 12.3594 1.64541 12.6095C1.89858 12.8595 2.24196 13 2.6 13H13.4C13.758 13 14.1014 12.8595 14.3546 12.6095C14.6078 12.3594 14.75 12.0203 14.75 11.6667V5C14.75 4.64638 14.6078 4.30724 14.3546 4.05719C14.1014 3.80714 13.758 3.66667 13.4 3.66667H10.7H5.3ZM5.3 3.66667V1.4C5.3 1.29391 5.34267 1.19217 5.41862 1.11716C5.49457 1.04214 5.59759 1 5.705 1H10.295C10.4024 1 10.5054 1.04214 10.5814 1.11716C10.6573 1.19217 10.7 1.29391 10.7 1.4V3.66667H5.3Z"
                                                        stroke="#9B8E6C" stroke-width="1.5"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">Торговля</p>
                                        </div>
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="6" stroke="#9B8E6C" stroke-width="1.5"/>
                                                    <path
                                                        d="M6.375 9.375L8.15993 11.4574C8.38589 11.721 8.80513 11.6798 8.97535 11.3772L12 6"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">Действующий</p>
                                        </div>
                                        <div class="banner_add_info_details">
                                            <div class="banner_add_info_details_svg">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 10.5C9.82843 10.5 10.5 9.82843 10.5 9C10.5 8.17157 9.82843 7.5 9 7.5C8.17157 7.5 7.5 8.17157 7.5 9C7.5 9.82843 8.17157 10.5 9 10.5Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M2.25 5.51786C2.25 5.14845 2.39223 4.79417 2.64541 4.53296C2.89858 4.27175 3.24196 4.125 3.6 4.125H14.4C14.758 4.125 15.1014 4.27175 15.3546 4.53296C15.6078 4.79417 15.75 5.14845 15.75 5.51786V12.4821C15.75 12.8516 15.6078 13.2058 15.3546 13.467C15.1014 13.7283 14.758 13.875 14.4 13.875H3.6C3.24196 13.875 2.89858 13.7283 2.64541 13.467C2.39223 13.2058 2.25 12.8516 2.25 12.4821V5.51786Z"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M2.25 7.125C2.96608 7.125 3.65284 6.80893 4.15919 6.24632C4.66554 5.68371 4.95 4.92065 4.95 4.125"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M15.4531 7.125C14.737 7.125 14.0503 6.80893 13.5439 6.24632C13.0376 5.68371 12.7531 4.92065 12.7531 4.125"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M13.0469 13.875C13.0469 13.0794 13.3313 12.3163 13.8377 11.7537C14.344 11.1911 15.0308 10.875 15.7469 10.875"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M5.25 13.875C5.25 13.0794 4.96554 12.3163 4.45919 11.7537C3.95284 11.1911 3.26608 10.875 2.55 10.875"
                                                        stroke="#9B8E6C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <p class="banner_add_info_details_title">140 000 ₽/мес</p>
                                        </div>
                                        <div class="small_item_show_more_text_wrapper">
                                            <p class="small_item_show_more_text second_show">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor... incididunt ut labore et dolore magna...
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua
                                            </p>
                                            <button class="read_more_btn">Читать полностью</button>
                                        </div>
                                    </div>
                                    <a href="" class="banner_add_div_info_btn desktop_btn_second">Открыть объявление</a>
                                    <a href="" class="banner_add_div_info_btn hidden_btn_second">Открыть</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MObile actions filters -->
                    <div class="mobile_title_selects">
                        <h1 class="completed_projects_title">Объявления</h1>
                        <div class="completed_projects_title_select_wrapper ">
                            <div class="completed_projects_select_wrapper">
                                <div class="completed_projects_title_svg_wrapper">
                                    <div class="dropdown">
                                        <p class="completed_projects_name ">По релевантности</p>
                                        <div class="completed_projects_info_wrapper dropdown-content">
                                            <ul>
                                                <li class="completed_projects_info active">
                                                    <a href="" class="completed_projects_info_link">Сначала новые</a>
                                                    <div class="completed_projects_select_line">
                                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                                  fill="#e5d6a0"/>
                                                        </svg>
                                                    </div>
                                                </li>
                                                <li class="completed_projects_info">
                                                    <a href="" class="completed_projects_info_link">Сначала дешевые</a>
                                                    <div class="completed_projects_select_line">
                                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                                  fill="#e5d6a0"/>
                                                        </svg>
                                                    </div>
                                                </li>
                                                <li class="completed_projects_info">
                                                    <a href="" class="completed_projects_info_link">Сначала дорогие</a>
                                                    <div class="completed_projects_select_line">
                                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                                  fill="#e5d6a0"/>
                                                        </svg>
                                                    </div>
                                                </li>
                                                <li class="completed_projects_info">
                                                    <a href="" class="completed_projects_info_link">Сначала с высоким
                                                        рейтингом</a>
                                                    <div class="completed_projects_select_line">
                                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                                  fill="#e5d6a0"/>
                                                        </svg>
                                                    </div>
                                                </li>
                                                <li class="completed_projects_info">
                                                    <a href="" class="completed_projects_info_link">Сначала с высоким
                                                        процентом</a>
                                                    <div class="completed_projects_select_line">
                                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                                  fill="#e5d6a0"/>
                                                        </svg>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="completed_projects_select_line selected">
                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                  fill="#e5d6a0"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="complected_projects_btns_select_wrapper">
                                <div class="complected_projects_bnts_main_parent">
                                    <div class="completed_projects_btn1 active_bt">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="31" height="31" stroke="#E5D6A0"/>
                                            <rect class='btn1_black' x="7.5" y="7.5" width="17" height="3" rx="0.5"
                                                  stroke="#E5D6A0"/>
                                            <rect class='btn1_black' x="7.5" y="14.5" width="17" height="3" rx="0.5"
                                                  stroke="#E5D6A0"/>
                                            <rect class='btn1_black' x="7.5" y="21.5" width="17" height="3" rx="0.5"
                                                  stroke="#E5D6A0"/>
                                        </svg>
                                    </div>
                                    <div class="completed_projects_btn2">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="31" height="31" stroke="#E5D6A0"/>
                                            <rect class='btn2_black' x="7.5" y="7.5" width="7" height="7" rx="0.5"
                                                  stroke="#E5D6A0"/>
                                            <rect class='btn2_black' x="7.5" y="17.5" width="7" height="7" rx="0.5"
                                                  stroke="#E5D6A0"/>
                                            <rect class='btn2_black' x="17.5" y="7.5" width="7" height="7" rx="0.5"
                                                  stroke="#E5D6A0"/>
                                            <rect class='btn2_black' x="17.5" y="17.5" width="7" height="7" rx="0.5"
                                                  stroke="#E5D6A0"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="filter_btns">
                                    <p class="filter_btn_info">Фильтры</p>
                                    <button class="filter_btn_svg">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.94531 3.70068H20.0545C20.1998 3.70068 20.342 3.74289 20.4637 3.82217C20.5855 3.90145 20.6816 4.01439 20.7404 4.14727C20.7992 4.28015 20.8181 4.42724 20.7948 4.57066C20.7716 4.71409 20.7072 4.84768 20.6094 4.95519L14.4449 11.7361C14.3194 11.8742 14.2499 12.0541 14.2499 12.2406V17.5493C14.2499 17.6728 14.2194 17.7943 14.1612 17.9032C14.1029 18.0121 14.0187 18.1048 13.9159 18.1733L10.9159 20.1733C10.803 20.2486 10.6717 20.2919 10.5361 20.2984C10.4005 20.305 10.2657 20.2746 10.146 20.2106C10.0263 20.1465 9.92626 20.0512 9.8565 19.9347C9.78674 19.8182 9.7499 19.685 9.7499 19.5493V12.2406C9.7499 12.0541 9.68036 11.8742 9.55485 11.7361L3.39036 4.95519C3.29262 4.84768 3.22822 4.71409 3.20497 4.57066C3.18173 4.42724 3.20065 4.28015 3.25943 4.14727C3.31821 4.01439 3.41432 3.90145 3.53608 3.82217C3.65785 3.74289 3.80001 3.70068 3.94531 3.70068V3.70068Z"
                                                stroke="#DADADA" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!-- <div class=" open_filter_block">
                               <div class="open_filter_block_wrapper">
                                   <p class="completed_projects_name">Фильтры</p>
                                   <div class="completed_projects_select_line">
                                       <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                           <path d="M1 0.5L5 4.5L9 0.5" stroke="#6E7C87"/>
                                       </svg>
                                   </div>
                               </div>
                               </div> -->
                        </div>
                    </div>
                    <!-- MObile actions filters END -->
                </div>

                <div class="completed_project_second_item first_variant">
                    <!-- Business cart End-->
                    @foreach($results as $result)
                    @if(array_key_exists('name',$result))

                        <div class="completed_project_small_item">

                            <div class="completed_project_img_info_wrapper">
                                <div class="completed_project_small_item_images_wrapper">
                                    <!-- Swiper Start -->
                                    <div class="swiper-container second_item_swiper_container">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            @foreach($images as $image)
                                                @if($image['add_id'] == $result['id'] && $image['add_type'] == 'business')
                                                    <div class="swiper-slide">
                                                        <img class="adds_logo" src="/website/images/logo_adds.png"
                                                             alt="">
                                                        <img class="first_img"
                                                             src={{ asset('/storage/business_gallery\\').$image->name }} alt="">
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <!-- If we need scrollbar -->
                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>

                                    </div>
                                    <!-- Swiper End -->
                                </div>
                                <div class="completed_project_info_wrapper">
                                    <div class="completed_project_info_title_link_wrapper">
                                        <h1 class="completed_project_info_title">{{ $result['name'] }}</h1>
                                        <a href="{{ route('business.single',['name'=>'business' ,'id'=>$result['id'],'user_id'=>$result['user_id'] ]) }}"
                                           class="completed_project_link hidden_desktop_div">
                                            Связаться с продавцом
                                        </a>
                                    </div>
                                    <div class="completed_project_price_info_wrapper">
                                        <p class="completed_project_price_info_title">Цена:</p>
                                        <div class="completed_project_price_info_num_svg_wrapper">
                                            <p class="completed_project_price_info_number">{{ number_format($result['price'], 0, ',', ' ') }}
                                                ₽</p>
                                            <div class="completed_project_price_info_svg hidden_desktop_div">
                                                <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M28.3346 31L15.0013 22.6667L1.66797 31V4.33333C1.66797 3.44928 2.06933 2.60143 2.78375 1.97631C3.49818 1.35119 4.46714 1 5.47749 1H24.5251C25.5355 1 26.5044 1.35119 27.2188 1.97631C27.9333 2.60143 28.3346 3.44928 28.3346 4.33333V31Z"
                                                        stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="completed_project_info_details_wrapper">
                                        <div class="completed_project_info_details">
                                            <div class="completed_project_info_details_svg">
                                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M12.3952 9.35714C10.372 13.8571 7 19 7 19C7 19 3.62797 13.8571 1.60476 9.35714C-0.418457 4.85714 2.95357 1 7 1C11.0464 1 14.4185 4.85714 12.3952 9.35714Z"
                                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <p class="completed_project_info_details_title">{{ $result['location'] }}</p>
                                        </div>
                                        <div class="completed_project_info_details">
                                            <div class="completed_project_info_details_svg">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="12" r="8.25" stroke="#848993"
                                                            stroke-width="1.5"/>
                                                    <path
                                                        d="M8.5 12.5L11.0349 15.4574C11.2609 15.721 11.6801 15.6798 11.8503 15.3772L16 8"
                                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <p class="completed_project_info_details_title">@if($result['status_business'] == 0)
                                                    Действующий @else Приостановлен @endif</p>
                                        </div>
                                        <div class="completed_project_info_details">
                                            <div class="completed_project_info_details_svg">
                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.4 4.55556H13.6M6.4 4.55556H2.8C2.32261 4.55556 1.86477 4.74286 1.52721 5.07625C1.18964 5.40965 1 5.86184 1 6.33333V15.2222C1 15.6937 1.18964 16.1459 1.52721 16.4793C1.86477 16.8127 2.32261 17 2.8 17H17.2C17.6774 17 18.1352 16.8127 18.4728 16.4793C18.8104 16.1459 19 15.6937 19 15.2222V6.33333C19 5.86184 18.8104 5.40965 18.4728 5.07625C18.1352 4.74286 17.6774 4.55556 17.2 4.55556H13.6H6.4ZM6.4 4.55556V1.53333C6.4 1.39188 6.45689 1.25623 6.55816 1.15621C6.65943 1.05619 6.79678 1 6.94 1H13.06C13.2032 1 13.3406 1.05619 13.4418 1.15621C13.5431 1.25623 13.6 1.39188 13.6 1.53333V4.55556H6.4Z"
                                                        stroke="#848993" stroke-width="1.5"/>
                                                </svg>
                                            </div>
                                            <p class="completed_project_info_details_title">{{ $result['category'] }}</p>
                                        </div>
                                        <div class="completed_project_info_details">
                                            <div class="completed_project_info_details_svg">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z"
                                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M3 7.35714C3 6.8646 3.18964 6.39223 3.52721 6.04394C3.86477 5.69566 4.32261 5.5 4.8 5.5H19.2C19.6774 5.5 20.1352 5.69566 20.4728 6.04394C20.8104 6.39223 21 6.8646 21 7.35714V16.6429C21 17.1354 20.8104 17.6078 20.4728 17.9561C20.1352 18.3043 19.6774 18.5 19.2 18.5H4.8C4.32261 18.5 3.86477 18.3043 3.52721 17.9561C3.18964 17.6078 3 17.1354 3 16.6429V7.35714Z"
                                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M3 9.5C3.95478 9.5 4.87045 9.07857 5.54558 8.32843C6.22072 7.57828 6.6 6.56087 6.6 5.5"
                                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M20.6016 9.5C19.6468 9.5 18.7311 9.07857 18.056 8.32843C17.3808 7.57828 17.0016 6.56087 17.0016 5.5"
                                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M17.3984 18.5C17.3984 17.4391 17.7777 16.4217 18.4529 15.6716C19.128 14.9214 20.0437 14.5 20.9984 14.5"
                                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M7 18.5C7 17.4391 6.62071 16.4217 5.94558 15.6716C5.27045 14.9214 4.35478 14.5 3.4 14.5"
                                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <p class="completed_project_info_details_title">{{ number_format($result['net_profit_month'], 0, ',', ' ') }}
                                                ₽/мес</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small_item_show_more_text_wrapper">
                                <p class="small_item_show_more_text">
                                    {{ $result['description'] }}
                                </p>
                                <!--    <a class="read_more_url">Читать полностью</a> -->
                            </div>
                            <div class="small_item_star_number_wrapper">
                                <div class="star_svg_wrapper">
                                    <div class="star_svg">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"
                                                stroke="#FF8D4E" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M10.4924 11.3035H8.88403L8.54785 4.86328H10.8286L10.4924 11.3035ZM8.52148 13.5579C8.52148 13.1887 8.62036 12.9097 8.81812 12.7207C9.01587 12.5317 9.30371 12.4373 9.68164 12.4373C10.0464 12.4373 10.3276 12.5339 10.5254 12.7273C10.7275 12.9207 10.8286 13.1975 10.8286 13.5579C10.8286 13.905 10.7275 14.1797 10.5254 14.3818C10.3232 14.5796 10.042 14.6785 9.68164 14.6785C9.3125 14.6785 9.02686 14.5818 8.82471 14.3884C8.62256 14.1907 8.52148 13.9138 8.52148 13.5579Z"
                                                fill="#FF8D4E"/>
                                        </svg>
                                    </div>
                                    <!-- svg -->
                                    <div class="star_svg_main_wrapper">
                                        <div class="star_svg_child">
                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346  10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                    fill="#FF8D4E"/>
                                            </svg>

                                        </div>
                                        <div class="star_svg_child">
                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346  10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                    fill="#FF8D4E"/>
                                            </svg>

                                        </div>
                                        <div class="star_svg_child">
                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346 10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                    fill="#848993"/>
                                            </svg>

                                        </div>
                                        <div class="star_svg_child">
                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346 10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                    fill="#848993"/>
                                            </svg>

                                        </div>
                                        <div class="star_svg_child">
                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346 10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                    fill="#848993"/>
                                            </svg>

                                        </div>
                                    </div>
                                    <!-- svg_end -->
                                </div>
                                <p class="small_item_star_date">{{  date_format(date_create($result['created_at']),'d.m.Y')    }}</p>
                            </div>
                            <div class="hidden_item_link_svg">
                                <a href="" class="completed_project_link">
                                    Связаться с продавцом
                                </a>
                                <div class="completed_project_price_info_svg">
                                    <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M28.3346 31L15.0013 22.6667L1.66797 31V4.33333C1.66797 3.44928 2.06933 2.60143 2.78375 1.97631C3.49818 1.35119 4.46714 1 5.47749 1H24.5251C25.5355 1 26.5044 1.35119 27.2188 1.97631C27.9333 2.60143 28.3346 3.44928 28.3346 4.33333V31Z"
                                            stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>


                            </div>


                        </div>
                        @else
                                <div class="completed_project_small_item completed_project_investment special_second_project">
                                    <div class="small_item_img_text_wrapper">
                                        <!--   Swiper Start -->
                                        <div class="swiper-container second_item_swiper_container">
                                            <div class="swiper-wrapper">
                                                @foreach($images as $image)
                                                    @if($image['add_id'] == $result['id'] && $image['add_type'] == 'investment')
                                                        <div class="swiper-slide">
                                                            <img class="adds_logo" src="/website/images/logo_adds.png" alt="">
                                                            <img class="first_img"
                                                                 src={{ asset('/storage/investment_gallery\\').$image->name }} alt="">
                                                        </div>
                                                        {{--                                            <div class="swiper-slide">--}}
                                                        {{--                                                <img class="adds_logo" src="/website/images/logo_adds.png" alt="">--}}
                                                        {{--                                                <img class="first_img" src="/website/images/slider_img10.png" alt="">--}}
                                                        {{--                                            </div>--}}
                                                        {{--                                            <div class="swiper-slide">--}}
                                                        {{--                                                <img class="adds_logo" src="/website/images/logo_adds.png" alt="">--}}
                                                        {{--                                                <img class="first_img" src="/website/images/slider_img10.png" alt="">--}}
                                                        {{--                                            </div>--}}
                                                        {{--                                            <div class="swiper-slide">--}}
                                                        {{--                                                <img class="adds_logo" src="/website/images/logo_adds.png" alt="">--}}
                                                        {{--                                                <img class="first_img" src="/website/images/slider_img10.png" alt="">--}}
                                                        {{--                                            </div>--}}
                                                        {{--                                            <div class="swiper-slide">--}}
                                                        {{--                                                <img class="adds_logo" src="/website/images/logo_adds.png" alt="">--}}
                                                        {{--                                                <img class="first_img" src="/website/images/slider_img10.png" alt="">--}}
                                                        {{--                                            </div>--}}
                                                    @endif
                                                @endforeach

                                            </div>
                                            <!-- If we need scrollbar -->
                                            <!-- If we need pagination -->
                                            <div class="swiper-pagination"></div>
                                        </div>
                                        <!-- Swiper End -->
                                        <div class="smal_item_text_wrapper">
                                            <div class="smal_item_text_wrapper">
                                                <div class="small_item_title_svg_wrapper">
                                                    <h1 class="completed_project_info_title">{{ $result['company_name'] }}</h1>
                                                    <a href="{{ route('business.single',['name'=>'investment' ,'id'=> $result['id'],'user_id'=>$result['user_id'] ]) }}"
                                                       class="completed_project_link hidden_desktop_div">
                                                        Связаться с продавцом
                                                    </a>
                                                </div>
                                                <div class="small_item_svg_wrapper add_to_bookmarks" data-id="12"
                                                     data-type="business">
                                                    <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                            stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="hidden_price"> {{number_format($result['percentage'] , 0, ',', ' ')}}</p>
                                            <p class="small_item_info1">Ставка:</p>
                                            <div class="small_item_info_svg_wrapper_second">
                                                <p class="small_item_info2">{{number_format($result['percentage'] , 0, ',', ' ')}}</p>
                                                <div class="svg_item hidden_desktop_div">
                                                    <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M28.3327 31L14.9993 22.6667L1.66602 31V4.33333C1.66602 3.44928 2.06737 2.60143 2.7818 1.97631C3.49622 1.35119 4.46519 1 5.47554 1H24.5232C25.5335 1 26.5025 1.35119 27.2169 1.97631C27.9313 2.60143 28.3327 3.44928 28.3327 4.33333V31Z"
                                                            stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="small_item_info_svg_wrapper">
                                                <p class="small_item_info3">
                                                    <span>Собрано:</span> 166 858 245
                                                    из {{ number_format($result['am_required'], 0, ',', ' ') }}
                                                    ₽
                                                </p>
                                            </div>
                                            <div class="small_item_loading_svgs_wrapper">
                                                <div class="small_item_loading_wrapper">
                                                    <div class="small_item_loading_child" style="width: 111.23883%"></div>
                                                </div>
                                                <div class="small_item_info4_svg_wrapper">
                                                    <div class="small_item_info4_svg">
                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M18 18V15.7122C18 14.4987 17.5259 13.3349 16.682 12.4769C15.8381 11.6188 14.6935 11.1367 13.5 11.1367H4.5C3.30653 11.1367 2.16193 11.6188 1.31802 12.4769C0.474106 13.3349 0 14.4987 0 15.7122V18"
                                                                fill="#848993"/>
                                                            <path
                                                                d="M9 9.15106C11.4853 9.15106 13.5 7.10253 13.5 4.57553C13.5 2.04854 11.4853 0 9 0C6.51472 0 4.5 2.04854 4.5 4.57553C4.5 7.10253 6.51472 9.15106 9 9.15106Z"
                                                                fill="#848993"/>
                                                        </svg>
                                                    </div>
                                                    <p class="small_item_info4">8</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_item_show_more_text_wrapper">
                                        <p class="small_item_show_more_text">
                                            {{$result['description']}}
                                        </p>
                                        <!--  <a class="read_more_url">Читать полностью</a> -->
                                    </div>
                                    <div class="small_item_star_number_wrapper">
                                        <div class="star_svg_wrapper">
                                            <div class="star_svg">
                                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"
                                                        stroke="#FF8D4E" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M10.4924 11.3035H8.88403L8.54785 4.86328H10.8286L10.4924 11.3035ZM8.52148 13.5579C8.52148 13.1887 8.62036 12.9097 8.81812 12.7207C9.01587 12.5317 9.30371 12.4373 9.68164 12.4373C10.0464 12.4373 10.3276 12.5339 10.5254 12.7273C10.7275 12.9207 10.8286 13.1975 10.8286 13.5579C10.8286 13.905 10.7275 14.1797 10.5254 14.3818C10.3232 14.5796 10.042 14.6785 9.68164 14.6785C9.3125 14.6785 9.02686 14.5818 8.82471 14.3884C8.62256 14.1907 8.52148 13.9138 8.52148 13.5579Z"
                                                        fill="#FF8D4E"/>
                                                </svg>
                                            </div>
                                            <!-- svg -->
                                            <div class="star_svg_main_wrapper">
                                                <div class="star_svg_child">
                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346  10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                            fill="#FF8D4E"/>
                                                    </svg>

                                                </div>
                                                <div class="star_svg_child">
                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346  10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                            fill="#FF8D4E"/>
                                                    </svg>

                                                </div>
                                                <div class="star_svg_child">
                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346 10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                            fill="#848993"/>
                                                    </svg>

                                                </div>
                                                <div class="star_svg_child">
                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346 10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                            fill="#848993"/>
                                                    </svg>

                                                </div>
                                                <div class="star_svg_child">
                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 0L11.8037 5.14099L17.5595 6.21885L13.5365 10.474L14.2901 16.2812L9 13.77L3.70993 16.2812L4.46346 10.474L0.440492 6.21885L6.19626 5.14099L9 0Z"
                                                            fill="#848993"/>
                                                    </svg>

                                                </div>
                                            </div>
                                            <!-- svg_end -->
                                        </div>
                                        <p class="small_item_star_date">{{ date_format(date_create($result['created_at']),'d.m.Y')   }}</p>
                                    </div>
                                    <div class="hidden_item_link_svg">
                                        <a href="" class="completed_project_link">
                                            Связаться с продавцом
                                        </a>
                                        <div class="completed_project_price_info_svg">
                                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M28.3346 31L15.0013 22.6667L1.66797 31V4.33333C1.66797 3.44928 2.06933 2.60143 2.78375 1.97631C3.49818 1.35119 4.46714 1 5.47749 1H24.5251C25.5355 1 26.5044 1.35119 27.2188 1.97631C27.9333 2.60143 28.3346 3.44928 28.3346 4.33333V31Z"
                                                    stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                        @endif

                    @endforeach


                </div>
            </div>

            <div style="display: flex;justify-content: flex-end;">
                <div style="max-width: 900px;width: 100%;">
                    <div class="pagination_wrapper">
                        <div class="pagination_svg_wrapper ">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L1 9L9 17" stroke="#F0F0F0" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </svg>
                        </div>
{{--                        <div class="pagination_num_wrapper active">--}}
{{--                            <a class="pagination_number">1</a>--}}
{{--                        </div>--}}
                        <div class="">
                            {!! $results->links('pagination') !!}

                        </div>
                    </div>
                </div>

            </div>


    </section>
    <section class="banner_slider">
        <div class="banner_slider_wrapper">
            <div class="banner_slider_btns_wrapper">
                <div class="swiper-button-prev banner_prev_btn"></div>
                <div class="swiper-button-next banner_next_btn"></div>
                <div class="swiper-container" id="banner_swiper_container_second">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper_slide_wrapper">
                                <div class="swiper_slide_img">
                                    <img src="/website/images/slider_img1.png" alt="">
                                </div>
                                <div class="swiper_slide_info_wrapper">
                                    <p class="swiper_slide_info1">Магазин “Спортмастер”</p>
                                    <p class="swiper_slide_info2">8 200 000 ₽</p>
                                    <a href="" class="swiper_slide_btn">Открыть объявление</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper_slide_wrapper">
                                <div class="swiper_slide_img">
                                    <img src="/website/images/slider_img2.png" alt="">
                                </div>
                                <div class="swiper_slide_info_wrapper">
                                    <p class="swiper_slide_info1">Кофейня “LaFamilia”</p>
                                    <p class="swiper_slide_info2">8 200 000 ₽</p>
                                    <a href="" class="swiper_slide_btn">Открыть объявление</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper_slide_wrapper">
                                <div class="swiper_slide_img">
                                    <img src="/website/images/slider_img1.png" alt="">
                                </div>
                                <div class="swiper_slide_info_wrapper">
                                    <p class="swiper_slide_info1">Магазин “Спортмастер”</p>
                                    <p class="swiper_slide_info2">8 200 000 ₽</p>
                                    <a href="" class="swiper_slide_btn">Открыть объявление</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper_slide_wrapper">
                                <div class="swiper_slide_img">
                                    <img src="/website/images/slider_img2.png" alt="">
                                </div>
                                <div class="swiper_slide_info_wrapper">
                                    <p class="swiper_slide_info1">Кофейня “LaFamilia”</p>
                                    <p class="swiper_slide_info2">8 200 000 ₽</p>
                                    <a href="" class="swiper_slide_btn">Открыть объявление</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('include.footer')
<script>
    $(document).ready(function () {

        $("input[name=search]").keyup(function () {
            $('.close_svg').css("display", "block");
            let s = $('input[name=search]').val()
            if (s == '') {
                $('.close_svg').css("display", "none");
            }
        })

        let tmp = [];
        $('input[name="category[]"]').on('change', function () {
            if ($(this).is(':checked')) {
                let checked = ($(this).val());
                tmp.push(checked);
            }
        });
        $('.filter_btn2').on('click', function () {
            $.ajax({
                url: "{{ route('cat_search') }}",
                type: "GET",
                data: {
                    tmp: tmp,
                },
                // headers: {
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // },
                success: (data) => {
                    $('.completed_project_second_item').html(data)
                }
            });
        });


    })

</script>
{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--       $('.top_search_form_btn').click(function (){--}}
{{--          let search = $("input[name=search]").val()--}}
{{--           $.ajax({--}}
{{--               url: "search",--}}
{{--               type: "GET",--}}
{{--               chache: false,--}}
{{--               data: {query: search},--}}
{{--               success: function (data) {--}}
{{--                   $(".completed_project_second_item ").html.();--}}
{{--               }--}}
{{--           })--}}
{{--       })--}}


{{--    })--}}
{{--
</script>--}}
<script>
    const swiper_banner = new Swiper('#banner_swiper_container_second', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 4,
        spaceBetween: 16,
        loop: true,

        // Navigation arrows
        navigation: {
            nextEl: '.banner_next_btn',
            prevEl: '.banner_prev_btn',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            324: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            330: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            340: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            350: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            360: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            370: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            380: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            400: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            420: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            426: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            427: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            440: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            450: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            460: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            470: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            500: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            524: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            525: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            600: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            700: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            769: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            800: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            900: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1000: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1100: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1120: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1130: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1140: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1150: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1152: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1155: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1157: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1158: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1160: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1170: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1180: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1170: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1180: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1190: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1216: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1218: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1220: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1230: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1240: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1250: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1260: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1270: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1281: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            1299: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            1300: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            1400: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            1500: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            1600: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            1700: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            1800: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            1920: {
                slidesPerView: 4,
                spaceBetween: 10
            }
        }
    });
</script>
<script type="text/javascript">
    let swiper_banner_second = new Swiper('.second_item_swiper_container', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 1,
        loop: true,
        updateOnWindowResize: true,
        autoResize: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            324: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            330: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            340: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            350: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            360: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            370: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            380: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            400: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            420: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            426: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            427: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            440: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            450: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            460: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            470: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            500: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            524: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            525: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            600: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            700: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            769: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            800: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            900: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1000: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1100: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1120: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1130: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1140: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1150: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1152: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1155: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1157: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1158: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1160: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1170: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1180: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1170: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1180: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1190: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1200: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1216: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1218: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1220: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1230: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1240: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1250: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1260: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1270: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1280: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1281: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1299: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1300: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1400: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1500: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1600: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1700: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1800: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1920: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });


    $('.completed_projects_btn1').on('click', function () {
        $('.completed_project_second_item').removeClass('second_variant')
        $('.completed_project_second_item').addClass('first_variant')

        $(this).addClass('active_bt')
        $('.completed_projects_btn2').removeClass('active_bt')
        // swiper_banner_second.update()
        swiper_update();
    })
    $('.completed_projects_btn2').on('click', function () {
        $('.completed_project_second_item').removeClass('first_variant')
        $('.completed_project_second_item').addClass('second_variant')

        $(this).addClass('active_bt')
        $('.completed_projects_btn1').removeClass('active_bt')

        swiper_update();
        // swiper_banner_second.update()

    })


    function swiper_update() {
        let swiper_banner_second = new Swiper('.second_item_swiper_container', {
            // Optional parameters
            direction: 'horizontal',
            slidesPerView: 1,
            loop: true,
            updateOnWindowResize: true,
            autoResize: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                324: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                330: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                340: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                350: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                360: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                370: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                380: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                400: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                420: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                426: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                427: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                440: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                450: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                460: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                470: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                500: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                524: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                525: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                600: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                700: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                769: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                800: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                900: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1000: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1100: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1120: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1130: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1140: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1150: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1152: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1155: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1157: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1158: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1160: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1170: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1180: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1170: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1180: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1190: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1200: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1216: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1218: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1220: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1230: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1240: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1250: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1260: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1270: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1280: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1281: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1299: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1300: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1400: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1500: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1600: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1700: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1800: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1920: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });

    }

</script>
