@include('include.header')

<link rel="stylesheet" href="{{ asset('/website/css/add.css' )}}">

<main>
    <section class="add">
{{--        <div class="header_second_part">--}}
{{--            <div class="header_second_wrapper">--}}
{{--                <nav class="header_second_nav_list">--}}
{{--                    <ul class="second_nav_ul_list">--}}
{{--                        <li class="second_nav_ul_li">--}}
{{--                            <a href="" class="second_nav_link">Главная</a>--}}
{{--                        </li>--}}
{{--                        <li class="second_nav_ul_li">--}}
{{--                            <a href="" class="second_nav_link">Новости</a>--}}
{{--                        </li>--}}
{{--                        <li class="second_nav_ul_li">--}}
{{--                            <a href="" class="second_nav_link">Мои проекты</a>--}}
{{--                        </li>--}}
{{--                        <li class="second_nav_ul_li">--}}
{{--                            <a href="" class="second_nav_link">Мои сообщения</a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="ganeral_page_wrapper">
            <a href="{{ url()->previous() }}" class="ganeral_page_link">
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 1L1 8L8 15" stroke="#9B8E6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                На главную
            </a>
        </div>
        <div class="add_wrapper">

            <h1 class="add_title">
                Какое объявление вы хотите создать?
            </h1>
            <div class="add_items_wrapper">
                <div class="add_item first_add_item">
                    <div class="add_item_svg">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M38.3328 8.08761L13.1283 13.1285L8.08737 38.333C8.00665 38.7366 8.02682 39.1539 8.14609 39.5478C8.26536 39.9417 8.48003 40.3001 8.77105 40.5911L41.4125 73.2326C41.6447 73.4647 41.9203 73.6489 42.2236 73.7745C42.5269 73.9002 42.852 73.9648 43.1803 73.9648C43.5086 73.9648 43.8337 73.9002 44.137 73.7745C44.4403 73.6489 44.7159 73.4647 44.9481 73.2326L73.2324 44.9483C73.4645 44.7162 73.6486 44.4406 73.7743 44.1373C73.8999 43.834 73.9646 43.5089 73.9646 43.1806C73.9646 42.8522 73.8999 42.5272 73.7743 42.2238C73.6486 41.9205 73.4645 41.6449 73.2324 41.4128L40.5909 8.7713C40.2998 8.48027 39.9415 8.2656 39.5476 8.14633C39.1536 8.02707 38.7364 8.0069 38.3328 8.08761V8.08761Z" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M26.25 30C28.3211 30 30 28.3211 30 26.25C30 24.1789 28.3211 22.5 26.25 22.5C24.1789 22.5 22.5 24.1789 22.5 26.25C22.5 28.3211 24.1789 30 26.25 30Z" fill="#D2BE8B"/>
                        </svg>

                    </div>
                    <p class="add_item_title">
                        Подсказка, для чего следует выбрать этот путь
                    </p>
                    <a href="{{ route('add.create',['add' => 'business']) }}" class="add_link">
                        О продаже бизнеса
                    </a>
                </div>
                @if(auth()->user()->role_id == 2 )
                    <div class="add_item">
                @else
                    <div class="add_item op-0-2">
                @endif
                    <div class="add_item_svg">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.50073 30H72.5007L40.0007 10L7.50073 30Z" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.5007 30V55" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32.5007 30V55" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M47.5007 30V55" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M62.5007 30V55" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.0007 55H70.0007" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.00073 65H75.0007" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <p class="add_item_title">
                        Подсказка, для чего следует выбрать этот путь
                    </p>
                        @if(auth()->user()->role_id == 2 )
                            <a href="{{ route('add.create',['add' => 'investment']) }}" class="add_link">
                                О поиске инвестиций
                            </a>
                        @else
                            <a  class="add_link">
                                О поиске инвестиций
                            </a>
                        @endif

                </div>
            </div>
            </div>
        </div>
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('website/js/confirm.js') }}"></script>

@include('include.footer')
