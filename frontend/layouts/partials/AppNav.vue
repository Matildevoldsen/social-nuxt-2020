<template>
  <b-navbar>
    <template slot="brand">
      <b-navbar-item tag="router-link" :to="{ path: '/' }">
        Social Network
      </b-navbar-item>
    </template>
    <template slot="start">
      <b-navbar-item href="#">
        Home
      </b-navbar-item>
    </template>

    <template slot="end" v-if="$auth.loggedIn == false">
      <b-navbar-item tag="div">
        <div class="buttons">
          <n-link to="/auth/signup" class="button is-primary">
            <strong>Sign up</strong>
          </n-link>
          <n-link to="/auth/signin" class="button is-light">
            Log in
          </n-link>
        </div>
      </b-navbar-item>
    </template>
    <template slot="end" v-if="$auth.loggedIn == true">
      <b-navbar-dropdown :label="$auth.user.name">
        <b-navbar-item href="#">
          Edit Profile
        </b-navbar-item>
        <hr class="navbar-divider">
        <b-navbar-item @click="signOut" href="#">
          Sign Out
        </b-navbar-item>
      </b-navbar-dropdown>

    </template>
  </b-navbar>
</template>
<script>
  export default {
    methods: {
      async signOut() {
        await this.$auth.logout();

        this.$router.replace({name: "index"});
      }
    }
  }
</script>
