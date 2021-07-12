@include('include.header')

<link rel="stylesheet" href="../website/css/confirmation_code.css">
<main>
    <section class="confirmation">
        <div class="confirmation_wrapper">
            <form action="{{ route('check_password_confirmation_code') }}" method="post" class="confirmation_form_wrapper confirmation_form_wrapper_recover">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

{{--                <h1 class="confirmation_title">Введите код  <span>подтверждения</span> </h1>--}}
                <div class="confirmation_code_number_wrapper">
                    <h4 class="confirmation_email_message">
                        Данная ссылка уже не действительна
                    </h4>

                </div>
                <div class="confirmation_code_inputs_btn_wrapper">
                    <a href="{{route('login')}}" class="sign_up_btn to_login_btn"> Войти</a>
                </div>
            </form>

            <span class="send_code_text confirmation_code_message" style="display: block;">
                <button style="display: none;" type="button" id="send_code_btn" class="confirm_btn">Отправить код</button>
                <span class="left_time_for_confirmation_register_time"></span>
            </span>

            <form  action="{{ route('get_password_confirmation_code') }}" method="post">

                @if(session()->has('reset_password_email'))
                    <input type="hidden" value="{{Session::get('reset_password_email')}}" name="reset_password_email">
                @endif

                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>


            </form>
        </div>
    </section>

</main>

@include('include.footer')
