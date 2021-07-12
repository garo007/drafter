@include('include.header')
<link rel="stylesheet" href="{{ asset('/website/css/about_investment_search.css' )}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<main>
    <section class="about_investment_search">
        <!--<div class="header_second_part">-->
        <!--    <div class="header_second_wrapper">-->
        <!--         <nav class="header_second_nav_list">-->
        <!--        <ul class="second_nav_ul_list">-->
        <!--            <li class="second_nav_ul_li">-->
        <!--                <a href="" class="second_nav_link">Главная</a>-->
        <!--            </li>-->
        <!--            <li class="second_nav_ul_li">-->
        <!--                <a href="" class="second_nav_link">Новости</a>-->
        <!--            </li>-->
        <!--            <li class="second_nav_ul_li">-->
        <!--                <a href="" class="second_nav_link">Мои проекты</a>-->
        <!--            </li>-->
        <!--            <li class="second_nav_ul_li">-->
        <!--                <a href="" class="second_nav_link">Мои сообщения</a>-->
        <!--            </li>-->

        <!--        </ul>-->
        <!--    </nav>-->
        <!--    </div>-->

        <!--</div>-->
        @if(isset($investment))
            <form action="" class="about_investment_search_wrapper">
                <div class="investment_search_items_wrapper">
                    <div class="investment_search_stars_items_wrapper">
                        <div class="investment_search_item">
                            <div class="investment_search_img">
                                @if($investment->company_logo != '')
                                    <img src="{{ asset('storage/uploads/'.$investment->company_logo) }}" alt="">
                                @else
                                    <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="investment_search_item  info_second_item">
                            <div class="search_title_stars_wrapper">
                                <h2 class="search_title">{{ $investment->company_name  }}</h2>
                                <div class="star_svg_wrapper first_star_wrapper">
                                    <div class="svg_wrapper">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"
                                                stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M8.88194 11.6156H10.5801V11.4529C10.5891 10.5197 10.9027 10.0842 11.6107 9.62957C12.4486 9.09838 12.9952 8.39491 12.9952 7.27032C12.9952 5.59538 11.7317 4.61914 9.95283 4.61914C8.32633 4.61914 7.00004 5.52839 6.95972 7.44259H8.78785C8.81472 6.66256 9.3569 6.24621 9.94387 6.24621C10.5488 6.24621 11.0372 6.67692 11.0372 7.3421C11.0372 7.969 10.6115 8.38534 10.0604 8.75861C9.30761 9.26588 8.88642 9.77792 8.88194 11.4529V11.6156ZM9.76464 14.6783C10.3382 14.6783 10.8355 14.1662 10.84 13.5298C10.8355 12.9029 10.3382 12.3908 9.76464 12.3908C9.17318 12.3908 8.68479 12.9029 8.68927 13.5298C8.68479 14.1662 9.17318 14.6783 9.76464 14.6783Z"
                                                fill="#848993"/>
                                            <path
                                                d="M8.87965 12.6719C8.67698 12.8656 8.57564 13.1515 8.57564 13.5299C8.57564 13.8947 8.67923 14.1784 8.8864 14.3811C9.09358 14.5792 9.38632 14.6783 9.76464 14.6783C10.134 14.6783 10.4222 14.577 10.6294 14.3743C10.8365 14.1672 10.9401 13.8857 10.9401 13.5299C10.9401 13.1606 10.8365 12.8768 10.6294 12.6787C10.4267 12.4805 10.1385 12.3814 9.76464 12.3814C9.37732 12.3814 9.08232 12.4782 8.87965 12.6719Z"
                                                fill="#848993"/>
                                        </svg>
                                    </div>
                                    <div class="jq-ry-group-wrapper">
                                        <div class="jq-ry-normal-group jq-ry-group">
                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                 width="32px" height="32px" fill="#848993"><polygon
                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                 width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon
                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                 width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon
                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                 width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon
                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                 width="32px" height="32px" fill="#848993" style="margin-left: 0px;"><polygon
                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                        </div>
                                        <div class="active_star" style="width:70%">
                                            <div class="jq-ry-rated-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?-->
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#FF8D4E"><polygon
                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                <!--?xml version="1.0" encoding="utf-8"?-->
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#FF8D4E"
                                                     style="margin-left: 0px;"><polygon
                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                <!--?xml version="1.0" encoding="utf-8"?-->
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#FF8D4E"
                                                     style="margin-left: 0px;"><polygon
                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                <!--?xml version="1.0" encoding="utf-8"?-->
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#FF8D4E"
                                                     style="margin-left: 0px;"><polygon
                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                                <!--?xml version="1.0" encoding="utf-8"?-->
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#FF8D4E"
                                                     style="margin-left: 0px;"><polygon
                                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <p class="investment_search_info1">Ставка:</p>
                            <p class="investment_search_info2">
                                {{ number_format($investment->am_required, 0, ',', ' ') }}<span>&#8381;</span>
                                </p>
                            <div class="investment_search_info_svg_wrapper">
                                <p class="investment_search_info3"><span>Собрано:</span> 0
                                    из {{ number_format($investment->am_required, 0, ',', ' ') }}<span>&#8381;</span></p>
                                <div class="investment_search_info4_svg_wrapper">
                                    <div class="investment_search_info4_svg">
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
                                    <p class="investment_search_info4">0</p>
                                </div>

                            </div>
                            <div class="investment_search_loading_wrapper">
                                <div class="investment_search_loading_child"></div>
                            </div>
                        </div>
                    </div>
                    <div class="star_svg_wrapper hidden_star_wrapper">
                        <div class="svg_wrapper">
                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"
                                    stroke="#848993" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M8.88194 11.6156H10.5801V11.4529C10.5891 10.5197 10.9027 10.0842 11.6107 9.62957C12.4486 9.09838 12.9952 8.39491 12.9952 7.27032C12.9952 5.59538 11.7317 4.61914 9.95283 4.61914C8.32633 4.61914 7.00004 5.52839 6.95972 7.44259H8.78785C8.81472 6.66256 9.3569 6.24621 9.94387 6.24621C10.5488 6.24621 11.0372 6.67692 11.0372 7.3421C11.0372 7.969 10.6115 8.38534 10.0604 8.75861C9.30761 9.26588 8.88642 9.77792 8.88194 11.4529V11.6156ZM9.76464 14.6783C10.3382 14.6783 10.8355 14.1662 10.84 13.5298C10.8355 12.9029 10.3382 12.3908 9.76464 12.3908C9.17318 12.3908 8.68479 12.9029 8.68927 13.5298C8.68479 14.1662 9.17318 14.6783 9.76464 14.6783Z"
                                    fill="#848993"/>
                                <path
                                    d="M8.87965 12.6719C8.67698 12.8656 8.57564 13.1515 8.57564 13.5299C8.57564 13.8947 8.67923 14.1784 8.8864 14.3811C9.09358 14.5792 9.38632 14.6783 9.76464 14.6783C10.134 14.6783 10.4222 14.577 10.6294 14.3743C10.8365 14.1672 10.9401 13.8857 10.9401 13.5299C10.9401 13.1606 10.8365 12.8768 10.6294 12.6787C10.4267 12.4805 10.1385 12.3814 9.76464 12.3814C9.37732 12.3814 9.08232 12.4782 8.87965 12.6719Z"
                                    fill="#848993"/>
                            </svg>
                        </div>
                        <div class="jq-ry-group-wrapper">
                            <div class="jq-ry-normal-group jq-ry-group">
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"
                                     style="margin-left: 0px;"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"
                                     style="margin-left: 0px;"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"
                                     style="margin-left: 0px;"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"
                                     style="margin-left: 0px;"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                            </div>
                            <div class="active_star" style="width:70%">
                                <div class="jq-ry-rated-group jq-ry-group">
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"
                                         style="margin-left: 0px;"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"
                                         style="margin-left: 0px;"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"
                                         style="margin-left: 0px;"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"
                                         style="margin-left: 0px;"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about_project_progress_items_wrapper">
                    <div class="about_project_progress_item_titles_wrapper">
                        <p class="about_project_progress_item_main_title active" id="special_title1"
                           data-id="open_div1">О проекте</p>
                        <p class="about_project_progress_item_main_title" id="special_title2" data-id="open_div2">Ход
                            работы</p>
                    </div>
                    <div class="about_project_progress_item open" id="open_div1">
                        <h2 class="about_project_progress_item_title">Фото</h2>
                        <div class="swiper_btn_slides_wrapper swiper_slider_special_second">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-container" id="first_swiper_container">
                                <div class="swiper-wrapper">
                                    @if($images)
                                        @foreach($images as $image)
                                            <div class="swiper-slide">
                                                <div class="slider_slide_img">
                                                    <img src="{{ asset('/storage/investment_gallery\\').$image->name }}"
                                                         alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>

                        </div>
                        <div class="description_wrapper">
                            <p class="description_title">Описание</p>
                            <p class="description_info">
                                {{ $investment->description }}
                            </p>
                        </div>
                        <div class="form_btns_wrapper">
                            <button class="form_btn form_first_btn"><a href="{{ url()->previous() }}">Назад</a></button>
                            <button class="form_btn">
                                <a href="{{ route('investment.status',$investment->id) }}">Опубликовать</a>
                            </button>
                        </div>

                    </div>
                    @if($investment->share_progress != 'off')
                        <div class="about_project_progress_item" id="open_div2">
                            <div class="first_project_swiper">
                                <div class="swiper-container" id="second_swiper_container">
                                    <h2 class="about_project_progress_item_title">12.03.2021</h2>
                                    <div class="swiper-wrapper">
                                        @if($images)
                                            @foreach($images as $image)
                                                <div class="swiper-slide">
                                                    <div class="slider_slide_img">
                                                        <img
                                                            src="{{ asset('/storage/investment_gallery\\').$image->name }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>


                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev swiper_button_prev_second"></div>
                                <div class="swiper-button-next swiper_button_next_second"></div>
                                <p class="description_info">
                                    {{ $investment->description }}
                                </p>
                            </div>
                            <div class="first_project_swiper">
                                <div class="swiper-container" id="second_swiper_container">
                                    <h2 class="about_project_progress_item_title">12.03.2021</h2>
                                    <div class="swiper-wrapper">
                                        @if($images)
                                            @foreach($images as $image)
                                                <div class="swiper-slide">
                                                    <div class="slider_slide_img">
                                                        <img
                                                            src="{{ asset('/storage/investment_gallery\\').$image->name }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>


                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev swiper_button_prev_second"></div>
                                <div class="swiper-button-next swiper_button_next_second"></div>
                                <p class="description_info">
                                    {{ $investment->description }}
                                </p>
                            </div>


                        </div>
                    @endif
                </div>


            </form>
        @elseif(isset($business))

            <form action="" class="about_investment_search_wrapper">
                <!-- <a href="" class="about_investment_main_link">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 1L1 8L8 15" stroke="#9B8E6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    На (указать станицу, с которой пришёл юзер)
                </a> -->

                <div class="investment_search_items_wrapper">
                    <div class="investment_search_stars_items_wrapper">
                        <div class="investment_search_item">
                            <div class="investment_search_img">
                                @if($business->company_logo != '')
                                    <img src="{{ asset('storage/uploads/'.$business->company_logo) }}" alt="">
                                @else
                                    <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="investment_search_item   special_second_info_item">
                            <div class="search_title_stars_wrapper">
                                <h2 class="search_title">{{ $business->company_name }} </h2>
                                <div class="star_svg_wrapper first_star_wrapper">
                                    <div class="svg_wrapper">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"
                                                stroke="#848993" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M8.88194 11.6156H10.5801V11.4529C10.5891 10.5197 10.9027 10.0842 11.6107 9.62957C12.4486 9.09838 12.9952 8.39491 12.9952 7.27032C12.9952 5.59538 11.7317 4.61914 9.95283 4.61914C8.32633 4.61914 7.00004 5.52839 6.95972 7.44259H8.78785C8.81472 6.66256 9.3569 6.24621 9.94387 6.24621C10.5488 6.24621 11.0372 6.67692 11.0372 7.3421C11.0372 7.969 10.6115 8.38534 10.0604 8.75861C9.30761 9.26588 8.88642 9.77792 8.88194 11.4529V11.6156ZM9.76464 14.6783C10.3382 14.6783 10.8355 14.1662 10.84 13.5298C10.8355 12.9029 10.3382 12.3908 9.76464 12.3908C9.17318 12.3908 8.68479 12.9029 8.68927 13.5298C8.68479 14.1662 9.17318 14.6783 9.76464 14.6783Z"
                                                fill="#848993"/>
                                            <path
                                                d="M8.87965 12.6719C8.67698 12.8656 8.57564 13.1515 8.57564 13.5299C8.57564 13.8947 8.67923 14.1784 8.8864 14.3811C9.09358 14.5792 9.38632 14.6783 9.76464 14.6783C10.134 14.6783 10.4222 14.577 10.6294 14.3743C10.8365 14.1672 10.9401 13.8857 10.9401 13.5299C10.9401 13.1606 10.8365 12.8768 10.6294 12.6787C10.4267 12.4805 10.1385 12.3814 9.76464 12.3814C9.37732 12.3814 9.08232 12.4782 8.87965 12.6719Z"
                                                fill="#848993"/>
                                        </svg>
                                    </div>
                                    <div class="jq-ry-group-wrapper">
                                        <div class="jq-ry-normal-group jq-ry-group">
{{--                                            ?xml version="1.0" encoding="utf-8"?--}}
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"--}}
                                                 width="32px" height="32px" fill="#848993" style="margin-left: 0px;">--}}
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>--}}
                                        </svg>
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                 width="32px" height="32px" fill="#848993" style="margin-left: 0px;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>
                                        </svg>
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                 width="32px" height="32px" fill="#848993" style="margin-left: 0px;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>
                                        </svg>
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                 width="32px" height="32px" fill="#848993" style="margin-left: 0px;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>
                                        </svg>
                                            <!--?xml version="1.0" encoding="utf-8"?-->
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                 width="32px" height="32px" fill="#848993" style="margin-left: 0px;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>
                                        </svg>
                                        </div>
                                        <div class="active_star" style="width:107%">
                                            <div class="jq-ry-rated-group jq-ry-group">
                                                <!--?xml version="1.0" encoding="utf-8"?-->
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#848993"
                                                     style="margin-left: 0px;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>
                                        </svg>
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#848993"
                                                     style="margin-left: 0px;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>
                                        </svg>
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#848993"
                                                     style="margin-left: 0px;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>
                                        </svg>
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#848993"
                                                     style="margin-left: 0px;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>
                                        </svg>
                                                <!--?xml version="1.0" encoding="utf-8"?-->
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve"
                                                     width="32px" height="32px" fill="#848993"
                                                     style="margin-left: 0px;">
                                            <polygon
                                                points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon>
                                        </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <p class="investment_search_info1">Стоимость:</p>
                            <p class="investment_search_info2">{{ $business->cost }}</p>
                            <div class="investment_search_info_svg_wrapper">

                                <p class="investment_search_info3"> {{ $business->city }}</p>

                            </div>


                        </div>

                    </div>
                    <div class="star_svg_wrapper hidden_star_wrapper">
                        <div class="svg_wrapper">
                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 7.53424V1.78411C1 1.57615 1.08261 1.37671 1.22966 1.22966C1.37671 1.08261 1.57615 1 1.78411 1H17.4663C17.6742 1 17.8737 1.08261 18.0207 1.22966C18.1678 1.37671 18.2504 1.57615 18.2504 1.78411V7.53424C18.2504 15.7689 11.2614 18.4971 9.86593 18.9597C9.70993 19.0134 9.54045 19.0134 9.38445 18.9597C7.98895 18.4971 1 15.7689 1 7.53424Z"
                                    stroke="#848993" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M8.88194 11.6156H10.5801V11.4529C10.5891 10.5197 10.9027 10.0842 11.6107 9.62957C12.4486 9.09838 12.9952 8.39491 12.9952 7.27032C12.9952 5.59538 11.7317 4.61914 9.95283 4.61914C8.32633 4.61914 7.00004 5.52839 6.95972 7.44259H8.78785C8.81472 6.66256 9.3569 6.24621 9.94387 6.24621C10.5488 6.24621 11.0372 6.67692 11.0372 7.3421C11.0372 7.969 10.6115 8.38534 10.0604 8.75861C9.30761 9.26588 8.88642 9.77792 8.88194 11.4529V11.6156ZM9.76464 14.6783C10.3382 14.6783 10.8355 14.1662 10.84 13.5298C10.8355 12.9029 10.3382 12.3908 9.76464 12.3908C9.17318 12.3908 8.68479 12.9029 8.68927 13.5298C8.68479 14.1662 9.17318 14.6783 9.76464 14.6783Z"
                                    fill="#848993"/>
                                <path
                                    d="M8.87965 12.6719C8.67698 12.8656 8.57564 13.1515 8.57564 13.5299C8.57564 13.8947 8.67923 14.1784 8.8864 14.3811C9.09358 14.5792 9.38632 14.6783 9.76464 14.6783C10.134 14.6783 10.4222 14.577 10.6294 14.3743C10.8365 14.1672 10.9401 13.8857 10.9401 13.5299C10.9401 13.1606 10.8365 12.8768 10.6294 12.6787C10.4267 12.4805 10.1385 12.3814 9.76464 12.3814C9.37732 12.3814 9.08232 12.4782 8.87965 12.6719Z"
                                    fill="#848993"/>
                            </svg>
                        </div>

                        <div class="jq-ry-group-wrapper">
                            <div class="jq-ry-normal-group jq-ry-group">
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"
                                     style="margin-left: 0px;"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"
                                     style="margin-left: 0px;"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"
                                     style="margin-left: 0px;"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                     x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#848993"
                                     style="margin-left: 0px;"><polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                            </div>
                            <div class="active_star" style="width:70%">
                                <div class="jq-ry-rated-group jq-ry-group">
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"
                                         style="margin-left: 0px;"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"
                                         style="margin-left: 0px;"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"
                                         style="margin-left: 0px;"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59"
                                         x="0px" y="0px" xml:space="preserve" width="32px" height="32px" fill="#FF8D4E"
                                         style="margin-left: 0px;"><polygon
                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about_project_progress_items_wrapper">

                        <div class="about_project_progress_item open">
                            <h2 class="about_project_progress_item_title">Фото</h2>
                            <div class="swiper_btn_slides_wrapper swiper_btns_special_wrapper">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-container" id="seven_swiper_container">
                                    <div class="swiper-wrapper">
                                        @if($images)
                                            @if(count($images) == 1)
                                                <div class="slider_slide_img">
                                                    <img
                                                        src="{{ asset('/storage/business_gallery')."/".$images[0]['name'] }}"
                                                        alt="">
                                                </div>
                                            @else
                                                @foreach($images as $image)
                                                    <div class="swiper-slide">
                                                        <div class="slider_slide_img">
                                                            <img
                                                                src="{{ asset('/storage/business_gallery')."/".$image->name }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>

                            </div>
                            <div class="description_wrapper">
                                <p class="description_title">Описание</p>
                                <p class="description_info">
                                    {{ $business->description }}
                                </p>
                            </div>

                            <div class="form_btns_wrapper">
                                <button class="form_btn form_first_btn"><a href="{{ url()->previous() }}">Назад</a>
                                </button>
                                <button class="form_btn">
                                    <a href="{{ route('business.status',$business->id) }}">Опубликовать</a>
                                </button>
                            </div>

                        </div>


                    </div>
                </div>
            </form>
        @else
            <?php return redirect()->route('/') ?>
        @endif
    </section>

</main>


@include('include.footer')

<script src="https://unpkg.com/swiper/swiper-bundle.js">

</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js">

</script>
<script src="{{asset('website/js/personal.js')}}">

</script>
<script src="{{asset('website/js/search.js')}}">

</script>
