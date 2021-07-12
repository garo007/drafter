<template>
    <div class="chat_messages_item">
        <div class="messages_wrapper">
            <div class=" hidden_chat_header">
                <div class="arrow">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L0.999999 9L9 17" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <audio src="public/website/audio/Sound_08029.mp3"></audio>
                </div>
                <div class="chat_messages_img_title_wrapper">
                    <div class="chat_messages_img">
                        <img src="" alt="">
                    </div>
                    <h1 class="chat_messages_title">{{ friend.name }}</h1>
                </div>
                <div class="chat_messages_points_wrapper">
                    <div class="chat_messages_point"></div>
                    <div class="chat_messages_point"></div>
                    <div class="chat_messages_point"></div>
                </div>
            </div>
            <div class="chat_messages_types" id="scroll_top_bottom">
                <div class="chat_income_messages hidden_message">
                    <p class="chat_income_messages_date">11 марта 2021</p>
                    <div class="chat_income_message_wrapper">
                        <!--                        <div class="chat_income_messages_img">-->
                        <!--                            <img src="" alt="">-->
                        <!--                        </div>-->
                        <div class="chat_income_message_date_text_wrapper">
                            <p class="income_message_text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna
                            </p>
                            <p class="chat_income_message_our">18:56</p>
                        </div>
                    </div>
                </div>
                <!--                <div class="hidden_message_second">-->
                <!--                    <div class="chat_outcome_message_svg_wrapper">-->
                <!--                        <div class="chat_svg">-->
                <!--                            <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                                <path d="M12.3136 0.656854L6.65674 6.31371L0.999884 0.656854" stroke="#515B66"/>-->
                <!--                            </svg>-->

                <!--                        </div>-->
                <!--                        <div class="chat_outcome_messages">-->
                <!--                            <p class="chat_outcome_messages_text">Всмысле</p>-->
                <!--                            <p class="chat_outcome_messages_hour">18:59</p>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="chat_outcome_message_svg_wrapper">-->
                <!--                        <div class="chat_svg">-->
                <!--                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                                <path d="M12.3136 5.65685L6.65674 11.3137L0.999884 5.65685" stroke="#515B66"/>-->
                <!--                                <path d="M16.6569 5.6576L11 11.3145" stroke="#515B66"/>-->
                <!--                            </svg>-->


                <!--                        </div>-->
                <!--                        <div class="chat_outcome_messages_second">-->
                <!--                            <p class="chat_outcome_messages_text">И что?</p>-->
                <!--                            <p class="chat_outcome_messages_hour">19:00</p>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div :class="{'chat_income_messages': chat.type === 1, 'chat_outcome_messages_wrapper':chat.type === 0}"
                     v-for="(chat, index) in chats" :key="index">
                    <p class="chat_income_messages_date"
                       v-if="!chats[index - 1] || chat.created != chats[index - 1].created">{{ chat.created }}</p>
                    <div class="chat_income_message_wrapper" v-if="chat.type === 1">
                        <!--                        <div class="chat_income_messages_img">-->
                        <!--                            <img :src="'storage/'+friend.image " alt="">-->
                        <!--                        </div>-->
                        <div class="chat_income_message_date_text_wrapper">
                            <div v-if="chat.message === null">
                                <div v-if="checkFile(chat.image) === 'file'" class="image_span">
                                    <div class="button-open-info-div2">
                                        <div class="chat_messages_point"></div>
                                        <div class="chat_messages_point"></div>
                                        <div class="chat_messages_point"></div>
                                    </div>
                                    <div class="open_info_div">
                                        <div>
                                            <div class="chat_points_line"></div>
                                            <button type="button" class="turn_off_notifications_btn download_image">
                                                <a :href="'/storage/chat/'+chat.image" download>
                                                    скачать файл
                                                </a>
                                            </button>
                                            <div class="chat_points_line"></div>
                                        </div>
                                    </div>
                                    <img src="website/images/file.png"/>
                                </div>
                            </div>
                            <div v-if="chat.message === null">
                                <div v-if="checkFile(chat.image) === 'image'" class="image_span">
                                    <div class="button-open-info-div2">
                                        <div class="chat_messages_point"></div>
                                        <div class="chat_messages_point"></div>
                                        <div class="chat_messages_point"></div>
                                    </div>
                                    <div class="open_info_div">
                                        <div>
                                            <div class="chat_points_line"></div>
                                            <button type="button" class="turn_off_notifications_btn download_image">
                                                <a :href="'/storage/chat/'+chat.image" download>
                                                    скачать изображение
                                                </a>
                                            </button>
                                            <div class="chat_points_line"></div>
                                        </div>
                                    </div>
                                    <img :src="'storage/chat/'+chat.image" class="chat_image" alt="img"
                                         v-on:click="open_modal($event)"/>
                                </div>
                                <span v-else-if="checkFile(chat.image) === 'video'">
                                <video width="100%" height="240" controls>
                                      <source :src="'storage/chat/'+chat.image" type="video/mp4">
                                </video>
                                </span>
                            </div>
                            <p class="income_message_text" v-else>
                                {{ chat.message }}
                            </p>
                            <p class="chat_income_message_our">{{ chat.send_at }}</p>
                        </div>
                    </div>
                    <div class="chat_outcome_messages" v-if="chat.type === 0">
                        <div class="chat_svg">
                            <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 v-if="chat.read_at== null">
                                <path d="M12.3136 0.656854L6.65674 6.31371L0.999884 0.656854" stroke="#515B66"/>
                            </svg>
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" v-else>
                                <path d="M12.3136 5.65685L6.65674 11.3137L0.999884 5.65685" stroke="#e5d6a0"/>
                                <path d="M16.6569 5.6576L11 11.3145" stroke="#e5d6a0"/>
                            </svg>
                        </div>
                        <div v-if="chat.message === null">
                            <div v-if="checkFile(chat.image) === 'file'" class="image_span">
                                <div class="button-open-info-div">
                                    <div class="chat_messages_point"></div>
                                    <div class="chat_messages_point"></div>
                                    <div class="chat_messages_point"></div>
                                </div>
                                <div class="open_info_div">
                                    <div>
                                        <div class="chat_points_line"></div>
                                        <button type="button" class="turn_off_notifications_btn download_image">
                                            <a :href="'/storage/chat/'+chat.image" download>
                                                скачать файл
                                            </a>
                                        </button>
                                        <div class="chat_points_line"></div>
                                    </div>
                                </div>
                                <img src="website/images/file.png"/>
                            </div>
                        </div>
                        <div v-if="chat.message === null" style="margin-left: 20px;">

                            <div v-if="checkFile(chat.image) === 'image'" class="image_span">
                                <div class="button-open-info-div">
                                    <div class="chat_messages_point"></div>
                                    <div class="chat_messages_point"></div>
                                    <div class="chat_messages_point"></div>
                                </div>
                                <div class="open_info_div">
                                    <div>
                                        <div class="chat_points_line"></div>
                                        <button type="button" class="turn_off_notifications_btn download_image">
                                            <a :href="'/storage/chat/'+chat.image" download>
                                                скачать изображение
                                            </a>
                                        </button>
                                        <div class="chat_points_line"></div>
                                    </div>
                                </div>

                                <img :src="'storage/chat/'+chat.image" class="chat_image"
                                     v-on:click="open_modal($event)"/>
                            </div>
                        </div>
                        <div v-if="chat.message === null" style="margin-left: 20px;">
                            <span v-if="checkFile(chat.image) === 'video'">
                                <video width="100%" height="240" controls>
                                      <source :src="'storage/chat/'+chat.image" type="video/mp4">
                                </video>
                            </span>
                        </div>
                        <p class="chat_outcome_messages_text" v-else>{{ chat.message }}</p>
                        <p class="chat_outcome_messages_hour">{{ chat.send_at }}</p>

                    </div>

                </div>
            </div>
            <div class="chat_messages_inputs_btns_wrapper" v-show="!session.block">
                <div class="chat_messages_inputs_wrapper">
                    <div class="chat_messages_first_input">
                        <input id="btn-input" :disabled="session.block" v-model="message" @keypress.enter="send"
                               type="text" placeholder="Сообщение" name="message" class="chat_message_input_field">
                    </div>
                    <label :for="'file'+session.id" class=" write_us_input file_label">
                        <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.7"
                                  d="M20.4383 10.6622L11.2483 19.8522C10.1225 20.9781 8.59552 21.6106 7.00334 21.6106C5.41115 21.6106 3.88418 20.9781 2.75834 19.8522C1.63249 18.7264 1 17.1994 1 15.6072C1 14.015 1.63249 12.4881 2.75834 11.3622L11.9483 2.17222C12.6989 1.42166 13.7169 1 14.7783 1C15.8398 1 16.8578 1.42166 17.6083 2.17222C18.3589 2.92279 18.7806 3.94077 18.7806 5.00222C18.7806 6.06368 18.3589 7.08166 17.6083 7.83222L8.40834 17.0222C8.03306 17.3975 7.52406 17.6083 6.99334 17.6083C6.46261 17.6083 5.95362 17.3975 5.57834 17.0222C5.20306 16.6469 4.99222 16.138 4.99222 15.6072C4.99222 15.0765 5.20306 14.5675 5.57834 14.1922L14.0683 5.71222"
                                  stroke="#E5D6A0" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="file_span"></span>
                        <input type="file" :id="'file'+session.id" name="file" v-on:change="send('image',$event)"
                               hidden>
                    </label>
                </div>
                <button class="chat_message_send_btn" id="btn-chat" @click.prevent="send">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 15V1" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M1 8L8 1L15 8" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                </button>
            </div>
            <div class="chat_messages_inputs_btns_wrapper" v-show="session.block">
                Переписка недоступна
            </div>

        </div>
        <modal v-if="showModal" @close="showModal = false">
            <div class="modal-mask">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <img v-bind:src="imageSrc" v-bind:alt="imageSrc" id="modal-image">
                        <slot name="footer">
                            <button class="modal-default-button" @click="close_modal()">
                                X
                            </button>
                        </slot>
                    </div>
                </div>
            </div>

        </modal>
    </div>

