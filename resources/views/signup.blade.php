@include('include.header')
<main>
    <section class="log_in">
        <form action="{{ route('signup') }}" method="post" class="log_in_wrapper">
            <h1 class="log_in_title">Регистрация</h1>
            <div class="log_in_inputs_wrapper">

                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>


                @if ($errors->has('name'))
                    <span class="error_text">{{$errors->first('name')}}</span>
                    <div class="log_in_input_wrapper error_text_input">
                        @else
                            <div class="log_in_input_wrapper">
                                @endif
                                <input type="text" placeholder="Имя" name="name" class="log_in_input"
                                       @if(session()->has('aft_r')) value="{{session()->get('aft_r')['name']}}"
                                       @else value="{{old('name')}}" @endif>
                            </div>
                            {{--                            <div class="tooltip">?--}}
                            {{--                                <div class="tooltiptext">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>--}}
                            {{--                            </div>--}}
                            @if ($errors->has('surname'))
                                <span class="error_text">{{$errors->first('surname')}}</span>
                                <div class="log_in_input_wrapper error_text_input">
                                    @else
                                        <div class="log_in_input_wrapper">
                                            @endif
                                            <input type="text" placeholder="Фамилия" name="surname" class="log_in_input"
                                                   @if(session()->has('aft_r')) value="{{session()->get('aft_r')['surname']}}"
                                                   @else value="{{old('surname')}}" @endif >
                                        </div>

                                        @if ($errors->has('phone'))
                                            <span class="error_text">{{$errors->first('phone')}}</span>
                                            <div class="log_in_input_wrapper error_text_input">
                                                @else
                                                    <div class="log_in_input_wrapper">
                                                        @endif
                                                        <input id='yourphone' type="text" placeholder="телефон"
                                                               name="phone" class="log_in_input"
                                                               @if(session()->has('aft_r')) value="{{session()->get('aft_r')['phone']}}"
                                                               @else value="{{old('phone')}}" @endif >
                                                    </div>


                                                    @if(session()->has('error_email'))
                                                        <span class="error_text">{{ session()->get('error_email') }}</span>
                                                    @endif
                                                    @if ($errors->has('email'))
                                                        <span class="error_text">{{$errors->first('email')}}</span>
                                                        <div class="log_in_input_wrapper error_text_input">
                                                            @else
                                                                <div class="log_in_input_wrapper">
                                                                    @endif
                                                                    <input type="text" placeholder="e-mail" name="email"
                                                                           class="log_in_input"
                                                                           @if(session()->has('aft_r')) value="{{session()->get('aft_r')['email']}}"
                                                                           @else value="{{old('email')}}" @endif >
                                                                </div>


                                                                @if ($errors->has('password'))
                                                                    <span
                                                                        class="error_text">{{$errors->first('password')}}</span>
                                                                    <div class="log_in_input_wrapper error_text_input">
                                                                        @else
                                                                            <div class="log_in_input_wrapper">
                                                                                @endif
                                                                                <input type="password"
                                                                                       placeholder="Пароль"
                                                                                       name="password"
                                                                                       class="log_in_input">
                                                                            </div>


                                                                            @if ($errors->has('password_confirmation'))
                                                                                <span
                                                                                    class="error_text">{{$errors->first('password_confirmation')}}</span>
                                                                                <div
                                                                                    class="log_in_input_wrapper error_text_input">
                                                                                    @else
                                                                                        <div
                                                                                            class="log_in_input_wrapper">
                                                                                            @endif
                                                                                            <input type="password"
                                                                                                   placeholder="Повторите пароль"
                                                                                                   name="password_confirmation"
                                                                                                   class="log_in_input">
                                                                                        </div>
                                                                                </div>


                                                                                @if ($errors->has('policy'))
                                                                                    <span
                                                                                        class="error_text">{{$errors->first('policy')}}</span>
                                                                                @endif
                                                                                <div
                                                                                    class="sign_up_check_input_wrapper">
                                                                                    <input type="checkbox"
                                                                                           class="sign_up_check_input"
                                                                                           hidden id="sign_up_input"
                                                                                           name="policy">
                                                                                    <label for="sign_up_input"
                                                                                           class="sign_up_input_label"></label>
                                                                                    <span
                                                                                        class="sign_up_input_text"> <span>Я принимаю</span> <a
                                                                                            href="#"
                                                                                            class="open_terms_of_use">условия использования и пользовательское соглашение</a>  </span>
                                                                                </div>
                                                                                <button class="sign_up_btn2">Далее
                                                                                </button>
        </form>
    </section>

</main>

@include('include.footer')
