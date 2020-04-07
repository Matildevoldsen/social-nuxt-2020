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

    <template slot="end">
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
   <!-- <template>
      <b-navbar-dropdown label="Name">
        <b-navbar-item href="#">
          Edit Profile
        </b-navbar-item>
        <b-navbar-item href="#">
          Sign Out
        </b-navbar-item>
      </b-navbar-dropdown>
    </template> -->
  </b-navbar>
</template>
