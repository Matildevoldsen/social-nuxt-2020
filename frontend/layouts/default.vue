<template>
  <div class="container">
    <AppNav />
    <nuxt />
  </div>
</template>
<script>
  import AppNav from './partials/AppNav'
  export default {
    components: {
      AppNav
    }
  }
</script>
<style>
  .m-t-50 {
    margin-top: 50px;
  }
</style>
