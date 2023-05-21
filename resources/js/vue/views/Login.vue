<template>
    <div class="container">
        <h2>Login</h2>
        <form @submit.prevent="login">
            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" v-model="email" class="form-control" required type="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" v-model="password" class="form-control" required type="password">
            </div>
            <button class="btn btn-dark mt-3 w-100" type="submit">Login</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: ''
        };
    },
    methods: {
        login() {
            console.log('Submitted login');
            this.$axios.post('/api/login', {
                email: this.email,
                password: this.password
            })
                .then(response => {
                    console.log({response});
                    const token = response.data.token;
                    localStorage.setItem('token', token);
                    this.$router.push('/admin');
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>
