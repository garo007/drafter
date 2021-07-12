@include('include.header')

    <link rel="stylesheet" href="../website/css/log_in_successfully.css">

    <main>
        <section class="log_in_successfully">
            <div class="log_in_successfully_wrapper">
                <h1 class="log_in_successfully_title">Вы успешно подтвердили емейл!</h1>
{{--                <h2 class="log_in_successfully_info1">--}}
{{--                    Ваш статус <span>“Гость”</span>--}}
{{--                </h2>--}}
{{--                <p class="log_in_successfully_info2">--}}
{{--                    Откройте новые возможности для инвестиций вместе с сервисом Drafter--}}
{{--                </p>--}}
                <a href="/login" class="log_in_successfully_link">

                Начать работу
                </a>
            </div>
        </section>
    </main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../website/js/confirm.js">
</script>

@include('include.footer')
