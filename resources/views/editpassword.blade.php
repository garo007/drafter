@include('include.header')
<main>
    <section class="text-center">
        <br>
        @if(session()->has('successMsg'))
            <span class="success-msg">{{ session('successMsg') }}</span>
        @endif
        @if(session()->has('errorMsg'))
            <span class="error_text"> {{ session('errorMsg') }}</span>
            <div class="log_in_input_wrapper error_text_input"></div>
        @endif
        <form action="{{ route('updatepass') }}" method="post">
            @csrf


            <br>
            <div class="log_in_input_wrapper text_input">
                @if ($errors->has('current_password'))
                    <span class="error_text">{{$errors->first('current_password')}}</span>
                    <div class="log_in_input_wrapper error_text_input"></div>
                @endif
                <div class="log_in_input_wrapper">
                    <input type="password" placeholder="старый пароль" name="current_password" class="log_in_input"
                           value="{{ old('current_password') }}">
                </div>

                @if ($errors->has('new_password'))
                    <span class="error_text">{{$errors->first('new_password')}}</span>
                    <div class="log_in_input_wrapper error_text_input"></div>
                @endif
                <div class="log_in_input_wrapper">
                    <input type="password" placeholder="новый пароль" name="new_password" class="log_in_input">
                </div>

                @if ($errors->has('new_password_confirmation'))
                    <span class="error_text">{{$errors->first('')}}</span>
                    <div class="log_in_input_wrapper error_text_input"></div>
                @endif
                <div class="log_in_input_wrapper">
                    <input type="password" placeholder="новый пароль еще раз" name="new_password_confirmation"
                           class="log_in_input">
                </div>
            </div>
            <button type="submit" class="sign_up_btn2">Изменить пароль</button>
        </form>
        <br>
    </section>
</main>
@include('include.footer')
