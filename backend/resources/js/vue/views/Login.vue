<template>
    <div class="container">
      <h2>Login</h2>
      <form @submit.prevent="login">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" v-model="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" v-model="password" required>
        </div>
        <button type="submit" class="btn btn-dark mt-3 w-100">Login</button>
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
          console.log(response.data);
          console.log({response});
          const token = response.data.token;
          localStorage.setItem('token', token);
          this.$router.push('/admin');
        })
        .catch(error => {
          console.log(error);
          // handle error response here
        });
      }
    }
  };
  </script>
  