<template>
    <p class="login-name">Введите логин</p>
    <input v-model="user_login" @change="setLogin" class="login-input">
</template>

<script>
export default {
    name: "LoginContainer",
    props:['user_login'],
    components: {},
    methods: {
        setLogin()
        {
            this.$emit('user_login', this.user_login)
        }
    },
    mounted() {
        console.log('Component mounawdted.')
    }
}
</script>
