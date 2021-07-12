@include('include.header')
<link rel="stylesheet" href="{{ asset('/website/css/chat.css' )}}">

<script>
    window.auth = {!! auth()->user() !!}
</script>
<main>
    <section  class="chat" >
        <div class="chat_wrapper" id="app">
            <div class="chat_items_main_wrapper">
                    <chat-component> </chat-component>
            </div>
            <div class="mobile_chat_items_main_wrapper">
                <mobile-chat-component></mobile-chat-component>
            </div>
        </div>
    </section>
</main>
<script src="{{ asset('js/app.js') }}" defer></script>
<script  src="{{ asset('js/chat.js') }}"></script>
@include('include.footer')
