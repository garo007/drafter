@include('include.header')
    <link rel="stylesheet" href="../website/css/confirmation_code.css">
    <main>
        <section class="confirmation">
            <div class="confirmation_wrapper">
                <form action="{{ route('check_signup_confirmation_code') }}" method="post" class="confirmation_form_wrapper">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                    <h1 class="confirmation_title">Введите код  <span>подтверждения</span> </h1>
                    <div class="confirmation_code_number_wrapper">
                        <p class="confirmation_code_message">
                            На Ваш номер {{ session()->get('phone_num') }} было отправлено SMS-сообщение
                        </p>
                        <a href="{{ route('beck_to_signup') }}" class="confirmation_code_change_number return_back_register">
                            Изменить номер
                        </a>

                    </div>
                    <div class="confirmation_code_inputs_btn_wrapper">
                        <div class="confirm_inputs">
                            <div class="confirmation_code_input">
                                @if ($errors->has('confirmation_code_error'))
                                    <input type="text" maxlength="1" name="number[]" class="confirm_code_input error">
                                @else
                                    <input type="text" maxlength="1" name="number[]" class="confirm_code_input">
                                @endif
                            </div>
                            <div class="confirmation_code_input">
                                @if ($errors->has('confirmation_code_error'))
                                    <input type="text" maxlength="1" name="number[]" class="confirm_code_input error">
                                @else
                                    <input type="text" maxlength="1" name="number[]" class="confirm_code_input">
                                @endif
                            </div>
                            <div class="confirmation_code_input">
                                @if ($errors->has('confirmation_code_error'))
                                    <input type="text" maxlength="1" name="number[]" class="confirm_code_input error">
                                @else
                                    <input type="text" maxlength="1" name="number[]" class="confirm_code_input">
                                @endif
                            </div>
                            <div class="confirmation_code_input">
                                @if ($errors->has('confirmation_code_error'))
                                    <input type="text" maxlength="1" name="number[]" class="confirm_code_input error">
                                @else
                                    <input type="text" maxlength="1" name="number[]" class="confirm_code_input">
                                @endif
                            </div>
                        </div>
                        <button  class="confirm_btn">Подтвердить</button>
                    </div>

                    <div class="countdown confirmation_title"></div>
                    <span class="send_code_text confirmation_code_message">
                        
                        <button style="display: none;" type="button" id="send_code_btn" class="confirm_btn">Отправить код</button>
                        <span class="left_time_for_confirmation_register_time"></span>
                    </span>


                </form>
{{--                <form  action="{{ route('check_signup_confirmation_code') }}" method="post">--}}

{{--                    @if(session()->has('reset_password_email'))--}}
{{--                        <input type="hidden" value="{{Session::get('reset_password_email')}}" name="reset_password_email">--}}
{{--                    @endif--}}

{{--                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>--}}


{{--                </form>--}}
            </div>
        </section>

    </main>



@include('include.footer')
<script src="../website/js/confirm.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script>

    setInterval(function(){

        $.ajax({
            url: "{{route('left_time_for_confirmation_register_time')}}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {

                if(data.timer === 'true') {

                    $('.left_time_for_confirmation_register_time').html(data.message)
                    $('#send_code_btn').hide().removeClass('open')
                    
                } else {

                    $('.left_time_for_confirmation_register_time').html('');

                    if (!$('#send_code_btn').hasClass('open')) {
                        $('#send_code_btn').show().addClass('open')
                    }

                }
            },
            cache: false
        })

    }, 1000);



    $('#send_code_btn').click(function (){
        $.ajax({
            url: "{{route('send_online_review')}}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data);
            },
            cache: false
        })
    })

</script>
