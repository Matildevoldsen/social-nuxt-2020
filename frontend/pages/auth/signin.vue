<template>
    <form class="box m-t-50" @submit.prevent="submit">
      <b-notification type="is-danger" v-if="errors">
        {{ errors }}
      </b-notification>
      <h1 class="title">Sign In</h1>
      <b-field label="E-mail Address">
        <b-input type="email" required v-model="form.email"/>
      </b-field>
      <b-field label="Password">
        <b-input type="password" required v-model="form.password" password-reveal/>
      </b-field>
      <p>Haven't signed up yet? Please sign up <n-link to="/auth/signup">here</n-link></p>
      <hr/>
      <b-button @click="submit" type="is-primary">Sign In</b-button>
    </form>
</template>
<script>
  export default {
    data() {
      return {
        form: {
          email: '',
          password: ''
        },
        errors: null
      }
    },
    methods: {
      async submit() {
        try {
          await this.$axios.$get('/sanctum/csrf-cookie');
          await this.$auth.loginWith('local', { data: this.form })

          this.$router.replace({ name: 'index' });
        } catch (e) {
          this.errors = 'Could not sign you with those credentials.'
        }
      }
    }
  }
</script>
