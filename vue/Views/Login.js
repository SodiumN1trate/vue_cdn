const Login = Vue.component('Login', {
    template: `<div><h1 style="color:red;"> {{ sharedState.error }} </h1> <form @submit.prevent><input v-model="privateState.form.email" type="email" name="email"><input v-model="privateState.form.password" type="password" name="password"><button @click="userLogin">Pieslēgties</button></form></div>`,
    data: function () {
        return {
            privateState: {
                form: {
                    email: "",
                    password: ""
                },
            },
            sharedState: store.state
        }
    },
    methods: {
        userLogin: function () {
            store.login(this.privateState.form).then(() => {})
        }
    }
})
