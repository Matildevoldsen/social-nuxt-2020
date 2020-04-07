<template>
  <form class="box m-t-50" @submit.prevent="submit">
    <h1 class="title">Sign In</h1>
    <b-field label="Name">
      <b-input type="text" minlength="2" maxlength="50" required v-model="form.name"/>
    </b-field>
    <b-field label="E-mail Address">
      <b-input minlength="2" type="email" required v-model="form.email"/>
    </b-field>
    <b-field label="Password">
      <b-input type="password" required v-model="form.password" password-reveal/>
    </b-field>
    <b-field label="Confirm Password">
      <b-input type="password" required v-model="form.password_confirmation" password-reveal/>
    </b-field>
    <p>Already got a user? Please sign in <n-link to="/auth/signin">here</n-link></p>
    <hr/>
    <b-button type="is-primary">Sign In</b-button>
  </form>
</template>
<script>
  export default {
    data() {
      return {
        form: {
          name: '',
          email: '',
          password: '',
          password_confirmation: ''
        }
      }
    },
    methods: {
      submit() {

      }
    }
  }
</script>
