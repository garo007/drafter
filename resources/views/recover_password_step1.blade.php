@include('include.header')
<link rel="stylesheet" href="../website/css/recover-step1.css">
<main>
    <section class="recover_password">
            <h1 class="recover_password_form_title">Восстановление пароля</h1>

            {{--        <p class="my_subtitle">Мы отправим код подтверждения на Вашу почту</p>--}}

            <div class="recover_password_wrapper">
                <form method="post" class="recover_password_form_wrapper" action="{{ route('get_password_confirmation_code') }}" id="recover_password_form_id">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    @if ($errors->has('phone_or_email'))
                        <span class="error_text">{{$errors->first('phone_or_email')}}</span>
                        <div class="recover_password_inputs_wrapper error_text_input">
                            @elseif($errors->has('phone_not_exist'))
                                <span class="error_text">{{$errors->first('phone_not_exist')}}</span>
                                <div class="recover_password_inputs_wrapper error_text_input">
                                    @else
                                        <div class="recover_password_inputs_wrapper">
                                            @endif
                                            <div class="recover_password_inputs_wrapper">
                                                <input type="text" name="phone_or_email" class="recover_password_input"
                                                       placeholder="Телефон / e-mail">
                                            </div>
                                            <button style="display: none" class="recover_password_form_btn not_verify_email">
                                                Отправить
                                            </button>
                                            <p class="email_time_left"></p>
                                        </div>
                                </div>
                        </div>
                </form>
            </div>

            @if(session()->has('send_modal'))

                 <div id="not_verify_email_modal1" class="modal open">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <div class="service">
                            <div class="service_items_wrapper">
                                <p class="service_items_wrapper_text">
                                    Мы отправим код подтверждения на Вашу почту
                                </p>

{{--                                <p class="email_time_left"></p>--}}
{{--                                <button style="display: none;" class="send_email_again">Отправить еще раз</button>--}}
                            </div>
                        </div>
                    </div>
                 </div>

            @endif


    </section>

</main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../website/js/confirm.js"></script>
<script>
    $('.close').click(function (){
        $(this).closest('not_verify_email_modal1').removeClass('open')
    })

    {{--$('.send_email_again').on('click', function(){--}}
    {{--    $.ajax({--}}
    {{--        url: "{{route('left_time_password_resets_email')}}",--}}
    {{--        type: "POST",--}}
    {{--        headers: {--}}
    {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
    {{--        },--}}
    {{--        beforeSend: () => {--}}
    {{--            $(this).css('display', 'none')--}}
    {{--        },--}}
    {{--        success: (data) => {--}}
    {{--            console.log(data);--}}
    {{--        },--}}
    {{--        cache: false--}}
    {{--    })--}}
    {{--})--}}



    setInterval(function(){

        $.ajax({
            url: "{{route('left_time_password_resets_email')}}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {

                if(data.timer === 'true') {

                    $('.email_time_left').html(data.message)
                    $('.recover_password_form_btn.not_verify_email').hide().removeClass('open')

                } else {

                    $('.email_time_left').html('');

                    if (!$('.recover_password_form_btn.not_verify_email').hasClass('open')) {
                        $('.recover_password_form_btn.not_verify_email').show().addClass('open')
                    }

                }
            },
            cache: false
        })

    }, 1000);




</script>

@include('include.footer')
@php
session()->forget('send_modal')
@endphp
