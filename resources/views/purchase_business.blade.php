@include('include.header')

<link rel="stylesheet" href="{{ asset('/website/css/purchase.css' )}}">

<main>
    <section class="purchase">
        <div class="purchase_wrapper">
            <a href="{{ url()->previous() }}" class="purchase_link">
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L0.999999 9L9 17" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                Назад
            </a>
            <h1 class="purchase_title">Как Вы хотите произвести покупку?</h1>
            <div class="purchase_items_wrapper">
                <div class="purchase_item">
                    <div class="purchase_svg_wrapper">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.0003 73.3327C58.4098 73.3327 73.3337 58.4088 73.3337 39.9994C73.3337 21.5899 58.4098 6.66602 40.0003 6.66602C21.5908 6.66602 6.66699 21.5899 6.66699 39.9994C6.66699 58.4088 21.5908 73.3327 40.0003 73.3327Z" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M30.2998 30.0019C31.0835 27.7741 32.6303 25.8956 34.6663 24.699C36.7023 23.5024 39.0961 23.065 41.4237 23.4643C43.7513 23.8635 45.8625 25.0736 47.3834 26.8803C48.9043 28.687 49.7367 30.9736 49.7331 33.3352C49.7331 40.0019 39.7331 43.3352 39.7331 43.3352" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M40 56.666H40.0333" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
{{--                    <p class="purchase_info">--}}
{{--                        Подсказка, для чего следует выбрать этот путь--}}
{{--                    </p>--}}
                    <a href="" class="purchase_item_link">Мне нужна помощь в покупке</a>
                </div>
                <div class="purchase_item">
                    <div class="purchase_svg_wrapper">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M73.3337 6.66602L36.667 43.3327" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M73.3337 6.66602L50.0003 73.3327L36.667 43.3327L6.66699 29.9994L73.3337 6.66602Z" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
{{--                    <p class="purchase_info">--}}
{{--                        Подсказка, для чего следует выбрать этот путь--}}
{{--                    </p>--}}
                    <form action="{{ route('messages.show') }}">
                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                        <button class="purchase_item_link">Связаться с продавцом в чате</button>
                    </form>
                </div>
                <div class="purchase_item">
                    <div class="purchase_svg_wrapper">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M50.1681 16.6673C53.4239 17.3025 56.416 18.8948 58.7616 21.2404C61.1072 23.586 62.6995 26.5782 63.3347 29.834M50.1681 3.33398C56.9323 4.08544 63.24 7.11457 68.0555 11.924C72.871 16.7335 75.9081 23.0373 76.6681 29.8006M73.3347 56.4007V66.4007C73.3385 67.329 73.1484 68.2479 72.7764 69.0985C72.4045 69.9491 71.8591 70.7126 71.175 71.3402C70.4909 71.9678 69.6833 72.4456 68.8039 72.743C67.9245 73.0404 66.9927 73.1509 66.0681 73.0673C55.8109 71.9528 45.9581 68.4478 37.3014 62.834C29.2475 57.7162 22.4192 50.8879 17.3014 42.834C11.668 34.138 8.16221 24.2373 7.06807 13.934C6.98477 13.0122 7.09432 12.0832 7.38974 11.2061C7.68516 10.3289 8.15997 9.52295 8.78396 8.83939C9.40794 8.15583 10.1674 7.60968 11.014 7.23572C11.8607 6.86177 12.7759 6.66819 13.7014 6.66732H23.7014C25.3191 6.6514 26.8874 7.22425 28.1139 8.27909C29.3405 9.33394 30.1417 10.7988 30.3681 12.4007C30.7901 15.6009 31.5729 18.7431 32.7014 21.7673C33.1499 22.9604 33.2469 24.257 32.9811 25.5036C32.7152 26.7501 32.0976 27.8944 31.2014 28.8007L26.9681 33.034C31.7133 41.3791 38.6229 48.2888 46.9681 53.034L51.2014 48.8007C52.1077 47.9044 53.2519 47.2868 54.4985 47.021C55.745 46.7551 57.0417 46.8522 58.2347 47.3006C61.259 48.4291 64.4012 49.2119 67.6014 49.634C69.2206 49.8624 70.6994 50.678 71.7565 51.9256C72.8136 53.1733 73.3753 54.7659 73.3347 56.4007Z" stroke="#D2BE8B" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
{{--                    <p class="purchase_info">--}}
{{--                        Подсказка, для чего следует выбрать этот путь--}}
{{--                    </p>--}}
                    <a href="" class="purchase_item_link">Позвонить продавцу</a>
                </div>
            </div>
        </div>
    </section>
</main>
@if(isset($investment))
    <div id="invest" class="modal @if(!session('invest_success')) hide_modal @endif">
        <div class="modal-content">
            <span class="close">×</span>
            <div class="service">
                <div class="service_items_wrapper">
                    @if(session('invest_success'))
                        <label for="invest_price">{{ session('invest_success')  }}</label>
                    @else
                        <form  action="{{ route('invest.store') }}" method="post" class="service_item">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <label for="invest_price">Сколько вы хотите инвестировать?</label>
                            <input type="hidden" name="investment_id" value="{{ $investment->id }}">
                            <input id="invest_price" name="invest_price" type="text" placeholder="Сумма инвестирования"/>
                            <button  class="service_item_link">Инвестировать</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif

@include('include.footer')


<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('website/js/companies.js') }}"></script>
