<template>
    <div class="parent-of-all">
        <div class="chat_items_header">
            <div class="chat_filter_input_svgs_wrapper">
                <div class="chat_filter_input_wrapper">
                    <input type="text" class="chat_filter_input_field" v-model="search" placeholder="поиск...">
                </div>
                <!--                <div class="chat_filter_svg_first">-->
                <!--                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M12 10.125L12.0001 20.25" stroke="#9B8E6C" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                        <path d="M12.0001 3.75L12 6.375" stroke="#9B8E6C" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                        <path d="M12 10.125C13.0355 10.125 13.875 9.28553 13.875 8.25C13.875 7.21447 13.0355 6.375 12 6.375C10.9645 6.375 10.125 7.21447 10.125 8.25C10.125 9.28553 10.9645 10.125 12 10.125Z" stroke="#9B8E6C" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                        <path d="M18.75 17.625L18.7501 20.25" stroke="#9B8E6C" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                        <path d="M18.7501 3.75L18.75 13.875" stroke="#9B8E6C" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                        <path d="M18.75 17.625C19.7855 17.625 20.625 16.7855 20.625 15.75C20.625 14.7145 19.7855 13.875 18.75 13.875C17.7145 13.875 16.875 14.7145 16.875 15.75C16.875 16.7855 17.7145 17.625 18.75 17.625Z" stroke="#9B8E6C" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                        <path d="M5.25006 14.625L5.25 20.25" stroke="#9B8E6C" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                        <path d="M5.25 3.75L5.25006 10.875" stroke="#9B8E6C" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                        <path d="M5.25 14.625C6.28554 14.625 7.125 13.7855 7.125 12.75C7.125 11.7145 6.28554 10.875 5.25 10.875C4.21447 10.875 3.375 11.7145 3.375 12.75C3.375 13.7855 4.21447 14.625 5.25 14.625Z" stroke="#9B8E6C" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                    </svg>-->

                <!--                </div>-->
                <!--                <div class="chat_filter_svg_second">-->
                <!--                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M0.945313 0.5H17.0545C17.1998 0.5 17.342 0.542205 17.4637 0.621485C17.5855 0.700766 17.6816 0.813708 17.7404 0.946585C17.7992 1.07946 17.8181 1.22655 17.7948 1.36998C17.7716 1.51341 17.7072 1.64699 17.6094 1.7545L11.4449 8.53545C11.3194 8.6735 11.2499 8.85338 11.2499 9.03995V14.3486C11.2499 14.4721 11.2194 14.5936 11.1612 14.7025C11.1029 14.8114 11.0187 14.9042 10.9159 14.9726L7.91592 16.9727C7.80297 17.048 7.6717 17.0912 7.53611 17.0977C7.40052 17.1043 7.26569 17.0739 7.14601 17.0099C7.02632 16.9458 6.92626 16.8505 6.8565 16.734C6.78674 16.6176 6.7499 16.4844 6.7499 16.3486V9.03996C6.7499 8.85338 6.68036 8.67351 6.55485 8.53545L0.390358 1.7545C0.29262 1.64699 0.228215 1.51341 0.204972 1.36998C0.181728 1.22655 0.200647 1.07946 0.259427 0.946585C0.318208 0.813708 0.41432 0.700766 0.536083 0.621485C0.657845 0.542205 0.800015 0.5 0.945313 0.5V0.5Z" stroke="#E5D6A0" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                    </svg>-->

                <!--                </div>-->
            </div>
            <div class="chat_messages_header">
                <div class="chat_messages_img_title_wrapper"
                     v-if="this.active_window.image || this.active_window.name ">
                    <div class="chat_messages_img">
                        <img :src="'storage/'+this.active_window.image" v-if="this.active_window.image" alt="">
                        <img src="website/images/avatardefault.svg" v-else alt="">
                    </div>
                    <h1 class="chat_messages_title">{{ this.active_window.name }}</h1>
                    <span v-if="this.isTyping" style="color:gray" class="isTyping">Печатает...</span>

                </div>
                <div class="chat_hidden_point_message_wrapper"
                     v-if="this.active_window.image || this.active_window.name ">
                    <div class="chat_messages_points_wrapper">
                        <div class="chat_messages_point"></div>
                        <div class="chat_messages_point"></div>
                        <div class="chat_messages_point"></div>
                    </div>
                    <div class="orinak"></div>
                    <div class="chat_hidden_message_container">
                        <div class="chat_points_line"></div>
                        <button type="button" class="turn_off_notifications_btn">
                            Отключить уведомления
                        </button>
                        <div class="chat_points_line"></div>
                        <button type="button" class="block_btn" v-if="!this.session.block" @click.prevent="block">
                            Заблокировать
                        </button>
                        <button type="button" class="block_btn" v-if="this.session.block && can"
                                @click.prevent="unblock">
                            Разблокировать
                        </button>
                        <div class="chat_points_line"></div>
                        <!--                        <button type="button" class="back_btn">-->
                        <!--                            Назад-->
                        <!--                        </button>-->
                    </div>
                </div>

            </div>
        </div>
        <div class="chat_items_wrapper">
            <div class="chat_black_div"></div>
            <div class="chat_filter_item">
                <div class="chat_filter_new_messages_item">
                    <div class="chat_filter_message_img_text_wrapper">
                        <div class="chat_filter_message_img"><img src="website/images/avatardefault.svg" alt=""></div>
                        <div class="chat_filter_message_img_text_title_wrapper"><p
                            class="chat_filter_message_img_text_title">техническая поддержка</p>
                            <p class="chat_filter_message_img_text"></p></div>
                    </div>
                    <div class="chat_filter_message_date"><!---->
                        <!--                        <div class="last_logout"><span class="preview preview_online_status">Оффлайн</span>-->
                        <!--                            <p class="preview last_logout_date">10 минут назад</p></div>-->
                    </div>
                </div>
                <div :class="friend.session && friend.session.open  ? 'active_chat_friend' : '' "
                     class="chat_filter_new_messages_item" @click.prevent="openChat(friend)"
                     v-for="friend in searchHandler"
                     :key="friend.id">
                    <div class="chat_filter_message_img_text_wrapper">
                        <div class="chat_filter_message_img">
                            <img :src="'storage/'+friend.image" v-if="friend.image" alt="">
                            <img src="website/images/avatardefault.svg" v-else alt="">
                        </div>
                        <div class="chat_filter_message_img_text_title_wrapper">
                            <p class="chat_filter_message_img_text_title">{{ friend.name }}</p>
                            <div v-if="friend.session && friend.session.lastMessageFile != '' " style="max-width: 13px">
                                <div v-if="checkFile(friend.session.lastMessageFile) === 'file'">
                                    <span data-balloon="size: 2x" data-balloon-pos="up" class="db color-inherit link hover-cyan"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file fa-w-12 fa-2x"><path fill="#e5d6a0" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zm-22.6 22.7c2.1 2.1 3.5 4.6 4.2 7.4H256V32.5c2.8.7 5.3 2.1 7.4 4.2l83.9 83.9zM336 480H48c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h176v104c0 13.3 10.7 24 24 24h104v304c0 8.8-7.2 16-16 16z" class=""></path></svg></span>
                                </div>
                                <div v-if="checkFile(friend.session.lastMessageFile) === 'image'">
                                    <span data-balloon="size: 2x" data-balloon-pos="up" class="db color-inherit link hover-orange"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="file-image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-image fa-w-12 fa-2x"><path fill="#e5d6a0" d="M159 336l-39.5-39.5c-4.7-4.7-12.3-4.7-17 0l-39 39L63 448h256V304l-55.5-55.5c-4.7-4.7-12.3-4.7-17 0L159 336zm96-50.7l32 32V416H95.1l.3-67.2 15.6-15.6 48 48c20.3-20.3 77.7-77.6 96-95.9zM127 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm0-96c17.6 0 32 14.4 32 32s-14.4 32-32 32-32-14.4-32-32 14.4-32 32-32zm242.9-62.1L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM256 32.5c2.8.7 5.3 2.1 7.4 4.2l83.9 83.9c2.1 2.1 3.5 4.6 4.2 7.4H256V32.5zM352 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h176v104c0 13.3 10.7 24 24 24h104v304z" class=""></path></svg></span>
                                </div>
                                <div v-if="checkFile(friend.session.lastMessageFile) === 'video'">
                                    <span data-balloon="size: 2x" data-balloon-pos="up" class="db color-inherit link hover-pink"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="file-video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-video fa-w-12 fa-2x"><path fill="#e5d6a0" d="M224 280.593C224 267.01 212.989 256 199.407 256H88.593C75.011 256 64 267.01 64 280.593v110.815C64 404.99 75.011 416 88.593 416h110.814C212.989 416 224 404.99 224 391.407V381l27.971 27.971a23.998 23.998 0 0 0 16.97 7.029H296c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-27.059a24.003 24.003 0 0 0-16.97 7.029L224 291v-10.407zM192 384H96v-96h96v96zm80.255-96H288v96h-15.745L224 342.826v-13.652L272.255 288zm97.686-190.059l-83.883-83.882A47.996 47.996 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v416c0 26.51 21.49 48 48 48h288c26.51 0 48-21.49 48-48V131.882a48 48 0 0 0-14.059-33.941zM256 32.491a15.888 15.888 0 0 1 7.432 4.195l83.882 83.882a15.882 15.882 0 0 1 4.195 7.431H256V32.491zM352 464c0 8.837-7.164 16-16 16H48c-8.836 0-16-7.163-16-16V48c0-8.837 7.164-16 16-16h176v104c0 13.255 10.745 24 24 24h104v304z" class=""></path></svg></span>
                                </div>
                            </div>
                            <p class="chat_filter_message_img_text"
                               v-if=" friend.session && friend.session.lastMessage">{{ friend.session.lastMessage }}</p>
                            <p class="chat_filter_message_img_text" v-else>{{ "" }}</p>
                        </div>
                    </div>
                    <div class="chat_filter_message_date">
                        <div class="chat_filter_new_messages_quantity"
                             v-if="friend.session && friend.session.unreadCount > 0">
                            <p class="new_messages_quantity">{{
                                    friend.session.unreadCount ? friend.session.unreadCount
                                        : ''
                                }}</p>
                        </div>
                        <!--                        <p class="chat_filter_message_date_info" v-if="friend.session && friend.session.unreadCount > 0">{{friend.session.unreadCount}}</p>-->
                        <span class="preview_online_status active" v-if="friend.online">Онлайн</span>
                        <div v-else class="last_logout">
                            <span class="preview preview_online_status">Оффлайн</span>
                            <p class="preview last_logout_date">{{ friend.last_logout_date }}</p>
                        </div>

                    </div>
                </div>
            </div>
            <div v-for="friend in friends" :key="friend.id" v-show="CheckChatIsFull"
                 v-if="friend.session && friend.session.open" class="chat_messages_parent">
                <ChatForm
                    v-if="friend.session.open"
                    @close="close(friend)"
                    :friend="friend"
                    @isTyping="ChangeT($event)"
                    @chat_is_full="CheckChatFull($event)"
                ></ChatForm>
            </div>
        </div>
    </div>
