@include('include.header')

    <link rel="stylesheet" href="../website/css/log_in_successfully.css">

    <main>
        <section class="log_in_successfully">
            <div class="log_in_successfully_wrapper">
                <h1 class="log_in_successfully_title">Данная ссылка уже не действительна</h1>
                <button class="log_in_successfully_link recover_password_form_btn  open" id="send_code_btn">Отправить заново?</button>
                <p class="email_time_left"></p>
            </div>
        </section>
    </main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../website/js/confirm.js">
</script>

<script type="text/javascript">
	

	$('#send_code_btn').click(function (){
        $.ajax({
            url: "{{route('resend_reset_password_email_code')}}",
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


    setInterval(function(){

        $.ajax({
            url: "{{route('left_time_password_resets_email2')}}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {

                if(data.timer === 'true') {

                    $('.email_time_left').html(data.message)
                    $('.recover_password_form_btn').hide().removeClass('open')

                } else {

                    $('.email_time_left').html('');

                    if (!$('.recover_password_form_btn').hasClass('open')) {
                        $('.recover_password_form_btn').show().addClass('open')
                    }

                }
            },
            cache: false
        })

    }, 1000);


</script>



@include('include.footer')
