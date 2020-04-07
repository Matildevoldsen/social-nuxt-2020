<template>
    <form class="box m-t-50" @submit.prevent="submit">
      <h1 class="title">Sign In</h1>
      <b-field label="E-mail Address">
        <b-input type="email" required v-model="form.email"/>
      </b-field>
      <b-field label="Password">
        <b-input type="password" required v-model="form.password" password-reveal/>
      </b-field>
      <p>Haven't signed up yet? Please sign up <n-link to="/auth/signup">here</n-link></p>
      <hr/>
      <b-button type="is-primary">Sign In</b-button>
    </form>
</template>
<script>
  export default {
    data() {
      return {
        form: {
          email: '',
          password: ''
        }
      }
    },
    methods: {
      submit() {

      }
    }
  }
</script>