</template>

<script>

export default {
    props: ['friend'],
    data() {
        return {
            chats: [],
            message: null,
            auth: window.auth,
            upload_file: {},
            isTyping: false,
            chat_is_full: false,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            showModal: false,
            imageSrc: '',
        }
    },
    watch: {
        message(value) {
            if (value) {
                Echo.private(`Chat.${this.friend.session.id}`).whisper("typing", {
                    name: auth.name
                });
            }
            // let scrollHeight = document.getElementById('scroll_top_bottom').scrollHeight;
            // let scrollHeightOld = '';
            // if(scrollHeight > scrollHeightOld){
            //     alert()
            // }
            // scrollHeightOld = scrollHeight;
        }

    },
    computed: {
        session() {
            return this.friend.session;
        },
    },

    created() {
        this.passEvent();
        this.read();
        this.getAllMessages();
        Echo.private(`Chat.${this.friend.session.id}`).listen(
            "PrivateChatEvent",
            e => {
                this.friend.session.open ? this.read() : "";
                this.chats.push({message: e.content, image: e.image, type: 1, send_at: "Только что"});
                this.playSound()
                setTimeout(this.scrollToEnd, 100);

            }
        );


        Echo.private(`Chat.${this.friend.session.id}`).listen("MsgReadEvent", e => {
                this.chats.forEach(
                    chat => (chat.id == e.chat.id ? (chat.read_at = e.chat.read_at) : ""),
                )
            }
        );


        Echo.private(`Chat.${this.friend.session.id}`).listen(
            "BlockEvent",
            e => (this.session.block = e.blocked)
        );


        Echo.private(`Chat.${this.friend.session.id}`).listenForWhisper(
            "typing",
            e => {
                this.isTyping = true;
                this.passEvent();
                setTimeout(() => {
                    this.isTyping = false;
                    this.passEvent();
                }, 2000);
            }
        );
    },
    mounted() {
        setTimeout(function () {
            document.getElementById('scroll_top_bottom').scrollTo(0, 99999);
        }, 2000)
    },

    methods: {
        open_modal($event) {
            this.imageSrc = $event.path[0].currentSrc
            this.showModal = true
        },
        close_modal() {
            this.showModal = false
        },
        playSound() {
            var audio = document.querySelector('audio');
            audio.play();
        },
        passEvent() {
            this.$emit('isTyping', this.isTyping)
        },
        CheckChatFull() {
            this.$emit('chat_is_full', this.chat_is_full)
        },
        getAllMessages() {
            const _this = this;
            axios
                .post(`/session/${this.friend.session.id}/chats`)
                .then(function (res) {
                    _this.chats = res.data.data;
                    _this.chat_is_full = true;
                    _this.CheckChatFull()

                });
        },
        //not maked
        send(type, e) {
            if (type == 'image') {
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                let formData = new FormData();
                formData.append('file', files[0]);
                formData.append('to_user', this.friend.id);
                const _this = this
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }
                axios.post(`/send/${this.friend.session.id}`, formData, config)
                    .then(function (res) {
                        setTimeout(_this.scrollToEnd, 100);
                        _this.pushToChatsFile(res.data.message);
                        this.message = null;

                    });
            } else {
                if (this.message) {
                    this.pushToChats(this.message);
                    axios.post(`/send/${this.friend.session.id}`, {
                        message: this.message,
                        to_user: this.friend.id
                    })
                        .then(res => (this.chats[this.chats.length - 1].id = res.data));
                    this.message = null;
                    setTimeout(this.scrollToEnd, 100);

                }
            }
        },
        scrollToEnd() {
            document.getElementById('scroll_top_bottom').scrollTo(0, 99999);
        },
        pushToChats(message) {
            this.chats.push({
                message: message,
                type: 0,
                read_at: null,
                send_at: "Только что"
            });
        },
        pushToChatsFile(file) {
            this.chats.push({
                image: file,
                message: null,
                type: 0,
                read_at: null,
                send_at: "Только что"
            });
        },
        checkFile(file) {
            let extension = file.substr((file.lastIndexOf('.') + 1));
            if (/(jpeg|webp|gif|png|jpg)$/ig.test(extension)) {
                return 'image'
            } else if (/(mp3|mp4|MOV|WMV|FLV|AVI)$/ig.test(extension)) {
                return 'video'
            } else {
                return 'file'
            }
        },
        close() {
            this.$emit('close');
        },
        clear() {
            axios.post(`session/${this.friend.session.id}/clear`).then(res => {
                this.chats = [];
            })
        },

        read() {
            axios.post(`/session/${this.friend.session.id}/read`);
        }

    },
};

