@include('include.header')

<link rel="stylesheet" href="{{ asset('/website/css/news.css' )}}">
<main>
    <section class="news">
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
        <div class="news_wrapper">
            <h1 class="news_title">Новости</h1>
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
                    <p class="by_relevance_hidden_item">Акция</p>
                    <p class="by_relevance_hidden_item">Обновление</p>
                    <p class="by_relevance_hidden_item">Новости проекта</p>
                    <p class="by_relevance_hidden_item">Акция</p>
                    <p class="by_relevance_hidden_item">Обновление</p>
                    <p class="by_relevance_hidden_item">Новости проекта</p>
                </div>
            </div>
            <div class="news_links_wrapper">
                <a href="news_details.html" target="_parent" class="news_link">
                    <div class="news_link_img_wrapper special_img">
                        <img src="{{ asset('images\\') }}news_link_img1.png" alt="">
                    </div>
                    <h3 class="news_link_title">Обновление</h3>
                    <p class="news_link_info">
                        Вышла новая версия программного обесп... <span>Вышла новая версия программного обесп...Вышла новая версия программного обесп...Вышла новая версия программного обесп...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Вышла новая версия ...
                    </p>
                </a>
                <a href="news_details.html"  target="_parent" class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img2.png" alt="">
                    </div>
                    <h3 class="news_link_title">Акция</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html" target="_parent"  class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img3.png" alt="">
                    </div>
                    <h3 class="news_link_title">Акция</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html" target="_parent"  class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img2.png" alt="">
                    </div>
                    <h3 class="news_link_title">Новости проекта</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html"  target="_parent" class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img4.png" alt="">
                    </div>
                    <h3 class="news_link_title">Акция</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html"  target="_parent" class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img2.png" alt="">
                    </div>
                    <h3 class="news_link_title">Акция</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html" target="_parent"  class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img5.png" alt="">
                    </div>
                    <h3 class="news_link_title">Новости проекта</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html"  target="_parent" class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img2.png" alt="">
                    </div>
                    <h3 class="news_link_title">Новости проекта</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html"  target="_parent" class="news_link">
                    <div class="news_link_img_wrapper special_img">
                        <img src="{{ asset('images\\') }}news_link_img1.png" alt="">
                    </div>
                    <h3 class="news_link_title">Обновление</h3>
                    <p class="news_link_info">
                        Вышла новая версия программного обесп... <span>Вышла новая версия программного обесп...Вышла новая версия программного обесп...Вышла новая версия программного обесп...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html" target="_parent"  class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img2.png" alt="">
                    </div>
                    <h3 class="news_link_title">Акция</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html" target="_parent"  class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img3.png" alt="">
                    </div>
                    <h3 class="news_link_title">Акция</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html" target="_parent"  class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img2.png" alt="">
                    </div>
                    <h3 class="news_link_title">Новости проекта</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html"  target="_parent" class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img4.png" alt="">
                    </div>
                    <h3 class="news_link_title">Акция</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html"  target="_parent" class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img2.png" alt="">
                    </div>
                    <h3 class="news_link_title">Акция</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html" target="_parent"  class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img5.png" alt="">
                    </div>
                    <h3 class="news_link_title">Новости проекта</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
                <a href="news_details.html" target="_parent"  class="news_link">
                    <div class="news_link_img_wrapper news_link_img">
                        <img src="{{ asset('images\\') }}news_link_img2.png" alt="">
                    </div>
                    <h3 class="news_link_title">Новости проекта</h3>
                    <p class="news_link_info">
                        Иван Иванов проводит марафон акций Иван Иванов проводит <span>марафон акций Иван Иванов проводит марафон акций Иван...</span>
                    </p>
                    <p class="hidden_news_link_info">
                        Иван Иванов проводит акцию...
                    </p>
                </a>
            </div>
        </div>
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('website/js/news.js') }}"></script>

@include('include.footer')
