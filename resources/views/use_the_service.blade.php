@include('include.header')

<link rel="stylesheet" href="../website/css/use_the_service.css">

    <main>
        <section class="service">
            <div class="service_wrapper">
                <h1 class="service_title">
                    Как вы хотите использовать сервис?
                </h1>
                <div class="service_items_wrapper">
                        <div class="service_item">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="service_item_img_wrapper">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.4978 33.2559L29.3728 19.183C28.5457 17.7476 28.3223 16.0424 28.7517 14.4424C29.1812 12.8423 30.2284 11.4782 31.6631 10.6499C33.0978 9.82151 34.8028 9.59669 36.4032 10.0248C38.0036 10.4529 39.3686 11.4989 40.1981 12.933L52.6981 34.5836" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M27.9225 41.6708L16.0475 21.1027C15.6363 20.3918 15.3692 19.6069 15.2615 18.7928C15.1538 17.9787 15.2076 17.1514 15.4198 16.3581C15.632 15.5647 15.9985 14.821 16.4983 14.1694C16.998 13.5178 17.6213 12.9711 18.3325 12.5605C19.0437 12.1499 19.8288 11.8835 20.643 11.7764C21.4572 11.6694 22.2845 11.7239 23.0777 11.9368C23.8708 12.1497 24.6142 12.5167 25.2654 13.0171C25.9166 13.5174 26.4628 14.1411 26.8728 14.8527L37.4978 33.2557" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M48.1228 51.659C46.4652 48.788 46.016 45.376 46.8741 42.1738C47.7321 38.9715 49.8271 36.2413 52.6982 34.5837L49.5732 29.171C49.162 28.4602 48.8949 27.6753 48.7872 26.8612C48.6795 26.0471 48.7333 25.2197 48.9455 24.4264C49.1577 23.6331 49.5242 22.8894 50.0239 22.2378C50.5237 21.5862 51.147 21.0394 51.8582 20.6288C52.5694 20.2182 53.3545 19.9518 54.1687 19.8448C54.9829 19.7378 55.8102 19.7923 56.6033 20.0051C57.3965 20.218 58.1399 20.5851 58.7911 21.0854C59.4423 21.5858 59.9885 22.2095 60.3985 22.921L66.6485 33.7463C68.2909 36.5896 69.3571 39.7285 69.7862 42.9839C70.2153 46.2392 69.999 49.5472 69.1495 52.719C68.3 55.8907 66.834 58.864 64.8353 61.4691C62.8366 64.0742 60.3442 66.2601 57.5006 67.9018C54.657 69.5436 51.5178 70.6091 48.2624 71.0375C45.0069 71.4659 41.699 71.2488 38.5274 70.3986C35.3559 69.5484 32.3829 68.0818 29.7783 66.0825C27.1736 64.0831 24.9883 61.5903 23.3472 58.7463L11.4722 38.1782C10.645 36.7428 10.4217 35.0377 10.8511 33.4376C11.2806 31.8376 12.3277 30.4735 13.7625 29.6451C15.1972 28.8168 16.9021 28.5919 18.5026 29.0201C20.103 29.4482 21.468 30.4942 22.2975 31.9282L27.9225 41.671" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M25.3419 75.0008C21.1046 72.0608 17.5724 68.2172 15 63.7471" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M55 9.6875C57.8524 9.68712 60.6546 10.438 63.1246 11.8645C65.5947 13.2911 67.6454 15.343 69.0706 17.8139" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                        <p class="service_item_title">
                            Вы хотите ознакомиться <br> с площадкой?
                        </p>
                        <a class="service_item_link send_guest_post">Попробовать</a>
                        <form action="{{route('login_as_guest_after_reg')}}" id="login_as_guest" method="post">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input name="user_type" type="hidden" value="null">
                        </form>
                        <div class="service_item_info_wrapper">
                            <p class="service_item_info_title">Вы можете:</p>
                            <p class="service_item_info_num">
                                1. Ознакомиться с объявлениями, размещаемыми на площадке.
                            </p>
                            <p class="service_item_info_num">
                                2. Разместить собственное объявления на площадке.
                            </p>

                        </div>

                    </div>
                    <form  action="{{ route('change_role_to_investor') }}" method="post" class="service_item">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="user_type" type="hidden" value="1"/>

                        <div class="service_item_img_wrapper">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M66.6667 13.3335H13.3333C11.4924 13.3335 10 14.8259 10 16.6668V50.0002C10 51.8411 11.4924 53.3335 13.3333 53.3335H66.6667C68.5076 53.3335 70 51.8411 70 50.0002V16.6668C70 14.8259 68.5076 13.3335 66.6667 13.3335Z" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23.3333 66.6665H56.6666" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M30 53.3335V66.6668" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M50 53.3335V66.6668" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M30 39.9998V26.6665" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M40 39.9998V36.6665" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M50 40.0002V33.3335" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M40 39.9998V36.6665" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                        <p class="service_item_title">Вы хотите зарабатывать на инвестициях?</p>
                        <button  class="service_item_link">Инвестировать</button>
                        <div class="service_item_info_wrapper">
                            <p class="service_item_info_title">Вы можете:</p>
                            <p class="service_item_info_num">
                                1. Ознакомиться с объявлениями, размещаемыми на площадке.
                            </p>
                            <p class="service_item_info_num">
                                2. Разместить собственное объявления на площадке.
                            </p>

                        </div>

                    </form>
                    <form class="service_item" action="{{ route('change_role_to_busines') }}" method="post" >
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="user_type" type="hidden" value="2"/>

                        <div class="service_item_img_wrapper">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33.3333 56.6667C46.22 56.6667 56.6667 46.22 56.6667 33.3333C56.6667 20.4467 46.22 10 33.3333 10C20.4467 10 10 20.4467 10 33.3333C10 46.22 20.4467 56.6667 33.3333 56.6667Z" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M70 70L50 50" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M39.9998 23.3335H31.6665C30.3404 23.3335 29.0687 23.8603 28.131 24.798C27.1933 25.7356 26.6665 27.0074 26.6665 28.3335C26.6665 29.6596 27.1933 30.9313 28.131 31.869C29.0687 32.8067 30.3404 33.3335 31.6665 33.3335H34.9998C36.3259 33.3335 37.5977 33.8603 38.5354 34.798C39.473 35.7356 39.9998 37.0074 39.9998 38.3335C39.9998 39.6596 39.473 40.9313 38.5354 41.869C37.5977 42.8067 36.3259 43.3335 34.9998 43.3335H26.6665" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M33.3335 20V23.3333M33.3335 43.3333V46.6667V43.3333Z" stroke="#E5D6A0" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>
                        <p class="service_item_title">Вы владелец бизнеса
                            и Вам необходима финансовая помощь?</p>
                        <button  class="service_item_link"> Найти инвестора</button>
                        <div class="service_item_info_wrapper">
                            <p class="service_item_info_title">Вы можете:</p>
                            <p class="service_item_info_num">
                                1. Ознакомиться с объявлениями, размещаемыми на площадке.
                            </p>
                            <p class="service_item_info_num">
                                2. Разместить собственное объявления на площадке.
                            </p>

                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../website/js/confirm.js"></script>







@include('include.footer')
