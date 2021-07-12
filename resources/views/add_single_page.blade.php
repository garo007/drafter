@include('include.header')
<link rel="stylesheet" href="{{ asset('/website/css/my_companies.css' )}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css"/>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<link rel="stylesheet" href="{{ asset('/website/css/add.css' )}}">
<main>
    <section class="companies">
        <div class="companies_wrapper">
            <div class="k1">
                <a href='/' class="back_link">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L0.999999 9L9 17" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>&nbsp;&nbsp;&nbsp;
                    Назад</a>
            </div>
            @if(isset($investment))
{{--                <form action="" class="about_investment_search_wrapper ">--}}
{{--                    <div class="investment_search_items_wrapper">--}}
{{--                        <div class="investment_search_stars_items_wrapper">--}}
{{--                            <div class="investment_search_item">--}}
{{--                                <div class="investment_search_img">--}}
{{--                                    @if($investment->company_logo != '')--}}
{{--                                        <img src="{{ asset('storage/uploads/'.$investment->company_logo) }}" alt="">--}}
{{--                                    @else--}}
{{--                                        <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                                <div class="bookmark_svg_info_wrapper">--}}
{{--                                    <div class="bookmark_svg_wrapper">--}}
{{--                                        @auth--}}
{{--                                            @if( check_bookmark($investment->id, 'investment'))--}}

