@include('include.header')
<link rel="stylesheet" href="{{ asset('/website/css/my_projects.css' )}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<main>
    <section class="my_projects">
        @auth()
            <div class="header_second_part">
                <div class="header_second_wrapper">
                    <nav class="header_second_nav_list">
                        <ul class="second_nav_ul_list">
                            <li class="second_nav_ul_li">
                                <a href="/" class="second_nav_link">Главная</a>
                            </li>
                            <li class="second_nav_ul_li">
                                <a href="{{ route('news.index') }}" class="second_nav_link">Новости</a>
                            </li>
                            <li class="second_nav_ul_li">
                                <a href="{{ route('my_projects.show') }}" class="second_nav_link">Мои проекты</a>
                            </li>
                            <li class="second_nav_ul_li">
                                <a href="{{ route('messages.show') }}" class="second_nav_link">Мои сообщения</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        @endauth
        <div class="my_projects_wrapper">
            <h1 class="hidden_title">Мои проекты</h1>
            <a href="{{ route('add.chooseType') }}" class="hidden_link">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 16H8" stroke="#e5d6a0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 8V24" stroke="#e5d6a0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <rect x="0.5" y="0.5" width="31" height="31" stroke="#e5d6a0"/>
                </svg>

                Разместить объявление
            </a>
            <div class="completed_projects_items_wrapper">
                <div class="filters_main_wrapper">
                    <div class="filter_title_svg_wrapper">
                        <p class="filter_title">Фильтры</p>
                        <div class="filter_title_svg_wrapper">
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5 0.5L4 4L0.499999 0.5" stroke="#DADADA" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                    </div>
                    <div class="filter_hidden_wrapper">
                        <div class="filter_of_catagories_wrapper">
                            <p class="filter_of_catagories_wrapper_title">Категория</p>
                            <div class="filter_of_catagories_wrapper_check_inputs">
                                @foreach($categories as $category)
                                    <div class="check_input_wrapper" >
                                        <span class="filter_input_span">{{ $category->name }}</span>
                                        <input type="checkbox" class="filter_input" data-id="{{ $category->id }}"  hidden id="{{ $category->id."filter_input" }}">
                                        <label  class="filter_input_label" for="{{ $category->id."filter_input" }}"></label>
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
                <div class="completed_project_first_item">
                    <a href="{{ route('add.chooseType') }}" class="place_ad_link">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 16H8" stroke="#e5d6a0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 8V24" stroke="#e5d6a0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="0.5" y="0.5" width="31" height="31" stroke="#e5d6a0"/>
                        </svg>

                        Разместить объявление
                    </a>
                    <h1 class="my_projects_title">Мои проекты</h1>
                    <p class="first_item_title">Фильтры</p>
                    <div class="filter_of_catagories_wrapper">
                        <p class="filter_of_catagories_wrapper_title">Категория</p>
                        <div class="filter_of_catagories_wrapper_check_inputs">
                            @foreach($categories as $category)
                                <div class="check_input_wrapper" >
                                    <span class="filter_input_span">{{ $category->name }}</span>
                                    <input type="checkbox" class="filter_input" data-id="{{ $category->id }}"  hidden id="{{ $category->id."filter_input" }}">
                                    <label  class="filter_input_label" for="{{ $category->id."filter_input" }}"></label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="filter_inputs_btns_wrapper">
                        <button class="filter_btn1">Очистить</button>
                        <button class="filter_btn2">Применить</button>
                    </div>
                </div>
                <div class="relevance_projects_adds_main_wrapper">
                    <div class="projects_ads_main_wrapper">
                        <div class="projects_ads_titles_wrapper">
                            <p class="projects_ads_title first_ads_title active" data-id="open_div1">Проекты</p>
                            <p class="projects_ads_title" data-id="open_div2">Объявления</p>
                        </div>
                        <div class="by_relevance_wrapper">
                            <div class="by_relevance_svg_title_wrapper">
                                <p class="by_relevance_title">
                                    По релевантности
                                </p>
                                <div class="by_relevance_svg_wrapper">
                                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 0.5L4 4L0.499999 0.5" stroke="#DADADA" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                            <div class="by_relevance_hidden_wrapper">
                                <p class="by_relevance_hidden_item">Спортмастер</p>
                                <p class="by_relevance_hidden_item">Спортмастер</p>
                                <p class="by_relevance_hidden_item">Спортмастер</p>
                                <p class="by_relevance_hidden_item">Спортмастер</p>
                                <p class="by_relevance_hidden_item">Спортмастер</p>
                                <p class="by_relevance_hidden_item">Спортмастер</p>
                            </div>
                        </div>
                    </div>
                    <div class="completed_project_second_item open" id="open_div1">
                        @if($invests)
                            @foreach($invests as $invest)
                                @if($invest->investment->status != '0')
                                    <div class="completed_project_small_item completed_project_investment special_second_project">
                                        <div class="small_item_img_text_wrapper">
                                            <div class="small_item_img">
                                                <img src="{{ asset('storage/uploads/'.$invest->investment->company_logo)  }}" alt="">
                                            </div>
                                            <div class="hidden_img">
                                                <img src="{{ asset('storage/uploads/'.$invest->investment->company_logo)  }}" alt="">
                                            </div>
                                            <div class="smal_item_text_wrapper">
                                                <div class="small_item_title_svg_wrapper">
                                                    <p class="small_item_title"><a href="{{ route('business.single',['name'=>'investment' ,'id'=>$invest->investment->id ]) }}">{{ $invest->investment->company_name }}</a></p>
                                                    @auth
                                                        @if( check_bookmark($invest->investment->id, 'investment'))

                                                            <div class="small_item_svg_wrapper added_to_bookmark showBookmark" data-id="{{ $invest->investment->id }}" data-type="investment">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                            <div class="small_item_svg_wrapper add_to_bookmarks" data-id="{{ $invest->investment->id }}" data-type="investment">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                        @else
                                                            <div class="small_item_svg_wrapper add_to_bookmarks showBookmark" data-id="{{ $invest->investment->id }}" data-type="investment">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                            <div class="small_item_svg_wrapper added_to_bookmark" data-id="{{ $invest->investment->id }}" data-type="investment">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                        @endif
                                                    @endauth
                                                    @guest
                                                        <div class="small_item_svg_wrapper add_to_bookmarks" data-id="{{ $invest->investment->id }}" data-type="business">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                    @endguest
                                                </div>
                                                <p class="hidden_price">{{ $invest->investment->percentage }}%</p>
                                                <p class="small_item_info1">Ставка:</p>
                                                <p class="small_item_info2">{{ $invest->investment->percentage }}%</p>
                                                <div class="small_item_info_svg_wrapper">
                                                    <p class="small_item_info3"> <span>Собрано:</span> {{ $invest->investment->am_collected }}   из {{ $invest->investment->am_required  }} Руб</p>
                                                    <div class="small_item_info4_svg_wrapper">
                                                        <div class="small_item_info4_svg">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M24 23.9999V20.9496C24 19.3316 23.3679 17.7798 22.2426 16.6357C21.1174 15.4916 19.5913 14.8489 18 14.8489H6C4.4087 14.8489 2.88258 15.4916 1.75736 16.6357C0.632141 17.7798 0 19.3316 0 20.9496V23.9999" fill="#E5D6A0"/>
                                                                <path d="M12.0007 12.2014C15.3144 12.2014 18.0007 9.47004 18.0007 6.10071C18.0007 2.73138 15.3144 0 12.0007 0C8.68702 0 6.00073 2.73138 6.00073 6.10071C6.00073 9.47004 8.68702 12.2014 12.0007 12.2014Z" fill="#E5D6A0"/>
                                                            </svg>
                                                        </div>
                                                        <p class="small_item_info4">{{ count($invest->investment->invests) }}</p>
                                                    </div>
                                                </div>
                                                <div class="small_item_loading_wrapper">
                                                    <div class="small_item_loading_child" style="width: {{ $invest->investment->am_collected/$invest->investment->am_required*100 }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small_item_show_more_text_wrapper">
                                            <p class="small_item_show_more_text">
                                                {{ $invest->investment->description }}
                                            </p>
                                            <button class="read_more_btn">Читать полностью</button>
                                        </div>
                                        <div class="small_item_star_number_wrapper">
                                            <div class="star_svg_wrapper">
                                                <div class="star_svg">
                                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z" stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M13.9372 6.48877L8.18704 11.9775L5.31201 9.23315" stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>


                                                </div>
                                                <div class="jq-ry-group-wrapper"  >
                                                    <div class="jq-ry-normal-group jq-ry-group" >
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    </div>
                                                    <div class="active_star" style= "width:70%">
                                                        <div class="jq-ry-rated-group jq-ry-group">
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="small_item_star_date">{{ date('d.m.Y', strtotime($invest->investment->created_at)) }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                    </div>
                    <div class="completed_project_second_item" id="open_div2">
                        @if(auth()->user()->investments)
                            @foreach(auth()->user()->investments as $investment)
                                @if($investment->status != '0')
                                    <div class="completed_project_small_item completed_project_investment special_second_project">
                                        <div class="small_item_img_text_wrapper">
                                            <div class="small_item_img">
                                                <img src="{{ asset('storage/uploads/'.$investment->company_logo)  }}" alt="">
                                            </div>
                                            <div class="hidden_img">
                                                <img src="{{ asset('storage/uploads/'.$investment->company_logo)  }}" alt="">
                                            </div>
                                            <div class="smal_item_text_wrapper">
                                                <div class="small_item_title_svg_wrapper">
                                                    <p class="small_item_title"><a href="{{ route('business.single',['name'=>'investment' ,'id'=>$investment->id ]) }}">{{ $investment->company_name }}</a></p>
                                                    @auth
                                                        @if( check_bookmark($investment->id, 'investment'))

                                                            <div class="small_item_svg_wrapper added_to_bookmark showBookmark" data-id="{{ $investment->id }}" data-type="investment">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                            <div class="small_item_svg_wrapper add_to_bookmarks" data-id="{{ $investment->id }}" data-type="investment">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                        @else
                                                            <div class="small_item_svg_wrapper add_to_bookmarks showBookmark" data-id="{{ $investment->id }}" data-type="investment">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                            <div class="small_item_svg_wrapper added_to_bookmark" data-id="{{ $investment->id }}" data-type="investment">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                        @endif
                                                    @endauth
                                                    @guest
                                                        <div class="small_item_svg_wrapper add_to_bookmarks" data-id="{{ $investment->id }}" data-type="business">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                    @endguest
                                                </div>
                                                <p class="hidden_price">{{ $investment->percentage }}%</p>
                                                <p class="small_item_info1">Ставка:</p>
                                                <p class="small_item_info2">{{ $investment->percentage }}%</p>
                                                <div class="small_item_info_svg_wrapper">
                                                    <p class="small_item_info3"> <span>Собрано:</span> {{ number_format($investment->am_collected, 0, ',', ' ')   }}   из  {{ number_format($investment->am_required, 0, ',', ' ')   }} &#8381;</p>
                                                    <div class="small_item_info4_svg_wrapper">
                                                        <div class="small_item_info4_svg">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M24 23.9999V20.9496C24 19.3316 23.3679 17.7798 22.2426 16.6357C21.1174 15.4916 19.5913 14.8489 18 14.8489H6C4.4087 14.8489 2.88258 15.4916 1.75736 16.6357C0.632141 17.7798 0 19.3316 0 20.9496V23.9999" fill="#E5D6A0"/>
                                                                <path d="M12.0007 12.2014C15.3144 12.2014 18.0007 9.47004 18.0007 6.10071C18.0007 2.73138 15.3144 0 12.0007 0C8.68702 0 6.00073 2.73138 6.00073 6.10071C6.00073 9.47004 8.68702 12.2014 12.0007 12.2014Z" fill="#E5D6A0"/>
                                                            </svg>
                                                        </div>
                                                        <p class="small_item_info4">{{ count($investment->invests) }}</p>
                                                    </div>
                                                </div>
                                                <div class="small_item_loading_wrapper">
                                                    <div class="small_item_loading_child" style="width: {{ $investment->am_collected/$investment->am_required*100 }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small_item_show_more_text_wrapper">
                                            <p class="small_item_show_more_text">
                                                {{ $investment->description }}
                                            </p>
                                            <button class="read_more_btn">Читать полностью</button>
                                        </div>
                                        <div class="small_item_star_number_wrapper">
                                            <div class="star_svg_wrapper">
                                                <div class="star_svg">
                                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z" stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M13.9372 6.48877L8.18704 11.9775L5.31201 9.23315" stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>


                                                </div>
                                                <div class="jq-ry-group-wrapper"  >
                                                    <div class="jq-ry-normal-group jq-ry-group" >
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    </div>
                                                    <div class="active_star" style= "width:70%">
                                                        <div class="jq-ry-rated-group jq-ry-group">
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
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

                        @if($businesses)
                            @foreach($businesses as $businesse)
                                @if($businesse->status != '0')
                                    <div class="completed_project_small_item">
                                        <div class="small_item_img_text_wrapper">
                                            <div class="small_item_img">
                                                <img src="{{ asset('storage/uploads/'.$businesse->company_logo)  }}" alt="">
                                            </div>
                                            <div class="hidden_img">
                                                <img src="{{ asset('storage/uploads/'.$businesse->company_logo)  }}" alt="">
                                            </div>
                                            <div class="smal_item_text_wrapper">
                                                <div class="small_item_title_svg_wrapper">
                                                    <p class="small_item_title"><a href="{{ route('business.single',['name'=>'business' ,'id'=>$businesse->id ]) }}">{{ $businesse->company_name }}</a></p>
                                                    @auth
                                                        @if(check_bookmark($businesse->id, 'business'))
                                                            <div class="small_item_svg_wrapper added_to_bookmark showBookmark" data-id="{{ $businesse->id }}" data-type="business">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                            <div class="small_item_svg_wrapper add_to_bookmarks" data-id="{{ $businesse->id }}" data-type="business">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                        @else
                                                            <div class="small_item_svg_wrapper add_to_bookmarks showBookmark" data-id="{{ $businesse->id }}" data-type="business">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                            <div class="small_item_svg_wrapper added_to_bookmark" data-id="{{ $businesse->id }}" data-type="business">
                                                                <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>
                                                        @endif
                                                    @endauth
                                                    @guest
                                                        <div class="small_item_svg_wrapper add_to_bookmarks">
                                                            <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                    @endguest

                                                </div>
                                                <p class="hidden_price">{{ number_format($businesse->cost, 0, ',', ' ') }} <span>&#8381;</span></p>
                                                <p class="hidden_city">{{ $businesse->city }} </p>
                                                <p class="small_item_info1">Цена:</p>
                                                <p class="small_item_info2">{{ number_format($businesse->cost, 0, ',', ' ') }} <span>&#8381;</span></p>
                                                <div class="small_item_info_svg_wrapper">
                                                    <p class="small_item_info3"> <span>Город:</span> {{ $businesse->city }}</p>
                                                    <div class="small_item_info4_svg_wrapper">
                                                        <div class="small_item_info4_svg">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M24 23.9999V20.9496C24 19.3316 23.3679 17.7798 22.2426 16.6357C21.1174 15.4916 19.5913 14.8489 18 14.8489H6C4.4087 14.8489 2.88258 15.4916 1.75736 16.6357C0.632141 17.7798 0 19.3316 0 20.9496V23.9999" fill="#E5D6A0"/>
                                                                <path d="M12.0007 12.2014C15.3144 12.2014 18.0007 9.47004 18.0007 6.10071C18.0007 2.73138 15.3144 0 12.0007 0C8.68702 0 6.00073 2.73138 6.00073 6.10071C6.00073 9.47004 8.68702 12.2014 12.0007 12.2014Z" fill="#E5D6A0"/>
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
                                            <button class="read_more_btn">Читать полностью</button>
                                        </div>
                                        <div class="small_item_star_number_wrapper">
                                            <div class="star_svg_wrapper">
                                                <div class="star_svg">
                                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z" stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M13.9372 6.48877L8.18704 11.9775L5.31201 9.23315" stroke="#6DEC98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>


                                                </div>
                                                <div class="jq-ry-group-wrapper"  >
                                                    <div class="jq-ry-normal-group jq-ry-group" >
                                                        <!--?xml version="1.0" encoding="utf-8"?-->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                    </div>
                                                    <div class="active_star" style= "width:70%">
                                                        <div class="jq-ry-rated-group jq-ry-group">
                                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#6DEC98" style="margin-left: 0px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
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
            <div class="empty_projects_wrapper">
                <p class="empty_projects_info">
                    Вы не можете <span>инвестировать</span> в другие проекты и инициализировать сделки по <span>купле/продаже</span>  бизнеса. Для получения описанного функционала измените свою роль в разделе <span>Профиль.</span>
                </p>
            </div>
        </div>

    </section>
</main>


@include('include.footer')

<script src="{{ asset('website/js/my_projects.js') }}"></script>
