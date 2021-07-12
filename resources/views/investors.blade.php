@include('include.header')
<link rel="stylesheet" href="{{ asset('/website/css/suggestions.css' )}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<main>
    <section class="suggestions">
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
        <div class="suggestions_wrapper">
            <a href="{{ url()->previous() }}" class="suggestions_link">
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L0.999999 9L9 17" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                Назад
            </a>
            <h1 class="suggestions_title">Инвесторы</h1>
            <div class="suggestions_items_wrapper">
                @if(isset($investors))
                   @foreach($investors as $investor)
                        <div class="suggestions_line"></div>
                        <div class="suggestions_item">
                            <div class="suggestions_item_img_text_wrapper">
                                <div class="suggestions_item_img">
                                    @if(isset($investor->user->profile->profil_photo))
                                    <img src="{{ asset('storage\\'). $investor->user->profile->profil_photo }}" alt="">
                                    @endif
                                </div>
                                <div class="suggestions_item_text_wrapper">
                                    <h3 class="suggestions_item_text_title">{{ $investor->user->fullname }}</h3>
                                    <div class="investors_money_wrapper">
                                        <p class="investors_money_info">+ {{ $investor->invest_price }} руб.</p>
                                        <p class="suggestions_item_text_info">{{ $investor->created_at }}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="suggestions_item_chat_svg_wrapper">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.1627 7.79048L22.6246 7.59914L22.1627 7.79048ZM16.2095 1.83733L16.0182 2.29927L16.2095 1.83733ZM7.79047 1.83732L7.98181 2.29926L7.79047 1.83732ZM4.22182 4.22182L3.86827 3.86827H3.86827L4.22182 4.22182ZM1.83732 7.79047L2.29926 7.98181L1.83732 7.79047ZM1.26849 22.7315L0.914931 23.0851H0.914931L1.26849 22.7315ZM12 22.5H1.91667V23.5H12V22.5ZM19.4246 19.4246C17.4555 21.3938 14.7848 22.5 12 22.5V23.5C15.05 23.5 17.9751 22.2884 20.1317 20.1317L19.4246 19.4246ZM22.5 12C22.5 14.7848 21.3938 17.4555 19.4246 19.4246L20.1317 20.1317C22.2884 17.9751 23.5 15.05 23.5 12H22.5ZM21.7007 7.98182C22.2284 9.25574 22.5 10.6211 22.5 12H23.5C23.5 10.4898 23.2025 8.99439 22.6246 7.59914L21.7007 7.98182ZM19.4246 4.57538C20.3996 5.55039 21.1731 6.70791 21.7007 7.98182L22.6246 7.59914C22.0467 6.2039 21.1996 4.93615 20.1317 3.86827L19.4246 4.57538ZM16.0182 2.29927C17.2921 2.82694 18.4496 3.60036 19.4246 4.57538L20.1317 3.86827C19.0639 2.8004 17.7961 1.95331 16.4009 1.37539L16.0182 2.29927ZM12 1.5C13.3789 1.5 14.7443 1.77159 16.0182 2.29927L16.4009 1.37539C15.0056 0.797456 13.5102 0.5 12 0.5V1.5ZM7.98181 2.29926C9.25573 1.77159 10.6211 1.5 12 1.5V0.5C10.4898 0.5 8.99437 0.797455 7.59913 1.37538L7.98181 2.29926ZM4.57537 4.57537C5.55039 3.60036 6.70789 2.82694 7.98181 2.29926L7.59913 1.37538C6.20389 1.95331 4.93614 2.80039 3.86827 3.86827L4.57537 4.57537ZM2.29926 7.98181C2.82694 6.70789 3.60036 5.55039 4.57537 4.57537L3.86827 3.86827C2.80039 4.93614 1.95331 6.20388 1.37538 7.59913L2.29926 7.98181ZM1.5 12C1.5 10.6211 1.77159 9.25573 2.29926 7.98181L1.37538 7.59913C0.797456 8.99437 0.5 10.4898 0.5 12H1.5ZM1.5 22.0833V12H0.5V22.0833H1.5ZM1.62204 22.378C1.5439 22.2998 1.5 22.1938 1.5 22.0833H0.5C0.5 22.4591 0.649255 22.8194 0.914931 23.0851L1.62204 22.378ZM1.91667 22.5C1.80616 22.5 1.70018 22.4561 1.62204 22.378L0.914931 23.0851C1.18061 23.3507 1.54094 23.5 1.91667 23.5V22.5ZM11.9997 14.4139C13.0683 14.4139 13.9345 13.5476 13.9345 12.4791H12.9345C12.9345 12.9954 12.516 13.4139 11.9997 13.4139V14.4139ZM10.0649 12.4791C10.0649 13.5476 10.9312 14.4139 11.9997 14.4139V13.4139C11.4835 13.4139 11.0649 12.9954 11.0649 12.4791H10.0649ZM11.9997 10.5443C10.9312 10.5443 10.0649 11.4105 10.0649 12.4791H11.0649C11.0649 11.9628 11.4835 11.5443 11.9997 11.5443V10.5443ZM13.9345 12.4791C13.9345 11.4105 13.0683 10.5443 11.9997 10.5443V11.5443C12.516 11.5443 12.9345 11.9628 12.9345 12.4791H13.9345ZM7.19549 12.4791C7.19549 12.9954 6.77698 13.4139 6.26071 13.4139V14.4139C7.32926 14.4139 8.19549 13.5476 8.19549 12.4791H7.19549ZM6.26071 11.5443C6.77698 11.5443 7.19549 11.9628 7.19549 12.4791H8.19549C8.19549 11.4105 7.32926 10.5443 6.26071 10.5443V11.5443ZM5.32593 12.4791C5.32593 11.9628 5.74444 11.5443 6.26071 11.5443V10.5443C5.19216 10.5443 4.32593 11.4105 4.32593 12.4791H5.32593ZM6.26071 13.4139C5.74444 13.4139 5.32593 12.9954 5.32593 12.4791H4.32593C4.32593 13.5476 5.19216 14.4139 6.26071 14.4139V13.4139ZM17.7392 14.4139C18.8078 14.4139 19.674 13.5476 19.674 12.4791H18.674C18.674 12.9954 18.2555 13.4139 17.7392 13.4139V14.4139ZM15.8044 12.4791C15.8044 13.5476 16.6707 14.4139 17.7392 14.4139V13.4139C17.223 13.4139 16.8044 12.9954 16.8044 12.4791H15.8044ZM17.7392 10.5443C16.6707 10.5443 15.8044 11.4105 15.8044 12.4791H16.8044C16.8044 11.9628 17.223 11.5443 17.7392 11.5443V10.5443ZM19.674 12.4791C19.674 11.4105 18.8078 10.5443 17.7392 10.5443V11.5443C18.2555 11.5443 18.674 11.9628 18.674 12.4791H19.674Z" fill="#E5D6A0"/>
                                </svg>

                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</main>


@include('include.footer')