$(document).on('change', '#fileinput2', function () {

    var value = $(this).val();

    var arr = value.split('\\');

    $(this).parent().find(".file_span").html(arr[arr.length - 1]);

    var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];

    var span = $(this).parent().find(".file_span");


    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {

        span.html("Невозможно загрузить формат");

        span.css({
            'color': '#F60000'
        });

        $('.hide-title').css({
            "display": "block"
        })


    } else {

        span.css({

            'color': "#9c9c9c"

        });


        //  var parent =$(this).closest(".projects-form-input-wrapper");

        //  parent.append("<img class='close-js' src='wp-content/themes/build/images/file-.svg' alt=''>");

        //  parent.append("<p class='hide-title'>Файл</p>");

        //   parent.css({

        //      "position": 'relative',

        //      "justify-content": 'space-between'

        //  });


    }

});


$(document).on("click", ".filter_message", function () {

    var data_id = $(this).data("id");


    // $(this).closest().find(".messages_wrapper").removeClass("open");

    $(".messages_wrapper").removeClass("open");
    $("#" + data_id).addClass("open");
    $(".chat_filter_item").hide();

})

$(document).on("click", ".arrow", function () {
    $(".chat_filter_item").show();
    $(".messages_wrapper").removeClass("open");

})


$(document).on("click", ".back_btn", function () {
    $(".chat_filter_item").show();
    $(".messages_wrapper").removeClass("open");
    // $(".chat_hidden_message_container").removeClass("open");
    // $(".chat_black_div").hide();
    $(".chat_hidden_message_container").toggleClass("open");
    $("body").toggleClass("active_body");
    $(".chat").toggleClass("active");
})


