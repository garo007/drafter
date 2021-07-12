@include('include.header')
    <link rel="stylesheet" href="../website/css/recover.css">
    <main>
        <section class="recover_password">
            <div class="recover_password_wrapper">
                <form action="{{ route('recover_password_step1') }}" method="post" class="recover_password_form_wrapper">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                    <h1 class="recover_password_form_title">Восстановление пароля</h1>

{{--                    @if ($errors->has('phone'))--}}
{{--                        <span class="error_text">{{$errors->first('phone')}}</span>--}}
{{--                        <div class="recover_password_inputs_wrapper error_text_input">--}}
{{--                    @elseif($errors->has('phone_not_exist'))--}}
{{--                        <span class="error_text">{{$errors->first('phone_not_exist')}}</span>--}}
{{--                        <div class="recover_password_inputs_wrapper error_text_input">--}}
{{--                    @else--}}
{{--                        <div class="recover_password_inputs_wrapper">--}}
{{--                    @endif--}}
{{--                        <input type="number" name="phone" class="recover_password_input" value="" placeholder="Номер телефона">--}}
{{--                    </div>--}}


                    @if ($errors->has('password'))
                        <span class="error_text">{{$errors->first('password')}}</span>
                        <div class="recover_password_inputs_wrapper error_text_input">
                    @else
                        <div class="recover_password_inputs_wrapper">
                    @endif
                        <input type="password" name="password" class="recover_password_input" placeholder="Новый пароль">
                    </div>

                    @if ($errors->has('password_confirmation'))
                        <span class="error_text">{{$errors->first('password_confirmation')}}</span>
                        <div class="recover_password_inputs_wrapper error_text_input">
                    @else
                        <div class="recover_password_inputs_wrapper">
                    @endif
                        <input type="password" name="password_confirmation" class="recover_password_input" placeholder="Повторите пароль">
                    </div>

                    <button class="recover_password_form_btn">
                        Далее
                    </button>
                </form>
            </div>
        </section>

    </main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../website/js/confirm.js"></script>




@include('include.footer')
