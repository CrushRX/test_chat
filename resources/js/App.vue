<template>
    <div class="container">
        <div class="chat-container">
            <ChatContainer :user_message="user_message" :user_login="user_login" @user_message="getMessage" :clearFields="clearFields"></ChatContainer>
        </div>
        <div class="login-field">
            <LoginContainer :user_login="user_login" @user_login="getLogin"></LoginContainer>
        </div>
    </div>
</template>

<script>
import ChatContainer from "./components/ChatContainer.vue";
import LoginContainer from "./components/LoginField.vue";

export default {
    name: "chat",
    components: {LoginContainer, ChatContainer},
    data() {
        return {
            user_message: null,
            user_login: null
        };
    },
    methods: {
        getLogin(child_login)
        {
            this.user_login = child_login
        },
        getMessage(child_message)
        {
            this.user_message = child_message
        },
        clearFields()
        {
            this.user_login = null
            this.user_message = null
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