{{--                                                <div class="small_item_svg_wrapper added_to_bookmark showBookmark"--}}
{{--                                                     data-id="{{ $investment->id }}" data-type="investment">--}}
{{--                                                    <svg width="20" height="26" viewBox="0 0 34 40" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"--}}
{{--                                                            fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2"--}}
{{--                                                            stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                                    </svg>--}}
{{--                                                </div>--}}
{{--                                                <div class="small_item_svg_wrapper add_to_bookmarks"--}}
{{--                                                     data-id="{{ $investment->id }}" data-type="investment">--}}
{{--                                                    <svg width="20" height="26" viewBox="0 0 20 26" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M19 25L10 18.3333L1 25V3.66667C1 2.95942 1.27092 2.28115 1.75315 1.78105C2.23539 1.28095 2.88944 1 3.57143 1H16.4286C17.1106 1 17.7646 1.28095 18.2468 1.78105C18.7291 2.28115 19 2.95942 19 3.66667V25Z"--}}
{{--                                                            stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"--}}
{{--                                                            stroke-linejoin="round"/>--}}
{{--                                                    </svg>--}}
{{--                                                </div>--}}
{{--                                            @else--}}
{{--                                                <div class="small_item_svg_wrapper add_to_bookmarks showBookmark"--}}
{{--                                                     data-id="{{ $investment->id }}" data-type="investment">--}}
{{--                                                    <svg width="20" height="26" viewBox="0 0 20 26" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M19 25L10 18.3333L1 25V3.66667C1 2.95942 1.27092 2.28115 1.75315 1.78105C2.23539 1.28095 2.88944 1 3.57143 1H16.4286C17.1106 1 17.7646 1.28095 18.2468 1.78105C18.7291 2.28115 19 2.95942 19 3.66667V25Z"--}}
{{--                                                            stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"--}}
{{--                                                            stroke-linejoin="round"/>--}}
{{--                                                    </svg>--}}
{{--                                                </div>--}}
{{--                                                <div class="small_item_svg_wrapper added_to_bookmark"--}}
{{--                                                     data-id="{{ $investment->id }}" data-type="investment">--}}
{{--                                                    <svg width="20" height="26" viewBox="0 0 34 40" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"--}}
{{--                                                            fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2"--}}
{{--                                                            stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                                    </svg>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        @endauth--}}
{{--                                        @guest--}}
{{--                                            <div class="small_item_svg_wrapper add_to_bookmarks"--}}
{{--                                                 data-id="{{ $investment->id }}" data-type="investment">--}}
{{--                                                <svg width="20" height="26" viewBox="0 0 34 40" fill="none"--}}
{{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <path--}}
{{--                                                        d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"--}}
{{--                                                        stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"--}}
{{--                                                        stroke-linejoin="round"/>--}}
{{--                                                </svg>--}}
{{--                                            </div>--}}
{{--                                        @endguest--}}


{{--                                    </div>--}}
{{--                                    <p class="bookmark_info">Добавить в избранное</p>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="investment_search_item  info_second_item">--}}
{{--                                <div class="search_title_stars_wrapper">--}}
{{--                                    <h2 class="search_title">{{ $investment->company_name }}</h2>--}}
{{--                                    <div class="star_svg_wrapper first_star_wrapper">--}}
{{--                                        <div class="svg_wrapper">--}}
{{--                                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                <path--}}
{{--                                                    d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"--}}
{{--                                                    stroke="#848993" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                                    stroke-linejoin="round"/>--}}
{{--                                                <path--}}
{{--                                                    d="M8.88194 11.6156H10.5801V11.4529C10.5891 10.5197 10.9027 10.0842 11.6107 9.62957C12.4486 9.09838 12.9952 8.39491 12.9952 7.27032C12.9952 5.59538 11.7317 4.61914 9.95283 4.61914C8.32633 4.61914 7.00004 5.52839 6.95972 7.44259H8.78785C8.81472 6.66256 9.3569 6.24621 9.94387 6.24621C10.5488 6.24621 11.0372 6.67692 11.0372 7.3421C11.0372 7.969 10.6115 8.38534 10.0604 8.75861C9.30761 9.26588 8.88642 9.77792 8.88194 11.4529V11.6156ZM9.76464 14.6783C10.3382 14.6783 10.8355 14.1662 10.84 13.5298C10.8355 12.9029 10.3382 12.3908 9.76464 12.3908C9.17318 12.3908 8.68479 12.9029 8.68927 13.5298C8.68479 14.1662 9.17318 14.6783 9.76464 14.6783Z"--}}
{{--                                                    fill="#848993"/>--}}
{{--                                                <path--}}
{{--                                                    d="M8.87965 12.6719C8.67698 12.8656 8.57564 13.1515 8.57564 13.5299C8.57564 13.8947 8.67923 14.1784 8.8864 14.3811C9.09358 14.5792 9.38632 14.6783 9.76464 14.6783C10.134 14.6783 10.4222 14.577 10.6294 14.3743C10.8365 14.1672 10.9401 13.8857 10.9401 13.5299C10.9401 13.1606 10.8365 12.8768 10.6294 12.6787C10.4267 12.4805 10.1385 12.3814 9.76464 12.3814C9.37732 12.3814 9.08232 12.4782 8.87965 12.6719Z"--}}
{{--                                                    fill="#848993"/>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="jq-ry-group-wrapper" style="width: 110px">--}}
{{--                                            <div class="jq-ry-normal-group jq-ry-group">--}}
{{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                                     width="32px" height="32px" fill="#848993"><polygon--}}
{{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                                     width="32px" height="32px" fill="#848993"--}}
{{--                                                     style="margin-left: 0px;"><polygon--}}
{{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                                     width="32px" height="32px" fill="#848993"--}}
{{--                                                     style="margin-left: 0px;"><polygon--}}
{{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                                     width="32px" height="32px" fill="#848993"--}}
{{--                                                     style="margin-left: 0px;"><polygon--}}
{{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                                     width="32px" height="32px" fill="#848993"--}}
{{--                                                     style="margin-left: 0px;"><polygon--}}
{{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                            </div>--}}
{{--                                            <div class="active_star" style="width:70%">--}}
{{--                                                <div class="jq-ry-rated-group jq-ry-group">--}}
{{--                                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                --}}{{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                --}}{{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
{{--                                                --}}{{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"><polygon--}}
{{--                                                --}}{{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
{{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"--}}
{{--                                                         style="margin-left: 0px;"><polygon--}}
{{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
{{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"--}}
{{--                                                         style="margin-left: 0px;"><polygon--}}
{{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
{{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"--}}
{{--                                                         style="margin-left: 0px;"><polygon--}}
{{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
{{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"--}}
{{--                                                         style="margin-left: 0px;"><polygon--}}
{{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <p class="investment_search_info1">Ставка:</p>--}}
{{--                                <p class="investment_search_info2">{{ $investment->percentage }}%</p>--}}
{{--                                <div class="investment_search_info_svg_wrapper special_svg_invest_wrapper">--}}
{{--                                    <div class="info">--}}
{{--                                        <p class="investment_search_info5">Всего инвестиций</p>--}}
{{--                                        <p class="investment_search_info3">--}}
{{--                                            {{ number_format($investment->am_collected, 0, ',', ' ')   }}--}}
{{--                                            из {{ number_format($investment->am_required, 0, ',', ' ')   }} &#8381;</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="investment_search_info4_svg_wrapper">--}}
{{--                                        <div class="investment_search_info4_svg">--}}
{{--                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                <path--}}
{{--                                                    d="M24 23.9999V20.9496C24 19.3316 23.3679 17.7798 22.2426 16.6357C21.1174 15.4916 19.5913 14.8489 18 14.8489H6C4.4087 14.8489 2.88258 15.4916 1.75736 16.6357C0.632141 17.7798 0 19.3316 0 20.9496V23.9999"--}}
{{--                                                    fill="#E5D6A0"/>--}}
{{--                                                <path--}}
{{--                                                    d="M12.0007 12.2014C15.3144 12.2014 18.0007 9.47004 18.0007 6.10071C18.0007 2.73138 15.3144 0 12.0007 0C8.68702 0 6.00073 2.73138 6.00073 6.10071C6.00073 9.47004 8.68702 12.2014 12.0007 12.2014Z"--}}
{{--                                                    fill="#E5D6A0"/>--}}
{{--                                            </svg>--}}

{{--                                        </div>--}}
{{--                                        <p class="investment_search_info4">{{ count($investment->invests) }}</p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="investment_search_loading_wrapper">--}}
{{--                                    <div class="investment_search_loading_child"--}}
{{--                                         style="width: {{ $investment->am_collected/$investment->am_required*100 }}%"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="star_svg_wrapper hidden_star_wrapper">--}}
{{--                            <div class="svg_wrapper">--}}
{{--                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path--}}
{{--                                        d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"--}}
{{--                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                        stroke-linejoin="round"/>--}}
{{--                                    <path--}}
{{--                                        d="M8.88194 11.6156H10.5801V11.4529C10.5891 10.5197 10.9027 10.0842 11.6107 9.62957C12.4486 9.09838 12.9952 8.39491 12.9952 7.27032C12.9952 5.59538 11.7317 4.61914 9.95283 4.61914C8.32633 4.61914 7.00004 5.52839 6.95972 7.44259H8.78785C8.81472 6.66256 9.3569 6.24621 9.94387 6.24621C10.5488 6.24621 11.0372 6.67692 11.0372 7.3421C11.0372 7.969 10.6115 8.38534 10.0604 8.75861C9.30761 9.26588 8.88642 9.77792 8.88194 11.4529V11.6156ZM9.76464 14.6783C10.3382 14.6783 10.8355 14.1662 10.84 13.5298C10.8355 12.9029 10.3382 12.3908 9.76464 12.3908C9.17318 12.3908 8.68479 12.9029 8.68927 13.5298C8.68479 14.1662 9.17318 14.6783 9.76464 14.6783Z"--}}
{{--                                        fill="#848993"/>--}}
{{--                                    <path--}}
{{--                                        d="M8.87965 12.6719C8.67698 12.8656 8.57564 13.1515 8.57564 13.5299C8.57564 13.8947 8.67923 14.1784 8.8864 14.3811C9.09358 14.5792 9.38632 14.6783 9.76464 14.6783C10.134 14.6783 10.4222 14.577 10.6294 14.3743C10.8365 14.1672 10.9401 13.8857 10.9401 13.5299C10.9401 13.1606 10.8365 12.8768 10.6294 12.6787C10.4267 12.4805 10.1385 12.3814 9.76464 12.3814C9.37732 12.3814 9.08232 12.4782 8.87965 12.6719Z"--}}
{{--                                        fill="#848993"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div class="jq-ry-group-wrapper">--}}
{{--                                <div class="jq-ry-normal-group jq-ry-group">--}}
{{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
{{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"><polygon--}}
{{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
{{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"--}}
{{--                                         style="margin-left: 0px;"><polygon--}}
{{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
{{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"--}}
{{--                                         style="margin-left: 0px;"><polygon--}}
{{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
{{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"--}}
{{--                                         style="margin-left: 0px;"><polygon--}}
{{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
{{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"--}}
{{--                                         style="margin-left: 0px;"><polygon--}}
{{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                </div>--}}
{{--                                <div class="active_star" style="width:70%">--}}
{{--                                    <div class="jq-ry-rated-group jq-ry-group">--}}
{{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                             width="32px" height="32px" fill="#FF8D4E"><polygon--}}
{{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                             width="32px" height="32px" fill="#FF8D4E" style="margin-left: 0px;"><polygon--}}
{{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                             width="32px" height="32px" fill="#FF8D4E" style="margin-left: 0px;"><polygon--}}
{{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                             width="32px" height="32px" fill="#FF8D4E" style="margin-left: 0px;"><polygon--}}
{{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
{{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
{{--                                             width="32px" height="32px" fill="#FF8D4E" style="margin-left: 0px;"><polygon--}}
{{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="about_project_progress_items_wrapper special_secondly_progress_projects">--}}
{{--                        <div class="about_project_progress_item_titles_wrapper">--}}
{{--                            <p class="about_project_progress_item_main_title active" id="special_title1"--}}
{{--                               data-id="open_div1">О проекте</p>--}}
{{--                            <p class="about_project_progress_item_main_title" id="special_title2" data-id="open_div2">--}}
{{--                                Ход работы</p>--}}
{{--                        </div>--}}
{{--                        <div class="about_project_progress_item open" id="open_div1">--}}
{{--                            @if($add_images->count() > 0)--}}

{{--                                <h2 class="about_project_progress_item_title">Фото</h2>--}}
{{--                                <div class="swiper_btn_slides_wrapper swiper_slider_special_second">--}}

{{--                                    <div class="swiper-button-prev"></div>--}}
{{--                                    <div class="swiper-container" id="first_swiper_container">--}}
{{--                                        <div class="swiper-wrapper">--}}

{{--                                            @foreach($add_images as $image)--}}
{{--                                                <div class="swiper-slide">--}}
{{--                                                    <div class="slider_slide_img">--}}
{{--                                                        <img--}}
{{--                                                            src="{{ asset('/storage/investment_gallery\\').$image->name }}"--}}
{{--                                                            alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endforeach--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-button-next"></div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                            <div class="description_wrapper">--}}
{{--                                <p class="description_title">Описание</p>--}}
{{--                                <div class="small_item_show_more_text_wrapper">--}}
{{--                                    <p class="small_item_show_more_text description_info">--}}
{{--                                        {{ $investment->description }}--}}
{{--                                        --}}{{--                                <span class="small_item_show_more_text2">--}}
{{--                                        --}}{{--                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat--}}
{{--                                        --}}{{--                                           </span>--}}
{{--                                    </p>--}}
{{--                                    <button class="read_more_btn" type="button">Читать полностью</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form_btns_wrapper">--}}
{{--                                @auth()--}}
{{--                                    @if($investment->user_id != auth()->user()->id)--}}

{{--                                        <button class="form_btn open_invest_modal" type="button">Инвестировать</button>--}}
{{--                                    @else--}}
{{--                                        <div class="form_btns_wrapper">--}}
{{--                                            <button class="form_btn form_first_btn" type="button">Редактировать</button>--}}
{{--                                            <a href="{{ route('investors.show',$investment->id) }}" class="form_btn">Инвесторы</a>--}}
{{--                                        </div>--}}

{{--                                    @endif--}}

{{--                                @endauth--}}
{{--                                @guest()--}}
{{--                                    <div class="form_btns_wrapper">--}}
{{--                                        <button class="form_btn form_first_btn" type="button"><a--}}
{{--                                                href="{{ route('login2') }}"> зарегистрироваться </a></button>--}}
{{--                                    </div>--}}
{{--                                @endguest--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="about_project_progress_item" id="open_div2">--}}
{{--                            <div class="first_project_swiper">--}}

{{--                                <div class="swiper-container" id="second_swiper_container">--}}
{{--                                    <h2 class="about_project_progress_item_title">12.03.2021</h2>--}}
{{--                                    <div class="swiper-wrapper">--}}
{{--                                        @if($add_images)--}}
{{--                                            @foreach($add_images as $image)--}}
{{--                                                <div class="swiper-slide">--}}
{{--                                                    <div class="slider_slide_img">--}}
{{--                                                        <img--}}
{{--                                                            src="{{ asset('/storage/investment_gallery\\').$image->name }}"--}}
{{--                                                            alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endforeach--}}
{{--                                        @endif--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!-- If we need navigation buttons -->--}}
{{--                                <div class="swiper-button-prev swiper_button_prev_second"></div>--}}
{{--                                <div class="swiper-button-next swiper_button_next_second"></div>--}}
{{--                                <div class="small_item_show_more_text_wrapper">--}}
{{--                                    <p class="small_item_show_more_text description_info">--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor--}}
{{--                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis--}}
{{--                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
{{--                                        consequat<span class="dots">...</span>--}}
{{--                                        <span class="small_item_show_more_text2">--}}
{{--                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat--}}
{{--                                           </span>--}}
{{--                                    </p>--}}
{{--                                    <button class="read_more_btn" type="button">Читать полностью</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="second_project_swiper">--}}
{{--                                <div class="slider_bts_img_wrapper">--}}
{{--                                    <div class="swiper-button-prev swiper_button_prev_third"></div>--}}
{{--                                    <div class="swiper-container" id="third_swiper_container">--}}
{{--                                        <h2 class="about_project_progress_item_title">12.03.2021</h2>--}}
{{--                                        <div class="swiper-wrapper">--}}
{{--                                            @if($add_images)--}}
{{--                                                @foreach($add_images as $image)--}}
{{--                                                    <div class="swiper-slide">--}}
{{--                                                        <div class="slider_slide_img">--}}
{{--                                                            <img--}}
{{--                                                                src="{{ asset('/storage/investment_gallery\\').$image->name }}"--}}
{{--                                                                alt="">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                @endforeach--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="swiper-button-next swiper_button_next_third"></div>--}}
{{--                                </div>--}}
{{--                                <div class="small_item_show_more_text_wrapper">--}}
{{--                                    <p class="small_item_show_more_text description_info">--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor--}}
{{--                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis--}}
{{--                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
{{--                                        consequat<span class="dots">...</span>--}}
{{--                                        <span class="small_item_show_more_text2">--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat--}}
{{--                                       </span>--}}
{{--                                    </p>--}}
{{--                                    <button class="read_more_btn " type="button">Читать полностью</button>--}}
{{--                                </div>--}}
{{--                                @auth()--}}
{{--                                    <div class="form_btns_wrapper">--}}
{{--                                        <button class="form_btn  form_first_btn">--}}

{{--                                            Связаться--}}
{{--                                        </button>--}}
{{--                                        <button class="form_btn open_invest_modal" type="button">--}}

{{--                                            Инвестировать--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                @endauth--}}
{{--                            </div>--}}


{{--                        </div>--}}

{{--                    </div>--}}


{{--                </form>--}}
                <main>
                    <section class="add">
                        <div class="add_wrapper">

                            <h1 class="add_title">
                                Как вы хотите произвести покупки?
                            </h1>
                            <div class="add_items_wrapper">
                                <div class="add_item first_add_item">
                                    <div class="add_item_svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="80" height="80" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <g>
                                                            <circle cx="256" cy="378.5" r="25" fill="#d2be8b" data-original="#000000" style="" class=""/>
                                                            <path d="M256,0C114.516,0,0,114.497,0,256c0,141.484,114.497,256,256,256c141.484,0,256-114.497,256-256     C512,114.516,397.503,0,256,0z M256,472c-119.377,0-216-96.607-216-216c0-119.377,96.607-216,216-216     c119.377,0,216,96.607,216,216C472,375.377,375.393,472,256,472z" fill="#d2be8b" data-original="#000000" style="" class=""/>
                                                            <path d="M256,128.5c-44.112,0-80,35.888-80,80c0,11.046,8.954,20,20,20s20-8.954,20-20c0-22.056,17.944-40,40-40     c22.056,0,40,17.944,40,40c0,22.056-17.944,40-40,40c-11.046,0-20,8.954-20,20v50c0,11.046,8.954,20,20,20     c11.046,0,20-8.954,20-20v-32.531c34.466-8.903,60-40.26,60-77.469C336,164.388,300.112,128.5,256,128.5z" fill="#d2be8b" data-original="#000000" style="" class=""/>
                                                        </g>
                                                    </g>
                                                </g>

                                            </g>
                                        </svg>

                                    </div>
                                    <p class="add_item_title">
                                        Подсказка, для чего следует выбрать этот путь
                                    </p>
                                    <a href="" class="add_link">
                                        Mне нужно помощь в покупке
                                    </a>
                                </div>
                                <div class="add_items_wrapper">
                                    <div class="add_item first_add_item">
                                        <div class="add_item_svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                                 version="1.1" width="80" height="80" x="0" y="0" viewBox="0 0 512.001 512.001"
                                                 style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                                    <g xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path
                                                                d="M507.608,4.395c-4.243-4.244-10.609-5.549-16.177-3.321L9.43,193.872c-5.515,2.206-9.208,7.458-9.42,13.395    c-0.211,5.936,3.101,11.437,8.445,14.029l190.068,92.181l92.182,190.068c2.514,5.184,7.764,8.455,13.493,8.455    c0.178,0,0.357-0.003,0.536-0.01c5.935-0.211,11.189-3.904,13.394-9.419l192.8-481.998    C513.156,15.001,511.851,8.638,507.608,4.395z M52.094,209.118L434.72,56.069L206.691,284.096L52.094,209.118z M302.883,459.907    l-74.979-154.599l228.03-228.027L302.883,459.907z"
                                                                fill="#d2be8b" data-original="#000000" style="" class=""/>
                                                        </g>

                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="add_item_title">
                                            Подсказка, для чего следует выбрать этот путь
                                        </p>
                                        <a href="" class="add_link">
                                            Связаться с заемщиком в чате
                                        </a>
                                    </div>

                                    <div class="add_items_wrapper">
                                        <div class="add_item first_add_item">
                                            <div class="add_item_svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="80" height="80" x="0" y="0" viewBox="0 0 241.73 241.73" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                    <g>
                                                        <g xmlns="http://www.w3.org/2000/svg">
                                                            <path style="" d="M234.771,181.213l-34.938-34.953c-4.692-4.668-10.975-7.24-17.689-7.24   c-6.987,0-13.584,2.751-18.572,7.742l-13.6,13.597c-10.568-5.874-24.614-13.953-39.197-28.536   c-14.566-14.571-22.646-28.576-28.55-39.201l13.613-13.603c10.121-10.142,10.328-26.413,0.463-36.269L61.37,7.818   c-4.679-4.692-10.962-7.276-17.693-7.276c-6.831,0-13.293,2.63-18.252,7.417c-3,2.416-18.055,15.706-23.666,43.114   c-7.856,38.363,10.194,75.274,62.302,127.403c58.209,58.191,107.902,62.714,121.746,62.714c2.882,0,4.621-0.178,5.085-0.232   c27.147-3.182,36.867-15.238,43.964-24.041C244.052,205.508,244.02,190.496,234.771,181.213z M223.178,207.502   c-6.671,8.274-12.971,16.088-34.031,18.557c-0.011,0.001-1.163,0.13-3.34,0.13c-12.386,0-57.008-4.206-111.139-58.32   C26.615,119.796,9.749,86.829,16.454,54.081c4.894-23.906,17.887-34.067,18.392-34.453l0.448-0.331l0.393-0.394   c2.169-2.167,5.006-3.361,7.989-3.361c2.716,0,5.228,1.018,7.08,2.876l34.939,34.94c4.02,4.016,3.806,10.774-0.471,15.06   L69.829,83.8l-0.253,0.265c-4.012,4.419-3.54,10.391-1.33,14.28c6.377,11.508,15.112,27.269,31.92,44.082   c16.752,16.752,32.49,25.48,43.966,31.845c1.149,0.645,3.521,1.727,6.49,1.727c3.506,0,6.725-1.484,9.108-4.189l14.448-14.444   c2.157-2.158,4.985-3.347,7.964-3.347c2.722,0,5.247,1.021,7.095,2.859l34.915,34.93   C228.587,196.259,226.756,203.064,223.178,207.502z" fill="#d2be8b" data-original="#000002"/>
                                                            <path style="" d="M146.447,37.293c12.887,1.483,28.061,9.289,38.657,19.886c10.695,10.695,18.52,26.023,19.933,39.05   c0.417,3.843,3.667,6.691,7.447,6.691c0.27,0,0.544-0.015,0.818-0.044c4.118-0.447,7.094-4.147,6.647-8.265   c-1.787-16.467-11.075-34.874-24.238-48.038c-13.04-13.041-31.259-22.306-47.549-24.181c-4.113-0.477-7.834,2.479-8.308,6.593   C139.38,33.099,142.331,36.819,146.447,37.293z" fill="#d2be8b" data-original="#000002"/>
                                                            <path style="" d="M139.44,68.711c6.97,0.803,16.616,5.973,22.935,12.292c6.373,6.374,11.553,16.112,12.316,23.157   c0.417,3.844,3.667,6.692,7.447,6.692c0.27,0,0.543-0.015,0.817-0.044c4.118-0.447,7.095-4.147,6.648-8.265   c-1.304-12.028-9.289-24.813-16.623-32.147c-7.268-7.269-19.928-15.216-31.825-16.587c-4.119-0.479-7.835,2.478-8.309,6.592   C132.373,64.516,135.325,68.237,139.44,68.711z" fill="#d2be8b" data-original="#000002"/>
                                                        </g>
                                                    </g>
                                                </svg>

                                            </div>
                                            <p class="add_item_title">
                                                Подсказка, для чего следует выбрать этот путь
                                            </p>
                                            <a href="tel:   " class="add_link">
                                                Позвонить заемщику
                                            </a>

                                        </div>
                                    </div>
                                </div>
                    </section>
                </main>
            @elseif(isset($business))

                {{--                <form action="" class="about_investment_search_wrapper ">--}}
                {{--                    <div class="investment_search_items_wrapper">--}}
                {{--                        <div class="investment_search_stars_items_wrapper">--}}
                {{--                            <div class="investment_search_item">--}}
                {{--                                <div class="investment_search_img">--}}
                {{--                                    @if($business->company_logo != '')--}}
                {{--                                        <img src="{{ asset('storage/uploads/'.$business->company_logo) }}" alt="">--}}
                {{--                                    @else--}}
                {{--                                        <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">--}}
                {{--                                    @endif--}}
                {{--                                </div>--}}

                {{--                            </div>--}}
                {{--                            <div class="investment_search_item  info_second_item">--}}
                {{--                                <div class="search_title_stars_wrapper">--}}
                {{--                                    <h2 class="search_title">{{ $business->company_name }}</h2>--}}
                {{--                                    <div class="star_svg_wrapper first_star_wrapper">--}}
                {{--                                        <div class="svg_wrapper">--}}
                {{--                                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"--}}
                {{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                                <path--}}
                {{--                                                    d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"--}}
                {{--                                                    stroke="#848993" stroke-width="1.5" stroke-linecap="round"--}}
                {{--                                                    stroke-linejoin="round"/>--}}
                {{--                                                <path--}}
                {{--                                                    d="M8.88194 11.6156H10.5801V11.4529C10.5891 10.5197 10.9027 10.0842 11.6107 9.62957C12.4486 9.09838 12.9952 8.39491 12.9952 7.27032C12.9952 5.59538 11.7317 4.61914 9.95283 4.61914C8.32633 4.61914 7.00004 5.52839 6.95972 7.44259H8.78785C8.81472 6.66256 9.3569 6.24621 9.94387 6.24621C10.5488 6.24621 11.0372 6.67692 11.0372 7.3421C11.0372 7.969 10.6115 8.38534 10.0604 8.75861C9.30761 9.26588 8.88642 9.77792 8.88194 11.4529V11.6156ZM9.76464 14.6783C10.3382 14.6783 10.8355 14.1662 10.84 13.5298C10.8355 12.9029 10.3382 12.3908 9.76464 12.3908C9.17318 12.3908 8.68479 12.9029 8.68927 13.5298C8.68479 14.1662 9.17318 14.6783 9.76464 14.6783Z"--}}
                {{--                                                    fill="#848993"/>--}}
                {{--                                                <path--}}
                {{--                                                    d="M8.87965 12.6719C8.67698 12.8656 8.57564 13.1515 8.57564 13.5299C8.57564 13.8947 8.67923 14.1784 8.8864 14.3811C9.09358 14.5792 9.38632 14.6783 9.76464 14.6783C10.134 14.6783 10.4222 14.577 10.6294 14.3743C10.8365 14.1672 10.9401 13.8857 10.9401 13.5299C10.9401 13.1606 10.8365 12.8768 10.6294 12.6787C10.4267 12.4805 10.1385 12.3814 9.76464 12.3814C9.37732 12.3814 9.08232 12.4782 8.87965 12.6719Z"--}}
                {{--                                                    fill="#848993"/>--}}
                {{--                                            </svg>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="jq-ry-group-wrapper">--}}
                {{--                                            <div class="jq-ry-normal-group jq-ry-group">--}}
                {{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                                     width="32px" height="32px" fill="#848993"><polygon--}}
                {{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                                     width="32px" height="32px" fill="#848993"--}}
                {{--                                                     style="margin-left: 0px;"><polygon--}}
                {{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                                     width="32px" height="32px" fill="#848993"--}}
                {{--                                                     style="margin-left: 0px;"><polygon--}}
                {{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                                     width="32px" height="32px" fill="#848993"--}}
                {{--                                                     style="margin-left: 0px;"><polygon--}}
                {{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                                <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                                     width="32px" height="32px" fill="#848993"--}}
                {{--                                                     style="margin-left: 0px;"><polygon--}}
                {{--                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="active_star" style="width:70%">--}}
                {{--                                                <div class="jq-ry-rated-group jq-ry-group">--}}
                {{--                                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
                {{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"><polygon--}}
                {{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
                {{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"--}}
                {{--                                                         style="margin-left: 0px;"><polygon--}}
                {{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
                {{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"--}}
                {{--                                                         style="margin-left: 0px;"><polygon--}}
                {{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
                {{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"--}}
                {{--                                                         style="margin-left: 0px;"><polygon--}}
                {{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                         viewBox="0 12.705 512 486.59" x="0px" y="0px"--}}
                {{--                                                         xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"--}}
                {{--                                                         style="margin-left: 0px;"><polygon--}}
                {{--                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}

                {{--                                    </div>--}}

                {{--                                </div>--}}
                {{--                                <div class="bookmark_svg_info_wrapper">--}}
                {{--                                    <div class="bookmark_svg_wrapper">--}}

                {{--                                        @auth--}}
                {{--                                            @if( check_bookmark($business->id, 'investment'))--}}

                {{--                                                <div class="small_item_svg_wrapper added_to_bookmark showBookmark"--}}
                {{--                                                     data-id="{{ $business->id }}" data-type="business">--}}
                {{--                                                    <svg width="20" height="26" viewBox="0 0 34 40" fill="none"--}}
                {{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                                        <path--}}
                {{--                                                            d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"--}}
                {{--                                                            fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2"--}}
                {{--                                                            stroke-linecap="round" stroke-linejoin="round"/>--}}
                {{--                                                    </svg>--}}
                {{--                                                </div>--}}
                {{--                                                <div class="small_item_svg_wrapper add_to_bookmarks"--}}
                {{--                                                     data-id="{{ $business->id }}" data-type="business">--}}
                {{--                                                    <svg width="20" height="26" viewBox="0 0 20 26" fill="none"--}}
                {{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                                        <path--}}
                {{--                                                            d="M19 25L10 18.3333L1 25V3.66667C1 2.95942 1.27092 2.28115 1.75315 1.78105C2.23539 1.28095 2.88944 1 3.57143 1H16.4286C17.1106 1 17.7646 1.28095 18.2468 1.78105C18.7291 2.28115 19 2.95942 19 3.66667V25Z"--}}
                {{--                                                            stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"--}}
                {{--                                                            stroke-linejoin="round"/>--}}
                {{--                                                    </svg>--}}
                {{--                                                </div>--}}
                {{--                                            @else--}}
                {{--                                                <div class="small_item_svg_wrapper add_to_bookmarks showBookmark"--}}
                {{--                                                     data-id="{{ $business->id }}" data-type="business">--}}
                {{--                                                    <svg width="20" height="26" viewBox="0 0 20 26" fill="none"--}}
                {{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                                        <path--}}
                {{--                                                            d="M19 25L10 18.3333L1 25V3.66667C1 2.95942 1.27092 2.28115 1.75315 1.78105C2.23539 1.28095 2.88944 1 3.57143 1H16.4286C17.1106 1 17.7646 1.28095 18.2468 1.78105C18.7291 2.28115 19 2.95942 19 3.66667V25Z"--}}
                {{--                                                            stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"--}}
                {{--                                                            stroke-linejoin="round"/>--}}
                {{--                                                    </svg>--}}
                {{--                                                </div>--}}

                {{--                                                <div class="small_item_svg_wrapper added_to_bookmark"--}}
                {{--                                                     data-id="{{ $business->id }}" data-type="business">--}}
                {{--                                                    <svg width="20" height="26" viewBox="0 0 34 40" fill="none"--}}
                {{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                                        <path--}}
                {{--                                                            d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"--}}
                {{--                                                            fill="#E5D6A0" stroke="#E5D6A0" stroke-width="2"--}}
                {{--                                                            stroke-linecap="round" stroke-linejoin="round"/>--}}
                {{--                                                    </svg>--}}
                {{--                                                </div>--}}
                {{--                                            @endif--}}
                {{--                                        @endauth--}}
                {{--                                        @guest--}}
                {{--                                            <div class="small_item_svg_wrapper add_to_bookmarks"--}}
                {{--                                                 data-id="{{ $business->id }}" data-type="business">--}}
                {{--                                                <svg width="20" height="26" viewBox="0 0 34 40" fill="none"--}}
                {{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                                    <path--}}
                {{--                                                        d="M33 39L17 28.4444L1 39V5.22222C1 4.10242 1.48163 3.02848 2.33894 2.23666C3.19625 1.44484 4.35901 1 5.57143 1H28.4286C29.641 1 30.8038 1.44484 31.6611 2.23666C32.5184 3.02848 33 4.10242 33 5.22222V39Z"--}}
                {{--                                                        stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"--}}
                {{--                                                        stroke-linejoin="round"/>--}}
                {{--                                                </svg>--}}
                {{--                                            </div>--}}
                {{--                                        @endguest--}}

                {{--                                    </div>--}}
                {{--                                    <p class="bookmark_info">Добавить в избранное</p>--}}

                {{--                                </div>--}}
                {{--                                <p class="investment_search_info1">Цена:</p>--}}
                {{--                                <p class="investment_search_info2">--}}
                {{--                                    {{ number_format($business->cost, 0, ',', ' ') }}<span>&#8381;</span>--}}
                {{--                                </p>--}}
                {{--                                <div class="investment_search_info_svg_wrapper">--}}
                {{--                                    <div class="info">--}}
                {{--                                        <p class="investment_search_info5">Город</p>--}}
                {{--                                        <p class="investment_search_info3"> {{ $business->city }}</p>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="investment_search_info4_svg_wrapper">--}}
                {{--                                        <div class="investment_search_info4_svg">--}}
                {{--                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
                {{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                                <path--}}
                {{--                                                    d="M24 23.9999V20.9496C24 19.3316 23.3679 17.7798 22.2426 16.6357C21.1174 15.4916 19.5913 14.8489 18 14.8489H6C4.4087 14.8489 2.88258 15.4916 1.75736 16.6357C0.632141 17.7798 0 19.3316 0 20.9496V23.9999"--}}
                {{--                                                    fill="#E5D6A0"/>--}}
                {{--                                                <path--}}
                {{--                                                    d="M12.0007 12.2014C15.3144 12.2014 18.0007 9.47004 18.0007 6.10071C18.0007 2.73138 15.3144 0 12.0007 0C8.68702 0 6.00073 2.73138 6.00073 6.10071C6.00073 9.47004 8.68702 12.2014 12.0007 12.2014Z"--}}
                {{--                                                    fill="#E5D6A0"/>--}}
                {{--                                            </svg>--}}

                {{--                                        </div>--}}
                {{--                                        <p class="investment_search_info4">0</p>--}}
                {{--                                    </div>--}}

                {{--                                </div>--}}

                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="star_svg_wrapper hidden_star_wrapper">--}}
                {{--                            <div class="svg_wrapper">--}}
                {{--                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none"--}}
                {{--                                     xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                    <path--}}
                {{--                                        d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"--}}
                {{--                                        stroke="#848993" stroke-width="1.5" stroke-linecap="round"--}}
                {{--                                        stroke-linejoin="round"/>--}}
                {{--                                    <path--}}
                {{--                                        d="M8.88194 11.6156H10.5801V11.4529C10.5891 10.5197 10.9027 10.0842 11.6107 9.62957C12.4486 9.09838 12.9952 8.39491 12.9952 7.27032C12.9952 5.59538 11.7317 4.61914 9.95283 4.61914C8.32633 4.61914 7.00004 5.52839 6.95972 7.44259H8.78785C8.81472 6.66256 9.3569 6.24621 9.94387 6.24621C10.5488 6.24621 11.0372 6.67692 11.0372 7.3421C11.0372 7.969 10.6115 8.38534 10.0604 8.75861C9.30761 9.26588 8.88642 9.77792 8.88194 11.4529V11.6156ZM9.76464 14.6783C10.3382 14.6783 10.8355 14.1662 10.84 13.5298C10.8355 12.9029 10.3382 12.3908 9.76464 12.3908C9.17318 12.3908 8.68479 12.9029 8.68927 13.5298C8.68479 14.1662 9.17318 14.6783 9.76464 14.6783Z"--}}
                {{--                                        fill="#848993"/>--}}
                {{--                                    <path--}}
                {{--                                        d="M8.87965 12.6719C8.67698 12.8656 8.57564 13.1515 8.57564 13.5299C8.57564 13.8947 8.67923 14.1784 8.8864 14.3811C9.09358 14.5792 9.38632 14.6783 9.76464 14.6783C10.134 14.6783 10.4222 14.577 10.6294 14.3743C10.8365 14.1672 10.9401 13.8857 10.9401 13.5299C10.9401 13.1606 10.8365 12.8768 10.6294 12.6787C10.4267 12.4805 10.1385 12.3814 9.76464 12.3814C9.37732 12.3814 9.08232 12.4782 8.87965 12.6719Z"--}}
                {{--                                        fill="#848993"/>--}}
                {{--                                </svg>--}}
                {{--                            </div>--}}
                {{--                            <div class="jq-ry-group-wrapper">--}}
                {{--                                <div class="jq-ry-normal-group jq-ry-group">--}}
                {{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
                {{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"><polygon--}}
                {{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
                {{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"--}}
                {{--                                         style="margin-left: 0px;"><polygon--}}
                {{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
                {{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"--}}
                {{--                                         style="margin-left: 0px;"><polygon--}}
                {{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
                {{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"--}}
                {{--                                         style="margin-left: 0px;"><polygon--}}
                {{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                    <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"--}}
                {{--                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"--}}
                {{--                                         style="margin-left: 0px;"><polygon--}}
                {{--                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                </div>--}}
                {{--                                <div class="active_star" style="width:107%">--}}
                {{--                                    <div class="jq-ry-rated-group jq-ry-group" style="width: 7rem">--}}
                {{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                             width="32px" height="32px" fill="#FF8D4E"><polygon--}}
                {{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                             width="32px" height="32px" fill="#FF8D4E" style="margin-left: 0px;"><polygon--}}
                {{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                             width="32px" height="32px" fill="#FF8D4E" style="margin-left: 0px;"><polygon--}}
                {{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                             width="32px" height="32px" fill="#FF8D4E" style="margin-left: 0px;"><polygon--}}
                {{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                        <!--?xml version="1.0" encoding="utf-8"?-->--}}
                {{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                             viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                {{--                                             width="32px" height="32px" fill="#FF8D4E" style="margin-left: 0px;"><polygon--}}
                {{--                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}

                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="about_project_progress_items_wrapper">--}}
                {{--                        <div class="about_project_progress_item open" id="open_div1">--}}
                {{--                            <h2 class="about_project_progress_item_title">Фото</h2>--}}
                {{--                            <div class="swiper_btn_slides_wrapper swiper_slider_special_second">--}}

                {{--                                <div class="swiper-button-prev"></div>--}}
                {{--                                <div class="swiper-container" id="first_swiper_container">--}}
                {{--                                    <div class="swiper-wrapper">--}}
                {{--                                        @if($add_images->count() == 1)--}}
                {{--                                            <img src="{{ asset('/storage/business_gallery\\').$add_images[0]['name'] }}"--}}
                {{--                                                 alt="">--}}
                {{--                                        @else--}}
                {{--                                            @foreach($add_images as $image)--}}
                {{--                                                <div class="swiper-slide">--}}
                {{--                                                    <div class="slider_slide_img">--}}
                {{--                                                        <img src="{{ asset('/storage/business_gallery\\').$image->name }}"--}}
                {{--                                                             alt="">--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}
                {{--                                            @endforeach--}}
                {{--                                        @endif--}}



                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="swiper-button-next"></div>--}}
                {{--                            </div>--}}

                {{--                            <div class="description_wrapper">--}}
                {{--                                <p class="description_title">Описание</p>--}}
                {{--                                <div class="small_item_show_more_text_wrapper">--}}
                {{--                                    <p class="small_item_show_more_text description_info" style="white-space: pre-line;display: table-cell;">--}}
                {{--                                        {{$business->description }}--}}
                {{--                                    </p>--}}
                {{--                                    <button class="read_more_btn" type="button">Читать полностью</button>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            @auth()--}}
                {{--                                <div class="form_btns_wrapper">--}}
                {{--                                    <button class="form_btn form_first_btn"><a--}}
                {{--                                            href="{{ route('business.purchase',$business->id) }}"> Связаться</a>--}}
                {{--                                    </button>--}}
                {{--                                    <button class="form_btn form_first_btn"><a--}}
                {{--                                            href="{{ route('business.sentence',$business->id) }}"> Предложения</a>--}}
                {{--                                    </button>--}}
                {{--                                </div>--}}

                {{--                            @endauth--}}
                {{--                            @guest()--}}
                {{--                                <div class="form_btns_wrapper">--}}
                {{--                                    <button class="form_btn form_first_btn"><a href="{{ route('login2') }}">--}}
                {{--                                            Зарегистрироватся </a></button>--}}
                {{--                                </div>--}}
                {{--                            @endauth--}}


                {{--                        </div>--}}

                {{--                    </div>--}}


                {{--                </form>--}}

                <main>
                    <section class="add">
                        <div class="add_wrapper">

                            <h1 class="add_title">
                                Как вы хотите произвести покупки?
                            </h1>
                            <div class="add_items_wrapper">
                                <div class="add_item first_add_item">
                                    <div class="add_item_svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="80" height="80" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <g>
                                                            <circle cx="256" cy="378.5" r="25" fill="#d2be8b" data-original="#000000" style="" class=""/>
                                                            <path d="M256,0C114.516,0,0,114.497,0,256c0,141.484,114.497,256,256,256c141.484,0,256-114.497,256-256     C512,114.516,397.503,0,256,0z M256,472c-119.377,0-216-96.607-216-216c0-119.377,96.607-216,216-216     c119.377,0,216,96.607,216,216C472,375.377,375.393,472,256,472z" fill="#d2be8b" data-original="#000000" style="" class=""/>
                                                            <path d="M256,128.5c-44.112,0-80,35.888-80,80c0,11.046,8.954,20,20,20s20-8.954,20-20c0-22.056,17.944-40,40-40     c22.056,0,40,17.944,40,40c0,22.056-17.944,40-40,40c-11.046,0-20,8.954-20,20v50c0,11.046,8.954,20,20,20     c11.046,0,20-8.954,20-20v-32.531c34.466-8.903,60-40.26,60-77.469C336,164.388,300.112,128.5,256,128.5z" fill="#d2be8b" data-original="#000000" style="" class=""/>
                                                        </g>
                                                    </g>
                                                </g>

                                            </g>
                                        </svg>

                                    </div>
                                    <p class="add_item_title">
                                        Подсказка, для чего следует выбрать этот путь
                                    </p>
                                    <a href="" class="add_link">
                                        Mне нужно помощь в покупке
                                    </a>
                                </div>
                                <div class="add_items_wrapper">
                                    <div class="add_item first_add_item">
                                        <div class="add_item_svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                                 version="1.1" width="80" height="80" x="0" y="0" viewBox="0 0 512.001 512.001"
                                                 style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                                    <g xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path
                                                                d="M507.608,4.395c-4.243-4.244-10.609-5.549-16.177-3.321L9.43,193.872c-5.515,2.206-9.208,7.458-9.42,13.395    c-0.211,5.936,3.101,11.437,8.445,14.029l190.068,92.181l92.182,190.068c2.514,5.184,7.764,8.455,13.493,8.455    c0.178,0,0.357-0.003,0.536-0.01c5.935-0.211,11.189-3.904,13.394-9.419l192.8-481.998    C513.156,15.001,511.851,8.638,507.608,4.395z M52.094,209.118L434.72,56.069L206.691,284.096L52.094,209.118z M302.883,459.907    l-74.979-154.599l228.03-228.027L302.883,459.907z"
                                                                fill="#d2be8b" data-original="#000000" style="" class=""/>
                                                        </g>

                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="add_item_title">
                                            Подсказка, для чего следует выбрать этот путь
                                        </p>
                                        <a href="" class="add_link">
                                            Связаться с продавцом в чате
                                        </a>
                                    </div>
                                    <div class="add_items_wrapper">
                                        <div class="add_item first_add_item">
                                            <div class="add_item_svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="80" height="80" x="0" y="0" viewBox="0 0 241.73 241.73" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                    <g>
                                                        <g xmlns="http://www.w3.org/2000/svg">
                                                            <path style="" d="M234.771,181.213l-34.938-34.953c-4.692-4.668-10.975-7.24-17.689-7.24   c-6.987,0-13.584,2.751-18.572,7.742l-13.6,13.597c-10.568-5.874-24.614-13.953-39.197-28.536   c-14.566-14.571-22.646-28.576-28.55-39.201l13.613-13.603c10.121-10.142,10.328-26.413,0.463-36.269L61.37,7.818   c-4.679-4.692-10.962-7.276-17.693-7.276c-6.831,0-13.293,2.63-18.252,7.417c-3,2.416-18.055,15.706-23.666,43.114   c-7.856,38.363,10.194,75.274,62.302,127.403c58.209,58.191,107.902,62.714,121.746,62.714c2.882,0,4.621-0.178,5.085-0.232   c27.147-3.182,36.867-15.238,43.964-24.041C244.052,205.508,244.02,190.496,234.771,181.213z M223.178,207.502   c-6.671,8.274-12.971,16.088-34.031,18.557c-0.011,0.001-1.163,0.13-3.34,0.13c-12.386,0-57.008-4.206-111.139-58.32   C26.615,119.796,9.749,86.829,16.454,54.081c4.894-23.906,17.887-34.067,18.392-34.453l0.448-0.331l0.393-0.394   c2.169-2.167,5.006-3.361,7.989-3.361c2.716,0,5.228,1.018,7.08,2.876l34.939,34.94c4.02,4.016,3.806,10.774-0.471,15.06   L69.829,83.8l-0.253,0.265c-4.012,4.419-3.54,10.391-1.33,14.28c6.377,11.508,15.112,27.269,31.92,44.082   c16.752,16.752,32.49,25.48,43.966,31.845c1.149,0.645,3.521,1.727,6.49,1.727c3.506,0,6.725-1.484,9.108-4.189l14.448-14.444   c2.157-2.158,4.985-3.347,7.964-3.347c2.722,0,5.247,1.021,7.095,2.859l34.915,34.93   C228.587,196.259,226.756,203.064,223.178,207.502z" fill="#d2be8b" data-original="#000002"/>
                                                            <path style="" d="M146.447,37.293c12.887,1.483,28.061,9.289,38.657,19.886c10.695,10.695,18.52,26.023,19.933,39.05   c0.417,3.843,3.667,6.691,7.447,6.691c0.27,0,0.544-0.015,0.818-0.044c4.118-0.447,7.094-4.147,6.647-8.265   c-1.787-16.467-11.075-34.874-24.238-48.038c-13.04-13.041-31.259-22.306-47.549-24.181c-4.113-0.477-7.834,2.479-8.308,6.593   C139.38,33.099,142.331,36.819,146.447,37.293z" fill="#d2be8b" data-original="#000002"/>
                                                            <path style="" d="M139.44,68.711c6.97,0.803,16.616,5.973,22.935,12.292c6.373,6.374,11.553,16.112,12.316,23.157   c0.417,3.844,3.667,6.692,7.447,6.692c0.27,0,0.543-0.015,0.817-0.044c4.118-0.447,7.095-4.147,6.648-8.265   c-1.304-12.028-9.289-24.813-16.623-32.147c-7.268-7.269-19.928-15.216-31.825-16.587c-4.119-0.479-7.835,2.478-8.309,6.592   C132.373,64.516,135.325,68.237,139.44,68.711z" fill="#d2be8b" data-original="#000002"/>
                                                        </g>
                                                    </g>
                                                </svg>

                                            </div>
                                            <p class="add_item_title">
                                                Подсказка, для чего следует выбрать этот путь
                                            </p>
                                            <a href="tel: {{  }} " class="add_link">
                                                Позвонить продавцу
                                            </a>

                                        </div>
                            </div>
                        </div>
                    </section>
                </main>
            @endif
        </div>
    </section>
</main>
{{--@auth()--}}
{{--    @if(isset($investment))--}}
{{--        @if($investment->user_id != auth()->user()->id)--}}
{{--            <div id="invest" class="modal @if(!session('invest_success')) hide_modal @endif">--}}
{{--                <div class="modal-content">--}}
{{--                    <span class="close">×</span>--}}
{{--                    <div class="service">--}}
{{--                        <div class="service_items_wrapper">--}}
{{--                            @if(session('invest_success'))--}}
{{--                                <label for="invest_price">{{ session('invest_success')  }}</label>--}}
{{--                            @else--}}
{{--                                <form action="{{ route('invest.store') }}" method="post" class="service_item">--}}
{{--                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>--}}
{{--                                    <label for="invest_price">Сколько вы хотите инвестировать?</label>--}}
{{--                                    <input type="hidden" name="investment_id" value="{{ $investment->id }}">--}}
{{--                                    <input id="invest_price" name="invest_price" type="text"--}}
{{--                                           placeholder="Сумма инвестирования"/>--}}
{{--                                    <button class="service_item_link">Инвестировать</button>--}}
{{--                                </form>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    @endif--}}
{{--@endauth--}}

@include('include.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('website/js/companies.js') }}"></script>
<script src="{{ asset('website/js/confirm.js') }}"></script>
