@include('include.header')

<link rel="stylesheet" href="{{ asset('/website/css/news.css' )}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<main>
    <section class="news_details">
        <div class="news_details_wrapper">
            <a href="#" class="news_main_link">
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L0.999999 9L9 17" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                Назад
            </a>
            <div class="news_details_items_wrapper">
                <div class="news_details_img_info_item">
                    <div class="news_details_img_wrapper">
                        <img src="{{ asset('images\\') }}news_details_img.png" alt="">
                    </div>
                    <div class="news_details_info_wrapper">
                        <h3 class="news_details_info_title">Новости проекта</h3>
                        <p class="news_details_info_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex..Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                        </p>

                    </div>
                </div>
                <div class="news_details_slider_item">
                    <h2 class="news_details_slider_title">Фото</h2>
                    <div class="swiper_btn_slides_wrapper">

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-container" id="news_details_swiper_container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider_slide_img">
                                        <img src="{{ asset('images\\') }}slider_img1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider_slide_img">
                                        <img src="{{ asset('images\\') }}slider_img2.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider_slide_img">
                                        <img src="{{ asset('images\\') }}slider_img2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('website/js/news.js') }}"></script>

@include('include.footer')