</template>


<script>
import ChatForm from "./ChatForm";

export default {
    data() {
        return {
            friends: [],
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            auth: window.auth,
            active_window: {},
            isTyping: false,
            session: false,
            isActive: false,
            CheckChatIsFull: false,
            search: ''

        };
    },
    computed: {
        searchHandler() {
            return this.friends.filter(elem => {
                return elem.name.toLowerCase().includes(this.search.toLowerCase())
            })
        },
        can() {
            return this.session.blocked_by == auth.id;
        },


    },

    methods: {
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
        block() {
            this.session.block = true;
            axios.post(`/session/${this.session.id}/block`)
                .then(res => (this.session.blocked_by = auth.id));
        },
        unblock() {
            this.session.block = false;
            axios.post(`session/${this.session.id}/unblock`).then(
                res => {
                    this.session.blocked_by = null;
                }
            );
        },
        ChangeT(typing) {
            this.isTyping = typing;
        },
        CheckChatFull(full) {
            this.CheckChatIsFull = full
        },
        close(friend) {
            friend.session.open = false;
        },
        getFriends() {
            axios.post("/getFriends").then(res => {
                this.friends = res.data.data;
                this.friends.forEach(
                    friend => (friend.session ? this.listenForEverySession(friend) : "")
                );
            });
        },
        // onSearch() {
        //     this.friends.filter(function (friend) {
        //         return friend.name.indexOf(this.searchTextValue) !== -1;
        //     });
        // },
        openChat(friend) {
            console.log(this.CheckChatIsFull)
            setTimeout(this.scrollToEnd, 300)
            this.friends.forEach(
                friend => (friend.session ? (friend.session.open = false) : "")
            );
            this.isActive = true;
            this.active_window = Object.assign({}, this.active_window, {...friend});
            if (friend.session) {
                this.session = Object.assign({}, friend.session, {...friend.session});
                friend.session.open = true;
                friend.session.unreadCount = 0;
            } else {
                this.createSession(friend);
            }

        },
        createSession(friend) {
            axios.post("/session/create", {friend_id: friend.id}).then(res => {
                (friend.session = res.data.data), (friend.session.open = true);
            });
        },
        listenForEverySession(friend) {
            Echo.private(`chat.${friend.session.id}`).listen(
                "PrivateChatEvent",
                e => (friend.session.open ? "" : friend.session.unreadCount++)
            );
        }
    },
    created() {
        this.getFriends();
        Echo.channel("Chat").listen("ChatSessionEvent", e => {
            let friend = this.friends.find(friend => friend.id == e.session_by);
            friend.session = e.session;
            this.listenForEverySession(friend);
        });

        Echo.join(`Chat`)
            .here(users => {
                this.friends.forEach(friend => {
                    users.forEach(user => {
                        if (user.id == friend.id) {
                            friend.online = true;
                        }
                    });
                });
            })
            .joining(user => {
                this.friends.forEach(
                    friend => (user.id == friend.id ? (friend.online = true) : ""),
                );
            })
            .leaving(user => {
                this.friends.forEach(
                    friend => (user.id == friend.id ? (friend.online = false) : ""),
                );
                this.friends.forEach(
                    friend => (user.id == friend.id ? (
                        axios.post(`/last_visit/${friend.id}/`)
                            .then(response => (console.log(response))) //this.ilast_logout_date
                    ) : ""),
                );
            });
    },
    components: {ChatForm}
};
</script>
