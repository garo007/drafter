@include('include.header')

<main>
    <section class="top">
        <div class="header_second_part">
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

        <div class="a1">
            <div class="top_wrapper">
                <div class="swiper-container1" id='titles_swiper'>
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><p class='swiper_title_text'>Найди <span>инвестора. </span>
                            </p></div>
                        <div class="swiper-slide"><p class='swiper_title_text'>Продай или купи
                                <span>готовый бизнес.</span>
                            </p></div>
                        <div class="swiper-slide"><p class='swiper_title_text'>Заработай на инвестициях в
                                готовый бизнес.</p></div>
                        ...
                    </div>
                </div>
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
                                       name="search"  required>
                            </div>
                            <div class="close_svg">
                                <a href="/">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  version="1.1" width="16" height="16" x="0" y="0" viewBox="0 0 329.26933 329" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0" fill="#e5d6a0" data-original="#000000" style="" class=""/></g></svg>
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
        </div>


        <section class="completed_projects">

            <div class="completed_projects_wrapper">
                <div class="completed_projects_title_select_wrapper">
                    <h1 class="completed_projects_title">Объявления</h1>
                    <div class="completed_projects_select_wrapper">
                        <div class="completed_projects_title_svg_wrapper">
                            <div class="dropdown">
                                <p class="completed_projects_name ">По релевантности</p>
                                <div class="dropdown-content"
                                <div class="completed_projects_info_wrapper">
                                    <ul>
                                        <li class="completed_projects_info">
                                            <a href="" class="completed_projects_info_link">Сначала новые</a>
                                            <div class="completed_projects_select_line selected">
                                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M13.7069 0.293031C13.8944 0.480558 13.9997 0.734866 13.9997 1.00003C13.9997 1.26519 13.8944 1.5195 13.7069 1.70703L5.70692 9.70703C5.51939 9.8945 5.26508 9.99982 4.99992 9.99982C4.73475 9.99982 4.48045 9.8945 4.29292 9.70703L0.292919 5.70703C0.110761 5.51843 0.00996641 5.26583 0.0122448 5.00363C0.0145233 4.74143 0.119692 4.49062 0.3051 4.30521C0.490508 4.1198 0.741321 4.01464 1.00352 4.01236C1.26571 4.01008 1.51832 4.11087 1.70692 4.29303L4.99992 7.58603L12.2929 0.293031C12.4804 0.10556 12.7348 0.000244141 12.9999 0.000244141C13.2651 0.000244141 13.5194 0.10556 13.7069 0.293031Z"
                                                          fill="#252C32"/>
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
                                                          fill="#252C32"/>
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
                                                          fill="#252C32"/>
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
                                                          fill="#252C32"/>
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
                                                          fill="#252C32"/>
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
                    <div class=" open_filter_block">
                        <div class="open_filter_block_wrapper">
                            <p class="completed_projects_name">Фильтры</p>
                            <div class="completed_projects_select_line">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 0.5L5 4.5L9 0.5" stroke="#6E7C87"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="completed_projects_items_wrapper special_completed_project_second">
                <form action="" method="get" id="cat_form">
                    <div class="completed_project_first_item">
                        <p class="first_item_title">Фильтры</p>
                        <div class="filter_of_catagories_wrapper">
                            <p class="filter_of_catagories_wrapper_title">Категория</p>
                            <div class="filter_of_catagories_wrapper_check_inputs">

                                @foreach($categories as $category)
                                    <div class="check_input_wrapper">
                                        <span class="filter_input_span">{{ $category->name }}</span>
                                        <input type="checkbox" name="{{ $category->id }}" class="filter_input"
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
                </form>
                <div class="completed_project_second_item ">
                    @if($investments)
                        @foreach($investment as $investment)
                            @if($investment->status != '0')

                                <div
                                    class="completed_project_small_item completed_project_investment special_second_project">
                                    <div class="small_item_img_text_wrapper">
                                        <div class="small_item_img">
                                            @if($investment->company_logo != '')
                                                <img src="{{ asset('storage/uploads/'.$investment->company_logo) }}"
                                                     alt="">
                                            @else
                                                <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">
                                            @endif
                                            @if($investment->urgently)
                                                <p class="urgently_item">Срочно</p>
                                            @endif
                                        </div>
                                        <div class="hidden_img">
                                            <img src="{{ asset('storage/uploads/'.$investment->company_logo)  }}"
                                                 alt="">
                                            @if($investment->urgently)
                                                <p class="urgently_item">Срочно</p>
                                            @endif
                                        </div>
                                        <div class="smal_item_text_wrapper">
                                            <div class="small_item_title_svg_wrapper">
                                                <p class="small_item_title"><a
                                                        href="{{ route('business.single',['name'=>'investment' ,'id'=>$investment->id ]) }}">{{ $investment->company_name }}</a>
                                                </p>
                                                @auth
                                                    @if( check_bookmark($investment->id, 'investment'))

                                                        <div
                                                            class="small_item_svg_wrapper added_to_bookmark showBookmark"
                                                            data-id="{{ $investment->id }}" data-type="investment">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                    fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                        <div class="small_item_svg_wrapper add_to_bookmarks"
                                                             data-id="{{ $investment->id }}" data-type="investment">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                    stroke="#E5D6A0" stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                    @else
                                                        <div
                                                            class="small_item_svg_wrapper add_to_bookmarks showBookmark"
                                                            data-id="{{ $investment->id }}" data-type="investment">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                    stroke="#E5D6A0" stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                        <div class="small_item_svg_wrapper added_to_bookmark"
                                                             data-id="{{ $investment->id }}" data-type="investment">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                    fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                @endauth
                                                @guest
                                                    <div class="small_item_svg_wrapper add_to_bookmarks"
                                                         data-id="{{ $investment->id }}" data-type="business">
                                                        <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                @endguest
                                            </div>
                                            <p class="hidden_price">{{ $investment->percentage }}%</p>
                                            <p class="small_item_info1">Ставка:</p>
                                            <p class="small_item_info2">{{ $investment->percentage }}%</p>
                                            <div class="small_item_info_svg_wrapper">
                                                <p class="small_item_info3">
                                                    <span>Собрано:</span> {{ number_format($investment->am_collected, 0, ',', ' ')  }}
                                                    из {{ number_format($investment->am_required, 0, ',', ' ')   }}
                                                    &#8381;
                                                </p>
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
                                        @if(strlen($investment->description) < 87)

                                        @else
                                            <button class="read_more_btn">Читать полностью</button>
                                        @endif

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
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"><polygon
                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"
                                                         style="margin-left: 0px;"><polygon
                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"
                                                         style="margin-left: 0px;"><polygon
                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"
                                                         style="margin-left: 0px;"><polygon
                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"
                                                         style="margin-left: 0px;"><polygon
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
                                                             fill="#6DEC98"
                                                             style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#6DEC98"
                                                             style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#6DEC98"
                                                             style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#6DEC98"
                                                             style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="small_item_star_date">{{ date('d.m.Y', strtotime($investment->created_at)) }}</p>
                                    </div>
                                </div>


                                <br>
                            @endif
                        @endforeach
                    @endif
                    @if($businesses)
                        @foreach($business as $businesse)
                            @if($businesse->status != '0')
                                <div class="completed_project_small_item">
                                    <div class="small_item_img_text_wrapper">
                                        <div class="small_item_img">
                                            @if($businesse->company_logo != '')
                                                <img src="{{ asset('storage/uploads/'.$businesse->company_logo)  }}"
                                                     alt="">
                                            @else
                                                <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">
                                            @endif
                                            @if($businesse->urgently)
                                                <p class="urgently_item">Срочно</p>
                                            @endif
                                        </div>
                                        <div class="hidden_img">
                                            <img src="{{ asset('storage/uploads/'.$businesse->company_logo)  }}" alt="">
                                            @if($businesse->urgently)
                                                <p class="urgently_item">Срочно</p>
                                            @endif
                                        </div>
                                        <div class="smal_item_text_wrapper">
                                            <div class="small_item_title_svg_wrapper">
                                                <p class="small_item_title"><a
                                                        href="{{ route('business.single',['name'=>'business' ,'id'=>$businesse->id ]) }}">{{ $businesse->company_name }}</a>
                                                </p>
                                                @auth
                                                    @if(check_bookmark($businesse->id, 'business'))
                                                        <div
                                                            class="small_item_svg_wrapper added_to_bookmark showBookmark"
                                                            data-id="{{ $businesse->id }}" data-type="business">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                    fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                        <div class="small_item_svg_wrapper add_to_bookmarks"
                                                             data-id="{{ $businesse->id }}" data-type="business">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                    stroke="#E5D6A0" stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                    @else
                                                        <div
                                                            class="small_item_svg_wrapper add_to_bookmarks showBookmark"
                                                            data-id="{{ $businesse->id }}" data-type="business">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                    stroke="#E5D6A0" stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                        <div class="small_item_svg_wrapper added_to_bookmark"
                                                             data-id="{{ $businesse->id }}" data-type="business">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                    fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                @endauth
                                                @guest
                                                    <div class="small_item_svg_wrapper add_to_bookmarks">
                                                        <svg width="34" height="40" viewBox="0 0 34 40" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"
                                                                stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                @endguest

                                            </div>
                                            <p class="hidden_price">{{ number_format($businesse->cost, 0, ',', ' ') }}
                                                <span>&#8381;</span>
                                            </p>
                                            <p class="hidden_city">{{ $businesse->city }} </p>
                                            <p class="small_item_info1">Цена:</p>
                                            <p class="small_item_info2">{{ number_format($businesse->cost, 0, ',', ' ') }}
                                                <span>&#8381;</span>
                                            </p>
                                            <div class="small_item_info_svg_wrapper">
                                                <p class="small_item_info3"><span>Город:</span> {{ $businesse->city }}
                                                </p>
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
                                        @if(strlen( $businesse->description) < 87)

                                        @else
                                            <button class="read_more_btn">Читать полностью</button>
                                        @endif
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
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"><polygon
                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"
                                                         style="margin-left: 0px;"><polygon
                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"
                                                         style="margin-left: 0px;"><polygon
                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"
                                                         style="margin-left: 0px;"><polygon
                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                         xml:space="preserve"
                                                         width="32px" height="32px" fill="#848993"
                                                         style="margin-left: 0px;"><polygon
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
                                                             fill="#6DEC98"
                                                             style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#6DEC98"
                                                             style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#6DEC98"
                                                             style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                                             xml:space="preserve" width="32px" height="32px"
                                                             fill="#6DEC98"
                                                             style="margin-left: 0px;"><polygon
                                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="small_item_star_date">{{ date('d.m.Y', strtotime($businesse->created_at)) }}</p>
                                    </div>
                                </div>
                                <br>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </section>