$(document).on("mouseover", ".chat_hidden_point_message_wrapper", function () {
    $(".chat_hidden_message_container").addClass("open");
    //$("body").addClass("active_body");
    $(".chat").addClass("active");
    $(document).on("click", ".chat_hidden_point_message_wrapper", function () {
        $(".chat_hidden_message_container").removeClass("open");
        //  $("body").removeClass("active_body");
        $(".chat").removeClass("active");
    })
})
$(document).on("mouseout", ".chat_hidden_message_container", function () {
    $(".chat_hidden_message_container").removeClass("open");
    //  $("body").removeClass("active_body");
    $(".chat").removeClass("active");
})

$(document).on("click", ".button-open-info-div", function () {
    let x = $(this).parents('.image_span').find('.open_info_div')
    x.toggle();

})
$(document).on("click", ".button-open-info-div2", function () {
    let x = $(this).parents('.image_span').find('.open_info_div')
    x.toggle();
    x.css('right', '0')
})
// $( "#scroll_top_bottom" ).scroll(function() {
//     console.log( $('#scroll_top_bottom').scrollTop() )
// })


// document.addEventListener('scroll', function (event) {
//     if (event.target.id === 'scroll_top_bottom') { // or any other filtering condition
//
//         console.log('height', event.target.scrollHeight);
//     }
// }, true /*Capture event*/);

//     var data_id = $(this).data("id");


//     // $(this).closest().find(".messages_wrapper").removeClass("open");

//     $(".messages_wrapper").removeClass("open");
//     $("#" + data_id).addClass("open");
//     $(".chat_filter_item").hide();
// })


// $(document).on("click", ".arrow", function(){
//     $(".chat_filter_item").show();
//     $(".messages_wrapper").removeClass("open");
// })

</script>