</main>


@include('include.footer')

<script>
    $("input[name=search]").keyup(function (){
        $('.close_svg').css("display","block");
        let s = $('input[name=search]').val()
        if (s == ''){
            $('.close_svg').css("display","none");
        }
    })

    // $(document).ready(function (){
    //     $(".top_search_form_btn").on("click",function (){
    //         let query = $('.top_search_input').val();
    //         $.ajax({
    //             url: "search";
    //             type: "GET";
    //             data
    //         })
    //     })
    // })
    // $('.read_more_btn').click(function () {
    //     $(this).parent().find('p').css({'white-space': 'pre-line', 'display': 'table-cell'})

        // $('.read_more_btn').click(function(){
        //     $(this).parent().find('p').css({'display': 'inline-block'})
        // })

    // })

</script>

{{--<script>--}}
{{--    $(".top_search_form_btn").on("click",function (){--}}
{{--        let query = $('.top_search_input').val();--}}
{{--        $.ajax({--}}
{{--            url: "{{ route('search') }}",--}}
{{--            type: "GET",--}}
{{--            data: {--}}
{{--                search:query,--}}
{{--            },--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            },--}}
{{--            success: (data) => {--}}
{{--                // let positionParametrs = location.pathname.indexOf('?');--}}
{{--                // let url = location.pathname.substring(positionParametrs, location.pathname.length)--}}
{{--                // let newUrl = url+'?';--}}
{{--                // newUrl += 'search='+query+'';--}}
{{--                //history.pushState({},'',newUrl)--}}
{{--                $('.completed_project_second_item ').html(data);--}}
{{--                // $('.completed_project_second_item').isotope('destroy');--}}
{{--                // $('.completed_project_second_item').imagesLoaded(function(){--}}
{{--                //     let grid = $('.completed_project_second_item').isotope({--}}
{{--                //         itemSelector: '.small_item_img',--}}
{{--                //         layoutMode: 'fitRows',--}}
{{--                //         fitRows:--}}
{{--                //             {--}}
{{--                //                 gutter: 30--}}
{{--                //             }--}}
{{--                //     });--}}
{{--                // });--}}
{{--                location.reload();--}}
{{--            },--}}
{{--            errors: () =>{--}}
{{--                console.log(1)--}}
{{--            }--}}
{{--        })--}}
{{--    });--}}
{{--</script>--}}
